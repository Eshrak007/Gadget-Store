@extends('backend.masterTemplate.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Upadate Product</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('update.product',$products->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="inputFirstName">Product Name</label>
                                <input class="form-control" name="product_name" id="inputFirstName" type="text" placeholder="Enter your first name" value="{{$products->name}}" />
                                @error('product_name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="inputcat">Category Name</label>
                                <input class="form-control" name="category_name" id="inputcat" type="text" placeholder="Enter Category name" value="{{$products->category_name}}" />
                                @error('category_name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 mb-2">
                                <label for="inputbrand">Brand Name</label>
                                <input class="form-control" name="brand_name" id="inputbrand" type="text" placeholder="Enter Brand name" value="{{$products->brand_name}}" />
                                @error('brand_name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="inputdes">Description</label>
                                <textarea name="description" id="inputdes" cols="30" rows="3" class="form-control">{{$products->description}}</textarea>
                                @error('description')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="inputimg">Product Image</label>
                                <input class="form-control" name="image" id="inputimg" type="file" />
                                <img src="{{asset('uploads/product/'.$products->image)}}" alt="" height="100">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="inputFirstName">Status</label>
                                <select name="status" class="form-control">
                                    <option value="">-----Select Status-----</option>
                                    <option value="1" @if($products->status =='1')
                                        selected
                                        @endif
                                        >Inactive</option>
                                    <option value="2" @if($products->status =='2')
                                        selected
                                        @endif>Active</option>
                                </select>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="inputsel">Selling Price</label>
                                <input class="form-control" name="selling_price" id="inputsel" type="text" placeholder="Enter Selling Price" value="{{$products->selling_price}}" />
                                @error('selling_price')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="inputdis">discount_Price</label>
                                <input class="form-control" name="discount_price" id="inputsel" type="text" placeholder="Enter Discount Price" value="{{$products->discount_price}}" />
                                @error('discount_price')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button class="btn btn-primary btn-block">Update Product</button></div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection