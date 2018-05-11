@extends('layouts.frontend.main')

@section('title', 'Nishikigoi')

@push('style')

@endpush

@section('content')
<div class="row">
    <div class="col-md-12 title-partner-box">
        <div class="text-center">
            <div class="title">
                <h1>PARTNER</h1>
            </div>
        </div>
    </div>
    @foreach($countries as $country)
    <div class="col-sm-4 col-md-4">
        <div class="card text-center">
            <a href="{{ route('frontend.partner.detail', ['country' => $country->id]) }}" class="text-link">
                @if(count($country->media)>0)
                    <img src="{{ asset($country->media->where('collection_name', 'country')->first()->getUrl()) }}" alt="...">
                @else
                    <img src="{{ asset('frontend/img/default-country.jpg') }}" alt="{{ $country->name }}">                                            
                @endif
                <div class="caption">
                    <p>{{ $country->name }}</p>
                </div>
            </a>
        </div>
    </div>
    @endforeach
</div>
@endsection

@push('script')

@endpush
