<?php
  $emails = GuestMail::orderBy("created_at","DESC")->get();
?>
<div class="row">
<div class="panel panel-default">
<div class="panel-heading">
    <div class="text-muted bootstrap-admin-box-title">
        Guest Emails
    </div>
</div>
<div class="bootstrap-admin-panel-content">
   @if($emails->count() == 0)
    <h3>There are no emails</h3>
    @else
    <table class="table table-striped table-bordered" id="example2">
    <thead>
    <tr>
        <th>Message </th>
        <th> Action </th>
    </tr>
    </thead>
    <tbody>
    <?php $i=1; ?>
    @foreach($emails as $us)
    <tr>
        <td>
            <div class="media">
                <div class="media-body">
                    <h4 class="media-heading">{{ $us->name }} <span class="pull-right">{{ date('d M, Y',strtotime($us->created_at)) }} </span></h4>
                    <p><small><i class="fa fa-envelope"></i> <a href="mailto:{{ $us->email }}">{{ $us->email }}</a>
                    | <i class="fa fa-phone"></i> {{ $us->tel }}
                    </small></p>
{{ $us->contents }}                </div>
            </div>
         </td>
        <td id="{{ $us->id }}">
          <a href="#b" title="delete User" class="deleteuser"><i class="fa fa-trash-o text-danger"></i> </a>
        </td>
    </tr>
    @endforeach

    </tbody>
    </table>

    @endif
</div>
</div>
</div>


<!--script to process the list of users-->
<script>
    /* Table initialisation */
    $(document).ready(function() {

        $(".deleteuser").click(function(){
            var id1 = $(this).parent().attr('id');
            $(".deleteuser").show("slow").parent().parent().find("span").remove();
            var btn = $(this).parent().parent();
            $(this).hide("slow").parent().append("<span><br>Are You Sure <br /> <a href='#s' id='yes' class='btn btn-success btn-xs'><i class='fa fa-check'></i> Yes</a> <a href='#s' id='no' class='btn btn-danger btn-xs'> <i class='fa fa-times'></i> No</a></span>");
            $("#no").click(function(){
                $(this).parent().parent().find(".deleteuser").show("slow");
                $(this).parent().parent().find("span").remove();
            });
            $("#yes").click(function(){
                $(this).parent().html("<br><i class='fa fa-spinner fa-spin'></i>deleting...");
                $.post("<?php echo url('email/delete') ?>/"+id1,function(data){
                    btn.hide("slow").next("hr").hide("slow");
                });
            });
        });//endof deleting category
        //managing the add button
        $(".add").click(function(){
            var modal = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
            modal+= '<div class="modal-dialog">';
            modal+= '<div class="modal-content">';
            modal+= '<div class="modal-header">';
            modal+= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
            modal+= '<h2 class="modal-title" id="myModalLabel">User Registration</h2>';
            modal+= '</div>';
            modal+= '<div class="modal-body">';
            modal+= ' </div>';
            modal+= '</div>';
            modal+= '</div>';

            $("body").append(modal);
            $("#myModal").modal("show");
            $(".modal-body").html("<h3><i class='fa fa-spin fa-spinner '></i><span>loading...</span><h3>");
            $(".modal-body").load("<?php echo url("user/add/") ?>");
            $("#myModal").on('hidden.bs.modal',function(){
                $("#myModal").remove();
            })

        })

    } );
</script>
