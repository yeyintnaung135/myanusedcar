@extends('masterfront')
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

                    <div class="col-md-9">

                        <div id="main">
                            <div class="row-block block block-margin">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content white">
                                            <div class="inner">
                                                <?php
                                                if(count($results) == 0)//if result count value is 0
                                                {
                                                ?>
                                                <div style="text-align:center;color:#ab650a;">
                                                    <h3>Sorry! {{trans('greeting.empty')}}</h3>
                                                </div>
                                                <?php
                                                }
                                                ?>

                                                @foreach ($results as $row)

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
                                                                        <h3>

                                                                             {{str_limit($row->brand,12)}}


                                                                        </h3>

                                                                        <!-- /.subtitle -->

                                                                        <div class="price"
                                                                             style="font-size:18px;">{{$row->price}}{{trans('greeting.lakh')}}
                                                                        </div>
                                                                        <div class="description"
                                                                             style="color:#6f6666;font-size:16px;">
                                                                            <ul>
                                                                                <li> Model : {{str_limit($row->model,16)}}</li>
                                                                                <li> Engine : {{$row->engine}}</li>
                                                                                <li> {{trans('greeting.yearlist')}} : {{$row->year}}</li>

                                                                            </ul>
                                                                        </div><!-- /.description -->


                                                                        <div class="metas">
                                                                            <ul>
                                                                                <li>
                                                                                    <i class="icon icon-normal-dashboard"></i>
                                                                                    {{$row->year}}
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icon icon-normal-car-door"></i>
                                                                                    {{$row->fuel}}
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icon icon-normal-cog-wheel"></i>
                                                                                    {{$row->transmittion}}
                                                                                </li>
                                                                                <li style="background-color:white;">

                                                                                    <a href="{{url('/'.$lang_path.'/detail/'.$row->id)}}"
                                                                                       class="btn btn-small hvr-underline-from-center btn-danger smallbuttom">
                                                                                        {{trans('greeting.readmore')}}
                                                                                        <i class="icon icon-normal-right-arrow-small"></i>
                                                                                    </a>

                                                                                </li>
                                                                            </ul>
                                                                        </div><!-- /.meta -->
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
                                                {!! (new App\Pagination($results))->render() !!}
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
