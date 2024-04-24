<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $setting->app_name ?? 'Application' }} | @yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{ url($setting->favicon ??'/assets/admin/logo.png') }}" />

    <!-- Include Css -->
    @include('admin.layout.partial.css')
    @yield('css')
</head>

<body id="page-top">

    <!-- Include Header -->
    @include('admin.layout.partial.header')

    <!-- Include Header -->
    @include('admin.layout.partial.sidebar')

    <div id="wrapper">

        <div id="content">
            @yield('content')
        </div>

        <!-- Include Header -->
        @include('admin.layout.partial.footer')

    </div>
        
    <!-- Include Js -->
    @include('admin.layout.partial.js')
    <!-- Include Toaster -->
    @include('admin.layout.partial.toaster')
    @yield('js')
</body>

</html>