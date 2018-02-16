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
                                            {!! Form::model($profile,['method'=>'PATCH','url'=>'/'.$lang_path.'/user/'.Auth::user()->id.'/edit_profile','class'=>'form-group','enctype'=>"multipart/form-data"]) !!}
                                            <div class="col-sm-12">
                                                <div class="form-group col-sm-12 col-md-6" style="">
                                                    {!! Form::label('form-field-1',trans('greeting.mailemail'),array('class'=>'form-font')) !!}

                                                    {!! Form::text('email',null,['class'=>'form-control form-custom','id'=>'form-field-1','required'=>'required/']) !!}
                                                    @if($errors->has('email'))
                                                        @foreach ($errors->get('email') as $error_email)
                                                            <div class="row">
                                                                <div class="row">&nbsp;</div>
                                                                <div class="row">

                                                                    <div class="col-xs-12">

                                                                        <div class="alert alert-danger" style="padding:4px">
                                                                            <button type="button" class="close" data-dismiss="alert">
                                                                                <i class="ace-icon fa fa-times"></i>
                                                                            </button>


                                                                            <strong>
                                                                                <i class="ace-icon fa fa-times"></i>
                                                                                {{ $error_email}}
                                                                            </strong>

                                                                            <br />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                                @endif

                                                            </div>


                                                            <div class="form-group col-sm-12 col-md-6" style="">
                                                                {!! Form::label('form-field-1',trans('greeting.mailphone'),array('class'=>'form-font')) !!}


                                                                {!! Form::number('phone',null,['class'=>'form-control form-custom','id'=>'form-field-1','required'=>'required/']) !!}
                                                                @if($errors->has('phone'))
                                                                    @foreach ($errors->get('phone') as $error_phone)
                                                                        <div class="row">&nbsp;</div>

                                                                        <div class="row">
                                                                            <div class="col-xs-12">

                                                                                <div class="alert alert-danger" style="padding:4px">
                                                                                    <button type="button" class="close" data-dismiss="alert">
                                                                                        <i class="ace-icon fa fa-times"></i>
                                                                                    </button>


                                                                                    <strong>
                                                                                        <i class="ace-icon fa fa-times"></i>
                                                                                        {{$error_phone}}
                                                                                    </strong>

                                                                                    <br />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @endif

                                                            </div>
                                                        </div>
                                                            <div class="col-sm-12">


                                                                <div class="form-group col-sm-12 col-md-6">
                                                                    {!! Form::label('form-field-1',trans('greeting.state'),array('class'=>'form-font')) !!}
                                                                    <select class="form-control form-custom" name="town" id="form-field-select-1">

                                                                        <option value="{{$profile->town}}" selected>{{$profile->town}}</option>
                                                                        <option value="Yangon Division">Yangon Division</option>
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

                                                                        @foreach ($errors->get('town') as $error_town)
                                                                            <div class="row">&nbsp;</div>

                                                                            <div class="row">
                                                                                <div class="col-xs-12">

                                                                                    <div class="alert alert-danger" style="padding:4px;">
                                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                                            <i class="ace-icon fa fa-times"></i>
                                                                                        </button>
                                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                                            <strong>

                                                                                                {{trans('greeting.town')}}{{$error_town}}
                                                                                            </strong>
                                                                                        @else
                                                                                            <strong>

                                                                                                {{$error_town}}
                                                                                            </strong>
                                                                                        @endif
                                                                                        <br />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    @endif
                                                                </div>


                                                                <div class="form-group col-sm-12 col-md-6">
                                                                    {!! Form::label('form-field-1',trans('greeting.mailadd'),array('class'=>'form-font')) !!}
                                                                    {!! Form::text('address',null,['class'=>'form-control form-custom','id'=>'form-field-4']) !!}

                                                                    @if ($errors->has('address'))

                                                                        @foreach ($errors->get('address') as $error_address)
                                                                            <div class="row">&nbsp;</div>

                                                                            <div class="row">
                                                                                <div class="col-xs-12">

                                                                                    <div class="alert alert-danger" style="padding:4px;">
                                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                                            <i class="ace-icon fa fa-times"></i>
                                                                                        </button>
                                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                                            <strong>

                                                                                                Engine {{$error_address}}
                                                                                            </strong>
                                                                                        @else
                                                                                            '
                                                                                            <strong>

                                                                                                {{$error_address}}
                                                                                            </strong>
                                                                                        @endif
                                                                                        <br />
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
                                                                <div class="form-group col-sm-12 col-md-6" style="">
                                                                    {!! Form::label('form-field-1',trans('greeting.name'),array('class'=>'form-font')) !!}

                                                                    {!! Form::text('name',null,['class'=>'form-control form-custom','id'=>'form-field-1','required'=>'required/']) !!}
                                                                    @if($errors->has('name'))
                                                                        @foreach ($errors->get('name') as $error_name)
                                                                            <div class="row">
                                                                                <div class="row">&nbsp;</div>
                                                                                <div class="row">

                                                                                    <div class="col-xs-12">

                                                                                        <div class="alert alert-danger" style="padding:4px">
                                                                                            <button type="button" class="close" data-dismiss="alert">
                                                                                                <i class="ace-icon fa fa-times"></i>
                                                                                            </button>


                                                                                            <strong>
                                                                                                <i class="ace-icon fa fa-times"></i>
                                                                                                {{ $error_name}}
                                                                                            </strong>

                                                                                            <br />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                @endforeach
                                                                                @endif

                                                                            </div>

                                                                <div class="form-group col-sm-12 col-md-6">
                                                                    {!! Form::label('id-input-file-2',trans('greeting.userphoto'),array('class'=>'form-font')) !!}
                                                                    {!! Form::file('photo',['class'=>'form-control form-custom','id'=>'id-input-file-2']) !!}

                                                                    @if($errors->has('photo'))
                                                                        @foreach ($errors->get('photo') as $error_photo)
                                                                            <div class="row">&nbsp;</div>

                                                                            <div class="row">
                                                                                <div class="col-xs-12">

                                                                                    <div class="alert alert-danger" style="padding:4px">
                                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                                            <i class="ace-icon fa fa-times"></i>
                                                                                        </button>

                                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                                            <strong>

                                                                                                {{trans('greeting.photo')}} {{$error_photo}}
                                                                                            </strong>
                                                                                        @else
                                                                                            <strong>

                                                                                                {{ $error_photo}}
                                                                                            </strong>
                                                                                        @endif

                                                                                        <br />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    @endif
                                                                </div>
                                                                <!--end inner photo2-->
                                                                <!--beside photo-->
                                                                <!--end beside photo-->
                                                            </div>
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