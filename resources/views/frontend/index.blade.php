@extends('layouts.frontend.main')

@section('title', 'Nishikigoi')

@push('style')

@endpush

@section('content')
<div class="row">

    @if(count($news) > 0)
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($news as $index => $value)
                    <li data-target="#myCarousel" data-slide-to="{{$index}}" class="{{ $index == 0 ? 'active' : ''}}"></li>            
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($news as $index => $value)
                    <div class="item {{ $index == 0 ? 'active' : ''}}">
                        <img src="{{ asset($value->media->where('collection_name', 'news-cover')->first()->getUrl()) }}" alt="{{ $value->name }}" style="width:100%;">
                    </div>
                @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="fa fa-angle-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="fa fa-angle-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    @endif
</div>
<span class="fa fa-angle-left"></span>
@endsection

@push('script')

@endpush
