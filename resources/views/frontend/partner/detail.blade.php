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
            <h3 class="text-red">{{$countries->name}}</h3>
        </div>
    </div>
</div>

@foreach($partners as $index => $partner)
    <div class="row">
        <div class="col-sm-4 col-md-4">
            @if(count($partner->media)>0)
                <img class="center-box img-responsive img-thumbnail" src="{{ asset($partner->media()->where('collection_name', 'partner')->first()->getUrl()) }}" alt="{{$countries->name}}">
            @else
                <img class="center-box img-responsive img-thumbnail" src="{{ asset('frontend/img/default-partner.jpg') }}" alt="{{$countries->name}}"> 
            @endif
        </div>
        <div class="col-sm-8 col-md-8">
            <p>
                <span class="partner-sj">KOISHI</span>
                : {{$partner->koikichi}}
            </p> 
            <p>
                <span class="partner-sj">รายละเอียด</span>
                : {{$partner->description}}
            </p> 
            <p>
                <span class="partner-sj">ที่อยู่</span>
                : {{$partner->address}}
            </p>   
            <p>
                <span class="partner-sj">สายพันธุ์ที่ผลิต</span>
                : {{$partner->strain}}
            </p>  
        </div>
    </div>
    @if($index+1 < count($partners))
        <hr class="red-line">
    @endif
    @endforeach
    
    <div class="row">
        <div class="col-md-12 text-center">
            {{ $partners->links() }}
        </div>
    </div>

@endsection

@push('script')
@endpush
