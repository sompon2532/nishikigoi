@extends('layouts.frontend.main')

@section('title', 'Nishikigoi')

@push('style')

@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <div class="title">
                <h1>EVENT</h1>
            </div>
            <p>CHUKOKU AUCTION WEEK</p>
            <P>16-22 SEPTEMBER 17</P>
        </div>
    </div>
    <div class="col-md-offset-2 col-md-8">
        <!-- Video -->
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" 
                src="https://player.vimeo.com/video/66079654?autoplay=0&loop=1&color=fc0328&title=0&portrait=0">
            </iframe>
            <!-- <div style="padding:56.25% 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/66079654?autoplay=1&loop=1&color=fc0328&title=0&portrait=0" 
                        style="position:absolute;top:0;left:0;width:100%;height:100%;" 
                        frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                    </iframe>
                </div>
                <script src="https://player.vimeo.com/api/player.js"></script> -->
        </div>
    </div>
<!-- </div>
<div class="row"> -->
    <div class="col-md-12">
        <div class="title text-center">
            <h1>WINNER</h1>
        </div>
    </div>
    @for($i=1; $i<=10; $i++)
    <div class="col-sm-4 col-md-3">
        <div class="card text-center">
            <img src="{{ asset('frontend/img/img-demo-koi.jpg') }}" alt="...">
            <div class="caption text-red">
                <p>WINNER</p>
                <p>XXXXXX</p>
                <p>DEMO KOI</p>
            </div>
        </div>
    </div>
    @endfor
</div>
@endsection

@push('script')

@endpush
