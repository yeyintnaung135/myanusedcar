@extends('masterfront')
@section('content')
    <?php
    if (preg_match('/mm/', \Request::PATH())) {
        $lang_path = 'mm';
    } else {
        $lang_path = 'en';
    }
    ?>
    @foreach($each as $car)
    @endforeach

    <div id="content">
        <div class="section gray-light">
            <div class="container">
                    <div class="row"
                     style="background-color:white;margin:0.1%;border:1px solid rgb(214, 116, 72);margin-bottom:15px;">
                    <div class="col-xs-12">

                             <div class="row">
                                 <div class="col-xs-1 col-md-3">
                                     &nbsp;
                                 </div>

                                 <div class="col-xs-11 col-md-6" style="text-align: center;margin-bottom:2px;">
                                  <h2 class="detailbrand">{{str_limit($car->brand,20)}}</h2>







                                <div class="detailmodel">{{str_limit($car->model,20)}} &nbsp;<span
                                            class="spanprice">{{'( '}}{{str_limit($car->price,9)}}{{trans('greeting.lakh')}}{{' )'}}</span>
                                    <span style="color:blue;font-size:15px;font-weight:bolder;">
                                        ({{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$car->uploat_at)->format('Y')}}
                                        /{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$car->uploat_at)->format('F')}}
                                        /{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$car->uploat_at)->format('j')}}
                                        )
</span>
                                </div>

                            </div><!-- /.buy-it-now -->
                                 <div class="col-xs-12 col-md-3" style="text-align: center;margin-bottom:12px;">
                                     <div id="fb-root"></div>
                                     <!--fb jssdk-->
                                     <script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=909441502519108";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
                                     <!--end sdk-->
<div onclick="shareme(lk='<?php echo 'http://www.myanusedcar.rf.gd/backend/images/carlist/'.$car->photo2;?>',mdl='<?php echo $car->model;?>',pri='<?php echo $car->price;?>',ttl='<?php echo $car->brand;?>',dsp='<?php  $str=$car->detail;$str=str_replace(array("\r","\n"), "", $str);$nobstr=nl2br($str);echo str_limit( $nobstr,80);?>');" class="fb-share btn btn-info clearfix" style="border:2px solid #4267b2 !important;background-color:#4267b2;margin-top:4px;"><span class="glyphicon glyphicon-share-alt"></span>&nbsp;Share on facebook</div>

                                     <script>

