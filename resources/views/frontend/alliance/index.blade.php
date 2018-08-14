@extends('layouts.frontend.main')

@section('title', 'Nishikigoi')

@push('style')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <div class="title title-box">
                    <img src="{{asset('frontend/img/Alliance-Title.png')}}" alt="Alliance" class="img-responsive" width="200">
                </div>
            </div>
        </div>

        <div class="col-md-12">
            @foreach($alliances as $index => $alliance)
                <div class="col-sm-offset-1 col-md-offset-1 col-sm-3 col-md-3">
                    @if(count($alliance->media)>0)
                        <img src="{{ asset($alliance->media->where('collection_name', 'partner')->first()->getUrl()) }}" alt="{{ $alliance->koikichi }}" class="national-flag img-responsive">
                    @else
                        <img src="{{ asset('frontend/img/default-country.jpg') }}" alt="{{ $alliance->koikichi }}" class="national-flag img-responsive">                                            
                    @endif
                </div>
                <div class="col-sm-7 col-md-7">
                    <p>
                        <span class="partner-sj">FARM</span>
                        : {{$alliance->koikichi}}
                    </p> 
                    <p>
                        <span class="partner-sj">ADDRESS</span>
                        : {{$alliance->description}}
                    </p> 
                    <p>
                        <span class="partner-sj">WEBSITE / E-MAIL</span>
                        : {{$alliance->address}}
                    </p>   
                    <p>
                        <span class="partner-sj">TEL</span>
                        : {{$alliance->strain}}
                    </p>  
                </div>

                @if($index+1 < count($alliances))
                    <div class="col-xs-10 col-xs-offset-1">    
                        <hr class="red-line">
                    </div>
                @endif

            @endforeach
        </div>
    </div>
@endsection

@push('script')

@endpush
