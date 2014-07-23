@extends("administrator.admin")

@section("adminpagehead")
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
        <a href="#" class="bread-current">Other staffs</a>
    </div>
    <div class="clearfix"></div>
</div>
@endsection

@section("contents")

@endsection