<!-- Logo -->
<div class="logo-box">
    <div class="col-md-12">
        <a href="{{ route('frontend.index') }}" class="logo">
            <img class="img-responsive" src="{{ asset('frontend/img/AW-NISHIKIGOI_ALLIANCE-BANNER.jpg') }}" alt="">
        </a>
        <div class="row">

            <div class="logo-box-btn">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ route('frontend.event.index') }}" class="btn-event">
                        <img class="img-responsive" src="{{ Request::segment(1) == 'event' ? asset('frontend/Icon/Event-Red.png') :asset('frontend/Icon/Event-Gray.png') }}" alt="" width="60px">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ route('frontend.partner.index') }}" class="btn-partner">
                        <img class="img-responsive" src="{{ Request::segment(1) == 'partner' ? asset('frontend/Icon/Alliance-Red.png') : asset('frontend/Icon/Alliance-Gray.png') }}" alt="" width="60px">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>