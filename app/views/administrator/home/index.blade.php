@extends("administrator.admin")

@section("adminpagehead")
{{HTML::script('administrator/assets/js/jquery.js')}} <!-- jQuery -->
<div class="page-head">
    <h2 class="pull-left">Nkinga Health Center</h2>
    <div class="pull-right">
        <div id="reportrange" class="pull-right">
            <i class="fa fa-calendar"></i>
            <span></span> <b class="caret"></b>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- Breadcrumb -->
    <div class="bread-crumb">
        <a href="{{ url("/") }}"><i class="fa fa-home"></i> Home</a>
        <!-- Divider -->
        <span class="divider">/</span>
        <a href="#" class="bread-current">Admin</a>
        <span class="divider">/</span>
        <a href="#" class="bread-current">Home page</a>
    </div>
    <div class="clearfix"></div>
</div>
@endsection

@section("contents")

        <div class="col-md-8" >
            <div class="row">
                <div class="col-md-12 btn-group" id="operation_buttons">
                <a class="btn btn-xs btn-success" style="font-weight: bolder" id="header_text">Header Text</a>
                <a class="btn btn-xs btn-warning" style="font-weight: bolder" id="slide_show">Slide Show</a>
                <a class="btn btn-xs btn-info" style="font-weight: bolder" id="welcome_note">Welcome Note</a>
                <a class="btn btn-xs btn-default" style="font-weight: bolder" id="articles">Articles</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" id="list_options">
abc
                </div>
            </div>
        </div>
        <div class="col-md-3" id="form_options">

        </div>

<script>
    $(document).ready(function(){
        $("div#operation_buttons a").click(function(){
            var page_to_handle = $(this).attr("id");
            var page_form_to_add = page_to_handle+"_form";
            $("div#list_options").load("<?php echo url("admin/home/list/") ?>/"+page_to_handle);
            $("div#form_options").load("<?php echo url("admin/home/form/") ?>/"+page_form_to_add);
        });
    });
</script>
@endsection
