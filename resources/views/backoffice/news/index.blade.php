@extends('layouts.backoffice.main')

@section('title', 'Admin | News')

@section('head')
    <h1>
        News
        <small>Detail</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">News </li>
    </ol>
@endsection

@section('content')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{ route('news.create') }}" class="pull-right btn btn-primary">Create News </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="datatable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>News </th>
                        <th>Status</th>
                        <th>Management</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($news as $index => $news)
                    <tr>
                        <td>{{ $news->id }}</td>
                        <td>{{ $news->name }}</td>
                        <td>{{ $news->status ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a href="{{ route('news.edit', ['news' => $news->id]) }}"
                               class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                            <button data-token="{{ csrf_token() }}" data-id="{{ $news->id }}" data-url="news" class="btn-delete btn btn-danger btn-xs">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>News </th>
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

@push('scripts')
@endpush