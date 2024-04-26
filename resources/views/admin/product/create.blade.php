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
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Product Name</label>
                                <input type="name" placeholder="Product Name" class="form-control form-control-user" name="name">
                                @if($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
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

                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Unit</label>
                                <input id="Unit" type="text" placeholder="Unit"
                                    class="form-control form-control-user " name="Unit">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Avg Purchase Price</label>
                                <input id="PurchasePrice" type="text" placeholder="Purchase Price"
                                    class="form-control form-control-user " name="Avg_purchasePrice">
                            </div>
                        </div>
                        
                        
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>   
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group varientTypeClass">
                                <label class="form-label-box">Varient Type </label> <i class="fa fa-plus addVarientType" style=" margin-left:10px; font-size:28px;color:green"></i>
                                <select class="form-control form-control-user select2-search varientType" id="varientType" name="varientType">
                                    @foreach ($getVarientType as $key=>$getVarient)
                                        <option value="{{ $getVarient->id ??''}}" getVarientType="{{$getVarient->varient_type ??''}}" @if($key==0)selected @endif>{{ $getVarient->varient_type_name ??'' }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Varient Value</label> <i class="fa fa-plus addVarientValue"  style="margin-left:10px; font-size:28px;color:green"></i>
                                <select class="select2 varientValueList" multiple="multiple" data-placeholder="Select a Varient Value" style="width: 100%;">
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                            </div>
                        </div>
                        
                        
                        <div class=" table-responsive main-table">
                            <table id="example" class="display table table table-bordered data-table" style="width:100%">
                                <thead class="table-thead">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Created By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="tableBody">
                                    
                                </tbody>
                            </table>
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
// $(document).ready(function() {
//     $('.category').select2();
//     $('.subcategory').select2();
//     $('.supersubcategory').select2();
// });


</script>

<script>
    $(document).ready(function(){
        var count = 0;
        $('.varientValueList').on('select2:select',function(){
            count++;
            var varientValue = $(this).val();
            var html = '<tr class="'+count+'"><td><input type="name" placeholder="Product Name" class="form-control form-control-user" name="name"></td><td><input type="name" placeholder="Product Name" class="form-control form-control-user" name="name"></td><td><input type="name" placeholder="Product Name" class="form-control form-control-user" name="name"></td><td><input type="name" placeholder="Product Name" class="form-control form-control-user" name="name"></td><td><input type="name" placeholder="Product Name" class="form-control form-control-user" name="name"></td><td><input type="name" placeholder="Product Name" class="form-control form-control-user" name="name"></td></tr>';
            $('.tableBody').append(html);
            
        });

        $('.varientValueList').on('select2:unselect',function(){
            $('.'+count).remove();
            count--;
        });

    });
</script>
<script src="{{asset('assets/admin/js/admin/product_create.js')}}"></script>

<script>
    $(document).ready(function(){
       $('.addVarientValueFormSubmit').on('click',function(e){
        e.preventDefault();
        var getVarientTypeiD = $('#varientType').val();
        if(getVarientTypeiD){
            var formData = new FormData($('#addVarientValueForm')[0]);
            formData.append('getVarientTypeiD',getVarientTypeiD);
            console.log(formData);
           $.ajax({
                   url: base_url+"/add-varient-value",
                   method:"post",
                   dataType:"json",
                   data:formData,      
                   contentType: false,
                   processData: false,
                   success:function(response){
                        if(response.status == 200){
                            toastr.success(response.success);
                            
                        }else{
                            toastr.error(response);
                        }
                   },
                    error:function(xhr, textStatus, errorThrown){
                        $.each(xhr.responseJSON.errors,function(key,val){
                        $('.'+key).html(val);
                        });
                    }
           });
        }else{
            toastr.error("Please select varient type");
        }

       });
    });
</script>
@endsection