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
            <h3 class="text-red">JAPAN</h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 col-md-4">
        <img class="center-box" src="{{ asset('frontend/Icon/Thailand-S.png') }}" alt="">
    </div>
    <div class="col-sm-8 col-md-8">
        <p>
            <span class="partner-sj">KOISHI</span>
            : Omosako koi farm
        </p> 
        <p>
            <span class="partner-sj">รายละเอียด</span>
            : Owner : Mr.Takayoshi Omosako
        </p> 
        <p>
            <span class="partner-sj">ที่อยู่</span>
            : 178, Tochiharacho, kure-shi, Hiroshima 737-0922 Japan
        </p>   
        <p>
            <span class="partner-sj">สายพันธุ์ที่ผลิต</span>
            : Shiro-Utsuri, Kujaku, Showa, Goshiki
        </p>  
    </div>
</div>
    
<hr class="red-line">

<div class="row">
    <div class="col-sm-4 col-md-4 clear-fix">
        <img class="center-box" src="{{ asset('frontend/Icon/Thailand-S.png') }}" alt="">
    </div>
    <div class="col-sm-8 col-md-8 ">
        <p>
            <span class="partner-sj">KOISHI</span>
            : Omosako koi farm
        </p> 
        <p>
            <span class="partner-sj">รายละเอียด</span>
            : Owner : Mr.Takayoshi Omosako
        </p> 
        <p>
            <span class="partner-sj">ที่อยู่</span>
            : 178, Tochiharacho, kure-shi, Hiroshima 737-0922 Japan
        </p>   
        <p>
            <span class="partner-sj">สายพันธุ์ที่ผลิต</span>
            : Shiro-Utsuri, Kujaku, Showa, Goshiki
        </p>  
    </div>
</div>
@endsection

@push('script')

@endpush
