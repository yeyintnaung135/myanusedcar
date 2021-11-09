@extends('masterads')
@section('content')
    <?php
    if (preg_match('/mm/', \Request::PATH())) {
        $lang_path = 'mm';
    } else {
        $lang_path = 'en';
    }
    ?>
    <div id="content" class="page-filter">

        <div class="section gray-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div id="main">

                            <div class="content white block block-margin adsactions" style="">
                                <h2 class="detailbrand">Edit Profile</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">

                        <div id="main">
                            <div class="content white block block-margin" style="border:0.1px solid rgba(128, 128, 128, 0.21);">
                                <div class="row">
                                    <div class="col-md-12">


                                        <div class="col-lg-12" style="margin-top:15px;">
                                            {!! Form::open(['url'=>'/'.$lang_path.'/user/'.Auth::user()->id.'/psw_change','class'=>'form-horizontal']) !!}
                                            <div class="col-sm-12">
                                                <div class="col-sm-12 col-md-6" style="">
                                                    {!! Form::label('form-field-1',trans('greeting.oldpsw'),array('class'=>'form-font')) !!}

                                                    {!! Form::text('old_psw',null,['class'=>'form-control form-custom','id'=>'form-field-1','required'=>'required/']) !!}
                                                    @if(Session::has('old_psw'))

                                                        <div class="row">
                                                            <div class="col-xs-12">

                                                                <div class="alert alert-danger" style="padding:4px;">
                                                                    <button type="button" class="close" data-dismiss="alert">
                                                                        <i class="ace-icon fa fa-times"></i>
                                                                    </button>


                                                                    <strong>
                                                                        <i class="ace-icon fa fa-times"></i>
                                                                        {{ Session::get('old_psw')}}
                                                                    </strong>

                                                                    <br/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                </div>


                                                <div class="form-group col-sm-12 col-md-6" style="">
                                                    {!! Form::label('form-field-2',trans('greeting.newpsw'),array('class'=>'form-font')) !!}


                                                    {!! Form::text('password',null,['class'=>'form-control form-custom','id'=>'form-field-2','required'=>'required/']) !!}
                                                    @if($errors->has('password'))
                                                        @foreach ($errors->get('password') as $password)
                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>


                                                                        <strong>
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                            {{ $password}}
                                                                        </strong>

                                                                        <br/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>


                                            <!--end inner photo-->
                                            <div class="col-sm-12">
                                                <!--inner photo2-->
                                                <!--photo1 div-->

                                                <div class="col-sm-2 col-md-4 ">&nbsp;</div>
                                                <div class="col-sm-8 col-md-4" style="margin-bottom:30px;">
                                                    <input type="hidden" name="view_count" value="0">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <input type='submit' class="btn btn-lg btn-danger smallbuttom" value="{{trans('greeting.submit')}}&nbsp;>>">
                                                        </input>


                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-md-4 ">&nbsp;</div>
                                            </div>


                                            {!! Form::close() !!}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- /#mainmini -->
                        </div>
                        <!--search sibe div-->

                        <!--search sibe div-->
                    </div>
                </div>
            </div>
        </div>
@endsection