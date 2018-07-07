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
                    @if(count($event->media)>0)
                        <a href="{{ route('frontend.event.event', ['event'=>$event->id]) }}">
                            <img src="{{ asset($event->media->where('collection_name', 'event-cover')->first()->getUrl()) }}" alt="{{ $event->name }}">
                        </a>
                    @else
                        <a href="{{ route('frontend.event.event', ['event'=>$event->id]) }}">
                            <img src="{{ asset('frontend/img/default-event-cover.jpg') }}" alt="{{ $event->name }}">
                        </a>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="text-red text-center">New Event!</h1>
                <p class="text-center">{{ $event->name }}</p>
            </div>
        </div>    
    @endforeach

    <div class="col-md-12">
        <div class="title text-center">
            <h1>PASS EVENT</h1>
        </div>
    </div>
    <div class="col-md-12">
        @foreach($passEvents as $event)
            <div class="col-sm-6 col-md-4">
                <div class="card text-center">
                    <a href="{{ route('frontend.event.event', ['event'=>$event->id]) }}" class="text-link">
                        @if(count($event->media)>0)
                            <img src="{{ asset($event->media->where('collection_name', 'event-cover')->first()->getUrl()) }}" alt="..." class="img-responsive">
                        @else
                            <img src="{{ asset('frontend/img/default-event-cover.jpg') }}" alt="{{ $event->name }}" class="img-responsive">
                        @endif
                        <div class="caption">
                            <h3 class="text-red">{{ $event->name }}</h3>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="col-md-12 text-center">
        {{-- $passEvents->links() --}}
    </div>
</div>


@endsection

@push('script')

@endpush
