<?php
if(Auth::user()->role != 'admin'){
?>
<script>window.location.assign("{{asset('abort')}}");</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>Myanusedcars</title>

    <meta name="description" content="Static &amp; Dynamic Tables"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('backends/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('backends/font-awesome/4.2.0/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('backends/bootstrap-multiselect.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('backends/select2.min.css')}}"/>

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="{{asset('backends/fonts/fonts.googleapis.com.css')}}"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('backends/css/ace.min.css')}}" class="ace-main-stylesheet"
          id="main-ace-style"/>

    <!--[if lte IE 9]-->
    <link rel="stylesheet" href="{{asset('backends/css/ace-part2.min.css')}}" class="ace-main-stylesheet"/>
    <!--[endif]-->

    <!--[if lte IE 9]-->
    <link rel="stylesheet" href="{{asset('backends/css/ace-ie.min.css')}}"/>
    <!--[endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{{asset('backends/js/ace-extra.min.js')}}"></script>

    <!-- HTML5shiv and Respond.js')}} for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]-->
    <script src="{{asset('backends/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('backends/js/respond.min.js')}}"></script>
    <!--[endif]-->
</head>
@yield('header')
<body class="no-skin">
<div id="navbar" class="navbar navbar-default">
    <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="navbar-container" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="index.html" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                   Myanusedcars
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">


                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        <span id="notic" class="badge badge-important">{{$contact_count}}</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                        </li>
                        @foreach($contact_mail_noti as $cm)
                            <li>
                            <a href="{{asset('/dashboard/contact-detail/'.$cm->id)}}">
                                <div class='clearfix'>
                                    <span class='pull-left'>
                                        <i class='btn btn-xs no-hover btn-pink fa fa-comment'></i>
                                        {{$cm->email}}
                                    </span>
                                </div>
                            </a>
                        </li>
                        @endforeach
                        <li class="dropdown-footer">
                            <a href="#">
                                See all notifications
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="green" style="height:30%;scroll:auto;">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                        <span id='noti' class="badge badge-success">  {{$count}}</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-envelope-o"></i>
                            Unread Subscriber Email
                        </li>

                        <li class="dropdown-content">
                            <ul id='notimail' class="dropdown-menu dropdown-navbar">
                                @foreach($email as $row)

                                    <li id="">
                                        <a href="#" class="clearfix">

												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
                                                        {{$row->email}}
                                                    </span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
                                        </a>
                                    </li>
                                @endforeach


                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="inbox.html">
                                See all messages
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="{{asset('backend/images/memberlist/'.Auth::user()->photo)}}"
                             alt="Admin Photo"/>
								<span class="user-info">
									<small>Welcome,</small>
                                    {{Auth::user()->name}}
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>

                        <li>
                            <a href="{{url('dashboard/profile')}}">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="{{url('/logout')}}">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>


@section('content')

    <div id="sidebar" class="sidebar                  responsive">
        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'fixed')
            } catch (e) {
            }
        </script>


        <ul class="nav nav-list">
            <li class="active">
                <a href='{{url('dashboard')}}'>
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-car"></i>
							<span class="menu-text">
								Car
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="/Carshowroom/public/dashboard/add_newcar">
                            <i class="menu-icon fa fa-caret-right"></i>

                            Add New Car

                        </a>


                    </li>

                    <li class="">
                        <a href="{{url('dashboard/carlist')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Car List
                        </a>

                        <b class="arrow"></b>
                    </li>


                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> NEWS</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="{{asset('dashboard/new_list')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            News list
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{asset('/dashboard/add_new_new')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Add New
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> Member</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="{{asset('/dashboard/member_list')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Member list
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{asset('/dashboard/add_newmember')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Add New Member
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="{{asset('dashboard/subscriber')}}">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> Subscribers</span>

                </a>


            </li>
            <li class="">
                <a href="{{asset('dashboard/contact')}}">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> Conatct Mails</span>

                </a>


            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> Forms </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="form-elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Form Elements
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-elements-2.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Form Elements 2
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Wizard &amp; Validation
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="wysiwyg.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Wysiwyg &amp; Markdown
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="dropzone.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Dropzone File Upload
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="directorylist.php">
                    <i class="menu-icon fa fa-list-alt"></i>
                    <span class="menu-text"> Directory </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="calendar.html">
                    <i class="menu-icon fa fa-calendar"></i>

							<span class="menu-text">
								Calendar

								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="gallery.html">
                    <i class="menu-icon fa fa-picture-o"></i>
                    <span class="menu-text"> Gallery </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-tag"></i>
                    <span class="menu-text"> More Pages </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="profile.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            User Profile
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="inbox.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Inbox
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="pricing.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Pricing Tables
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="invoice.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Invoice
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="timeline.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Timeline
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="email.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Email Templates
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="login.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Login &amp; Register
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-file-o"></i>

							<span class="menu-text">
								Other Pages

								<span class="badge badge-primary">5</span>
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="faq.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            FAQ
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="error-404.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Error 404
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="error-500.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Error 500
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="grid.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Grid
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="blank.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Blank Page
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left"
               data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>

        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'collapsed')
            } catch (e) {
            }
        </script>
    </div>
    @show

            <!--[if !IE]> -->
    <script src="{{asset('backends/js/jquery.2.1.1.min.js')}}"></script>

    <!-- <![endif]-->


    <!--[if !IE]> -->
    <script type="text/javascript">
        window.jQuery || document.write("<script src='{{asset('backends/js/jquery.min.js')}}'>" + "<" + "/script>");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
    <script type="text/javascript">
        window.jQuery || document.write("<script src='{{asset('backends/js/jquery1x.min.js')}}>" + "<" + "/script>");
    </script>
    <![endif]-->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='{{asset('backends/js/jquery.mobile.custom.min.js')}}'>" + "<" + "/script>");
    </script>
    <script src="{{asset('backends/js/bootstrap.min.js')}}"></script>

    <!-- page specific plugin scripts -->
    <script src="{{asset('backends/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backends/js/jquery.dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('backends/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{asset('backends/js/dataTables.colVis.min.js')}}"></script>

    <!-- page specific plugin scripts -->
    <script src="{{asset('backends/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('backends/js/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{asset('backends/js/jquery-ui.custom.min.js')}}"></script>
    <script src="{{asset('backends/js/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{asset('backends/js/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('backends/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('backends/js/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('backends/js/bootstrap-tag.min.js')}}"></script>
    <script src="{{asset('backends/js/bootstrap-multiselect.min.js')}}"></script>
    <script src="{{asset('backends/js/select2.min.js')}}"></script>

    <!-- ace scripts -->
    <script src="{{asset('backends/js/ace-elements.min.js')}}"></script>
    <script src="{{asset('backends/js/ace.min.js')}}"></script>
    <script src="{{asset('backends/js/bootstrap-tag.min.js')}}"></script>



    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function ($) {


            $('#id-input-file-1 , #id-input-file-2').ace_file_input({
                no_file: 'No File ...',
                btn_choose: 'Choose',
                btn_change: 'Change',
                droppable: false,
                onchange: null,
                thumbnail: false //| true | large
                //whitelist:'gif|png|jpg|jpeg'
                //blacklist:'exe|php'
                //onchange:''
                //
            });
            //pre-show a file name, for example a previously selected file
            //$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])


            $('#id-input-file-3').ace_file_input({
                style: 'well',
                btn_choose: 'Drop files here or click to choose',
                btn_change: null,
                no_icon: 'ace-icon fa fa-cloud-upload',
                droppable: true,
                thumbnail: 'small'//large | fit
                //,icon_remove:null//set null, to hide remove/reset button
                /**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
                /**,before_remove : function() {
						return true;
					}*/
                ,
                preview_error: function (filename, error_code) {
                    //name of the file that failed
                    //error_code values
                    //1 = 'FILE_LOAD_FAILED',
                    //2 = 'IMAGE_LOAD_FAILED',
                    //3 = 'THUMBNAIL_FAILED'
                    //alert(error_code);
                }

            }).on('change', function () {
                //console.log($(this).data('ace_input_files'));
                //console.log($(this).data('ace_input_method'));
            });

            $('.select2').css('width', '200px').select2({allowClear: true})
            $('#select2-multiple-style .btn').on('click', function (e) {
                var target = $(this).find('input[type=radio]');
                var which = parseInt(target.val());
                if (which == 2) $('.select2').addClass('tag-input-style');
                else $('.select2').removeClass('tag-input-style');
            });

            //////////////////
            $('.multiselect').multiselect({
                enableFiltering: true,
                buttonClass: 'btn btn-white btn-primary',
                templates: {
                    button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"></button>',
                    ul: '<ul class="multiselect-container dropdown-menu"></ul>',
                    filter: '<li class="multiselect-item filter"><div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control multiselect-search" type="text"></div></li>',
                    filterClearBtn: '<span class="input-group-btn"><button class="btn btn-default btn-white btn-grey multiselect-clear-filter" type="button"><i class="fa fa-times-circle red2"></i></button></span>',
                    li: '<li><a href="javascript:void(0);"><label></label></a></li>',
                    divider: '<li class="multiselect-item divider"></li>',
                    liGroup: '<li class="multiselect-item group"><label class="multiselect-group"></label></li>'
                }
            });

            //$('#id-input-file-3')
            //.ace_file_input('show_file_list', [
            //{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
            //{type: 'file', name: 'hello.txt'}
            //]);


            //dynamically change allowed formats by changing allowExt && allowMime function
            $('#id-file-format').removeAttr('checked').on('change', function () {
                var whitelist_ext, whitelist_mime;
                var btn_choose
                var no_icon
                if (this.checked) {
                    btn_choose = "Drop images here or click to choose";
                    no_icon = "ace-icon fa fa-picture-o";

                    whitelist_ext = ["jpeg", "jpg", "png", "gif", "bmp"];
                    whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
                }
                else {
                    btn_choose = "Drop files here or click to choose";
                    no_icon = "ace-icon fa fa-cloud-upload";

                    whitelist_ext = null;//all extensions are acceptable
                    whitelist_mime = null;//all mimes are acceptable
                }
                var file_input = $('#id-input-file-3');
                file_input
                        .ace_file_input('update_settings',
                                {
                                    'btn_choose': btn_choose,
                                    'no_icon': no_icon,
                                    'allowExt': whitelist_ext,
                                    'allowMime': whitelist_mime
                                })
                file_input.ace_file_input('reset_input');

                file_input
                        .off('file.error.ace')
                        .on('file.error.ace', function (e, info) {
                            //console.log(info.file_count);//number of selected files
                            //console.log(info.invalid_count);//number of invalid files
                            //console.log(info.error_list);//a list of errors in the following format

                            //info.error_count['ext']
                            //info.error_count['mime']
                            //info.error_count['size']

                            //info.error_list['ext']  = [list of file names with invalid extension]
                            //info.error_list['mime'] = [list of file names with invalid mimetype]
                            //info.error_list['size'] = [list of file names with invalid size]


                            /**
                             if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
                             */


                            //if files have been selected (not dropped), you can choose to reset input
                            //because browser keeps all selected files anyway and this cannot be changed
                            //we can only reset file field to become empty again
                            //on any case you still should check files with your server side script
                            //because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
                        });

            });


        });
        var tag_input = $('#form-field-tags');
        try {
            tag_input.tag(
                    {
                        placeholder: tag_input.attr('placeholder'),
                        //enable typeahead by specifying the source array
                        source: ace.vars[''],//defined in ace.js >> ace.enable_search_ahead
                        /**
                         //or fetch data from database, fetch those that match "query"
                         source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
                         */
                    }
            )

            //programmatically add a new
            var $tag_obj = $('#form-field-tags').data('tag');

        }
        catch (e) {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' + tag_input.val() + '</textarea>').remove();
            //$('#form-field-tags').autosize({append: "\n"});
        }
    </script>


    <!--this section for realtime notification-->
    <script src="//cdn.socket.io/socket.io-1.3.5.js"></script>
    <script>
        var socket = io('http://127.0.0.1:8000');
        //socket on the channel retrive channel data
        socket.on('noti', function (message) {
            var email = message.data.email.email;
            document.getElementById('noti').innerHTML++;
            $('#notimail').append("<li><a href='#' class='clearfix'>" +
                    "<span class='msg-body'><span class='msg-title'>" +
                    "<span class='blue'>Alex:</span>" +
                        //thsi email is from where server emit
                    email +
                    "</span>" +
                    "<span class='msg-time'><i class='ace-icon fa fa-clock-o'></i>" +
                    "<span>a moment ago</span> </span></span></a></li>"
            );

//if admin click on noti it set to 0
            $('#noti').click(function () {
                $(this).html(0);

            });
        });
        socket.on('contact', function (messagecontact) {
            var contactemail = messagecontact.data.evcontact.email;
            var contactname = messagecontact.data.evcontact.name;
            document.getElementById('notic').innerHTML++;
            $('#noticontact').append("<li> <a href='#'> <div class='clearfix'> <span class='pull-left'><i class='btn btn-xs no-hover btn-pink fa fa-comment'></i>" +
                    contactemail + "</span> </div> </a> </li>");
        });


    </script>
@yield('footer')


