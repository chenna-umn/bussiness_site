<?php
include_once 'mysql.php';

$strSQL = "SELECT * FROM gallery order by updatedOn desc";

// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);
?>

<form method="post" enctype="multipart/form-data" action="saveUpload.php"  id="book_form" onsubmit="return validateForm()">
    <table class='table table-bordered'>
        <tr>
            <td>
                Select Gallery
            </td>
            <td>
                <select name="gallery" id="gallery" class="form-control inputClass" required>
                    <?php 
                    $i=0;
                    while ($row = mysql_fetch_array($rs)) { 
                        $i++;
                        if($i==1){
                        ?>
                    <option value="<?php echo $row['getId']; ?>" selected="selected"><?php echo $row['galleryName']; ?></option>
                        <?php } else { ?>
                    <option value="<?php echo $row['getId']; ?>"><?php echo $row['galleryName']; ?></option>
                    <?php } } ?>
                </select>
            </td>
        </tr>
        
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
                Image
            </td>
            <td>
                <input style="width:100%" id="files" type="file" name="files" class="define_size inputClass" required/>
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
            <input type='submit' value='Upload Photos' class='btn btn-primary removeBorderRadius'/>
        </center>
        </td>
        </tr>

    </table>
</form>
<div class='col-sm-12' id="errorMsg">

</div>

<script>
function validateForm() 
{
var size = 0;
    var fileInput = document.getElementById ("files");
    var errorMsg  = document.getElementById ("errorMsg");  
    if ('files' in fileInput) 
    {  
        if (fileInput.files.length == 0) 
        {
            errorMsg.innerHTML = "<span class='alert alert-danger'>Please Upload a File</span>";
            fileInput.value = "";
        }
        else 
        {   
            for (var i = 0; i < fileInput.files.length; i++) 
            {
                var file = fileInput.files[i];
                if ('size' in file) 
                {
                     size = file.size;
                }
            }
            if(size == 0)
            {
                 errorMsg.innerHTML = "<span class='alert alert-danger'>Empty File Not Allowed Here.</span>";   
                 fileInput.value = "";
            }
            else
            {    
            var extension = fileInput.value.substr( (fileInput.value.lastIndexOf('.') +1) );
            extension   =   extension.toLowerCase();
            if( extension == 'jpg' || extension == 'jpeg' || extension == 'gif' || extension == 'png' || extension == 'bmp' )
             {
//                 $('#target').submit();
                   return true;
             }
             else
             {
                  errorMsg.innerHTML = "<span class='alert alert-danger'>Only .jpg, .jpeg, .gif, .png extension is supported.</span>";   
                  fileInput.value = "";
             }
            }
         }
     }
return false;
}
</script>
<br/><br/><br/><br/>