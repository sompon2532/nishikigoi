@extends('layouts.frontend.main')

@section('title', 'Nishikigoi')

@push('style')

@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <div class="title">
                <h1>NEWS</h1>
            </div>
        </div>
    </div>
    {{--dd($news)--}}
    @foreach($news as $value)
        <div class="col-sm-4 col-md-3">
            <div class="card text-center">
                <a href="{{ route('frontend.news.news', ['news' => $value->id])}}">
                    @if(count($value->media->where('collection_name', 'news')) > 0)
                        <img src="{{ asset($value->media->where('collection_name', 'news')->first()->getUrl()) }}" alt="{{ $value->name }}">  
                    @else
                        <img src="{{ asset('frontend/img/default-koi.jpg') }}" alt="{{ $value->name }}">                                                   
                    @endif
                </a>
                <div class="caption">
                    <h4 class="text-red">{{ $value->name }}</h4>
                </div>
            </div>
        </div>   
    @endforeach
</div>


@endsection

@push('script')

@endpush
