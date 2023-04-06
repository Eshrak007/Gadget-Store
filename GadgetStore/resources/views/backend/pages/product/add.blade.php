@extends('backend.masterTemplate.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Add Product</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('store.product')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="inputFirstName">Product Name</label>
                                <input class="form-control" name="product_name" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                @error('product_name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="inputcat">Category Name</label>
                                <input class="form-control" name="category_name" id="inputcat" type="text" placeholder="Enter Category name" />
                                @error('category_name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 mb-2">
                                <label for="inputbrand">Brand Name</label>
                                <input class="form-control" name="brand_name" id="inputbrand" type="text" placeholder="Enter Brand name" />
                                @error('brand_name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="inputdes">Description</label>
                                <textarea name="description" id="inputdes" cols="30" rows="3" class="form-control"></textarea>
                                @error('description')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="inputimg">Product Image</label>
                                <input class="form-control" name="image" id="inputimg" type="file" />
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="inputFirstName">Status</label>
                                <select name="status" class="form-control">
                                    <option value="">-----Select Status-----</option>
                                    <option value="1">Inactive</option>
                                    <option value="2">Active</option>
                                </select>
                                @error('status')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="inputsel">Selling Price</label>
                                <input class="form-control" name="selling_price" id="inputsel" type="text" placeholder="Enter Selling Price" />
                                @error('selling_price')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="inputdis">discount_Price</label>
                                <input class="form-control" name="discount_price" id="inputsel" type="text" placeholder="Enter Discount Price" />
                                @error('discount_price')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button class="btn btn-primary btn-block">Add Product</button></div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection