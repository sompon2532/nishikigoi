@extends('layouts.backoffice.main')

@section('title', 'Admin | Alliance')

@section('head')
    <h1>
        Alliance
        <small>Detail</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Alliance</li>
    </ol>
@endsection

@section('content')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{ route('partner.create') }}" class="pull-right btn btn-primary">Create  Alliance</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Alliance</th>
                        <th>Status</th>
                        <th>Management</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($partners as $index => $partner)
                        <tr>
                            <td>{{ $partner->id }}</td>
                            <td>{{ $partner->koikichi }}</td>
                            <td>{{ $partner->status ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <a href="{{ route('partner.edit', ['partner' => $partner->id]) }}"
                                   class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                                <button data-token="{{ csrf_token() }}" data-id="{{ $partner->id }}" data-url="partner" class="btn-delete btn btn-danger btn-xs">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Alliance</th>
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