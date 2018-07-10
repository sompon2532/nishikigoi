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
                <h3 class="box-title">Fish List</h3>
            </div>
            <!-- /.box-header -->
            @foreach($event->kois->chunk(4) as $kois)
                <div class="row">
                    <div class="col-xs-12" style="padding-bottom: 15px;">
                        @foreach($kois as $koi)
                            <div class="col-sm-3">
                                <h5>Fish Id: {{ $koi->koi_id }}</h5>
                                <img src="{{ $koi->image }}" alt="" class="img-thumbnail">
                                <div>
                                    <a href="{{ route('event.koi.detail', ['event' => $event->id, 'koi' => $koi->id]) }}" class="btn btn-info btn-xs pull-right" style="margin-top: 5px;">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        View
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--/.col (right) -->
@endsection