@extends("administrator.admin")

@section("adminpagehead")
<div class="page-head">
    <h2 class="pull-left">Mpera Health Centre</h2>
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
        <a href="#" class="bread-current">Dashboard</a>
    </div>
    <div class="clearfix"></div>
</div>
@endsection

@section("contents")


<div class="row">
    <div class="col-md-6 portlets">
        <div class="widget">
            <!-- Widget title -->
            <div class="widget-head">
                <div class="pull-left">Calendar</div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget-content">
                <!-- Widget content -->
                <div class="padd">
                    <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                    <div id="calendar"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-6 portlets">
        <div class="widget">
            <div class="widget-head">
                <div class="pull-left">Quick Post</div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget-content">
                <div class="padd">

                    <div class="form quick-post">
                        <!-- Edit profile form (not working)-->
                        <form class="form-horizontal">
                            <!-- Title -->
                            <div class="form-group">
                                <label class="control-label col-lg-2" for="title">Title</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="title">
                                </div>
                            </div>
                            <!-- Content -->
                            <div class="form-group">
                                <label class="control-label col-lg-2" for="content">Content</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" id="content"></textarea>
                                </div>
                            </div>
                            <!-- Cateogry -->
                            <div class="form-group">
                                <label class="control-label col-lg-2">Category</label>
                                <div class="col-lg-10">
                                    <select class="form-control">
                                        <option value="">- Choose Cateogry -</option>
                                        <option value="1">General</option>
                                        <option value="2">News</option>
                                        <option value="3">Media</option>
                                        <option value="4">Funny</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Tags -->
                            <div class="form-group">
                                <label class="control-label col-lg-2" for="tags">Tags</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="tags">
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="form-group">
                                <!-- Buttons -->
                                <div class="col-lg-offset-2 col-lg-9">
                                    <button type="submit" class="btn btn-primary">Publish</button>
                                    <button type="submit" class="btn btn-danger">Save Draft</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
                <div class="widget-foot">
                    <!-- Footer goes here -->
                </div>
            </div>
        </div>
        <div class="widget wblack">
            <div class="widget-head">
                <div class="pull-left">Black Chart</div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget-content">
                <div class="padd">

                    <div id="bar-chart"></div>

                </div>
                <div class="widget-foot">
                    <!-- Footer goes here -->
                </div>
            </div>
        </div>
    </div>

</div>


@endsection