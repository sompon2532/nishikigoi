@extends('layouts.backoffice.main')

@section('title', 'Event')

@section('head')
    <h1>
        Event
        <small>Detail</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('event.index') }}"><i class="fa fa-gamepad"></i> Event</a></li>
        <li class="active">Detail</li>
    </ol>
@endsection

@section('content')
    <!-- right column -->
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Member</h3>
            </div>
            <!-- /.box-header -->
            <div class="row">
                <div class="col-xs-12" style="padding-bottom: 15px;">
                    <div class="col-sm-3">
                        <h4>Fish Id: {{ $koi->koi_id }}</h4>
                        <img src="{{ $koi->image }}" alt="" class="img-thumbnail">
                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-default" style="margin-top: 40px">
                            <div class="panel-heading">Form menber register</div>
                            <div class="panel-body">
                                <!-- form start -->
                                <form class="form-horizontal" method="post" action="{{ route('event.koi.register', ['event' => $event->id, 'koi' => $koi->id]) }}">
                                    {{ csrf_field() }}

                                    <div class="box-body">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name" class="col-sm-3 control-label">
                                                    name <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone" class="col-sm-3 control-label">
                                                    tel.
                                                </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="{{ old('phone') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary pull-right">add member register</button>
                                        </div>
                                    </div>
                                    <!-- /.box-footer -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>member</th>
                            <th>tel.</th>
                            <th>Status</th>
                            <th>Management</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($koi->register as $index => $register)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $register->name }}</td>
                                <td>{{ $register->phone }}</td>
                                <td>
                                    @if ($register->winner)
                                        <span class="label label-success">
                                            <i class="fa fa-trophy"></i> award
                                        </span>
                                    @else
                                        <span class="label label-default">not award</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($register->winner)
                                        <a href="{{ route('event.koi.winner', ['event' => $event->id, 'koi' => $koi->id, 'register' => $register->id]) }}" class="btn btn-xs btn-danger">
                                            <i class="fa fa-ban"></i> Cancel
                                        </a>
                                    @else
                                        <a href="{{ route('event.koi.winner', ['event' => $event->id, 'koi' => $koi->id, 'register' => $register->id]) }}" class="btn btn-xs btn-default">award</a>
                                    @endif
                                        <button data-token="{{ csrf_token() }}" data-id="{{ $register->id }}" data-url="{{ $koi->id }}/delete" class="btn-delete btn btn-danger btn-xs">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>member</th>
                            <th>tel.</th>
                            <th>Status</th>
                            <th>Management</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/.col (right) -->
@endsection