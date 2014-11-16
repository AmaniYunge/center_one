
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from r209.com/templates/moodstrap/ by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 23 Jun 2014 20:48:41 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- Title and other stuffs -->
    <title>Nkinga Health Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Stylesheets -->
    {{HTML::style('administrator/assets/style/bootstrap.css')}}
    <!-- Font awesome icon -->
    {{HTML::style('administrator/assets/style/font-awesome.css')}}
    <!-- jQuery UI -->
    {{HTML::style('administrator/assets/style/jquery-ui-1.9.2.custom.min.css')}}
    <!-- Calendar -->
    {{HTML::style('administrator/assets/style/fullcalendar.css')}}
    <!-- prettyPhoto -->
    {{HTML::style('administrator/assets/style/prettyPhoto.css')}}
    <!-- Star rating -->
    {{HTML::style('administrator/assets/style/rateit.css')}}
    <!-- Date picker -->
    {{HTML::style('administrator/assets/style/bootstrap-datetimepicker.min.css')}}
    <!-- CLEditor -->
    {{HTML::style('administrator/assets/style/jquery.cleditor.css')}}
<!--    <!-- Uniform -->-->
<!--    {{HTML::style('administrator/assets/style/uniform.default.html')}}-->
<!--    <!-- Uniform -->-->
    {{HTML::style('administrator/assets/style/daterangepicker-bs3.css')}}
    <!-- Bootstrap toggle -->
    {{HTML::style('administrator/assets/style/bootstrap-switch.css')}}
    <!-- Main stylesheet -->
    {{HTML::style('administrator/assets/style/style.css')}}
    <!-- Widgets stylesheet -->
    {{HTML::style('administrator/assets/style/widgets.css')}}
    <!-- Gritter Notifications stylesheet -->
    {{HTML::style('administrator/assets/style/jquery.gritter.css')}}


    <!-- Favicon -->
    <link rel="shortcut icon"administrator/img/favicon/favicon.png">
</head>

<body>
<!-- HTML5 Support for IE -->
<!--[if lt IE 9]>
{{HTML::script('js/html5shim.js')}}
<![endif]-->


<!-- JS -->
{{HTML::script('administrator/assets/js/jquery.js')}} <!-- jQuery -->
{{HTML::script('administrator/assets/js/bootstrap.js')}} <!-- Bootstrap -->
{{HTML::script('administrator/assets/js/jquery-ui-1.9.2.custom.min.js')}} <!-- jQuery UI -->
{{HTML::script('administrator/assets/js/fullcalendar.min.js')}} <!-- Full Google Calendar - Calendar -->
{{HTML::script('administrator/assets/js/jquery.rateit.min.js')}} <!-- RateIt - Star rating -->
{{HTML::script('administrator/assets/js/jquery.prettyPhoto.js')}} <!-- prettyPhoto -->

<!-- Morris JS -->
{{HTML::script('administrator/assets/js/raphael-min.js')}}
{{HTML::script('administrator/assets/js/morris.min.js')}}

<!--<!-- jQuery Flot -->-->
<!--{{HTML::script('administrator/assets/js/excanvas.min.js')}}-->
<!--{{HTML::script('administrator/assets/js/jquery.flot.js')}}-->
<!--{{HTML::script('administrator/assets/js/jquery.flot.resize.js')}}-->
<!--{{HTML::script('administrator/assets/js/jquery.flot.pie.js')}}-->
<!--{{HTML::script('administrator/assets/js/jquery.flot.stack.js')}}-->

<!-- jQuery Notification - Noty -->
{{HTML::script('administrator/assets/js/jquery.noty.js')}} <!-- jQuery Notify -->
{{HTML::script('administrator/assets/js/themes/default.js')}} <!-- jQuery Notify -->
{{HTML::script('administrator/assets/js/layouts/bottom.js')}} <!-- jQuery Notify -->
{{HTML::script('administrator/assets/js/layouts/topRight.js')}} <!-- jQuery Notify -->
{{HTML::script('administrator/assets/js/layouts/top.js')}} <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<!-- Daterangepicker -->
{{HTML::script('administrator/assets/js/moment.min.js')}}
{{HTML::script('administrator/assets/js/daterangepicker.js')}}

