<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <a style='width:100%;margin-bottom:2%;' data-target="#test" href="javascript:void()" class="morphbutton btn btn-lg hvr-underline-from-center btn-danger smallbuttom">{{trans('greeting.searchbtn')}}
        .
        <i style="font-weight: bolder" class="glyphicon glyphicon-search"></i>

    </a>

</div>
<div class="container morphbutton-content" id="test">

    <div class="box">
        <div class="col-md-12 col-xs-12 " style="margin-top:23px;background:white;">
            <div class="filter-block">
                <div class="block">
                    <button type="button" class="btn btn-small btn-danger morphbutton-close" style="color:white;background:#F74949;                    border-radius:0px;margin:1px 1px 1px 2px;">{{trans('greeting.close')}}
                        <span class="glyphicon glyphicon-remove"></span></button>
                    <div class='detailbrand'>
                        <h2>{{trans('greeting.search_title')}}</h2>

                    </div>
                    <div style="clear:both;">&nbsp;</div>
                    <div class="content">
                        <div class="inner">
                            <div class="tab-content">
                                <div class="tab-pane active" id="search-sales">
                                    {!! Form::open(['method'=>'GET','url'=>'/'.$lang_path.'/search_result']) !!}
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <select name="brand" class="form-control">
                                                <option value='' style="color:black;background-color:white;" selected="selected">{{trans('greeting.brand')}}
                                                </option>
                                                <option value=''>Any</option>
                                                <option value="Aston Martin">Aston Martin</option>
                                                <option value="Audi">Audi</option>
                                                <option value="BMW">BMW</option>
                                                <option value="Bentley">Bentley</option>
                                                <option value="Bugatti">Bugatti</option>
                                                <option value="Buick">Buick</option>
                                                <option value="BAIC">BAIC</option>
                                                <option value="Brilliance">Brilliance</option>


                                                <option value="Cadillac">Cadillac</option>
                                                <option value="Chevrolet">Chevrolet</option>
                                                <option value="Chrysler">Chrysler</option>
                                                <option value="Daihatsu">Daihatsu</option>

                                                <option value="DAF">DAF</option>
                                                <option value="Dodge">Dodge</option>
                                                <option value="FIAT">FIAT</option>
                                                <option value="Foton">Foton</option>

                                                <option value="Ferrari">Ferrari</option>
                                                <option value="Ford">Ford</option>
                                                <option value="GMC">GMC</option>
                                                <option value="Geely">Geely</option>
                                                <option value="HUMMER">HUMMER</option>
                                                <option value="Hino">Hino</option>
                                                <option value="Honda">Honda</option>
                                                <option value="Hyundai">Hyundai</option>

                                                <option value="Iveco">Iveco</option>
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
                                                <option value="Scania">Scania</option>

                                                <option value="Tesla">Tesla</option>
                                                <option value="Toyota">Toyota</option>
                                                <option value="Vauxhall">Vauxhall</option>
                                                <option value="Volkswagen">Volkswagen</option>
                                                <option value="Volvo">Volvo</option>
                                                <option value="Yutong">Yutong</option>

                                            </select>
                                            <div title="" style="width: 223px;" class="chosen-container chosen-container-single">

                                                <div class="chosen-drop">
                                                    <div class="chosen-search">
                                                        <input autocomplete="off" type="text">
                                                    </div>
                                                    <ul class="chosen-results"></ul>
                                                </div>
                                            </div>
                                        </div><!-- /.form-group -->
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <select name="year" class="form-control">
                                                <option value='' style="color:black;background-color:white;" selected="selected">{{trans('greeting.year')}}
                                                </option>
                                                <option value=''>Any</option>
                                                @foreach($year as $each_year)
                                                    <option value='{{$each_year}}'>{{$each_year}}</option>
                                                @endforeach
                                            </select>
                                            <div title="" style="width: 223px;" class="chosen-container chosen-container-single">

                                                <div class="chosen-drop">
                                                    <div class="chosen-search">
                                                        <input autocomplete="off" type="text">
                                                    </div>
                                                    <ul class="chosen-results"></ul>
                                                </div>
                                            </div>
                                        </div><!-- /.form-group -->
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <select name="type" class="form-control">
                                                <option value='' style="color:black;background-color:white;" selected="selected">{{trans('greeting.body')}}
                                                </option>
                                                <option value=''>Any</option>

                                                <option value='wagon'>Wagon</option>
                                                <option value='toyota'>Raider</option>
                                                <option value="bmw">BMW</option>
                                            </select>
                                            <div title="" style="width: 223px;" class="chosen-container chosen-container-single">

                                                <div class="chosen-drop">
                                                    <div class="chosen-search">
                                                        <input autocomplete="off" type="text">
                                                    </div>
                                                    <ul class="chosen-results"></ul>
                                                </div>
                                            </div>
                                        </div><!-- /.form-group -->
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <select name="transmittion" class="form-control">
                                                <option value='' style="color:black;background-color:white;" selected="selected">{{trans('greeting.transmittion')}}
                                                </option>
                                                <option value=''>Any</option>

                                                <option value='Auto'>Auto</option>
                                                <option value='Manual'>Manual</option>
                                                <option value='Auto/Manual'>Auto/Manual</option>


                                            </select>
                                            <div title="" style="width: 223px;" class="chosen-container chosen-container-single">

                                                <div class="chosen-drop">
                                                    <div class="chosen-search">
                                                        <input autocomplete="off" type="text">
                                                    </div>
                                                    <ul class="chosen-results"></ul>
                                                </div>
                                            </div>
                                        </div><!-- /.form-group -->
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <select name="price" class="form-control">
                                                <option value='' style="color:black;background-color:white;" selected="selected">{{trans('greeting.price')}}
                                                </option>
                                                <option value=''>Any</option>
                                                <option value='under100'>Under 100{{trans('greeting.lakh')}}</option>
                                                <option value='be100and200'>between 100{{trans('greeting.lakh')}} and
                                                    200{{trans('greeting.lakh')}}</option>
                                                <option value='be200and300'>between 200{{trans('greeting.lakh')}} and
                                                    300{{trans('greeting.lakh')}}</option>
                                                <option value='be300and400'>between 300{{trans('greeting.lakh')}} and
                                                    400{{trans('greeting.lakh')}}</option>
                                                <option value='be400and500'>between 400{{trans('greeting.lakh')}} and
                                                    500{{trans('greeting.lakh')}}</option>
                                                <option value='be500and1000000'>upper 500{{trans('greeting.lakh')}}</option>



                                            </select>
                                            <div title="" style="width: 223px;" class="chosen-container chosen-container-single">

                                                <div class="chosen-drop">
                                                    <div class="chosen-search">
                                                        <input autocomplete="off" type="text">
                                                    </div>
                                                    <ul class="chosen-results"></ul>
                                                </div>
                                            </div>
                                        </div><!-- /.form-group -->
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <select name="town" class="form-control">
                                                <option value='' style="color:black;background-color:white;" selected="selected">{{trans('greeting.state')}}
                                                </option>
                                                <option value=''>Any</option>
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
                                            <div title="" style="width: 223px;" class="chosen-container chosen-container-single">

                                                <div class="chosen-drop">
                                                    <div class="chosen-search">
                                                        <input autocomplete="off" type="text">
                                                    </div>
                                                    <ul class="chosen-results"></ul>
                                                </div>
                                            </div>
                                        </div><!-- /.form-group -->
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <button class="send hvr-underline-from-center btn btn-primary btn-primary-color">
                                                {{trans('greeting.search')}}
                                                <i class="icon icon-normal-right-arrow-small"></i>
                                            </button>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.row -->


                                    {!! Form::close() !!}
                                </div><!-- /.tab-pane -->


                            </div><!-- /.tab-content -->
                        </div><!-- /.inner -->
                    </div><!-- /.content -->
                </div><!-- /.block -->
            </div><!-- /.filter-block -->
        </div><!-- /.col-md-3 -->
    </div><!-- /.row -->
</div>