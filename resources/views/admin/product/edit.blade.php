@extends('admin.layout.app')
@section('title',"Edit Product")
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
                        <h1 class="heading">Edit Product</h1>
                </div>

            </div>
            <div class="add-input-box">
                <form method="post" action="{{route('update.product',[$getProduct->slug ??''])}}" id="add-inventory" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Product Name*</label>
                                <input type="text" placeholder="Product Name" class="form-control form-control-user" name="product_name" value="{{$getProduct->name ??''}}">
                                @if($errors->has('product_name'))
                                    <p class="text-danger">{{$errors->first('product_name')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            
                            <div class="form-group">
                                <label class="form-label-box" for="sel1">Category*</label>
                                <select class="form-control form-control-user select2-search category" id="category" name="category">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if($getProduct->category_id == $category->id) selected @endif>{{ $category->name }}</option>
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
                                <select class="form-control form-control-user select2-search subcategory" id="subcategory" name="subcategory">
                                <option value="{{ $getProduct->subCategory_id }}" selected>{{ $getProduct->getSubCategoryDetail->name ??'' }}</option>
                                </select>
                                @if($errors->has('subcategory'))
                                    <p class="text-danger">{{$errors->first('subcategory')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box" for="sel1">S. SubCategory*</label>
                                <select class="form-control form-control-user select2-search supersubcategory" id="category" name="supersubcategory">
                                <option value="{{ $getProduct->sup_subCategory_id }}" selected>{{ $getProduct->superSubCategoryDetail->name ??'' }}</option>
                                    
                                </select>
                                @if($errors->has('supersubcategory'))
                                    <p class="text-danger">{{$errors->first('supersubcategory')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                            <label class="form-label-box">Product Image*</label>
                                <div class="fallback">
                                    <input name="product_img[]" type="file"  multiple="multiple" accept=".png, .jpg, .jpeg"/>
                                       @if($errors->has('product_img'))
                                       <p class="text-danger">{{$errors->first('product_img')}}</p>
                                       @endif
                                </div>   
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">HSN Code*</label>
                                <input id="Unit" type="text" placeholder="HSN Code" class="form-control form-control-user " name="hsn_code" value="{{$getProduct->hsn_code ??''}}">
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
                                    <option value="{{$getColor->id ??''}}" varientValueName="{{$getColor->color_name ??''}}"  @if(in_array($getColor->id,$getProduct->color_id)) selected @endif>{{$getColor->color_name ??''}}</option>
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
                                        @if(count($getProduct->color_id))
                                            @foreach($getProduct->color as $color)
                                                <tr class="{{$color->color_name}}{{$color->id}}">
                                                    <td><input type="text" value="{{$color->color_name}}" placeholder="Product Name" class="form-control form-control-user" name="varient_name[]" readonly></td>
                                                    <td><input type="file" class="form-control form-control-user" name="varient_image[{{$color->color_name}}][]" multiple="multiple" accept=".png, .jpg, .jpeg" ></td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Specification*<sub>(Pdf only)</sub></label>
                                    <div class="fallback">
                                        <input name="specification" type="file" accept=".pdf"/>
                                        @if($errors->has('specification'))
                                            <p class="text-danger">{{$errors->first('specification')}}</p>
                                        @endif
                                    </div>   
                            </div>
                        </div>
                       
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">MOQ*</label>
                                <input id="Unit" type="text" placeholder="Pack" class="form-control form-control-user " name="moq" value="{{$getProduct->moq ??''}}">
                                @if($errors->has('moq'))
                                    <p class="text-danger">{{$errors->first('moq')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Material*</label>
                                <select class="select2 " multiple="multiple" data-placeholder="Select a Material" style="width: 100%;"  name="material[]">
                                   
                                    @foreach($materials as $material)
                                    <option value="{{$material->id ??''}}" @if(in_array($material->id,$getProduct->material_id)) selected @endif>{{$material->name ??''}}</option>
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
                                       <option value="{{$getSize->id ??''}}" sizevarientValueName="{{$getSize->size ??''}}"  pricevarientValueName="{{$getSize->price ??'0'}}" gstvarientValueName="{{$getSize->gst ??'0'}}"  @if(in_array($getSize->id,$getProduct->size_id)) selected @endif>{{$getSize->size ??''}}</option>
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
                                    @if(count($getProduct->size))
                                        @foreach($getProduct->size_varient as $size)
                                        <tr class="{{$size->id}}">
                                            <td><input type="text" value="{{$size->size}}" placeholder="Product size" class="form-control form-control-user" name="varient_size[]" readonly></td>
                                            <td><input type="text" value="{{$size->price}}" class="form-control form-control-user" name="price[]" required></td>
                                            <td><input type="text" value="{{$size->gst}}" class="form-control form-control-user" name="gst[]" required></td>
                                        </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                        </div>


                        
                        <br>
                        <hr>
                        
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">General Price*</label>
                                <input id="Unit" type="text" placeholder="General Price" class="form-control form-control-user " name="general_price" value="{{$getProduct->gen_price ??''}}">
                                @if($errors->has('general_price'))
                                    <p class="text-danger">{{$errors->first('general_price')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">General Gst* %</label>
                                <input id="Unit" type="text" placeholder="General Gst %" class="form-control form-control-user " name="general_gst" value="{{$getProduct->gen_gst ??''}}">
                                @if($errors->has('general_gst'))
                                    <p class="text-danger">{{$errors->first('general_gst')}}</p>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box"> Area Of Use</label>*</label>
                                <select class="select2 " multiple="multiple" data-placeholder="Select a Area Of use" style="width: 100%;"  name="areaOfuse[]">
                                    @foreach($areaOfUses as $areaOf)
                                    <option value="{{$areaOf->id ??''}}" @if(in_array($areaOf->id,$getProduct->area_of_use_id)) selected @endif>{{$areaOf->area_of_use ??''}}</option>
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
                                <select class="select2 " multiple="multiple" data-placeholder="Select a Ideal for" style="width: 100%;"  name="idealfor[]">
                                    @foreach($idealFor as $ideal)
                                    <option value="{{$ideal->id ??''}}" @if(in_array($ideal->id,$getProduct->ideal_for_id)) selected @endif>{{$ideal->ideal_for ??''}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('idealfor'))
                                    <p class="text-danger">{{$errors->first('idealfor')}}</p>
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
                        
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Description*</label>
                                <textarea class="form-control" rows="3"  name="description">{{$getProduct->description ??''}}</textarea>
                                
                                @if ($errors->has('description'))
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                @endif
                                
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="form-group Recommended-check">
                                <input id="Unit" type="checkbox" placeholder="Recommended" class="form-control-user checkbox" name="recommended" style="width:20px" @if($getProduct->is_recommended) checked @endif>
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
    
    var countSelectedColor = "{{count($getProduct->color_id)}}"; 
    if(countSelectedColor >0){
        $('.colorTable').show();
    }else{
        $('.colorTable').hide();
    }
    $('.varientValueList').on('select2:select',function(){
        $('.colorTable').show();
        //Get Selected options
        var selectedOptions = $(this).find('option:selected');
        //Empty the table
        $('.tableBody').empty('');

        //Update count
        countSelectedColor ++;
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
        //Update count
        countSelectedColor--;
        if(countSelectedColor){
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
    let size_varient = '{{ json_encode($getProduct->size_varient) }}';
    size_varient = size_varient.replaceAll('&quot;', '"');
    size_varient = JSON.parse(size_varient);
    var countSelectedSize = "{{count($getProduct->size_id)}}"; 
    if(countSelectedSize > 0){
        $('.sizeTable').show();
    }else{
        $('.sizeTable').hide();
    }

   
    $(document).ready(function(){
        
        $('.sizevarientValueList').on('select2:select',function(){
            $('.sizeTable').show();
            //Get Selected options
            var selectedOptions = $(this).find('option:selected');
            //Empty the table
            $('.sizevarientTable').empty('');
            
            //Update size count
            countSelectedSize++;
            
            //selected avarient array loop
            selectedOptions.each(function(){

                //Get the selected options
                var getType = $(this).text();
                //Get  the selected option id
                var getTypeId = $(this).val();

                //Match the data 
                var price = '';
                var gst = '';
                size_varient.forEach(item => {
                    // Access properties of each object
                    if(item.id == getTypeId){
                        price = item.price;
                        gst = item.gst;
                    }
                });

                var html = '<tr class="'+getTypeId+'"><td><input type="text" value="'+getType+'" placeholder="Product size" class="form-control form-control-user" name="varient_size[]" readonly></td><td><input type="text" value="'+price+'" class="form-control form-control-user" name="price[]" required></td><td><input type="text" class="form-control form-control-user" value="'+gst+'" name="gst[]" required></td></tr>';
                $('.sizevarientTable').append(html); 
            });
        });

        //Remove the varient from the table list
        $('.sizevarientValueList').on('select2:unselect',function(){
            //get the unselected varienr value list
            var notSelected = $(".sizevarientValueList").find('option').not(':selected');

            //Update size count
            countSelectedSize--;
            if(countSelectedSize){
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
<!-- <script src="{{asset('assets/admin/js/admin/product_varient_value.js')}}"></script>  -->

@endsection