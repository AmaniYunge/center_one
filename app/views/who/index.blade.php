@extends("master")

@section("container")
<div class="row-fluid">
    @include("about.content")
</div>
@endsection

@section("footer")
<div class="row-fluid">
    @include("about.footer")
</div>
@endsection
<script>
    $(document).ready(function(){

            $("ul.ddmenu li").each(function(){
                $(this).removeClass("active");// clear class active from all list if any
            })

        $("ul.ddmenu li#about").addClass("active");
    });
</script>
