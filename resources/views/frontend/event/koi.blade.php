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
            <p>CHUKOKU AUCTION WEEK</p>
            <P>16-22 SEPTEMBER 17</P>
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
            @if(count($kois->media)>1)
                <div class="slider slider-nav">
                    @foreach($kois->media as $media)
                        <img src="{{ asset($media->getUrl()) }}" class="img-responsive" style="">    
                    @endforeach
                </div>
            @endif
        @else
            <img class="img-responsive center-box" src="{{ asset('frontend/img/default-koi.jpg') }}" alt="..." style="width:80%">
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
        <p class="text-red text-center">TO ORDER<br>PLEASE CONTACT</p>
        <table class="table table-bordered table-contact text-center">
            <tr>
                <th class="text-red">CONTACT US</th>
            </tr>
            <tr><td>TEL : +66XXXXXXXXXX</td></tr>
            <tr><td>TEL : +62XXXXXXXXXX</td></tr>
            <tr><td>TEL : +65XXXXXXXXXX</td></tr>
        </table>


        <p class="text-red">{{ $kois->name }}</p>
        <p>CODE : {{ $kois->koi_id }}</p>
        <p>OWNER : </p>
        <p>PRICE : {{ number_format($kois->price) }}</p>
        <p>SHIPPING : </p>


        <p class="text-red">DETAIL</p>
        <p>BREEDER: {{ $kois->farm->name }}</p>
        <p>BORN IN : {{ $kois->born }}</p>
        @if(count($kois->sizes)>0)
            @foreach($kois->sizes as $size)
                <p>SIZE : {{ $size->size }} ({{ $size->date }})</p>
            @endforeach
        @endif
        <p>GENDER : {{ $kois->sex }}</p>


        <p class="text-red">DETAIL</p>
        <p>xxxxxxxxxxxxxxxxxxxxxxxxx<br>
        xxxxxxxxxxxxxxxxxxxxxxxxx<br>
        xxxxxxxxxxxxxxxxxxxxxxxxx<br>
        xxxxxxxxxxxxxxxxxxxxxxxxx<br>
        xxxxxxxxxxxxxxxxxxxxxxxxx<br></p>
    </div>
</div>
@endsection

@push('script')

@endpush
