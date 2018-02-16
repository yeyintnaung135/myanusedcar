@extends('masterfront')
@section('content')
    <div id="content" class="page-about">


        <!-- /.section -->

        <div class="section gray-light">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="block block-shadow block-margin white contact">
                            <div class="block-inner">
                                @foreach($new as $row)
                                @endforeach
                                <div class="row">
                                    <div class="article">
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="inner">
                                                <div class="picture">
                                                    <img src="{{asset('backend/images/newlist/'.$row->photo)}}" alt="#">
                                                </div><!-- /.picture -->
                                            </div><!-- /.inner -->
                                        </div>

                                        <div class="col-xs-12 col-sm-8 col-md-8">
                                            <div class="title">
                                                <h3 style="color:#ab650a;word-break:break-all;">
                                                    {{$row->name}}
                                                </h3>
                                            </div>
                                            <div class="price">
                                                <h6 style="color:#f95446;font-weight:bold;font-size:14px;margin-bottom:10px;">
                                                    {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$row->uploat_at)->format('Y')}}
                                                    &nbsp;&nbsp; {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$row->uploat_at)->format('F')}}
                                                    &nbsp;&nbsp;{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$row->uploat_at)->format('j')}}

                                                </h6>
                                            </div>


                                            <div class="description"
                                                 style="font-weight:bold;color:rgba(4, 3, 3, 0.47);word-break:break-all;">
                                                <p>
                                                    {{$row->description}}
                                                </p>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.section -->
        </div>
    </div>
@endsection
