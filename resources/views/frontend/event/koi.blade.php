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

    <div class="col-md-6">
        <div class="slide-show">
            <div class="slider slider-for">
                @for($i=1; $i<5; $i++)
                    <div>
                        <a class="example-image-link" href="{{ asset('frontend/img/img-demo-koi.jpg') }}" data-lightbox="thumb-1">
                            <img class="example-image" src="{{ asset('frontend/img/img-demo-koi.jpg') }}" alt="..." style="">
                        </a>
                    </div>
                @endfor
            </div>
        </div>
        <div class="slide-show">
            <div class="slider slider-nav">
                @for($i=1; $i<5; $i++)
                    <img src="{{ asset('frontend/img/img-demo-koi.jpg') }}" class="img-responsive" style="">    
                @endfor
            </div>
        </div>
        <section class="lazy slider" data-sizes="50vw">
            <div>
                <!-- Video -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" 
                        src="https://player.vimeo.com/video/66079654?autoplay=0&loop=1&color=fc0328&title=0&portrait=0">
                    </iframe>
                    <!-- <div style="padding:56.25% 0 0 0;position:relative;">
                            <iframe src="https://player.vimeo.com/video/66079654?autoplay=1&loop=1&color=fc0328&title=0&portrait=0" 
                                style="position:absolute;top:0;left:0;width:100%;height:100%;" 
                                frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                            </iframe>
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script> -->
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-6">
        <p class="text-red">TO ORDER</p>
        <p class="text-red">PLEASE CONTACT</p>
        <table class="table table-striped">
            <tr>
                <td>CONTACT US</td>
            </tr>
            <tr><td>TEL : XXXXXXXXXX</td></tr>
            <tr><td>TEL : XXXXXXXXXX</td></tr>
            <tr><td>TEL : XXXXXXXXXX</td></tr>
        </table>


        <p class="text-red">MARUYAMA SHOWA</p>
        <p>CODE : 123456</p>
        <p>OWNER : XXXXXX</p>
        <p>PRICE : 999999 THB</p>
        <p>SHIPPING : 999 THB</p>


        <p class="text-red">DETAIL</p>
        <p>BREEDER: AOKIYA</p>
        <p>BORN IN : 2017</p>
        <p>SIZE : 36 CM.</p>
        <p>GENDER : MALE</p>


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
