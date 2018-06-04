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
<input type="hidden" name="check1" id="check1" value="0">


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
<!-- Slider -->
<script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
</script>
<!-- End Of Slider -->

<!-- Image Hover Effect -->
<script>
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
</script>
<!-- End Of Image Hover Effect -->


<!-- Client Caurosel -->
<script src="owl-carousel/owl.carousel.js"></script>
    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            autoPlay: 2000,
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]
        });
        
    });
</script>
<!-- Client Caurosel -->

<!-- Testimonials -->
<script>
$('#myCarousel').carousel({
interval: 2000
});
</script>
<!-- Testimonials -->

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