<!DOCTYPE html>
<html lang="en">

<!-- head start -->
@include('backend.includes.head')
<!-- head end -->

<body class="sb-nav-fixed">
    <!-- header start -->
    @include('backend.includes.header')
    <!-- header end -->
    <div id="layoutSidenav">
        <!-- sidebar start -->
        @include('backend.includes.sidebar')
        <!-- sidebar end -->
        <div id="layoutSidenav_content">
            <!-- main content here -->
            @yield('content')

            <!-- footer start -->
            @include('backend.includes.footer')
            <!-- footer end -->
        </div>
    </div>
    <!-- script start -->
    @include('backend.includes.script')
    <!-- script end -->
</body>

</html>