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
                        <select class="select" name="category_id">
                            <option value="" disabled selected>Choose Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Brand</label>
                        <select class="select" name="brand_id">
                            <option value="" disabled selected>Choose Brand</option>
                            @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Unit</label>
                        <select class="select" name="unit_id">
                            <option>Choose Unit</option>
                            <option>Unit</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Barcode</label>
                        <input type="text" class="form-control @if($errors->has('barcode'))is-invalid @endif " name="barcode" id="barcode" value="{{ old('barcode') }}" required>
                        @if($errors->has('barcode'))
                        <div class="invalid-feedback">
                            {{ $errors->first('barcode') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Minimum Qty</label>
                        <input type="text" name="minimum_quantity" value="{{ old('minimum_quantity') }}">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" name="stock_quantity" value="{{ old('stock_quantity') }}">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Tax</label>
                        <select class="select" name="tax_id">
                            <option>Choose Tax</option>
                            <option>2%</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Discount Type</label>
                        <select class="select" name="discount">
                            <option value="">Percentage</option>
                            <option>10%</option>
                            <option>20%</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control @if($errors->has('price'))is-invalid @endif " name="price" id="price" value="{{ old('price') }}" required>
                        @if($errors->has('price'))
                        <div class="invalid-feedback">
                            {{ $errors->first('price') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>	Status</label>
                        <select class="select" name="status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>	Product Image</label>
                        <div class="image-upload">
                            <input type="file" name="image">
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