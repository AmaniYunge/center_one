<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Easy Start - Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    {{HTML::style('scripts/bootstrap/css/bootstrap.min.css')}}
    {{HTML::style('scripts/bootstrap/css/bootstrap-responsive.min.css')}}

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>

    {{HTML::script('js/html5.js')}}
    <![endif]-->

    <!-- Icons -->
    {{HTML::style('scripts/icons/general/stylesheets/general_foundicons.css')}}
    {{HTML::style('scripts/icons/social/stylesheets/social_foundicons.css')}}
    <!--[if lt IE 8]>
    {{HTML::style('scripts/icons/general/stylesheets/general_foundicons_ie7.css')}}
    {{HTML::style('scripts/icons/social/stylesheets/social_foundicons_ie7.css')}}
    <![endif]-->

    {{HTML::style('scripts/camera/css/camera.css')}}
    {{HTML::style('css/googlestyles.css')}}
    {{HTML::style('styles/custom.css')}}

    {{HTML::script('scripts/jquery-1.8.2.min.js')}}
    {{HTML::script('scripts/bootstrap/js/bootstrap.min.js')}}
    {{HTML::script('scripts/default.js')}}

    {{HTML::script('scripts/camera/scripts/camera.min.js')}}
    {{HTML::script('scripts/easing/jquery.easing.1.3.js')}}
    {{HTML::script('scripts/camera/scripts/jquery.mobile.customized.min.js')}}
    <script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, height: '65%', pagination: true });}$(function(){startCamera()});</script>


</head>
<body id="pageBody">

<div id="divBoxed" class="container">

<div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>
    <div class="divPanel notop nobottom">
        <div class="row-fluid">
            <div class="span12">

                <div id="divLogo">
                    <a href="index.html" id="divSiteTitle">Easy Start</a><br />
                    <a href="index.html" id="divTagLine">Clean HTML5 Template..</a>
                </div>

            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">

                <div id="divMenuRight" class="pull-right">
                    <!-- this is for menu area-->
                    @include("menu")
                </div>

            </div>
        </div>

                     @yield("container")

    </div>

    <div id="footerOuterSeparator"></div>
                     @yield('footer')

<!-- footer to be included here -->
    </div>
    <br /><br /><br />
</body>
</html>