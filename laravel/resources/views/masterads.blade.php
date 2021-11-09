<?php
if (preg_match('/mm/', \Request::PATH())) {
    $lang_path = 'mm';
} else {
    $lang_path = 'en';
};
//following code is to prevent user hit back button from browser after loggedout (not to send query from dashboard)
echo header("Cache-Control:no-store,no-cache,must-revalidate,max-age=0");header("Cache-Control:post-check=0,pre-check=0", false);header("Pragma:no-cache");header('Content-Type:text/html');

//this is for email confirm
/*
if(Auth::user()->role != 'member' and Auth::user()->role !='banned'){
        //we decide auth user is not confirm email he have not confirmed his email
?>
<script>window.location.assign("{{asset('mm/user/confirm_email')}}");</script>
<?php
}?>
*/
if(Auth::user()->role == 'banned'){
//check if user have been banned by admin
?>
<script>window.location.assign("{{asset('banned')}}");</script>

<?php

}
if(Auth::user()->role == 'pre'){//is user is pre he will need to pay money
?>
<script>window.location.assign("{{asset('needaccess')}}");</script>


<?php
}
if(Auth::user()->role != 'member' and Auth::user()->role != 'preminum'){//if user is not member or preminum
?>
<script>window.location.assign("{{asset('banned')}}");</script>

<?php
}
?>
<?php
if (preg_match('/mm/', \Request::PATH())) {
    $lang_path = 'mm';
} else {
    $lang_path = 'en';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!--this meta tag is for vision percentage-->
    <meta name="viewport" content="width=device-width, initial-scale=0.93">
    <!--end-->

    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" media="screen">
    <link href="{{asset('css/morphbutton.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/chosen.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pictopro-outline.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pictopro-normal.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('backends/font-awesome/4.2.0/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/carat.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-tagsinput.css')}}" media="screen">


    <link rel="stylesheet" href="{{asset('css/adsuser.css')}}" class="ace-main-stylesheet"
F          id="main-ace-style" />


    <title>Myan Used Car</title>
    <style>
        .smactionbtn {
            padding: 1px 12px;
            margin-left: 2px;
        }

        .smbutton {
            float: left;
            margin-bottom: -3px;
            margin-left: -11px;
            margin-right: 1px;
            padding-left: 4px !important;
            padding-right: 1px !important;
        }

        .form-custom {
            border: 3px solid #d6d6d6;
            background: rgba(119, 87, 80, 0.03);
        }

        .form-font {
            color: #ab650a;
            font-weight: bolder;
            font-size: 17px;
        }

        .adsactions {
            text-align: center;
            vertical-align: middle;
            padding-top: 0.1px;
            border: 1px solid rgb(214, 116, 72);
            padding-bottom: 4px;
        }

        .next-cst {
            position: absolute;
            margin-top: 155px;
            right: -2px;
        }

        .bootstrap-tagsinput {
            border: 3px solid #d6d6d6;
            width: 100%;
        }

    </style>

</head>
<body class="container">


<div class="topbar black" style="border-bottom:1px solid #8D443F;padding-bottom:1px;">
    <div class="container">
        <div class="row">
            <div class=" col-xs-4 col-sm-4 col-md-3 col-lg-3 cstlogo">
                <img src="{{asset('img/myanusedcarslogo.png')}}" style="height:100%;">
            </div>
            <div class="col-xs-8 col-sm-4 col-lg-3" style="margin-top:4px;">
                <span class="logottl">MyanusedCar</span>
                <br>
                <span style="color:white;font-size:16px;">(usedကားေ၇ာင္း၀ယ္website)</span></div>

            <div class="col-xs-12 col-sm-4 col-lg-6 header-top-right">
                <div>


                    <div class="languages">
                        <ul>
                            <li>

                                <?php
                                //if current current link has en
                                if (preg_match('/en/', \Request::PATH())) {
                                    //replace en with mm
                                    $mm_path = preg_replace('/en/', 'mm', \Request::PATH());
                                } else {
                                    $mm_path = \Request::PATH();
                                }
                                ?>

                                <a href="{{asset($mm_path)}}">
                                    <img src="{{asset('img/en.png')}}" style="float:left;"
                                         alt="#">&nbsp<span>Myanmar</span></img>
                                </a>
                            </li>
                            <li>
                                <?php
                                //if current link has en
                                if (preg_match('/mm/', \Request::PATH())) {
                                    //replace mm with en
                                    $en_path = preg_replace('/mm/', 'en', \Request::PATH());
                                } else {
                                    $en_path = \Request::PATH();
                                }
                                ?>
                                <a href="{{asset($en_path)}}">
                                    <img src="{{asset('img/ru.png')}}" style="float:left;"
                                         alt="#">&nbsp<span>Eng</span></img>
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.languages -->

                </div>
            </div><!-- /.col-md-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.topbar -->
<header id="header">
@include('front.adsuser.success_session')
    <div class="header-inner black">
        <div class="container">
            <div class="row">
                @if(!empty(Auth::user()))
                    <div class="col-xs-10 col-sm-12 col-md-12 col-lg-3">
                        <div class="">
                            <div class="dropdown">
                                <button class="btn btn-small btn-danger dropdown-toggle smallbuttom smbutton tohide" type="button"
                                        data-toggle="dropdown"
                                        style="">
                                    &nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-user"></i>&nbsp;

                                    {{trans('greeting.toyouracc')}}&nbsp;

                                    <i class="fa fa-chevron-down"></i>&nbsp;&nbsp;&nbsp;
                                </button>
                                <ul class="dropdown-menu" style="margin-top:36px;left:-12px;min-width:258px;border: 2px solid #bd650a;
    padding-top: 15px;">
                                    <li>
                                        <a href="{{asset('/'.$lang_path.'/user/'.Auth::user()->id.'/addcar_post')}}"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Your Car</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{asset('/'.$lang_path.'/user/'.Auth::user()->id.'/carpostlist')}}"><i class="fa fa-cab"></i>&nbsp;&nbsp;Your Cars</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{url('/'.$lang_path.'/user/'.Auth::user()->id.'/profile')}}"><i class="fa fa-user"></i>&nbsp;&nbsp;Your Profile</a>
                                    </li>
                                    <li class="divider"></li>

                                    <li>
                                        <a href="{{url('/logout')}}"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="">&nbsp;</li>
                                </ul>
                            </div>

                            <a href="{{url('/'.$lang_path.'/user/'.Auth::user()->id.'/addcar_post')}}"
                               style="float:left;padding-left:4px !important;padding-right:1px !important;"
                               class="btn btn-small hvr-underline-from-center btn-danger smallbuttom ">
                                {{trans('greeting.addcarpost')}}
                                <i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;

                            </a>

                        </div>
                    </div>



                @else
                    <div class="col-xs-10 col-sm-12 col-md-12 col-lg-3">
                        <a href="{{url('/'.$lang_path.'/user/register')}}"
                           style="float:left;margin-bottom:-3px;margin-left:-11px;margin-right:1px;padding-left:4px !important;padding-right:1px !important;"
                           class="btn btn-small hvr-underline-from-center btn-danger smallbuttom ">
                            {{trans('greeting.registerbutton')}}
                            <i class="icon icon-normal-right-arrow-small"></i>

                        </a>
                        <a href="{{url('/'.$lang_path.'/user/login')}}"
                           style="float:left;padding-left:4px !important;padding-right:1px !important;"
                           class="btn btn-small hvr-underline-from-center btn-danger smallbuttom ">
                            {{trans('greeting.loginbutton')}}
                            <i class="icon icon-normal-right-arrow-small"></i>

                        </a>
                    </div>
                @endif


                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">


                    <button class="smallmenu navbar-toggle " style="padding:10px;background-color:#f95446;" type="button"
                            data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span></button>

                    <nav class="collapse navbar-collapse" role="navigation" style="padding:2px;">
                        <ul class="navigation">
                            <li>
                                <a href="{{asset('/')}}">{{trans('greeting.menu1')}}</a>
                            </li>
                            <!--brands-->
                            <li class="menuparent has-megamenu " data-toggle="collapse" data-target="#menu1">
                                <!--end brands menu-->
                                <a href="javascript:void();">Brands</a>


                                <div class="megamenu" id="menu1">
                                    <div class="megamenu-inner clearfix" style="height:70%;">
                                        <span></span>


                                        <div class="col-md-12 col-sm-12">
                                            <h2>Our Brands</h2>

                                            <div class="brands block mein">

                                                <div class="col-md-3 col-sm-3">
                                                    <ul>

                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Aston Martin')}}">
                                                                Aston Martin
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Audi')}}">
                                                                Audi
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/BMW')}}">
                                                                BMW
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/BAIC')}}">
                                                                BAIC </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Bentley')}}">
                                                                Bentley
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Brilliance')}}">
                                                                Brilliance
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Cadillac')}}">
                                                                BMW
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Chevrolet')}}">
                                                                Chevrolet </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Chrysler')}}">
                                                                Chrysler
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Daihatsu')}}">
                                                                Daihatsu </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Dodge')}}">
                                                                Dodge </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/FIAT')}}">
                                                                FIAT
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Ferrari')}}">
                                                                Ferrari
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.col-md-6 -->
                                                <div class="col-md-3 col-sm-3">
                                                    <ul>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Foton')}}">
                                                                Foton
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Ford')}}">
                                                                Ford</a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/GMC')}}">
                                                                GMC
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Geely')}}">
                                                                Geely
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/HUMMER')}}">
                                                                HUMMER
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Hino')}}">
                                                                Hino
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Honda')}}">
                                                                Honda
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Hyundai')}}">
                                                                Hyundai
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Isuzu')}}">
                                                                Isuzu
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Iveco')}}">
                                                                Iveco
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Jeep')}}">
                                                                Jeep
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Kia')}}">
                                                                Kia
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Lamborghini')}}">
                                                                Lamborghini
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Lexus')}}">
                                                                Lexus </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-3 col-sm-3">

                                                    <ul>

                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Lifan')}}">
                                                                Lifan
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Lincoln')}}">
                                                                Lincoln
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Mitsubishi')}}">
                                                                Mitsubishi
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/MG')}}">
                                                                MG
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/MINI')}}">
                                                                MINI
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Mitsuoka')}}">
                                                                Mitsuoka </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Maserati')}}">
                                                                Maserati
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Mazda')}}">
                                                                Mazda
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Mercedes-Benze')}}">
                                                                Mercedes-Benze
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Nissan')}}">
                                                                Nissan
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Peugeot')}}">
                                                                Peugeot
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Pontiac')}}">
                                                                Pontiac
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Porsche')}}">
                                                                Porsche
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.row -->

                                                <div class="col-md-3 col-sm-3">
                                                    <ul>


                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Proton')}}">
                                                                Proton
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Land Rover')}}">
                                                                Rover
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Renault')}}">
                                                                Renault
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Scania')}}">
                                                                Scania
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Smart')}}">
                                                                Smart
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Subaru')}}">
                                                                Subaru
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Suzuki')}}">
                                                                Suzuki
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Tesla')}}">
                                                                Tesla
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Toyota')}}">
                                                                Toyota
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Vauxhall')}}">
                                                                Vauxhall
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Volkswagen')}}">
                                                                Volkswagen
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Volvo')}}">
                                                                Volvo
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a style="color:#6f6666;font-size:12px;"
                                                               href="{{asset('/'.$lang_path.'/result_brand/Yutong')}}">
                                                                Yutong
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.col-md-6 -->


                                            </div><!-- /.brands -->
                                        </div><!-- /.col-md-5 -->
                                    </div><!-- /.megamenu-inner -->
                                </div><!-- /.mega-menu-->
                            </li>
                            <!--end brands menu-->

                            <!--car types-->
                            <li class="menuparent has-megamenu" data-toggle="collapse" data-target="#menu2">
                                <!--end brands menu-->
                                <a href="javascript:void();">Car Types</a>
                                <div id="menu2" class="regular megamenu">


                                    <div class="megamenu-inner clearfix" sstyle="height:70%;">
                                        <span></span>

                                        <div class="col-md-12 col-sm-12">
                                            <h2>Body Types
                                            </h2>

                                            <div class="brands block mein">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <ul>
                                                            <?php
                                                            //$t is for body type to divide div in menu drop down
                                                            $t;
                                                            $t = 1;?>
                                                            @foreach($types as $type)
                                                                <li>

                                                                    <a style="color:#6f6666;font-size:12px;"
                                                                       href="{{asset('/'.$lang_path.'/result_type/'.$type)}}">
                                                                        {{$type}}
                                                                    </a>
                                                                    <?php

                                                                    if($t == 7 and $t !== $count)
                                                                    {
                                                                    //if loop hv done for 5 time and i is not equal with brand count li ul div and clss col-md-3 will output and then set value 0 to i
                                                                    $t = 0;
                                                                    ?>
                                                                </li>
                                                        </ul>
                                                    </div><!-- /.col-md-6 -->
                                                    <div class="col-md-3 col-sm-3">
                                                        <ul>
                                                            <?php
                                                            }else{
                                                            ?>
                                                            </li>
                                                            <?php } $t++;?>

                                                            @endforeach

                                                        </ul>
                                                    </div><!-- /.col-md-6 -->


                                                </div><!-- /.row -->
                                            </div><!-- /.brands -->
                                        </div><!-- /.col-md-5 -->


                                    </div><!-- /.megamenu-inner -->
                                </div><!-- /.mega-menu-->
                            </li>
                            <!--end of car types-->


                            <!--year-->
                            <li class="menuparent has-megamenu" data-toggle="collapse" data-target="#menu3">
                                <a href="javascript:void();">Release Year</a>

                                <div class="megamenu" id="menu3">
                                    <div class="megamenu-inner clearfix" style="height:70%;">
                                        <span></span>


                                        <div class="col-md-12 col-sm-12">
                                            <h2>Release Years</h2>

                                            <div class="brands block mein">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3">
                                                        <ul>
                                                            <?php
                                                            //$i is for to divide div in menu drop down

                                                            $y;
                                                            $y = 1;?>
                                                            @foreach($year as $each_year)
                                                                <li>
                                                                    <a style="color:#6f6666;font-size:12px;"
                                                                       href="{{asset($lang_path.'/result_year/'.$each_year)}}">
                                                                        {{$each_year}}
                                                                    </a>
                                                                    <?php

                                                                    if($y == 1 and $y !== $count)
                                                                    {
                                                                    //if loop hv done for 5 time and i is not equal with brand count li ul div and clss col-md-3 will output and then set value 0 to i
                                                                    $y = 0;
                                                                    ?>
                                                                </li>
                                                        </ul>
                                                    </div><!-- /.col-md-6 -->
                                                    <div class="col-md-3 col-sm-3">
                                                        <ul>
                                                            <?php
                                                            }else{
                                                            ?>
                                                            </li>
                                                            <?php } $y++;?>

                                                            @endforeach
                                                        </ul>
                                                    </div><!-- /.col-md-6 -->
                                                </div><!-- /.row -->
                                            </div><!-- /.brands -->
                                        </div><!-- /.col-md-5 -->
                                    </div><!-- /.megamenu-inner -->
                                </div><!-- /.mega-menu-->

                            </li>


                            <li>
                                <a href="{{asset($lang_path.'/newlist')}}">{{trans('greeting.menu5')}}</a>
                            </li>
                            <li class="menuparent has-megamenu" data-toggle="collapse" data-target="#showroommenu">
                                <a href="javascript:void();">{{trans('greeting.showroommenu')}}</a>

                                <div class="megamenu" id="showroommenu">
                                    <div class="megamenu-inner clearfix" style="height:70%;">
                                        <span></span>


                                        <div class="col-md-12 col-sm-12">
                                            <h2>Release Years</h2>

                                            <div class="brands block mein">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3">
                                                        <ul>
                                                            <li></li>
                                                        </ul>
                                                    </div><!-- /.col-md-6 -->

                                                </div><!-- /.row -->
                                            </div><!-- /.brands -->
                                        </div><!-- /.col-md-5 -->
                                    </div><!-- /.megamenu-inner -->
                                </div><!-- /.mega-menu-->

                            </li>


                            <li>
                                <a href="{{asset($lang_path.'/contact-us')}}">{{trans('greeting.menu6')}}</a>
                            </li>

                        </ul><!-- /.nav -->
                    </nav>

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-inner -->
</header><!-- /#header -->
<div class="" style="background:rgba(96, 45, 22, 1);">&nbsp;</div>


