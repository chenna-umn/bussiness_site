<?php
include_once 'mysql.php';

$strSQL = "SELECT * FROM testimonials";

// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);
if (!empty($rs)) {
    while ($row = mysql_fetch_array($rs)) {
        ?>
        <div class="col-sm-12">
            <div class="thumbnail" id='profPic1'>
                <div class="">
                    <center>
                        <blockquote class="testimon">
                            <p><?php echo $row['testimonial']; ?></p>
                            <small class="pull-right"><?php echo $row['author']; ?></small>
                        </blockquote>

                        <table class="col-sm-12 tooltip-examples">
                            <tr>
                                <td>
                                    <a href="#" class="pull-left" data-toggle="tooltip" data-placement="right" title="Delete" onClick="performOperation('testimonDelete.php',<?php echo $row['id']; ?>, '#clientLogoLoad');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>  
                                </td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Edit" onClick="performOperation('editTestimon.php',<?php echo $row['id']; ?>, '#addClient');">
                                        <center>
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </center>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" class="pull-right" data-toggle="tooltip" data-placement="left" title="Unblock" onClick="performOperation1('testimonStatus.php',<?php echo $row['id']; ?>, '#clientLogoLoad',<?php echo $row['status']; ?>);">
                                        <span class="<?php echo ($row['status'] == 0) ? 'glyphicon glyphicon-remove' : 'glyphicon glyphicon-ok'; ?>"></span>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </center>
                </div>
            </div>
            <br/>
        </div>

        <?php
    }
}
?>

<script src="js/bootstrap.js"></script>
<script type="text/javascript">

$(document).ready(function(){

    $(".tooltip-examples a").tooltip();   

});

</script>