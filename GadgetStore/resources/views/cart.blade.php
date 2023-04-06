<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
@include('includes.head')

<body>

    @include('includes.header')
    <!-- End header area -->

    @include('includes.logo&cart')
    <!-- End site branding area -->

    @include('includes.mainmenu')
    <!-- End mainmenu area -->

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        @foreach ($sideproducts as $sideproduct)
                        <div class="thubmnail-recent">
                            <img src="{{asset('uploads/product/'.$sideproduct->image)}}" class="recent-thumb" alt="">
                            <h2><a href="">{{$sideproduct->name}}</a></h2>
                            <div class="product-sidebar-price">
                                <ins>{{$sideproduct->discount_price}}tk</ins> <del>{{$sideproduct->selling_price}}tk</del>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            @foreach ($sideproducts as $sideproduct)
                            <li><a href="">{{$sideproduct->name}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-subtotal">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (\Gloudemans\Shoppingcart\Facades\Cart::content()->count()==0)
                                        <h2>Your Cart is empty</h2>
                                        @else
                                        @foreach ($carts as $row )

                                        <tr class="cart_item">
                                            <td class="product-name">
                                                <a href="single-product.html">{{$row->name}}</a>
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">{{$row->price}}</span>
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <input type="button" class="minus" value="-">
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="{{$row->qty}}" min="0" step="1">
                                                    <input type="button" class="plus" value="+">
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount">{{$row->subtotal}}</span>
                                            </td>

                                            <td class="product-remove">
                                                <a href="{{route('remove.cart',$row->rowId)}}" class="remove">×</a>

                                            </td>


                                        </tr>

                                        @endforeach
                                        @endif

                                        <tr>
                                            <td class="actions" colspan="6">
                                                <input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}</span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Shipping and Handling</th>
                                            <td>Free Shipping</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}</span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('includes.footertop')
    <!-- End footer top area -->

    @include('includes.footerbottom')
    <!-- End footer bottom area -->

    @include('includes.script')
</body>

</html>