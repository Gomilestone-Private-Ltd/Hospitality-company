@extends('admin.layout.app')
@section('title',"Add Sub Category")
@section('content')

<div class="main-container-box">
    <div class="container-fluid">
        <div class="main-section-box">
            <div class="heading-box">
                <div class="backBtn">
                    <a class="backBtn-icon" href="{{ route('supersubcategory') }}"> 
                        <img src="{{ url('/assets/admin/img/left.png') }}" alt=""></a>
                        <h1 class="heading">Add Super SubCategory</h1>
                </div>

            </div>
            <div class="add-input-box">
                <form method="post" action="{{route('add.supersubcategory')}}" id="add-category" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box" for="sel1">Category</label>
                                <select class="form-control form-control-user category" id="category" name="category">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" @if(old('category') == $category->id) Selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                   
                                </select>
                                @if($errors->has('category'))
                                <p class="text-danger">{{$errors->first('category')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box" for="sel1">SubCategory</label>
                                <select class="form-control form-control-user subcategory" id="subcategory" name="subcategory">
                                    <option value="">Select SubCategory</option>
                                    
                                </select>
                                @if($errors->has('subcategory'))
                                <p class="text-danger">{{$errors->first('subcategory')}}</p>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Name</label>
                                <input type="name" placeholder="Super Sub Category Name" class="form-control form-control-user" value="{{old('name')}}" name="name">
                                @if($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Image</label>
                                <input type="file" class="form-control form-control-user " name="image" accept="image/png, image/gif, image/jpeg">
                                @if($errors->has('image'))
                                    <p class="text-danger">{{$errors->first('image')}}</p>
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
@section('js')

@endsection