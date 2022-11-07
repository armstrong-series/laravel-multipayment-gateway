@extends('Layout.master')


@section('content')
<!-- Main Page -->
<div class="main-panel" id="product-details">
    <div class="content-wrapper">
        <!-- Product Edit area Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card box-margin">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-7">

                                    <div class="product-gallery">
                                        <img src="{{ asset('management/img/shop-img/product.jpg') }}" alt="">
                                    </div>

                                </div>

                                <!-- Product details column -->
                                <div class="col-lg-4">
                                    <div class="product-name mb-20">
                                        <h3 v-cloak>@{{ product.name }}</h3>
                                        <p v-cloak class="mb-10">@{{ product.description }}</p>

                                        <h4 class="text-primary pb-2 mt-15">Price - $@{{ product.amount }}</h4>
                                    </div>
                                    <form class="pb-4">

                                        <div class="d-flex flex-wrap align-items-center pt-1">
                                            <div v-for="payment in payments">
                                                <div v-cloak v-if="payment.service == 'stripe'">
                                                    <a href="{{ route('product.payment') }}" class="btn btn-primary mr-3">Pay with Stripe</a>
                                                </div>
                                                <div v-cloak v-if="payment.service == 'paystack'">
                                                    <button class="btn btn-primary mr-3" type="button">Pay with Paystack</button>
                                                </div>
                                          </div>
                                    </div>
                                    </form>
                                    <!-- Product panels-->
                                    <div class="accordion" id="productPanels">
                                        <div class="card-">
                                            <h6 class="card-header bg-white accordion-heading single-product mb-0"><a class="text-dark" href="#productInfo" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="productInfo"><i class="fa fa-eercast mr-3 font-16"></i>Product information</a></h6>
                                            <div class="collapse show" id="productInfo" data-parent="#productPanels">
                                                <div class="card-body pb-0 border-bottom">
                                                    <ul class="mb-0">
                                                        <li class="mb-2 text-dark">1. SKU: #5986554256</li>
                                                        <li class="mb-2 text-dark">2. Sneakers from Reebok Classic collection</li>
                                                        <li class="mb-2 text-dark">3. Man-made upper</li>
                                                        <li class="mb-2 text-dark">4. Lace-up closure</li>
                                                        <li class="mb-2 text-dark">5. Brand logo detail hits throughout</li>
                                                        <li class="mb-2 text-dark">6. Soft fabric lining and footbed</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-">
                                            <h6 class="card-header bg-white accordion-heading single-product mb-0"><a class="collapsed text-dark" href="#shippingOptions" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="shippingOptions"><i class="fa fa-cart-plus font-16 mr-3"></i>Shipping options</a></h6>

                                            <div class="collapse" id="shippingOptions" data-parent="#productPanels">
                                                <div class="card-body border-bottom">
                                                    <div class="d-flex justify-content-between border-bottom pb-2">
                                                        <div>
                                                            <div class="text-dark font-weight-bold">Courier</div>
                                                            <div>2 - 4 days</div>
                                                        </div>
                                                        <div class="text-dark">$28.50</div>
                                                    </div>
                                                    <div class="d-flex justify-content-between border-bottom py-2">
                                                        <div>
                                                            <div class="text-dark font-weight-bold">Local shipping</div>
                                                            <div>up to one week</div>
                                                        </div>
                                                        <div class="text-dark">$11.00</div>
                                                    </div>
                                                    <div class="d-flex justify-content-between border-bottom py-2">
                                                        <div>
                                                            <div class="text-dark font-weight-bold">Flat rate</div>
                                                            <div>5 - 7 days</div>
                                                        </div>
                                                        <div class="text-dark">$35.85</div>
                                                    </div>
                                                    <div class="d-flex justify-content-between border-bottom py-2">
                                                        <div>
                                                            <div class="text-dark font-weight-bold">UPS ground shipping</div>
                                                            <div>4 - 6 days</div>
                                                        </div>
                                                        <div class="text-dark">$20.00</div>
                                                    </div>
                                                    <div class="d-flex justify-content-between pt-2">
                                                        <div>
                                                            <div class="text-dark font-weight-bold">Local pickup from store</div>
                                                            <div>5 - 6 days</div>
                                                        </div>
                                                        <div class="text-dark">$10.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-">
                                            <h6 class="card-header bg-white accordion-heading single-product mb-0"><a class="collapsed text-dark" href="#tagCloud" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="tagCloud"><i class="fa fa-tags mr-3 font-16"></i>Tag cloud</a></h6>
                                            <div class="collapse" id="tagCloud" data-parent="#productPanels">
                                                <div class="card-body"><a class="tag-link mr-2 mb-2" href="#">#sports shoes</a><a class="tag-link mr-2 mb-2" href="#">#men's shoes</a><a class="tag-link mr-2 mb-2" href="#">#sneakers</a><a class="tag-link mr-2 mb-2" href="#">#reebok classic</a><a class="tag-link mr-2 mb-2" href="#">#leather shoes</a><a class="tag-link mr-2 mb-2" href="#">#running</a><a class="tag-link mr-2 mb-2" href="#">#dark blue</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="font-18 mt-20">Description :</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla amet magni velit dicta, quia ipsa vero ipsum. Pariatur blanditiis, quia.</p>
                                    <!-- Share product-->
                                    <div class="py-4"><span class="d-inline-block align-middle font-18 text-dark mr-3 mb-2">Share product:</span>
                                        <div class="single-product-icon d-inline-block">
                                            <a class="mr-3 mb-2" href="#"><i class="fa fa-instagram"></i></a>
                                            <a class="mr-3 mb-2" href="#"><i class="fa fa-facebook"></i></a>
                                            <a class="mr-3 mb-2" href="#"><i class="fa fa-twitter"></i></a>
                                            <a class="mr-3 mb-2" href="#"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                    </div>
                                    <!-- Related products (visible md and down)-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <textarea name="" id="product" cols="30" style="display:none;" rows="10">{{ json_encode($product) }}</textarea>
                <textarea name="" id="payments" cols="30" style="display:none;" rows="10">{{ json_encode($payments) }}</textarea>

            </div>
        </div>


        @include('Includes.footer')
    </div>
</div>
@endsection


@section('script')
    <script src="{{ asset('app/store-details.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-stripe-checkout@3.5.15/dist/index.min.js"></script>
@endsection
