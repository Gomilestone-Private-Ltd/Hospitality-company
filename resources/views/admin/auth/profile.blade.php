@extends('admin.layout.app')
@section('title',"Update Profile")
@section('content')

<style>
    .textarea{
    width:100%;
}

</style>

<div class="main-container-box">
    <div class="container-fluid">
        <div class="row">
        
        <div class="main-section-box col-12 col-md-12" style="margin-right: 4px; padding-right: 0px; padding-left: 0px;">
            <div class="heading-box">
            <div class="backBtn">
                    <a class="backBtn-icon" href="{{route('dashboard')}}"> 
                        <img src="{{ url('/assets/admin/img/left.png') }}" alt=""></a>
                        <h1 class="heading">Update Profile</h1>
                </div>

            </div>
            <div class="add-input-box">
                <form method="post" action="{{route('update.profile')}}" id="add-inventory" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Name</label>
                                <input type="text" placeholder="Name" class="form-control form-control-user" name="name" value="{{$getProfile->name ??''}}">
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">E-mail</label>
                                <input id="email" type="email" placeholder="e-mail" class="form-control form-control-user " value="{{$getProfile->email ??''}}" readonly>
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Role</label>
                                <input id="Contact" type="text" placeholder="Role" class="form-control form-control-user " value="{{$getProfile->role ??''}}" readonly>
                                @if ($errors->has('role'))
                                    <p class="text-danger">{{ $errors->first('role') }}</p>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Contact</label>
                                <input id="Contact" type="number" placeholder="Contact Number" class="form-control form-control-user " name="contact" value="{{$getProfile->contact ??''}}">
                                @if ($errors->has('contact'))
                                    <p class="text-danger">{{ $errors->first('contact') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Password</label>
                                <input id="Password" type="password" placeholder="Password" class="form-control form-control-user " name="password" autocomplete="off">
                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Avtar</label>
                                <input type="file" class="form-control form-control-user" name="avtar">
                                @if ($errors->has('avtar'))
                                    <p class="text-danger">{{ $errors->first('avtar') }}</p>
                                @endif
                            </div>
                        </div>
                        
                        {{-- <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Address</label>
                                <div class="">
                                    <textarea class="text-area-box textarea" rows="2"  name="address">{{$getProfile->address ??''}}</textarea>
                                    @if ($errors->has('address'))
                                        <p class="text-danger">{{ $errors->first('address') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-md-12 text-right">
                            <button id="success" type="submit" class="submit-btn">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection