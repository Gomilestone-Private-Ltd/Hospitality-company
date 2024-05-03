<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('assets/web/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/responsive.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/web/image/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,500;1,6..96,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    {{-- Item Slider Link  Start --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script> --}}
    {{-- Item Slider Link  End --}}

    <title>@yield('title')</title>

    <!-- Include Css -->
    @include('web.layout.partial.css')
    @yield('css')

    <script>
        var base_url = "{{url('/')}}";
        var csrf_token ="{{csrf_token()}}";
    </script>
</head>

<body>
    <!-- Include Header -->
    @include('web.layout.partial.header')

    <!-- Include Content -->
    @yield('content')

    <!-- Include Footer -->
    @include('web.layout.partial.footer')

    <!-- Js --->
    @include('web.layout.partial.js')
    @yield('js')
</body>

</html>
