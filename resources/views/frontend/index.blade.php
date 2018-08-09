@extends('layouts.frontend.main')

@section('title', 'Nishikigoi')

@push('style')

@endpush

@section('content')
<div class="row">
    @if(count($news) > 0)
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @if(count($news) > 1)
                        @foreach($news as $index => $value)
                            <li data-target="#myCarousel" data-slide-to="{{$index}}" class="{{ $index == 0 ? 'active' : ''}}"></li>            
                        @endforeach
                    @endif
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($news as $index => $value)
                        <div class="item {{ $index == 0 ? 'active' : ''}}">
                            <a href="{{ route('frontend.news.news', ['news' => $value->id])}}">
                                @if(count($value->media)>0)
                                    <img src="{{ asset($value->media->where('collection_name', 'news-cover')->first()->getUrl()) }}" alt="{{ $value->name }}" style="width:100%;">
                                @else
                                    <img src="{{ asset('frontend/img/default-news-cover.jpg') }}" alt="{{ $value->name }}" style="width:100%;">                            
                                @endif
                            </a>
                        </div>
                    @endforeach
                </div>
                
                @if(count($news) > 1)
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                @endif
            </div>
        </div>
    @endif

    <!-- <br> -->
    @if(count($nowEvents) > 0)
        <div class="col-md-12 {{ count($news) > 0 ? 'home-slide' : '' }}">
            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @if(count($nowEvents) > 1)
                        @foreach($nowEvents as $index => $value)
                            <li data-target="#myCarousel2" data-slide-to="{{$index}}" class="{{ $index == 0 ? 'active' : ''}}"></li>            
                        @endforeach
                    @endif
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($nowEvents as $index => $value)
                        <div class="item {{ $index == 0 ? 'active' : '' }}">
                            <a href="{{ route('frontend.event.event', ['event' => $value->id])}}">
                                @if(count($value->media)>0)
                                    <img src="{{ asset($value->media->where('collection_name', 'event')->first()->getUrl()) }}" alt="{{ $value->name }}" style="width:100%;">
                                @else
                                    <img src="{{ asset('frontend/img/default-news-cover.jpg') }}" alt="{{ $value->name }}" style="width:100%;">                            
                                @endif
                            </a>
                        </div>
                    @endforeach
                </div>
                
                @if((count($news)+count($nowEvents)) > 1)
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                @endif
            </div>
        </div>
    @endif
</div>
@endsection

@push('script')

@endpush
