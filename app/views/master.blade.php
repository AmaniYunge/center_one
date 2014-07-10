<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Mpera Health Centre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ URL::asset('scripts/icons/general/stylesheets/general_foundicons.cs') }}">
    <link rel="stylesheet" href="{{ URL::asset('scripts/bootstrap/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{ URL::asset('scripts/bootstrap/css/bootstrap-responsive.min.css')}}">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>

    {{HTML::script('js/html5.js')}}
    <![endif]-->

    <!-- Icons -->
   <link rel="stylesheet" href="{{ URL::asset('scripts/icons/general/stylesheets/general_foundicons.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('scripts/icons/social/stylesheets/social_foundicons.css')}}">
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="{{ URL::asset('scripts/icons/general/stylesheets/general_foundicons_ie7.css')}}">
   <link rel="stylesheet" href="{{ URL::asset('scripts/icons/social/stylesheets/social_foundicons_ie7.css')}}">
    <![endif]-->

    <link rel="stylesheet" href="{{ URL::asset('scripts/camera/css/camera.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/googlestyles.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('styles/custom.css')}}">


    <!-- styles specifically for products
    {{HTML::style('css/base.css')}}
    {{HTML::style('css/skeleton.css')}}
    {{HTML::style('css/screen.css')}}-->
    {{HTML::style('css/prettyPhoto.css')}}

    {{HTML::script('scripts/jquery-1.8.2.min.js')}}
    {{HTML::script('scripts/bootstrap/js/bootstrap.min.js')}}
    {{HTML::script('scripts/default.js')}}

    {{HTML::script('scripts/camera/scripts/camera.min.js')}}
    {{HTML::script('scripts/easing/jquery.easing.1.3.js')}}
    {{HTML::script('scripts/camera/scripts/jquery.mobile.customized.min.js')}}
    {{ HTML::script("scripts/jquery.form.js") }}
    <script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, height: '65%', pagination: true });}$(function(){startCamera()});</script>
    <script>
        $(document).ready(function(){
            //alert($("#footerInnerSeparator").html());

            $("ul li").each(function(){
                $(this).removeClass("active");
            });//who_we
            if($("#footerInnerSeparator").attr("class")=="staff"||$("#footerInnerSeparator").attr("class")=="history"||$("#footerInnerSeparator").attr("class")=="leadership"){
                $("ul li#who_we").addClass("active");
            }
            $("ul li#"+$("#footerInnerSeparator").attr("class")).addClass("active");
        });
    </script>

</head>
<body id="pageBody">



<!-- Modal for login form -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel" style="font-weight: bolder!important;">Login <span style="font-size:12px!important;">(Only registered users)</span></h3>
    </div>
    <div class="modal-body">

        <form method="post" class="form-horizontal" action="{{ url("/contact")}}" id="login_form">
            <div class="control-group">
                <label class="control-label" for="inputEmail">Email</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" style="height:30px;" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Password</label>
                <div class="controls">
                    <input type="password" class="input-xlarge" style="height:30px;" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox"> Remember me
                    </label>
                    <div id="output"></div>

                </div>
            </div>
        </form>


    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button type="submit" class="btn btn-success">Ok</button>
    </div>
</div>



<div id="divBoxed" class="container">

<div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>
    <div class="divPanel notop nobottom">
        <div class="row-fluid">
            <div class="span12">

                <div id="divLogo">
                    <a href="{{ url("/") }}" id="divSiteTitle">Mpera Health Centre</a><br />
                    <h3<a href="{{ url("/") }}" id="divTagLine"></a>FPCT Health and Social welfare Department</h3>
<!--                    <a href="{{ url("/") }}" id="divTagLine">Kahama District, Tanzania-->
<!--                    </a>-->
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
    <div class="row-fluid">
                     @include('footer')
    </div>
<!-- footer to be included here -->
    </div>
    <br /><br /><br />
</body>
</html>