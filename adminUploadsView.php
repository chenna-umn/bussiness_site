<?php
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $locId = $_POST['id'];
    include_once 'mysql.php';
    $strSQL = "SELECT * FROM galleryimages where gal_id=" . $locId;
// Execute the query (the recordset $rs contains the result)
    $rs = mysql_query($strSQL);

    if (!empty($rs)) {
        while ($row = mysql_fetch_array($rs)) {
            ?>
            <div class="col-sm-4">
                <div class="thumbnail" id='profPic1'>
                    <img class="img-responsive clientAdminMinHeight" alt="<?php echo $row['title']; ?>" src="<?php echo $row['image']; ?>">
                    <div class="">
                        <center>
                            <h5>
                                <?php echo $row['title']; ?>
                            </h5>
                            <table class="col-sm-12 tooltip-examples">
                                <tr>
                                    <td>
                                        <a href="#" class="pull-left" data-toggle="tooltip" data-placement="right" title="Delete" onClick="performOperation1('galleryDelete.php',<?php echo $row['id']; ?>, '#addClient',<?php echo $locId; ?>);">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>  
                                    </td>
                                </tr>
                            </table>
                        </center>
                    </div>
                </div>
                <br/>
            </div>

        <?php }
    }
} ?>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">

$(document).ready(function(){

    $(".tooltip-examples a").tooltip();   

});

</script>