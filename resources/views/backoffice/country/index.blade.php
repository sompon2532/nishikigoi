@extends('layouts.backoffice.main')

@section('title', 'Admin | Country')

@section('head')
    <h1>
        ประเทศ
        <small>รายการ</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
        <li class="active">ประเทศ</li>
    </ol>
@endsection

@section('content')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{ route('country.create') }}" class="pull-right btn btn-primary">สร้างประเทศ</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>ประเทศ</th>
                        <th>สถานะ</th>
                        <th>การจัดการ</th>
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
                        <th>ประเทศ</th>
                        <th>สถานะ</th>
                        <th>การจัดการ</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@endsection