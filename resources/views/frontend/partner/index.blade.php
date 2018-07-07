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

        <div class="col-md-offset-3 col-md-6">
    @foreach($countries as $country)
            <div class="col-sm-4 col-md-4">
                <div class="card text-center">
                    <a href="{{ route('frontend.partner.detail', ['country' => $country->id]) }}" class="text-link">
                        @if(count($country->media)>0)
                            <img src="{{ asset($country->media->where('collection_name', 'country')->first()->getUrl()) }}" alt="..." class="national-flag">
                        @else
                            <img src="{{ asset('frontend/img/default-country.jpg') }}" alt="{{ $country->name }}" class="national-flag">                                            
                        @endif
                        <div class="caption">
                            <p>{{ $country->name }}</p>
                        </div>
                    </a>
                </div>
            </div>
    @endforeach
        </div>
</div>
@endsection

@push('script')

@endpush
