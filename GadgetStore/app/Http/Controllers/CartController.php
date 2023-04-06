<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function cartinfo()
    {
        $products = Product::all();
        $sideproducts = Product::latest()->take(4)->get();
        $carts = Cart::content();
        return view('cart', compact('products', 'sideproducts', 'carts'));
    }

    public function store(Request $request)
    {
        $product = Product::find($request->prod_id);
        //dd($product);
        Cart::add($product->id, $product->name, $request->quantity, $product->discount_price);

        return redirect()->route('single.product', $product->id);
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        // Cart::destroy();
        return redirect()->route('show.cart');
    }
}
