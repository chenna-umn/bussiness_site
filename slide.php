<?php
$strSQL = "SELECT * FROM slider where status=1 order by updateOn DESC";
// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);
if (!empty($rs)) {
    ?>
<div class="container-fluid" id="slide">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php 
            $noRows = mysql_num_rows($rs);
            for($i=0;$i<$noRows; $i++) {
            ?>
            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i==0)?'active':''; ?>"></li>
            <?php } ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php 
            $i=0;
            while ($row = mysql_fetch_array($rs)) {
                $i++;
                ?>
            <div class="item <?php echo ($i==1)?'active':''; ?>">
                <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>" class="slide_img">
                <div class="carousel-caption">
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                </div>
            </div>
        <?php } ?>
            
        </div>
    </div>
</div>

<?php } ?>