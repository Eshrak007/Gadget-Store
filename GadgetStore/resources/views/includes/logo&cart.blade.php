<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="{{route('welcome')}}"><img src="{{asset('frontend')}}/img/logo.jpg"></a></h1>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="{{route('show.cart')}}">Cart - <span class="cart-amunt">{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">{{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span></a>
                </div>
            </div>
        </div>
    </div>
</div>