<div class="container-fluid">
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


<link rel="stylesheet" href="date/base/jquery.ui.all.css">
<script src="date/jquery-1.8.3.js"></script>
<script src="date/ui/jquery.ui.core.js"></script>
<script src="date/ui/jquery.ui.widget.js"></script>
<script src="date/ui/jquery.ui.datepicker.js"></script>
<!--<link rel="stylesheet" href="date/demos.css">-->
<script>
                $(function() {
                    
                    $( "#dob" ).datepicker({dateFormat: 'dd-MM-yy'});
                });
</script>


<script src="js/bootstrap.js"></script>
<script type="text/javascript">

$(document).ready(function(){

    $(".tooltip-examples a").tooltip();   

});

</script>

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
    
    function performOperation1(filename, data ,loadMapId, status) 
    {
            var formData = {id:data, status:status};
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
    
</script>
<!-- Ajax Request -->

<style>
    textarea
    {
	height: 200px;
	border: 3px solid #cccccc;
	padding: 5px;
    }
</style>

<script>
$('#location').change(function() {
    var formData = {location:$(this).val()};
            $.ajax({
                type: "POST",
                data : formData,
                url:'adminGalleryByLocation.php',
                success:function(result)
                {   
                    $('#clientLogoLoad').html(result);
                }
            });
});
</script>