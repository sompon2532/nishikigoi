<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}">
    <!-- Fullcalendar -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/fullcalendar/fullcalendar.min.css') }}"/>
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}"/>
    <!-- Lightbox -->
    <link rel="stylesheet" href="{{ asset('plugins/lightbox/dist/css/lightbox.min.css') }}">
    <!-- Font-awesom -->
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- Main style -->
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}" />

    @stack('style')

    {{--<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/> -->--}}
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <div class="row">
                    @include('layouts.frontend.partials.header')
                </div>
            </div>
        </header>
        <!-- <div class="content-wrapper"> -->
            <section class="content">
                <div class="container content-box">
                    @yield('content')
                </div>
            </section>
        <!-- </div> -->
        <footer>
            <div class="container">
                <div class="row">
                    <!-- <div class="row equal"> -->
                        @include('layouts.frontend.partials.footer')
                    <!-- </div> -->
                </div>
            </div>
        </footer>
    </div>
    
    <script src="{{ asset('frontend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('frontend/plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
    <!-- Moment -->
    <script src="{{ asset('frontend/plugins/moment/moment.min.js') }}"></script>
    <!-- Fullcalendar -->
    <script src="{{ asset('frontend/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
    <!-- Slick -->
    <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
    <!-- Lightbox -->
    <script src="{{ asset('plugins/lightbox/dist/js/lightbox.js') }}"></script>    
    <!-- Calendar -->
    {{--<!-- {!! $calendar->script() !!} -->--}}
    <!-- Main script -->
    <script src="{{ asset('frontend/script.js') }}"></script>
    @stack('scripts')

    {{--<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->--}}
    {{--<!-- <script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script> -->--}}
    {{--<!-- <script src="{{ asset('frontend/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script> -->--}}
    {{--<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->--}}
    {{--<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script> -->--}}
    {{--<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script> -->--}}

</body>
</html>