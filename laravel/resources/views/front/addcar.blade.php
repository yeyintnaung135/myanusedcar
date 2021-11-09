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
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Pragmatic Mate s.r.o. - http://pragmaticmates.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="#">
    <link href="{{asset('css/hover.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}" media="screen, projection">

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" media="screen, projection">
    <link rel="stylesheet" type="text/css" href="{{asset('css/carat.css')}}" media="screen, projection">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ace.min.css')}}" media="screen, projection">







    <title>Carat | Car Dealer &amp; Booking HTML Template</title>
    <script src="{{asset('js/common.js')}}" charset="UTF-8" type="text/javascript"></script>
    <script src="{{asset('js/util.js')}}" charset="UTF-8" type="text/javascript"></script>
    <script src="{{asset('js/stats.js')}}" charset="UTF-8" type="text/javascript"></script>
    <style type="text/css">.gm-style .gm-style-cc span, .gm-style .gm-style-cc a, .gm-style .gm-style-mtc div {
            font-size: 10px
        }

        .dis {
            display: block;
        }

        .nodis {
            display: none;
        }

    </style>

    <style type="text/css">
        .black {
            background-color: rgba(96, 45, 22, 1);

        }

        .smallbuttom {
            border-radius: 0px;
            background-color: #F72615;
        }

        .btn:hover {
            border-radius: 0px;
            background-color: #AC2925;
        }

        .disabled a {
            background-color: red;
        }

        .spd {
            width: 100%;
        }
    </style>
</head>
<body class="container" style="background:#d4d4d4;">

<div class="topbar black">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12 header-top-left">
                <div>
                    <div class="news">
                        <div class="inner" style="color:white;">
                            <div style="max-width: 100%; margin: 0px auto;" class="bx-wrapper">
                                <div style="width: 100%; overflow: hidden; position: relative; height: 30px;"
                                     class="bx-viewport">
                                    <ul style="width: auto; position: relative; transition-duration: 0s; transform: translate3d(0px, -30px, 0px);"
                                        class="news-list">
                                        <li class="bx-clone"
                                            style="float: none; list-style: none outside none; position: relative; width: 357px;">
                                            Toyota revealing new model
                                        </li>
                                        <li style="float: none; list-style: none outside none; position: relative; width: 357px;">
                                            Chrysler plans new
                                            <a href="#">product</a>
                                            at Windsor, Ontario, plant, report says
                                        </li>
                                        <li style="float: none; list-style: none outside none; position: relative; width: 357px;">
                                            Tesla retail model faces new legal challenge in Ohio
                                        </li>
                                        <li style="float: none; list-style: none outside none; position: relative; width: 357px;">
                                            Toyota revealing new model
                                        </li>

                                        <li class="bx-clone"
                                            style="float: none; list-style: none outside none; position: relative; width: 357px;">
                                            Chrysler plans new
                                            <a href="#">product</a>
                                            at Windsor, Ontario, plant, report says
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.news-list -->
                        </div><!-- /.inner -->
                    </div><!-- /.news -->
                </div>
            </div>

            <div class="col-md-6 col-xs-12 header-top-right">
                <div>
                    <div class="social">
                        <div class="inner">
                            <ul class="social-links">
                                <li class="social-icon google-plus">
                                    <a href="#">Google+</a>
                                </li>
                                <li class="social-icon youtube cboxElement">
                                    <a href="#">YouTube</a>
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
                                    <img src="{{asset('img/en.png')}}" alt="#">
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
                                    <img src="{{asset('img/ru.png')}}" alt="#">
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.languages -->

                </div>
            </div><!-- /.col-md-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.topbar -->
<div class="container black">
    <a href="{{asset('/'.$lang_path.'/user/register')}}" class="btn btn-small btn-danger smallbuttom"
       style="float:left;margin-right:12px;">
        Register
    </a>

    <a href="#" class="btn btn-small btn-danger smallbuttom" style="float:left;">
        Login &nbsp;&nbsp;&nbsp;

    </a></div>
