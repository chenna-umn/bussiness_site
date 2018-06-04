<style>
    #foot #footTop .container .col-sm-3 ul
    {
        margin-left: -30px;
    }
    #foot #footTop .container .col-sm-3 li
    {
        list-style: none;
    }
#foot #footTop .container .col-sm-3 li a{
	line-height: 15px;
	color: #FFF;
}
</style>
<div class="container-fluid" id="foot">
    <div class="col-sm-12" id="footTop">
        <div class="container">
            <?php
            $strSQL = "SELECT * FROM footer where status=1 order by updatedOn DESC LIMIT 3";
// Execute the query (the recordset $rs contains the result)
            $rs = mysql_query($strSQL);
            if (!empty($rs)) {
                 while ($row = mysql_fetch_array($rs)) {
                ?>
                <div class="col-sm-3 text-center">
                    <h3><?php echo $row['title']; ?></h3>
                    <?php echo $row['footer']; ?>
                </div>

                <?php
            } }
            ?>  
            <div class="col-sm-3" style="color:#999;">
                <br/><br/>
                <div class="col-sm-12">
                    <div class="social-icons">
                        <ul>
                            <li class="twitter" style="color: #f0f0f0; border-radius:50%;">
                                <a href="http://www.twitter.com" target="_blank" class="img-circle">Twitter</a>
                            </li>

                            <li class="facebook" style="color: #f0f0f0; border-radius:50%;">
                                <a href="http://facebook.com" target="_blank" class="img-circle">Facebook</a>
                            </li>

                            <li class="youtube" style="color: #f0f0f0; border-radius:50%;">
                                <a href="http://youtube.com" target="_blank" class="img-circle">YouTube</a>
                            </li>

                            <li class="googleplus" style="color: #f0f0f0; border-radius:50%;">
                                <a href="http://gmail.com" target="_blank" class="img-circle">Google +r</a>
                            </li>

<!--                            <li class="pinterest" style="color: #f0f0f0; border-radius:50%;">
                                <a href="http://www.twitter.com" target="_blank" class="img-circle">Pinterest</a>
                            </li>

                            <li class="paypal" style="color: #f0f0f0; border-radius:50%;">
                                <a href="http://www.twitter.com" target="_blank" class="img-circle">Paypal</a>
                            </li>

                            <li class="linkedin" style="color: #f0f0f0; border-radius:50%;">
                                <a href="http://www.twitter.com" target="_blank" class="img-circle">LinkedIN</a>
                            </li>

                            <li class="flickr" style="color: #f0f0f0; border-radius:50%;">
                                <a href="http://www.twitter.com" target="_blank" class="img-circle">Flickrr</a>
                            </li>

                            <li class="vimeo" style="color: #f0f0f0; border-radius:50%;">
                                <a href="http://www.twitter.com" target="_blank" class="img-circle">Vimeo</a>
                            </li>

                            <li class="tumblr" style="color: #f0f0f0; border-radius:50%;">
                                <a href="http://www.twitter.com" target="_blank" class="img-circle">Tumblr</a>
                            </li>

                            <li class="orkut" style="color: #f0f0f0; border-radius:50%;">
                                <a href="http://www.twitter.com" target="_blank" class="img-circle">Orkut</a>
                            </li>

                            <li class="picasa" style="color: #f0f0f0; border-radius:50%;">
                                <a href="http://www.twitter.com" target="_blank" class="img-circle">Picasa</a>
                            </li>

                            <li class="skype" style="color: #f0f0f0; border-radius:50%;">
                                <a href="http://www.twitter.com" target="_blank" class="img-circle">Skype</a>
                            </li>

                            <li class="html5" style="color: #f0f0f0; border-radius:50%;">
                                <a href="http://www.twitter.com" target="_blank" class="img-circle">HTML 5</a>
                            </li>

                            <li class="rss" style="color: #f0f0f0; border-radius:50%;">
                                <a href="http://www.twitter.com" target="_blank" class="img-circle">RSS Feed</a>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12" id="footBot">
        <div class="container">
            <div class="col-sm-4">
                <p id="footLeft">
                    ©2014 Falcons Nest. All right reserved
                </p>
            </div>
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-4">			
                <p id="footRight">
                    Designed by 
                    <a target="_blank" href="">
                        Ledge Design
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>




