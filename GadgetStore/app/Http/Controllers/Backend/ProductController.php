<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Image;
use File;

class ProductController extends Controller
{
    // admin dashboard
    public function index()
    {
        $products = Product::all();
        return view('backend.dashboard', compact('products'));
    }

    // product add
    public function add()
    {
        return view('backend.pages.product.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'category_name' => 'required',
            'brand_name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'selling_price' => 'required',
            'discount_price' => 'required',
            'status' => 'required'
        ]);

        $image = $request->file('image');
        $customname = rand() . "." . $image->getClientOriginalExtension();
        $location = public_path('uploads/product/' . $customname);
        Image::make($image)->resize(500, 600)->save($location);

        $product = new Product;
        $product->name = $request->product_name;
        $product->category_name = $request->category_name;
        $product->brand_name = $request->brand_name;
        $product->description = $request->description;
        $product->image = $customname;
        $product->status = $request->status;
        $product->selling_price = $request->selling_price;
        $product->discount_price = $request->discount_price;
        $product->save();
        return back()->with('success', 'Product Inserted Successfully');
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('backend.pages.product.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $products = Product::find($id);

        if (empty($request->image)) {
            $products->name = $request->product_name;
            $products->category_name = $request->category_name;
            $products->brand_name = $request->brand_name;
            $products->description = $request->description;
            $products->status = $request->status;
            $products->selling_price = $request->selling_price;
            $products->discount_price = $request->discount_price;
            $products->update();
            return redirect()->route('dashboard')->with('success', 'Product Updated Successfully');
        } else if (!empty($request->image)) {
            File::delete(public_path('uploads/product/' . $products->image));
            $image = $request->file('image');
            $customname = rand() . "." . $image->getClientOriginalExtension();
            $location = public_path('uploads/product/' . $customname);
            Image::make($image)->resize(500, 600)->save($location);
            $products->name = $request->product_name;
            $products->category_name = $request->category_name;
            $products->brand_name = $request->brand_name;
            $products->description = $request->description;
            $products->image = $customname;
            $products->status = $request->status;
            $products->selling_price = $request->selling_price;
            $products->discount_price = $request->discount_price;
            $products->update();
            return redirect()->route('dashboard')->with('success', 'Product Updated Successfully');
        }
    }

    public function delete($id)
    {
        $products = Product::find($id);
        File::delete(public_path('uploads/product/' . $products->image));
        $products->delete();
        return redirect()->route('dashboard')->with('warning', 'Product deleted');
    }
}
