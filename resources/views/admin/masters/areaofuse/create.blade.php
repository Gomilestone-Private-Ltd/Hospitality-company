@extends('admin.layout.app')
@section('title',"Add Area Of Use")
@section('content')

<div class="main-container-box">
    <div class="container-fluid">
        <div class="main-section-box">
            <div class="heading-box">
                <div class="backBtn">
                    <a class="backBtn-icon" href="{{ route('area.of.use') }}"> 
                        <img src="{{ url('/assets/admin/img/left.png') }}" alt="">
                    </a>
                    <h1 class="heading">Add Area Of Use</h1>
                </div>
            </div>
            <div class="add-input-box">
                <form method="post" action="{{route('store.area.of.use')}}" id="add-color" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Area Of Use</label>
                                <input type="name" placeholder="Area Of Use" class="form-control form-control-user" value="{{old('area_of_use')}}" name="area_of_use">
                                @if($errors->has('area_of_use'))
                                    <p class="text-danger">{{$errors->first('area_of_use')}}</p>
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