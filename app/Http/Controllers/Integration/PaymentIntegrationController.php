<?php

namespace App\Http\Controllers\Integration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use App\Repositories\PaymentRepository;
use Illuminate\Support\Facades\Validator;


class PaymentIntegrationController extends Controller
{
    private PaymentRepository $paymentRepository;
    public function __construct(PaymentRepository $paymentRepository)
    {
        $this->middleware('auth');
        $this->paymentRepository = $paymentRepository;
    }



    public function paymentIntegration()
    {

        $data = [
            'page' => 'payment-integration',
            'payments' => $this->paymentRepository->paymentIntegrations()
        ];

        return view('App.Integration.payment', $data);
    }

    public function createPaymentIntegration(Request $request)
    {
        try {

            $validator = $this->validator($request->all());
            if ($validator->fails()) {
                $message = "Please add a payment service!";
                return response()->json(['message' => $message], 400);
            }
            $response = $this->paymentRepository->createPaymentIntegration($request->all());
            return response()->json(["message" => $response, "payment" => $this->paymentRepository], 200);
        } catch (Exception $error) {
            Log::info("Integration Payment Error" . $error->getMessage());
        }
    }


    public function updatePaymentIntegration(Request $request)
    {
        try {

            $paymentIntegration = $this->paymentRepository->updatePaymentIntegration($request->id);
            if (!$paymentIntegration) {
                $message = "Integration not found!";
                return response()->json(["message" => $message], 400);
            }
            return response()->json(["message" => $paymentIntegration], 200);
        } catch (Exception $error) {
            Log::info("Integration Payment Error" . $error->getMessage());
        }
    }

    public function deletePaymentIntegration(Request $request)
    {

        try {
            $paymentIntegration = $this->paymentRepository->deletePaymentIntegration($request->id);
            if (!$paymentIntegration) {
                $message = "Integration not found!";
                return response()->json(["message" => $message], 400);
            }
            return response()->json(["message" => $paymentIntegration], 200);
        } catch (Exception $error) {
            Log::info("Integration Payment Error" . $error->getMessage());
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'service' => 'required|string',
            'status' => 'required|boolean'
        ]);
    }
}
