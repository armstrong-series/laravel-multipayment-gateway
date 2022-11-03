@extends('Layout.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid" id="admin">
            <div class="row">
                <div class="col-12 col-sm-6 col-xl">
                    <!-- Card -->
                    <div class="card box-margin">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <!-- Title -->
                                    <h6 class="text-uppercase font-14">
                                        Payment Integrations
                                    </h6>

                                    <!-- Heading -->
                                    <span class="font-24 text-dark mb-0">
                                        $2500
                                    </span>
                                </div>

                                <div class="col-auto">
                                    <!-- Icon -->
                                    <div class="icon">
                                        <img src="{{ asset('management/img/bg-img/icon-8.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl">
                    <!-- Card -->
                    <div class="card box-margin">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <!-- Title -->
                                    <h6 class="font-14 text-uppercase">
                                        Users
                                    </h6>
                                    <!-- Heading -->
                                    <span class="font-24 text-dark mb-0">
                                        663.5
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <!-- Icon -->
                                    <div class="icon">
                                        <img src="img/bg-img/icon-9.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl">
                    <!-- Card -->
                    <div class="card box-margin">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <!-- Title -->
                                    <h6 class="font-14 text-uppercase">
                                        Progress
                                    </h6>
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto">
                                            <!-- Heading -->
                                            <span class="font-24 text-dark mr-2">
                                                84.5%
                                            </span>
                                        </div>
                                        <div class="col">
                                            <!-- Progress -->
                                            <div class="progress h-5">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <!-- Icon -->
                                    <div class="icon">
                                        <img src="img/bg-img/icon-10.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl">
                    <!-- Card -->
                    <div class="card box-margin">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <!-- Title -->
                                    <h6 class="font-14 text-uppercase">
                                        Cost/Unit
                                    </h6>
                                    <!-- Heading -->
                                    <span class="font-24 text-dark">
                                        $7.50
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <!-- Icon -->
                                    <div class="icon">
                                        <img src="img/bg-img/icon-11.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / .row -->

            <div class="row">
                <div class="col-md-6 height-card box-margin">
                    <div class="card">
                        <div class="card-header border-bottom-0">Featured</div>
                        <div class="card-body">
                            <h5>Welcome  Back </h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="{{ route('user.dashboard') }}" class="btn btn-primary">Dashboard</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 height-card box-margin">
                    <div class="card">
                        <div class="card-header border-bottom-0">Quote</div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ratione similique quidem voluptate fugiat magnam.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
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
