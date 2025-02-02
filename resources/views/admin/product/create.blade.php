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
                <form method="post" action="{{route('add.product')}}" id="add-inventory" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Product Name*</label>
                                <input type="text" placeholder="Product Name" class="form-control form-control-user" name="product_name" value="{{old('product_name')}}" required>
                                @if($errors->has('product_name'))
                                    <p class="text-danger">{{$errors->first('product_name')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            
                            <div class="form-group">
                                <label class="form-label-box" for="sel1">Category*</label>
                                <select class="form-control form-control-user select2-search category" id="category" name="category" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ (collect(old('category'))->contains($category->id)) ? 'selected':'' }}>{{ $category->name }}</option>
                                    @endforeach
                                    
                                </select>
                                @if($errors->has('category'))
                                    <p class="text-danger">{{$errors->first('category')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box" for="sel1">SubCategory*</label>
                                <select class="form-control form-control-user select2-search subcategory" id="subcategory" name="subcategory" required>
                                    <option value="" >Select SubCategory</option>
                                </select>
                                @if($errors->has('subcategory'))
                                    <p class="text-danger">{{$errors->first('subcategory')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box" for="sel1">S. SubCategory*</label>
                                <select class="form-control form-control-user select2-search supersubcategory" id="category" name="supersubcategory" required>
                                    <option value="">Select S. SubCategory</option>
                                    
                                </select>
                                @if($errors->has('supersubcategory'))
                                    <p class="text-danger">{{$errors->first('supersubcategory')}}</p>
                                @endif
                            </div>
                        </div>

                           <div class="col-md-3 col-sm-6 col-12">
                               <div class="form-group required">
                                    <label for="">Product Image*
                                        {{-- (Image Dimension should be 1366*550) --}}
                                    </label>
                                    <input type="file" onchange="return fileValidation()"
                                        accept="image/png, image/jpg, image/jpeg" class="form-control"
                                        name="product_img[]" id="caseimage" multiple accept=".png, .jpg, .jpeg" required/>
                                    <p class="notice-text"> (Max 5 files allowed | Size less than 1 MB)</p>
                                    <span class="text-danger">
                                    </span>
                                    <div>
                                        <p id="files-area">
                                            <span id="filesList">
                                                <span id="files-names"></span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">HSN Code*</label>
                                <input id="Unit" type="text" placeholder="HSN Code" class="form-control form-control-user " name="hsn_code" value="{{old('hsn_code')}}" required>
                                @if($errors->has('hsn_code'))
                                <p class="text-danger">{{$errors->first('hsn_code')}}</p>
                                @endif
                            </div>
                        </div>
                        

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Color Varients</label> 
                                <select class="select2 varientValueList" multiple="multiple" data-placeholder="Select a Varient Value" style="width: 100%;"  name="color[]">
                                    @foreach($getColors as $getColor)
                                    <option value="{{$getColor->id ??''}}" varientValueName="{{$getColor->color_name ??''}}">{{$getColor->color_name ??''}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('color'))
                                <p class="text-danger">{{$errors->first('color')}}</p>
                                @endif
                            </div>
                        </div>
                            
                        <div class=" table-responsive main-table colorTable">
                                <table id="example" class="display table table table-bordered data-table" style="width:100%">
                                    <thead class="table-thead">
                                        <tr>
                                            <th>Color</th>
                                            <th>Image*</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tableBody">
                                        
                                    </tbody>
                                </table>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Specification*<sub>(Pdf only)</sub></label>
                                    <div class="fallback">
                                        <input name="specification" type="file" accept=".pdf" required />
                                        @if($errors->has('specification'))
                                            <p class="text-danger">{{$errors->first('specification')}}</p>
                                        @endif
                                    </div>   
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">MOQ*</label>
                                <input id="Unit" type="text" placeholder="Pack" class="form-control form-control-user " name="moq" value="{{old('moq')}}" required>
                                @if($errors->has('moq'))
                                    <p class="text-danger">{{$errors->first('moq')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Material*</label>
                                <select class="select2 " multiple="multiple" data-placeholder="Select a Material" style="width: 100%;"  name="material[]" required>
                                    @foreach($materials as $material)
                                    <option value="{{$material->id ??''}}" {{ (collect(old('material'))->contains($material->id)) ? 'selected':'' }}>{{$material->name ??''}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('material'))
                                    <p class="text-danger">{{$errors->first('material')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Size Varients</label> 
                                <select class="select2 sizevarientValueList" multiple="multiple" data-placeholder="Select Size" style="width: 100%;"  name="size[]">
                                    @foreach($getSizes as $getSize)
                                    <option value="{{$getSize->id ??''}}" sizevarientValueName="{{$getSize->size ??''}}" >{{$getSize->size ??''}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('size'))
                                    <p class="text-danger">{{$errors->first('size')}}</p>
                                @endif
                            </div>
                        </div>
                            
                        <div class="table-responsive main-table sizeTable">
                                <table id="example" class="display table table table-bordered data-table" style="width:100%">
                                    <thead class="table-thead">
                                        <tr>
                                            <th>Size</th>
                                            <th>Price*</th>
                                            <th>Gst* %</th>
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
                                <label class="form-label-box">General Price*</label>
                                <input id="Unit" type="text" placeholder="General Price" class="form-control form-control-user " name="general_price" value="{{old('general_price')}}" required>
                                @if($errors->has('general_price'))
                                    <p class="text-danger">{{$errors->first('general_price')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">General Gst* %</label>
                                <input id="Unit" type="text" placeholder="General Gst %" class="form-control form-control-user " name="general_gst" value="{{old('general_gst')}}" required>
                                @if($errors->has('general_gst'))
                                    <p class="text-danger">{{$errors->first('general_gst')}}</p>
                                @endif
                            </div>
                        </div>
                        
                        <!-- <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Tags</label>
                                <input id="Unit" type="text" placeholder="Tags" class="form-control form-control-user " name="tags">
                                @if($errors->has('tags'))
                                    <p class="text-danger">{{$errors->first('tags')}}</p>
                                @endif
                            </div>
                        </div> -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box"> Area Of Use</label>*</label>
                                <select class="select2 " multiple="multiple" data-placeholder="Select a Area Of use" style="width: 100%;"  name="areaOfuse[]" required>
                                    @foreach($areaOfUses as $areaOf)
                                    <option value="{{$areaOf->id ??''}}" {{ (collect(old('areaOfuse'))->contains($areaOf->id)) ? 'selected':'' }}>{{$areaOf->area_of_use ??''}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('areaOfuse'))
                                    <p class="text-danger">{{$errors->first('areaOfuse')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Ideal For*</label>
                                <select class="select2 " multiple="multiple" data-placeholder="Select a Ideal for" style="width: 100%;"  name="idealfor[]" required>
                                    @foreach($idealFor as $ideal)
                                    <option value="{{$ideal->id ??''}}" {{ (collect(old('idealfor'))->contains($ideal->id)) ? 'selected':'' }}>{{$ideal->ideal_for ??''}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('idealfor'))
                                    <p class="text-danger">{{$errors->first('idealfor')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Description*</label>
                                <textarea class="form-control" rows="3"  name="description" required>{{old('description')}}</textarea>
                                
                                @if ($errors->has('description'))
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                @endif
                                
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="form-group Recommended-check">
                                <input id="Unit" type="checkbox" placeholder="Recommended" class="form-control-user checkbox" name="recommended" style="width:20px">
                                <label class="form-label-box">Recommended</label>
                                @if($errors->has('recommended'))
                                    <p class="text-danger">{{$errors->first('recommended')}}</p>
                                @endif
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
    $('.colorTable').hide();
    $('.sizeTable').hide();
    
    var countSelectedColor = 0;
    $('.varientValueList').on('select2:select',function(){
        $('.colorTable').show();
        //Get Selected options
        var selectedOptions = $(this).find('option:selected');
        //Update the selected count 
        countSelectedColor++;
        if(countSelectedColor>0){
            $('.colorTable').show();
        }else{
            $('.colorTable').hide();
        }
        //Empty the table
        $('.tableBody').empty('');
        //selected avarient array loop
        selectedOptions.each(function(){
            //Get the selected options
            var getType = $(this).text();
            //Get  the selected option id
            var getTypeId = $(this).val();
            var html = '<tr class="'+getType+''+getTypeId+'"><td><input type="text" value="'+getType+'" placeholder="Product Name" class="form-control form-control-user" name="varient_name[]" readonly></td><td><input type="file" class="form-control form-control-user" name="varient_image['+getType+'][]" multiple="multiple" accept=".png, .jpg, .jpeg" required></td></tr>';
            $('.tableBody').append(html); 
        });
    });

    //Remove the varient from the table list
    $('.varientValueList').on('select2:unselect',function(){
        //get the unselected varienr value list
        var notSelected = $(".varientValueList").find('option').not(':selected');

        //Update the selected count 
        countSelectedColor--;
        if(countSelectedColor>0){
            $('.colorTable').show();
        }else{
            $('.colorTable').hide();
        }
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
    var countSelectedSize = 0;
    $('.sizevarientValueList').on('select2:select',function(){
        $('.sizeTable').show();
        //Get Selected options
        var selectedOptions = $(this).find('option:selected');
        //Update the selected count 
        countSelectedSize++;
        if(countSelectedSize>0){
            $('.sizeTable').show();
        }else{
            $('.sizeTable').hide();
        }

        //Empty the table
        $('.sizevarientTable').empty('');
        //selected avarient array loop
        selectedOptions.each(function(){
            //Get the selected options
            var getType = $(this).text();
            //Get  the selected option id
            var getTypeId = $(this).val();
            var html = '<tr class="'+getTypeId+'"><td><input type="text" value="'+getType+'" placeholder="Product size" class="form-control form-control-user" name="varient_size[]" readonly></td><td><input type="text" class="form-control form-control-user" name="price[]" required></td><td><input type="text" class="form-control form-control-user" name="gst[]" required></td></tr>';
            $('.sizevarientTable').append(html); 
        });
    });

    //Remove the varient from the table list
    $('.sizevarientValueList').on('select2:unselect',function(){
        //get the unselected varienr value list
        var notSelected = $(".sizevarientValueList").find('option').not(':selected');

        //Update the selected count 
        countSelectedSize--;
        if(countSelectedSize>0){
            $('.sizeTable').show();
        }else{
            $('.sizeTable').hide();
        }

        //array loop
        notSelected.each(function(){
            //get varient value
            var removeVarientVal = $(this).text();
            var getTypeId = $(this).val();
            //remove varient
            $('.'+getTypeId).remove();
        });
    });
});
</script>

<!-- <script src="{{asset('assets/admin/js/admin/product_varient_type.js')}}"></script> -->
<script src="{{asset('assets/admin/js/admin/upload_multiple_file.js')}}"></script> 
@endsection