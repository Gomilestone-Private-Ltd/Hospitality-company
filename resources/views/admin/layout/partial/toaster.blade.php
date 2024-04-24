<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        toastr.options = {
                            "closeButton": true,
                            "progressBar": true,
                            "timeOut": 1000,
                            "extendedTimeOut": 800
                        }

        @if (Session::has('success'))
            toastr.success("{{Session::get('success')}}");
        @endif

        @if (Session::has('error'))
            toastr.error("{{Session::get('error')}}");
        @endif

        @if (Session::has('warning'))
            toastr.success("{{Session::get('warning')}}");
        @endif

    });
</script>