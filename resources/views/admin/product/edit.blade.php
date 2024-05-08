@extends('admin.layout.app')
@section('title',"Category")
@section('content')

<div class="main-container-box">
    <div class="container-fluid">
        <div class="main-section-box">
            <div class="heading-box">
                <div class="backBtn">
                    <a class="backBtn-icon" href="/inventory-item"> 
                        <img src="{{ url('/assets/img/left.png') }}" alt=""></a>
                        <h1 class="heading">Add Category</h1>
                </div>

            </div>
            <div class="add-input-box">
                <form method = "post" action="{{ url('add-inventory-item') }}" id = "add-inventory"
                    enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Item Name</label>
                                <input type="name" placeholder="Item" value="{{$getProduct->name ??''}}" class="form-control form-control-user"
                                    name="Item">
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
                                <label class="form-label-box">Sap Code </label>
                                <input type="text" placeholder="Sap Code" class="form-control form-control-user "
                                    name="Sap_Code">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">HSN Code </label>
                                <input type="text" placeholder="HSN Code" class="form-control form-control-user "
                                    name="HSN_Code">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Item Image</label>
                                <input type="file" class="form-control form-control-user " name="file">
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