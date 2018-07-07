@extends('layouts.backoffice.main')

@section('title', 'Admin | News')

@section('head')
    <h1>
        News
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('news.index') }}"><i class="fa fa-newspaper-o"></i> News </a></li>
        <li class="active">Edit</li>
    </ol>
@endsection

@section('content')
    <!-- right column -->
    <div class="col-md-12" id="app">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit News </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{ route('news.update', ['news' => $news->id]) }}" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}

                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nameEn" class="col-sm-3 control-label">
                                name <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="en[name]" value="{{ $news->translate('en')->name }}" id="nameEn"
                                       placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Date Start <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control datepicker" name="start_date" value="{{ $news->start_datetime->format('d/m/Y') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Date End <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control datepicker" name="end_date" value="{{ $news->end_datetime->format('d/m/Y') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="status" id="status">
                                    <option value="1" {{ $news->status == true ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $news->status == false ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Time Start <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <div class="bootstrap-timepicker">
                                    <input type="text" class="form-control timepicker" name="start_time" value="{{ $news->start_datetime->toTimeString() }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Time End <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <div class="bootstrap-timepicker">
                                    <input type="text" class="form-control timepicker" name="end_time" value="{{ $news->end_datetime->toTimeString() }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- Vidoe -->
                    <div class="col-md-6">
                        <div class="form-group" v-for="(video, index) in videos">
                            <label class="col-sm-3 control-label">
                                Video @{{ index + 1 }}
                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="videos[]" v-model="video.video" rows="5" placeholder="Video ..."></textarea>
                                <i class="minus fa fa-minus-circle" v-on:click="remove('video', index)" v-show="videos.length > 1"></i>
                            </div>
                        </div>
                        <i class="add fa fa-plus-circle" v-on:click="add('video')"></i>
                    </div>

                    <div class="clearfix"></div>

                    @include('backoffice.partials.cover', ['images' => $news->media, 'collection' => 'news-cover'])

                    <div class="clearfix"></div>

                    @include('backoffice.partials.image', ['images' => $news->media, 'collection' => 'news'])

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right">Edit</button>
                    </div>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
        <!-- /.box -->
    </div>
    <!--/.col (right) -->
@endsection

@push('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                videos: {!! $news->videos->count() ? $news->videos : json_encode([['video' => '']]) !!},
            },
            methods: {
                add: function(type) {
                    if (type == 'video') {
                        this.videos.push({video: ''})
                    }
                },
                remove: function(type, index) {
                    if (type == 'video') {
                        this.videos.splice(index, 1)
                    }
                }
            }
        });
    </script>
@endpush