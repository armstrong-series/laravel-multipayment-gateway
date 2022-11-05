@extends('Layout.master')
<title>Payment</title>

@section('content')
    <div class="main-panel" id="payment-checkout">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card box-margin">
                            <div class="card-body">


                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="payment-area">
                                            <div class="nav-tabs-top">
                                                <ul class="nav nav-tabs border-none">
                                                    <li class="nav-item">
                                                        <a class="nav-link active btn btn-primary" data-toggle="tab"
                                                            href="#payment-methods-cc">
                                                            <img class="card-visa-thumb"
                                                                src="{{ asset('management/img/shop-img/card.png') }}"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn btn-primary" data-toggle="tab"
                                                            href="#payment-methods-visa">
                                                            <img class="card-visa-thumb"
                                                                src="{{ asset('management/img/shop-img/visa-2.png') }}"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <form action="{{ route('user.payment.stripe') }}" id="payment-form"
                                                        class="payment-validation" method="POST" data-cc-on-file="false"
                                                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}">
                                                        @csrf
                                                        <div class="tab-pane card-body fade show active">

                                                            <div class="form-group">
                                                                <label>
                                                                    <span class="form-label text-dark mb-0">Card
                                                                        Number</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="XXXX-XXXX-XXXX-XXXX">
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="form-label text-dark">Card Holder</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Name On Card">
                                                            </div>

                                                            <div class="form-row">
                                                                <div class="col expiration required">
                                                                    <label class="form-labe text-dark">Exp. Month</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="MM">
                                                                </div>
                                                                <div class="col expiration required">
                                                                    <label class="form-labe text-dark">Exp. Year</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="YYY">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <label class="form-label text-dark">CVC</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="XXX">
                                                            </div>
                                                        </div>
                                                        <div class="mt-30">
                                                            <button type="submit" class="btn btn-primary">
                                                                Pay Now &nbsp;→
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <textarea name="" id="stripePayment" cols="30" style="display:none;" rows="10">{{ route('user.payment.stripe') }}</textarea>

            </div>
        </div>

        @include('Includes.footer')
    </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('app/payment/payment.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>


    <script type="text/javascript">
        $(function() {
            let $form = $(".payment-validation");
            $('form.payment-validation').bind('submit', function(e) {
                let $form = $(".payment-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });


            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide').find('.alert').text(response.error.message);
                } else {
                    let token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    @endsection
