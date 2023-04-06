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

    @include('includes.slider')
    <!-- End slider area -->

    @include('includes.promoarea')
    <!-- End promo area -->

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            @foreach ($products as $product)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{'uploads/product/'.$product->image}}" alt="">
                                    <div class="product-hover">
                                        <a href="{{route('single.product',$product->id)}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="{{route('single.product',$product->id)}}">{{$product->name}}</a></h2>

                                <div class="product-carousel-price">
                                    <ins>{{$product->discount_price}} tk</ins> <del>{{$product->selling_price}} tk</del>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->

    @include('includes.brands')
    <!-- End brands area -->

    @include('includes.widget')
    <!-- End product widget area -->

    @include('includes.footertop')
    <!-- End footer top area -->

    @include('includes.footerbottom')
    <!-- End footer bottom area -->

    @include('includes.script')
</body>

</html>