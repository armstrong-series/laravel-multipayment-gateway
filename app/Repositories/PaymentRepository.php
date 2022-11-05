<?php
namespace App\Repositories;

use App\Interfaces\PaymentInterface;
use App\Models\Payment\PaymentModel;
use App\Models\Integrations\PaymentIntegrationModel;
use Illuminate\Support\Facades\Auth;

class PaymentRepository implements PaymentInterface
{


    public function paymentIntegrations()
    {
       return PaymentIntegrationModel::where('user_id', Auth::id())->get();
    }

    public function createPaymentIntegration(array $paymentData)
    {

        $paymentIntegration = new PaymentIntegrationModel();
        $paymentIntegration->user_id = Auth::id();
        $paymentIntegration->type = "payment";
        $paymentIntegration->service = $paymentData['service'];
        $paymentIntegration->stripe_pub_key = $paymentData['stripe_pub_key'];
        $paymentIntegration->stripe_sec_key = $paymentData['stripe_sec_key'];
        $paymentIntegration->paystack_pub_key = $paymentData['paystack_pub_key'];
        $paymentIntegration->paystack_sec_key = $paymentData['paystack_sec_key'];
        $paymentIntegration->flutterwave_pub_key = $paymentData['flutterwave_pub_key'];
        $paymentIntegration->flutterwave_sec_key = $paymentData['flutterwave_sec_key'];
        $paymentIntegration->is_active = $paymentData['status'];
        $paymentIntegration->save();
        return "Integration Added Successfully";

    }


    public function updatePaymentIntegration(int $paymentData)
    {
        $paymentIntegration = PaymentIntegrationModel::where('id', $paymentData)->first();

        $paymentIntegration->type = "payment";
        $paymentIntegration->service = ($paymentData['service']) ? $paymentData['service'] : $paymentIntegration['service'];
        $paymentIntegration->stripe_pub_key = ($paymentData['stripe_pub_key']) ? $paymentData['stripe_pub_key'] : $paymentIntegration->stripe_pub_key;
        $paymentIntegration->stripe_sec_key = ($paymentData['stripe_sec_key']) ?  $paymentData['stripe_sec_key'] : $paymentIntegration->stripe_sec_key;
        $paymentIntegration->paystack_pub_key = ($paymentData['paystack_pub_key'])? $paymentData['paystack_pub_key'] : $paymentIntegration->paystack_pub_key;
        $paymentIntegration->paystack_sec_key = $paymentData['paystack_sec_key'];
        $paymentIntegration->flutterwave_pub_key = $paymentData['flutterwave_pub_key'];
        $paymentIntegration->flutterwave_sec_key = $paymentData['lutterwave_sec_key'];
        $paymentIntegration->is_active = $paymentData['status'];
        $paymentIntegration->save();
        return "Integration updated successfully";

    }


    public function deletePaymentIntegration(int $paymentData)
    {
        $paymentIntegration = PaymentIntegrationModel::where('id', $paymentData)->first();
        $paymentIntegration->delete();
        return "Integration deleted";

    }
}



