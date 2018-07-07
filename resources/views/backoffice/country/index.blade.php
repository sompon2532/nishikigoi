@extends('layouts.backoffice.main')

@section('title', 'Admin | Country')

@section('head')
    <h1>
        Country
        <small>Detail</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Country</li>
    </ol>
@endsection

@section('content')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{ route('country.create') }}" class="pull-right btn btn-primary">Create Country</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>Management</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($countries as $index => $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->status ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a href="{{ route('country.edit', ['country' => $country->id]) }}"
                               class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                            <button data-token="{{ csrf_token() }}" data-id="{{ $country->id }}" data-url="country" class="btn-delete btn btn-danger btn-xs">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Country</th>
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