@extends('admin.layout.app')
@section('title',"Edit Category")
@section('content')

<div class="main-container-box">
    <div class="container-fluid">
        <div class="main-section-box">
            <div class="heading-box">
                <div class="backBtn">
                    <a class="backBtn-icon" href="{{route('category')}}"> 
                        <img src="{{ url('/assets/admin/img/left.png') }}" alt=""></a>
                        <h1 class="heading">Edit Category</h1>
                </div>

            </div>
            <div class="add-input-box">
                <form method="post" action="{{route('update.category',[$getCategoryDetail->slug ??'']) }}" id="add-inventory" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Name</label>
                                <input type="name" placeholder="Category Name" class="form-control form-control-user" value="{{$getCategoryDetail->name ??''}}" name="name">
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
                        
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <input type="radio" name="category_type" value="material" @if($getCategoryDetail->type == 1) checked @endif>
                                <label for="html">Product By Material</label><br>
                                <input type="radio"  name="category_type" value="collection" @if($getCategoryDetail->type == 2) checked @endif>
                                <label for="css">Product By Collection</label><br>
                                <input type="radio"name="category_type" value="use" @if($getCategoryDetail->type == 3) checked @endif>
                                <label for="javascript">Product By Use</label><br>
                                <input type="radio"name="category_type" value="other" @if($getCategoryDetail->type == 4) checked @endif>
                                <label for="javascript">Other</label>
                                @if($errors->has('category_type'))
                                    <p class="text-danger">{{$errors->first('category_type')}}</p>
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