@extends('layouts.main')

@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Product Category list</h4>
            <h6>View/Search product Category</h6>
        </div>
        <div class="page-btn">
            <a href="addcategory.html" class="btn btn-added">
                <img src="assets/img/icons/plus.svg"  class="me-1" alt="img">Add  Category
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
                                    <option>Choose Category</option>
                                    <option>Computers</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-12">
                            <div class="form-group">
                                <select class="select">
                                    <option>Choose Sub Category</option>
                                    <option>Fruits</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-12">
                            <div class="form-group">
                                <select class="select">
                                    <option>Choose Sub Brand</option>
                                    <option>Iphone</option>
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
                            <th>Category name</th>
                            <th>Category Code</th>
                            <th>Description</th>
                            <th>Created By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/product/noimage.png" alt="product">
                                </a>
                                <a href="javascript:void(0);">Computers</a>
                            </td>
                            <td>CT001</td>
                            <td>Computers Description</td>
                            <td>Admin</td>
                            <td>
                                <a class="me-3" href="editcategory.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/product/noimage.png" alt="product">
                                </a>
                                <a href="javascript:void(0);">Fruits</a>
                            </td>
                            <td>CT002</td>
                            <td>Fruits Description</td>
                            <td>Admin</td>
                            <td>
                                <a class="me-3" href="editcategory.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/product/noimage.png" alt="product">
                                </a>
                                <a href="javascript:void(0);">Fruits</a>
                            </td>
                            <td>CT003</td>
                            <td>Fruits Description</td>
                            <td>Admin</td>
                            <td>
                                <a class="me-3" href="editcategory.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/product/noimage.png" alt="product">
                                </a>
                                <a href="javascript:void(0);">Fruits</a>
                            </td>
                            <td>CT004</td>
                            <td>Fruits Description</td>
                            <td>Admin</td>
                            <td>
                                <a class="me-3" href="editcategory.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/product/noimage.png" alt="product">
                                </a>
                                <a href="javascript:void(0);">Accessories</a>
                            </td>
                            <td>CT005</td>
                            <td>Accessories Description</td>
                            <td>Admin</td>
                            <td>
                                <a class="me-3" href="editcategory.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/product/noimage.png" alt="product">
                                </a>
                                <a href="javascript:void(0);">Accessories</a>
                            </td>
                            <td>CT006</td>
                            <td>Accessories Description</td>
                            <td>Admin</td>
                            <td>
                                <a class="me-3" href="editcategory.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/product/noimage.png" alt="product">
                                </a>
                                <a href="javascript:void(0);">Accessories</a>
                            </td>
                            <td>CT007</td>
                            <td>Accessories Description</td>
                            <td>Admin</td>
                            <td>
                                <a class="me-3" href="editcategory.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/product/noimage.png" alt="product">
                                </a>
                                <a href="javascript:void(0);">Accessories</a>
                            </td>
                            <td>CT008</td>
                            <td>Accessories Description</td>
                            <td>Admin</td>
                            <td>
                                <a class="me-3" href="editcategory.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/product/noimage.png" alt="product">
                                </a>
                                <a href="javascript:void(0);">Accessories</a>
                            </td>
                            <td>CT009</td>
                            <td>Accessories Description</td>
                            <td>Admin</td>
                            <td>
                                <a class="me-3" href="editcategory.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/product/noimage.png" alt="product">
                                </a>
                                <a href="javascript:void(0);">Accessories</a>
                            </td>
                            <td>CT0010</td>
                            <td>Accessories Description</td>
                            <td>Admin</td>
                            <td>
                                <a class="me-3" href="editcategory.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/product/noimage.png" alt="product">
                                </a>
                                <a href="javascript:void(0);">Accessories</a>
                            </td>
                            <td>CT008</td>
                            <td>Accessories Description</td>
                            <td>Admin</td>
                            <td>
                                <a class="me-3" href="editcategory.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/product/noimage.png" alt="product">
                                </a>
                                <a href="javascript:void(0);">Accessories</a>
                            </td>
                            <td>CT009</td>
                            <td>Accessories Description</td>
                            <td>Admin</td>
                            <td>
                                <a class="me-3" href="editcategory.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/product/noimage.png" alt="product">
                                </a>
                                <a href="javascript:void(0);">Accessories</a>
                            </td>
                            <td>CT0010</td>
                            <td>Accessories Description</td>
                            <td>Admin</td>
                            <td>
                                <a class="me-3" href="editcategory.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /product list -->
</div>
@endsection
