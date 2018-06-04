<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include_once 'mysql.php';
    $strSQL = "SELECT * FROM appartment where status=1 AND id=".$id;
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
                <div class="col-sm-3">
                    <div class="thumbnail imgBoxShadow">
                        <img class="img-responsive" alt="<?php echo $row['title']; ?>" src="<?php echo $row['image']; ?>">
                        <div class="">
                            <center>
                                <h3>
                                    <?php echo $row['title']; ?>
                                </h3>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <p>
                        <?php echo $row['hoverDescription']; ?>
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