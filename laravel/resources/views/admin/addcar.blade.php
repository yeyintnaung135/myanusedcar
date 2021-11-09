@extends('master')
@section('content')


    <div class="main-container" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.check('main-container', 'fixed')
            } catch (e) {
            }
        </script>

        @parent
        <div class="main-content">
            <div class="main-content-inner">
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                        try {
                            ace.settings.check('breadcrumbs', 'fixed')
                        } catch (e) {
                        }
                    </script>

                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="#">Home</a>
                        </li>

                        <li>
                            <a href="#">Add Car</a>
                        </li>

                    </ul><!-- /.breadcrumb -->

                    <div class="nav-search" id="nav-search">
                        <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input"
                                           id="nav-search-input" autocomplete="off"/>
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                        </form>
                    </div><!-- /.nav-search -->
                </div>

                <div class="page-content">
                    <div class="ace-settings-container" id="ace-settings-container">
                        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                            <i class="ace-icon fa fa-cog bigger-130"></i>
                        </div>

                        <div class="ace-settings-box clearfix" id="ace-settings-box">
                            <div class="pull-left width-50">
                                <div class="ace-settings-item">
                                    <div class="pull-left">
                                        <select id="skin-colorpicker" class="hide">
                                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                        </select>
                                    </div>
                                    <span>&nbsp; Choose Skin</span>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar"/>
                                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar"/>
                                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs"/>
                                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"/>
                                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container"/>
                                    <label class="lbl" for="ace-settings-add-container">
                                        Inside
                                        <b>.container</b>
                                    </label>
                                </div>
                            </div><!-- /.pull-left -->

                            <div class="pull-left width-50">
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover"/>
                                    <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"/>
                                    <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight"/>
                                    <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                                </div>
                            </div><!-- /.pull-left -->
                        </div><!-- /.ace-settings-box -->
                    </div><!-- /.ace-settings-container -->


                    <div class="row">
                        <div class="col-xs-12">

                            <!-- PAGE CONTENT BEGINS -->
                            {!! Form::open(array('class'=>'form-horizontal','id'=>'bootstrapTagsInputForm','enctype'=>"multipart/form-data")) !!}
                            <div class="form-group">
                                {!! Form::label('form-field-1','Brand',array('class'=>'col-sm-3 control-label no-padding-right')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('brand',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1','required'=>'required/']) !!}
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
                                {!! Form::label('form-field-1','Model',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                                <div class="col-sm-9">
                                    {!! Form::text('model',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1','required'=>'required/']) !!}
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
                                {!! Form::label('id-date-picker-1','Year',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                                <div class="col-sm-9">
                                    {!! Form::number('year',null,['class'=>'col-xs-10 col-sm-8','id'=>'id-date-picker-1','required'=>'required/']) !!}
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
                                {!! Form::label('form-field-1','Engine Power',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                                <div class="col-sm-9">
                                    {!! Form::text('engine',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1']) !!}
                                </div>
                            </div>
                            @if ($errors->has('engine'))

                                @foreach ($errors->get('engine') as $error_engine)
                                    <div class="row">
                                        <div class="col-xs-10">

                                            <div class="alert alert-danger" style="padding:4px;">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>

                                                <strong>
                                                    <i class="ace-icon fa fa-times"></i>
                                                    {{$error_engine}}
                                                </strong>

                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row"></div>
                            @endif
                            <div class="form-group">
                                {!! Form::label('form-field-1','City Or Town',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                                <div class="col-sm-9">
                                    {!! Form::text('town',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1']) !!}
                                </div>
                            </div>
                            @if ($errors->has('town'))

                                @foreach ($errors->get('town') as $error_town)
                                    <div class="row">
                                        <div class="col-xs-10">

                                            <div class="alert alert-danger" style="padding:4px;">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>

                                                <strong>
                                                    <i class="ace-icon fa fa-times"></i>
                                                    {{$error_town}}
                                                </strong>

                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row"></div>
                            @endif
                            <div class="form-group">
                                {!! Form::label('id-date-picker-1','Address',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                                <div class="col-sm-9">
                                    {!! Form::text('address',null,['class'=>'col-xs-10 col-sm-8','id'=>'id-date-picker-1']) !!}
                                </div>
                            </div>
                            @if ($errors->has('address'))

                                @foreach ($errors->get('address') as $error_add)
                                    <div class="row">
                                        <div class="col-xs-10">

                                            <div class="alert alert-danger" style="padding:4px;">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>

                                                <strong>
                                                    <i class="ace-icon fa fa-times"></i>
                                                    {{$error_add}}
                                                </strong>

                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row"></div>
                            @endif
                            <div class="form-group">
                                {!! Form::label('form-field-1','Doors',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                                <div class="col-sm-9">
                                    {!! Form::number('doors',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1','required'=>'required/']) !!}
                                </div>
                            </div>
                            <div class="row"></div>
                            @if ($errors->has('doors'))

                                @foreach ($errors->get('doors') as $error_doors)
                                    <div class="row">
                                        <div class="col-xs-10">

                                            <div class="alert alert-danger" style="padding:4px;">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>

                                                <strong>
                                                    <i class="ace-icon fa fa-times"></i>
                                                    {{$error_doors}}
                                                </strong>

                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row"></div>
                            @endif
                            <div class="form-group">
                                {!! Form::label('form-field-1','Price',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                                <div class="col-sm-9">
                                    {!! Form::text('price',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1','required'=>'required/']) !!}Lakh
                                </div>
                            </div>
                            @if ($errors->has('price'))

                                @foreach ($errors->get('price') as $error_price)
                                    <div class="row">
                                        <div class="col-xs-10">

                                            <div class="alert alert-danger" style="padding:4px;">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>

                                                <strong>
                                                    <i class="ace-icon fa fa-times"></i>
                                                    {{$error_price}}
                                                </strong>

                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row"></div>
                            @endif
                            <div class="form-group">
                                {!! Form::label('form-field-1','Interior Color',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                                <div class="col-sm-9">
                                    {!! Form::text('interior_color',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1','required'=>'required/']) !!}
                                </div>
                            </div>
                            @if ($errors->has('interior_color'))

                                @foreach ($errors->get('interior_color') as $error_in)
                                    <div class="row">
                                        <div class="col-xs-10">

                                            <div class="alert alert-danger" style="padding:4px;">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>

                                                <strong>
                                                    <i class="ace-icon fa fa-times"></i>
                                                    {{$error_in}}
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
                                {!! Form::label('form-field-1','Exterior Color',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                                <div class="col-sm-9">
                                    {!! Form::text('exterior_color',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1','required'=>'required/']) !!}
                                </div>
                            </div>
                            @if ($errors->has('exterior_color'))

                                @foreach ($errors->get('exterior_color') as $exterior_color)
                                    <div class="row">
                                        <div class="col-xs-10">

                                            <div class="alert alert-danger" style="padding:4px;">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>

                                                <strong>
                                                    <i class="ace-icon fa fa-times"></i>
                                                    {{$exterior_color}}
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
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-select-1">Fuel
                                </label>
                                <div class="col-sm-9">
                                    <select class=" col-xs-10 col-sm-8" name="fuel" id="form-field-select-1">

                                        <option value="octane" selected>Octane</option>
                                        <option value="pectrol">Pectrol</option>
                                        <option value="diesal">Diesal</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-select-1">Body
                                    Type
                                </label>
                                <div class="col-sm-9">
                                    <select class=" col-xs-10 col-sm-8" name="body_type" id="form-field-select-1">

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
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-select-1">Transmittion
                                </label>
                                <div class="col-sm-9">
                                    <select class=" col-xs-10 col-sm-8" name="transmittion" id="form-field-select-1">

                                        <option value="Auto" selected>Auto</option>
                                        <option value="Manual">Manual</option>
                                        <option value="Auto_Manual">Auto Manual</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row"></div>

                            <div class="form-group">
                                {!! Form::label('form-field-1','Detail',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                                <div class="col-sm-9">
                                    {!! Form::textarea('detail',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1','required'=>'required/']) !!}
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
                                <label class="col-sm-3 control-label no-padding-right"
                                       for="form-field-tags">Appliances</label>

                                <div class="col-sm-9">
                                    <div class="inline">
                                        <!--we post appliances as a string to controller one tag and one tag are divided by , -->
                                        <input type="text" name="appliances" id="form-field-tags"
                                               value="Tag Input Control" placeholder="Ex:enter air bag 2 and press hit..."/>
                                    </div>
                                </div>
                            </div>
                            @if($errors->has('appliances'))
                                @foreach ($errors->get('appliances') as $error_apl)
                                    <div class="row">
                                        <div class="col-xs-10">

                                            <div class="alert alert-danger" style="padding:4px">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>


                                                <strong>
                                                    <i class="ace-icon fa fa-times"></i>
                                                    {{$error_apl}}
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
                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                        Submit
                                    </button>

                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn" type="reset">
                                        <i class="ace-icon fa fa-undo bigger-110"></i>
                                        Reset
                                    </button>
                                </div>
                            </div>
                            {!! Form::close() !!}

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder"></span>
							Myanusedcars &copy; 2016-2017
						</span>

                    &nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

							<a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

							<a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
						</span>
                </div>
            </div>
        </div>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->

@endsection
