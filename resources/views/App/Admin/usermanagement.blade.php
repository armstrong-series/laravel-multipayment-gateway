@extends('Layout.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid" id="usermanagement">
            <header>
                <div class="col-sm-6 col-md-4 col-lg-3 float-right text-right p-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createUser">
                        Add User
                    </button>
                </div>
            </header>

            <div class="row">

                <div class="col-md-6 col-lg-4 col-xl-3" v-for="(user, index) in users">
                    <div class="card mb-30">
                        <div class="card-body pb-0">
                            <div class="single-conatct-area">
                                <div class="conatct-thumb">
                                    <img src="{{ asset('management/img/member-img/1.png') }}" alt="">
                                </div>
                                <!-- Member Info -->
                                <div class="member-info text-center">
                                    <h6>@{{ user.name }}</h6>
                                    <p class="mb-1">@{{ user.email }}</p>
                                    <p class="text-dark font-14">@{{ user.phone }}</p>
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


                <div class="modal inmodal" id="createUser" tabindex="-1" role="dialog" aria-hidden="true">
                    @csrf
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content animated bounceInRight">
                            <div class="modal-body">


                                <div class="form-group">
                                    <input type="text" class="form-control" v-model="user.name" placeholder="Enter Name">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" v-model="user.email" placeholder="Enter Email">
                                </div>

                                <div class="form-group">
                                    <input type="number" class="form-control" v-model="user.phone" placeholder="Enter Phone Number">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" v-model="user.password" placeholder="Enter Password">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" v-model="user.confirm_password" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <h6 class="">Role</h5>
                                    <select class="form-control" v-model="user.role">
                                        <option value="">Choose</option>
                                        <option value="admin">Admin</option>
                                        <option value="support">Support</option>
                                        <option value="regular">User</option>
                                    </select>
                                </div>



                            </div>

                            <div class="modal-footer">
                                <button type="button" v-if="!isLoading" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button"  @click="addUser()" class="btn btn-primary">Proceed</button>
                                <div v-if="isLoading" class="spinner-border text-success" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>$allUsers

            <textarea name="" id="users" cols="30" rows="10" style="display:none;">{{ json_encode($users) }}</textarea>
            <textarea name="" id="addUser" cols="30" rows="10" style="display:none;">{{ route('admin.user.create') }}</textarea>
            <textarea name="" id="updateUser" cols="30" rows="10" style="display:none;">{{ route('admin.user.update') }}</textarea>
            <textarea name="" id="deleteUser" cols="30" rows="10" style="display:none;">{{ route('admin.user.delete') }}</textarea>
        </div>

          @include('Includes.footer')
    </div>
</div>
@endsection

@section('script')
 <script src="{{ asset('app/usermanagement.js') }}" type="text/javascript"></script>
@endsection
