<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $setting->app_name ?? 'Login Pannel' }} | Login </title>
    <link rel="shortcut icon" type="image/png" href="{{ url('/assets/admin/img/crunchLogo.png') }}" />
    <link href="{{ url('/assets/admin/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>
    <div class="main-login-container">
        <div class="container-fluid">
            <div class="card-body-box p-0">
                <div class="row p-0">
                    <div class="col-md-7 col-7 p-0">
                        <div class="login-left-box">
                            <img class="login-left-img" src="{{ url('/assets/admin/img/login3.png') }}">
                        </div>
                    </div>
                    <div class="col-md-5 col-5 p-0">
                        <div class="login-right-box">
                            {{-- <img class="login-left-img" src="{{ asset('admin/img/login3.png') }}"> --}}
                        </div>
                    </div>
                </div>
                <div class="admin-login">
                    <div class="logo-img">
                        <img src="{{ asset($setting->logo ??'/assets/admin/logo.png') }}" alt="img">
                    </div>
                    
                    <!-- <div class="">
                        <h1 class="admin-heading"> Admin Login </h1>
                    </div> -->
                    
                    <form action="{{route('admin.login')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label-box">Email</label>
                            <input id="inputPassword" type="email" placeholder="Enter Email-ID" class="form-control form-control-user" name="email">
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label-box">Password</label>
                            <input id="Password" type="password" placeholder="Enter Password" class="form-control form-control-user " name="password">
                            @if ($errors->has('password'))
                                <p class="text-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <button class="login-btn btn-block">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
@include('admin.layout.partial.toaster')
</body>

</html>