<header id="header">

    <div class="header-inner black">

    </div><!-- /.header-inner -->
</header><!-- /#header -->
<div class="infobar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb pull-left">
                    <li>
                        <a href="{{asset('/'.$lang_path.'/index')}}">Home</a>
                    </li>
                    <li>
                        <a href="#">Featured Cars</a>
                    </li>
                    <li class="active">Buy</li>
                </ol>

                <div class="contact pull-right">
                    <div class="contact-item phone">
                        <div class="label">
                            <i class="icon icon-normal-mobile-phone"></i>
                        </div><!-- /.label -->
                        <div class="value">123-456-789</div><!-- /.value -->
                    </div><!-- /.phone -->

                    <div class="contact-item mail">
                        <div class="label">
                            <i class="icon icon-normal-mail"></i>
                        </div><!-- /.label -->
                        <div class="value">
                            <a href="mailto:example@example.com">example@example.com</a>
                        </div><!-- /.value -->
                    </div><!-- /.mail -->

                    <div class="contact-item opening">
                        <div class="label">
                            <i class="icon icon-normal-clock"></i>
                        </div><!-- /.label -->
                        <div class="value">Mon - Sun: 8:00 - 16:00</div><!-- /.value -->
                    </div><!-- /.opening -->
                </div><!-- /.contact -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!--infobar-->


