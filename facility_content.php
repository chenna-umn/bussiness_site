<?php
    include_once 'mysql.php';
    $strSQL = "SELECT * FROM facilities LIMIT 1";

// Execute the query (the recordset $rs contains the result)
    $rs = mysql_query($strSQL);
   ?>
<style>
    ul
    {
        list-style-type: none;
    }
</style>
<br/><br/>
<div class="container">
    <div class="row">
        <div class="widget col-sm-8">
            <?php while ($row = mysql_fetch_array($rs)) { ?>
            <div class="container">
                <center>
                    <h2><?php echo $row['title']; ?></h2>
                </center>
            </div>
            <div class="container">
                <?php echo $row['facility']; ?>
            </div>
            <br>
            <br>
            <br>
            <br>
            <?php } ?>
        </div>
        <div class="col-sm-4">
            <br/><br/><br/>
            <?php include_once 'checkAvail1.php'; ?>
        </div>
    </div>
</div>