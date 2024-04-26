<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom styles for this template-->
<link href="{{ url('/assets/admin/css/app.css') }}" rel="stylesheet">
<link href="{{ url('/assets/admin/css/dashbord.css') }}" rel="stylesheet">
<link href="{{ url('/assets/admin/css/responsive.css') }}" rel="stylesheet">
<link href="{{ url('/assets/admin/js/sb-admin-2.js') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
<script>
    var base_url = "{{url('/')}}";
    var csrf_token ="{{csrf_token()}}";
</script>