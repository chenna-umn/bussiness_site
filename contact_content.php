<div class="container-fluid">
    <?php include_once 'map/point.html'; ?>
</div>
<div class="clear-fix"></div>
<br/><br/>
<div class="container">
    <div class="col-sm-12">
        <div class="col-sm-7" style="background-color: #FFF;">
            <h3>Leave Your Message</h3>
            <form method="post" action="contactmail.php" id="con_form_mail">
                <p>
                    <input id="con_fname" type="text" name="con_fname" class="col-sm-12 inputClass" placeholder="Full Name"  required />
                </p><br/>
                <p><input id="con_email" type="email" name="con_email" class="col-sm-12 inputClass" placeholder="Email Address"  email required /></p><br/>
                <p><textarea id="con_message" name="con_message" class="col-sm-12 inputClass" placeholder="Message" required></textarea></p><br/>
                <p><input type="button" class="btn btn-danger col-sm-12" id="con-send-btn" value="Send Message!" style="width:100%"/></p><br/>
                <p id="con_result_data"></p>
            </form>
        </div>
        <div class="col-sm-5">
            <?php include_once 'checkAvail1.php';  ?>
            <div class="tabPad">
                <h4>Address</h4>
                <p>
                49 & 50, Road No #3, Banjara Hills,
                Hyderabad-34 (A.P), India.
                </p>
                <p>
                    Landline : 040 2335 2263
                </p>
                <p>
                    Mobile: +91 9533665536, +91 94400 22129
                </p>
                <p>
                    Email: info@falconsnest.in
                </p>
                <p>
                    Website URL : www.falconsnest.in
                </p>
            </div>
        </div>
    </div>
</div>
<br/><br/>

<!-- Validate -->        
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script>
    $("#con-send-btn").click(function(){
        var validator 		= $( "#con_form_mail").validate();
        var valid 		= validator.form();
        if(valid)
        {
            $("#con_result_data").html('<div class="progress progress-striped active"><div style="width: 65%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-success"><span class="sr-only">45% Complete</span></div></div>');
            $.ajax({
                type: 'POST',
                data: $("#con_form_mail").serialize(),
                url:"contactmail.php",
                success:function(result)
                {
                    if(result == '<div class="alert alert-success">We received your request. We will contact you as soon as possible. Thank You.</div>')
                    {
                        clearForm('#con_form_mail'); 
                    }
                    $("#con_result_data").html(result);
                }
            });
        }
    });
            
    function clearForm(form) {
          // iterate over all of the inputs for the form
          // element that was passed in
          $(':input', form).each(function() {
                var type = this.type;
                var tag = this.tagName.toLowerCase(); // normalize case
                // it's ok to reset the value attr of text inputs,
                // password inputs, and textareas
                if (type == 'text' || type == 'password' || tag == 'textarea' || type == 'email' || type == 'number')
                      this.value = "";
                // checkboxes and radios need to have their checked state cleared
                // but should *not* have their 'value' changed
                else if (type == 'checkbox' || type == 'radio')
                      this.checked = false;
                // select elements need to have their 'selectedIndex' property set to -1
                // (this works for both single and multiple select elements)
            //                    else if (tag == 'select')
            //                      this.selectedIndex = -1;
          });
    };
</script>
<!-- End Of Validate --> 

