<div class="contentArea">

    <div class="divPanel notop page-content">

        <div class="breadcrumbs">
            <a href="{{ url("/") }}">Home</a> &nbsp;/&nbsp; <span>Contact</span>
        </div>
        <div class="row-fluid">
            <div class="span8" id="divMain">
                <div class="row-fluid">
                <h1>How To Reach Us</h1>
                <p>You might be touched with our work and willing to join us through your generous
                    financial or material and moral support.  Please do not hesitate to contact us..</p>
                </div>
                <div class="row-fluid">
                    <h3>Email</h3>
                    <form method="post" class="form-horizontal" action="{{ url("/contacts")}}" id="contacts">
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
                        <tr><th style="text-align: right">Email:</th><td>mperahealthcentre@gmail.com</td></tr>

                        </tbody>
                    </table>
                </div>

                <div class="sidebox">
<!--                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7961.745100038067!2d32.598671638806785!3d-3.8375241497511077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sMpera!5e0!3m2!1sen!2stz!4v1414440907016" width="600" height="450" frameborder="0" style="border:0"></iframe>-->
                </div>

            </div>
        </div>
        <div class="row-fluid"  >
            <div class="sepContainer"></div>
            <h2>Our Partners</h2>

            <div class="row-fluid"  >
                <div class="span2">
                    <h3 style="color: rgb(212, 14, 0)">Tenhult Filadelfia Kyrkan</h3>
                </div>
                <div class="span2">
                    <h3 style="color: rgb(212, 14, 0)">Ostersund Filadelfia Kyrkan</h3>
                </div>
                <div class="span2">

                </div>
                <div class="span2">

                </div>
                <div class="span2">

                </div>
                <div class="span2">

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