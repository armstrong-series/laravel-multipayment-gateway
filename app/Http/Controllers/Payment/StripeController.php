<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Exception\CardException;
use Stripe\StripeClient;
use App\Models\Payment\PaymentModel;
use App\Models\Integrations\PaymentIntegrationModel;
use App\Helpers\Payment;
use Illuminate\Support\Facades\Auth;
use Exception;
use Validator;
use Illuminate\Support\Facades\Session;

class StripeController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function makePayment(Request $request)
    {


        $payment = PaymentIntegrationModel::where('user_id', Auth::id(), 'service', 'stripe')->first();
        if ($payment) {
            \Stripe\Stripe::setApiKey(Payment::STRIPE_SEC_KEY);
            $customer = \Stripe\Customer::create(array(
                "email" => Auth::user()->email,
                "name" => Auth::user()->name,
                "source" => $request->stripeToken
            ));

            \Stripe\Charge::create([
                "amount" => $request->amount * 100,
                "currency" => "usd",
                "customer" => $customer->id,
                "description" => "Easypay by Unstack",
            ]);

            Session::flash('success', 'Payment successful!');
            return back();;
        } else {
            $message = "Payment Service not found!";
            return response()->json(["message" => $message], 400);
        }
    }




    public function paymentSuccess()
    {
    }
}
