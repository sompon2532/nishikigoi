@extends('layouts.frontend.main')

@section('title', 'Nishikigoi')

@push('style')

@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <div class="col-md-10 col-md-offset-1">
                <div class="card text-center">
                    @if(count($events->media->where('collection_name', 'event')) > 0)
                        <img src="{{ asset($events->media->where('collection_name', 'event')->first()->getUrl()) }}" alt="{{ $events->name }}">
                        {{--<!-- @else
                            <img src="{{ asset('frontend/img/default-event-cover.jpg') }}" alt="{{ $events->name }}"> -->--}}
                    @endif
                </div>
            </div>
            {{--
            <!-- <div class="title">
                <h1>EVENT</h1>
            </div>
            <p>{{ $events->name }}</p>
            <P>{{ $events->start_datetime->format('d/m/Y') }} TO {{ $events->end_datetime->format('d/m/Y') }}</P> -->
            --}}
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

    <div class="col-md-12">
        <div class="title text-center">
            <h1>KOI</h1>
        </div>
    </div>

    <div class="col-md-offset-2 col-md-8">
        @if(count($kois)>0)
            @foreach($kois as $koi)
                <div class="col-sm-4 col-md-3">
                    <div class="card text-center">
                        <a href="{{ route('frontend.event.koi', ['event' => Request::segment(2), 'koi' => $koi->id])}}">
                            @if(count($koi->media) > 0)
                                <img src="{{ asset($koi->media->first()->getUrl()) }}" alt="{{ $koi->name }}">  
                            @else
                                <img src="{{ asset('frontend/img/default-koi.jpg') }}" alt="{{ $koi->name }}">                                                   
                            @endif
                        </a>
                        <div class="caption">
                            <h4 class="text-red">{{ $koi->name }}</h4>
                            <p>BOOKING {{ count($koi->register) }}</p>
                            <p><a href="{{ route('frontend.event.koi', ['event' => Request::segment(2), 'koi' => $koi->id]) }}" class="btn btn-white" role="button">DETAIL</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col-md-12 text-center">
                    {{ $kois->links() }}
                </div>
            </div>
        @else
            <div class="col-md-12">
                <div class="text-center text-red">
                    <h1>NO KOI.</h1>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection

@push('script')

@endpush
