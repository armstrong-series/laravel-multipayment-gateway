<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_integration', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('type')->nullable();
            $table->string('service')->nullable();
            $table->string('api_key')->nullable();
            $table->string('access_token')->nullable();
            $table->string('stripe_pub_key')->nullable();
            $table->string('stripe_sec_key')->nullable();
            $table->string('paystack_pub_key')->nullable();
            $table->string('paystack_sec_key')->nullable();
            $table->string('flutterwave_pub_key')->nullable();
            $table->string('flutterwave_sec_key')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_integration');
    }
};
