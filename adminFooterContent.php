<?php
include_once 'mysql.php';

$strSQL = "SELECT * FROM footer";

// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);
?>
<br/><br/>
<div class='container'>
    <div class='row'>
        <div class="col-sm-4">
            <div class="col-sm-12">
                <center>
                    <a href="adminFooterChange.php" class="btn btn-primary removeBorderRadius">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;<b>Add New</b>
                    </a>
                </center>
            </div>
            <br/>
            <div class="clear-fix"></div>
            <div class="col-sm-12" id="clientLogoLoad">
                <?php
                $i=0;
                if (!empty($rs)) {
                    while ($row = mysql_fetch_array($rs)) {
                        $i++;
                        ?>
                <div class="col-sm-12">
                            <div class="thumbnail" id='profPic1'>
                                <div class="">
                                    <center>
                                        <h5><?php echo $row['title']; ?></h5>    
                                        <table class="col-sm-12 tooltip-examples">
                                            <tr>
                                                <td>
                                                    <a href="#" class="pull-left" data-toggle="tooltip" data-placement="right" title="Delete" onClick="performOperation('adminFooterDelete.php',<?php echo $row['id']; ?>,'#clientLogoLoad');">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </a>  
                                                </td>
                                                <td>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Edit" onClick="performOperation('editFooter.php',<?php echo $row['id']; ?>,'#addClient');">
                                                        <center>
                                                            <span class="glyphicon glyphicon-edit"></span>
                                                        </center>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#" class="pull-right" data-toggle="tooltip" data-placement="left" title="<?php echo ($row['status'] == 0) ? 'Un Block' : 'Block'; ?>" onClick="performOperation1('footerStatus.php',<?php echo $row['id']; ?>,'#clientLogoLoad',<?php echo $row['status']; ?>);">
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

            </div>
            <br/><br/>
        </div>
        
        <div class='col-sm-8' id="addClient">
            <form method="post" action="saveFooter.php"  id="book_form">
                <table class='table table-bordered'>
                    
                    <tr>
                        <td>
                            Title
                        </td>
                        <td>
                            <input style="width:100%" id="title" type="text" name="title" class="define_size inputClass" required/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Footer Content
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="footer" id="footer"></textarea>
                            
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>
                            <select name="status" id="status" class="form-control inputClass" required>
                                <option value="1" selected="selected">Unblock</option>
                                <option value="0">Block</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan='2'>
                            <center>
                                <input type='submit' value='Save Footer' class='btn btn-primary removeBorderRadius'/>
                            </center>
                        </td>
                    </tr>
                    
                </table>
            </form>
            <div class='col-sm-12' id="errorMsg">
                
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
var editor1 = CKEDITOR.replace( 'footer', {
    filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor1, '../' );
</script>
<br/><br/><br/><br/>