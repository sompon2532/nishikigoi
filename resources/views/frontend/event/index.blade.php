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
        </div>
    </div>

    @foreach($nowEvents as $event)
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="card text-center">
                    <a href="{{ route('frontend.event.event', ['event'=>$event->id]) }}">
                        <img src="{{ asset($event->media->where('collection_name', 'event-cover')->first()->getUrl()) }}" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="text-red">New Event!</h1>
                <p>{{ $event->name }}</p>
            </div>
        </div>    
    @endforeach

    <div class="col-md-12">
        <div class="title text-center">
            <h1>PASS EVENT</h1>
        </div>
    </div>

    @foreach($passEvents as $event)
        <div class="col-md-4">
            <div class="card text-center">
                <a href="{{ route('frontend.event.event', ['event'=>$event->id]) }}" class="text-link">
                    <img src="{{ asset($event->media->where('collection_name', 'event-cover')->first()->getUrl()) }}" alt="...">
                    <div class="caption">
                        <h3 class="text-red">{{ $event->name }}</h3>
                    </div>
                </a>
            </div>
        </div>
    @endforeach
    
    <!-- {{-- @for($i=1; $i<=10; $i++)
    <div class="col-sm-4 col-md-3">
        <div class="card text-center">
            <img src="{{ asset('frontend/img/img-demo-koi.jpg') }}" alt="...">
            <div class="caption">
                <h3 class="text-red">Demo Koi</h3>
                <p>BOOKING 5</p>
                <p><a href="#" class="btn btn-white" role="button">DETAIL</a></p>
            </div>
        </div>
    </div>
    @endfor --}} -->
</div>
@endsection

@push('script')

@endpush
