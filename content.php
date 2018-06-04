<!--Welcome to Google Maps Engine Lite and Pro-->
<!--https://developers.google.com/maps/documentation/javascript/tutorial-->
<!--http://webdesign.tutsplus.com/tutorials/quick-tip-embedding-new-google-maps--webdesign-15366-->
<!--<iframe src="https://mapsengine.google.com/map/embed?mid=zBzWIjLqiy0o.kYuoro6VujOI" width="100%" height="480"></iframe>-->

<?php
$strSQL = "SELECT * FROM appartment where status=1 order by updatedOn DESC";
// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);
if (!empty($rs)) {
    ?>
   <div class="container" id="cont1">
    <div class="row mrg_bot">
        <?php
        while ($row = mysql_fetch_array($rs)) {
            ?>
        <div class="col-sm-4">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="thumbHead"><?php echo $row['title']; ?></h4>
                    <p class=""><?php echo substr($row['hoverDescription'],0,150); ?>...</p>
                    <p class="">
                        <a href="appartDisplay.php?id=<?php echo $row['id']; ?>" target="_blank" class="label label-success1">Read More..</a>
                    </p>
                </div>
                <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>" class="img-responsive spec_img_height1">
            </div>
            <h4><?php echo $row['title']; ?></h4>
            <p><?php echo $row['description']; ?></p>
        </div>
        <?php } ?>
    </div>
    </div>
<?php } ?>


<?php
$strSQL = "SELECT * FROM roomtype where status=1 order by updatedOn DESC";
// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);
if (!empty($rs)) {
    ?>
    <div class="container" id="cont2">
    <div id="second_part" class="row bs-docs-featured-sites mrg_bot">
        <?php
        while ($row = mysql_fetch_array($rs)) {
            ?>
        <div class="col-sm-3">
            <div class="thumbnail">
                <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>" class="img-responsive spec_img_height1">
                <div class="">
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo substr($row['description'],0,50); ?>...</p>
                    <p>
                        <a href="roomDisplay.php?id=<?php echo $row['id']; ?>" target="_blank" class="label label-success1">Read More..</a>
                    </p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    </div>
<?php } ?>



<?php
$strSQL = "SELECT * FROM explore where status=1";
// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);
if (!empty($rs)) {
    ?>
    <div class="container" id="cont3">
    <div class="row mrg_bot">
        <?php
        while ($row = mysql_fetch_array($rs)) {
            ?>
        <div class="col-sm-6">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="thumbHead"><?php echo $row['title']; ?></h4>
                    <p class="">
                        <?php echo substr($row['description'],0,200); ?>...
                    </p>
                    <p class="">
                        <a href="exploreDisplay.php?id=<?php echo $row['id']; ?>" target="_blank" class="label label-success1">Read More..</a>
                    </p>
                </div>
                <center>
                    <h3>Explore &nbsp;<?php echo $row['title']; ?></h3> 
                </center>
                <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>" class="">
            </div>
        </div>
        <?php } ?>
    </div>
        <div class="container">
                <h2>Testimonials</h2>
            </div>
    </div>
<?php } ?>

<?php
$strSQL = "SELECT * FROM testimonials where status=1";
// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);
if (!empty($rs)) {
    ?>
<div class="container" id="cont4">
    <div class="row">
        <div class="col-md-12">
            <!-- Carousel
            ================================================== -->
            <div id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <div class="carousel-inner">
                        <?php
                        $i=0;
                        while ($row = mysql_fetch_array($rs)) {
                            $i++;
                            
                                if($i==1)
                                {
                                    echo '<div class="item active">';
                                }
                                else 
                                {
                                    echo '<div class="item">';
                                }
                                ?>
                                    <blockquote class="testimon">
                                        <p><?php echo $row['testimonial']; ?></p>
                                        <small><?php echo $row['author']; ?></small>
                                    </blockquote>
                                </div>
                                <?php
                            
                        }
                        ?>

                    </div>
            </div><!-- End Carousel -->
        </div>
    </div>
<div class="container">
    <h2>Clients</h2>
</div>
</div>
<?php } ?>


<?php
$strSQL = "SELECT * FROM clients where status=1";
// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);
if (!empty($rs)) {
    ?>
        <div id="demo">
        <div class="container" id="contClient">
            <div class="row mrg_bot">
                <div class="span12">

                    <div id="owl-demo" class="owl-carousel">
                        <?php
                        while ($row = mysql_fetch_array($rs)) {
                            ?>
                            <div class="item"><img src="<?php echo $row['logo']; ?>" class="img-responsive" alt="<?php echo $row['title']; ?>"></div>
                            <?php
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>

    </div>
<?php } ?>
