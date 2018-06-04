<div class="col-sm-12" style="padding: 0px;">
    <form action="bookmail.php" method="post" id="book_form">
        <p><input style="width:100%" id="fname" type="text" name="fname" class="define_size inputClass" placeholder="Full Name"  required /></p>
        <p><input style="width:100%" id="email" type="email" name="email" class="define_size inputClass" placeholder="Email Address"  email required /></p>
        <p><input style="width:100%" id="mobile" type="number" name="mobile" maxlength="10" class="inputClass" placeholder="Mobile Number" required /></p>
        <p>
            <input style="width:100%" id="datepicker1" type="text" name="datepicker1" class="define_size inputClass" placeholder="Check in Date" required />
        </p>
        <p><input style="width:100%" id="datepicker2" type="text" name="datepicker2" class="define_size inputClass" placeholder="Check out Date" required /></p>
        <p>
            <label class="label_color_contact">Number Of Adults</label><br/>
            <select name="adult" id="adult" class="form-control inputClass" required>
                <option value="1" selected="selected">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </p>
        <p>
            <label class="label_color_contact">Number Of Childrens</label><br/>
            <select name="children" id="children" class="form-control inputClass" required>
                <option value="0" selected="selected">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </p>
        <p>
            <select name="city" id="city" class="form-control inputClass" required>
                <option value="" selected="selected">Select City</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Vizag">Vizag</option> 
            </select>
        </p>
        <p id="load_branch">
            <select name="branch" id="branch" class="form-control inputClass inputClass" required>
                <option value="" selected="selected">Select Branch</option>
            </select>
        </p>
        <p id="load_book_category">
            <select name="categorey" id="categorey" class="form-control inputClass" required>
                <option value="" selected="selected">Select Apartment</option>
            </select>
        </p>
        <p>
            <label class="label_color_contact">Mode Of Payment</label><br/>
            <select name="payment" id="payment" class="form-control inputClass" required>
                <option selected="selected">Debit Card</option>
                <option>Credit Card</option>
                <option selected="selected">Cash</option>
                <option>Bank Transfer</option>
                <option>Online Payment</option> 
            </select>
        </p>
        <p>
            <label class="label_color_contact">Airport Pickup</label><br/>
            <select name="airport" id="airport" class="form-control inputClass" required>
                <option selected="selected">Required</option>
                <option>Not Required</option>
            </select>
        </p>
        <p>
            <textarea id="message" name="message" class="inputClass" style="width:100%" placeholder="Remarks / Special Notes:" required></textarea>
        </p>
        <p style="color: #fff;font-weight: bold;">
            <input type="button" class="btn btn-danger" id="message-send-btn" value="Check Now" style="width:100%"/>
        </p>
        <p id="result_data"></p>
    </form>
</div>



<link rel="stylesheet" href="date/base/jquery.ui.all.css">
<script src="date/jquery-1.8.3.js"></script>
<script src="date/ui/jquery.ui.core.js"></script>
<script src="date/ui/jquery.ui.widget.js"></script>
<script src="date/ui/jquery.ui.datepicker.js"></script>
<!--<link rel="stylesheet" href="date/demos.css">-->
<script>
    //            $(function() {
    //                $( "#datepicker1" ).datepicker();
    //                $( "#datepicker2" ).datepicker();
    //            });
    
    $(function() {
        $.datepicker.setDefaults({dateFormat: 'dd-MM-yy', firstDay: 1});
        $('#datepicker1').datepicker({minDate: 0, onSelect: function(selectedDate) {
                var minDate = $(this).datepicker('getDate');
                if (minDate) {
                    minDate.setDate(minDate.getDate() + 1);
                }
                $('#datepicker2').datepicker('option', 'minDate', minDate || 1); // Date + 1 or tomorrow by default
            }});
        $('#datepicker2').datepicker({minDate: 1, onSelect: function(selectedDate) {
                var maxDate = $(this).datepicker('getDate');
                if (maxDate) {
                    maxDate.setDate(maxDate.getDate() - 1);
                }
                $('#datepicker1').datepicker('option', 'maxDate', maxDate); // Date - 1
            }});
    });
</script>
<!-- End Of Date Picker -->
<!-- Validate -->        
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script>
    $("#message-send-btn").click(function(){
        var validator 		= $( "#book_form").validate();
        var valid 		= validator.form();
        if(valid)
        {
            $("#result_data").html('<div class="progress progress-striped active"><div style="width: 65%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-success"><span class="sr-only">45% Complete</span></div></div>');
            $.ajax({
                type: 'POST',
                data: $("#book_form").serialize(),
                url:"bookmail.php",
                success:function(result)
                {
                    if(result == '<div class="alert alert-success">We received your request. Our marketing team will call you as soon as possible.</div>')
                    {
                        clearForm('#book_form'); 
                    }
                    $("#result_data").html(result);
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
    
    $("#city").change(function(){
        var cityVal = $("#city").val();
        if(cityVal=='Hyderabad')
        {
            $( "#branch").html('<option value="" selected="selected">Select Branch</option><option value="Banjara hills">Banjara hills</option><option value="Jubilee Hills">Jubilee Hills</option><option value="Srikrishna">Srikrishna</option><option value="kuncj">kuncj</option><option value="Gachibowli">Gachibowli</option>');
        }
        else if(cityVal=='Vizag')
        {
            $( "#branch").html('<option value="" selected="selected">Select Branch</option><option value="Lawsons Bay colony">Lawsons Bay colony</option><option value="MVP Colony">MVP Colony</option>');
        }
    });
    
    $("#branch").change(function(){
        var branchVal = $("#branch").val();
        if(branchVal=='Lawsons Bay colony' || branchVal=='MVP Colony')
        {
            $( "#categorey").html('<option value="" selected="selected">Select Category</option><option value="Standard room">Standard room</option><option value="Deluxe Room">Deluxe Room</option><option value="Two Bed Room">Two Bed Room</option><option value="Three Bed Room">Three Bed Room</option>');
        }
        else if(branchVal=='Banjara hills')
        {
            $( "#categorey").html('<option value="" selected="selected">Select Category</option><option value="Standard room">Standard room</option>');     
        }
        else if(branchVal=='Jubilee Hills')
        {
            $( "#categorey").html('<option value="" selected="selected">Select Category</option><option value="Suit Room">Suit Room</option>');     
        }
        else if(branchVal=='Srikrishna')
        {
            $( "#categorey").html('<option value="" selected="selected">Select Category</option><option value="Standard room">Standard room</option><option value="Deluxe Room">Deluxe Room</option>');     
        }
        else if(branchVal=='Kunj')
        {
            $( "#categorey").html('<option value="" selected="selected">Select Category</option><option value="Two Bed Room Apt">Two Bed Room Apt</option><option value="Three  Bed Room">Three  Bed Room</option><option value="Deluxe Room">Deluxe Room</option>');     
        }
        else if(branchVal=='Gachibowli')
        {
            $( "#categorey").html('<option value="" selected="selected">Select Category</option><option value="Standard room">Standard room</option><option value="Two Bed Room Apt">Two Bed Room Apt</option><option value="Three  Bed Room">Three  Bed Room</option><option value="Deluxe Room">Deluxe Room</option>');   
        }
    });
    
</script>
