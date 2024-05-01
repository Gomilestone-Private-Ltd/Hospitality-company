@extends('admin.layout.app')
@section('title',"Edit Ideal For")
@section('content')

<div class="main-container-box">
    <div class="container-fluid">
        <div class="main-section-box">
            <div class="heading-box">
                <div class="backBtn">
                    <a class="backBtn-icon" href="{{ route('ideal.for') }}"> 
                        <img src="{{ url('/assets/admin/img/left.png') }}" alt="">
                    </a>
                    <h1 class="heading">Edit Ideal For</h1>
                </div>
            </div>
            <div class="add-input-box">
                <form method="post" action="{{route('update.ideal.for',[$idealForDetail->slug])}}" id="add-color" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Ideal For</label>
                                <input type="name" placeholder="Ideal For" class="form-control form-control-user" value="{{$idealForDetail->ideal_for ??''}}" name="ideal_for">
                                @if($errors->has('ideal_for'))
                                    <p class="text-danger">{{$errors->first('ideal_for')}}</p>
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