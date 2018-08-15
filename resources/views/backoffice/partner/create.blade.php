@extends('layouts.backoffice.main')

@section('title', 'Admin | Alliance')

@section('head')
    <h1>
        Alliance
        <small>Create</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('partner.index') }}"><i class="fa fa-handshake-o"></i> Alliance</a></li>
        <li class="active">Create</li>
    </ol>
@endsection

@section('content')
    <!-- right column -->
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Create  Alliance</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{ route('partner.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">
                                Farm <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="koikichi" id="koikichi" placeholder="Farm">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Address
                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" rows="5" placeholder="Address"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="website" class="col-sm-3 control-label">
                                Website
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="website" id="website" placeholder="Website">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">
                                E-mail
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Tel
                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="strain" rows="5" placeholder="Tel"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="status" id="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="strain" class="col-sm-3 control-label">Country</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="country_id" id="country">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    @include('backoffice.partials.image', ['images' => []])
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right">Create</button>
                    </div>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
        <!-- /.box -->
    </div>
    <!--/.col (right) -->
@endsection