@extends('Layout.master')
<title>Integration |Payment</title>

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Table area Start -->
        <div class="container-fluid" id="paymentIntegration">

            <header>
                <div v-cloak class="col-sm-6 col-md-4 col-lg-3 float-right text-right p-3" v-if="payments < 1">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Create Payment
                    </button>
                </div>
            </header>
            <div class="row">
                <div class="col-lg-10">
                    <div class="card box-margin">
                        <div class="card-body">
                            <div class="shortcode-html">
                                <!-- Table Striped Rows -->
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Service</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr v-for="(payment, index) in payments">
                                                <td>@{{ payment.service }}</td>
                                                <td>
                                                   <div v-cloak v-if="payment.is_active === 1">
                                                        <span class="badge badge-primary badge-pill">
                                                            Active
                                                        </span>
                                                   </div>
                                                   <div v-if="payment.is_active === 0">
                                                    <span v-cloak class="badge badge-info badge-pill">
                                                        Inactive
                                                    </span>
                                               </div>
                                                </td>

                                                <td>
                                                    <div class="btn-group mb-2 mr-2">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#changePaymentService" @click="selectPaymentService(index)">Change Service</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0);" @click="deletePayment(index)">Delete Service</a>
                                                        </div>
                                                    </div>
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
                        @csrf
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content animated bounceInRight">
                                <div class="modal-body">

                                    <div class="form-group">
                                        <h6 class="">Payment &nbsp;<i class="fas fa-wallet"></i></h5>
                                        <select name="" id="" class="form-control" v-model="payment.service">
                                            <option value="">Choose</option>
                                            <option value="stripe">Stripe</option>
                                            <option value="paystack">Paystack</option>
                                            <option value="flutterwave">Flutterwave</option>
                                        </select>
                                    </div>

                                    <div v-if="payment.service =='stripe'">
                                        <div class="form-group">
                                            <p class="">Stripe Public Key</p>
                                           <input type="text" class="form-control" v-model="payment.stripe_pub_key" placeholder="Enter Stripe Public Key">
                                        </div>

                                        <div class="form-group">
                                            <p class="">Stripe Secret Key</p>
                                           <input type="text" class="form-control" v-model="payment.stripe_sec_key" placeholder="Enter Stripe Secret Key">
                                        </div>
                                        <div class="form-group">
                                            <p>Status</p>
                                            <select name="" id="" class="form-control" v-model="payment.status">
                                                <option value="">Choose</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div v-if="payment.service =='paystack'">
                                        <div class="form-group">
                                            <p class="">Paystack Public Key</p>
                                           <input type="text" class="form-control" v-model="payment.paystack_pub_key" placeholder="Enter Paystack Public Key">
                                        </div>

                                        <div class="form-group">
                                            <p class="">Paystack Secret Key</p>
                                           <input type="text" class="form-control" v-model="payment.paystack_sec_key" placeholder="Enter Paystack Secret Key">
                                        </div>

                                        <div class="form-group">
                                            <p>Status</p>
                                            <select name="" id="" class="form-control" v-model="payment.status">
                                                <option value="">Choose</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div v-if="payment.service =='flutterwave'">
                                        <div class="form-group">
                                            <p class="">Flutterwave Public Key</p>
                                           <input type="text" class="form-control" v-model="payment.flutterwave_pub_key" placeholder="Enter Flutterwave Public Key">
                                        </div>

                                        <div class="form-group">
                                            <p class="">Flutterwave Secret Key</p>
                                           <input type="text" class="form-control" v-model="payment.flutterwave_sec_key" placeholder="Enter Flutterwave Secret Key">
                                        </div>
                                        <div class="form-group">
                                            <p>Status</p>
                                            <select name="" id="" class="form-control" v-model="payment.status">
                                                <option value="">Choose</option>
                                                <option value="1">Enabled</option>
                                                <option value="0">Disabled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" v-if="!isLoading" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="button" v-if="!isLoading" @click="createPayment()" class="btn btn-primary">Proceed</button>
                                    <div v-if="isLoading" class="spinner-border text-success" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal inmodal" id="changePaymentService" tabindex="-1" role="dialog" aria-hidden="true">
                    @csrf
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content animated bounceInRight">
                            <div class="modal-body">

                                <div class="form-group">
                                    <h6 class="">Payment &nbsp;<i class="fas fa-wallet"></i></h5>
                                    <select name="" id="" class="form-control" v-model="paymentEdit.service">
                                        <option value="">Choose</option>
                                        <option value="stripe">Stripe</option>
                                        <option value="paystack">Paystack</option>
                                        <option value="flutterwave">Flutterwave</option>
                                    </select>
                                </div>

                                <div v-if="paymentEdit.service =='stripe'">
                                    <div class="form-group">
                                        <p class="">Stripe Public Key</p>
                                       <input type="text" class="form-control" v-model="paymentEdit.stripe_pub_key" placeholder="Enter Stripe Public Key">
                                    </div>

                                    <div class="form-group">
                                        <p class="">Stripe Secret Key</p>
                                       <input type="text" class="form-control" v-model="paymentEdit.stripe_sec_key" placeholder="Enter Stripe Secret Key">
                                    </div>
                                    <div class="form-group">
                                        <p>Status</p>
                                        <select name="" id="" class="form-control" v-model="paymentEdit.status">
                                            <option value="">Choose</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div v-if="paymentEdit.service =='paystack'">
                                    <div class="form-group">
                                        <p class="">Paystack Public Key</p>
                                       <input type="text" class="form-control" v-model="paymentEdit.paystack_pub_key" placeholder="Enter Paystack Public Key">
                                    </div>

                                    <div class="form-group">
                                        <p class="">Paystack Secret Key</p>
                                       <input type="text" class="form-control" v-model="paymentEdit.paystack_sec_key" placeholder="Enter Paystack Secret Key">
                                    </div>

                                    <div class="form-group">
                                        <p>Status</p>
                                        <select name="" id="" class="form-control" v-model="paymentEdit.status">
                                            <option value="">Choose</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div v-if="paymentEdit.service =='flutterwave'">
                                    <div class="form-group">
                                        <p class="">Flutterwave Public Key</p>
                                       <input type="text" class="form-control" v-model="paymentEdit.flutterwave_pub_key" placeholder="Enter Flutterwave Public Key">
                                    </div>

                                    <div class="form-group">
                                        <p class="">Flutterwave Secret Key</p>
                                       <input type="text" class="form-control" v-model="paymentEdit.flutterwave_sec_key" placeholder="Enter Flutterwave Secret Key">
                                    </div>
                                    <div class="form-group">
                                        <p>Status</p>
                                        <select name="" id="" class="form-control" v-model="paymentEdit.status">
                                            <option value="">Choose</option>
                                            <option value="1">Enabled</option>
                                            <option value="0">Disabled</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" v-if="!isLoading" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" v-if="!isLoading" @click="changePaymentService()" class="btn btn-primary">Proceed</button>
                                <div v-if="isLoading" class="spinner-border text-success" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <textarea name="" id="createPayment" cols="30" rows="10" style="display:none;">{{ route('user.integrations.create') }}</textarea>
                <textarea name="" id="deletePayment" cols="30" rows="10" style="display:none;">{{ route('user.integrations.delete') }}</textarea>
                <textarea name="" id="updatePayment" cols="30" rows="10" style="display:none;">{{ route('user.integrations.update') }}</textarea>
                <textarea name="" id="payments" cols="30" rows="10" style="display:none;">{{ json_encode($payments) }}</textarea>


        </div>

        @include('Includes.footer')
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('app/integration-payment.js') }}" type="text/javascript"></script>
@endsection
