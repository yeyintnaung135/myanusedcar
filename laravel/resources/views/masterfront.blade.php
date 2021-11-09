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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">    <!--end-->

    <link rel="shortcut icon" href="#">
    <link rel='stylesheet' id='headers-css' href="{{asset('css/converio/styles/headers.css')}}" type='text/css'
          media='all'/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}" media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{asset('css/morphbutton.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/chosen.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pictopro-outline.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pictopro-normal.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/carat.css')}}" media="screen">
    <link href="{{asset('css/faw/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/faw/css/brands.css')}}" rel="stylesheet">
    <link href="{{asset('css/faw/css/solid.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"/>


    <title>Myan Used Car</title>
    <style>
        .form-custom {
            border: 3px solid #d6d6d6;
            background: rgba(119, 87, 80, 0.03);
        }
        .yk-detail{
            text-indent: 50px;
            height:152px;
            overflow-y:scroll;
        }
        .yk-detail::-webkit-scrollbar {
            display: none;
        }
        .card-horizontal {
            display: flex;
            flex: 1 1 auto;
        }

        .__mm {
            font-family: 'Padauk' !important;
            font-size: 12px !important;
        }



        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 11px 19px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 50% !important;
            user-select: none;
            background: #f60;
            margin-left: 10px;
            margin-right: 10px;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .bootstrap-tagsinput {
            border: 3px solid #d6d6d6;
            width: 100%;
        }
        .yk_sub_title{
          right:0;font-weight: bolder;color:#212529;
        }
        .yk_sub_title_two{
            font-size: 15px !important;
            font-weight: bolder !important;
            color:#212529a1;
        }
        .yk-carlist{
            width: 100%;
            height: 193px;
        }
        .yk-color-detail{
          color:#ff6600;
        }
        .yk-cartitle{
            color: #ff6600;

            font-weight: bolder;
        }

.table td{
    border:0px !important;
         }
        @media (max-width: 575.98px) {
            .ykfs{
                font-size:74% !important;
            }

        }

    </style>


