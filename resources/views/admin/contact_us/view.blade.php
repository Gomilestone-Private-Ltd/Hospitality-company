@extends('admin.layout.app')
@section('title',"Get In Touch Detail")
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
                    <a class="backBtn-icon" href="{{route('contact.us')}}"> 
                        <img src="{{ url('/assets/admin/img/left.png') }}" alt=""></a>
                        <h1 class="heading">View Details</h1>
                </div>

            </div>
            <div class="add-input-box">
                <form method="post" action="#" id="add-inventory" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Company Name*</label>
                                <input type="text"  class="form-control form-control-user" value="{{$contactUs->c_name ??''}}" readonly>
                                
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Type of Company*</label>
                                <input type="text"  class="form-control form-control-user" value="{{$contactUs->c_type ??''}}" readonly>
                                
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Full Name*</label>
                                <input type="text"  class="form-control form-control-user" value="{{$contactUs->name ??''}}" readonly>
                                
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Email*</label>
                                <input id="email" type="email"  class="form-control form-control-user " value="{{$contactUs->email ??''}}" readonly>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Phone Number*</label>
                                <input id="text" type="text"  class="form-control form-control-user " value="{{ $contactUs->contact ??''}}" readonly>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Job Title*</label>
                                <input id="text" type="text"  class="form-control form-control-user " value="{{ $contactUs->job_title ??''}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">What Role Best Describes You?</label>
                                <input id="text" type="text"  class="form-control form-control-user " value="{{ $contactUs->role_desc ??''}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">City</label>
                                <input id="text" type="text"  class="form-control form-control-user " value="{{ $contactUs->city ??''}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">State</label>
                                <input id="text" type="text"  class="form-control form-control-user " value="{{ $contactUs->state ??''}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Postal Code</label>
                                <input id="text" type="text"  class="form-control form-control-user " value="{{ $contactUs->pin ??''}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Country*</label>
                                <input id="text" type="text"  class="form-control form-control-user " value="{{ $contactUs->country ??''}}" readonly>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Created At</label>
                                <input id="text" type="text"  class="form-control form-control-user " value="{{ $contactUs->created_at ??''}}" readonly>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="form-label-box">How Can We Help ?*</label>
                                <div class="">
                                {{$contactUs->how_can_we_help ??''}}
                                </div>
                            </div>
                        </div> 

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Message :</label>
                                <div class="">
                                {{$contactUs->message ??''}}
                                </div>
                            </div>
                        </div> 
                        
                        

                        <!-- <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Remark</label>
                                <div class="">
                                    <textarea class="text-area-box textarea" rows="2"  name="address">{{$contactUs->message ??''}}</textarea>
                                    @if ($errors->has('address'))
                                        <p class="text-danger">{{ $errors->first('address') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="col-md-12 text-right">
                            <button id="success" type="submit" class="submit-btn">
                                Submit
                            </button>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
@section('js')

@endsection