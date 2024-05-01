@extends('admin.layout.app')
@section('title',"Edit Color")
@section('content')

<div class="main-container-box">
    <div class="container-fluid">
        <div class="main-section-box">
            <div class="heading-box">
                <div class="backBtn">
                    <a class="backBtn-icon" href="{{ route('color') }}"> 
                        <img src="{{ url('/assets/admin/img/left.png') }}" alt="">
                    </a>
                    <h1 class="heading">Edit Color</h1>
                </div>
            </div>
            <div class="add-input-box">
                <form method="post" action="{{route('update.color',[$colorDetail->slug])}}" id="add-color" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Color Name</label>
                                <input type="name" placeholder="Color Name" class="form-control form-control-user" value="{{$colorDetail->color_name ??''}}" name="color_name">
                                @if($errors->has('color_name'))
                                    <p class="text-danger">{{$errors->first('color_name')}}</p>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                            <label class="form-label-box">Color Code</label>
                            <input type="color" placeholder="Color Code" class="form-control form-control-user" value="{{$colorDetail->color_code ??''}}" name="color_code">
                                @if($errors->has('color_code'))
                                    <p class="text-danger">{{$errors->first('color_code')}}</p>
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