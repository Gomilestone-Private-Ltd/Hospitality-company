@extends('admin.layout.app')
@section('title',"Edit Super Sub Category")
@section('content')

<div class="main-container-box">
    <div class="container-fluid">
        <div class="main-section-box">
            <div class="heading-box">
                <div class="backBtn">
                    <a class="backBtn-icon" href="{{route('supersubcategory')}}"> 
                        <img src="{{ url('/assets/admin/img/left.png') }}" alt="">
                    </a>
                    <h1 class="heading">Edit</h1>
                </div>
            </div>
            <div class="add-input-box">
                <form method="post" action="{{route('update.supersubcategory',[$getSuperSubCategoryDetail->slug ??'']) }}" id="add-inventory" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box" for="sel1">Category</label>
                                <select class="form-control form-control-user category" id="category" name="category">
                                    <option>Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" @if($getSuperSubCategoryDetail->category_id == $category->id) Selected @endif>{{ $category->name }}</option>
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
                                <select class="form-control form-control-user subcategory" id="category" name="subcategory">
                                    <option value="">Select Sub Category</option>
                                    @foreach($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}" @if($getSuperSubCategoryDetail->subcategory_id == $subcategory->id) Selected @endif>{{ $subcategory->name }}</option>
                                    @endforeach
                                   
                                </select>
                                @if($errors->has('subcategory'))
                                <p class="text-danger">{{$errors->first('subcategory')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Name</label>
                                <input type="name" placeholder="Super Sub Category Name" class="form-control form-control-user" value="{{$getSuperSubCategoryDetail->name ??''}}" name="name">
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
                        
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Description*</label>
                                <textarea class="form-control" rows="3"  name="description">{{$getSuperSubCategoryDetail->description ??''}}</textarea>
                                
                                @if ($errors->has('description'))
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
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
<script>
    $(document).ready(function(){
        $('.category').on('change',function(e){
           e.preventDefault();
           var getCategoryId = $(this).val();
           $.ajax({
                    url: base_url+"/get-subcategory",
                    method:'post',
                    dataType:'json',
                    data:{
                         '_token' : csrf_token,
                         'getCategoryId' : getCategoryId,
                    },
                    success:function(response){
                        if(response.status == 200){
                            $('.subcategory').empty();
                            $('.subcategory').append('<option value="">Select SubCategory</option>');
                            $.each(response.data,function(key,val){
                                $('.subcategory').append('<option value="'+val.id+'">'+val.name+'</option>');
                            });
                        }else{
                            toastr.error(response.error);
                        }
                    },
                    error:function(request, status, errorsponse){
                        toastr.error(request.responseText);
                    }
           });
        });
    });
</script>
@endsection