@yield('content')
<footer class="" id="footer">
    <div class="container black">
        <div class="row">
            @foreach($hottest as $htt)

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="">
                    <div class="block random-cars">
                        <div class="title">
                            <h2>{{trans('greeting.popular')}}</h2>
                        </div><!-- /.title -->

                        <div class="items">
                            <div class="teaser-item-wrapper">
                                <div class="teaser-item">
                                    <div class="title">
                                        <a href="#" style="color:white;">{{str_limit($htt->brand,14)}}</a>
                                    </div><!-- /.title -->

                                    <div class="price" style="color:#f95446;">{{$htt->price}}{{trans('greeting.lakh')}}</div>
                                          <!-- /.subtitle -->

                                    <div class="row">
                                        <div class="picture-wrapper col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="picture">
                                                <a href="#">
                                                    <img src="{{asset('/backend/images/carlist/'.$htt->photo2)}}" alt="#">
                                                </a>
                                            </div><!-- /.picture -->
                                        </div><!-- /.picture-wrapper -->

                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <p style="word-break:break-all;">
                                                {{str_limit($htt->detail,90)}}
                                            </p>
                                            <a href="{{url('/'.$lang_path.'/detail/'.$htt->id)}}"
                                               class="btn btn-small hvr-underline-from-center btn-danger smallbuttom  pplbtn">
                                                {{trans('greeting.readmore')}}
                                                <i class="icon icon-normal-right-arrow-small"></i>

                                            </a>

                                        </div><!-- /.picture-content -->
                                    </div><!-- /.row -->
                                </div><!-- /.teaser-item -->

                            </div><!-- /.teaser-item-wrapper -->


                        </div><!-- /.items -->

                    </div><!-- /.block -->

                </div><!-- /.col-md-4 -->

            @endforeach
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="block">
                    <div class="title">
                        <h2>{{trans('greeting.subscribe')}}</h2>
                    </div><!-- /.title -->

                    <form action="{{asset('/subscribe')}}" method="get">
                        <div class="input-group">
                            <input class="form-control" name='email' placeholder="Your e-mail address" required="required"
                                   type="email">

          <span class="input-group-btn">
            <button class="btn hvr-underline-from-center btn-default" type="submit">{{trans('greeting.subscribebutton')}}
            </button><!-- /.btn -->
          </span><!-- /.input-group-btn -->
                        </div><!-- /.input-group -->
                    </form>

                    <br>

                    <div class="opening-hours">
                        <div class="day clearfix">
                            <span class="name">Facebook Page</span>
                            <span class="hours"><a href="facebook">Fackbook link</a></span>
                        </div><!-- /.day -->

                        <div class="day clearfix">
                            <span class="name">Email</span>
                            <span class="hours">myanusedcars@gmail.com</span>
                        </div><!-- /.day -->

                        <div class="day clearfix">
                            <span class="name">Viber</span>
                <span class="hours">09420184170
                            </span>
                        </div><!-- /.day -->
                        <div class="day clearfix">
                            <span class="name">Line</span>
                <span class="hours">myanusedcar
                            </span>
                        </div><!-- /.day -->


                    </div><!-- /.opening-hours -->
                </div><!-- /.block -->
            </div><!-- /.col-md-4 -->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="title">
                    <h2>သတိၿပဳခ်က္ </h2>
                </div><!-- /.title -->
                      myanusedcar website သည္ကားေရာင္းသူႏွင့္ကား၀ယ္သူမ်ားကိုေတြ့ဆံုဆက္သြယ္မူရရွိေစရန္သက္သက္သာၿဖစ္ပါသည္။
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="footer-bottom black">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 clearfix">
                    <div class="copyright">
                        © 2016-2017
                        Myanusedcar
                        <span class="separator">/</span>
                        All rights reserved
                    </div><!-- /.pull-left -->

                    <ul class="nav nav-pills">
                        <li>
                            <a href="{{asset('/')}}">{{trans('greeting.menu1')}}</a>
                        </li>
                        <li>
                            <a href="{{asset($lang_path.'/newlist')}}">{{trans('greeting.menu5')}}</a>
                        </li>
                        <li>
                            <a href="{{asset($lang_path.'/contact-us')}}">{{trans('greeting.menu6')}}</a>
                        </li>

                    </ul><!-- /.nav -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</footer><!-- /#footer -->
