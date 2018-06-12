<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="icon" href="{!! asset('images/Rabbit.ico') !!}" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/sweetAlert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/myStyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/SpectralFont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">

</head>

<body class="bg-light">
    <div id="app">
        <nav class="navbar navbar-expand-lg  bg-dark text-white animated fadeInDown">
            <a class="navbar-brand text-white" href="{{ url('/') }}">
                     {{--<img src="{{asset('images/Rabbit.ico')}}" alt="Logo" width="40px;">--}}
                     <!-- TODO : when this clicked distroy all sessions!! -->
                     <i class="fa fa-universal-access  fa-3x" aria-hidden="true"></i>
         </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Rabbit List
               </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <!--
           <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
           </form>
         -->
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
    {{--
    <script src="{{asset('js/sweetAlertError.js')}}"></script>--}}
    <script src="{{asset('js/sweetAlert.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/Jquery.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{asset('js/myJavascript.js')}}"></script>
    @yield('scripts')
</body>

</html>