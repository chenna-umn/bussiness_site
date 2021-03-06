<?php
include_once 'mysql.php';

$strSQL = "SELECT * FROM testimonials";

// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);
?>
<br/><br/>
<div class='container'>
    <div class='row'>
        <div class="col-sm-4">
            <div class="col-sm-12">
                <center>
                    <a href="testimon.php" class="btn btn-primary removeBorderRadius">
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
                                        <blockquote class="testimon">
                                            <p><?php echo $row['testimonial']; ?></p>
                                            <small class="pull-right"><?php echo $row['author']; ?></small>
                                        </blockquote>
                                            
                                        <table class="col-sm-12 tooltip-examples">
                                            <tr>
                                                <td>
                                                    <a href="#" class="pull-left" data-toggle="tooltip" data-placement="right" title="Delete" onClick="performOperation('testimonDelete.php',<?php echo $row['id']; ?>,'#clientLogoLoad');">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </a>  
                                                </td>
                                                <td>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Edit" onClick="performOperation('editTestimon.php',<?php echo $row['id']; ?>,'#addClient');">
                                                        <center>
                                                            <span class="glyphicon glyphicon-edit"></span>
                                                        </center>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#" class="pull-right" data-toggle="tooltip" data-placement="left" title="Unblock" onClick="performOperation1('testimonStatus.php',<?php echo $row['id']; ?>,'#clientLogoLoad',<?php echo $row['status']; ?>);">
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
               
               if(($i%2)==0)
               {
                   echo "<div class='clear-fix'></div>";
               }
                    }
                }
                ?>

            </div>
            <br/><br/>
        </div>
        
        <div class='col-sm-8' id="addClient">
            <form method="post" action="saveTestimon.php"  id="book_form">
                <table class='table table-bordered'>
                    <tr>
                        <td>
                            Testimonial
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="testimonial" id="testimonial"></textarea>
                            
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Author
                        </td>
                        <td>
                            <input style="width:100%" id="author" type="text" name="author" class="define_size inputClass" required/>
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
                                <input type='submit' value='Save Testimonials' class='btn btn-primary removeBorderRadius'/>
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

<script type="text/javascript">
var editor1 = CKEDITOR.replace( 'testimonial', {
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