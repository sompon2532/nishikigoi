@extends('layouts.frontend.main')

@section('title', 'Nishikigoi')

@push('style')

@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <div class="title">
                <h1>CONTACT US</h1>
            </div>
        </div>
    </div>
    <div class="col-md-12 contactus-box">      
        <div class="col-md-offset-1 col-md-3">
            <img class="img-responsive  img-thumbnail" src="{{ asset('frontend/img/KOIKICHIFISHFARM.jpg') }}" alt="" style="max-width:150px;">
        </div>
        <div class="col-md-7">
            <p><span class="text-left">KOISHI </span>:	KOIKICHI FISH FARM</p>
            <p><span class="text-left">ADDRESS </span>:	120-122 ถ.พุทธมณฑลสาย 3 เเขวง/เขตทวีวัฒนา กรุงเทพ กรุงเทพมหานคร 10170 ไทย<p>
            <p><span class="text-left">TEL </span>:	02-4315646</p>
        </div>
    </div>

    <div class="col-md-12 contactus-box">      
        <div class="col-md-offset-1 col-md-3">
            <img class="img-responsive  img-thumbnail" src="{{ asset('frontend/img/SAMURAIKOISOLO.jpg') }}" alt="" style="max-width:150px;">
        </div>
        <div class="col-md-7">
            <p><span class="text-left">KOISHI </span>:	SAMURAI KOI SOLO</p>
            <p><span class="text-left">ADDRESS </span>:	120-122 ถ.พุทธมณฑลสาย 3 เเขวง/เขตทวีวัฒนา กรุงเทพ กรุงเทพมหานคร 10170 ไทย<p>
            <p><span class="text-left">TEL </span>:	02-4315646</p>
        </div>
    </div>

    <div class="col-md-12 contactus-box">      
        <div class="col-md-offset-1 col-md-3">
            <img class="img-responsive  img-thumbnail" src="{{ asset('frontend/img/MAXKOIFARM.jpg') }}" alt="" style="max-width:150px;">
        </div>
        <div class="col-md-7">
            <p><span class="text-left">KOISHI </span>:	MAX KOI FARM</p>
            <p><span class="text-left">ADDRESS </span>:	120-122 ถ.พุทธมณฑลสาย 3 เเขวง/เขตทวีวัฒนา กรุงเทพ กรุงเทพมหานคร 10170 ไทย<p>
            <p><span class="text-left">TEL </span>:	02-4315646</p>
        </div>
    </div>

</div>


@endsection

@push('script')

@endpush
