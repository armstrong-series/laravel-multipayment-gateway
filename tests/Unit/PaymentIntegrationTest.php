<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling;

class PaymentIntegrationTest extends TestCase
{
    use InteractsWithExceptionHandling;

    /**
     * A basic unit test example.
     *
     * @return void
     */

     function test_create_payment_integration():void{

        $this->withoutExceptionHandling();

        $response =  $this->post('/integration/payment/create');
        $response->assertStatus($response);
    }
}
