@extends('master')
@section('content')

    <?php
    if (preg_match('/mm/', \Request::PATH())) {
        $lang_path = 'mm';
    } else {
        $lang_path = 'en';
    }
    ?>
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


                    <div class="row">
                        <div class="col-xs-12">

                            <!-- PAGE CONTENT BEGINS -->
                            {!! Form::model($edit_car,['method'=>'PATCH','url'=>'/dashboard/editcar/'.$edit_car->id,'class'=>'form-horizontal','enctype'=>"multipart/form-data"]) !!}
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right bold"
                                       for="form-field-select-1">{{trans('greeting.brand')}}
                                </label>
                                <div class="col-sm-9">
                                    <select class=" col-xs-10 col-sm-8" name="brand" id="form-field-select-1">

                                        <option value="{{$edit_car->brand}}" selected>{{$edit_car->brand}}</option>
                                        <option value="Aston Martin">Aston Martin</option>
                                        <option value="Audi">Audi</option>
                                        <option value="BMW">BMW</option>
                                        <option value="Bentley">Bentley</option>
                                        <option value="Bugatti">Bugatti</option>
                                        <option value="Buick">Buick</option>
                                        <option value="Cadillac">Cadillac</option>
                                        <option value="Chevrolet">Chevrolet</option>
                                        <option value="Chrysler">Chrysler</option>
                                        <option value="Daihatsu">Daihatsu</option>
                                        <option value="Dodge">Dodge</option>
                                        <option value="FIAT">FIAT</option>
                                        <option value="Ferrari">Ferrari</option>
                                        <option value="Ford">Ford</option>
                                        <option value="GMC">GMC</option>
                                        <option value="Geely">Geely</option>
                                        <option value="HUMMER">HUMMER</option>
                                        <option value="Hino">Hino</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Hyundai">Hyundai</option>
                                        <option value="Isuzu">Isuzu</option>
                                        <option value="Jeep">Jeep</option>
                                        <option value="Kia">Kia</option>
                                        <option value="Lamborghini">Lamborghini</option>
                                        <option value="Land Rover">Land Rover</option>
                                        <option value="Lexus">Lexus</option>
                                        <option value="Lifan">Lifan</option>
                                        <option value="Lincoln">Lincoln</option>
                                        <option value="MG">MG</option>
                                        <option value="MINI">MINI</option>
                                        <option value="Maserati">Maserati</option>
                                        <option value="Mazda">Mazda</option>
                                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                                        <option value="Mitsubishi">Mitsubishi</option>
                                        <option value="Mitsuoka">Mitsuoka</option>
                                        <option value="Nissan">Nissan</option>
                                        <option value="Peugeot">Peugeot</option>
                                        <option value="Pontiac">Pontiac</option>
                                        <option value="Porsche">Porsche</option>
                                        <option value="Proton">Proton</option>
                                        <option value="Renault">Renault</option>
                                        <option value="Smart">Smart</option>
                                        <option value="Subaru">Subaru</option>
                                        <option value="Suzuki">Suzuki</option>
                                        <option value="Tesla">Tesla</option>
                                        <option value="Toyota">Toyota</option>
                                        <option value="Vauxhall">Vauxhall</option>
                                        <option value="Volkswagen">Volkswagen</option>
                                        <option value="Volvo">Volvo</option>
                                        <option value="Other">Other</option>
                                        <option value="Nissan Diesel (UD Trucks)">Nissan Diesel (UD Trucks)</option>
                                        <option value="BAIC">BAIC</option>
                                        <option value="Foton">Foton</option>
                                        <option value="Scania">Scania</option>
                                        <option value="Brilliance">Brilliance</option>
                                        <option value="Yutong">Yutong</option>
                                        <option value="Iveco">Iveco</option>
                                        <option value="DAF">DAF</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row"></div>
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
                                <label class="col-sm-3 control-label no-padding-right bold"
                                       for="form-field-select-1">Featured or Bannde
                                </label>
                                <div class="col-sm-9">
                                    <select class=" col-xs-10 col-sm-8" name="feature" id="form-field-select-1">

                                        <option value="{{$edit_car->feature}}" selected>{{$edit_car->feature}}</option>
                                        <option value="Yes">Yes</option>
                                        <option value="Banned">Banned</option>


                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                {!! Form::label('form-field-1 bold','Model',array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


                                <div class="col-sm-9">
                                    {!! Form::text('model',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1']) !!}
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
                                {!! Form::label('id-date-picker-1 bold',trans('greeting.year'),array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


                                <div class="col-sm-9">
                                    {!! Form::number('year',null,['class'=>'col-xs-10 col-sm-8','id'=>'id-date-picker-1']) !!}
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
                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{trans('greeting.year')}}{{$error_year}}
                                                    </strong>
                                                @else
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{$error_year}}
                                                    </strong>
                                                @endif
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row"></div>
                            @endif
                            <div class="row"></div>
                            <div class="form-group">
                                {!! Form::label('form-field-1 bold','Engine Power',array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


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
                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        Engine {{$error_engine}}
                                                    </strong>
                                                @else
                                                    '
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{$error_engine}}
                                                    </strong>
                                                @endif
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row"></div>
                            @endif


                            <div class="form-group">
                                {!! Form::label('form-field-1 bold',trans('greeting.doors'),array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


                                <div class="col-sm-9">
                                    {!! Form::number('doors',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1']) !!}
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
                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{trans('greeting.doors')}}{{$error_doors}}
                                                    </strong>
                                                @else

                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{$error_doors}}
                                                    </strong>
                                                @endif
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row"></div>
                            @endif
                            <div class="form-group">
                                {!! Form::label('form-field-1 bold',trans('greeting.price'),array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


                                <div class="col-sm-9 col-md-4">
                                    {!! Form::number('price',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1','required'=>'required/']) !!}{{trans('greeting.lakh')}}
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
                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{trans('greeting.price')}}{{$error_price}}
                                                    </strong>
                                                @else
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{$error_price}}
                                                    </strong>
                                                @endif
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row"></div>
                            @endif
                            <div class="row"></div>
                            <div class="form-group">
                                {!! Form::label('form-field-1 bold','Kilo',array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


                                <div class="col-sm-9 col-md-4">
                                    {!! Form::number('km',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1','required'=>'required/']) !!}Kilo
                                </div>
                            </div>
                            @if ($errors->has('km'))

                                @foreach ($errors->get('km') as $km)
                                    <div class="row">
                                        <div class="col-xs-10">

                                            <div class="alert alert-danger" style="padding:4px;">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>
                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        Kilo {{$km}}
                                                    </strong>
                                                @else

                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{$km}}
                                                    </strong>
                                                @endif
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row"></div>
                            @endif
                            <div class="form-group">
                                {!! Form::label('form-field-1 bold',trans('greeting.incolor'),array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


                                <div class="col-sm-9">
                                    {!! Form::text('interior_color',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1']) !!}
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
                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{trans('greeting.incolor')}} {{$error_in}}
                                                    </strong>
                                                @else
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{$error_in}}
                                                    </strong>
                                                @endif
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row"></div>
                            @endif
                            <div class="row"></div>

                            <div class="row"></div>
                            <div class="form-group">
                                {!! Form::label('form-field-1 bold',trans('greeting.excolor'),array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


                                <div class="col-sm-9">
                                    {!! Form::text('exterior_color',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1']) !!}
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
                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{trans('greeting.excolor')}} {{$exterior_color}}
                                                    </strong>
                                                @else
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{$exterior_color}}
                                                    </strong>
                                                @endif
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row"></div>
                            @endif
                            <div class="row"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right bold"
                                       for="form-field-select-1">{{trans('greeting.fuel')}}
                                </label>
                                <div class="col-sm-9">
                                    <select class=" col-xs-10 col-sm-8" name="fuel" id="form-field-select-1">
                                        <option value="{{$edit_car->fuel}}">{{$edit_car->fuel}}</option>

                                        <option value="octane">Octane</option>
                                        <option value="pectrol">Pectrol</option>
                                        <option value="diesal">Diesal</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right bold"
                                       for="form-field-select-1">{{trans('greeting.body')}}
                                </label>
                                <div class="col-sm-9">
                                    <select class=" col-xs-10 col-sm-8" name="body_type" id="form-field-select-1">
                                        <option value="{{$edit_car->body_type}}">{{$edit_car->body_type}}</option>
                                        <option value="wagon">Wagon</option>
                                        <option value="truck">Truck</option>
                                        <option value="sedan">Sedan</option>
                                        <option value="sedan">Hatchback</option>
                                        <option value="sport">Sport</option>
                                        <option value="coupe">Coupe</option>
                                        <option value="wagon">Wagon</option>
                                        <option value="luxury">luxury</option>
                                        <option value="minivan">Minivan</option>
                                        <option value="bus">Bus</option>
                                        <option value="others">Others</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right bold"
                                       for="form-field-select-1">{{trans('greeting.transmittion')}}
                                </label>
                                <div class="col-sm-9">
                                    <select class=" col-xs-10 col-sm-8" name="transmittion" id="form-field-select-1">
                                        <option value="{{$edit_car->transmittion}}">{{$edit_car->transmittion}}</option>
                                        <option value="Auto">Auto</option>
                                        <option value="Manual">Manual</option>
                                        <option value="Auto_Manual">Auto Manual</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row"></div>

                            <div class="form-group">
                                {!! Form::label('form-field-1 bold',trans('greeting.detail'),array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


                                <div class="col-sm-9">
                                    {!! Form::textarea('detail',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1']) !!}
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

                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{trans('greeting.detail')}} {{$error_detail}}
                                                    </strong>
                                                @else
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{$error_detail}}
                                                    </strong>
                                                @endif
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right bold"
                                       for="form-field-tags">{{trans('greeting.appliances')}}</label>

                                <div class="col-sm-9">
                                    <div class="inline">
                                        <!--we post appliances as a string to controller one tag and one tag are divided by , -->
                                        <input type="text" name="appliances" id="form-field-tags"
                                               value="{{$edit_car->appliances}}"
                                               placeholder="Ex:enter air bag 2 and press hit..."/>
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
                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{trans('greeting.appliances')}} {{$error_apl}}
                                                    </strong>
                                                @else

                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{$error_apl}}
                                                    </strong>
                                                @endif
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                {!! Form::label('id-button-borders',trans('greeting.linc'),array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}

                                <div class="col-sm-9">
                                    <select class=" col-xs-10 col-sm-8" name="license" id="form-field-select-1">
                                        <option value="{{$edit_car->license}}" selected>{{$edit_car->license}}</option>

                                        <option value="{{trans('greeting.lwn')}}">{{trans('greeting.lwn')}}</option>
                                        <option value="{{trans('greeting.without')}}">{{trans('greeting.without')}}</option>
                                        <option value="{{trans('greeting.lwon')}}">{{trans('greeting.lwon')}}</option>


                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('id-input-file-2 bold',trans('greeting.carphoto'),array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


                                <div class="col-sm-6">
                                    {!! Form::file('photo1',['class'=>'col-xs-10 col-sm-8','id'=>'id-input-file-2']) !!}
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
                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{trans('greeting.carphoto')}} {{$error_logo}}
                                                    </strong>
                                                @else

                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{ $error_logo}}
                                                    </strong>
                                                @endif
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                {!! Form::label('id-input-file-2 bold',trans('greeting.carfrontphoto'),array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


                                <div class="col-sm-6">
                                    {!! Form::file('photo2',['class'=>'col-xs-10 col-sm-8','id'=>'id-input-file-2']) !!}
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
                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{trans('greeting.carfrontphoto')}} {{$error_photo2}}
                                                    </strong>
                                                @else

                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{ $error_photo2}}
                                                    </strong>
                                                @endif
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                {!! Form::label('id-input-file-2 bold',trans('greeting.carbackphoto'),array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


                                <div class="col-sm-6">
                                    {!! Form::file('photo3',['class'=>'col-xs-10 col-sm-8','id'=>'id-input-file-2']) !!}
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

                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{trans('greeting.carbackphoto')}} {{$error_photo3}}
                                                    </strong>
                                                @else
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{ $error_photo3}}
                                                    </strong>
                                                @endif
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                {!! Form::label('id-input-file-2 bold',trans('greeting.carenginephoto'),array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


                                <div class="col-sm-6">
                                    {!! Form::file('photo4',['class'=>'col-xs-10 col-sm-8','id'=>'id-input-file-2']) !!}
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
                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{trans('greeting.carenginephoto')}} {{$error_photo4}}
                                                    </strong>
                                                @else

                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{ $error_photo4}}
                                                    </strong>
                                                @endif
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                {!! Form::label('id-input-file-2',trans('greeting.innerphoto'),array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


                                <div class="col-sm-6">
                                    {!! Form::file('photo5',['class'=>'col-xs-10 col-sm-8','id'=>'id-input-file-2']) !!}
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

                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{trans('greeting.innerphoto')}} {{$error_photo5}}
                                                    </strong>
                                                @else
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{ $error_photo5}}
                                                    </strong>
                                                @endif

                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                {!! Form::label('id-input-file-2',trans('greeting.photo6'),array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


                                <div class="col-sm-6">
                                    {!! Form::file('photo6',['class'=>'col-xs-10 col-sm-8','id'=>'id-input-file-2']) !!}
                                </div>
                            </div>
                            @if($errors->has('photo6'))
                                @foreach ($errors->get('photo6') as $error_photo6)
                                    <div class="row">
                                        <div class="col-xs-10">

                                            <div class="alert alert-danger" style="padding:4px">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>

                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{trans('greeting.photo6')}} {{$error_photo6}}
                                                    </strong>
                                                @else
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{ $error_photo6}}
                                                    </strong>
                                                @endif

                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                {!! Form::label('id-input-file-2',trans('greeting.photo7'),array('class'=>'col-sm-3 control-label no-padding-right bold')) !!}


                                <div class="col-sm-6">
                                    {!! Form::file('photo7',['class'=>'col-xs-10 col-sm-8','id'=>'id-input-file-2']) !!}
                                </div>
                            </div>
                            @if($errors->has('photo7'))
                                @foreach ($errors->get('photo7') as $error_photo7)
                                    <div class="row">
                                        <div class="col-xs-10">

                                            <div class="alert alert-danger" style="padding:4px">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>

                                                @if(preg_match('/mm/',\Request::PATH()))
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{trans('greeting.photo7')}} {{$error_photo7}}
                                                    </strong>
                                                @else
                                                    <strong>
                                                        <i class="ace-icon fa fa-times"></i>
                                                        {{ $error_photo7}}
                                                    </strong>
                                                @endif

                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif


                            <div class="clearfix form-actions">
                                <input type="hidden" name="view_count" value="0">
                                <div class="col-md-offset-3 col-md-9">
                                    <button class="btn btn-info" type="submit" style="left:12%;">
                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                        {{trans('greeting.submit')}}
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
							<span class="blue bolder">Myanusedcar</span>
                            &copy;  2016-2017
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
