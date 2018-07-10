@extends('layouts.backoffice.main')

@section('title', 'Admin | Strain')

@section('head')
    <h1>
        Breed
        <small>Detail</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Breed</li>
    </ol>
@endsection

@section('content')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{ route('strain.create') }}" class="pull-right btn btn-primary">Create Breed</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Breed</th>
                        <th>Status</th>
                        <th>Management</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($strains as $index => $strain)
                    <tr>
                        <td>{{ $strain->id }}</td>
                        <td>{{ $strain->name }}</td>
                        <td>{{ $strain->status ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a href="{{ route('strain.edit', ['strain' => $strain->id]) }}"
                               class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                            <button data-token="{{ csrf_token() }}" data-id="{{ $strain->id }}" data-url="strain" class="btn-delete btn btn-danger btn-xs">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Breed</th>
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