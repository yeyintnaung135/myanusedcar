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

    <div class="container-fluid" style="background:#f1efef;">

        {{--hot cars section--}}
        <div class="row mt-3 mb-5 ml-0 mr-0 ml-sm-3 mr-sm-3 mr-lg-5 ml-lg-5 bg-white shadow-sm rounded">
            {{--button and title--}}
            <div class="row w-100 mt-5 mb-3">
                {{--title--}}
                <div class='col-7' style="">
                    <h2 class="" style="position:absolute;right:0;font-weight: bolder;"><span
                                class="ykfs">{{trans('greeting.hot')}}</span></h2>
                </div>
                {{--title--}}
                {{--see all buttom--}}
                <div class='col-5'>

                    <a style='position:relative;right:0;font-size: .875rem;' href="{{url('/'.$lang_path.'/popular')}}"

                       class="btn btn-small hvr-underline-from-center btn-danger smallbuttom">{{trans('greeting.see_all')}}
                        .
                        <span class="fa fa-chevron-right"></span> </a>


                </div>
                {{--see all buttom--}}


            </div>
            {{--button and title--}}

              {{--products slider--}}
            <div class="col-12 pl-3 mb-3 bg-white">


                <div class="owl-carousel  con-slide">
                    @foreach($hot_cars as $hot)
                        <div class="item card">
                            <img class="card-img-top" src="{{asset('backend/images/carlist')}}/{{$hot->photo2}}"
                                 alt="Card image cap" style="height:193px;">
                            <div class="card-body">
                                <h5 class="card-title mb-2 bolder"
                                    style="color:#ff6600;font-size: 19px;font-weight: 400;"><i class="fa fa-car" aria-hidden="true"></i> {{str_limit($hot->brand,13)}}
                                </h5>
                                <h5 class="mb-3" style="font-size: 18px !important;font-weight:400 !important;">{{$hot->price}}
                                    &nbsp;{{trans('greeting.lakh')}}</h5>
                                <a href="{{route('detail',['lang'=>$lang_path,'id'=>$hot->id])}}"
                                   class="btn btn-sm hvr-underline-from-center btn-danger smallbuttom "
                                   style="border-radius: .25rem !important;width:100% !important;font-weight:bolder;background:#f60;">{{trans('greeting.readmore')}}&nbsp;&nbsp;.. <span
                                            class="fa fa-chevron-right"></span></a>



                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
              {{--products slider--}}

        </div>
        {{--hot cars section--}}


        {{--cheap cars section--}}
        <div class="row mt-5 mb-5 ml-0 mr-0 ml-sm-3 mr-sm-3 mr-lg-5 ml-lg-5 bg-white shadow-sm rounded">
            {{--button and title--}}
            <div class="row w-100 mt-5 mb-3">
                {{--title--}}
                <div class='col-7' style="">
                    <h2 class="" style="position:absolute;right:0;font-weight: bolder;"><span
                                class="ykfs">{{trans('greeting.cheap')}}</span></h2>
                </div>
                {{--title--}}
                {{--see all buttom--}}
                <div class='col-5'>

                    <a style='position:relative;right:0;font-size: .875rem;' href="{{url('/'.$lang_path.'/best_price')}}"

                       class="btn btn-small hvr-underline-from-center btn-danger smallbuttom">{{trans('greeting.see_all')}}
                        <span class="fa fa-chevron-right"></span> </a>


                </div>
                {{--see all buttom--}}


            </div>
            {{--button and title--}}

            {{--products slider--}}
            <div class="col-12 pl-3 mb-3 bg-white">


                <div class="owl-carousel cheap-slide">
                    @foreach($cheap_cars as $cheap)
                        <div class="item card">
                            <img class="card-img-top" src="{{asset('backend/images/carlist')}}/{{$cheap->photo2}}"
                                 alt="Card image cap" style="height:193px;">
                            <div class="card-body">
                                <h5 class="card-title mb-2 bolder"
                                    style="color:#ff6600;font-size: 19px;font-weight: 400;"><i class="fa fa-car" aria-hidden="true"></i> {{str_limit($cheap->brand,13)}}
                                </h5>
                                <h5 class=" mb-3" style="font-size: 18px !important;font-weight:400 !important;">{{$cheap->price}}
                                    &nbsp;{{trans('greeting.lakh')}}</h5>
                                <a href="{{route('detail',['lang'=>$lang_path,'id'=>$cheap->id])}}"
                                   class="btn btn-sm hvr-underline-from-center btn-danger smallbuttom "
                                   style="border-radius: .25rem !important;width:100% !important;font-weight:bolder;background:#f60;">{{trans('greeting.readmore')}}&nbsp;&nbsp;.. <span
                                            class="fa fa-chevron-right"></span></a>



                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            {{--products slider--}}

        </div>
        {{--cheap cars section--}}


        {{--latest cars section--}}
        <div class="row mt-5 mb-5 ml-0 mr-0 ml-sm-3 mr-sm-3 mr-lg-5 ml-lg-5 bg-white shadow-sm rounded">
            {{--button and title--}}
            <div class="row w-100 mt-5 mb-3">
                {{--title--}}
                <div class='col-7' style="">
                    <h2 class="" style="position:absolute;right:0;font-weight: bolder;"><span class="ykfs"
                                >{{trans('greeting.new')}}</span></h2>
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
            {{--button and title--}}

            {{--products slider--}}
            <div class="col-12 pl-3 mb-3 bg-white">


                <div class="owl-carousel latest-slide">
                    @foreach($cars as $car)
                        <div class="item card">
                            <img class="card-img-top" src="{{asset('backend/images/carlist')}}/{{$car->photo2}}"
                                 alt="Card image cap" style="height:193px;">
                            <div class="card-body">
                                <h5 class="card-title mb-2 bolder"
                                    style="color:#ff6600;font-size: 19px;font-weight: 400;"><i class="fa fa-car"
                                                                                               aria-hidden="true"></i>  {{str_limit($car->brand,13)}}
                                </h5>
                                <h5 class=" mb-3" style="font-size: 18px !important;font-weight:400 !important;">{{$car->price}}
                                    &nbsp;{{trans('greeting.lakh')}}</h5>
                                <a href="{{route('detail',['lang'=>$lang_path,'id'=>$car->id])}}"
                                   class="btn btn-sm hvr-underline-from-center btn-danger smallbuttom "
                                   style="border-radius: .25rem !important;width:100% !important;font-weight:bolder;background:#f60;"> {{trans('greeting.readmore')}}&nbsp;&nbsp;.. <span
                                            class="fa fa-chevron-right"></span></a>



                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            {{--products slider--}}

        </div>
        {{--latest cars section--}}
        @parent




    </div>


@endsection


