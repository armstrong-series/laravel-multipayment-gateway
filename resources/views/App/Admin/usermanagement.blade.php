@extends('Layout.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <!-- Single Contact Area -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card mb-30">
                        <div class="card-body pb-0">
                            <div class="single-conatct-area">
                                <div class="conatct-thumb">
                                    <img src="img/member-img/1.png" alt="">
                                </div>
                                <!-- Member Info -->
                                <div class="member-info text-center">
                                    <h6>Jhon Deo</h6>
                                    <p class="mb-1">jhon.deo58@gmail.com</p>
                                    <p class="text-dark font-14">+1258964936</p>
                                </div>
                                <!-- Icon -->
                                <div class="contact-social-icon d-flex justify-content-between px-4">
                                    <a href="#" data-toggle="tooltip" title="Facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Dribbble">
                                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Instagram">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <!-- Footer -->
                                <div class="contact-footer d-flex justify-content-between">
                                    <a href="#">Project</a>
                                    <a href="#">See Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Contact Area -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card mb-30">
                        <div class="card-body pb-0">
                            <div class="single-conatct-area">
                                <div class="conatct-thumb">
                                    <img src="img/member-img/2.png" alt="">
                                </div>
                                <!-- Member Info -->
                                <div class="member-info text-center">
                                    <h6>Jhon Deo</h6>
                                    <p class="mb-1">jhon.deo58@gmail.com</p>
                                    <p class="text-dark font-14">+1258964936</p>
                                </div>
                                <!-- Icon -->
                                <div class="contact-social-icon d-flex justify-content-between px-4">
                                    <a href="#" data-toggle="tooltip" title="Facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Dribbble">
                                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Instagram">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <!-- Footer -->
                                <div class="contact-footer d-flex justify-content-between">
                                    <a href="#">Project</a>
                                    <a href="#">See Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>

          @include('Includes.footer')
    </div>
</div>
@endsection