function shareme(lk)
{

    FB.ui({
        method: 'feed',
        display:'popup',
        link:window.location.href,
        name:ttl+'  '+mdl+'  (သိန္း'+pri+')',
        caption:'www.myanusedcar.rf.gd',
        picture:lk,
        description:dsp,

    }, function (response) {
if(response['post_id'] !==null){
window.alert('This car is successfully share to your facebook');
}
    });
}
</script>
                                 </div>

                        </div><!-- /.action-buttons -->
                    </div>
                </div>


                <div class="row">
                    <div id="main">
                        <div class="car car-detail">
                            <div class="col-md-6 col-sm-12">

                                <div id="gallery-wrapper">
                                    <div>
                                        <div>
                                            <div class="gallery">
                                                <div class="slide">
                                                    <div class="picture-wrapper">
                                                        <img src="{{asset('backend/images/carlist')}}/{{$car->photo2}}"
                                                             alt="#">
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <div class="picture-wrapper">
                                                        <img src="{{asset('backend/images/carlist')}}/{{$car->photo1}}"
                                                             alt="#">
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <div class="picture-wrapper">
                                                        <img src="{{asset('backend/images/carlist')}}/{{$car->photo3}}"
                                                             alt="#">
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <div class="picture-wrapper">
                                                        <img src="{{asset('backend/images/carlist')}}/{{$car->photo4}}"
                                                             alt="#">
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <div class="picture-wrapper">
                                                        <img src="{{asset('backend/images/carlist')}}/{{$car->photo5}}"
                                                             alt="#">
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <div class="picture-wrapper">
                                                        <img src="{{asset('backend/images/carlist')}}/{{$car->photo6}}"
                                                             alt="#">
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <div class="picture-wrapper">
                                                        <img src="{{asset('backend/images/carlist')}}/{{$car->photo7}}"
                                                             alt="#">
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="bx-controls"></div>
                                    </div><!-- /.gallery -->

                                          <!--pagination div-->
                                    <div id="gallery-pager" class="white block-shadow">
                                        <div class="prev">
                                        </div>

                                        <div class="pager">
                                            <div class="">
                                                <!--for thumb pagnitaion can not delete it-->
                                            </div>
                                        </div>

                                        <div class="next">
                                        </div>
                                    </div><!-- /#gallery-pager -->


                                    <div class="gallery-thumbnails">
                                        <div class="thumbnail-0">
                                            <img src="{{asset('backend/images/carlist')}}/{{$car->photo2}}"
                                                 alt="#">
                                        </div>
                                        <div class="thumbnail-1">
                                            <img src="{{asset('backend/images/carlist')}}/{{$car->photo1}}"
                                                 alt="#">
                                        </div>
                                        <div class="thumbnail-2">
                                            <img src="{{asset('backend/images/carlist')}}/{{$car->photo3}}"
                                                 alt="#">
                                        </div>
                                        <div class="thumbnail-3">
                                            <img src="{{asset('backend/images/carlist')}}/{{$car->photo4}}"
                                                 alt="#">
                                        </div>
                                        <div class="thumbnail-4">
                                            <img src="{{asset('backend/images/carlist')}}/{{$car->photo5}}"
                                                 alt="#">
                                        </div>

                                        <div class="thumbnail-5">
                                            <img src="{{asset('backend/images/carlist')}}/{{$car->photo6}}"
                                                 alt="#">
                                        </div>
                                        <div class="thumbnail-6">
                                            <img src="{{asset('backend/images/carlist')}}/{{$car->photo7}}"
                                                 alt="#">
                                        </div>


                                    </div><!-- /.gallery-thumbnails -->

                                </div> <!-- /#gallery-wrapper -->


                                <div class="overview">
                                    <div data-easytabs="true" id="tab-container" class="tab-container">


                                        <div class="block white block-shadow" style="border:1px solid  rgba(76, 68, 68, 0.29);">
                                            <div class="block-inner">
                                                <div class="dis" id="overview">
                                                    <div class="row">
                                                        <div class="heading">
                                                            <h3 style="color:#ab650a;">{{trans('greeting.overview')}}</h3>
                                                        </div><!-- /.heading -->

                                                        <div class="col-sm-12 col-md-12">
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <td class="property">{{trans('greeting.brand')}}</td>
                                                                    <td class="value">{{str_limit($car->brand,35)}} </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="property">Model</td>
                                                                    <td class="value">{{str_limit($car->model,35)}} </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="property">{{trans('greeting.linc')}}</td>
                                                                    <td class="value">{{str_limit($car->license,35)}} </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="property">{{trans('greeting.fuel')}}</td>
                                                                    <td class="value">{{$car->fuel}}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="property">Engine</td>
                                                                    <td class="value">{{$car->engine}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="property">{{trans('greeting.year')}}</td>
                                                                    <td class="value">{{$car->year}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="property">{{trans('greeting.price')}}</td>
                                                                    <td class="value">{{$car->price}}{{trans('greeting.lakh')}}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="property">{{trans('greeting.year')}}</td>
                                                                    <td class="value">{{$car->year}}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="property">{{trans('greeting.body')}}</td>
                                                                    <td class="value">{{$car->body_type}}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="property">{{trans('greeting.transmittion')}}</td>
                                                                    <td class="value">{{$car->transmittion}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="property">Kilo</td>
                                                                    <td class="value">{{$car->km}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="property">{{trans('greeting.doors')}}</td>
                                                                    <td class="value">{{$car->doors}}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="property">{{trans('greeting.excolor')}}</td>
                                                                    <td class="value">{{$car->exterior_color}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="property">{{trans('greeting.incolor')}}</td>
                                                                    <td class="value">{{$car->interior_color}}</td>
                                                                </tr>


                                                                </tbody>
                                                            </table><!-- /.table -->
                                                        </div><!-- /.col-md-7 -->

                                                    </div><!-- /.row -->


                                                </div><!-- /#overview -->


                                            </div><!-- /.block-inner -->
                                        </div><!-- /.block -->
                                    </div><!-- /#tab-container -->
                                </div><!-- ./overview -->


                            </div>
                            <!--appliances-->
                            <div class="col-md-6 col-sm-12 " style="margin-bottom: 16px;">
                                <div class=" ">
                                    <div class="clear white cntmargin"
                                         style="border:1px solid  rgba(76, 68, 68, 0.29);">
                                        <div class="info" style="color:#6f6666;padding:2px;">
                                            <div class="heading">
                                                <h3 style="color:#ab650a;">{{trans('greeting.appliances')}}</h3>
                                            </div><!-- /.heading -->
                                            <div class="row" style="margin:3px;height:222px;overflow-y: auto;">

                                                <?php
                                                //firstly we need to change appliances string from car object as a array cut by ,because we accept tags as astring
                                                $appliance = explode(',', $car->appliances);

                                                ?>
                                                @foreach($appliance as $app)


                                                    @if($app=='Tag Input Control')
                                                    @else
                                                        <div class="col-sm-4 col-md-4" >
                                                            <ul class="appliances">
                                                                <li style="word-break: break-all;">
                                                                    <span class="dot"></span>
                                                                    {{$app}}
                                                                </li>
                                                            </ul><!-- /.appliances -->
                                                        </div><!-- /.col-md-6 -->

                                                    @endif


                                                @endforeach

                                            </div><!-- /.row -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end appliances-->

                            <!--this is detil-->
                            <div class="col-md-6 col-sm-12" style="margin-bottom:16px;">
                                <div style=""><!--for detail-->
                                    <div class="clear white cntmargin"
                                         style="border:1px solid  rgba(76, 68, 68, 0.29);height:300px;">
                                        <div class="info" style="color:#6f6666;padding:2px;">

                                            <h3 style="color:#ab650a">{{trans('greeting.detail')}}</h3>
                                            <div style="border:2px dotted rgba(76, 68, 68, 0.29);margin:12px;height:230px;overflow-y:auto;">
                                                <p style="">
                                                <h4 style="text-indent: 12px;padding:5px;text-align:justify;word-break: break-all;">{{$car->detail}}</h4>  </p>
                                            </div>

                                        </div><!-- /.info --></div>
                                </div>
                            </div>
                            <!--end detail-->
                            <!--contact info-->
                            <div class="col-md-6 col-sm-12">
                                <div class="block block-shadow statistic white block-margin"
                                     style="border:1px solid  rgba(76, 68, 68, 0.29);">
                                    <div class="block-inner">
                                        <div class="row">
                                            <div class="block" style="color:#6f6666;">
                                                <div class="block white">
                                                    <div class="block-inner">
                                                        <div>
                                                            <div class="row">
                                                                <div class="heading">
                                                                    <h3 style="color:#ab650a;">{{trans('greeting.contactinfo')}}</h3>
                                                                </div><!-- /.heading -->

                                                                <div class="col-sm-12 col-md-12 overview">
                                                                    <table class="table">
                                                                        <tbody style="text-align:center;">
                                                                        <tr>
                                                                            <td class="property">{{trans('greeting.cntname')}}</td>
                                                                            <td class="value">{{$owner->name}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="property">{{trans('greeting.cntphone')}}</td>
                                                                            <td class="value">{{$owner->phone}}</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="property">{{trans('greeting.cntmail')}}</td>
                                                                            <td class="value">{{$owner->email}}</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="property">{{trans('greeting.state')}}</td>

                                                                            <td class="value">{{$owner->town}}</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="property">{{trans('greeting.cntadd')}}</td>

                                                                            <td class="value">{{$owner->address}}</td>
                                                                        </tr>


                                                                        </tbody>
                                                                    </table><!-- /.table -->
                                                                </div><!-- /.col-md-7 -->
                                                            </div><!-- /.row -->


                                                        </div><!-- /#overview -->
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end contact-->
                            <!--mail will put this div later
                            <div class="col-md-6 col-sm-12">
                                <div class="block block-shadow statistic white block-margin" style="border:1px solid  rgba(76, 68, 68, 0.29);">
                                    <div class="block-inner">
                                        <div class="row">
                                            <div class="block" style="color:#6f6666;">
                                                <div class="page-header center">
                                                    <div class="page-header-inner">
                                                        <div class="line">
                                                            <hr>
                                                        </div>

                                                        <div class="heading">
                                                            <h3 style="font-size:18px;">{{trans('greeting.owneremail')}}</h3>
                                                        </div>

                                                        <div class="line">
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>

                                                <form>

                                                    <div class="form-inline">
                                                        <div class="form-group col-sm-4 col-md-4">
                                                            <label style="font-size:14px;">{{trans('greeting.mailname')}}</label>
                                                            <input type="text" name="full-name"
                                                                   placeholder="{{trans('greeting.exname')}}"
                                                                   class="form-control">
                                                        </div>
                                                        <div class="form-group col-sm-4 col-md-4">
                                                            <label style="font-size:14px;">{{trans('greeting.mailemail')}}</label>
                                                            <input type="text" name="mail"
                                                                   placeholder="{{trans('greeting.exemail')}}"
                                                                   class="form-control">
                                                        </div>
                                                        <div class="form-group col-sm-4 col-md-4">
                                                            <label style="font-size:14px;">{{trans('greeting.mailsubject')}}</label>
                                                            <input type="text" name="subject"
                                                                   placeholder='{{trans('greeting.exsubject')}}'
                                                                   class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="textarea form-group col-sm-12 col-md-12">
                                                        <label style="font-size:14px;">{{trans('greeting.mailmessage')}}</label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="form-group col-md-3">
                                                        <button class="btn btn-primary btn-block"
                                                                type="button">{{trans('greeting.subscribebutton')}}
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                          -->
                    @if(count($sim)>0)
                        <div class="row">
                            <div class="col-md-12">
                                <div id="recent-cars" class="grid-block block">
                                    <div class="page-header">
                                        <div class="page-header-inner">
                                            <div class="heading">
                                                <h2>{{trans('greeting.simcars')}}</h2>
                                            </div><!-- /.heading -->

                                            <div class="line">
                                                <hr>
                                            </div><!-- /.line -->
                                        </div><!-- /.page-header-inner -->
                                    </div><!-- /.page-header -->
                                    <div class="col-sm-12">

                                        <div class="bx-wrapper inner-block white">
                                            <div>
                                                <div class="grid-carousel">
                                                    @foreach($sim as $s)
                                                        <div class="inner" style="margin-left:0px;">
                                                            <div class="grid-item">
                                                                <div class="inner">
                                                                    <div class="picture">
                                                                        <div style="position: relative;"
                                                                             class="image-slider">

                                                                            <!-- /.slide -->
                                                                            <!-- /.slide -->
                                                                            <!-- /.slide -->
                                                                            <!-- /.slide -->

                                                                            <a href="{{route('detail',['lang'=>$lang_path,'id'=>$s->id])}}">
                                                                                <img src="{{asset('backend/images/carlist')}}/{{$s->photo1}}"
                                                                                     alt="#">
                                                                            </a>


                                                                        </div><!-- /.image-slider -->
                                                                    </div><!-- /.picture -->
                                                                    <h3>
                                                                        {{str_limit($s->brand,13)}}
                                                                        <div class="model">{!! '( ' !!}{{str_limit($s->model,13)}}{!! ' )' !!}</div>

                                                                    </h3>
                                                                    <div class="price"
                                                                         style="font-size:18px;">{{$s->price}}{{trans('greeting.lakh')}}
                                                                    </div>
                                                                    <div class="description"
                                                                         style="color:#6f6666;font-size:16px;">

                                                                    </div><!-- /.description -->

                                                                          <!-- /.subtitle -->

                                                                    <div class="price">
                                                                        <a href="{{route('detail',['lang'=>$lang_path,'id'=>$s->id])}}"
                                                                           class="btn btn-small hvr-underline-from-center btn-danger smallbuttom">
                                                                            {{trans('greeting.readmore')}} <i
                                                                                    class="icon icon-normal-right-arrow-small"></i>

                                                                        </a>


                                                                    </div><!-- /.price -->

                                                                </div><!-- /.inner -->
                                                            </div><!-- /.grid-item -->
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div><!-- /.grid-carousel -->
                                    </div>


                                    <div class="col-md-12">


                                        <div id="grid-carousel-pager">
                                            <div class="prev">

                                            </div><!-- /.prev -->
                                            <div class="next">

                                            </div><!-- /.next -->
                                        </div><!-- /.grid-carousel-pager -->
                                    </div>


                                </div><!-- /.grid-block -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                              @endif
                                      <!-- /#mainmini -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.container -->
        </div><!-- /.section -->
    </div>
@endsection