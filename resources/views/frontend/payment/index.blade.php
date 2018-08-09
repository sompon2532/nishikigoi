@extends('layouts.frontend.main')

@section('title', 'Nishikigoi')

@push('style')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12 title-partner-box">
            <div class="text-center">
                <div class="text-red">
                    <h1>PAYMENT</h1>
                </div>
            </div>
        </div>

        <div class="col-sm-offset-1 col-md-offset-1 col-sm-3 col-md-3">
            <img src="{{asset('frontend/img/MAXKOIFARM.jpg')}}" alt="..." class="img-responsive payment-lg">
        </div>
        <div class="col-sm-7 col-md-7">
            <p>
                <span class="partner-sj">BANK</span>
                : United Overseas Bank Limited Thomson Road Branch.
            </p> 
            <p>
                <span class="partner-sj">ACCOUNT NAME</span>
                :  Ng Chuen Guan
            </p>
            <p>
                <span class="partner-sj">ADDRESS</span>
                : 136 Yuk Tong Ave Singapore 596434
            </p> 
            <p>
                <span class="partner-sj">ACCOUNT NO.</span>
                : 314-900-212-8
            </p>   
            <p>
                <span class="partner-sj">SWIFT CODE</span>
                : UOVBSGSG
            </p>  
        </div>

        <div class="col-md-offset-1 col-md-10">    
            <hr class="red-line">
        </div>

        <div class="col-sm-offset-1 col-md-offset-1 col-sm-3 col-md-3">
            <img src="{{asset('frontend/img/SAMURAI.jpg')}}" alt="..." class="img-responsive payment-lg">
        </div>
        <div class="col-sm-7 col-md-7">
            <p>
                <span class="partner-sj">BANK</span>
                : BCA
            </p> 
            <p>
                <span class="partner-sj">ACCOUNT NAME</span>
                :  M.Kiki Sutarki Nuralim Ir
            </p>
            <p>
                <span class="partner-sj">ADDRESS</span>
                : Jalan. IR.Haji Juanda No.118. Bandung Indonesia
            </p> 
            <p>
                <span class="partner-sj">ACCOUNT NO.</span>
                : 777-3388-999
            </p>   
            <p>
                <span class="partner-sj">SWIFT CODE</span>
                : CENAIDJA
            </p>  
        </div>

        <div class="col-md-offset-1 col-md-10">    
            <hr class="red-line">
        </div>

        <div class="col-sm-offset-1 col-md-offset-1 col-sm-3 col-md-3">
            <img src="{{asset('frontend/img/KOIKICHIFISHFARM.jpg')}}" alt="..." class="img-responsive payment-lg">
        </div>
        <div class="col-sm-7 col-md-7">
            <p>
                <span class="partner-sj">BANK</span>
                : KASIKORN BANK PCL, TANAMRATCHAWONG BRANCH
            </p> 
            <p>
                <span class="partner-sj">ACCOUNT NAME</span>
                :  Mr.Tanaichanok Limpanusorn
            </p>
            <p>
                <span class="partner-sj">ADDRESS</span>
                : 215-217 Ratchawong Rd, Jakkrawat, Samphanthawong Bangkok 10100
            </p> 
            <p>
                <span class="partner-sj">ACCOUNT NO.</span>
                : 606-2-01458-8
            </p>   
            <p>
                <span class="partner-sj">SWIFT CODE</span>
                : KASITHBK
            </p>  
        </div>

        

        
    </div>
@endsection

@push('script')

@endpush
