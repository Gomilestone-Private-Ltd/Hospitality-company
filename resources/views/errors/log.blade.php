@extends('admin.layout.app')
@section('title', 'Today Log List')
@section('content')
    @include('admin.layout.partial.table.css')
    <section class="section">
        <div class="section-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header ">
                                <div class="col-md-10">
                                    <h3>Today Log List</h3>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Content</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach ($logCollections as $key => $logCollection)
                                            <tr>

                                                <td>{{ $key + 1 ?? '' }}</td>
                                                <td>{{ $logCollection['content'] ?? '' }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
    </section>

@endsection
@section('js')
    @include('admin.layout.partial.table.js')
@endsection
