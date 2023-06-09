@extends('layouts.main')

@push('styles')

     <!-- Datatable CSS -->
     <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
    
@endpush


@push('scripts')

    <!-- Select2 JS -->
		<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>   
@endpush

@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Brand list</h4>
            <h6>View/Search Brand</h6>
        </div>
        <div class="page-btn">
            <a href="{{ route('brands.create') }}" class="btn btn-added">
                <img src="assets/img/icons/plus.svg"  class="me-1" alt="img">Add  Brand
            </a>
        </div>
    </div>
    

    <!-- /product list -->
    <div class="card">
        <div class="card-body">
            <div class="table-top">
                <div class="search-set">
                    <div class="search-path">
                        <a class="btn btn-filter" id="filter_search">
                            <img src="assets/img/icons/filter.svg" alt="img">
                            <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                        </a>
                    </div>
                    <div class="search-input">
                        <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
                    </div>
                </div>
                <div class="wordset">
                    <ul>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Filter -->
            <div class="card" id="filter_inputs">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-lg-2 col-sm-6 col-12">
                            <div class="form-group">
                                <select class="select">
                                    <option>Choose brand</option>
                                    <option>Computers</option>
                                </select>
                            </div>
                        </div>
                      
                        <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                            <div class="form-group">
                                <a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Filter -->
            <div class="table-responsive">
                <table class="table  datanew">
                    <thead>
                        <tr>
                            <th>
                                <label class="checkboxs">
                                    <input type="checkbox" id="select-all">
                                    <span class="checkmarks"></span>
                                </label>
                            </th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($brands as $brand)
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td>{{ $brand->id }}</td>
                            <td>{{ $brand->name }}</td>
                            
                            <td>
                                Arun
                            </td>
                            <td>
                                <a class="me-3" href="{{ route('brands.edit', $brand) }}">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                                          
                                <form action="{{ route('brands.destroy', $brand) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <input type="image" alt="Submit" src="assets/img/icons/delete.svg" />
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /brands list -->
</div>
@endsection
