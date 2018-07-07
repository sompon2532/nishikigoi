@extends('layouts.backoffice.main')

@section('title', 'Admin | Koi')

@section('head')
    <h1>
        Fish
        <small>Create</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('koi.index') }}"><i class="fa fa-archive"></i> Fish</a></li>
        <li class="active">Create</li>
    </ol>
@endsection

@section('content')
    <!-- right column -->
    <div class="col-md-12" id="app">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Create Fish</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{ route('koi.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nameEn" class="col-sm-3 control-label">
                                ชือ <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="en[name]" value="{{ old('en.name') }}" id="nameEn"
                                       placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category" class="col-sm-3 control-label">Category</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id" id="category">
                                    <option value="">-------- Select category --------</option>
                                    @php
                                        $traverse = function ($categories, $prefix = '') use (&$traverse) {
                                            foreach ($categories as $category) {
                                                echo '<option value="'. $category->id . '">' . $prefix . $category->name . '</option>';

                                                $traverse($category->children, $prefix.'- ');
                                            }
                                        };

                                        $traverse($categories);
                                    @endphp
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="koiId" class="col-sm-3 control-label">
                                Fish Id <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="koi_id" value="{{ old('koi_id') }}" id="koiId"
                                       placeholder="Koi ID">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="strain" class="col-sm-3 control-label">Breed</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="strain_id" id="strain">
                                    @foreach ($strains as $strain)
                                        <option value="{{ $strain->id }}">{{ $strain->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="born" class="col-sm-3 control-label">
                                Bond <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="born" value="{{ old('born') }}" id="born"
                                       placeholder="Born">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="store" class="col-sm-3 control-label">Store</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="store_id" id="store">
                                    <option value="">-------- Choose Store --------</option>
                                    @foreach ($stores as $store)
                                        <option value="{{ $store->id }}">{{ $store->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sex" class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="sex" id="sex">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="unknown">Unknown</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="event" class="col-sm-3 control-label">Event</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="event_id" id="event">
                                    <option value="">-------- Select event --------</option>
                                    @foreach ($events as $event)
                                        <option value="{{ $event->id }}">{{ $event->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="farm" class="col-sm-3 control-label">Farm</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="farm_id" id="farm">
                                    @foreach ($farms as $farm)
                                        <option value="{{ $farm->id }}">{{ $farm->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="oyagoi" class="col-sm-3 control-label">
                                Oyagoi <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="oyagoi" value="{{ old('oyagoi') }}" id="oyagoi"
                                       placeholder="Oyagoi">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price" class="col-sm-3 control-label">
                                Price <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="price" value="{{ old('price') }}" id="price"
                                       placeholder="Price">
                            </div>
                        </div>

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
                            <label for="certificate" class="col-sm-3 control-label">
                                Certificate
                            </label>
                            <div class="col-sm-9" style="margin-top: 5px;">
                                <input type="checkbox" class="minimal-red" name="certificate" value="1" id="certificate">
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- Size -->
                    <div class="col-md-6">
                        <div class="form-group" v-for="(size, index) in sizes">
                            <label class="col-sm-3 control-label">
                                Size @{{ index + 1 }}
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="sizes[]" v-model="size.size" placeholder="Size">
                                <i class="minus fa fa-minus-circle" v-on:click="remove('size', index)" v-show="sizes.length > 1"></i>
                            </div>

                            <label class="col-sm-3 control-label">
                                Date
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control datepicker" name="date_sizes[]" placeholder="   Date" style="border-top: none; border-radius: 0">
                            </div>
                        </div>
                        <i class="add fa fa-plus-circle" v-on:click="add('size')"></i>
                    </div>

                    <!-- Contest -->
                    <div class="col-md-6">
                        <div class="form-group" v-for="(contest, index) in contests">
                            <label class="col-sm-3 control-label">
                                award @{{ index + 1 }}
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="contests[]" v-model="contest.contest" placeholder="Contest">
                                <i class="minus fa fa-minus-circle" v-on:click="remove('contest', index)" v-show="contests.length > 1"></i>
                            </div>

                            <label class="col-sm-3 control-label">
                                Date
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control datepicker" name="date_contests[]" placeholder="   Date" style="border-top: none; border-radius: 0">
                            </div>
                        </div>
                        <i class="add fa fa-plus-circle" v-on:click="add('contest')"></i>
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

                            <label class="col-sm-3 control-label">
                                Date
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control datepicker" name="date_videos[]" placeholder="   Date" style="border-top: none; border-radius: 0">
                            </div>
                        </div>
                        <i class="add fa fa-plus-circle" v-on:click="add('video')"></i>
                    </div>

                    <!-- Remark -->
                    <div class="col-md-6">
                        <div class="form-group" v-for="(remark, index) in remarks">
                            <label class="col-sm-3 control-label">
                                remark @{{ index + 1 }}
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="remarks[]" v-model="remark.remark" placeholder="Remark">
                                <i class="minus fa fa-minus-circle" v-on:click="remove('remark', index)" v-show="remarks.length > 1"></i>
                            </div>

                            <label class="col-sm-3 control-label">
                                Date
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control datepicker" name="date_remarks[]" placeholder="   Date" style="border-top: none; border-radius: 0">
                            </div>
                        </div>
                        <i class="add fa fa-plus-circle" v-on:click="add('remark')"></i>
                    </div>

                    <div class="clearfix"></div>

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

@push('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                sizes: [{size: ''}],
                contests: [{contest: ''}],
                videos: [{video: ''}],
                remarks: [{remark: ''}]
            },
            methods: {
                add: function(type) {
                    if (type == 'size') {
                        this.sizes.push({size: '', date_size: ''})
                    }
                    else if (type == 'contest') {
                        this.contests.push({contest: ''})
                    }
                    else if (type == 'video') {
                        this.videos.push({video: ''})
                    }
                    else if (type == 'remark') {
                        this.remarks.push({remark: ''})
                    }

                    setTimeout(function() {
                        $(".datepicker").datepicker({
                            autoclose: true,
                            format: 'dd/mm/yyyy',
                            todayHighlight: true,
                        });
                    })
                },
                remove: function(type, index) {
                    if (type == 'size') {
                        this.sizes.splice(index, 1)
                    }
                    else if (type == 'contest') {
                        this.contests.splice(index, 1)
                    }
                    else if (type == 'video') {
                        this.videos.splice(index, 1)
                    }
                    else if (type == 'remark') {
                        this.remarks.splice(index, 1)
                    }
                }
            }
        })

        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
    </script>
@endpush