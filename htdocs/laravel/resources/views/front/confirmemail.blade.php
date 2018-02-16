<?php

if (preg_match('/mm/', \Request::PATH())) {
    $lang_path = 'mm';
} else {
    $lang_path = 'en';
}
//i am not using multiple auth package so i am adding this custom codes

//follow code is cache clear code this is not to show login form again if user is logged in (or)registered and then he hit browser back button
echo header("Cache-Control:no-store,no-cache,must-revalidate,max-age=0");
header("Cache-Control:post-check=0,pre-check=0", false);
header("Pragma:no-cache");
header('Content-Type:text/html');
//if user is authenticated but he call to register or login form it will redirect to front index
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1
    ">
    <meta http-equiv="cache-control" content="max-age=0"/>


    @yield('title')

            <!-- Fonts -->
    <link href="{{asset('css/fonts/font-awesome/4.1.0/css/font-awesome.min.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('backends/css/font-awesome/4.1.0/fonts/css?family=Lato:100,300,400,700')}}" rel='stylesheet'
          type='text/css'>

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

        .footeradsuser {
            background: white;
            border-top: 1px solid #e7e7e7;
            bottom: 0px;
            width: 100%;
        }

        .footeradsuser .inner {
            text-align: center;
            color: black;
        }
        @media (max-width:600px){
            .titlesize{
                font-size:15px !important;
                font-weight:bold;

            }
            .contentsize{
                font-size:13px !important;

            }

        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top" style="background-color:white;">

    <div class="container" style="background-color:white;">
        <h3 class="titlesize">
            Myanusedcar (user registration)
        </h3>

    </div>

</nav>

<div class="row" style="margin-left:13%;">
    <div class="col-xs-10">

        <div class="alert alert-info" style="padding:4px;">

            <strong>
                <i class="ace-icon fa fa-times"></i>
                <div style="margin-left:12%;margin-right:12%;text-align:justify;font-size:113%;">
                    <div class="contentsize">{{trans('greeting.cfmmsgttl')}}</div>
                    <div class="clear">&nbsp;</div>
                    @if(preg_match('/mm/',\Request::PATH()))

                       <div class="contentsize"> သင့္email ({{$email}})သို့အတည္ၿပဳ email တစ္ေစာင္ပိို့လိုက္ၿပီး ၿဖစ္ပါသည္။အဲ့ဒီ email မွ ခလုပ္ ကိုႏွိပ္ၿပီးအတည္ၿပဳေပးပါ။</div>
                    @endif
                    <div class="clear">&nbsp;</div>

                    <a href="{{url($langid.'/user/confirm_email')}}" class="btn btn-info" style="">{{trans('greeting.resend')}}>>></a>
                </div>
                <div class="clear"></div>
                <div class="clear">&nbsp;</div>
                <div class="clear">&nbsp;</div>


            </strong>

            <br/>
        </div>
    </div>
</div>
<div class="footeradsuser">
    <div class="inner">    &copy;2016-2017 &nbsp;myanusedcars All right reserved</div>


</div>
<script src="{{asset('backends/js/jquery.min.js')}}"></script>
<script src="{{asset('backends/js/bootstrap.min.js')}}"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>

</html>

