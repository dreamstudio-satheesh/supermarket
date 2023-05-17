@extends('layouts.main')

@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Product Add Category</h4>
            <h6>Create new product Category</h6>
        </div>
    </div>
    <!-- /add -->
    <div class="card">
        <div class="card-body">
           
            <div class="row">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Category Code</label>
                        <input type="text" >
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>	Product Image</label>
                        <div class="image-upload">
                            <input type="file">
                            <div class="image-uploads">
                                <img src="assets/img/icons/upload.svg" alt="img">
                                <h4>Drag and drop a file to upload</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button class="btn btn-submit me-2" type="submit">Create</button>                   
                    <a href="{{ route('categories.index') }}" class="btn btn-cancel">Cancel</a>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- /add -->
</div>
@endsection