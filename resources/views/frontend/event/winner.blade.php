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
            <p>{{ $events->name }}</p>
            <P>{{ $events->start_datetime->format('d/m/Y') }} TO {{ $events->end_datetime->format('d/m/Y') }}</P>
        </div>
    </div>
    <div class="col-md-offset-2 col-md-8">
        @if(count($events->videos)>0)
            <div class="video-box">
                <section class="lazy slider" data-sizes="50vw">
                    @foreach($events->videos as $video)
                        <div>
                            <h3 class="text-red text-center">VIDEO ({{ $video->date }})</h3>
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
            <h1>WINNER</h1>
        </div>
    </div>
    <div class="col-md-offset-2 col-md-8">
        @if(count($kois) > 0)
            @foreach($kois as $koi)
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="card text-center">
                        @if(count($koi->media) > 0 )
                            <img src="{{ asset($koi->media->where('collection_name', 'koi')->first()->getUrl()) }}" alt="...">
                        @else
                            <img src="{{ asset('frontend/img/default-koi.jpg') }}" alt="...">                        
                        @endif
                        <div class="caption text-red">
                            <p>WINNER</p>
                                @if(count($koi->register->where('winner', 1))>0)
                                    @foreach($koi->register->where('winner', 1) as $winner)
                                        <p>{{ $winner->name }}</p>
                                    @endforeach
                                @else
                                    <p>-</p>
                                @endif
                            <p>DEMO KOI</p>
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
    <div class="col-md-12 text-center">
        {{ $kois->links() }}
    </div>
</div>
@endsection

@push('script')

@endpush
