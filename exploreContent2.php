<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include_once 'mysql.php';
    $strSQL = "SELECT * FROM explore where status=1 AND id=".$id;
    // Execute the query (the recordset $rs contains the result)
    $rs = mysql_query($strSQL);
}
?>
<br/><br/>
<div class='container'>
    <?php
    if (!empty($rs)) {
        while ($row = mysql_fetch_array($rs)) {
            ?>
            <div class='row'>
                <div class="col-sm-4">
                    <div class="thumbnail imgBoxShadow">
                        <div class="">
                            <center>
                                <h3>
                                    Explore &nbsp;<?php echo $row['title']; ?>
                                </h3>
                            </center>
                        </div>
                        <img class="img-responsive" alt="<?php echo $row['title']; ?>" src="<?php echo $row['image']; ?>">
                        
                    </div>
                </div>
                <div class="col-sm-8">
                    <p>
                        <?php echo $row['description']; ?>
                    </p>
                </div>
            </div>
            <br/><br/>
            <?php
        }
    }
    ?>
</div>

<br/>