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
    <div class="container-fluid" style="background:#f1efef;">
        <div class="row mt-5 mb-5 ml-0 mr-0 ml-sm-3 mr-sm-3 mr-lg-5 ml-lg-5 bg-white shadow-sm rounded">

            <div class="row w-100 mt-5 mb-3">
                {{--title--}}
                <div class='col-12' style="">
                    <h2 class="" style="text-align:center;font-weight: bolder;"><span
                                class="">All News</span></h2>
                </div>
                {{--title--}}
                {{--see all buttom--}}

                {{--see all buttom--}}


            </div>


            <br>
            <div class="col-12 mt-1">&nbsp;</div>
            <?php
            if(count($news) == 0)//if result count value is 0
            {
            ?>
            <div style="text-align:center;color:#ab650a;">
                <h3>Sorry! {{trans('greeting.empty')}}</h3>
            </div>
            <?php
            }
            ?>
            @foreach ($news as $row)

                <div class="col-12 col-md-6 col-lg-4 mb-3 bg-white">


                    <div class="card">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                                <img class="" style="width:150px;height:150px;" src="{{asset('backend/images/newlist/'.$row->photo)}}" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"> {{$row->name}}</h4>
                                <br>
                                <p class="card-text">{{str_limit($row->description,'52')}}
                                </p>
                                <br>
                                <a href="{{url('/'.$lang_path.'/detailnew/'.$row->id)}}"
                                   class="btn btn-sm hvr-underline-from-center btn-danger smallbuttom "
                                   style="border-radius: .25rem !important;width:100% !important;font-weight:bolder;background:#f60;">{{trans('greeting.readmore')}}&nbsp; <span
                                            class="fa fa-chevron-right"></span></a>
                            </div>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
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
                                    {!! (new App\Pagination($news))->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!--news bar and category bar-->
        </div>


    </div>
@endsection

