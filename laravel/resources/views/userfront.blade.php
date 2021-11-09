<?php

if (preg_match('/mm/', \Request::PATH())) {
    $lang_path = 'mm';
} else {
    $lang_path = 'en';
}
//i am not using multiple auth package so i am adding this custom codes

//follow code is cache clear code this is not to show login form again if user is logged in (or)registered and then he hit browser back button
echo header("Cache-Control:no-store,no-cache,must-revalidate,max-age=0");header("Cache-Control:post-check=0,pre-check=0", false);header("Pragma:no-cache");header('Content-Type:text/html');
//if user is authenticated but he call to register or login form it will redirect to front index
if(Auth::check() == true){
?>
<script>window.location.assign("{{asset('/'.$lang_path.'/user/'.Auth::user()->id.'/carpostlist/')}}");</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="max-age=0"/>


    @yield('title')

            <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('backends/font-awesome/4.2.0/css/font-awesome.min.css')}}"/>

    <!-- Styles -->
    <link href="{{asset('backends/css/bootstrap.min.css')}}" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">

    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="#">
                <?php if($title=='r'){?>
                {{trans('greeting.rttl')}}
                <?php };?>
                    <?php if($title=='l'){?>
                {{trans('greeting.lttl')}}
                <?php };?>
            </a>
        </div>


        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->


            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{asset('/'.$lang_path.'/user/login')}}">Login</a></li>
                    <li><a href="{{asset('/'.$lang_path.'/user/register')}}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

        <!-- JavaScripts -->
<script src="{{asset('backends/js/jquery.2.1.1.min.js')}}"></script>
<script src="{{asset('backends/js/bootstrap.min.js')}}"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
