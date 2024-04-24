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
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Item Name</label>
                                <input type="name" placeholder="Item" class="form-control form-control-user"
                                    name="Item">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            {{-- <div class="form-group">
                                <label class="form-label-box">Category</label>
                                <input id="Category" type="text" placeholder="Category"
                                    class="form-control form-control-user" name="Category">
                            </div> --}}
                            <div class="form-group">
                                <label class="form-label-box" for="sel1">Category</label>
                                <select class="form-control form-control-user" id="category" name="Category">
                                    <option value="0">Select Category</option>
                                    @if(isset($inventCat))
                                    @foreach ($inventCat as $data)
                                        <option value="{{ $data->id }}">{{ $data->cat_name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Sub Category</label>
                                <input id="SubCategory" type="text" placeholder="Sub Category"
                                    class="form-control form-control-user " name="SubCategory">
                            </div>
                        </div>
                        {{-- <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Total (₹)</label>
                                <input id="Total" type="text" placeholder="Total"
                                    class="form-control form-control-user " name="Total">
                            </div>
                        </div> --}}
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
                        {{-- <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Current Stock </label>
                                <input id="CurrentStock" type="text" placeholder="Current Stock"
                                    class="form-control form-control-user " name="CurrentStock">
                            </div>
                        </div> --}}
                        {{-- <div class="col-md-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label class="form-label-box">Avg Purchase Price Without Tax</label>
                                <input type="text" placeholder="Avg Purchase Price Without Tax"
                                    class="form-control form-control-user " name="Avg_purchasePrice_withouttax">
                            </div>
                        </div> --}}

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