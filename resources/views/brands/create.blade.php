@extends('layouts.main')

@push('scripts')

@endpush



@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Add Brand</h4>
            <h6>Create Brand</h6>
        </div>
    </div>
    <!-- /add -->
    <div class="card">
        <div class="card-body">
           
            <div class="row">
                <form action="{{ route('brands.store') }}" method="POST">
                    @csrf
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Brand Name</label>
                        <input type="text" class="form-control @if($errors->has('name'))is-invalid @endif " name="name" id="name" value="{{ old('name') }}" required>
                        @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                        @endif
                    </div>
                </div>
               
                
                <div class="col-lg-12">
                    <button class="btn btn-submit me-2" type="submit">Create</button>                   
                    <a href="{{ route('brands.index') }}" class="btn btn-cancel">Cancel</a>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- /add -->
</div>
@endsection