<!-- Mega Menu -->
<script type="text/javascript" src="menu/scripts.js"></script><!-- jQuery -->
<script>
$(document).ready(function($){
    $('.megamenu').megaMenuCompleteSet({
        menu_speed_show : 400, // Time (in milliseconds) to show a drop down
        menu_speed_hide : 300, // Time (in milliseconds) to hide a drop down
        menu_speed_delay : 200, // Time (in milliseconds) before showing a drop down
        menu_effect : 'hover_fade', // Drop down effect, choose between 'hover_fade', 'hover_slide', etc.
        menu_click_outside : 1, // Clicks outside the drop down close it (1 = true, 0 = false)
        menu_show_onload : 0, // Drop down to show on page load (type the number of the drop down, 0 for none)
        menu_responsive:1 // 1 = Responsive, 0 = Not responsive
    });
});
</script>
<!-- End Of Mega Menu -->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>


<!-- Foot Image Gallery -->
<script type="text/javascript" src="js/jquery.windy.js"></script>
<script type="text/javascript">	
    $(function() {
        
        var $el = $( '#wi-el' ),
        windy = $el.windy( {
            // rotation and translation boundaries for the items transitions
            boundaries : {
                rotateX : { min : 40 , max : 90 },
                rotateY : { min : -15 , max : 45 },
                rotateZ : { min : -10 , max : 10 },
                translateX : { min : -400 , max : 400 },
                translateY : { min : -400 , max : 400 },
                translateZ : { min : 350 , max : 550 }
            }
        } ),
        allownavnext = false,
        allownavprev = false;
        
        $( '#nav-prev' ).on( 'mousedown', function( event ) {
            
            allownavprev = true;
            navprev();
            
        } ).on( 'mouseup mouseleave', function( event ) {
            
            allownavprev = false;
            
        } );
        
        $( '#nav-next' ).on( 'mousedown', function( event ) {
            
            allownavnext = true;
            navnext();
            
        } ).on( 'mouseup mouseleave', function( event ) {
            
            allownavnext = false;
            
        } );
        
        function navnext() {
            if( allownavnext ) {
                windy.next();
                setTimeout( function() {	
                    navnext();
                }, 150 );
            }
        }
        
        function navprev() {
            if( allownavprev ) {
                windy.prev();
                setTimeout( function() {	
                    navprev();
                }, 150 );
            }
        }
        
    });
</script>
<!-- Foot Image Gallery -->

<!-- Booking -->
<script>
    function loadBook() 
    {
        var checkValue = $('#check1').val();
        if(checkValue==0)
        {
            $('#check1').val('1');
            $.ajax({
                url:"booking.php",
                success:function(result)
                {   
                    $("#availBookForm").html(result);
                }
            });
        }
        else
        {
            $('#check1').val('0');
        }
    }
</script>
<!-- Booking -->

<input type="hidden" name="check1" id="check1" value="0"/>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>


<!-- branch map Load -->
<script>
    function loadLocMap(filename,loadMapId) 
    {
            
            $.ajax({
                url:filename,
                success:function(result)
                {   
                    $(loadMapId).html(result);
                }
            });
    }
</script>
<!-- branch map load -->

<?php mysql_close(); ?>


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


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Share This Page</h4>
      </div>
      <div class="modal-body">
        <?php
         function getBaseUrl() 
        {
            $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === FALSE ? 'http' : 'https';
            $host = $_SERVER['HTTP_HOST'];
            $script = $_SERVER['SCRIPT_NAME'];
            $params = $_SERVER['QUERY_STRING'];
            $currentUrl = $protocol . '://' . $host . $script . '?' . $params;
            return $currentUrl;
        }

        $baseUrl = getBaseUrl();
        ?>
          <form action="bookmail.php" method="post" id="sendLink">
              <input type="hidden" id="url" name="url" value="<?php echo $baseUrl; ?>"/>
              <p>
                  <input style="width:100%" id="sendLinkMail" type="email" name="email" class="define_size inputClass" placeholder="Email Address"  email required />
              </p>
          </form>
          <div id="resultSendMail">
              
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="sendMailToLink">Send Mail</button>
      </div>
    </div>
  </div>
</div>

<!-- Ajax Request -->
<script>
    function performOperation(filename, data ,loadMapId) 
    {
            var formData = {id:data};
            $.ajax({
                type: "POST",
                data : formData,
                url:filename,
                success:function(result)
                {   
                    $(loadMapId).html(result);
                }
            });
    }
    
    
    $("#sendMailToLink").click(function(){
        var validator 		= $( "#sendLink").validate();
        var valid 		= validator.form();
        if(valid)
        {
            $("#resultSendMail").html('<div class="progress progress-striped active"><div style="width: 65%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-success"><span class="sr-only">45% Complete</span></div></div>');
            $.ajax({
                type: 'POST',
                data: $("#sendLink").serialize(),
                url:"sendLinkMail.php",
                success:function(result)
                {   
                    $("#resultSendMail").html(result);
                }
            });
        }
    });
</script>