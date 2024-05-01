@extends('admin.layout.app')
@section('title',"Add Size")
@section('content')

<div class="main-container-box">
    <div class="container-fluid">
        <div class="main-section-box">
            <div class="heading-box">
                <div class="backBtn">
                    <a class="backBtn-icon" href="{{ route('size') }}"> 
                        <img src="{{ url('/assets/admin/img/left.png') }}" alt="">
                    </a>
                    <h1 class="heading">Add Size</h1>
                </div>
            </div>
            <div class="add-input-box">
                <form method="post" action="{{route('store.size')}}" id="add-color" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Size</label>
                                <input type="name" placeholder="size" class="form-control form-control-user" value="{{old('size')}}" name="size">
                                @if($errors->has('size'))
                                    <p class="text-danger">{{$errors->first('size')}}</p>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                            <label class="form-label-box" for="sel1">Size Type</label>
                                <select class="form-control form-control-user" id="size_type" name="size_type">
                                    <option value="">Select size Type</option>
                                    <option value="CMS" @if(old('size_type') == "CMS") Selected @endif>CMS</option>
                                    <option value="INCH" @if(old('size_type') == "INCH") Selected @endif>INCH</option>
                                </Select>
                                @if($errors->has('size_type'))
                                    <p class="text-danger">{{$errors->first('size_type')}}</p>
                                @endif
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
@endsection