@extends('masterfront')
@section('content')
    <?php
    //this is for language path en or mm
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
                                                @foreach ($news as $row)

                                                    <div class="row-item">
                                                        <div class="inner">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-5 col-sm-5">
                                                                    <div class="picture">


                                                                        <!-- /.slide -->
                                                                        <!-- /.slide -->
                                                                        <!-- /.slide -->
                                                                        <!-- /.slide -->


                                                                        <a  href="#"
                                                                                class="slide cycle-slide cycle-slide-active">
                                                                            <img src="{{asset('backend/images/newlist')}}/{{$row->photo}}"
                                                                                 alt="#">
                                                                        </a>

                                                                    </div><!-- /.picture -->
                                                                </div><!-- /.col-md-4 -->

                                                                <div class="col-lg-8 col-md-7 col-sm-7">

                                                                    <div class="content-inner">
                                                                        <h3>
                                                                            <a href="#" style="color:#ab650a;">
                                                                                {{str_limit($row->name,25)}}
                                                                            </a>
                                                                        </h3>

                                                                        <!-- /.subtitle -->

                                                                        <div class="price">
                                                                            {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$row->uploat_at)->format('Y')}}
                                                                            &nbsp;&nbsp; {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$row->uploat_at)->format('F')}}
                                                                            &nbsp;&nbsp;{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$row->uploat_at)->format('j')}}


                                                                        </div><!-- /.price -->

                                                                        <div class="description">
                                                                            <p style="font-weight:bold;color:black;word-break:break-all"> {{str_limit($row->description,93) }}
                                                                            </p>
                                                                        </div><!-- /.description -->

                                                                        <div class="meta">
                                                                            <ul>

                                                                                <li style="background-color:white;">

                                                                                    <a href="{{url('/'.$lang_path.'/detailnew/'.$row->id)}}"
                                                                                       class="btn btn-small hvr-underline-from-center btn-danger smallbuttom">
                                                                                        {{trans('greeting.readmore')}}                                                                                    </a>

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
                                                {!! (new App\Pagination($news))->render() !!}
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