{{HTML::script('administrator/assets/js/sparklines.js')}} <!-- Sparklines -->
{{HTML::script('administrator/assets/js/jquery.gritter.min.js')}} <!-- jQuery Gritter -->
{{HTML::script('administrator/assets/js/jquery.cleditor.min.js')}} <!-- CLEditor -->
{{HTML::script('administrator/assets/js/bootstrap-datetimepicker.min.js')}} <!-- Date picker -->
<!--{{HTML::script('administrator/assets/js/jquery.uniform.min.html')}} <!-- jQuery Uniform -->-->
{{HTML::script('administrator/assets/js/jquery.slimscroll.min.js')}} <!-- jQuery SlimScroll -->
{{HTML::script('administrator/assets/js/bootstrap-switch.min.js')}} <!-- Bootstrap Toggle -->
{{HTML::script('administrator/assets/js/jquery.maskedinput.min.js')}} <!-- jQuery Masked Input -->

{{HTML::script('administrator/assets/js/filter.js')}} <!-- Filter for support page -->
{{HTML::script('administrator/assets/js/custom.js')}} <!-- Custom codes -->
{{HTML::script('administrator/assets/js/charts.js')}} <!-- Charts & Graphs -->
<!--{{HTML::script('administrator/assets/js/index.js')}} <!-- Index Javascripts -->-->
{{ HTML::script("scripts/jquery.form.js") }}
{{HTML::script('administrator/assets/js/ga.js')}}
<header>
    <div class="navbar navbar-fixed-top bs-docs-nav" role="banner">

        <div class="container">
            <!-- Menu button for smallar screens -->
            <div class="navbar-header">
                <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"><span>Menu</span></button>
                <a href="#" class="pull-left menubutton hidden-xs"><i class="fa fa-bars"></i></a>
                <!-- Site name for smallar screens -->
                <a href="{{ url('/admin') }}" class="navbar-brand"><span class="bold">Nkinga Health Center</span></a>
            </div>

            <!-- Navigation starts -->
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

                <!-- Links -->
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown pull-right user-data">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img src="administrator/img/user1.png"> <span class="bold"></span> <b class="caret"></b>
                        </a>

                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
                            <li><a href="{{ url("logout") }}"><i class="fa fa-key"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
                    <li class="dropdown dropdown-big leftonmobile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cloud-upload"></i></a>
                        <!-- Dropdown -->
                        <ul class="dropdown-menu">
                            <li>
                                <!-- Progress bar -->
                                <p>Photo Upload in Progress</p>
                                <!-- Bootstrap progress bar -->
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete</span>
                                    </div>
                                </div>

                                <hr />

                                <!-- Progress bar -->
                                <p>Video Upload in Progress</p>
                                <!-- Bootstrap progress bar -->
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>

                                <hr />

                                <!-- Dropdown menu footer -->
                                <div class="drop-foot">
                                    <a href="#">View All</a>
                                </div>

                            </li>
                        </ul>
                    </li>

                    <!-- Sync to server link -->
                    <li class="dropdown dropdown-big leftonmobile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-refresh"></i></a>
                        <!-- Dropdown -->
                        <ul class="dropdown-menu">
                            <li>
                                <!-- Using "fa fa-spin" class to rotate icon. -->
                                <p><span class="label label-info"><i class="fa fa-cloud"></i></span> Syncing Photos to Server</p>
                                <hr />
                                <p><span class="label label-warning"><i class="fa fa-cloud"></i></span> Syncing Bookmarks Lists to Cloud</p>

                                <hr />

                                <!-- Dropdown menu footer -->
                                <div class="drop-foot">
                                    <a href="#">View All</a>
                                </div>

                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-big leftonmobile">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <i class="fa fa-comments"></i><span class="label label-info">6</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="dropdown-header padless">
                                <!-- Heading - h5 -->
                                <h5><i class="fa fa-comments"></i> Chats</h5>
                                <!-- Use hr tag to add border -->
                            </li>
                            <li>
                                <hr />
                                <!-- List item heading h6 -->
                                <h6><a href="#">Hi :)</a> <span class="label label-warning pull-right">10:42</span></h6>
                                <div class="clearfix"></div>
                                <hr />
                            </li>
                            <li>
                                <h6><a href="#">How are you?</a> <span class="label label-warning pull-right">20:42</span></h6>
                                <div class="clearfix"></div>
                                <hr />
                            </li>
                            <li>
                                <h6><a href="#">What are you doing?</a> <span class="label label-warning pull-right">14:42</span></h6>
                                <div class="clearfix"></div>
                                <hr />
                            </li>
                            <li>
                                <div class="drop-foot">
                                    <a href="#">View All</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <!-- Message button with number of latest messages count-->
                    <li class="dropdown dropdown-big messages-dd leftonmobile">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i> <span class="label label-primary">3</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="dropdown-header padless">
                                <!-- Heading - h5 -->
                                <h5><i class="fa fa-envelope-alt"></i> Messages</h5>
                                <!-- Use hr tag to add border -->

                            </li>
                            <li>
                                <hr /><!-- List item heading h6 -->
                                <h6><a href="#">Hello how are you?</a></h6>
                                <!-- List item para -->
                                <p>Quisque eu consectetur erat eget  semper...</p>
                                <hr />
                            </li>
                            <li>
                                <h6><a href="#">Today is wonderful?</a></h6>
                                <p>Quisque eu consectetur erat eget  semper...</p>
                                <hr />
                            </li>
                            <li>
                                <div class="drop-foot">
                                    <a href="#">View All</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <!-- Members button with number of latest members count -->
                    <li class="dropdown dropdown-big">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <i class="fa fa-user"></i> <span class="label label-success">7</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="dropdown-header padless">
                                <!-- Heading - h5 -->
                                <h5><i class="fa fa-user"></i> Users</h5>
                                <!-- Use hr tag to add border -->
                            </li>
                            <li>
                                <hr />
                                <!-- List item heading h6-->
                                <h6><a href="#">John Doe</a> <span class="label label-warning pull-right">Free</span></h6>
                                <div class="clearfix"></div>
                                <hr />
                            </li>
                            <li>
                                <h6><a href="#">Iron Man</a> <span class="label label-important pull-right">Premium</span></h6>
                                <div class="clearfix"></div>
                                <hr />
                            </li>
                            <li>
                                <h6><a href="#">Salamander</a> <span class="label label-warning pull-right">Free</span></h6>
                                <div class="clearfix"></div>
                                <hr />
                            </li>
                            <li>
                                <div class="drop-foot">
                                    <a href="#">View All</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</header>
<!-- Main content starts -->

<div class="content">

<!-- Sidebar -->
@include("administrator.menu")
<!-- Sidebar ends -->

<!-- Main bar -->
<div class="mainbar">

<!-- Page heading -->
@yield("adminpagehead")
<!-- Page heading ends -->



<!-- Matter -->

<div class="matter">
<div class="container">

    @yield("contents")

</div>
</div>

<!-- Matter ends -->

</div>

<!-- Mainbar ends -->
<div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Copyright info -->
                <p class="copy">Copyright &copy; 2013 | <a href="#">Your Site</a> </p>
            </div>
        </div>
    </div>
</footer>

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span>

</body>

<!-- Mirrored from r209.com/templates/moodstrap/ by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 23 Jun 2014 20:52:54 GMT -->
</html>
