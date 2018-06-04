<div class="container">
    <div class="row-fluid">
        <div class="col-sm-8">

        </div>
        <div class="col-sm-4">
            <style>
                #contTop
                {
                    margin: 0px;
                }
            </style>
            <?php include_once 'checkAvail1.php'; ?>
        </div>
    </div>
</div>
<?php
$data = array();
$strSQL = "SELECT 
	gi.id,g.id as galId, gi.gal_id,gi.title, gi.image,gi.thumb,
	g.galleryName,g.description,g.address,
	g.details,g.virtualTour,g.facility,g.maps,g.overview,g.galleryName
FROM galleryimages gi join gallery g 
where g.locName='Vizag' AND gi.gal_id=g.getId AND g.status=1";
// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);
if (!empty($rs)) {
    while ($row = mysql_fetch_array($rs)) {
        $data[$row['gal_id']]['id'] = $row['galId'];
        $data[$row['gal_id']]['title'] = $row['galleryName'];
        $data[$row['gal_id']]['description'] = $row['description'];
        $data[$row['gal_id']]['address'] = $row['address'];
        $data[$row['gal_id']]['details'] = $row['details'];
        $data[$row['gal_id']]['virtualTour'] = $row['virtualTour'];
        $data[$row['gal_id']]['facilities'] = $row['facility'];
        $data[$row['gal_id']]['map'] = $row['maps'];
        $data[$row['gal_id']]['overview'] = $row['overview'];
        $data[$row['gal_id']]['photo'][$row['id']]['gal'] = $row['image'];
        $data[$row['gal_id']]['photo'][$row['id']]['thumb'] = $row['thumb'];
    }
}
?>
<?php
if (!empty($data)) {
    $i = 0;
    foreach ($data as $key => $value) {
        $i++;
        ?>
        <div class="container">
            <div class="row-fluid">
                <div class="col-sm-8">
                    <center><h3 class="branch_title_color"><?php echo $value['title']; ?></h3></center>
                </div>
                <div class="col-sm-4">

                </div>
            </div>
            <div class="clear-fix"></div>
            <div class="row-fluid">
                <div class="col-sm-8">
                    <div class="thumbnail">
                        <div style="width: 99.9%;">
                            <!-- -->


                <!--            <img src="img/3.jpg" alt="Little" class="img-responsive">-->
                            <script type="text/javascript" src="gallery/js/jquery-1.9.1.min.js"></script>
                            <script type="text/javascript" src="gallery/js/jssor.core.js"></script>
                            <script type="text/javascript" src="gallery/js/jssor.utils.js"></script>
                            <script type="text/javascript" src="gallery/js/jssor.slider.js"></script>
                            <script>

                                jQuery(document).ready(function($) {

                                    var _SlideshowTransitions = [
                                        //Fade in L
                                        {$Duration: 1200, $During: {$Left: [0.3, 0.7]}, $FlyDirection: 1, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleHorizontal: 0.3, $Opacity: 2}
                                        //Fade out R
                                        , {$Duration: 1200, $SlideOut: true, $FlyDirection: 2, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleHorizontal: 0.3, $Opacity: 2}
                                        //Fade in R
                                        , {$Duration: 1200, $During: {$Left: [0.3, 0.7]}, $FlyDirection: 2, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleHorizontal: 0.3, $Opacity: 2}
                                        //Fade out L
                                        , {$Duration: 1200, $SlideOut: true, $FlyDirection: 1, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleHorizontal: 0.3, $Opacity: 2}

                                        //Fade in T
                                        , {$Duration: 1200, $During: {$Top: [0.3, 0.7]}, $FlyDirection: 4, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleVertical: 0.3, $Opacity: 2}
                                        //Fade out B
                                        , {$Duration: 1200, $SlideOut: true, $FlyDirection: 8, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleVertical: 0.3, $Opacity: 2}
                                        //Fade in B
                                        , {$Duration: 1200, $During: {$Top: [0.3, 0.7]}, $FlyDirection: 8, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleVertical: 0.3, $Opacity: 2}
                                        //Fade out T
                                        , {$Duration: 1200, $SlideOut: true, $FlyDirection: 4, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleVertical: 0.3, $Opacity: 2}

                                        //Fade in LR
                                        , {$Duration: 1200, $Cols: 2, $During: {$Left: [0.3, 0.7]}, $FlyDirection: 1, $ChessMode: {$Column: 3}, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleHorizontal: 0.3, $Opacity: 2}
                                        //Fade out LR
                                        , {$Duration: 1200, $Cols: 2, $SlideOut: true, $FlyDirection: 1, $ChessMode: {$Column: 3}, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleHorizontal: 0.3, $Opacity: 2}
                                        //Fade in TB
                                        , {$Duration: 1200, $Rows: 2, $During: {$Top: [0.3, 0.7]}, $FlyDirection: 4, $ChessMode: {$Row: 12}, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleVertical: 0.3, $Opacity: 2}
                                        //Fade out TB
                                        , {$Duration: 1200, $Rows: 2, $SlideOut: true, $FlyDirection: 4, $ChessMode: {$Row: 12}, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleVertical: 0.3, $Opacity: 2}

                                        //Fade in LR Chess
                                        , {$Duration: 1200, $Cols: 2, $During: {$Top: [0.3, 0.7]}, $FlyDirection: 4, $ChessMode: {$Column: 12}, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleVertical: 0.3, $Opacity: 2}
                                        //Fade out LR Chess
                                        , {$Duration: 1200, $Cols: 2, $SlideOut: true, $FlyDirection: 8, $ChessMode: {$Column: 12}, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleVertical: 0.3, $Opacity: 2}
                                        //Fade in TB Chess
                                        , {$Duration: 1200, $Rows: 2, $During: {$Left: [0.3, 0.7]}, $FlyDirection: 1, $ChessMode: {$Row: 3}, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleHorizontal: 0.3, $Opacity: 2}
                                        //Fade out TB Chess
                                        , {$Duration: 1200, $Rows: 2, $SlideOut: true, $FlyDirection: 2, $ChessMode: {$Row: 3}, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleHorizontal: 0.3, $Opacity: 2}

                                        //Fade in Corners
                                        , {$Duration: 1200, $Cols: 2, $Rows: 2, $During: {$Left: [0.3, 0.7], $Top: [0.3, 0.7]}, $FlyDirection: 5, $ChessMode: {$Column: 3, $Row: 12}, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleHorizontal: 0.3, $ScaleVertical: 0.3, $Opacity: 2}
                                        //Fade out Corners
                                        , {$Duration: 1200, $Cols: 2, $Rows: 2, $During: {$Left: [0.3, 0.7], $Top: [0.3, 0.7]}, $SlideOut: true, $FlyDirection: 5, $ChessMode: {$Column: 3, $Row: 12}, $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $ScaleHorizontal: 0.3, $ScaleVertical: 0.3, $Opacity: 2}

                                        //Fade Clip in H
                                        , {$Duration: 1200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: {$Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}
                                        //Fade Clip out H
                                        , {$Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: {$Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}
                                        //Fade Clip in V
                                        , {$Duration: 1200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: {$Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}
                                        //Fade Clip out V
                                        , {$Duration: 1200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: {$Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear}, $Opacity: 2}
                                    ];

                                    var options = {
                                        $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                                        $AutoPlayInterval: 1500, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                                        $PauseOnHover: 1, //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                                        $DragOrientation: 3, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                                        $ArrowKeyNavigation: true, //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                                        $SlideDuration: 800, //Specifies default duration (swipe) for slide in milliseconds

                                        $SlideshowOptions: {//[Optional] Options to specify and enable slideshow or not
                                            $Class: $JssorSlideshowRunner$, //[Required] Class to create instance of slideshow
                                            $Transitions: _SlideshowTransitions, //[Required] An array of slideshow transitions to play slideshow
                                            $TransitionsOrder: 1, //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                                            $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                                        },
                                        $ArrowNavigatorOptions: {//[Optional] Options to specify and enable arrow navigator or not
                                            $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                                            $ChanceToShow: 1                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                                        },
                                        $ThumbnailNavigatorOptions: {//[Optional] Options to specify and enable thumbnail navigator or not
                                            $Class: $JssorThumbnailNavigator$, //[Required] Class to create thumbnail navigator instance
                                            $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always

                                            $ActionMode: 1, //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                                            $SpacingX: 8, //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                                            $DisplayPieces: 10, //[Optional] Number of pieces to display, default value is 1
                                            $ParkingPosition: 360                          //[Optional] The offset position to park thumbnail
                                        }
                                    };

                                    var jssor_slider1 = new $JssorSlider$("slider<?php echo $i; ?>_container", options);
                                    //responsive code begin
                                    //you can remove responsive code if you don't want the slider scales while window resizes
                                    function ScaleSlider() {
                                        var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                                        if (parentWidth)
                                            jssor_slider1.$SetScaleWidth(Math.max(Math.min(parentWidth, 800), 300));
                                        else
                                            window.setTimeout(ScaleSlider, 30);
                                    }

                                    ScaleSlider();

                                    if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                                        $(window).bind('resize', ScaleSlider);
                                    }


                                    //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
                                    //    $(window).bind("orientationchange", ScaleSlider);
                                    //}
                                    //responsive code end
                                });
                            </script>

                            <!-- Jssor Slider Begin -->
                            <!-- You can move inline styles (except 'top', 'left', 'width' and 'height') to css file or css block. -->
                            <div id="slider<?php echo $i; ?>_container" style="position: relative; top: 0px; left: 0px; width: 800px;
                                 height: 456px; background: #191919; overflow: hidden;">

                                <!-- Loading Screen -->
                                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                         background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
                                    </div>
                                    <div style="position: absolute; display: block; background: url(gallery/img/loading.gif) no-repeat center center;
                                         top: 0px; left: 0px;width: 100%;height:100%;">
                                    </div>
                                </div>

                                <!-- Slides Container -->
                                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 356px; overflow: hidden;">

                                    <?php foreach ($value['photo'] as $key1 => $value1) { ?>
                                        <div>
                                            <img u="image" src="<?php echo $value1['gal']; ?>" />
                                            <img u="thumb" src="<?php echo $value1['thumb']; ?>" />
                                        </div>
                                    <?php } ?>
                                </div>

                                <!-- Arrow Navigator Skin Begin -->
                                <style>
                                    /* jssor slider arrow navigator skin 05 css */
                                    /*
                                    .jssora05l              (normal)
                                    .jssora05r              (normal)
                                    .jssora05l:hover        (normal mouseover)
                                    .jssora05r:hover        (normal mouseover)
                                    .jssora05ldn            (mousedown)
                                    .jssora05rdn            (mousedown)
                                    */
                                    .jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn
                                    {
                                        position: absolute;
                                        cursor: pointer;
                                        display: block;
                                        background: url(gallery/img/a17.png) no-repeat;
                                        overflow:hidden;
                                    }
                                    .jssora05l { background-position: -10px -40px; }
                                    .jssora05r { background-position: -70px -40px; }
                                    .jssora05l:hover { background-position: -130px -40px; }
                                    .jssora05r:hover { background-position: -190px -40px; }
                                    .jssora05ldn { background-position: -250px -40px; }
                                    .jssora05rdn { background-position: -310px -40px; }
                                </style>
                                <!-- Arrow Left -->
                                <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 8px;">
                                </span>
                                <!-- Arrow Right -->
                                <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
                                </span>
                                <!-- Arrow Navigator Skin End -->

                                <!-- Thumbnail Navigator Skin Begin -->
                                <div u="thumbnavigator" class="jssort01" style="position: absolute; width: 800px; height: 100px; left:0px; bottom: 0px;">
                                    <!-- Thumbnail Item Skin Begin -->
                                    <style>
                                        /* jssor slider thumbnail navigator skin 01 css */
                                        /*
                                        .jssort01 .p           (normal)
                                        .jssort01 .p:hover     (normal mouseover)
                                        .jssort01 .pav           (active)
                                        .jssort01 .pav:hover     (active mouseover)
                                        .jssort01 .pdn           (mousedown)
                                        */
                                        .jssort01 .w {
                                            position: absolute;
                                            top: 0px;
                                            left: 0px;
                                            width: 100%;
                                            height: 100%;
                                        }

                                        .jssort01 .c {
                                            position: absolute;
                                            top: 0px;
                                            left: 0px;
                                            width: 68px;
                                            height: 68px;
                                            border: #000 2px solid;
                                        }

                                        .jssort01 .p:hover .c, .jssort01 .pav:hover .c, .jssort01 .pav .c {
                                            background: url(gallery/img/t01.png) center center;
                                            border-width: 0px;
                                            top: 2px;
                                            left: 2px;
                                            width: 68px;
                                            height: 68px;
                                        }

                                        .jssort01 .p:hover .c, .jssort01 .pav:hover .c {
                                            top: 0px;
                                            left: 0px;
                                            width: 70px;
                                            height: 70px;
                                            border: #fff 1px solid;
                                        }
                                    </style>
                                    <div u="slides" style="cursor: move;">
                                        <div u="prototype" class="p" style="position: absolute; width: 72px; height: 72px; top: 0; left: 0;">
                                            <div class=w><thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate></div>
                                            <div class=c>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Item Skin End -->
                                </div>
                                <!-- Thumbnail Navigator Skin End -->

                            </div>
                            <!-- -->


                        </div>
                    </div>
                </div>
                <div class="col-sm-4 thumbnail">
                    <div class="tabPad">
                        <p>
                            <span class="branch_title_color">Description: </span>
                            <?php echo $value['description']; ?>
                        </p>
                        <p> 
                        </p><address>
                            <span class="branch_title_color">Address: </span>
                            <?php echo $value['address']; ?>
                        </address>
                        <p></p>
                        <p>
                        </p><h5>Rating</h5>
                        <!--http://rating-widget.com-->
                        <div class="rw-ui-container" data-urid="rate<?php echo $i; ?>"></div>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="clear-fix"></div>
        </div>
        <br/><br/>

        <div class="container">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a data-toggle="tab" href="#detail<?php echo $i; ?>">Details</a></li>
                <li class=""><a data-toggle="tab" href="#tour<?php echo $i; ?>">Virtual Tour</a></li>
                <li class=""><a data-toggle="tab" href="#fac<?php echo $i; ?>">Facilities</a></li>
                <li class=""><a data-toggle="tab" href="#locMap<?php echo $i; ?>" onClick="performOperation('mapLoad.php',<?php echo $value['id']; ?>, '#locMap'+<?php echo $i; ?>)">Maps</a></li>
                <li class=""><a data-toggle="tab" href="#oview<?php echo $i; ?>">Overview</a></li>
            </ul>
            <div class="tab-content navTabBorder" id="myTabContent">
                <div id="detail<?php echo $i; ?>" class="tab-pane fade active in tabCont">
                    <div class="container section">
                        <?php echo $value['details']; ?>    
                    </div>
                </div>
                <div id="tour<?php echo $i; ?>" class="tab-pane fade tabCont">
                    <?php echo $value['virtualTour']; ?>  
                </div>

                <div id="fac<?php echo $i; ?>" class="tab-pane fade tabCont">
                    <?php echo $value['facilities']; ?>  
                </div>

                <div id="locMap<?php echo $i; ?>" class="tab-pane fade tabCont">
                    <div class="row" style="padding: 10px;">

                    </div>
                </div>
                
                <div id="oview<?php echo $i; ?>" class="tab-pane fade tabCont">
                     <br/>
                    <div class="row" id="mailPdf">
                        <span class="pull-right" style="margin-right: 50px;">
                            <a href="html2pdf/examples/savePdf.php?id=<?php echo $value['id']; ?>" target="_blank">
                                <img src="img/pdf.jpg" alt="pdf"/>
                                Save as PDF
                            </a>
                        </span>
                        <span class="pull-right" style="margin-right: 50px;">
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <img src="img/email.gif" alt="pdf"/>
                                Email This Page		
                            </a>
                        </span>
                    </div>
                    <?php echo $value['overview']; ?>  
                </div>
                
            </div>
        </div>
        <br/><br/>
    <?php }
}
?>


