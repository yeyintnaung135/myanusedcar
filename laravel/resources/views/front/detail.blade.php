@extends('masterfront')

@section('content')
    <!-- /.infobar -->
    <!--image slider-->
    <?php
    if (preg_match('/mm/', \Request::PATH())) {
        $lang_path = 'mm';
    } else {
        $lang_path = 'en';
    }
    ?>
    @foreach($each as $car)
    @endforeach
    <div class="container-fluid" style="background:#f1efef;">


        <div class="row mt-3 mb-5 ml-0 mr-0 ml-sm-3 mr-sm-3 mr-lg-5 ml-lg-5 bg-white shadow-sm rounded">
            {{--button and title--}}
            <div class="row w-100 mt-5">
                {{--title--}}

                <div class='col-12 col-sm-8' style="">
                    <h2 class="text-left text-sm-center" style="font-weight: bolder;"><span
                                class=""><span style="color:#f60;">{{str_limit($car->brand,20)}} {{str_limit($car->model,20)}}</span>  {{'( '}}{{str_limit($car->price,9)}}{{trans('greeting.lakh')}}{{' )'}}</span></h2>


                </div>
                {{--title--}}
                {{--see all buttom--}}
                <div class='col-12 col-sm-4'>
                    <div id="fb-root"></div>
                    <script>
                        (function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=909441502519108";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <script>

                        function shareme(lk) {

                            FB.ui({
                                method: 'feed',
                                display: 'popup',
                                link: window.location.href,
                                name: ttl + '  ' + mdl + '  (သိန္း' + pri + ')',
                                caption: 'www.myanusedcar.rf.gd',
                                picture: lk,
                                description: dsp,

                            }, function (response) {
                                if (response['post_id'] !== null) {
                                    window.alert('This car is successfully share to your facebook');
                                }
                            });
                        }
                    </script>

                    <a style='position:relative;right:0;background-color:#4267b2 !important;border:#4267b2 !important;font-size: .875rem;' onclick="shareme(lk='<?php echo 'http://www.myanusedcar.rf.gd/backend/images/carlist/' . $car->photo2;?>',mdl='<?php echo $car->model;?>',pri='<?php echo $car->price;?>',ttl='<?php echo $car->brand;?>',dsp='<?php  $str = $car->detail;$str = str_replace(array("\r", "\n"), "", $str);$nobstr = nl2br($str);echo str_limit($nobstr, 80);?>');"

                       class="btn fb-share btn-small hvr-underline-from-center btn-danger smallbuttom">Share On Facebook
                        .
                        <span class="fas fa-share"></span> </a>


                </div>
                {{--see all buttom--}}


            </div>
            {{--button and title--}}

            <div class="col-12 col-md-6 mt-5 mb-3">


                <div id="gallery-wrapper">
                    <div>
                        <div>
                            <div class="gallery">
                                <div class="slide">
                                    <div class="picture-wrapper">
                                        <img src="{{asset('backend/images/carlist')}}/{{$car->photo2}}"
                                             alt="#">
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="picture-wrapper">
                                        <img src="{{asset('backend/images/carlist')}}/{{$car->photo1}}"
                                             alt="#">
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="picture-wrapper">
                                        <img src="{{asset('backend/images/carlist')}}/{{$car->photo3}}"
                                             alt="#">
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="picture-wrapper">
                                        <img src="{{asset('backend/images/carlist')}}/{{$car->photo4}}"
                                             alt="#">
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="picture-wrapper">
                                        <img src="{{asset('backend/images/carlist')}}/{{$car->photo5}}"
                                             alt="#">
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="picture-wrapper">
                                        <img src="{{asset('backend/images/carlist')}}/{{$car->photo6}}"
                                             alt="#">
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="picture-wrapper">
                                        <img src="{{asset('backend/images/carlist')}}/{{$car->photo7}}"
                                             alt="#">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div><!-- /.gallery -->

                    <!--pagination div-->
                    <div id="gallery-pager" class="white block-shadow">


                        <div class="pager">
                            <div class="">
                                <!--for thumb pagnitaion can not delete it-->
                            </div>
                        </div>


                    </div><!-- /#gallery-pager -->


                    <div class="gallery-thumbnails">
                        <div class="thumbnail-0">
                            <img src="{{asset('backend/images/carlist')}}/{{$car->photo2}}"
                                 alt="#">
                        </div>
                        <div class="thumbnail-1">
                            <img src="{{asset('backend/images/carlist')}}/{{$car->photo1}}"
                                 alt="#">
                        </div>
                        <div class="thumbnail-2">
                            <img src="{{asset('backend/images/carlist')}}/{{$car->photo3}}"
                                 alt="#">
                        </div>
                        <div class="thumbnail-3">
                            <img src="{{asset('backend/images/carlist')}}/{{$car->photo4}}"
                                 alt="#">
                        </div>
                        <div class="thumbnail-4">
                            <img src="{{asset('backend/images/carlist')}}/{{$car->photo5}}"
                                 alt="#">
                        </div>

                        <div class="thumbnail-5">
                            <img src="{{asset('backend/images/carlist')}}/{{$car->photo6}}"
                                 alt="#">
                        </div>
                        <div class="thumbnail-6">
                            <img src="{{asset('backend/images/carlist')}}/{{$car->photo7}}"
                                 alt="#">
                        </div>


                    </div><!-- /.gallery-thumbnails -->

                </div> <!-- /#gallery-wrapper -->


            </div>
            <!--contact info-->
            <div class="col-12 col-md-6  mt-5 mb-3">
                <div class="row">
                    <div class="heading">
                        <h3 class='yk_sub_title'><i class="fas fa-info-circle yk-color-detail"></i>&nbsp;
                            {{trans('greeting.contactinfo')}}</h3>
                    </div><!-- /.heading -->

                    <div class="col-sm-12 col-md-12 overview mt-3">
                        <table class="table" style="">
                            <tbody style="text-align:left;">
                            <tr>
                                <td class="property yk_sub_title_two"><span
                                            class="fas fa-user"></span>&nbsp;&nbsp;{{trans('greeting.cntname')}}</td>
                                <td class="value yk_sub_title_two">{{$owner->name}}</td>
                            </tr>
                            <tr>
                                <td class="property yk_sub_title_two"><span
                                            class="fas fa-mobile"></span>&nbsp;&nbsp;{{trans('greeting.cntphone')}}</td>
                                <td class="value yk_sub_title_two">{{$owner->phone}}</td>
                            </tr>

                            <tr>
                                <td class="property yk_sub_title_two"><span
                                            class="fas fa-envelope "></span>&nbsp;&nbsp;{{trans('greeting.cntmail')}}
                                </td>
                                <td class="value yk_sub_title_two">{{$owner->email}}</td>
                            </tr>

                            <tr>
                                <td class="property yk_sub_title_two"><span
                                            class="fas fa-location-arrow"></span>&nbsp;{{trans('greeting.state')}}</td>

                                <td class="value yk_sub_title_two">{{$owner->town}}</td>
                            </tr>

                            <tr>
                                <td class="property yk_sub_title_two"><span
                                            class="fa fa-map-marker"></span>&nbsp;{{trans('greeting.cntadd')}}</td>

                                <td class="value yk_sub_title_two">{{$owner->address}}</td>
                            </tr>


                            </tbody>
                        </table><!-- /.table -->
                    </div><!-- /.col-md-7 -->
                    <div class="heading">
                        <h3 class='yk_sub_title'><i class="fas fa-info-circle yk-color-detail"></i>&nbsp;
                            {{trans('greeting.detail')}}</h3>
                    </div><!-- /.heading -->
                    <div class="col-sm-12 col-md-12 overview mt-3">
                        <div class='yk_sub_title yk_sub_title_two yk-detail' style="text-indent: 50px;">
                            {{$car->detail}}
                        </div>
                    </div><!-- /.col-md-7 -->

                </div><!-- /.row -->
            </div>
        </div>


        <div class="row mt-3 mb-5 ml-0 mr-0 ml-sm-3 mr-sm-3 mr-lg-5 ml-lg-5 bg-white shadow-sm rounded">

            <div class="col-12 col-md-6 mt-5 mb-3">
                <h3 class='yk_sub_title' style="text-align:left;"><i class="fas fa-info-circle yk-color-detail"></i>&nbsp;
                    {{trans('greeting.overview')}}</h3>


                <div class="row overview mt-3 ml-3">
                    <div class="col-6">
                        <div class="row property yk_sub_title_two">
                            <div class="col-12 p-0 mb-1">
                                                    <span class="fa fa-car">
                                                    </span>&nbsp;
                                {{trans('greeting.brand')}}
                            </div>


                            <div class="col-12">
                                &nbsp;&nbsp;
                                {{str_limit($car->brand,35)}}
                            </div>
                        </div>
                        <br>
                        <div class="row property yk_sub_title_two">
                            <div class="col-12 p-0 mb-1">
                                                    <span class="fa fa-check-circle">
                                                    </span>&nbsp;Model
                            </div>

                            <div class="col-12">
                                &nbsp;&nbsp;
                                {{str_limit($car->model,35)}}
                            </div>
                        </div>
                        <br>

                        <div class="row property yk_sub_title_two">
                            <div class="col-12 p-0 mb-1">
                                                    <span class="fa fa-map-marker">
                                                    </span>&nbsp;{{trans('greeting.linc')}}
                            </div>

                            <div class="col-12">
                                &nbsp;&nbsp;{{str_limit($car->license,35)}}
                            </div>
                        </div>
                        <br>
                        <div class="row property yk_sub_title_two">
                            <div class="col-12 p-0 mb-1">
                                <span class="fas fa-oil-can">
                                                    </span>&nbsp;{{trans('greeting.fuel')}}
                            </div>

                            <div class="col-12">
                                &nbsp;&nbsp;{{$car->fuel}}
                            </div>
                        </div>
                        <br>
                        <div class="row property yk_sub_title_two">
                            <div class="col-12 p-0 mb-1">
                                                    <span class="fas fa-tachometer-alt">
                                                    </span>&nbsp;{{trans('greeting.transmittion')}}
                            </div>


                            <div class="col-12">
                                &nbsp;&nbsp;{{$car->transmittion}}
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                        <div class="row property yk_sub_title_two">
                            <div class="col-12 p-0 mb-1">
                                                    <span class="fa fa-cog">
                                                    </span>&nbsp;Engine
                            </div>
                            <div class="col-12">
                                &nbsp;&nbsp;{{$car->engine}}
                            </div>
                        </div>
                        <br>
                        <div class="row property yk_sub_title_two">
                            <div class="col-12 p-0 mb-1">
                                                    <span class="fa fa-calendar">
                                                    </span>&nbsp;{{trans('greeting.year')}}
                            </div>
                            <div class="col-12">
                                &nbsp;&nbsp;{{$car->year}}
                            </div>
                        </div>
                        <br>
                        <div class="row property yk_sub_title_two">
                            <div class="col-12 p-0 mb-1">
                                <span class="fas fa-dollar-sign"></span>&nbsp;{{trans('greeting.price')}}
                            </div>

                            <div class="col-12">
                                &nbsp;&nbsp;{{$car->price}}</div>
                        </div>
                        <br>
                        <div class="row property yk_sub_title_two">
                            <div class="col-12 p-0 mb-1">
                                <span class="fas fa-tachometer-alt"></span>&nbsp;Kilo
                            </div>
                            <div class="col-12">
                                &nbsp;&nbsp;{{$car->km}}
                            </div>
                        </div>
                        <br>


                        <div class="row property yk_sub_title_two">
                            <div class="col-12 p-0 mb-1">
                                                    <span class="fas fa-car-side">
                                                    </span>&nbsp;{{trans('greeting.body')}}
                            </div>

                            <div class="col-12">
                                &nbsp;&nbsp;{{$car->body_type}}</div>
                        </div>
                        <br>
                    </div>
                    <div class="col-6">


                        <div class="row property yk_sub_title_two">
                            <div class="col-12 p-0 mb-1">
                                                    <span class="fas fa-car-side">
                                                    </span>&nbsp;{{trans('greeting.doors')}}
                            </div>
                            <div class="col-12">
                                &nbsp;&nbsp;{{$car->doors}}
                            </div>
                        </div>
                        <br>
                        <div class="row property yk_sub_title_two">
                            <div class="col-12 p-0 mb-1">
                                <span class="fas fa-palette"></span>&nbsp;{{trans('greeting.excolor')}}
                            </div>

                            <div class="col-12">
                                &nbsp;&nbsp;{{$car->exterior_color}}</div>
                        </div>
                        <br>
                        <div class="row property yk_sub_title_two">
                            <div class="col-12 p-0 mb-1">
                                <span class="fas fa-palette"></span>&nbsp;{{trans('greeting.incolor')}}
                            </div>

                            <div class="col-12">
                                &nbsp;&nbsp;{{$car->interior_color}}</div>
                        </div>
                        <br>

                    </div>
                </div>


            </div><!-- /.col-md-7 -->
            <div class="col-12 col-md-6 mt-5 mb-3">
                <h3 class='yk_sub_title' style="text-align:left;"><i class="fas fa-info-circle yk-color-detail"></i>&nbsp;
                    {{trans('greeting.appliances')}}</h3>


                <div class="row overview ml-0">
                    <?php
                    //firstly we need to change appliances string from car object as a array cut by ,because we accept tags as astring
                    $appliance = explode(',', $car->appliances);

                    ?>
                    @foreach($appliance as $app)


                        @if($app=='Tag Input Control')
                        @else

                    <div class="col-4 mt-3">

                        <div class="row property yk_sub_title_two">
                            <div class="col-12 p-0 mb-1 d-inline">
                                <span class="fas fa-dot-circle float-left"></span>
                                <p style="text-indent: 11px;">{{$app}}</p>
                            </div>

                        </div>

                    </div>
                            @endif


                        @endforeach


                </div>


            </div><!-- /.col-md-7 -->
        </div>


    </div><!-- /.section -->

    @parent


    </div>


@endsection


