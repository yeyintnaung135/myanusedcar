@extends('masterfront')
@section('content')
    <?php
    if (preg_match('/mm/', \Request::PATH())) {
        $lang_path = 'mm';
    } else {
        $lang_path = 'en';
    }
    ?>
    <div class="container-fluid" style="background:#f1efef;">


        <div class="row mt-5 mb-5 ml-0 mr-0 ml-sm-3 mr-sm-3 mr-lg-5 ml-lg-5 bg-white shadow-sm rounded">

            <div class="row w-100 mt-5 mb-3">
                {{--title--}}
                <div class='col-12' style="text-align:center;">
                    <h2 class="" style="right:0;font-weight: bolder;"><span
                                class="">Result Cars</span></h2>
                </div>
                {{--title--}}
                {{--see all buttom--}}

                {{--see all buttom--}}


            </div>


            <br>
            <div class="col-12 mt-1">&nbsp;</div>

            @if(count($results) == 0)
                <div class="col-12 col-sm-6 col-lg-12 mb-5 bg-white">
                    <h3 style="color:#ff7e2f !important;text-align: center">Sorry! {{trans('greeting.empty')}}</h3>
                </div>
            @endif
            @foreach ($results as $row)

                <div class="col-12 col-sm-6 col-lg-3 mb-5 bg-white">


                    <div class="card">
                        <div class="card">
                            <div class="img-square-wrapper">
                                <a href="{{url('/'.$lang_path.'/detail/'.$row->id)}}">
                                    <img class="yk-carlist"  src="{{asset('backend/images/carlist')}}/{{$row->photo2}}" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title bolder" style="color:#ff6600;font-size: 19px;font-weight: 400;"><i class="fa fa-car" aria-hidden="true"></i> {{str_limit($row->brand,12)}}
                                <span style="font-size: 18px !important;font-weight:400 !important; color:black;">({{$row->price}}{{trans('greeting.lakh')}})</span></h5>

                                <br>

                                <div class="d-flex justify-content-left"
                                     style="color:#6f6666;font-size:16px;">
                                    <ul class="list-group list-group-horizontal">
                                        <li> Engine : {{$row->engine}}</li>

                                    </ul>
                                </div><!-- /.description -->
                                <div class="metas pt-2 d-flex justify-content-left">
                                    <ul class="list-group list-group-horizontal">
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



                                        </li>
                                    </ul>
                                </div>
<br>
                                <a href="{{route('detail',['lang'=>$lang_path,'id'=>$row->id])}}"
                                   class="btn btn-sm hvr-underline-from-center btn-danger smallbuttom "
                                   style="border-radius: .25rem !important;width:100% !important;font-weight:bolder;background:#f60;">{{trans('greeting.readmore')}}&nbsp; <span
                                            class="fa fa-chevron-right"></span></a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small style="font-size: 106%;" class="text-muted">
                                {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$row->uploat_at)->format('Y')}}
                                &nbsp;&nbsp; {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$row->uploat_at)->format('F')}}
                                &nbsp;&nbsp;{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$row->uploat_at)->format('j')}}</small>
                        </div>
                    </div>
                </div>

            @endforeach
            <div class="col-12">
                <div class="col-md-12">
                    <div id="filter-pager" class="block">
                        <div class="block-inner bg-white">
                            <div class="pager">
                                <div class="row d-flex justify-content-center" style="list-style-type: none;" >
                                    {!! (new App\Pagination($results))->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!--news bar and category bar-->
        </div>









                        <!-- /#mainmini -->
                    <!--search sibe div-->
                            <!--search sibe div-->

        @parent

    </div>
@endsection
