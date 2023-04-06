<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('backend')}}/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('backend')}}/assets/demo/chart-area-demo.js"></script>
<script src="{{asset('backend')}}/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('backend')}}/js/datatables-simple-demo.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{asset('backend')}}/js/category.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@if(Session::has('success'))
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ session('success') }}");
</script>
@endif

@if(Session::has('error'))
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.error("{{ session('error') }}");
</script>
@endif

@if(Session::has('warning'))
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.warning("{{ session('warning') }}");
</script>
@endif