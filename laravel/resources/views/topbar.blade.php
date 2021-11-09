<div class="topbar black">
    <div class="row no-gutters pt-3 pb-3  pl-sm-2 pr-sm-2 pl-md-3 pr-md-3 pl-lg-5 pr-lg-5">
        <div class=" languages col-12  d-flex justify-content-end d-block d-md-none ">
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

        <div class="col-4 col-md-4 col-lg-3 cstlogo d-flex justify-content-center">
            <img src="{{asset('img/myanusedcarslogo.png')}}">
        </div>
        <div class="col-8 col-md-4 col-lg-6">
            <div class="logottl text-md-center" style="letter-spacing:9px;">MyanusedCar</div>
            <div class="logottl text-md-center" style="font-size:19px !important;">(ကားရောင်းဝယ်website)
                </div>
        </div>

        <div class="col-12 col-md-4 col-lg-3">
            <div class=" languages col-12 d-none d-md-flex justify-content-center ">
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


            @if(!empty(Auth::user()))
                <div class="col-12 p-0 d-none d-md-flex justify-content-center " style="margin-top :40px;">
                    <div class="dropdown">
                        <button class="btn btn-small mr-2 btn-danger dropdown-toggle smallbuttom tohide"
                                type="button"
                                data-toggle="dropdown"
                                style="float:left;">

                            <i class="fa fa-user"></i>&nbsp;

                            {{trans('greeting.toyouracc')}}&nbsp;

                        </button>
                        <ul class="dropdown-menu" style="margin-right :11px;">
                            <li>
                                <a href="{{asset('/'.$lang_path.'/user/'.Auth::user()->id.'/addcar_post')}}"><i
                                            class="fa fa-plus"></i>&nbsp;&nbsp;Add Your Car</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{asset('/'.$lang_path.'/user/'.Auth::user()->id.'/carpostlist')}}"><i
                                            class="fa fa-cab"></i>&nbsp;&nbsp;Your Cars</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{url('/'.$lang_path.'/user/'.Auth::user()->id.'/profile')}}"><i
                                            class="fa fa-user"></i>&nbsp;&nbsp;Your Profile</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{url('/logout')}}"><i
                                            class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a>
                            </li>

                            <li class=""></li>
                        </ul>
                    </div>

                    <a href="{{url('/'.$lang_path.'/user/'.Auth::user()->id.'/addcar_post')}}"
                       style="float:left;padding-left:0px !important;padding-right:0px !important;"
                       class="btn btn-small hvr-underline-from-center btn-danger smallbuttom ">
                        &nbsp;
                        <i class="fa fa-car"></i>

                        {{trans('greeting.addcarpost')}}
                        <i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;

                    </a>

                </div>



            @else
                <div class="col-12 p-0 d-none d-md-flex justify-content-center" style="margin-top :40px;">
                    <a href="{{url('/'.$lang_path.'/user/register')}}"
                       class="btn btn-sm hvr-underline-from-center mr-2 btn-danger smallbuttom ">
                        <span class="fa fa-registered"></span>
                        REGISTER <span class="fa fa-chevron-right"></span>

                    </a>
                    <a href="{{url('/'.$lang_path.'/user/login')}}"

                       class="btn btn-sm hvr-underline-from-center btn-danger smallbuttom ">
                        <span class="fa fa-power-off"></span>

                        LOGIN <span class="fa fa-chevron-right"></span>

                    </a>
                </div>
            @endif


        </div>
    </div>
</div>