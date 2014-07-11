<div class="contentArea">

    <div class="divPanel notop page-content">

        <div class="breadcrumbs">
            <a href="{{ url("/") }}">Home</a> &nbsp;/&nbsp; <span>Contact</span>
        </div>
        <div class="row-fluid">
            <div class="span8" id="divMain">
                <div class="row-fluid">
                <h1>How To Reach Us</h1>
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
                    <h3 class="sidebox-title">Mpera Health Center</h3>
                    <table class="">
                        <tbody>
                        <tr><th style="text-align: right">Physical:</th><td>Mpera Village</td></tr>
                        <tr><th style="text-align: right">Phone:</th><td>+255 786 453 463<br/>+255 767 453 463</td></tr>
                        <tr><th style="text-align: right">Box:</th><td>25 Kahama,Tanzania</td></tr>
                        </tbody>
                    </table>
                </div>

                <div class="sidebox">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m29!1m12!1m3!1d508962.68235027394!2d32.85057626269321!3d-4.72292926308405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m14!1i0!3e6!4m5!1s0x19b6914171ae022b%3A0x76fb5f630d332fbb!2sTabora!3m2!1d-5.0166667!2d32.8!4m5!1s0x0%3A0x5374ad1b2a43c0a5!2sNkinga+Hospital!3m2!1d-4.426469!2d33.439!5e0!3m2!1sen!2s!4v1403675049508" width="280" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" frameborder="0" style="border:0"></iframe>
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