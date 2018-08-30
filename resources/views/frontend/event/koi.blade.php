@extends('layouts.frontend.main')

@section('title', 'Nishikigoi')

@push('style')

@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="text-center event-title">
            <div class="title title-box">
                <img src="{{asset('frontend/img/Event-Title.png')}}" alt="Event" class="img-responsive" width="200" style="margin:auto;">
                <!-- <h1>EVENT</h1> -->
                <p>{{ $events->name }}</p>
                <P>{{ $events->start_datetime->format('d/m/Y') }} TO {{ $events->end_datetime->format('d/m/Y') }}</P>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-6">
        @if(count($kois->media)>0)
            <div class="slider slider-for">
                @foreach($kois->media as $media)
                    <div>
                        <a class="example-image-link" href="{{ asset($media->getUrl()) }}" data-lightbox="thumb-1">
                            <img class="example-image" src="{{ asset($media->getUrl()) }}" alt="..." style="">
                        </a>
                    </div>
                @endforeach
            </div>
            @if(count($kois->register)>0)
                <img src="{{ asset('frontend/img/SoldOut-B.png') }}" class="overlay">
            @endif
            @if(count($kois->media)>1)
                <div class="slider slider-nav">
                    @foreach($kois->media as $media)
                        <img src="{{ asset($media->getUrl()) }}" class="img-responsive" style="">    
                    @endforeach
                </div>
            @endif
        @else
            <img class="img-responsive center-box" src="{{ asset('frontend/img/default-koi.jpg') }}" alt="..." style="width:80%">
            @if(count($kois->register)>0)
                <img src="{{ asset('frontend/img/SoldOut-B.png') }}" class="overlay">
            @endif
        @endif

        @if(count($kois->videos)>0)
            <div class="video-box">
                <section class="lazy slider" data-sizes="50vw">
                    @foreach($kois->videos as $video)
                        <div>
                            <h3 class="text-red text-center">VIDEO ({{ $video->date }})</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                                {!! $video->video !!}
                            </div>
                        </div>
                    @endforeach
                </section>
            </div>
        @endif
    </div>

    <div class="col-sm-6 col-md-6">
        @if(count($kois->register->where('winner', 1))>0)
            <span class="soldout">SOLD OUT</span>
        @endif
        
        <p class="text-red">{{ $kois->name }}{{ $kois->certificate == 1 ? ' [+CERTIFICATE]':''}}</p>
        
        <p>
            <span class="koi-sj">CODE</span>
            : {{ $kois->koi_id }}
        </p>

        <p>
            <span class="koi-sj">PRICE</span>
            : {{ number_format($kois->price) }} {{$kois->unit}}
        </p>

        <p class="text-red">DETAIL</p>

        @if($kois->farm)
            <p> 
                <span class="koi-sj">BREEDER</span> 
                : {{ $kois->farm->name }}
            </p>
        @endif

        <p>
            <span class="koi-sj">BORN IN</span>
            : {{ $kois->born }}
        </p>

        @if($kois->category)
            <p>
                <span class="koi-sj">CATEGORY</span>
                : {{ $kois->category->name }}
            </p>
        @endif

        @if($kois->strain)
            <p>
                <span class="koi-sj">VARIETY</span>
                : {{ $kois->strain->name }}
            </p>
        @endif

        @if($kois->strain)
            <p>
                <span class="koi-sj">OYAGOI</span>
                : {{ $kois->oyagoi }}
            </p>
        @endif

        @if($kois->store)
            <p>
                <span class="koi-sj">KEEPING AT</span>
                : {{ $kois->store->name }}
            </p>
        @endif

        @if($kois->sizes)
            @foreach($kois->sizes as $size)
                <p>
                    <span class="koi-sj">SIZE</span>
                    : {{ $size->size }} ({{ $size->date }})
                </p>
            @endforeach
        @endif

        <p>
            <span class="koi-sj">GENDER</span>
            : {{ $kois->sex }}
        </p>

        @if(count($kois->contests)>0)
            @foreach($kois->contests as $contest)
                @if($contest->contest != "")
                    <p>
                        <span class="koi-sj">AWARD</span>
                        : {{ $contest->contest }} ({{ $contest->date }})
                    </p>
                @endif
            @endforeach
        @endif

        @if(count($kois->remarks)>0)
            @foreach($kois->remarks as $index => $remark)
                @if($remark->remark != "")

                    <p>
                        <span class="koi-sj">REMARK {{$index+1}}</span>
                        : {{ $remark->remark }}
                    </p>
                @endif
            @endforeach
        @endif
    </div>
</div>
@endsection

@push('script')

@endpush
