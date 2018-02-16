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
                                <h2 class="detailbrand">{{trans('greeting.addcarpost')}}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">

                        <div id="main">
                            <div class="content white block block-margin" style="border:0.1px solid rgba(128, 128, 128, 0.21);">
                                <div class="row">
                                    <div class="col-md-12">

                                        @if(preg_match('/mm/',\Request::PATH()))
                                            <div class="row"
                                                 style="margin:17px 17px;color:#999;font-weight:bold;font-size:15px;text-align:justify;">
                                                မွတ္ခ်က္မ်ား။။ ေအာက္ပါfieldsအားလံုးကိုၿပည္.စံုစြာၿဖည့္ေပးပါ၊(ထုတ္လုပ္သည့္ခုႏွစ္၊တံခါးေပါက္အေ၇အတြက္၊ေစ်းႏွူန္း၊ေမာင္းႏွင္ၿပီးကီလို)ေနရာေတြကိုနံပါတ္ေတြပဲၿဖည့္ေပးပါ englishနံပါတ္ေတြၿဖစ္တဲ့123456789စတာေတြပဲထည့္ပါ ၿမန္မာနံပါတ္ေတြမရပါဘူး။
                                                <br>(ပါ၀င္ပစၥည္းမ်ား)ထည္.ပံု>>ဥပမာ/သင့္ကေလအိတ္2လံုးထည့္ခ်င္တယ္ဆိုပါစို့ အဲ့တာဆိုေလအိတ္2လံုးလို့ထည့္္ပါ ျပီး၇င္ဖုန္းမာဆို Go ကိုႏွိပ္ပါ (computer မာဆို Enter) ေပါ့၊အဲဒီပံုစံအတိုင္းပဲေနာက္ပစၥၫ္းေတြကို ထပ္ထည့္သြားပါ(ဘာမမထည့္လည္းရပါတယ္)။
                                            </div>
                                        @endif
                                        <div class="col-lg-12" style="margin-top:15px;">
                                            {!! Form::open(array('url'=>'/'.$lang_path.'/user/'.Auth::user()->id.'/addcar_post','id'=>'myform','enctype'=>"multipart/form-data")) !!}
                                            <div class="col-sm-12">
                                                <div class="form-group col-sm-12 col-md-6" style="">
                                                    <label class="form-font" for="form-field-select-1">{{trans('greeting.brand')}}
                                                    </label>
                                                    <select class="form-control form-custom" name="brand"
                                                            id="form-field-select-1">
                                                        <?php if(!empty (old('brand')))
                                                        {?>
                                                        <option value="{{old('brand')}}" selected>{{old('brand')}}</option>
                                                        <?php }?>
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

                                                    @if ($errors->has('brand'))
                                                        @foreach ($errors->get('brand') as $error)
                                                            <div class="row">&nbsp;</div>

                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px;">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>

                                                                        <strong>
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                            {{$error}}
                                                                        </strong>

                                                                        <br />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>


                                                <div class="form-group col-sm-12 col-md-6">
                                                    {!! Form::label('form-field-1','Model',array('class'=>'form-font')) !!}


                                                    {!! Form::text('model',null,['class'=>'form-control form-custom','id'=>'form-field-1','required'=>'required/']) !!}

                                                    @if($errors->has('model'))
                                                        @foreach ($errors->get('model') as $error_model)
                                                            <div class="row">&nbsp;</div>

                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>


                                                                        <strong>
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                            {{$error_model}}
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
                                                    {!! Form::label('id-date-picker-1',trans('greeting.year'),array('class'=>'form-font')) !!}
                                                    {!! Form::number('year',null,['class'=>'form-control form-custom','id'=>'id-date-picker-1','required'=>'required/']) !!}

                                                    @if ($errors->has('year'))

                                                        @foreach ($errors->get('year') as $error_year)
                                                            <div class="row">&nbsp;</div>

                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px;">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>
                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                {{trans('greeting.year')}}{{$error_year}}
                                                                            </strong>
                                                                        @else
                                                                            <strong>

                                                                                {{$error_year}}
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
                                                    {!! Form::label('form-field-4','Engine Power',array('class'=>'form-font')) !!}
                                                    {!! Form::text('engine',null,['class'=>'form-control form-custom','id'=>'form-field-4']) !!}

                                                    @if ($errors->has('engine'))

                                                        @foreach ($errors->get('engine') as $error_engine)
                                                            <div class="row">&nbsp;</div>

                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px;">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>
                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                Engine {{$error_engine}}
                                                                            </strong>
                                                                        @else
                                                                            '
                                                                            <strong>

                                                                                {{$error_engine}}
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
                                            <div class="col-sm-12">


                                                <div class="form-group col-sm-12 col-md-6">
                                                    {!! Form::label('form-field-5',trans('greeting.doors'),array('class'=>'form-font')) !!}
                                                    {!! Form::number('doors',null,['class'=>'form-control form-custom','id'=>'form-field-5','required'=>'required/']) !!}
                                                    <div class="row">&nbsp;</div>
                                                    @if ($errors->has('doors'))

                                                        @foreach ($errors->get('doors') as $error_doors)
                                                            <div class="row">&nbsp;</div>

                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px;">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>
                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                {{trans('greeting.doors')}}{{$error_doors}}
                                                                            </strong>
                                                                        @else

                                                                            <strong>

                                                                                {{$error_doors}}
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
                                                    {!! Form::label('form-field-1',trans('greeting.price').trans('greeting.noticprice'),array('class'=>'form-font')) !!}


                                                    {!! Form::number('price',null,['class'=>'form-control form-custom','id'=>'form-field-1','required'=>'required/']) !!}
                                                    @if ($errors->has('price'))

                                                        @foreach ($errors->get('price') as $error_price)
                                                            <div class="row">&nbsp;</div>

                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px;">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>
                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                {{trans('greeting.price')}}{{$error_price}}
                                                                            </strong>
                                                                        @else
                                                                            <strong>
                                                                                <i class="ace-icon fa fa-times"></i>
                                                                                {{$error_price}}
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
                                            <div class="col-sm-12">


                                                <div class="form-group col-sm-12 col-md-6">
                                                    {!! Form::label('form-field-1',trans('greeting.drivedkm'),array('class'=>'form-font')) !!}


                                                    {!! Form::number('km',null,['class'=>'form-control form-custom','id'=>'form-field-1']) !!}

                                                    @if ($errors->has('km'))

                                                        @foreach ($errors->get('km') as $km)
                                                            <div class="row">&nbsp;</div>

                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px;">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>
                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                Kilo {{$km}}
                                                                            </strong>
                                                                        @else

                                                                            <strong>
                                                                                <i class="ace-icon fa fa-times"></i>
                                                                                {{$km}}
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
                                                    {!! Form::label('form-field-1',trans('greeting.incolor'),array('class'=>'form-font')) !!}
                                                    {!! Form::text('interior_color',null,['class'=>'form-control form-custom','id'=>'form-field-1','required'=>'required/']) !!}

                                                    @if ($errors->has('interior_color'))

                                                        @foreach ($errors->get('interior_color') as $error_in)
                                                            <div class="row">&nbsp;</div>

                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px;">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>
                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                {{trans('greeting.incolor')}} {{$error_in}}
                                                                            </strong>
                                                                        @else
                                                                            <strong>
                                                                                <i class="ace-icon fa fa-times"></i>
                                                                                {{$error_in}}
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
                                            <div class="col-sm-12">


                                                <div class="form-group col-sm-12 col-md-6">
                                                    {!! Form::label('form-field-1',trans('greeting.excolor'),array('class'=>'form-font')) !!}


                                                    {!! Form::text('exterior_color',null,['class'=>'form-control form-custom','id'=>'form-field-1','required'=>'required/']) !!}

                                                    @if ($errors->has('exterior_color'))

                                                        @foreach ($errors->get('exterior_color') as $exterior_color)
                                                            <div class="row">&nbsp;</div>

                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px;">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>
                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                {{trans('greeting.excolor')}} {{$exterior_color}}
                                                                            </strong>
                                                                        @else
                                                                            <strong>
                                                                                <i class="ace-icon fa fa-times"></i>
                                                                                {{$exterior_color}}
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
                                                    <label class="form-font"
                                                           for="form-field-select-1">{{trans('greeting.fuel')}}
                                                    </label>

                                                    <select class="form-control form-custom" name="fuel" id="form-field-select-1">

                                                        <option value="octane" selected>Octane</option>
                                                        <option value="pectrol">Pectrol</option>
                                                        <option value="diesal">Diesal</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">


                                                <div class="form-group col-sm-12 col-md-6">
                                                    <label class="form-font"
                                                           for="form-field-select-1">{{trans('greeting.body')}}
                                                    </label>
                                                    <select class="form-control form-custom" name="body_type" id="form-field-select-1">

                                                        <option value="wagon" selected>Wagon</option>
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


                                                <div class="form-group col-sm-12 col-md-6">
                                                    <label class="form-font" for="form-field-select-1">{{trans('greeting.transmittion')}}
                                                    </label>
                                                    <select class="form-control form-custom" name="transmittion" id="form-field-select-1">

                                                        <option value="Auto" selected>Auto</option>
                                                        <option value="Manual">Manual</option>
                                                        <option value="Auto_Manual">Auto Manual</option>


                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">


                                                <div class="form-group col-sm-12 col-md-6">
                                                    <label class="form-font" for="field-tags">{{trans('greeting.appliances')}}</label>

                                                    <!--we post appliances as a string to controller one tag and one tag are divided by , -->
                                                    <input type="text" class="form-control form-custom" id="field-tags" value="Tag Input Control" data-role="tagsinput" />


                                                    @if($errors->has('appliances'))
                                                        @foreach ($errors->get('appliances') as $error_apl)
                                                            <div class="row">&nbsp;</div>

                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>
                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                {{trans('greeting.appliances')}} {{$error_apl}}
                                                                            </strong>
                                                                        @else

                                                                            <strong>
                                                                                <i class="ace-icon fa fa-times"></i>
                                                                                {{$error_apl}}
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
                                                    <label class="form-font" for="id-button">{{trans('greeting.linc')}}</label>

                                                    <select class="form-control form-custom" name="license" id="id-button">
                                                        <option value="{{trans('greeting.without')}}">{{trans('greeting.without')}}</option>
                                                        <option value="{{trans('greeting.lwn')}}" selected>{{trans('greeting.lwn')}}</option>
                                                        <option value="{{trans('greeting.lwon')}}">{{trans('greeting.lwon')}}</option>
                                                        <option value="{{trans('greeting.lywn')}}">{{trans('greeting.lywn')}}</option>
                                                        <option value="{{trans('greeting.lywon')}}">{{trans('greeting.lywon')}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">


                                                <div class="form-group col-sm-12 col-md-6">
                                                    {!! Form::label('id-input-file-2',trans('greeting.carfrontphoto'),array('class'=>'form-font')) !!}


                                                    {!! Form::file('photo2',['class'=>'form-control form-custom','id'=>'id-input-file-2','required'=>'required/']) !!}
                                                    @if($errors->has('photo2'))
                                                        @foreach ($errors->get('photo2') as $error_photo2)
                                                            <div class="row">&nbsp;</div>

                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>
                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                {{trans('greeting.carfrontphoto')}} {{$error_photo2}}
                                                                            </strong>
                                                                        @else

                                                                            <strong>
                                                                                <i class="ace-icon fa fa-times"></i>
                                                                                {{ $error_photo2}}
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
                                                    {!! Form::label('id-input-file-2',trans('greeting.carbackphoto'),array('class'=>'form-font')) !!}



                                                    {!! Form::file('photo3',['class'=>'form-control form-custom','id'=>'id-input-file-2','required'=>'required/']) !!}
                                                    @if($errors->has('photo3'))
                                                        @foreach ($errors->get('photo3') as $error_photo3)
                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>

                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                {{trans('greeting.carbackphoto')}} {{$error_photo3}}
                                                                            </strong>
                                                                        @else
                                                                            <strong>
                                                                                <i class="ace-icon fa fa-times"></i>
                                                                                {{ $error_photo3}}
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
                                            <div class="col-sm-12">

                                                <!--engine photo div-->
                                                <div class="form-group col-sm-12 col-md-6">
                                                    {!! Form::label('id-input-file-2',trans('greeting.carenginephoto'),array('class'=>'form-font')) !!}


                                                    {!! Form::file('photo4',['class'=>'form-control form-custom','id'=>'id-input-file-2','required'=>'required/']) !!}

                                                    @if($errors->has('photo4'))
                                                        @foreach ($errors->get('photo4') as $error_photo4)
                                                            <div class="row">&nbsp;</div>
                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>
                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                {{trans('greeting.carenginephoto')}} {{$error_photo4}}
                                                                            </strong>
                                                                        @else

                                                                            <strong>
                                                                                <i class="ace-icon fa fa-times"></i>
                                                                                {{ $error_photo4}}
                                                                            </strong>
                                                                        @endif
                                                                        <br />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <!--end engine photo div-->


                                                <!--inner photo div-->
                                                <div class="form-group col-sm-12 col-md-6">
                                                    {!! Form::label('id-input-file-2',trans('greeting.innerphoto'),array('class'=>'form-font')) !!}


                                                    {!! Form::file('photo5',['class'=>'form-control form-custom','id'=>'id-input-file-2','required'=>'required/']) !!}

                                                    @if($errors->has('photo5'))
                                                        @foreach ($errors->get('photo5') as $error_photo5)
                                                            <div class="row">&nbsp;</div>

                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>

                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                {{trans('greeting.innerphoto')}} {{$error_photo5}}
                                                                            </strong>
                                                                        @else
                                                                            <strong>
                                                                                <i class="ace-icon fa fa-times"></i>
                                                                                {{ $error_photo5}}
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

                                                <div class="form-group col-sm-12 col-md-6">
                                                    {!! Form::label('id-input-file-2',trans('greeting.photo6'),array('class'=>'form-font')) !!}
                                                    {!! Form::file('photo6',['class'=>'form-control form-custom','id'=>'id-input-file-2']) !!}

                                                    @if($errors->has('photo6'))
                                                        @foreach ($errors->get('photo6') as $error_photo6)
                                                            <div class="row">&nbsp;</div>

                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>

                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                {{trans('greeting.photo6')}} {{$error_photo6}}
                                                                            </strong>
                                                                        @else
                                                                            <strong>

                                                                                {{ $error_photo6}}
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
                                                <div class="form-group col-sm-12 col-md-6">
                                                    {!! Form::label('id-input-file-2',trans('greeting.photo7'),array('class'=>'form-font')) !!}


                                                    {!! Form::file('photo7',['class'=>'form-control form-custom','id'=>'id-input-file-2']) !!}

                                                    @if($errors->has('photo7'))
                                                        @foreach ($errors->get('photo7') as $error_photo7)
                                                            <div class="row">&nbsp;</div>

                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>

                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                {{trans('greeting.photo7')}} {{$error_photo7}}
                                                                            </strong>
                                                                        @else
                                                                            <strong>

                                                                                {{ $error_photo7}}
                                                                            </strong>
                                                                        @endif

                                                                        <br />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <!--end beside photo-->
                                            </div>
                                            <!--photo1 div-->

                                            <div class="col-sm-12">
                                                <div class="form-group col-sm-12 col-md-6">
                                                    {!! Form::label('id-input-file-2',trans('greeting.carphoto'),array('class'=>'form-font')) !!}


                                                    {!! Form::file('photo1',['class'=>'form-control form-custom','id'=>'id-input-file-2','required'=>'required/']) !!}
                                                    @if($errors->has('photo1'))
                                                        @foreach ($errors->get('photo1') as $error_logo)
                                                            <div class="row">&nbsp;</div>

                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>
                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                {{trans('greeting.carphoto')}} {{$error_logo}}
                                                                            </strong>
                                                                        @else

                                                                            <strong>

                                                                                {{ $error_logo}}
                                                                            </strong>
                                                                        @endif
                                                                        <br />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <!--end photo1-->
                                                <!--detail div-->
                                                <div class="form-group col-sm-12 col-md-6">
                                                    {!! Form::label('form-field-1',trans('greeting.detail'),array('class'=>'form-font')) !!}
                                                    {!! Form::textarea('detail',null,['class'=>'form-control form-custom','id'=>'form-field-1','required'=>'required/']) !!}
                                                    @if($errors->has('detail'))
                                                        @foreach ($errors->get('detail') as $error_detail)
                                                            <div class="row">
                                                                <div class="col-xs-12">

                                                                    <div class="alert alert-danger" style="padding:4px">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                        </button>

                                                                        @if(preg_match('/mm/',\Request::PATH()))
                                                                            <strong>

                                                                                {{trans('greeting.detail')}} {{$error_detail}}
                                                                            </strong>
                                                                        @else
                                                                            <strong>
                                                                                <i class="ace-icon fa fa-times"></i>
                                                                                {{$error_detail}}
                                                                            </strong>
                                                                        @endif
                                                                        <br />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                </div>
                                                <!--end detail div-->
                                            </div>
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