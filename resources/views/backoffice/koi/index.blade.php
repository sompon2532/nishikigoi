@extends('layouts.backoffice.main')

@section('title', 'Admin | Koi')

@section('head')
    <h1>
        Fish
        <small>Detail</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Fish</li>
    </ol>
@endsection

@section('content')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{ route('koi.create') }}" class="pull-right btn btn-primary">Create Fish</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="datatable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Fish Id</th>
                        <th>Fish</th>
                        <th>Status</th>
                        <th>Management</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($kois as $index => $koi)
                        <tr>
                            <td>{{ $koi->koi_id }}</td>
                            <td>{{ $koi->name }}</td>
                            <td>{{ $koi->status ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <a href="{{ route('koi.edit', ['koi' => $koi->id]) }}"
                                   class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                                <button data-token="{{ csrf_token() }}" data-id="{{ $koi->id }}" data-url="koi" class="btn-delete btn btn-danger btn-xs">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Fish Id</th>
                        <th>Fish</th>
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