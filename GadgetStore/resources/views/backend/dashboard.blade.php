@extends('backend.masterTemplate.master')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Hello! <span class="text-info">{{Auth::user()->name}}</span></li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Products
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Sl.</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category_name}}</td>
                            <td>{{$product->brand_name}}</td>
                            <td>{{$product->description}}</td>
                            <td>
                                <img src="{{asset('uploads/product/'.$product->image)}}" width="50" height="50" alt="image">
                            </td>
                            <td>
                                @if ($product->status == '1')
                                <span class="badge bg-danger">{{'Inactive'}}</span>
                                @else
                                <span class="badge bg-info">{{'Active'}}</span>

                                @endif
                            </td>
                            <td><a href="{{route('edit.product',$product->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('delete.product',$product->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection