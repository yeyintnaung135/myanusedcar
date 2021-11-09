<header class="h1 header-opacity-enabled sticky-enabled sticky-no-topbar menu-animation-enabled hover-delay-enabled sticky-collapse sticky-opacity-enabled with-search-box with-cart-box lr-mi-with-widget-visible"
        data-sticky-trigger-position="400" data-menu-slidedown-duration="500" data-menu-slideup-duration="500"
        data-menu-fadein-duration="300" data-menu-fadeout-duration="400">
    <section class="main-header">
        <div class="d-lg-flex justify-content-lg-center">
            <div class="nav-container">
                @if(!empty(Auth::user()))
                    <div class="col-8 pt-2 pl-4 d-flex d-md-none justify-content-start float-left" style="">
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
                    <div class="col-8 pt-2 pl-4 d-flex d-md-none justify-content-start float-left" style="">
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
                <div class="mobile-group">

                    <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse"
                            data-target="nav.mainmenu > ul">Menu
                    </button>
                </div>

                <nav class="nav-collapse mainmenu menu-container">
                    <ul id="menu-main" class="menu">


                        <li id="menu-item-2898"
                            class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2898 mi-depth-0 mi-without-description dropdownmenu dropdownmenu-mega mega-default columns4">
                            <a href="{{url('/'.$lang_path.'/index')}}" class="submenu-trigger"><span
                                        class="mi-title-wrapper"><span
                                            class="mi-title">{{trans('greeting.menu1')}}</span></span></a>
                        </li>


                        <li id="menu-item-2898"
                            class="d-none d-lg-block menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2898 mi-depth-0 mi-without-description dropdownmenu dropdownmenu-mega mega-default columns4">
                            <a href="javascript:void(0);" class="submenu-trigger"><span
                                        class="mi-title-wrapper"><span class="mi-title">Brands</span></span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-850"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-850 mi-depth-1 mi-without-description">

                                    <ul class="sub-menu">
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Aston Martin')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Aston Martin</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Audi')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Audi</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/BMW')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">BMW</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/BAIC')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">BAIC</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Bentley')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Bentley</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Brilliance')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Brilliance</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Cadillac')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Cadillac</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Chevrolet')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Chevrolet</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Chrysler')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Chrysler</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Daihatsu')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Daihatsu</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Dodge')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Dodge</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/FIAT')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">FIAT</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Ferrari')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Ferrari</span></span></a>
                                        </li>


                                    </ul>
                                </li>
                                <li id="menu-item-850"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-850 mi-depth-1 mi-without-description">

                                    <ul class="sub-menu">
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Foton')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Foton</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Ford')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Ford</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/GMC')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">GMC</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Geely')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Geely</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/HUMMER')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">HUMMER</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Hino')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Hino</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Honda')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Honda</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Hyundai')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Hyundai</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Isuzu')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Isuzu</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Iveco')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Iveco</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Jeep')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Jeep</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Kia')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Kia</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Lamborghini')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Lamborghini</span></span></a>
                                        </li>


                                    </ul>
                                </li>
                                <li id="menu-item-850"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-850 mi-depth-1 mi-without-description">

                                    <ul class="sub-menu">
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Lexus')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Lexus</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Lifan')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Lifan</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Lincoln')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Lincoln</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Mitsubishi')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Mitsubishi</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/MG')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">MG</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/MINI')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">MINI</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Mitsuoka')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Mitsuoka</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Maserati')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Maserati</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Mazda')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Mazda</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Mercedes-Benze')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Mercedes-Benze</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Nissan')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Nissan</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Peugeot')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Peugeot</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Pontiac')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Pontiac</span></span></a>
                                        </li>


                                    </ul>
                                </li>
                                <li id="menu-item-850"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-850 mi-depth-1 mi-without-description">

                                    <ul class="sub-menu">
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Porsche')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Porsche</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Proton')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Proton</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Land Rover')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Land Rover</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Renault')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Renault</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Scania')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Scania</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Smart')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Smart</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Subaru')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Subaru</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Suzuki')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Suzuki</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Tesla')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Tesla</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Toyota')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Toyota</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Vauxhall')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Vauxhall</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Volkswagen')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Volkswagen</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Volvo')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Volvo</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Yutong')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Yutong</span></span></a>
                                        </li>


                                    </ul>
                                </li>
                            </ul>
                        </li>

                        {{--for mobile--}}

                        <li id="menu-item-2898"
                            class="d-block d-lg-none menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2898 mi-depth-0 mi-without-description dropdownmenu dropdownmenu-mega mega-default columns4">
                            <a href="javascript:void(0);" class="submenu-trigger"><span
                                        class="mi-title-wrapper"><span class="mi-title">Brands</span></span></a>
                            <ul class="sub-menu yk-scroll">

                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Aston Martin')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Aston Martin</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Audi')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Audi</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/BMW')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">BMW</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/BAIC')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">BAIC</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Bentley')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Bentley</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Brilliance')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Brilliance</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Cadillac')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Cadillac</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Chevrolet')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Chevrolet</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Chrysler')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Chrysler</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Daihatsu')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Daihatsu</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Dodge')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Dodge</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/FIAT')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">FIAT</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Ferrari')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Ferrari</span></span></a>
                                </li>


                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Foton')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Foton</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Ford')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Ford</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/GMC')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">GMC</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Geely')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Geely</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/HUMMER')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">HUMMER</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Hino')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Hino</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Honda')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Honda</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Hyundai')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Hyundai</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Isuzu')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Isuzu</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Iveco')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Iveco</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Jeep')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Jeep</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Kia')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Kia</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Lamborghini')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Lamborghini</span></span></a>
                                </li>


                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Lexus')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Lexus</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Lifan')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Lifan</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Lincoln')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Lincoln</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Mitsubishi')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Mitsubishi</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/MG')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">MG</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/MINI')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">MINI</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Mitsuoka')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Mitsuoka</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Maserati')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Maserati</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Mazda')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Mazda</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Mercedes-Benze')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Mercedes-Benze</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Nissan')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Nissan</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Peugeot')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Peugeot</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Pontiac')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Pontiac</span></span></a>
                                </li>


                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Porsche')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Porsche</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Proton')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Proton</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Land Rover')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Land Rover</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Renault')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Renault</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Scania')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Scania</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Smart')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Smart</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Subaru')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Subaru</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Suzuki')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Suzuki</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Tesla')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Tesla</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Toyota')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Toyota</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Vauxhall')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Vauxhall</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Volkswagen')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Volkswagen</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Volvo')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Volvo</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Yutong')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Yutong</span></span></a>
                                </li>


                            </ul>
                        </li>

                        {{--for mobile--}}


                        <li id="menu-item-2910"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2910 mi-depth-0 mi-without-description dropdownmenu dropdownmenu-default">
                            <a href="javascript:void();" class="submenu-trigger"><span
                                        class="mi-title-wrapper"><span class="mi-title">Car Types</span></span></a>
                            <ul class="sub-menu yk-scroll" style="">

                                @foreach($types as $type)
                                    <li id="menu-item-2310"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2310 mi-depth-1 mi-without-description">
                                        <a href="{{asset('/'.$lang_path.'/result_type/'.$type)}}"
                                           class="submenu-trigger"><span
                                                    class="mi-title-wrapper"><span
                                                        class="mi-title"> {{$type}}</span></span></a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>
                        <li id="menu-item-2910"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2910 mi-depth-0 mi-without-description dropdownmenu dropdownmenu-default">
                            <a href="javascript:void();" class="submenu-trigger"><span
                                        class="mi-title-wrapper"><span class="mi-title">Release Years</span></span></a>
                            <ul class="sub-menu yk-scroll" style="">

                                @foreach($year as $each_year)
                                    <li id="menu-item-2310"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2310 mi-depth-1 mi-without-description">
                                        <a href="{{asset($lang_path.'/result_year/'.$each_year)}}"
                                           class="submenu-trigger"><span
                                                    class="mi-title-wrapper"><span
                                                        class="mi-title"> {{$each_year}}</span></span></a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>

                        <li id="menu-item-2898"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2898 mi-depth-0 mi-without-description dropdownmenu dropdownmenu-mega mega-default columns4">
                            <a href="{{asset($lang_path.'/newlist')}}" class="submenu-trigger"><span
                                        class="mi-title-wrapper"><span
                                            class="mi-title">{{trans('greeting.menu5')}}</span></span></a>
                        </li>


                        <li id="menu-item-2898"
                            class="d-none d-lg-block menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2898 mi-depth-0 mi-without-description dropdownmenu dropdownmenu-mega mega-default columns4">
                            <a href="javascript:void(0);" class="submenu-trigger"><span
                                        class="mi-title-wrapper"><span
                                            class="mi-title">{{trans('greeting.showroommenu')}}</span></span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-850"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-850 mi-depth-1 mi-without-description">

                                    <ul class="sub-menu">
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Aston Martin')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Aston Martin</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Audi')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Audi</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/BMW')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">BMW</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/BAIC')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">BAIC</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Bentley')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Bentley</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Brilliance')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Brilliance</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Cadillac')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Cadillac</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Chevrolet')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Chevrolet</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Chrysler')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Chrysler</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Daihatsu')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Daihatsu</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Dodge')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Dodge</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/FIAT')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">FIAT</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Ferrari')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Ferrari</span></span></a>
                                        </li>


                                    </ul>
                                </li>
                                <li id="menu-item-850"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-850 mi-depth-1 mi-without-description">

                                    <ul class="sub-menu">
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Foton')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Foton</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Ford')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Ford</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/GMC')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">GMC</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Geely')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Geely</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/HUMMER')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">HUMMER</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Hino')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Hino</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Honda')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Honda</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Hyundai')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Hyundai</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Isuzu')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Isuzu</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Iveco')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Iveco</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Jeep')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Jeep</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Kia')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Kia</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Lamborghini')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Lamborghini</span></span></a>
                                        </li>


                                    </ul>
                                </li>
                                <li id="menu-item-850"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-850 mi-depth-1 mi-without-description">

                                    <ul class="sub-menu">
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Lexus')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Lexus</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Lifan')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Lifan</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Lincoln')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Lincoln</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Mitsubishi')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Mitsubishi</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/MG')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">MG</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/MINI')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">MINI</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Mitsuoka')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Mitsuoka</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Maserati')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Maserati</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Mazda')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Mazda</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Mercedes-Benze')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Mercedes-Benze</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Nissan')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Nissan</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Peugeot')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Peugeot</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Pontiac')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Pontiac</span></span></a>
                                        </li>


                                    </ul>
                                </li>
                                <li id="menu-item-850"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-850 mi-depth-1 mi-without-description">

                                    <ul class="sub-menu">
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Porsche')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Porsche</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Proton')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Proton</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Land Rover')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Land Rover</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Renault')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Renault</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Scania')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Scania</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Smart')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Smart</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Subaru')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Subaru</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Suzuki')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Suzuki</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Tesla')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Tesla</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Toyota')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Toyota</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Vauxhall')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Vauxhall</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Volkswagen')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Volkswagen</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Volvo')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Volvo</span></span></a>
                                        </li>
                                        <li id="menu-item-2381"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                            <a href="{{asset('/'.$lang_path.'/result_brand/Yutong')}}"
                                               class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                            class="mi-title">Yutong</span></span></a>
                                        </li>


                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-2898"
                            class="d-block d-lg-none menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2898 mi-depth-0 mi-without-description dropdownmenu dropdownmenu-mega mega-default columns4">
                            <a href="javascript:void(0);" class="submenu-trigger"><span
                                        class="mi-title-wrapper"><span
                                            class="mi-title">{{trans('greeting.showroommenu')}}</span></span></a>
                            <ul class="sub-menu yk-scroll">

                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Aston Martin')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Aston Martin</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Audi')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Audi</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/BMW')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">BMW</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/BAIC')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">BAIC</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Bentley')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Bentley</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Brilliance')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Brilliance</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Cadillac')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Cadillac</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Chevrolet')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Chevrolet</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Chrysler')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Chrysler</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Daihatsu')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Daihatsu</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Dodge')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Dodge</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/FIAT')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">FIAT</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Ferrari')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Ferrari</span></span></a>
                                </li>


                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Foton')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Foton</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Ford')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Ford</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/GMC')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">GMC</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Geely')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Geely</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/HUMMER')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">HUMMER</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Hino')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Hino</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Honda')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Honda</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Hyundai')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Hyundai</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Isuzu')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Isuzu</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Iveco')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Iveco</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Jeep')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Jeep</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Kia')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Kia</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Lamborghini')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Lamborghini</span></span></a>
                                </li>


                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Lexus')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Lexus</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Lifan')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Lifan</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Lincoln')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Lincoln</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Mitsubishi')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Mitsubishi</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/MG')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">MG</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/MINI')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">MINI</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Mitsuoka')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Mitsuoka</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Maserati')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Maserati</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Mazda')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Mazda</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Mercedes-Benze')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Mercedes-Benze</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Nissan')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Nissan</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Peugeot')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Peugeot</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Pontiac')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Pontiac</span></span></a>
                                </li>


                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Porsche')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Porsche</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Proton')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Proton</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Land Rover')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Land Rover</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Renault')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Renault</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Scania')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Scania</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Smart')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Smart</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Subaru')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Subaru</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Suzuki')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Suzuki</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Tesla')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Tesla</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Toyota')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Toyota</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Vauxhall')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Vauxhall</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Volkswagen')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Volkswagen</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Volvo')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Volvo</span></span></a>
                                </li>
                                <li id="menu-item-2381"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2381 mi-depth-2 mi-without-description">
                                    <a href="{{asset('/'.$lang_path.'/result_brand/Yutong')}}"
                                       class="submenu-trigger"><span class="mi-title-wrapper"><span
                                                    class="mi-title">Yutong</span></span></a>
                                </li>


                            </ul>
                        </li>

                        <li id="menu-item-2898"
                            class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2898 mi-depth-0 mi-without-description dropdownmenu dropdownmenu-mega mega-default columns4">
                            <a href="{{asset($lang_path.'/contact-us')}}" class="submenu-trigger"><span
                                        class="mi-title-wrapper"><span
                                            class="mi-title">{{trans('greeting.menu6')}}</span></span></a>
                        </li>




                    </ul>
                    <div class="clear"></div>
                </nav>
            </div>


        </div>
    </section>

</header>
