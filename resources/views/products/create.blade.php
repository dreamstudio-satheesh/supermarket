@extends('layouts.main')

@push('styles')
    <!-- Select2 CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}"> 
@endpush

@push('scripts')
    <!-- Select2 JS -->
		<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>   
@endpush

@section('content')

<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Product Add</h4>
            <h6>Create new product</h6>
        </div>
    </div>
    <!-- /add -->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
                
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control @if($errors->has('name'))is-invalid @endif " name="name" id="name" value="{{ old('name') }}" required>
                        @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="select">
                            <option>Choose Category</option>
                            <option>Computers</option>
                        </select>
                    </div>
                </div>
                
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Brand</label>
                        <select class="select">
                            <option>Choose Brand</option>
                            <option>Brand</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Unit</label>
                        <select class="select">
                            <option>Choose Unit</option>
                            <option>Unit</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>SKU</label>
                        <input type="text" >
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Minimum Qty</label>
                        <input type="text" >
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" >
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Tax</label>
                        <select class="select">
                            <option>Choose Tax</option>
                            <option>2%</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Discount Type</label>
                        <select class="select">
                            <option>Percentage</option>
                            <option>10%</option>
                            <option>20%</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" >
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>	Status</label>
                        <select class="select">
                            <option>Closed</option>
                            <option>Open</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>	Product Image</label>
                        <div class="image-upload">
                            <input type="file">
                            <div class="image-uploads">
                                <img src="{{ asset('assets/img/icons/upload.svg') }}" alt="img">
                                <h4>Drag and drop a file to upload</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                    <a href="productlist.html" class="btn btn-cancel">Cancel</a>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- /add -->
</div>

@endsection