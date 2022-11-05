@extends('Layout.master')
@section('title')<title>Unstack | Product</title>@endsection

@section('content')
<div class="main-panel" id="store-product">
    <div class="content-wrapper">

        <div class="container-fluid">
            @if(Auth::user()->role === 'admin' || Auth::user()->role === 'support')
            <header>
                <div class="col-sm-6 col-md-4 col-lg-3 float-right text-right p-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProduct">
                        Add Products
                    </button>
                </div>
            </header>
            @endif
            <div class="row">
                <!-- Single product -->
                <div class="col-sm-6 col-lg-6 col-xl-3" v-for="(product, index) in products">
                    <div class="single-product-item mb-30">
                        <div class="product-card">
                            <a class="product-thumb" href="#"><img src="{{ asset('management/img/shop-img/2.png') }}" alt="Product"></a>
                            <div class="ribbon ribbon-bookmark ribbon-right ribbon-danger">20% OFF</div>

                            <h3 v-cloak class="product font-17 mb-15 mt-20">@{{ product.name }}</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 v-cloak class="product-price mb-0 mt-0">$@{{ product.amount }}</h4>
                                <div class="div">
                                    <div class="badge badge-success badge-pill">In stock</div>
                                </div>
                            </div>
                            <p class="mt-15 mb-0">@{{ product.description }}</p>

                            <div class="product-buttons">
                                <a class="btn btn-rounded btn-light mt-30" :href="`/admin/product/${product.id}`">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal inmodal" id="addProduct" tabindex="-1" role="dialog" aria-hidden="true">
            @csrf
            <div class="modal-dialog modal-lg">
                <div class="modal-content animated bounceInRight">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Product Name" v-model="product.name">
                        </div>

                        <div class="form-group">
                            <textarea name="" id="" cols="10" rows="6" class="form-control" v-model="product.description" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" v-model="product.amount" placeholder="Enter Amount">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Qty" v-model="product.qty">
                        </div>

                        <div class="form-group">
                            <label>Product Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile05">
                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" @click="addProduct()" class="btn btn-primary">Proceed</button>
                        <div v-if="isLoading" class="spinner-border text-success" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
            <textarea  id="createProduct" cols="30" rows="10" style="display:none;">{{ route('user.store.create') }}</textarea>
            <textarea  id="products" cols="30" rows="10" style="display:none;">{{ json_encode($products) }}</textarea>
        </div>
       @include('Includes.footer')
    </div>
</div>
@endsection


@section('script')
    <script src="{{ asset('management/js/default-assets/file-upload.js') }}"></script>
    <script src="{{ asset('management/js/default-assets/basic-form.js') }}"></script>
    <script src="{{ asset('app/store.js') }}" type="text/javascript"></script>
@endsection
