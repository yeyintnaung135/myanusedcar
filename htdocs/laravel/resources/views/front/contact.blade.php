@extends('masterfront')
@section('content')
    <?php
    if (preg_match('/mm/', \Request::PATH())) {
        $lang_path = 'mm';
    } else {
        $lang_path = 'en';
    }
    ?>
    <div id="content" class="page-contact">
        <!-- /#page-heading -->


        <div class="section gray-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if(Session::has('send'))

                            <div class="row">
                                <div class="col-xs-10" style="text-align:center;">

                                    <div class="alert alert-info" style="padding:4px">
                                        <button type="button" class="close" data-dismiss="alert">
                                            <i class="ace-icon fa fa-times"></i>
                                        </button>


                                        <strong>
                                            <i class="ace-icon fa fa-check"></i>
                                            {{ Session::get('send')}}
                                        </strong>

                                        <br/>
                                    </div>
                                </div>
                            </div>

                        @endif

                        <div id="main">
                            <div class="col-sm-12 col-md-6" style="color:#6f6666;">
                                <div class="col-sm-12 col-md-12">
                                    <div class="block block-shadow block-margin white contact">
                                        <div class="block-inner">
                                            <div class="heading">
                                                <h3 style="color:#ab650a;">
                                                    Contact Information
                                                </h3>
                                            </div>
                                            <p>
                                                <strong>Myanusedcars website developing group.</strong>
                                            </p>
                                            <p class="address">

                                            <span><i class="icon icon-normal-pointer-pin" style="margin-top:0px;"></i>1032,mawkyaut,Thein Gone Yat Kyut,Thaton <br>
                                            </span>
                                            </p>
                                            <p>
                                                <strong><i class="icon icon-normal-phone"></i> Phone:</strong>09420184170,<strong>Viber</strong>:09420184170<br>
                                                </p><p>
                                                <strong><i class="icon icon-normal-mail"></i> E-mail:</strong> yeyint@myanusedcars.rf.gd,<strong>GMAIL</strong>:myanusedcars@gmail.com
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- /.row -->

                            <div class="col-sm-12 col-md-6 white" style="color:#6f6666;">
                                <div class="">
                                    <div class="page-header center" style="margin-top:-1%;">
                                        <div class="page-header-inner">
                                            <div class="line">
                                                <hr>
                                            </div><!-- /.line -->

                                            <div class="heading" >
                                                <h3>{{trans('greeting.sendsite')}}</h3>
                                            </div><!-- /.heading -->

                                            <div class="line">
                                                <hr>
                                            </div><!-- /.line -->
                                        </div><!-- /.page-header-inner -->
                                    </div>

                                    <form method='get' action="{{asset('/send')}}">

                                        <div class="form-inline">
                                            <div class="form-group col-sm-4 col-md-4">
                                                <label>{{trans('greeting.mailname')}}</label>
                                                <input type="text" name="name" value="{{old('name')}}"class="form-control" required/>
                                            </div>
                                            <div class="form-group col-sm-4 col-md-4">
                                                <label>{{trans('greeting.mailemail')}}</label>
                                                <input type="email" name="email" value="{{old('email')}}" class="form-control" required/>
                                            </div>
                                            <div class="form-group col-sm-4 col-md-4">
                                                <label>{{trans('greeting.mailsubject')}}</label>
                                                <input type="text" name="subject" value="{{old('subject')}}" class="form-control" required/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @if ($errors->has('name'))
                                                @foreach ($errors->get('name') as $error)
                                                    <div class="row" style="margin:1%;">
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
                                            @if ($errors->has('email'))
                                                @foreach ($errors->get('email') as $error_email)
                                                    <div class="row" style="margin:1%;">
                                                        <div class="col-xs-10">

                                                            <div class="alert alert-danger" style="padding:4px;">
                                                                <button type="button" class="close" data-dismiss="alert">
                                                                    <i class="ace-icon fa fa-times"></i>
                                                                </button>

                                                                <strong>
                                                                    <i class="ace-icon fa fa-times"></i>
                                                                    {{$error_email}}
                                                                </strong>

                                                                <br/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="row"></div>
                                            @endif
                                            @if ($errors->has('subject'))
                                                @foreach ($errors->get('subject') as $error_sub)
                                                    <div class="row" style="margin:1%;">
                                                        <div class="col-xs-10">

                                                            <div class="alert alert-danger" style="padding:4px;">
                                                                <button type="button" class="close" data-dismiss="alert">
                                                                    <i class="ace-icon fa fa-times"></i>
                                                                </button>

                                                                <strong>
                                                                    <i class="ace-icon fa fa-times"></i>
                                                                    {{$error_sub}}
                                                                </strong>

                                                                <br/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="row"></div>
                                            @endif
                                            @if ($errors->has('message'))
                                                @foreach ($errors->get('message') as $error_msg)
                                                    <div class="row" style="margin:1%;">
                                                        <div class="col-xs-10">

                                                            <div class="alert alert-danger" style="padding:4px;">
                                                                <button type="button" class="close" data-dismiss="alert">
                                                                    <i class="ace-icon fa fa-times"></i>
                                                                </button>

                                                                <strong>
                                                                    <i class="ace-icon fa fa-times"></i>
                                                                    {{$error_msg}}
                                                                </strong>

                                                                <br/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="row"></div>
                                            @endif
                                        </div>

                                        <div class="textarea form-group col-sm-12 col-md-12">
                                            <label>{{trans('greeting.mailmessage')}}</label>
                                            <textarea name='message' class="form-control" required/>{{old('message')}}</textarea>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <button type="submit" class="btn btn-primary btn-block">{{trans('greeting.subscribebutton')}}</button>
                                        </div>
                                    </form>
                                </div>
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
    </div>

@endsection