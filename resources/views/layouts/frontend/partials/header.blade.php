<!-- Logo -->
    <div class="col-md-12 logo-box">
        <a href="{{ route('frontend.index') }}" class="logo" title="Home">
            <img class="img-responsive" src="{{ asset('frontend/img/AW-NISHIKIGOI_ALLIANCE-BANNER.jpg') }}" alt="">
        </a>
        <div class="logo-box-btn">
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                <a href="{{ route('frontend.event.index') }}" class="btn-event" title="Event">
                    <img class="img-responsive" src="{{ Request::segment(1) == 'event' ? asset('frontend/Icon/Event-Red.png') :asset('frontend/Icon/Event-Gray.png') }}" alt="" width="60px">
                </a>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
                <a href="{{ route('frontend.alliance.index') }}" class="btn-partner" title="Alliance">
                    <img class="img-responsive" src="{{ Request::segment(1) == 'alliance' ? asset('frontend/Icon/Alliance-Red.png') : asset('frontend/Icon/Alliance-Gray.png') }}" alt="" width="60px">
                </a>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                <a href="{{ route('frontend.payment.index') }}" class="btn-payment" title="Payment">
                    <img class="img-responsive" src="{{ Request::segment(1) == 'payment' ? asset('frontend/Icon/Payment-Red.png') :asset('frontend/Icon/Payment-Gray.png') }}" alt="" width="60px">
                </a>
            </div>
        </div>
    </div>