<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('frontend/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}">
    <!-- Fullcalendar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}"/>
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('frontend/style.css') }}" />

    @stack('style')

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
                <div class="row equal">
                    @include('layouts.frontend.partials.footer')
                </div>
            </div>
        </footer>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="{{-- asset('plugins/jQuery/jquery-2.2.3.min.js') --}}"></script> -->
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ asset('frontend/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <!-- Slick -->
    <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
    <!-- Calendar -->
    {!! $calendar->script() !!}
    <!-- Main script -->
    <script src="{{ asset('frontend/script.js') }}"></script>
    @stack('scripts')
</body>
</html>