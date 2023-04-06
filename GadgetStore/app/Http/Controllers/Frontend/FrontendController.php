<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::where('status', '2')->get();
        return view('welcome', compact('products'));
    }

    public function singleProduct($id)
    {
        $product = Product::find($id);
        $products = Product::all();
        $sideproducts = Product::latest()->take(4)->get();
        return view('singleProduct', compact('product', 'products', 'sideproducts'));
    }
}
