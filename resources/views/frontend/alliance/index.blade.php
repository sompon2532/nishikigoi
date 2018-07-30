@extends('layouts.frontend.main')

@section('title', 'Nishikigoi')

@push('style')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12 title-partner-box">
            <div class="text-center">
                <div class="text-red">
                    <h1>ALLIANCE</h1>
                </div>
            </div>
        </div>

        @foreach($alliances as $index => $alliance)
        <div class="col-sm-offset-1 col-md-offset-1 col-sm-3 col-md-3">
            @if(count($alliance->media)>0)
                <img src="{{ asset($alliance->media->where('collection_name', 'partner')->first()->getUrl()) }}" alt="{{ $alliance->koikichi }}" class="national-flag">
            @else
                <img src="{{ asset('frontend/img/default-country.jpg') }}" alt="{{ $alliance->koikichi }}" class="national-flag">                                            
            @endif
        </div>
        <div class="col-sm-7 col-md-7">
            <p>
                <span class="partner-sj">KOISHI</span>
                : {{$alliance->koikichi}}
            </p> 
            <p>
                <span class="partner-sj">รายละเอียด</span>
                : {{$alliance->description}}
            </p> 
            <p>
                <span class="partner-sj">ที่อยู่</span>
                : {{$alliance->address}}
            </p>   
            <p>
                <span class="partner-sj">สายพันธุ์ที่ผลิต</span>
                : {{$alliance->strain}}
            </p>  
        </div>
            @if($index+1 < count($alliances))
            <div class="col-md-offset-1 col-md-10">    
                <hr class="red-line">
            </div>
            @endif

        @endforeach
    </div>
@endsection

@push('script')

@endpush
