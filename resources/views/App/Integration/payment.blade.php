@extends('Layout.master')
<title>Integration |Payment</title>

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Table area Start -->
        <div class="container-fluid" id="paymentIntegration">

            <header>
                <div class="col-sm-6 col-md-4 col-lg-3 float-right text-right p-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Create Payment
                    </button>
                </div>
            </header>
            <div class="row">
                <div class="col-lg-9">
                    <div class="card box-margin">
                        <div class="card-body">
                            <div class="shortcode-html">
                                <!-- Table Striped Rows -->
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Stripe</td>
                                                <td>
                                                    <span class="u-label bg-warning text-white">Active</span>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Table Striped Rows -->
                            </div>

                        </div>
                    </div>
                </div>

            </div>


                <div class="card-body">

                    <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content animated bounceInRight">
                                <div class="modal-body">

                                    <div class="form-group">
                                        <h5 class="">Choose Payment Method</h5>
                                        <select name="" id="" class="form-control" v-model="integration.payment">
                                            <option value="">Choose</option>
                                            <option value="stripe">Stripe &nbsp;<i class="fab fa-stripe"></i></option>
                                            <option value="paystack">Paystack</option>
                                            <option value="flutterwave">Flutterwave</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Proceed</button>
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

@section('script')

@endsection
