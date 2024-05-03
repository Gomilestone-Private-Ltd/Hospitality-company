@extends('admin.layout.app')
@section('title',"Work With Us")
@section('content')
@include('admin.layout.partial.table.css')
<div class="main-container-box">
    <div class="container-fluid">
        <div class="main-section-box">
            <div class="heading-box">
                <h1 class="heading">Work With Us</h1>
                <!-- <a href="#">
                    <h3 class="add-user-text"><i class="fa fa-plus-circle" aria-hidden="true"></i> ADD </h3>
                </a> -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class=" table-responsive main-table">
                        <table id="example" class="display table table table-bordered data-table" style="width:100%">
                            <thead class="table-thead">
                                <tr>
                                    <th class="sn-number">S.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>File</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody >
                               
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
<script type="text/javascript">
    $(document).ready(function() {
        $('.data-table').DataTable({
                                processing:true,
                                serverSide:true,
                                stateSave:true,
                                ordering:false,
                                oLanguage:{sProcessing: "<div class='loader'><img src='{{url('/assets/admin/img/loader1.gif')}}' height='100px' width='100px'></div>"},
                                ajax:"{{ route('work.with.us') }}",
                                columns:[
                                         {data:'id',name:'id'},
                                         {data:'name',name:'name'},
                                         {data:'email',name:'email'},
                                         {data:'file',name:'file',
                                            render:function(data,type,row,meta){
                                                if(row.file == "No File Found"){
                                                    return "No File Found";
                                                }else{
                                                    return `<a href="{{asset('`+row.file+`')}}"><i class="fa fa-eye delete-icon" aria-hidden="true" target="_blank"></i>`;
                                                }
                                                
                                            }, 
                                         },
                                         {data:'created_at',name:'created_at'},
                                         {data:'action',name:'action',
                                            render:function(data,type,row,meta){
                                                var btn1 = `<a href="{{url('view-work-with-us')}}/`+row.slug+`"> <i class="fa fa-eye edit-icon"  aria-hidden="true"></i></a>`;
                                                var btn2 = `<i class="fa fa-trash delete-icon" aria-hidden="true" onclick="return deleteCategory('`+row.slug+`','delete-work-with-us')"></i>`;
                                                        
                                                return btn1+btn2;
                                            }
                                         },
                                ]
        });
    });

  </script>

@endsection