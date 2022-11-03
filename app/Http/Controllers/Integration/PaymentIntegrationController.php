<?php

namespace App\Http\Controllers\Integration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Integrations\PaymentIntegrationModel;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Auth;
use Validator;


class PaymentIntegrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function paymentIntegration()
    {
        $data = ['page' => 'payment-integration'];

        return view('App.Integration.payment', $data);

    }

    public function createPaymentIntegration(Request $request)
    {
       try {

            $validator = $this->validator($request->all());
            if ($validator->fails()) {
                $message = $validator->errors()->all();
                foreach ($message as $messages) {
                    return response()->json(['message' => $messages], 400);
                }

            }

            $paymentIntegration = new PaymentIntegrationModel();
            $paymentIntegration->user_id = Auth::id();
            $paymentIntegration->type = "payment";
            $paymentIntegration->service = $request->service;
            $paymentIntegration->pub_key = $request->pub_key;
            $paymentIntegration->sec_key = $request->sec_key;
            $paymentIntegration->is_active = true;
            $paymentIntegration->save();
            $message = "Integration Added Successfully";
            return response()->json(["message" => $message], 200);
       } catch (Exception $error) {
            Log::info("Integration Payment Error". $error->getMessage());
       }

    }



    public function updatePaymentIntegration(Request $request)
    {
       try {
            $paymentIntegration = PaymentIntegrationModel::where('id', $request->id)->first();
            if(!$paymentIntegration){
                $message = "Integration not found!";
                return response()->json(["message" => $message], 400);
            }

            $paymentIntegration->type = "payment";
            $paymentIntegration->service = $request->service;
            $paymentIntegration->pub_key = $request->pub_key ? $request->pub_key: $paymentIntegration->pub_key;
            $paymentIntegration->sec_key = $request->sec_key ? $request->sec_key : $paymentIntegration->sec_key;
            $paymentIntegration->is_active = true;
            $paymentIntegration->save();
            $message = "Integration Updated Successfully";
            return response()->json(["message" => $message], 200);
       } catch (Exception $error) {
            Log::info("Integration Payment Error". $error->getMessage());
       }

    }

    public function deletePaymentIntegration(Request $request)
    {
       try {
            $paymentIntegration = PaymentIntegrationModel::where('id', $request->id)->first();
            if(!$paymentIntegration){
                $message = "Integration not found!";
                return response()->json(["message" => $message], 400);
            }
            $paymentIntegration->delete();
            $message = "Integration Deleted Successfully";
            return response()->json(["message" => $message], 200);
       } catch (Exception $error) {
            Log::info("Integration Payment Error". $error->getMessage());
       }

    }

    protected function validator(array $data) {
        return Validator::make($data, [
            'service' => 'required|string',
            'pub_key' => 'required|string|unique:users',
            'sec_key' => 'required|string|unique:users',
        ]);
	}



}
