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
                                <label class="form-label-box">Product Code</label>
                                <input id="Unit" type="text" placeholder="Product Code" class="form-control form-control-user " name="product_code">
                            </div>
                        </div>
                       

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Color Varients</label> 
                                <select class="select2 varientValueList" multiple="multiple" data-placeholder="Select a Varient Value" style="width: 100%;"  name="varientValue[]">
                                    @foreach($getColors as $getColor)
                                    <option value="{{$getColor->id ??''}}" varientValueName="{{$getColor->color_name ??''}}">{{$getColor->color_name ??''}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            
                        <div class=" table-responsive main-table">
                                <table id="example" class="display table table table-bordered data-table" style="width:100%">
                                    <thead class="table-thead">
                                        <tr>
                                            <th>Color</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tableBody">
                                        
                                    </tbody>
                                </table>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Size Varients</label> 
                                <select class="select2 sizevarientValueList" multiple="multiple" data-placeholder="Select Size" style="width: 100%;"  name="size[]">
                                    @foreach($getSizes as $getSize)
                                    <option value="{{$getSize->id ??''}}" sizevarientValueName="{{$getSize->size ??''}}">{{$getSize->size ??''}}-{{$getSize->type ??''}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            
                        <div class="table-responsive main-table">
                                <table id="example" class="display table table table-bordered data-table" style="width:100%">
                                    <thead class="table-thead">
                                        <tr>
                                            <th>Size</th>
                                            <th>Price</th>
                                            <th>Gst</th>
                                        </tr>
                                    </thead>
                                    <tbody class="sizevarientTable">
                                        
                                    </tbody>
                                </table>
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

<!-- @include('admin.product.add_varient_type');
@include('admin.product.add_varient_value'); -->

@endsection
@section('js')
 
<script>
    //Append input box according to varient Value in table
$(document).ready(function(){

    $('.varientValueList').on('select2:select',function(){
        //Get Selected options
        var selectedOptions = $(this).find('option:selected');
        //Empty the table
        $('.tableBody').empty('');
        //selected avarient array loop
        selectedOptions.each(function(){
            //Get the selected options
            var getType = $(this).text();
            //Get  the selected option id
            var getTypeId = $(this).val();
            var html = '<tr class="'+getType+''+getTypeId+'"><td><input type="text" value="'+getType+'" placeholder="Product Name" class="form-control form-control-user" name="varient_name[]" readonly></td><td><input type="file" class="form-control form-control-user" name="image[]"></td></tr>';
            $('.tableBody').append(html); 
        });
    });

    //Remove the varient from the table list
    $('.varientValueList').on('select2:unselect',function(){
        //get the unselected varienr value list
        var notSelected = $(".varientValueList").find('option').not(':selected');
        //array loop
        notSelected.each(function(){
            //get varient value
            var removeVarientVal = $(this).text();
            var getTypeId = $(this).val();
            //remove varient
            $('.'+removeVarientVal+getTypeId).remove();
        });
    });
});
</script>

<script>
//Append input box according to size varient in table
$(document).ready(function(){

    $('.sizevarientValueList').on('select2:select',function(){
        //Get Selected options
        var selectedOptions = $(this).find('option:selected');
        //Empty the table
        $('.sizevarientTable').empty('');
        //selected avarient array loop
        selectedOptions.each(function(){
            //Get the selected options
            var getType = $(this).text();
            //Get  the selected option id
            var getTypeId = $(this).val();
            var html = '<tr class="'+getType+''+getTypeId+'"><td><input type="text" value="'+getType+'" placeholder="Product size" class="form-control form-control-user" name="size[]" readonly></td><td><input type="text" class="form-control form-control-user" name="price[]"></td><td><input type="text" class="form-control form-control-user" name="gst[]"></td></tr>';
            $('.sizevarientTable').append(html); 
        });
    });

    //Remove the varient from the table list
    $('.sizevarientValueList').on('select2:unselect',function(){
        //get the unselected varienr value list
        var notSelected = $(".sizevarientValueList").find('option').not(':selected');
        //array loop
        notSelected.each(function(){
            //get varient value
            var removeVarientVal = $(this).text();
            var getTypeId = $(this).val();
            //remove varient
            $('.'+removeVarientVal+getTypeId).remove();
        });
    });
});
</script>

<!-- <script src="{{asset('assets/admin/js/admin/product_varient_type.js')}}"></script> -->
<!-- <script src="{{asset('assets/admin/js/admin/product_varient_value.js')}}"></script>  -->

@endsection