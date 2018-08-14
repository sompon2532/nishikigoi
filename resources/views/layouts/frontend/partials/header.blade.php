<!-- Logo -->
    <div class="col-md-12 logo-box">
        <a href="{{ route('frontend.index') }}" class="logo" title="Home">
            <img class="img-responsive" src="{{ asset('frontend/img/AW-NISHIKIGOI_ALLIANCE-BANNER.jpg') }}" alt="">
        </a>
        <div class="logo-box-btn">
            <div class="col-xs-2 col-xs-offset-2 text-center">
                <a href="{{ route('frontend.index') }}" class="btn-center" title="Home">
                    <img class="img-responsive" src="{{ Request::segment(1) == '' ? asset('frontend/Icon/Home-red.png') :asset('frontend/Icon/Home-gray.png') }}" alt="" width="60px">
                </a>
            </div>
            <div class="col-xs-2 text-center">
                <a href="{{ route('frontend.event.index') }}" class="btn-center" title="Event">
                    <img class="img-responsive" src="{{ Request::segment(1) == 'event' ? asset('frontend/Icon/Event-Red.png') :asset('frontend/Icon/Event-Gray.png') }}" alt="" width="60px">
                </a>
            </div>
            <div class="col-xs-2 text-center">
                <a href="{{ route('frontend.alliance.index') }}" class="btn-center" title="Alliance">
                    <img class="img-responsive" src="{{ Request::segment(1) == 'alliance' ? asset('frontend/Icon/Alliance-Red.png') : asset('frontend/Icon/Alliance-Gray.png') }}" alt="" width="60px">
                </a>
            </div>
            <div class="col-xs-2 text-center">
                <a href="{{ route('frontend.payment.index') }}" class="btn-center" title="Payment">
                    <img class="img-responsive" src="{{ Request::segment(1) == 'payment' ? asset('frontend/Icon/Payment-Red.png') :asset('frontend/Icon/Payment-Gray.png') }}" alt="" width="60px">
                </a>
            </div>
        </div>
    </div>