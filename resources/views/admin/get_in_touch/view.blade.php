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
                    <a class="backBtn-icon" href="{{route('get.in.touch')}}"> 
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
                                <label class="form-label-box">Name</label>
                                <input type="text" placeholder="Name" class="form-control form-control-user" name="name" value="{{$getInTouch->name ??''}}" readonly>
                                
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">E-mail</label>
                                <input id="email" type="email" placeholder="e-mail" class="form-control form-control-user " value="{{$getInTouch->email ??''}}" readonly>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Created At</label>
                                <input id="text" type="text" placeholder="Created At" class="form-control form-control-user " value="{{ $getInTouch->created_at->format('d/m/Y') ??''}}" readonly>
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Message</label>
                                <div class="">
                                    <textarea class="text-area-box textarea" rows="2"  name="message">{{$getInTouch->message ??''}}</textarea>
                                </div>
                            </div>
                        </div> 
                        
                        <!-- <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Remark</label>
                                <div class="">
                                    <textarea class="text-area-box textarea" rows="2"  name="address">{{$getInTouch->message ??''}}</textarea>
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