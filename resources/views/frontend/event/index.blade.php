@extends('layouts.frontend.main')

@section('title', 'Nishikigoi')

@push('style')

@endpush

@section('content')
<div class="row">
    <div class="col-xs-6 col-sm-4 col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-4">
        <div class="text-center">
            <div class="title">
                <img src="{{asset('frontend/img/Event-Title.png')}}" alt="Event" class="img-responsive">
            </div>
        </div>
    </div>
    <div class="col-md-12">
        @foreach($nowEvents as $event)
            <div class="col-md-12">
                <div class="col-md-10 col-md-offset-1">
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
