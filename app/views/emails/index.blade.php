@extends("administrator.admin")

@section('breadcrumbs')
    <li class="active">users</li>
@stop

@section('header')
    Guests Emails
@stop

@section('adminpagehead')
    <div class="col-sm-12" id="listuser">
        @include('emails.list')
    </div>
@stop