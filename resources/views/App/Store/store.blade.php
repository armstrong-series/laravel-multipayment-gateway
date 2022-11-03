@extends('Layout.master')


@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Product Edit area Start -->
        <div class="container-fluid">
            <div class="row">
                <!-- Single product -->
                <div class="col-sm-6 col-lg-6 col-xl-3">
                    <div class="single-product-item mb-30">
                        <div class="product-card">
                            <a class="product-thumb" href="product-details.html"><img src="{{ asset('management/img/shop-img/1.png') }}" alt="Product"></a>
                            <div class="ribbon ribbon-bookmark ribbon-right ribbon-danger">20% OFF</div>
                            <!-- Product -->
                            <h3 class="product font-17 mb-15 mt-20">Home Base</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="product-price mb-0 mt-0">$20.00</h4>
                                <div class="div">
                                    <div class="badge badge-success badge-pill">In stock</div>
                                </div>
                            </div>
                            <p class="mt-15 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, mollitia?</p>

                            <div class="product-buttons">
                                <a class="btn btn-rounded btn-light mt-30" href="#">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single product -->
                <div class="col-sm-6 col-lg-6 col-xl-3">
                    <div class="single-product-item mb-30">
                        <div class="product-card">
                            <a class="product-thumb" href="product-details.html"><img src="{{ asset('management/img/shop-img/2.png') }}" alt="Product"></a>
                            <!-- Product -->
                            <h3 class="product font-17 mb-15 mt-20">Home Controller</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="product-price mb-0 mt-0">$60.00</h4>
                                <div class="div">
                                    <div class="badge badge-success badge-pill">In stock</div>
                                </div>
                            </div>
                            <p class="mt-15 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, mollitia?</p>

                            <div class="product-buttons">
                                <a class="btn btn-rounded btn-light mt-30" href="#">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <!-- Footer Area -->
       @include('Includes.footer')
    </div>
</div>
@endsection
