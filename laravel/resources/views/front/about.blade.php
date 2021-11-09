@extends('masterfront')
@section('content')
    <div id="content" class="page-about">


        <div class="section gray-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="main">
                            <div class="row">
                            </div>
                        </div>
                        <!-- /#main -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.section -->

        <div class="section gray-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="article">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="inner">
                                        <div class="picture">
                                            <img src="car_files/about-us.jpg" alt="#">
                                        </div><!-- /.picture -->
                                    </div><!-- /.inner -->
                                </div>

                                <div class="col-xs-12 col-sd-6 col-md-8">
                                    <div class="title">
                                        <h2>
                                            Lorem ipsum dolor sit amet
                                        </h2>
                                    </div>

                                    <div class="subtitle">
                                        <h3>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium
                                        </h3>
                                    </div>

                                    <div class="description">
                                        <p>
                                            Donec vestibulum erat eros, non lobortis ante sodales quis. Donec congue
                                            consequat dui, eget ullamcorper lorem aliquet id. Nam nec urna fringilla,
                                            imperdiet erat vel, consequat mauris. Aliquam dolor odio, cursus in nulla
                                            eu,
                                            rhoncus aliquet purus. Etiam nec cursus quam, rhoncus dictum orci. Duis
                                            varius
                                            aliquam diam nec ullamcorper. Ut mollis dolor felis, id blandit neque
                                            lacinia
                                            ut. Donec magna ante, faucibus ac odio a, tincidunt imperdiet odio. Donec
                                            quis
                                            justo nisi. Nunc porta lobortis nulla, nec aliquam neque vestibulum ut.
                                            Etiam
                                            iaculis vehicula quam at sagittis. Suspendisse potenti. Interdum et
                                            malesuada
                                            fames ac ante ipsum primis in faucibus. Suspendisse porta eget eros sed
                                            pretium.
                                            Sed
                                        </p>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pull-left">
                                                <div class="social">
                                                    <div class="inner">
                                                        <ul class="social-links">
                                                            <li class="social-icon google-plus">
                                                                <a href="#">Google+</a>
                                                            </li>
                                                            <li class="social-icon twitter">
                                                                <a href="#">Twitter</a>
                                                            </li>
                                                            <li class="social-icon pinterest">
                                                                <a href="#">Pinterest</a>
                                                            </li>
                                                            <li class="social-icon facebook">
                                                                <a href="#">Facebook</a>
                                                            </li>
                                                        </ul><!-- /.social-links -->
                                                    </div><!-- /.inner -->
                                                </div><!-- /.social -->
                                            </div>

                                            <div class="pull-right">
                                                <a href="http://carat-html.wearecodevision.com/contact.html"
                                                   class="btn btn-primary">Contact Us
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div id="reviews" class="grid-block block">
                                    <div class="page-header center">
                                        <div class="page-header-inner">
                                            <div class="line">
                                                <hr>
                                            </div>

                                            <div class="heading">
                                                <h2>Our Team</h2>
                                            </div><!-- /.heading -->

                                            <div class="line">
                                                <hr>
                                            </div><!-- /.line -->
                                        </div><!-- /.page-header-inner -->
                                    </div><!-- /.page-header -->
                                    <div class="row">
                                        @foreach($members as $row)

                                            <div class="team col-xs-6 col-sm-3 col-md-2">
                                                <div class="inner">
                                                    <div class="picture">
                                                        <img src="{{asset('backend/images/memberlist/'.$row->photo)}}"
                                                             alt="#">
                                                    </div><!-- /.picture -->
                                                </div><!-- /.inner -->

                                                <div class="content-inner">
                                                    <h2>{{$row->name}}</h2>
                                                    <h4>CEO</h4>
                                                    <div class="social">
                                                        <div class="inner">
                                                            <ul class="social-links">
                                                                <li class="social-icon google-plus">
                                                                    <a href="{{$row->email}}">Google+</a>
                                                                </li>
                                                                <li class="social-icon twitter">
                                                                    <a href="{{$row->twitter}}">Twitter</a>
                                                                </li>
                                                                <li class="social-icon pinterest">
                                                                    <a href="#">Pinterest</a>
                                                                </li>
                                                                <li class="social-icon facebook">
                                                                    <a href="{{$row->facebook}}">Facebook</a>
                                                                </li>
                                                            </ul><!-- /.social-links -->
                                                        </div><!-- /.inner -->
                                                    </div><!-- /.social -->
                                                </div>
                                            </div><!-- /.team -->

                                        @endforeach

                                    </div>
                                </div><!-- /.block -->
                            </div>
                        </div>
                        <div class="features-block block">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-header center">
                                        <div class="page-header-inner">
                                            <div class="line">
                                                <hr>
                                            </div>

                                            <div class="heading">
                                                <h2>Our Services</h2>
                                            </div><!-- /.heading -->

                                            <div class="line">
                                                <hr>
                                            </div><!-- /.line -->
                                        </div><!-- /.page-header-inner -->
                                    </div><!-- /.page-header -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="feature">
                                    <div class="col-xs-12 col-md-4 col-sm-4">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-5">
                                                <div class="feature-icon">
                                                    <div class="feature-icon-inverse">
                                                        <i class="icon-outline-car"></i>
                                                    </div><!-- /.feature-icon-inverse -->

                                                    <div class="feature-icon-normal">
                                                        <i class="icon-normal-car"></i>
                                                    </div><!-- /.feature-icon-normal -->
                                                </div><!-- /.feature-icon -->
                                            </div><!-- /.col-md-5 -->

                                            <div class="col-xs-12 col-md-7">
                                                <h3>Great Prices</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque
                                                    dolor,
                                                    placerat mattis justo id, convallis porta nulla
                                                </p>
                                            </div><!-- /.col-md-7 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.feature -->

                                <div class="feature">
                                    <div class="col-xs-12 col-md-4 col-sm-4">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-5">
                                                <div class="feature-icon">
                                                    <div class="feature-icon-inverse">
                                                        <i class="icon-outline-currency-dollar"></i>
                                                    </div><!-- /.feature-icon-inverse -->

                                                    <div class="feature-icon-normal">
                                                        <i class="icon-normal-currency-dollar"></i>
                                                    </div><!-- /.feature-icon-normal -->
                                                </div><!-- /.feature-icon -->
                                            </div><!-- /.col-md-5 -->

                                            <div class="col-xs-12 col-md-7">
                                                <h3>Wide Selection</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque
                                                    dolor,
                                                    placerat mattis justo id, convallis porta nulla
                                                </p>
                                            </div><!-- /.col-md-7 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.feature -->

                                <div class="feature">
                                    <div class="col-xs-12 col-md-4 col-sm-4">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-5">
                                                <div class="feature-icon">
                                                    <div class="feature-icon-inverse">
                                                        <i class="icon-outline-car-door"></i>
                                                    </div><!-- /.feature-icon-inverse -->

                                                    <div class="feature-icon-normal">
                                                        <i class="icon-normal-car-door"></i>
                                                    </div><!-- /.feature-icon-normal -->
                                                </div><!-- /.feature-icon -->
                                            </div><!-- /.col-md-5 -->

                                            <div class="col-xs-12 col-md-7">
                                                <h3>24/7 Hotline</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque
                                                    dolor,
                                                    placerat mattis justo id, convallis porta nulla
                                                </p>
                                            </div><!-- /.col-md-7 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.feature -->
                            </div><!-- /.row -->
                        </div><!-- /.block -->

                        <div class="partners-block block">
                            <div class="page-header center">
                                <div class="page-header-inner">
                                    <div class="line">
                                        <hr>
                                    </div>

                                    <div class="heading">
                                        <h2>Our Services</h2>
                                    </div><!-- /.heading -->

                                    <div class="line">
                                        <hr>
                                    </div><!-- /.line -->
                                </div><!-- /.page-header-inner -->
                            </div><!-- /.page-header -->
                            <div class="inner-block white block-shadow">
                                <div class="row">
                                    <div class="col-sm-2 col-md-2">
                                        <div class="partner">
                                            <a target="_blank" href="http://logopond.com/gallery/detail/208624">
                                                <img src="car_files/logo1.png" alt="#">
                                            </a>
                                        </div><!-- /.partner -->
                                    </div><!-- /.col-md-2 -->

                                    <div class="col-sm-2 col-md-2">
                                        <div class="partner">
                                            <a target="_blank" href="http://logopond.com/gallery/detail/208786">
                                                <img src="car_files/logo2.png" alt="#">
                                            </a>
                                        </div><!-- /.partner -->
                                    </div><!-- /.col-md-2 -->

                                    <div class="col-sm-2 col-md-2">
                                        <div class="partner">
                                            <a target="_blank" href="http://logopond.com/gallery/detail/206279">
                                                <img src="car_files/logo3.png" alt="#">
                                            </a>
                                        </div><!-- /.partner -->
                                    </div><!-- /.col-md-2 -->

                                    <div class="col-sm-2 col-md-2">
                                        <div class="partner">
                                            <a target="_blank" href="http://logopond.com/gallery/detail/206126">
                                                <img src="car_files/logo4.png" alt="#">
                                            </a>
                                        </div><!-- /.partner -->
                                    </div><!-- /.col-md-2 -->

                                    <div class="col-sm-2 col-md-2">
                                        <div class="partner">
                                            <a target="_blank" href="http://logopond.com/gallery/detail/196232">
                                                <img src="car_files/logo5.png" alt="#">
                                            </a>
                                        </div><!-- /.partner -->
                                    </div><!-- /.col-md-2 -->

                                    <div class="col-sm-2 col-md-2">
                                        <div class="partner">
                                            <a target="_blank" href="http://logopond.com/gallery/detail/205132">
                                                <img src="car_files/logo6.png" alt="#">
                                            </a>
                                        </div><!-- /.partner -->
                                    </div><!-- /.col-md-2 -->
                                </div><!-- /.row -->
                            </div><!-- /.inner-block -->
                        </div><!-- /.partners-block -->                </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.section -->
    </div>
@endsection
