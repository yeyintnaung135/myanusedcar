@extends('masterfront')
@section('content')
    <?php
    if (preg_match('/mm/', \Request::PATH())) {
        $lang_path = 'mm';
    } else {
        $lang_path = 'en';
    }
    ?>
    <div class="container-fluid" style="background:#f1efef;">
        <!-- /#page-heading -->
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

    @if(!empty($error))
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
        @endif

        <div class="row mt-3 mb-5 ml-0 mr-0 ml-sm-3 mr-sm-3 mr-lg-5 ml-lg-5 bg-white shadow-sm rounded">


            <div class="col-12 col-lg-6 mt-5 mb-3">
                <div class="heading">
                    <h3 class='yk_sub_title'><i class="fas fa-info-circle yk-color-detail"></i>&nbsp;
                        Contact Information</h3>
                </div><!-- /.heading -->
                <div class="col-sm-12 col-md-12 overview mt-3">
                    <table class="table" style="">
                        <tbody style="text-align:left;">
                        <tr>
                            <td class="property yk_sub_title_two"><span
                                        class="fas fa-user"></span>&nbsp;&nbsp;MyanusedCar Group
                            </td>
                        </tr>
                        <tr>
                            <td class="property yk_sub_title_two"><span
                                        class="fas fa-mobile"></span>&nbsp;&nbsp;0158888,0967*******
                            </td>
                        </tr>

                        <tr>
                            <td class="property yk_sub_title_two"><span
                                        class="fas fa-envelope "></span>&nbsp;&nbsp;example@myanusedcar.rf.gd
                            </td>
                        </tr>

                        <tr>
                            <td class="property yk_sub_title_two"><span
                                        class="fas fa-location-arrow"></span>&nbsp;Yangon
                            </td>

                        </tr>


                        </tbody>
                    </table><!-- /.table -->
                </div><!-- /.col-md-7 -->

            </div>
            <div class="col-12 col-lg-6 mt-5 mb-3">
                <div class="heading">
                    <h3 class='yk_sub_title'><i class="fas fa-envelope yk-color-detail"></i>&nbsp;
                        Send message to our group</h3>
                </div><!-- /.heading -->
                <div class="col-sm-12 col-md-12 overview mt-3">
                    <form method="get" action="http://myanusedcar.rf.gd/send">

                        <div class="form">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" name="email" id="inputEmail4"
                                           placeholder="Email" required/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="fff">{{trans('greeting.mailname')}}</label>
                                    <input type="text" name="email" value="{{old('email')}}" id="fff"
                                           class="form-control" required/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ffsf">{{trans('greeting.mailsubject')}}</label>
                                    <input type="text" name="subject" value="{{old('subject')}}" id="ffsf"
                                           class="form-control" required/>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="ffcf">Message</label>
                                    <textarea name="message" id="ffcf" class="form-control" required=""></textarea>
                                </div>
                                <div class="form-group col-md-3">
                                    <button type="submit" class="btn btn-primary btn-block">send</button>
                                </div>
                            </div>


                        </div>


                    </form>
                </div><!-- /.col-md-7 -->

            </div>


        </div>


        <!-- /.section -->
    </div>

@endsection