<footer class="container-fluid black" style="width: 100%;color: white; text-align: center;">
    <div class="container-fluid pt-5 black" style="border-bottom:1px solid #584d4dd1;">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">

                @foreach($hottest as $htt)
                    <div class="card black" style="border:0px !important;">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                                <img class="" style="width:150px;height:150px;" src="{{asset('/backend/images/carlist/'.$htt->photo2)}}" alt="Card image cap">
                            </div>
                            <div class="card-body " style="padding-top:0px !important;">
                                <h2 class="card-title">Top Popular Car</h2>

                                <h4 class="card-title">{{str_limit($htt->brand,14)}}</h4>
                                <br>
                                <p class="card-text">{{str_limit($htt->detail,90)}}
                                </p>
                                <a href="{{url('/'.$lang_path.'/detail/'.$htt->id)}}"
                                   class="btn btn-sm hvr-underline-from-center btn-danger smallbuttom "
                                   style="border-radius: .25rem !important;width:100% !important;font-weight:bolder;background:#f60;">{{trans('greeting.readmore')}}&nbsp;&nbsp;.. <span
                                            class="fa fa-chevron-right"></span></a>

                            </div>
                        </div>

                    </div>



                @endforeach
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-3 mt-sm-0">
                <div class="block">
                    <div class="title mb-3">
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
                    <div class="row no-gutters mt-2 d-flex justify-content-center">
                        <a href="#" class="fab fa-facebook mr-3" style="font-size:29px;color:white;"></a>
                        <a href="#" class="fab fa-twitter mr-3" style="font-size:29px;color:white;"></a>
                        <a href="#" class="fas fa-envelope mr-3" style="font-size:29px;color:white;"></a>
                        <a href="#" class="fab fa-instagram" style="font-size:29px;color:white;"></a>
                    </div>

                </div><!-- /.block -->
            </div><!-- /.col-md-4 -->

            <div class="col-12 col-md-12 mt-3 mt-sm-0 mb-5 col-lg-4">
                <div class="title mb-3">
                    <h2 style="font-size:23px !important;">သတိၿပဳခ်က္ </h2>
                </div><!-- /.title -->
                <h2 style="font-size:15px !important;"> myanusedcar website သည္ကားေရာင္းသူႏွင့္ကား၀ယ္သူမ်ားကိုေတြ့ဆံုဆက္သြယ္မူရရွိေစရန္သက္သက္သာၿဖစ္ပါသည္။</h2>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <br>
    <div class="container-fluid black ">
        <div class="container ">
            <div class="row  ">
                <div class="col-md-12 pb-3 clearfix">
                    <div class="copyright">
                        © 2016-2017
                        Myanusedcar
                        <span class="separator">/</span>
                        All rights reserved
                    </div><!-- /.pull-left -->

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</footer><!-- /#footer -->
