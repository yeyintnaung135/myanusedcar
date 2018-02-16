<?php
if (preg_match('/en/', \Request::PATH())) {
    $lang_path = 'en';
} else {
    $lang_path = 'mm';
}
?>
@extends('userfront')
@section('title')
    <title> Please Register to show your car for sell</title>
@endsection
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
    <div class="row" style="margin-left:13%;">
        <div class="col-xs-10">

            <div class="alert alert-info" style="padding:4px;">


                <strong>
                    <div style="text-align:center;">{{trans('greeting.registermsg')}}&nbsp;<a class="btn btn-primary"  href="{{asset('/'.$lang_path.'/user/login')}}">{{trans('greeting.loginbutton')}}</a>
                    </div>
                </strong>

                <br/>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{trans('greeting.registertitle')}}</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ asset($lang_path.'/user/register') }}"
                              enctype="multipart/form-data">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{trans('greeting.mailname')}}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                           placeholder="{{trans('greeting.exname')}}" required/>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{trans('greeting.mailemail')}}</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                           placeholder="{{trans('greeting.exemail')}}" required/>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{trans('greeting.mailphone')}}</label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="phone" value="{{ old('phone') }}"
                                           placeholder="Ex:09*********" required/>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong style="color:#a94442;">{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('town') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label"> {{trans('greeting.state')}}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="town" value="{{old('town')}}"
                                            placeholder="State or Division" required/>

                                    <option value="Yangon Division" selected>Yangon Division</option>
                                    <option value="Mandalay Division">Mandalay Division</option>
                                    <option value="Ayeyarwady Division">Ayeyarwady Division</option>
                                    <option value="Sagaing Divison">Sagaing Division</option>
                                    <option value="Bago Division">Bago Division</option>
                                    <option value="Shan State">Shan State</option>
                                    <option value="Magway Division">Magway Division</option>
                                    <option value="Rakhine State">Rakhine State</option>
                                    <option value="Mon State">Mon State</option>
                                    <option value="Kayin State">Kayin State</option>
                                    <option value="Tanintharyi Division">Tanintharyi Division</option>
                                    <option value="Kachin State">Kachin State</option>
                                    <option value="Chin State">Chin State</option>
                                    <option value="Kayah State">Kayah State</option>
                                    <option value="Nay Pyi Taw">Nay Pyi Taw</option>

                                    </select>
                                    @if ($errors->has('town'))
                                        <span class="help-block">
                                        <strong style="color:#a94442;">{{ $errors->first('town') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{trans('greeting.mailadd')}}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="address" value="{{ old('address') }}"
                                           placeholder="{{trans('greeting.exadd')}}">

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong style="color:#a94442;">{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password"
                                           placeholder="{{trans('greeting.expsw')}}" required/>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation"
                                           placeholder="{{trans('greeting.exconfirm')}}" required/>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <input type="hidden" class="form-control" name="role" value="member">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                            <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{trans('greeting.userphoto')}}</label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="photo">
                                </div>
                            </div>
                            @if ($errors->has('photo'))
                                <span class="help-block" style="color:#a94442;text-align:center;">
                                        <strong >{{ $errors->first('photo') }}</strong>
                                    </span>
                            @endif
                            <div class="row">&nbsp;</div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" style="float:right;">
                                        <i class="fa fa-btn fa-user"></i>{{trans('greeting.registerconfirm')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
