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
        @if(count($events->videos)>0)
            <div class="video-box">
                <section class="lazy slider" data-sizes="50vw">
                    @foreach($events->videos as $video)
                        <div>
                            <div class="embed-responsive embed-responsive-16by9">
                                {!! $video->video !!}
                            </div>
                        </div>
                    @endforeach
                </section>
            </div>
        @endif
    </div>
<!-- </div>
<div class="row"> -->
    <div class="col-md-12">
        <div class="title text-center">
            <h1>KOI</h1>
        </div>
    </div>

    @if(count($kois)>0)
        @foreach($kois as $koi)
            <div class="col-sm-4 col-md-3">
                <div class="card text-center">
                    <a href="{{ route('frontend.event.koi', ['event' => Request::segment(2), 'koi' => $koi->id])}}">
                        <img src="{{ asset($koi->media->first()->getUrl()) }}" alt="...">
                    </a>
                    <div class="caption">
                        <h4 class="text-red">{{ $koi->name }}</h4>
                        <!-- <p>BOOKING 5</p> -->
                        <p><a href="{{ route('frontend.event.koi', ['event' => Request::segment(2), 'koi' => $koi->id]) }}" class="btn btn-white" role="button">DETAIL</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-md-12">
            <div class="text-center text-red">
                <h1>NO KOI.</h1>
            </div>
        </div>
    @endif
</div>
@endsection

@push('script')

@endpush
