<?php
    include_once 'mysql.php';
    $strSQL = "SELECT * FROM facilities LIMIT 1";

// Execute the query (the recordset $rs contains the result)
    $rs = mysql_query($strSQL);
    $row = mysql_fetch_array($rs);
   ?>
<br/><br/>
<div class="container">
    <div vlass="row">
        <div class='col-sm-1'></div>
        <div class='col-sm-10' id="addClient">
            
            <form method="post" action="<?php echo (isset($row['id']) && !empty($row['id']))?'updateFacility.php':'saveFacility.php'; ?>"  id="book_form">
                <?php 
                if( isset($row['id']) && !empty($row['id']))
                {
                    echo "<input type='hidden' name='id' id='id' value=".$row['id'].">";
                }
                ?>
                <table class='table table-bordered'>
                    <tr>
                        <td>
                            Title
                        </td>
                        <td>
                            <input style="width:100%" id="title" type="text" name="title" value="<?php echo (isset($row['title']) && !empty($row['title']))?$row['title']:''; ?>" class="define_size inputClass" required/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Facilities
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="facilities" id="facilities"><?php echo (isset($row['facility']) && !empty($row['facility']))?$row['facility']:''; ?></textarea>

                        </td>
                    </tr>
                    

                    <tr>
                        <td colspan='2'>
                    <center>
                        <input type='submit' value='<?php echo (isset($row['id']) && !empty($row['id']))?'Update':'Save'; ?> Facilities' class='btn btn-primary removeBorderRadius'/>
                    </center>
                    </td>
                    </tr>

                </table>
            </form>
            <div class='col-sm-12' id="errorMsg">

            </div>
        </div>
        <div class='col-sm-1'></div>
    </div>
</div>

<script type="text/javascript">
var editor1 = CKEDITOR.replace( 'facilities', {
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