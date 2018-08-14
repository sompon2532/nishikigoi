@extends('layouts.frontend.main')

@section('title', 'Nishikigoi')

@push('style')

@endpush

@section('content')
<div class="row">
    <div class="col-xs-6 col-sm-4 col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-4">
        <div class="text-center">
            <div class="title title-box">
                <img src="{{asset('frontend/img/News-Title.png')}}" alt="News" class="img-responsive" width="200">
            </div>
        </div>
    </div>
    <div class="col-md-12">
        {{--
        <div class="col-md-10 col-md-offset-1">
            <div class="card text-center">
                @if(count($news->media->where('collection_name', 'news-cover')) > 0)
                    <img src="{{ asset($news->media->where('collection_name', 'news-cover')->first()->getUrl()) }}" alt="{{ $news->name }}">
                @endif
            </div>
        </div>
        --}}

        <div class="col-md-10 col-md-offset-1">
            <div class="card text-center">
                @if(count($news->media->where('collection_name', 'news')) > 0)
                    @foreach($news->media->where('collection_name', 'news') as $media)
                        <img src="{{ asset($media->getUrl()) }}" alt="{{ $news->name }}">
                    @endforeach
                @else
                    <img src="{{ asset('frontend/img/default-event-cover.jpg') }}" alt="{{ $news->name }}">
                @endif
            </div>
        </div>
    </div>   
    @if(count($news->videos)>0)
        <div class="col-md-12 text-center">
            @foreach($news->videos as $video)
                {!! $video->video !!}
            @endforeach
        </div> 
    @endif
</div>


@endsection

@push('script')

@endpush
