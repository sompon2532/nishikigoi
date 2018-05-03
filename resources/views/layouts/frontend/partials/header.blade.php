<!-- Logo -->
<div class="logo-box">
    <div class="col-md-12">
        <a href="{{ route('frontend.index') }}" class="logo">
            <img class="img-responsive" src="{{ asset('frontend/img/NISHIKIGOI_LOGO.png') }}" alt="">
        </a>
    </div>

    <div class="col-xs-offset-3 col-sm-offset-4 col-md-offset-5 col-xs-6 col-sm-4 col-md-2">
        <div class="btn-box">
            <div class="btn-inner-box">
                <a href="{{ route('frontend.event.index') }}" class="btn-event">
                    <img class="img-responsive" src="{{ Request::segment(1) == 'event' ? asset('frontend/Icon/Event-Red.png') :asset('frontend/Icon/Event-Gray.png') }}" alt="" width="60px">
                </a>
                <a href="{{ route('frontend.partner.index') }}" class="btn-partner">
                    <img class="img-responsive" src="{{ Request::segment(1) == 'partner' ? asset('frontend/Icon/Alliance-Red.png') : asset('frontend/Icon/Alliance-Gray.png') }}" alt="" width="60px">
                </a>
            </div>
        </div>
    </div>
</div>