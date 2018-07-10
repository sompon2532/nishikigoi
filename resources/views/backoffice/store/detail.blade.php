@extends('layouts.backoffice.main')

@section('title', 'Admin | Store')

@section('head')
    <h1>
        Fish ( {{ $store->name }} )
        <small>Detail</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('store.index') }}"><i class="fa fa-stop"></i> Store</a></li>
        <li class="active">Fish ( {{ $store->name }} )</li>
    </ol>
@endsection

@section('content')
    <div class="col-xs-12">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <table id="datatable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Fish Id</th>
                        <th>Fish</th>
                        <th>Owner</th>
                        <th>Status</th>
                        <th>Management</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($store->kois as $index => $koi)
                        <tr>
                            <td>{{ $koi->koi_id }}</td>
                            <td>{{ $koi->name }}</td>
                            <td>{{ $koi->user ? $koi->user->name : 'Koikichi Farm'  }}</td>
                            <td>{{ $koi->status ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <a href="{{ route('koi.edit', ['koi' => $koi->id]) }}"
                                   class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Fish Id</th>
                        <th>Fish</th>
                        <th>Owner</th>
                        <th>Status</th>
                        <th>Management</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@endsection