@extends("administrator.admin")

@section('breadcrumbs')
    <li class="active">users</li>
@stop

@section('header')
    System Users
@stop

@section('adminpagehead')
    <div class="col-sm-12" id="listuser">
        @include('user.list')
    </div>
@stop