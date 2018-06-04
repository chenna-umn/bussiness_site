<?php

if (isset($_POST['id']) && !empty($_POST['id'])) 
{
    $id = $_POST['id'];
    include_once 'mysql.php';

    $strSQL = "SELECT * FROM slider where id=".$id;

// Execute the query (the recordset $rs contains the result)
    $rs = mysql_query($strSQL);
    $row = mysql_fetch_array($rs);
   ?>

<form method="post" enctype="multipart/form-data" action="editSliderData.php"  id="book_form" onsubmit="return validateForm()">
                <input type="hidden" value="<?php echo $row['id']; ?>" name="id" id="id"/>
                <table class='table table-bordered'>
                    <tr>
                        <td>
                            Title
                        </td>
                        <td>
                            <input style="width:100%" id="title" type="text" name="title" value="<?php echo $row['title']; ?>" class="define_size inputClass" required/>
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
                            Slider Image
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
                                    if($row['status']==1)
                                    {
                                        echo '<option value="1" selected="selected">Unblock</option>';
                                    }
                                    else 
                                    {
                                        echo '<option value="1">Unblock</option>';
                                    }
                                    
                                    if($row['status']==0)
                                    {
                                        echo '<option value="0" selected="selected">Block</option>';
                                    }
                                    else 
                                    {
                                        echo '<option value="0">Block</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>" class="thumbnail img-responsive" style="width: 100px;height: 100px;"/>
                        </td>
                        <td>
                            <center>
                                <input type='submit' value='Update Slider' class='btn btn-primary removeBorderRadius'/>
                            </center>
                        </td>
                    </tr>
                    
                </table>
            </form>
            <div class='col-sm-12' id="errorMsg">
                
            </div>
<?php
}
?>
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
            return true;
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