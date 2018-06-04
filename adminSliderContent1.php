<?php
include_once 'mysql.php';

$strSQL = "SELECT * FROM slider";

// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);
?>
<?php
$i = 0;
if (!empty($rs)) {
    while ($row = mysql_fetch_array($rs)) {
        $i++;
        ?>
        <div class="col-sm-6">
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
                                    <?php $data = $row['id']; ?>
                                    <a href="#" class="pull-left" data-toggle="tooltip" data-placement="right" title="Delete" onClick="performOperation('sliderDelete.php',<?php echo $data; ?>, '#clientLogoLoad');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>  
                                </td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Edit" onClick="performOperation('editSlider.php',<?php echo $row['id']; ?>,'#addClient');">
                                        <center>
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </center>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" class="pull-right" data-toggle="tooltip" data-placement="left" title="<?php echo ($row['status'] == 0) ? 'Unblock' : 'Block'; ?>" onClick="performOperation1('sliderStatus.php',<?php echo $row['id']; ?>,'#clientLogoLoad',<?php echo $row['status']; ?>);">
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
        if (($i % 2) == 0) {
            echo "<div class='clear-fix'></div>";
        }
    }
}
?>

<script src="js/bootstrap.js"></script>
<script type="text/javascript">

$(document).ready(function(){

    $(".tooltip-examples a").tooltip();   

});

</script>