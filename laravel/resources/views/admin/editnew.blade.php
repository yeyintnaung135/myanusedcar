@extends('master')
@section('content')


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
                            <a href="#">Home</a>
                        </li>

                        <li>
                            <a href="#">Edit Car</a>
                        </li>

                    </ul><!-- /.breadcrumb -->

                    <div class="nav-search" id="nav-search">
                        <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input"
                                           id="nav-search-input" autocomplete="off"/>
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                        </form>
                    </div><!-- /.nav-search -->
                </div>

                <div class="page-content">
                    <div class="ace-settings-container" id="ace-settings-container">
                        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                            <i class="ace-icon fa fa-cog bigger-130"></i>
                        </div>


                        <div class="ace-settings-box clearfix" id="ace-settings-box">
                            <div class="pull-left width-50">
                                <div class="ace-settings-item">
                                    <div class="pull-left">
                                        <select id="skin-colorpicker" class="hide">
                                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                        </select>
                                    </div>
                                    <span>&nbsp; Choose Skin</span>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar"/>
                                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar"/>
                                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs"/>
                                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"/>
                                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container"/>
                                    <label class="lbl" for="ace-settings-add-container">
                                        Inside
                                        <b>.container</b>
                                    </label>
                                </div>
                            </div><!-- /.pull-left -->

                            <div class="pull-left width-50">
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover"/>
                                    <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"/>
                                    <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight"/>
                                    <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                                </div>
                            </div><!-- /.pull-left -->
                        </div><!-- /.ace-settings-box -->
                    </div><!-- /.ace-settings-container -->


                    <div class="row">
                        <div class="col-xs-12">

                            <!-- PAGE CONTENT BEGINS -->
                            {!! Form::model($edit_new,['method'=>'PATCH','url'=>'dashboard/edit_new/'.$edit_new->id,'class'=>'form-horizontal','enctype'=>"multipart/form-data"]) !!}
                            <div class="form-group">
                                {!! Form::label('form-field-1','Name',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                                <div class="col-sm-9">
                                    {!! Form::text('name',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1','required'=>'required/']) !!}
                                </div>

                            </div>


                            @if ($errors->has('name'))

                                @foreach ($errors->get('name') as $error)
                                    <div class="row">
                                        <div class="col-xs-10">

                                            <div class="alert alert-danger" style="padding:4px;">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>

                                                <strong>
                                                    <i class="ace-icon fa fa-times"></i>
                                                    {{$error}}
                                                </strong>

                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row"></div>
                            @endif
                            <div class="form-group">
                                {!! Form::label('form-field-1','Description',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                                <div class="col-sm-9">
                                    {!! Form::textarea('description',null,['class'=>'col-xs-10 col-sm-8','id'=>'form-field-1','required'=>'required/']) !!}
                                </div>
                            </div>
                            @if($errors->has('description'))
                                @foreach ($errors->get('description') as $error_desc)
                                    <div class="row">
                                        <div class="col-xs-10">

                                            <div class="alert alert-danger" style="padding:4px">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>


                                                <strong>
                                                    <i class="ace-icon fa fa-times"></i>
                                                    {{$error_desc}}
                                                </strong>

                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="row"></div>


                            <div class="form-group">
                                {!! Form::label('id-input-file-2','Photo',array('class'=>'col-sm-3 control-label no-padding-right')) !!}


                                <div class="col-sm-6">
                                    {!! Form::file('photo',['class'=>'col-xs-10 col-sm-8','id'=>'id-input-file-2']) !!}
                                </div>
                            </div>
                            @if($errors->has('photo'))
                                @foreach ($errors->get('photo') as $error_photo1)
                                    <div class="row">
                                        <div class="col-xs-10">

                                            <div class="alert alert-danger" style="padding:4px">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>


                                                <strong>
                                                    <i class="ace-icon fa fa-times"></i>
                                                    {{ $error_photo}}
                                                </strong>

                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif



                            <div class="clearfix form-actions">



                                <div class="col-md-offset-3 col-md-9">
                                    <button class="btn btn-info" type="submit">
                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                        Submit
                                    </button>

                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn" type="reset">
                                        <i class="ace-icon fa fa-undo bigger-110"></i>
                                        Reset
                                    </button>
                                </div>
                            </div>
                            {!! Form::close() !!}

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder"></span>
						Myanusedcars&copy; 2016-2017
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
