@extends('layouts.frontend.main')

@section('title', 'Nishikigoi')

@push('style')

@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <div class="title">
                <h1>PARTNER</h1>
            </div>
            <p>CHUKOKU AUCTION WEEK</p>
            <P>16-22 SEPTEMBER 17</P>
        </div>
    </div>
    <div class="col-sm-4 col-md-4">
        <div class="card text-center">
            <img src="{{ asset('frontend/Icon/Thailand-S.png') }}" alt="...">
            <div class="caption">
                <p>THAILAND</p>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4">
        <div class="card text-center">
            <img src="{{ asset('frontend/Icon/Indonesia-S.png') }}" alt="...">
            <div class="caption">
                <p>INDONESIA</p>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-3">
        <div class="card text-center">
            <img src="{{ asset('frontend/Icon/Singapore-S.png') }}" alt="...">
            <div class="caption">
                <p>SINGAPORE</p>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-3">
        <div class="card text-center">
            <img src="{{ asset('frontend/Icon/Japan-S.png') }}" alt="...">
            <div class="caption">
                <p>JAPAN</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')

@endpush
