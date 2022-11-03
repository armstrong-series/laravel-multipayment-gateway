<?php

namespace App\Models\Integrations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentIntegrationModel extends Model
{
    use HasFactory;

    protected $table = "payment_integration";
}
