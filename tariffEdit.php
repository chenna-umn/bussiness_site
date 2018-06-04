<?php

if (isset($_POST['id']) && !empty($_POST['id'])) 
{
    $id = $_POST['id'];
    include_once 'mysql.php';

    $strSQL = "SELECT * FROM tariff where id=".$id;

// Execute the query (the recordset $rs contains the result)
    $rs = mysql_query($strSQL);
    $row = mysql_fetch_array($rs);
   ?>
<form method="post" enctype="multipart/form-data" action="updateTariff.php"  id="book_form">
    <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>"/>
    <table class='table table-bordered'>
                    <tr>
                        <td>
                            Tariff Name
                        </td>
                        <td>
                            <input style="width:100%" value="<?php echo $row['title']; ?>" id="title" type="text" name="title" class="define_size inputClass" required/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>
                                <select name="status" id="status" class="form-control inputClass" required>
                                    <?php
                                    if ($row['status'] == 1) {
                                        echo '<option value="1" selected="selected">Unblock</option>';
                                    } else {
                                        echo '<option value="1">Unblock</option>';
                                    }

                                    if ($row['status'] == 0) {
                                        echo '<option value="0" selected="selected">Block</option>';
                                    } else {
                                        echo '<option value="0">Block</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Details
                        </td>
                        <td>
                            <textarea id="details" name="details" class="inputClass" style="width:100%"><?php echo $row['details']; ?></textarea>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                           Virtual Tour
                        </td>
                        <td>
                            <textarea id="vtour" name="vtour" class="inputClass" style="width:100%"><?php echo $row['virtualTour']; ?></textarea>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                           Facilities
                        </td>
                        <td>
                            <textarea id="fac" name="fac" class="inputClass" style="width:100%"><?php echo $row['facilities']; ?></textarea>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan='2'>
                            <center>
                                <input type='submit' value='Update Tariff' class='btn btn-primary removeBorderRadius'/>
                            </center>
                        </td>
                    </tr>
                    
                </table>
</form>
<div class='col-sm-12' id="errorMsg">

</div>
<script type="text/javascript">
var editor1 = CKEDITOR.replace( 'details', {
    filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor1, '../' );

var editor2 = CKEDITOR.replace( 'vtour', {
    filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor2, '../' );

var editor3 = CKEDITOR.replace( 'fac', {
    filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor3, '../' );
</script>
<?php } ?>