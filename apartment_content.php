<br/>
<div class="container">
    <center>
        <h2 class="fontItalic">
            Apartments
        </h2>
    </center>
</div>
<br/>
<div class="clear-fix"></div>
<div class="container">
    <center>
        <?php
        $strSQL = "SELECT * FROM apartmentpage where status=1 order by updatedOn DESC";
// Execute the query (the recordset $rs contains the result)
        $rs = mysql_query($strSQL);
        if (!empty($rs)) {
            while ($row = mysql_fetch_array($rs)) {
            ?>
            <div class="row thumbnail aprtext imgBoxShadow removeBorderRadius">
                <div class="col-sm-3" style="padding-left: 0px;padding-right: 0px;">
                    <img src="<?php echo $row['image']; ?>" class="img-responsive" alt="<?php echo $row['title']; ?>"/>
                </div>
                <div class="col-sm-9">
                    <h3 class="fontItalic">
                        <?php echo $row['title']; ?>
                    </h3>
                    <p>
                        <?php echo $row['description']; ?>
                    </p>
                    <br/>
                    <p>
                        <a href="checkNow.php" target="_blank" class="btn btn-danger removeBorderRadius">Check Availability</a>
                        <a href="facility.php" target="_blank" class="btn btn-danger removeBorderRadius">Facilities</a>
                    </p>
                </div>
            </div>
            <div class="clear-fix"></div><br/>
        <?php } } ?>


    </center>
</div>

<br/><br/>