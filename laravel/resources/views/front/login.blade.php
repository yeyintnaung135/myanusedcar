<?php
if(preg_match('/mm/',\Request::PATH()))
{
    $lang_path='mm';
}
else{$lang_path='en';}
?>
@extends('userfront')

@section('content')
    @if(Session::has('expire'))
    <div class="row" style="margin-left:13%;">
        <div class="col-xs-10">

            <div class="alert alert-danger" style="padding:4px;">
                <a hrerf="#" class="close" data-dismiss="alert" aria-lablel="close">
                    <i class="ace-icon fa fa-times"></i>
                </a>

                <strong>
                    <div style="text-align:center;"> {{trans('greeting.loginsessionexpire')}}</div>
                </strong>

                <br/>
            </div>
        </div>
    </div>
    @endif

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{trans('greeting.logintitle')}}</div>
                <div class="panel-body">
                    <?php
                        if(Session::has('locale')){
                            $lang_path=Session::get('locale');
                        }
                        else{
                            $lang_path='mm';
                        }
                        ?>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url($lang_path.'/user/login') }}">
                        {!! csrf_field() !!}

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <div class="col-xs-12">

                                            <div class="alert alert-danger" style="padding:4px;">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>

                                                <strong>
                                                    <div style="text-align:center;"> {{trans('greeting.errorlogin')}}</div>
                                                </strong>

                                                <br/>
                                            </div>
                                        </div>
                            </span>
                        @endif
                        <div class="form-group">
                            <label class="col-md-4 control-label">{{trans('greeting.mailemail')}}</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">


                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                               </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>{{trans('greeting.login')}}
                                </button><br>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">{{trans('greeting.forgotpsw')}}</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="row" style="margin-left:13%;">
        <div class="col-xs-10">

            <div class="alert alert-info" style="padding:4px;">


                <strong>
                    <div style="text-align:center;"> {{trans('greeting.loginformmsg')}}&nbsp;<a class="btn btn-primary" href="{{asset('/'.$lang_path.'/user/register')}}">{{trans('greeting.registerbutton')}}</a></div>
                </strong>

                <br/>
            </div>
        </div>
    </div>
@endsection
