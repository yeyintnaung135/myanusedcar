@extends('masterads')
@section('header')
    @parent
@endsection
@section('content')
    <?php
    if(preg_match('/mm/',\Request::PATH()))
    {
        $lang_path='mm';
    }
    else{$lang_path='en';}
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
                            <a href="{{url('/'.$lang_path.'/user/'.Auth::user()->id.'/carpostlist')}}">Home</a>
                        </li>

                        <li>
                            <a href="#">Details of Car</a>
                        </li>

                    </ul><!-- /.breadcrumb -->

                    <div class="nav-search" id="nav-search">

                    </div><!-- /.nav-search -->
                </div>

                <div class="page-content">

                    <div class="page-header">
                        <h1>
                            Grid
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                Car's Detail
                            </small>
                        </h1>
                    </div><!-- /.page-header -->

                    <div class="row">
                        <div class="col-xs-4 bold" style="word-break:break-all;">{{trans('greeting.brand')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 " style="word-break:break-all;">{{$detail->brand}}</div>
                        <div style="clear:both;">&nbsp;</div>

                        <div class="col-xs-4 bold">Model</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 "style="word-break:break-all;">{{$detail->model}}</div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.price')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 ">{{$detail->price}}{{trans('greeting.lakh')}}</div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.detail')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 ">{{$detail->detail}}</div>

                        <div style="clear:both;">&nbsp;</div>

                        <div class="col-xs-4 bold">{{trans('greeting.doors')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 ">   {{$detail->doors}}</div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.fuel')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 ">{{$detail->fuel}}</div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.year')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 ">{{$detail->year}}</div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.body')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 ">{{$detail->body_type}}</div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.transmittion')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 ">{{$detail->transmittion}}</div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.excolor')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 ">{{$detail->exterior_color}}</div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.incolor')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 ">{{$detail->interior_color}}</div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">Kilo</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 ">{{$detail->km}}&nbsp;&nbsp;Kilo</div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.detail')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 ">{{$detail->detail}}</div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.view')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 ">{{$detail->view_count}}</div>
                        <div style="clear:both;">&nbsp;</div>


                        <div class="col-xs-4 bold">{{trans('greeting.carfrontphoto')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 "><img style="width:90%;" src="{{asset('backend/images/carlist/'.$detail->photo2)}}"
                                                    />
                        </div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.carbackphoto')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 "><img style="width:90%;" src="{{asset('backend/images/carlist/'.$detail->photo3)}}"
                                                    />
                        </div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.carenginephoto')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 "><img style="width:90%;" src="{{asset('backend/images/carlist/'.$detail->photo4)}}"
                                                    />
                        </div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.innerphoto')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 "><img style="width:90%;" src="{{asset('backend/images/carlist/'.$detail->photo5)}}"
                                                    />
                        </div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.photo6')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 "><img style="width:90%;" src="{{asset('backend/images/carlist/'.$detail->photo6)}}"
                                                    />
                        </div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.photo7')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 "><img style="width:90%;" src="{{asset('backend/images/carlist/'.$detail->photo7)}}"
                                                    />
                        </div>
                        <div style="clear:both;">&nbsp;</div>

                        <div class="col-xs-4 bold">{{trans('greeting.carphoto')}}</div>
                        <div class="col-xs-1 ">:</div>
                        <div class="col-xs-7 "><img style="width:90%;" src="{{asset('backend/images/carlist/'.$detail->photo1)}}"/>
                        </div>
                        <div style="clear:both;">&nbsp;</div>
                        <div class="col-xs-4 bold">{{trans('greeting.uploadat')}}</div>
                        <div class="col-xs-1">:</div>
                        <div class="col-xs-7 ">{{$detail->uploat_at}}</div>
                        <div style="clear:both;">&nbsp;</div>
                    </div><!-- /.row -->
                    <div class="row"><a href="{{asset('/'.$lang_path.'/user/'.Auth::user()->id.'/edit_car/'.$detail->id)}}" class="btn btn-success"
                                        id="gritter-sticky" style="float:left;margin-right:1%">{{trans('greeting.edit')}}</a>
                        <button class="btn btn-danger" onclick="delete_record({{$detail->id}});" id="gritter-error">
                            {{trans('greeting.delete')}}
                        </button>
                    </div>
                    <script>
                        function delete_record(id) {
                            var del = window.confirm("{{trans('greeting.deletemsg')}}");
                            if (del == true) {
                                window.location.assign("{{asset('/'.$lang_path.'/user/'.Auth::user()->id.'/delete_car/')}}/" + id);
                            }
                        }
                    </script>

                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Myanusedcar</span>
                            &copy; 2016-2017
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