<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>


    <div class="container" style="background:white;">
        <div class="main-content-inner">

            <div class="page-content">
             <div class="row">&nbsp;</div>

                <div class="row">
                    <div class="col-xs-12">

                        <!-- PAGE CONTENT BEGINS -->
                        {!! Form::open(array('class'=>'form-horizontal','id'=>'bootstrapTagsInputForm','enctype'=>"multipart/form-data")) !!}
                        <div class="form-group">
                            {!! Form::label('form-field-1','Brand',array('class'=>'control-label col-sm-2')) !!}
                            <div class="col-sm-9">
                                {!! Form::text('brand',null,['class'=>'form-control','id'=>'form-field-1','required'=>'required/']) !!}
                            </div>

                        </div>
                        @if ($errors->has('brand'))
                            @foreach ($errors->get('brand') as $error)
                                <div class="row">
                                    <div class="col-xs-10">

                                        <div class="alert alert-danger" style="padding:4px;">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>

                                            <strong>
                                                <i class="ace-icon fa fa-times"></i>
                                                {{$error}}
                                            </strong>

                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="row"></div>
                        @endif

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="form-field-tags">Appliances</label>

                            <div class="col-sm-9">
                                <div class="inline">
                                    <!--we post appliances as a string to controller one tag and one tag are divided by , -->
                                    <input type="text" name="appliances" id="form-field-tags" value="Tag Input Control"
                                           placeholder="Enter tags ..."/>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            {!! Form::label('form-field-1','Model',array('class'=>'control-label col-sm-2')) !!}


                            <div class="col-sm-9">
                                {!! Form::text('model',null,['class'=>'form-control','id'=>'form-field-1','required'=>'required/']) !!}

                            </div>
                        </div>
                        @if($errors->has('model'))
                            @foreach ($errors->get('model') as $error_model)
                                <div class="row">
                                    <div class="col-xs-10">

                                        <div class="alert alert-danger" style="padding:4px">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>


                                            <strong>
                                                <i class="ace-icon fa fa-times"></i>
                                                {{$error_model}}
                                            </strong>

                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        <div class="form-group">
                            {!! Form::label('form-field-1','Year',array('class'=>'control-label col-sm-2')) !!}


                            <div class="col-sm-9">
                                {!! Form::number('year',null,['class'=>'form-control','id'=>'form-field-1','required'=>'required/']) !!}

                            </div>
                        </div>
                        @if ($errors->has('year'))

                            @foreach ($errors->get('year') as $error_year)
                                <div class="row">
                                    <div class="col-xs-10">

                                        <div class="alert alert-danger" style="padding:4px;">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>

                                            <strong>
                                                <i class="ace-icon fa fa-times"></i>
                                                {{$error_year}}
                                            </strong>

                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="row"></div>
                        @endif
                        <div class="row"></div>
                        <div class="form-group">
                            {!! Form::label('form-field-1','Doors',array('class'=>'control-label col-sm-2')) !!}


                            <div class="col-sm-9">
                                {!! Form::number('doors',null,['class'=>'form-control','id'=>'form-field-1','required'=>'required/']) !!}

                            </div>
                        </div>
                        <div class="row"></div>
                        <div class="form-group">
                            {!! Form::label('form-field-1','Interior Color',array('class'=>'control-label col-sm-2')) !!}


                            <div class="col-sm-9">
                                {!! Form::text('interior_color',null,['class'=>'form-control','id'=>'form-field-1','required'=>'required/']) !!}
                            </div>
                        </div>
                        <div class="row"></div>
                        <div class="form-group">
                            {!! Form::label('form-field-1','Exterior Color',array('class'=>'control-label col-sm-2')) !!}


                            <div class="col-sm-9">
                                {!! Form::text('exterior_color',null,['class'=>'form-control','id'=>'form-field-1','required'=>'required/']) !!}

                            </div>
                        </div>
                        <div class="row"></div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fuel">Fuel
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="fuel" id="fuel">

                                    <option value="octane" selected>Octane</option>
                                    <option value="pectrol">Pectrol</option>
                                    <option value="diesal">Diesal</option>

                                </select>
                            </div>
                        </div>
                        <div class="row"></div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="form-field-select-1">Body Type
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="body_type" id="form-field-select-1">

                                    <option value="wagon" selected>Wagon</option>
                                    <option value="truck">Truck</option>
                                    <option value="sedan">Sedan</option>
                                    <option value="sport">Sport</option>
                                    <option value="coupe">Coupe</option>
                                    <option value="wagon">Wagon</option>
                                    <option value="luxury">luxury</option>

                                </select>
                            </div>
                        </div>
                        <div class="row"></div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="form-field-select-1">Transmittion
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="transmittion" id="form-field-select-1">

                                    <option value="Auto" selected>Auto</option>
                                    <option value="Manual">Manual</option>
                                    <option value="Auto_Manual">Auto Manual</option>


                                </select>
                            </div>
                        </div>
                        <div class="row"></div>

                        <div class="form-group">
                            {!! Form::label('form-field-1','Detail',array('class'=>' control-label col-sm-2 ')) !!}


                            <div class="col-sm-9">
                                {!! Form::textarea('detail',null,['id'=>'form-field-1','class'=>'spd','required'=>'required/']) !!}
                            </div>
                        </div>
                        @if($errors->has('detail'))
                            @foreach ($errors->get('detail') as $error_detail)
                                <div class="row">
                                    <div class="col-xs-10">

                                        <div class="alert alert-danger" style="padding:4px">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>


                                            <strong>
                                                <i class="ace-icon fa fa-times"></i>
                                                {{$error_detail}}
                                            </strong>

                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="form-group">
                            {!! Form::label('id-input-file-2','Brand Logo',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                            <div class="col-sm-6">
                                {!! Form::file('photo1',['class'=>'col-xs-10 col-sm-8','id'=>'id-input-file-2','required'=>'required/']) !!}
                            </div>
                        </div>
                        @if($errors->has('photo1'))
                            @foreach ($errors->get('photo1') as $error_logo)
                                <div class="row">
                                    <div class="col-xs-10">

                                        <div class="alert alert-danger" style="padding:4px">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>


                                            <strong>
                                                <i class="ace-icon fa fa-times"></i>
                                                {{ $error_logo}}
                                            </strong>

                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="form-group">
                            {!! Form::label('id-input-file-2','Front Photo',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                            <div class="col-sm-6">
                                {!! Form::file('photo2',['class'=>'col-xs-10 col-sm-8','id'=>'id-input-file-2','required'=>'required/']) !!}
                            </div>
                        </div>
                        @if($errors->has('photo2'))
                            @foreach ($errors->get('photo2') as $error_photo2)
                                <div class="row">
                                    <div class="col-xs-10">

                                        <div class="alert alert-danger" style="padding:4px">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>


                                            <strong>
                                                <i class="ace-icon fa fa-times"></i>
                                                {{ $error_photo2}}
                                            </strong>

                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="form-group">
                            {!! Form::label('id-input-file-2','Back Photo',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                            <div class="col-sm-6">
                                {!! Form::file('photo3',['class'=>'col-xs-10 col-sm-8','id'=>'id-input-file-2','required'=>'required/']) !!}
                            </div>
                        </div>

                        @if($errors->has('photo3'))
                            @foreach ($errors->get('photo3') as $error_photo3)
                                <div class="row">
                                    <div class="col-xs-10">

                                        <div class="alert alert-danger" style="padding:4px">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>


                                            <strong>
                                                <i class="ace-icon fa fa-times"></i>
                                                {{ $error_photo3}}
                                            </strong>

                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="form-group">
                            {!! Form::label('id-button-borders','Featured',array('class'=>'col-sm-3 control-label no-padding-right')) !!}

                            <div class="col-sm-6">
                                <input id="id-button-borders" checked="" name="feature" value="Yes"
                                       type="checkbox"
                                       class="ace ace-switch ace-switch-5"/>
                                <span class="lbl middle"></span>
                            </div>

                        </div>
                        <div class="form-group">
                            {!! Form::label('id-input-file-2','Engine Photo',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                            <div class="col-sm-6">
                                {!! Form::file('photo4',['class'=>'col-xs-10 col-sm-8','id'=>'id-input-file-2','required'=>'required/']) !!}
                            </div>
                        </div>
                        @if($errors->has('photo4'))
                            @foreach ($errors->get('photo4') as $error_photo4)
                                <div class="row">
                                    <div class="col-xs-10">

                                        <div class="alert alert-danger" style="padding:4px">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>


                                            <strong>
                                                <i class="ace-icon fa fa-times"></i>
                                                {{ $error_photo4}}
                                            </strong>

                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="form-group">
                            {!! Form::label('id-input-file-2','Inner Photo',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                            <div class="col-sm-6">
                                {!! Form::file('photo5',['class'=>'col-xs-10 col-sm-8','id'=>'id-input-file-2','required'=>'required/']) !!}
                            </div>
                        </div>
                        @if($errors->has('photo5'))
                            @foreach ($errors->get('photo5') as $error_photo5)
                                <div class="row">
                                    <div class="col-xs-10">

                                        <div class="alert alert-danger" style="padding:4px">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>


                                            <strong>
                                                <i class="ace-icon fa fa-times"></i>
                                                {{ $error_photo5}}
                                            </strong>

                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        <div class="clearfix form-actions">
                            <input type="hidden" name="view_count" value="0">
                            <div class="col-md-offset-3 col-md-9">
                                <button class="btn btn-info" type="submit">
                                    <i class=" fa fa-check bigger-110"></i>
                                    Submit
                                </button>

                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->


</div><!-- /.main-container -->


<footer class="" id="footer">
    <div class="container black">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="block random-cars">
                    <div class="title">
                        <h2>Popular Cars</h2>
                    </div><!-- /.title -->

                    <div class="items">
                        <div class="teaser-item-wrapper">
                            <div class="teaser-item">
                                <div class="title">
                                    <a href="#">Toyota Landcruiser</a>
                                </div><!-- /.title -->

                                <div class="subtitle">Windsor Locks, CT</div><!-- /.subtitle -->

                                <div class="row">
                                    <div class="picture-wrapper col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="picture">
                                            <a href="#">
							                	<span class="hover">
							                		<span class="hover-inner">
							                			<i class="icon icon-normal-link"></i>
							                		</span><!-- /.hover-inner -->
							                	</span><!-- /.hover -->

                                                <img src="{{asset('img/toyota1.jpg')}}" alt="#">
                                            </a>
                                        </div><!-- /.picture -->
                                    </div><!-- /.picture-wrapper -->

                                    <div class="content-wrapper col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <div class="price">$9,799</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu
                                            vulputate neque. Fusce hendrerit fermentum.
                                        </p>
                                    </div><!-- /.picture-content -->
                                </div><!-- /.row -->
                            </div><!-- /.teaser-item -->
                        </div><!-- /.teaser-item-wrapper -->

                        <div class="teaser-item-wrapper">
                            <div class="teaser-item">
                                <div class="title">
                                    <a href="#">Toyota Landcruiser</a>
                                </div><!-- /.title -->

                                <div class="subtitle">Windsor Locks, CT</div><!-- /.subtitle -->

                                <div class="row">
                                    <div class="picture-wrapper col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="picture">
                                            <a href="#">
							                	<span class="hover">
							                		<span class="hover-inner">
							                			<i class="icon icon-normal-link"></i>
							                		</span><!-- /.hover-inner -->
							                	</span><!-- /.hover -->

                                                <img src="{{asset('img/toyota1.jpg')}}" alt="#">
                                            </a>
                                        </div><!-- /.picture -->
                                    </div><!-- /.picture-wrapper -->

                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 content-wrapper">
                                        <div class="price">$9,799</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu
                                            vulputate neque. Fusce hendrerit fermentum.
                                        </p>
                                    </div><!-- /.content-wrapper -->
                                </div><!-- /.row -->
                            </div><!-- /.teaser-item -->
                        </div><!-- /.teaser-item-wrapper -->
                    </div><!-- /.items -->
                </div><!-- /.block -->
            </div><!-- /.col-md-4 -->

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="block">
                    <div class="title">
                        <h2>Subscribe to Newsletter</h2>
                    </div><!-- /.title -->

                    <form action="{{asset('/subscribe')}}" method="get">
                        <div class="input-group">
                            <input class="form-control" name='email' placeholder="Your e-mail address"
                                   required="required"
                                   type="email">

					      <span class="input-group-btn">
					        <button class="btn hvr-underline-from-center btn-default" type="submit">Submit
                            </button><!-- /.btn -->
					      </span><!-- /.input-group-btn -->
                        </div><!-- /.input-group -->
                    </form>

                    <br>

                    <div class="opening-hours">
                        <div class="day clearfix">
                            <span class="name">Monday</span>
                            <span class="hours">07:00 AM - 07:00 PM</span>
                        </div><!-- /.day -->

                        <div class="day clearfix">
                            <span class="name">Tuesday</span>
                            <span class="hours">07:00 AM - 07:00 PM</span>
                        </div><!-- /.day -->

                        <div class="day clearfix">
                            <span class="name">Wednesday</span>
                            <span class="hours"><i class="icon icon-normal-car"></i> Demonstration drives only</span>
                        </div><!-- /.day -->

                        <div class="day clearfix">
                            <span class="name">Thursday</span>
                            <span class="hours">07:00 AM - 07:00 PM</span>
                        </div><!-- /.day -->

                        <div class="day clearfix">
                            <span class="name">Friday</span>
                            <span class="hours">07:00 AM - 07:00 PM</span>
                        </div><!-- /.day -->

                        <div class="day clearfix">
                            <span class="name">Saturday</span>
                            <span class="hours">07:00 AM - 02:00 PM</span>
                        </div><!-- /.day -->

                        <div class="day clearfix">
                            <span class="name">Sunday</span>
                            <span class="hours"><i class="icon icon-normal-door-out"></i> Closed</span>
                        </div><!-- /.day -->
                    </div><!-- /.opening-hours -->
                </div><!-- /.block -->
            </div><!-- /.col-md-4 -->

            <div class="col-lg-4 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
                <div class="block">
                    <div class="title center-sm">
                        <h2>Recent from Bazaar</h2>
                    </div><!-- /.title -->

                    <div id="carousel-example-generic" class="carousel slide gallery-grid" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item clearfix active">
                                <div class="row">
                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                            <span class="badge">Featured</span>
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                            <span class="badge">Best Price</span>
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                            <span class="badge">Elite Seller</span>
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->
                            </div><!-- /.item -->

                            <div class="item clearfix">
                                <div class="row">
                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                            <span class="badge">Quality A+</span>
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                            <span class="badge">High Rating</span>
                                        </a>
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                            <span class="badge">Certified</span>
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->
                            </div><!-- /.item -->

                            <div class="item clearfix">
                                <div class="row">
                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                            <span class="badge">Elite Seller</span>
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                            <span class="badge">Best Price</span>
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                        </a>
                                    </div><!-- /.col-md-4 -->

                                    <div class="image col-xs-4 col-md-4">
                                        <a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

                                            <img src="img/toyota1.jpg" alt="#">
                                            <span class="badge">High Quality</span>
                                        </a>
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->
                            </div><!-- /.item -->
                        </div><!-- /.carousel-inner -->

                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <i class="icon icon-normal-left-arrow-small"></i>
                        </a>

                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <i class="icon icon-normal-right-arrow-small"></i>
                        </a>
                    </div><!-- /.carousel -->
                </div><!-- /.block -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="footer-bottom black">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 clearfix">
                    <div class="copyright">
                        � Carat HTML Template
                        <span class="separator">/</span>
                        <a href="http://pragmaticmates.com/">Pragmatic Mates</a>
                        <span class="separator">/</span>
                        All rights reserved
                    </div><!-- /.pull-left -->

                    <ul class="nav nav-pills">
                        <li>
                            <a href="{{asset('/')}}">Home</a>
                        </li>
                        <li>
                            <a href="#">Features</a>
                        </li>
                        <li>
                            <a href="#">Reservation</a>
                        </li>
                        <li>
                            <a href="#">Our Offer</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul><!-- /.nav -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</footer><!-- /#footer -->
<!--this file are for photo file upload-->
<script src="{{asset('backends/js/jquery.2.1.1.min.js')}}"></script>
<script src="{{asset('backends/js/bootstrap.min.js')}}"></script>
<!--photo file upload-->
<!-- ace scripts -->
<script src="{{asset('js/js.js')}}"></script>
<!--end ace scripts-->
<!--this file are for photo file upload-->
<script src="{{asset('backends/js/ace-elements.min.js')}}"></script>
<script src="{{asset('backends/js/ace.min.js')}}"></script>
<!--photo file upload-->
<!--this file is for input tag-->
<script src="{{asset('backends/js/bootstrap-tag.min.js')}}"></script>

<!--this script is for input-->
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


<script>
    // You can also use "$(window).load(function() {"
    $(function () {

        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }

        });

    });
</script>

<div style="display: none;" id="cboxOverlay"></div>
<div style="display: none;" tabindex="-1" role="dialog" class="" id="colorbox">
    <div id="cboxWrapper">
        <div>
            <div style="float: left;" id="cboxTopLeft"></div>
            <div style="float: left;" id="cboxTopCenter"></div>
            <div style="float: left;" id="cboxTopRight"></div>
        </div>
        <div style="clear: left;">
            <div style="float: left;" id="cboxMiddleLeft"></div>
            <div style="float: left;" id="cboxContent">
                <div style="float: left;" id="cboxTitle"></div>
                <div style="float: left;" id="cboxCurrent"></div>
                <button id="cboxPrevious" type="button"></button>
                <button id="cboxNext" type="button"></button>
                <button id="cboxSlideshow"></button>
                <div style="float: left;" id="cboxLoadingOverlay"></div>
                <div style="float: left;" id="cboxLoadingGraphic"></div>
            </div>
            <div style="float: left;" id="cboxMiddleRight"></div>
        </div>
        <div style="clear: left;">
            <div style="float: left;" id="cboxBottomLeft"></div>
            <div style="float: left;" id="cboxBottomCenter"></div>
            <div style="float: left;" id="cboxBottomRight"></div>
        </div>
    </div>
    <div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div>
</div>
</body>
</html>