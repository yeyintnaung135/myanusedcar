@extends('masterfront')
@section('content')
    <div class="container-fluid" style="background:#f1efef;">
        <div class="row mt-5 mb-5 ml-0 mr-0 ml-sm-3 mr-sm-3 mr-lg-5 ml-lg-5 bg-white shadow-sm rounded">

        <div class="col-12 col-md-12  mt-5 mb-3">
            <div class="row">
                @foreach($new as $row)
                @endforeach
                <div class="col-12 col-sm-4 col-md-4 d-flex justify-content-center">
                    <div class="inner">
                        <div class="picture">
                            <img src="{{asset('backend/images/newlist/'.$row->photo)}}" style="width:100%;height:100%;" alt="#">
                        </div><!-- /.picture -->
                    </div><!-- /.inner -->
                </div>


                <div class="col-12 col-sm-8 col-md-8">
                    <div class="title">
                        <h2 class="card-title bolder mb-2" style="word-break:break-all;text-align:center;color:#ff6600;font-weight: 400;"><i class="fa fa-car" aria-hidden="true"></i> {{$row->name}}
                            </h2>

                    </div>
                    <div class="price">
                        <h6 style="color:#f95446;font-weight:bold;font-size:14px;margin-bottom:10px;">
                            {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$row->uploat_at)->format('Y')}}
                            &nbsp;&nbsp; {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$row->uploat_at)->format('F')}}
                            &nbsp;&nbsp;{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$row->uploat_at)->format('j')}}

                        </h6>
                    </div>


                    <div class="description"
                         style="font-weight:bold;font-size:16px;color:rgba(4, 3, 3, 0.47);word-break:break-all;">
                        <p>
                            {{$row->description}}
                        </p>
                    </div>


                </div>

            </div><!-- /.row -->
        </div>
        </div>

        <!-- /.section -->

    </div>
@endsection