<script src="{{asset('js/jquery_002.js')}}"></script>
<script src="{{asset('js/jquery_006.js')}}"></script>


<script src="{{asset('js/bootstrap-tagsinput.min.js')}}"></script>


<script src="{{asset('js/carat.js')}}"></script><!--this is all slider js-->


<script src="{{asset('js/bootstrap.js')}}"></script>


      <!-- page specific plugin scripts -->

      <!-- page specific plugin scripts -->


      <!-- ace scripts -->
<script src="{{asset('backends/js/ace-elements.min.js')}}"></script>
<script src="{{asset('backends/js/ace.min.js')}}"></script>
<script src="{{asset('backends/js/bootstrap-tag.min.js')}}"></script>


<script>

    $(document).ready(function () {
        $('.tohide').click(function (e) {

            $('.navbar-collapse.in').collapse('hide');

        });

        $('#myModal').modal("show");
        $('#close').click(function () {
            $('#myModal').modal("hide");


        });
    })
</script><!--model alert for subscriber-->
<script type="text/javascript">
    jQuery(function ($) {


        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file: 'No File ...',
            btn_choose: 'Choose',
            btn_change: 'Change',
            droppable: false,
            onchange: null,
            thumbnail: false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
        });
        //pre-show a file name, for example a previously selected file
        //$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])


        $('#id-input-file-3').ace_file_input({
            style: 'well',
            btn_choose: 'Drop files here or click to choose',
            btn_change: null,
            no_icon: 'ace-icon fa fa-cloud-upload',
            droppable: true,
            thumbnail: 'small'//large | fit
            //,icon_remove:null//set null, to hide remove/reset button
            /**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
            /**,before_remove : function() {
						return true;
					}*/
            ,
            preview_error: function (filename, error_code) {
                //name of the file that failed
                //error_code values
                //1 = 'FILE_LOAD_FAILED',
                //2 = 'IMAGE_LOAD_FAILED',
                //3 = 'THUMBNAIL_FAILED'
                //alert(error_code);
            }

        }).on('change', function () {
            //console.log($(this).data('ace_input_files'));
            //console.log($(this).data('ace_input_method'));
        });

        $('.select2').css('width', '200px').select2({allowClear: true})
        $('#select2-multiple-style .btn').on('click', function (e) {
            var target = $(this).find('input[type=radio]');
            var which = parseInt(target.val());
            if (which == 2) $('.select2').addClass('tag-input-style');
            else $('.select2').removeClass('tag-input-style');
        });

        //////////////////
        $('.multiselect').multiselect({
            enableFiltering: true,
            buttonClass: 'btn btn-white btn-primary',
            templates: {
                button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"></button>',
                ul: '<ul class="multiselect-container dropdown-menu"></ul>',
                filter: '<li class="multiselect-item filter"><div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control multiselect-search" type="text"></div></li>',
                filterClearBtn: '<span class="input-group-btn"><button class="btn btn-default btn-white btn-grey multiselect-clear-filter" type="button"><i class="fa fa-times-circle red2"></i></button></span>',
                li: '<li><a href="javascript:void(0);"><label></label></a></li>',
                divider: '<li class="multiselect-item divider"></li>',
                liGroup: '<li class="multiselect-item group"><label class="multiselect-group"></label></li>'
            }
        });

        //$('#id-input-file-3')
        //.ace_file_input('show_file_list', [
        //{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
        //{type: 'file', name: 'hello.txt'}
        //]);


        //dynamically change allowed formats by changing allowExt && allowMime function
        $('#id-file-format').removeAttr('checked').on('change', function () {
            var whitelist_ext, whitelist_mime;
            var btn_choose
            var no_icon
            if (this.checked) {
                btn_choose = "Drop images here or click to choose";
                no_icon = "ace-icon fa fa-picture-o";

                whitelist_ext = ["jpeg", "jpg", "png", "gif", "bmp"];
                whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
            }
            else {
                btn_choose = "Drop files here or click to choose";
                no_icon = "ace-icon fa fa-cloud-upload";

                whitelist_ext = null;//all extensions are acceptable
                whitelist_mime = null;//all mimes are acceptable
            }
            var file_input = $('#id-input-file-3');
            file_input
                    .ace_file_input('update_settings',
                            {
                                'btn_choose': btn_choose,
                                'no_icon': no_icon,
                                'allowExt': whitelist_ext,
                                'allowMime': whitelist_mime
                            })
            file_input.ace_file_input('reset_input');

            file_input
                    .off('file.error.ace')
                    .on('file.error.ace', function (e, info) {
                        //console.log(info.file_count);//number of selected files
                        //console.log(info.invalid_count);//number of invalid files
                        //console.log(info.error_list);//a list of errors in the following format

                        //info.error_count['ext']
                        //info.error_count['mime']
                        //info.error_count['size']

                        //info.error_list['ext']  = [list of file names with invalid extension]
                        //info.error_list['mime'] = [list of file names with invalid mimetype]
                        //info.error_list['size'] = [list of file names with invalid size]


                        /**
                         if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
                         */


                        //if files have been selected (not dropped), you can choose to reset input
                        //because browser keeps all selected files anyway and this cannot be changed
                        //we can only reset file field to become empty again
                        //on any case you still should check files with your server side script
                        //because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
                    });

        });


    });
    var tag_input = $('#form-field-tags');
    try {
        tag_input.tag(
                {
                    placeholder: tag_input.attr('placeholder'),
                    //enable typeahead by specifying the source array
                    source: ace.vars[''],//defined in ace.js >> ace.enable_search_ahead
                    /**
                     //or fetch data from database, fetch those that match "query"
                     source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
                     */
                }
        )

        //programmatically add a new
        var $tag_obj = $('#form-field-tags').data('tag');

    }
    catch (e) {
        //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
        tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' + tag_input.val() + '</textarea>').remove();
        //$('#form-field-tags').autosize({append: "\n"});
    }
</script>


<div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div>
</div>
</body>
</html>

