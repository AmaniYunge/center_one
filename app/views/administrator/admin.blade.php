
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from r209.com/templates/moodstrap/ by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 23 Jun 2014 20:48:41 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- Title and other stuffs -->
    <title>Mpera Health Centre</title>
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
                <a href="{{ url('/admin') }}" class="navbar-brand"><span class="bold">Mpera Health Centre</span></a>
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
