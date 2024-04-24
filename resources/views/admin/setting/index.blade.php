@extends('admin.layout.app')
@section('title',"General Setting")
@section('content')

<style>
    .textarea{
    width:100%;
}

</style>

<div class="main-container-box">
    <div class="container-fluid">
        <div class="row">
        {{-- <div class="main-section-box col-3 col-md-3 " style="margin-right: 4px; padding-right: 0px; padding-left: 0px;">
            <div class="heading-box">
                <div class="backBtn">
                    <h3 class="heading">Setting</h3>
                </div>

            </div>
            <div class="add-input-box">
                <div class="item">
                    <a href="{{route('setting')}}" class="sub-btn nav-link dropdown-btn" id="crunch"> General </a>
                    <a href="{{route('setting')}}" class="sub-btn nav-link dropdown-btns" id="crunch">Social Media</a>
                    <a href="{{route('setting')}}" class="sub-btn nav-link dropdown-btns" id="crunch">Social Media</a>
                </div>
            </div>
        </div> --}}
        <div class="main-section-box" style="margin-right: 4px; padding-right: 0px; padding-left: 0px;">
            <div class="heading-box">
                <div class="backBtn">
                    <h3 class="heading">General Setting</h3>
                </div>

            </div>
            <div class="add-input-box">
                <form method="post" action="{{route('update.setting')}}" id="add-inventory" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Application Name</label>
                                <input type="text" placeholder="Application Name" class="form-control form-control-user" name="app_name" value="{{$getSettingDetail->app_name ??''}}">
                                @if ($errors->has('app_name'))
                                    <p class="text-danger">{{ $errors->first('app_name') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">E-mail</label>
                                <input id="email" type="email" placeholder="e-mail" class="form-control form-control-user " name="email" value="{{$getSettingDetail->email ??''}}">
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Contact</label>
                                <input id="Contact" type="number" placeholder="Contact Number" class="form-control form-control-user " name="contact" value="{{$getSettingDetail->contact ??''}}">
                                @if ($errors->has('contact'))
                                    <p class="text-danger">{{ $errors->first('contact') }}</p>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Logo</label>
                                <input type="file" class="form-control form-control-user" name="logo">
                                @if ($errors->has('logo'))
                                    <p class="text-danger">{{ $errors->first('logo') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Favicon</label>
                                <input type="file" class="form-control form-control-user" name="favicon">
                                @if ($errors->has('favicon'))
                                    <p class="text-danger">{{ $errors->first('favicon') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Address</label>
                                <div class="">
                                    <textarea class="text-area-box textarea" rows="2"  name="address">{{$getSettingDetail->address ??''}}</textarea>
                                    @if ($errors->has('address'))
                                        <p class="text-danger">{{ $errors->first('address') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>

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