</head>
<body>
<div class="" style="background:#f1efef;">

    {{--Top bar--}}
    @include('topbar')

    {{--Top bar--}}

    {{--Menu--}}
    @include('menu')
    {{--Menu--}}


    <!--  slider -->
    @include('mainslide')

    <!--  slider -->
    @section('content')
        <div class="row mt-5 mb-5 ml-0 mr-0 ml-sm-3 mr-sm-3 mr-lg-5 ml-lg-5 bg-white shadow-sm rounded">

            <div class="row w-100 mt-5 mb-3">
                {{--title--}}
                <div class='col-7' style="">
                    <h2 class="" style="position:absolute;right:0;font-weight: bolder;"><span
                                class="ykfs">{{trans('greeting.news')}}</span></h2>
                </div>
                {{--title--}}
                {{--see all buttom--}}
                <div class='col-5'>

                    <a style='position:relative;right:0;font-size: .875rem;' href="{{url('/'.$lang_path.'/latest')}}"

                       class="btn btn-small hvr-underline-from-center btn-danger smallbuttom">{{trans('greeting.see_all')}}
                        <span class="fa fa-chevron-right"></span> </a>


                </div>
                {{--see all buttom--}}


            </div>


            <br>
            <div class="col-12 mt-1">&nbsp;</div>

            @foreach($latest_new as $ln)

                <div class="col-12 col-md-6 col-lg-4 mb-3 bg-white">


                        <div class="card">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="" style="width:150px;height:150px;" src="{{asset('backend/images/newlist/'.$ln->photo)}}" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"> {{$ln->name}}</h4>
                                    <br>
                                    <p class="card-text">{{str_limit($ln->description,'52')}}
                                    </p> </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">
                                    {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$ln->uploat_at)->format('Y')}}
                                    &nbsp;&nbsp; {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$ln->uploat_at)->format('F')}}
                                    &nbsp;&nbsp;{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$ln->uploat_at)->format('j')}}</small>
                            </div>
                        </div>
                </div>



            @endforeach


            <!--news bar and category bar-->
        </div>
    @show



    @include('footer')


    <script src="{{asset('js/jquery_002.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-1.js')}}"></script>
    <script src="{{asset('js/jquery_012.js')}}"></script>
    <script src="{{asset('js/cycle.js')}}"></script>
    <script src="{{asset('js/jquery_006.js')}}"></script>
    <script src="{{asset('js/jquery_003.js')}}"></script>
    <script src="{{asset('js/chosen.js')}}"></script>
    <script src="{{asset('js/jquery_005.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery_004.js')}}"></script>
    <script src="{{asset('js/jquery_008.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/jquery_010.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery_011.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery_007.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery_009.js')}}"></script>
    <script src="{{asset('js/js.js')}}"></script>
    <script src="{{asset('js/bootstrap-tagsinput.min.js')}}"></script>


    <script src="{{asset('js/carat.js')}}"></script><!--this is all slider js-->
    <script src="{{asset('js/jquery.popform.js')}}"></script>    <!--this is for popup javascript-->


    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/converio/js/scripts.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/converio/js/jquery.hoverIntent.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/converio/js/header.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>

    <script>

        $(document).ready(function () {
            $('.tohide').click(function (e) {

                $('.navbar-collapse.in').collapse('hide');

            });

            $('#myModal').modal("show");
            $('#close').click(function () {
                $('#myModal').modal("hide");


            });
            $(".main-slide").owlCarousel({
                items: 1,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: false,
                nav: true,
                navText: ["<div class='prev'>&#10094;</div>", "<div class='next'>&#10095;</div>"],


                // "singleItem:true" is a shortcut for:
                // items : 1,
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : false

            });
            $(".con-slide").owlCarousel({
                loop: true,
                margin: 10,

                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                        nav: false,
                        nav: true,
                        navText: ["<div class='yk-nav shadow prev'>&#10094;</div>", "<div class='yk-nav shadow next'>&#10095;</div>"],


                    },
                    600: {
                        items: 2,
                        nav: false,
                        nav: true,
                        navText: ["<div class='yk-nav shadow prev'>&#10094;</div>", "<div class='yk-nav shadow next'>&#10095;</div>"],

                    },
                    800: {
                        items: 3,
                        nav: false,
                        nav: true,
                        navText: ["<div class='yk-nav shadow prev'>&#10094;</div>", "<div class='yk-nav shadow next'>&#10095;</div>"],

                    },
                    1000: {
                        items: 5,
                        autoplay: true,
                        autoplayTimeout: 5000,
                        nav: true,
                        navText: ["<div class='yk-nav shadow prev'>&#10094;</div>", "<div class='yk-nav shadow next'>&#10095;</div>"],
                        loop: true
                    }
                }


                // "singleItem:true" is a shortcut for:
                // items : 1,
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : false

            });
            $(".cheap-slide").owlCarousel({
                loop: true,
                margin: 10,

                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                        nav: true,
                        navText: ["<div class='yk-nav shadow prev'>&#10094;</div>", "<div class='yk-nav shadow next'>&#10095;</div>"],


                    },
                    600: {
                        items: 2,
                        nav: false,
                        nav: true,
                        navText: ["<div class='yk-nav shadow prev'>&#10094;</div>", "<div class='yk-nav shadow next'>&#10095;</div>"],

                    },
                    800: {
                        items: 3,
                        nav: false,
                        nav: true,
                        navText: ["<div class='yk-nav shadow prev'>&#10094;</div>", "<div class='yk-nav shadow next'>&#10095;</div>"],

                    },
                    1000: {
                        items: 5,
                        autoplay: true,
                        autoplayTimeout: 5000,
                        nav: true,
                        navText: ["<div class='yk-nav shadow prev'>&#10094;</div>", "<div class='yk-nav shadow next'>&#10095;</div>"],
                        loop: true
                    }
                }


                // "singleItem:true" is a shortcut for:
                // items : 1,
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : false

            });
            $(".latest-slide").owlCarousel({
                loop: true,
                margin: 10,

                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                        nav: false,
                        nav: true,
                        navText: ["<div class='yk-nav shadow prev'>&#10094;</div>", "<div class='yk-nav shadow next'>&#10095;</div>"],


                    },
                    600: {
                        items: 2,
                        nav: false,
                        nav: true,
                        navText: ["<div class='yk-nav shadow prev'>&#10094;</div>", "<div class='yk-nav shadow next'>&#10095;</div>"],

                    },
                    800: {
                        items: 3,
                        nav: false,
                        nav: true,
                        navText: ["<div class='yk-nav shadow prev'>&#10094;</div>", "<div class='yk-nav shadow next'>&#10095;</div>"],

                    },
                    1000: {
                        items: 5,
                        autoplay: true,
                        autoplayTimeout: 5000,
                        nav: true,
                        navText: ["<div class='yk-nav shadow prev'>&#10094;</div>", "<div class='yk-nav shadow next'>&#10095;</div>"],
                        loop: true
                    }
                }


                // "singleItem:true" is a shortcut for:
                // items : 1,
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : false

            });
        })
    </script><!--model alert for subscriber-->
</div>


</body>
</html>