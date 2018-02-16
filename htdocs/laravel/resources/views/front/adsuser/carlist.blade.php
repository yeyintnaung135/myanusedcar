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
                <div class="row" style="background-color:white;margin:0.1%;border:1px solid rgb(214, 116, 72);margin-bottom:15px;">


                    <div class="col-xs-12">

                        <div class="col-xs-1 col-sm-3">
                        </div>

                        <div class="col-xs-11 col-sm-6" style="text-align: center;margin-bottom:2px;">
                            <h2 class="detailbrand">{{trans('greeting.carlist')}}</h2>


                        </div><!-- /.buy-it-now -->
                        <div class="col-xs-12 col-sm-3" style="text-align: center;margin-bottom:9px;font-weight:bolder;font-size:22px;color:red;">
                            {{$carcount}} စီး


                        </div>
                    </div>
                </div>



                <div class="row">

                    <div class="col-md-12">

                        <div id="main">
                            <div class="row-block block block-margin">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content white">
                                            <div class="inner">
                                                <?php
                                                if(count($cars) == 0)//if result count value is 0
                                                {
                                                ?>
                                                <div style="text-align:center;color:#ab650a;">
                                                    <h3>{{trans('greeting.emptyusercars')}}</h3>
                                                </div>
                                                <?php
                                                }
                                                ?>

                                                @foreach ($cars as $row)

                                                    <div class="row-item">
                                                        <div class="inner">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-5 col-sm-5">
                                                                    <div class="picture">


                                                                        <!-- /.slide -->
                                                                        <!-- /.slide -->
                                                                        <!-- /.slide -->
                                                                        <!-- /.slide -->


                                                                        <a href="{{url('/'.$lang_path.'/detail/'.$row->id)}}">

                                                                            <img style="height:190px;"
                                                                                 src="{{asset('backend/images/carlist')}}/{{$row->photo2}}"
                                                                                 alt="#">
                                                                        </a>

                                                                    </div><!-- /.picture -->
                                                                </div><!-- /.col-md-4 -->

                                                                <div class="col-lg-8 col-md-7 col-sm-7">

                                                                    <div class="content-inner">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <h3>

                                                                                    {{str_limit($row->brand,12)}}


                                                                                </h3>
                                                                            </div>
                                                                            <div class="col-sm-6">

                                                                            </div>
                                                                        </div>

                                                                        <!-- /.subtitle -->

                                                                        <div class="price"
                                                                             style="font-size:18px;">{{$row->price}}{{trans('greeting.lakh')}}
                                                                        </div>
                                                                        <div class="description"
                                                                             style="color:#6f6666;font-size:16px;">
                                                                            <ul>
                                                                                <div> Model : {{str_limit($row->model,16)}}</div>
                                                                                <div> Engine : {{$row->engine}}</div>
                                                                                <div> {{trans('greeting.yearlist')}} : {{$row->year}}&nbsp;&nbsp;&nbsp;See-count:{{$row->view_count}}</div>

                                                                            </ul>
                                                                        </div><!-- /.description -->


                                                                        <div style="background-color:white;margin-bottom:2px;margin-top:3px;">

                                                                            <a href="{{url('/'.$lang_path.'/detail/'.$row->id)}}"
                                                                               class="btn btn-small hvr-underline-from-center btn-danger smallbuttom fa fa-search smactionbtn">
                                                                                <i class=""></i>
                                                                                {{trans('greeting.see')}}
                                                                                <i class="icon icon-normal-right-arrow-small"></i>
                                                                            </a>

                                                                            <a href="{{url('/'.$lang_path.'/user/'.$row->user_id.'/edit_car/'.$row->id)}}"
                                                                               class="btn btn-small hvr-underline-from-center btn-danger smallbuttom fa fa-edit smactionbtn">
                                                                                {{trans('greeting.editcar')}}
                                                                                <i class="icon icon-normal-right-arrow-small"></i>
                                                                            </a>
                                                                            <a href="javascript:void();" onclick="delete_record(<?php echo $row->id;?>);"
                                                                               class="btn btn-small hvr-underline-from-center btn-danger smallbuttom fa fa-trash smactionbtn">
                                                                                {{trans('greeting.deletecar')}}
                                                                                <script>
                                                                                    function delete_record(id) {
                                                                                        var del = window.confirm("{{trans('greeting.deletemsg')}}");
                                                                                        if (del == true) {
                                                                                            window.location.assign("{{asset('/'.$lang_path.'/user/'.Auth::user()->id.'/delete_car/')}}/" + id);
                                                                                        }
                                                                                    }
                                                                                </script>
                                                                                <i class="icon icon-normal-right-arrow-small"></i>
                                                                            </a>

                                                                        </div>
                                                                    </div><!-- /.content-inner -->
                                                                </div><!-- /.col-md-8 -->
                                                            </div><!-- /.row -->
                                                        </div><!-- /.inner -->
                                                    </div><!-- /.row-item -->
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="filter-pager" class="block">
                                    <div class="block-inner gray">
                                        <div class="pager">
                                            <div class="row">
                                                {!! (new App\Pagination($cars))->render() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /#mainmini -->
                    </div>
                    <!--search sibe div-->
                    @parent
                            <!--search sibe div-->
                </div>
            </div>
        </div>
    </div>
@endsection
