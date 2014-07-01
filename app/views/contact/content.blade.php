<div class="contentArea">

    <div class="divPanel notop page-content">

        <div class="breadcrumbs">
            <a href="{{ url("/") }}">Home</a> &nbsp;/&nbsp; <span>Contact</span>
        </div>
        <div class="row-fluid">
            <div class="span8" id="divMain">
                <div class="row-fluid">
                <h1>Simple</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="row-fluid">
                    <h3>Email</h3>
                    <form method="post" class="form-horizontal" action="{{ url("/contact")}}" id="contacts">
                    <div id="field1-container" class="field f_50">
                        <label for="field1">Name</label>
                        <input class="input-xxlarge" name="name" id="field1" required="required" type="text">

                    </div>


                    <div id="field2-container" class="field f_50">
                        <label for="field2">Telephone</label>
                        <input class="input-xxlarge" name="tel" id="field2" required="required" type="text">
                    </div>


                    <div id="field5-container" class="field f_50">
                        <label for="field5">Email<b>*</b></label>
                        <input class="input-xxlarge"name="email" id="field5" required="required" type="email">
                    </div>


                    <div id="field4-container" class="field f_100">
                        <label for="field4">Message</label>
                        <textarea class="input-xxlarge" rows="5" cols="20" name="message" id="field4" required="required"></textarea>
                    </div>

                     <div id="output"></div>
                    <div id="form-submit" class="field f_100 clearfix submit">
                        <!--input value="Submit" type="submit"--><br/>
                        <button class="btn btn-small btn-secondary" type="submit" >Submit</button>
                    </div>
                    </form>

                </div>
            </div>
            <div class="span4 sidebar">

                <div class="sidebox">
                    <h3 class="sidebox-title">Title of the hospital here</h3>
                    <table class="">
                        <tbody>
                        <tr><th style="text-align: right">Physical:</th><td>Tabora nkinga</td></tr>
                        <tr><th style="text-align: right">Phone:</th><td></td></tr>
                        <tr><th style="text-align: right">Box:</th><td></td></tr>
                        </tbody>
                    </table>
                </div>

                <div class="sidebox">
                    <iframe width="280" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.no/maps?f=q&amp;source=s_q&amp;hl=no&amp;geocode=&amp;q=Hafstadvegen+35,+F%C3%B8rde&amp;aq=0&amp;oq=hafstadvegen+35&amp;sll=61.143235,9.09668&amp;sspn=17.454113,57.084961&amp;ie=UTF8&amp;hq=&amp;hnear=Hafstadvegen+35,+6800+F%C3%B8rde,+Sogn+og+Fjordane&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=61.450253,5.859145&amp;output=embed"></iframe><br /><small><a href="http://maps.google.no/maps?f=q&amp;source=embed&amp;hl=no&amp;geocode=&amp;q=Hafstadvegen+35,+F%C3%B8rde&amp;aq=0&amp;oq=hafstadvegen+35&amp;sll=61.143235,9.09668&amp;sspn=17.454113,57.084961&amp;ie=UTF8&amp;hq=&amp;hnear=Hafstadvegen+35,+6800+F%C3%B8rde,+Sogn+og+Fjordane&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=61.450253,5.859145" style="color:#0000FF;text-align:left">Enlarge Map</a></small>
                </div>

            </div>
        </div>

        <div id="footerInnerSeparator" class="contact"></div>
    </div>
</div>
<script>
    $(document).ready(function (){


        $('#contacts').on('submit', function(e) {
            e.preventDefault();
            $("#output").html("<h3><i class='fa fa-spin fa-spinner '></i><span class='text-success' style='font-size:12px;'>Making changes please wait...</span><h3>");
            $(this).ajaxSubmit({
                target: '#output',
                success:  afterSuccess
            });

        });



        function afterSuccess(){
            $('#FileUploader').resetForm();
            setTimeout(function() {
                $("#output").html("");
            }, 3000);
           // $("#listperson").load("<?php echo url("individuals/list") ?>")
            $('#contacts').resetForm();
        }
    });

</script>