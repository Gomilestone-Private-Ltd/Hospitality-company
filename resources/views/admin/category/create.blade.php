@extends('admin.layout.app')
@section('title',"Add Category")
@section('content')

<div class="main-container-box">
    <div class="container-fluid">
        <div class="main-section-box">
            <div class="heading-box">
                <div class="backBtn">
                    <a class="backBtn-icon" href="{{ route('category') }}"> 
                        <img src="{{ url('/assets/admin/img/left.png') }}" alt="">
                    </a>
                    <h1 class="heading">Add</h1>
                </div>
            </div>
            <div class="add-input-box">
                <form method="post" action="{{route('add.category')}}" id="add-category" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Name</label>
                                <input type="name" placeholder="Category Name" class="form-control form-control-user" value="{{old('name')}}" name="name">
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
                                <label class="form-label-box" for="sel1">Category</label>
                                <select class="form-control form-control-user" id="category" name="category_type">
                                    <option value="">Select Category Type</option>
                                    <option value="material">Product By Material</option>
                                    <option value="collection">Product By collection</option>
                                    <option value="use">Product By use</option>
                                    <option value="other">Other</option>
                                </select>
                                @if($errors->has('category_type'))
                                    <p class="text-danger">{{$errors->first('category_type')}}</p>
                                @endif
                            </div>

                            <!-- <div class="form-group">
                                <input type="radio" name="category_type" value="material">
                                <label for="html">Product By Material</label><br>
                                <input type="radio"  name="category_type" value="collection">
                                <label for="css">Product By Collection</label><br>
                                <input type="radio"name="category_type" value="use">
                                <label for="javascript">Product By Use</label><br>
                                <input type="radio"name="category_type" value="other">
                                <label for="javascript">Other</label>
                                @if($errors->has('category_type'))
                                    <p class="text-danger">{{$errors->first('category_type')}}</p>
                                @endif
                            </div> -->
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