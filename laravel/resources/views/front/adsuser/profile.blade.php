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
                @if(Session::has('edit_msg'))

                    <div class="row">
                        <div class="col-xs-12">

                            <div class="alert alert-info" style="padding:4px;text-align:center;">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>
                               <strong>{{Session::get('edit_msg')}}</strong>
                                <br />
                            </div>
                        </div>
                    </div>

                @endif
                    @if(Session::has('change_psw'))

                    <div class="row">
                        <div class="col-xs-12">

                            <div class="alert alert-info" style="padding:4px;text-align:center;">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>
                               <strong>{{Session::get('change_pswa')}}</strong>
                                <br />
                            </div>
                        </div>
                    </div>

                @endif

                <div class="row"
                     style="background-color:white;margin:0.1%;border:1px solid rgb(214, 116, 72);margin-bottom:15px;">
                    <div class="col-xs-12">

                        <div class="row">
                            <div class="col-xs-1 col-md-3">
                                &nbsp;
                            </div>

                            <div class="col-xs-11 col-md-6" style="text-align: center;margin-bottom:2px;">
                                <h2 class="detailbrand">Your Profile</h2>


                            </div><!-- /.buy-it-now -->
                            <div class="col-xs-12 col-md-3" style="text-align: center;margin-bottom:12px;">

                            </div>


                        </div><!-- /.action-buttons -->
                    </div>
                </div>

                <div>
                    <div class="col-sm-12 col-md-12" style="color:#6f6666;">
                        <div class="row block block-shadow block-margin white contact">
                            <div class="block-inner">
                                <!-- /.col-md-12 -->
                                <div class="col-xs-3 col-sm-2">

                                </div>
                                <div class="col-xs-9 col-sm-4">
                                    <h4 style="color:#ab650a;font-weight:bolder;">Your Picture</h4></h4>
                                    <img class="editable img-responsive" alt="Alex's Avatar"
                                         id="avatar2"
                                         src="{{asset('backend/images/memberlist/'. Auth::user()->photo)}}" style="width:80%;height:143px;border-radius:3px;margin-bottom:5px;" />
                                </div>
                                <div class="col-xs-12 col-sm-6" style="margin-bottom:14px;">
                                    <ul class="appliances">
                                        <li style="word-break:break-all;text-align:left;">
                                            <span class="dot"></span> Name: {{Auth::user()->name}}
                                        </li>
                                        <li style="word-break:break-all;">
                                            <span class="dot"></span> Start Date: {{Auth::user()->created_at}}
                                        </li>
                                        <li style="word-break:break-all;">
                                            <span class="dot"></span> Email: {{Auth::user()->email}}</li>
                                        <li style="word-break:break-all;">
                                            <span class="dot"></span> Phone: {{Auth::user()->phone}}</li>
                                        <li style="word-break:break-all;">
                                            <span class="dot"></span> Sate/Div: {{Auth::user()->town}}</li>
                                        <li><span class="dot"></span>
                                            <div style="word-break:break-all;text-align:left;">Address: {{Auth::user()->address}}aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div>
                                        </li>
                                    </ul>
                                    <div class="">
                                        <input type='button' onClick="link('{{asset('/'.$lang_path.'/user/'.Auth::user()->id.'/edit_profile')}}')" class="btn btn-sm btn-danger smallbuttom" value="{{trans('greeting.profileedit')}}&nbsp;>>">
                                        </input>


                                        <input type='button' onClick="link('{{asset('/'.$lang_path.'/user/'.Auth::user()->id.'/psw_change')}}')" class="btn btn-sm btn-danger smallbuttom" value="{{trans('greeting.changepsw')}}&nbsp;>>">
                                        </input>
                                        <script>function link(l) {
                                                location.href=l;
                                            }</script>


                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.section -->
    </div>

@endsection