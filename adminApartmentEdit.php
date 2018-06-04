<?php

if (isset($_POST['id']) && !empty($_POST['id'])) 
{
    $id = $_POST['id'];
    include_once 'mysql.php';

    $strSQL = "SELECT * FROM apartmentpage where id=".$id;

// Execute the query (the recordset $rs contains the result)
    $rs = mysql_query($strSQL);
    $row = mysql_fetch_array($rs);
   ?>
<form method="post" enctype="multipart/form-data" action="updateApartmentPage.php"  id="book_form" onsubmit="return validateForm()">
    <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>"/>
    <table class='table table-bordered'>
        <tr>
            <td>
                Apartment Name
            </td>
            <td>
                <input style="width:100%" id="title" type="text" name="title" value="<?php echo $row['title']; ?>" class="define_size inputClass" required/>
            </td>
        </tr>

        <tr>
            <td>
                Image
            </td>
            <td>
                <input style="width:100%" id="files" type="file" name="files" class="define_size inputClass"/>
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
                Description
            </td>
            <td>
                <textarea id="desc" name="desc" class="inputClass" style="width:100%"><?php echo $row['description']; ?></textarea>
            </td>
        </tr>

        <tr>
            <td>
                <img style="width: 100px;height: 100px;" class="thumbnail img-responsive" alt="<?php echo $row['title']; ?>" src="<?php echo $row['image']; ?>">
            </td>
            <td>
        <center>
            <input type='submit' value='Update Apartment' class='btn btn-primary removeBorderRadius'/>
        </center>
        </td>
        </tr>

    </table>
</form>
<div class='col-sm-12' id="errorMsg">

</div>
<script type="text/javascript">
var editor1 = CKEDITOR.replace( 'desc', {
    filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor1, '../' );
</script>
<?php } ?>