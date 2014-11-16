
<div class="panel panel-default">
    <div class="panel-body">
        {{ Form::open(array("url"=>url("user/edit/{$user->id}"),"class"=>"form-horizontal","id"=>'FileUploader')) }}
        <div class='form-group'>

            <div class='col-sm-6'>
                First Name <br>  {{ Form::text('firstname',$user->first_name,array('class'=>'form-control','placeholder'=>'First Name','required'=>'required')) }}
            </div>
            <div class='col-sm-6'>
                Last Name<br> {{ Form::text('lastname',$user->last_name,array('class'=>'form-control','placeholder'=>'Last Name','required'=>'required')) }}
            </div>
        </div>



        <div class='form-group'>

            <div class='col-sm-12'>
                Email <br>{{ Form::text('email',$user->staff_id,array('class'=>'form-control','placeholder'=>'Email','required'=>'required')) }}
            </div>

        </div>


        <div id="output"></div>
       <div class='col-sm-12 form-group text-center'>
            {{ Form::submit('Submit',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
        </div>
      {{ Form::close() }}
    </div>
      </div>
<script>
    $(document).ready(function (){
        $('#FileUploader').on('submit', function(e) {
            e.preventDefault();
            $("#output").html("<h3><i class='fa fa-spin fa-spinner '></i><span>Making changes please wait...</span><h3>");
            $(this).ajaxSubmit({
                target: '#output',
                success:  afterSuccess
            });

        });
        function afterSuccess(){
            setTimeout(function() {
                $("#myModal").modal("hide");
            }, 3000);
            $("#listuser").load("<?php echo url("user/list") ?>")
        }
    });
</script>


