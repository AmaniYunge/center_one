@extends("master")

@section("container")
<div class="row-fluid">
    @include("home.content")
</div>
@endsection
<<<<<<< HEAD

@section("footer")
 <div class="row-fluid">
   @include("footer")
 </div>
@endsection
<script>
    $(document).ready(function(){
        $("ul.ddmenu li#home").addClass("active");
    });
</script>
=======
>>>>>>> 8ecea1bc0271879d96001db058d66dd9432e6a0b
