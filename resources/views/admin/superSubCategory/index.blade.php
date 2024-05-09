@extends('admin.layout.app')
@section('title',"SuperSubCategory List")
@section('content')
@include('admin.layout.partial.table.css')
<div class="main-container-box">
    <div class="container-fluid">
        <div class="main-section-box">
            <div class="heading-box">
                <h1 class="heading">Super SubCategory</h1>
                <a href="{{ route('add.supersubcategory') }}">
                    <h3 class="add-user-text"><i class="fa fa-plus-circle" aria-hidden="true"></i> ADD </h3>
                </a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class=" table-responsive main-table">
                        <table id="example" class="display table table table-bordered data-table" style="width:100%">
                            <thead class="table-thead">
                                <tr>
                                    <th class="sn-number">S.No</th>
                                    <!-- <th>Category</th>
                                    <th>SubCategory</th> -->
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Created By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.layout.partial.table.js')
@endsection
@section('js')
<script src="{{url('/assets/admin/js/admin/delete.js')}}"></script>
<script src="{{url('/assets/admin/js/admin/status.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.data-table').DataTable({
                                    processing:true,
                                    serverSide:true,
                                    stateSave:true,
                                    ordering:false,
                                    oLanguage:{sProcessing: "<div class='loader'><img src='{{url('/assets/admin/img/loader1.gif')}}' height='80px' width='100px'></div>"},
                                    ajax:"{{ route('supersubcategory.datatable') }}",
                                    columns:[
                                                {   data: 'id',  name:'id',
                                                    render:function(data,type,row,meta){
                                                        return row.id;
                                                    }
                                                },
                                                // {   data: 'category_id',  name: 'category_id',
                                                //     render:function(data,type,row,meta){
                                                //         return row.get_category.name;
                                                //     }
                                                // },
                                                // {   data: 'subcategory_id',  name: 'subcategory_id',
                                                //     render:function(data,type,row,meta){
                                                //         return row.get_sub_category.name;
                                                //     }
                                                // },
                                                {   data: 'name',      name: 'name'},
                                                {   data: 'image',     name: 'image',
                                                        render:function(data,type,row,meta){

                                                            return `<img src='`+data+`' height='60px' width='100px'>`;
                                                        }
                                                },
                                                {   data: 'status',      name: 'status',
                                                    render:function(data,type,row,meta){
                                                        $enableBtn = `<p class="changeStatus`+row.slug+`" onclick="return changeStatus('`+row.slug+`','supersubcategory-status')"><span class="badge badge-success">Enable</span></p>`;
                                                        $disableBtn = `<p class="changeStatus`+row.slug+`" onclick="return changeStatus('`+row.slug+`','supersubcategory-status')"><span class="badge badge-danger">Disable</span></p>`;
                                                        return (data)? $enableBtn: $disableBtn;
                                                    }
                                                },
                                                {   data: 'added_by',name: 'created_at',
                                                        render:function(data,type,row,meta){
                                                            return row.added_by.name+"<br>("+row.created_at+")";
                                                        }
                                                },
                                                {   data: 'action',    name: 'action', 
                                                    render:function(data,type,row,meta){
                                                        var btn1 = `<a href="{{url('edit-supersubcategory')}}/`+row.slug+`"> <i class="fa fa-pencil-square edit-icon"  aria-hidden="true"></i></a>`;
                                                        var btn2 = `<i class="fa fa-trash delete-icon" aria-hidden="true" onclick="return deleteCategory('`+row.slug+`','delete-supersubcategory')"></i>`;
                                                        var actionBtn = btn1+btn2;
                                                        return actionBtn; 
                                                    },
                                                    orderable: false, searchable: true},
                                            ]
        });
    });

    
  </script>
  
@endsection
