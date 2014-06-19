@extends("master")

@section("container")
<div class="row-fluid">
    @include("home.content")
</div>
@endsection

@section("footer")
 <div class="row-fluid">
   @include("home.footer")
 </div>
@endsection
<script>
    $(document).ready(function(){
        $("ul.ddmenu li#home").addClass("active");
    });
</script>