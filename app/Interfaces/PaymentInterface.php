<?php

namespace App\Interfaces;

use App\Models\Integrations\PaymentIntegrationModel as PaymentIntegration;



interface PaymentInterface
{

    public function integrateServicePayment(array $paymentId): PaymentIntegration;
    public function deleteServicePayment(int $paymentId): PaymentIntegration;
    public function changeServicePayment(int $paymentId): PaymentIntegration;
}
