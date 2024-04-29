@extends('admin.layout.app')
@section('title',"Product")
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<style>
    .select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #dad5d5;
    border-radius: 8px;
    height: 39px;
}
</style>

<div class="main-container-box">
    <div class="container-fluid">
        <div class="main-section-box">
            <div class="heading-box">
                <div class="backBtn">
                    <a class="backBtn-icon" href="{{ route('products') }}"> 
                        <img src="{{ url('/assets/admin/img/left.png') }}" alt=""></a>
                        <h1 class="heading">Add Product</h1>
                </div>

            </div>
            <div class="add-input-box">
                <form method="post" action="{{route('add.products')}}" id="add-inventory" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Product Title</label>
                                <input type="text" placeholder="Product Title" class="form-control form-control-user" name="title">
                                @if($errors->has('title'))
                                    <p class="text-danger">{{$errors->first('title')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            
                            <div class="form-group">
                                <label class="form-label-box" for="sel1">Category</label>
                                <select class="form-control form-control-user select2-search category" id="category" name="category">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                    
                                </select>
                                @if($errors->has('category'))
                                    <p class="text-danger">{{$errors->first('category')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box" for="sel1">SubCategory</label>
                                <select class="form-control form-control-user select2-search subcategory" id="subcategory" name="subcategory">
                                    <option value="">Select SubCategory</option>
                                </select>
                                @if($errors->has('subcategory'))
                                    <p class="text-danger">{{$errors->first('subcategory')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box" for="sel1">S. SubCategory</label>
                                <select class="form-control form-control-user select2-search supersubcategory" id="category" name="supersubcategory">
                                    <option value="">Select S. SubCategory</option>
                                    
                                </select>
                                @if($errors->has('supersubcategory'))
                                    <p class="text-danger">{{$errors->first('supersubcategory')}}</p>
                                @endif
                            </div>
                        </div>

                        
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                            <label class="form-label-box">Product Thumbnail 1</label>
                                <div class="fallback">
                                    <input name="file1" type="file"  />
                                </div>   
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                            <label class="form-label-box">Product Thumbnail 2</label>
                                <div class="fallback">
                                    <input name="file2" type="file" />
                                </div>   
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Want to add Varient ?</label><br>
                                <input type="checkbox" placeholder="Want to add Varient" name="varient_required" class="wantToAddVarient" style="height:20px; width:20px;">
                            </div>
                        </div>

                        <div class="row col-md-12 col-sm-12 col-12 add_varient">
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="form-group varientTypeClass">
                                    <label class="form-label-box">Varient Type </label> <i class="fa fa-plus addVarientType" style=" margin-left:10px; font-size:20px;color:green"></i>
                                    <select class="form-control form-control-user select2-search varientType" id="varientType" name="varientType">
                                        @foreach ($getVarientType as $key=>$getVarient)
                                            <option value="{{ $getVarient->id ??''}}" getVarientType="{{$getVarient->varient_type ??''}}" @if($key==0)selected @endif>{{ $getVarient->varient_type_name ??'' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="form-label-box">Varient Value</label> <i class="fa fa-plus addVarientValue"  style="margin-left:10px; font-size:20px;color:green"></i>
                                    <select class="select2 varientValueList" multiple="multiple" data-placeholder="Select a Varient Value" style="width: 100%;"  name="varientValue[]">
                                            
                                    </select>
                                </div>
                            </div>
                            
                            <div class=" table-responsive main-table">
                                <table id="example" class="display table table table-bordered data-table" style="width:100%">
                                    <thead class="table-thead">
                                        <tr>
                                            <th>Label</th>
                                            <!-- <th>Label</th> -->
                                            <th>Price</th>
                                            <th>Product code</th>
                                            <!-- <th>Get Log</th>
                                            <th>Image</th>
                                            <th>Stock</th>
                                            <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody class="tableBody">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row col-md-12 col-sm-12 col-12 without_varient">
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="form-label-box">Product Code</label>
                                    <input id="Unit" type="text" placeholder="Product Code" class="form-control form-control-user " name="product_code">
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Specification</label>
                                    <div class="fallback">
                                        <input name="specification" type="file" />
                                    </div>   
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Dimention</label>
                                <input id="Unit" type="text" placeholder="Dimention" class="form-control form-control-user " name="dimention">
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Pack</label>
                                <input id="Unit" type="text" placeholder="Pack" class="form-control form-control-user " name="pack">
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Material</label>
                                <input id="Unit" type="text" placeholder="Material" class="form-control form-control-user " name="material">
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Make In</label>
                                <input id="Unit" type="text" placeholder="Make In" class="form-control form-control-user " name="make_in">
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Tags</label>
                                <input id="Unit" type="text" placeholder="Tags" class="form-control form-control-user " name="tags">
                            </div>
                        </div>
                        
                        

                        <div class="col-md-12 text-right">
                            <button id="success" type="submit" class="submit-btn fplusClass11">
                                Submit
                            </button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('admin.product.add_varient_type');
@include('admin.product.add_varient_value');

@endsection
@section('js')
 
<script>
    $(document).ready(function(){
        $('.add_varient').hide();
        $('.wantToAddVarient').mousedown(function() {
            if (!$(this).is(':checked')) {
                $('.without_varient').hide();
                $('.add_varient').show();
                //$('.add_varient').addClass('showVarientForm');

            }else{
                //$('.tableBody').html('');
                $('.without_varient').show();
                $('.add_varient').hide();
               // $('.add_varient').remove('showVarientForm');
            }
       });
        
    });
// $(document).ready(function() {
//     $('.category').select2();
//     $('.subcategory').select2();
//     $('.supersubcategory').select2();
// });
</script>
<script src="{{asset('assets/admin/js/admin/product_varient_type.js')}}"></script>
<script src="{{asset('assets/admin/js/admin/product_varient_value.js')}}"></script>

@endsection