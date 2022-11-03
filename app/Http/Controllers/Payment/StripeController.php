<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Exception\CardException;
use Stripe\StripeClient;
use App\Models\Payment\PaymentModel;
use App\Helpers\Payment;
use Exception;
use Validator;

class StripeController extends Controller
{
    private $payment;

    public function __construct()
    {
      $this->middleware('auth');
      $this->payment = new StripeClient(Payment::STRIPE_SEC_KEY);
    }



    public function makePayment(Request $request)
    {

            $validator = $this->cardValidation($request->all());
            if ($validator->fails()) {
                $message = $validator->errors()->all();
                foreach ($message as $messages) {
                    return response()->json(['message' => $messages], 400);
                }

            }

            $token = $this->generateStripeToken($request);
            if (!empty($token['error'])) {
                $request->session()->flash('danger', $token['error']);
                return response()->redirectTo('/');
            }
            if (empty($token['id'])) {
                $request->session()->flash('danger', 'Payment failed.');
                return response()->redirectTo('/');
            }

            $charge = $this->createPaymentCharge($token['id'], 2000);
            if (!empty($charge) && $charge['status'] == 'succeeded') {
                $request->session()->flash('success', 'Payment completed.');
            } else {
                $request->session()->flash('danger', 'Payment failed.');
            }
            return response()->redirectTo('/');
    }




    private function generateStripeToken($paymentData)
    {
        $token = null;
        try {
            $token = $this->payment->tokens->create([
                'card' => [
                    'number' => $paymentData['cardNumber'],
                    'exp_month' => $paymentData['month'],
                    'exp_year' => $paymentData['year'],
                    'cvv' => $paymentData['cvv']
                ]
            ]);
        } catch (CardException $cardPaymentError) {
            $token['error'] = $cardPaymentError->getError()->message;
        } catch (Exception $error) {
            $token['error'] = $error->getMessage();
        }
        return $token;
    }


    private function createPaymentCharge($tokenId, $amount)
    {
        $charge = null;
        try {
            $charge = $this->stripe->charges->create([
                'amount' => $amount,
                'currency' => 'usd',
                'source' => $tokenId,
                'description' => 'My first payment'
            ]);
        } catch (Exception $error) {
            $charge['error'] = $error->getMessage();
        }
        return $charge;
    }



    protected function cardValidation(array $data) {
        return Validator::make($data, [
            'fullname' => 'required',
            'cardnumber' => 'required',
            'month' => 'required',
            'year' => 'required',
            'cvv' => 'required',

        ]);
	}
}
