<?php

if (isset($_POST['id']) && !empty($_POST['id'])) 
{
    $id = $_POST['id'];
    include_once 'mysql.php';

    $strSQL = "SELECT * FROM gallery where id=".$id;

// Execute the query (the recordset $rs contains the result)
    $rs = mysql_query($strSQL);
    $row = mysql_fetch_array($rs);
   ?>
<form method="post" action="updateAdminGallery.php"  id="book_form">
                <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>"/>
                <table class='table table-bordered'>
                    
                    <tr>
                        <td>
                            Gallery Name
                        </td>
                        <td>
                            <input style="width:100%" id="gal" type="text" name="gal" value="<?php echo $row['galleryName']; ?>" class="define_size inputClass" required/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Get Id
                        </td>
                        <td>
                            <input style="width:100%" id="getId" type="text" name="getId" value="<?php echo $row['getId']; ?>" class="define_size inputClass" required/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Location
                        </td>
                        <td>
                            <select name="loc" id="loc" class="form-control" style="width:80%;">
                                <?php
                                    if($row['locName']=='Hyderabad')
                                    {
                                    echo '<option value="Hyderabad" selected="selected">Hyderabad</option>';
                                    } else
                                    {
                                    echo '<option value="Hyderabad">Hyderabad</option>';
                                    }

                                    if($row['locName']=='Vizag')
                                    {
                                    echo '<option value="Vizag" selected="selected">Vizag</option>';
                                    }
                                    else 
                                    {
                                        echo '<option value="Vizag">Vizag</option>';
                                    }
                                    
                                    if($row['locName']=='Bhimavaram')
                                    {
                                    echo '<option value="Bhimavaram" selected="selected">Bhimavaram</option>';
                                    }
                                    else 
                                    {
                                        echo '<option value="Bhimavaram">Bhimavaram</option>';
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
                            <textarea style="width:100%" class="inputClass" name="desc" id="desc"><?php echo $row['description']; ?></textarea>
                            
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Address
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="addr" id="addr"><?php echo $row['address']; ?></textarea>
                            
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td>
                            Details
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="details" id="details"><?php echo $row['details']; ?></textarea>
                            
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td>
                            Virtual Tour
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="vtour" id="vtour"><?php echo $row['virtualTour']; ?></textarea>
                            
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Facilities
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="facility" id="facility"><?php echo $row['facility']; ?></textarea>
                            
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Map
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="map" id="map"><?php echo $row['maps']; ?></textarea>
                            
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Overview
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="overview" id="overview"><?php echo $row['overview']; ?></textarea>
                            
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
                                    } else
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
                        <td colspan='2'>
                            <center>
                                <input type='submit' value='Save Gallery' class='btn btn-primary removeBorderRadius'/>
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

var editor2 = CKEDITOR.replace( 'addr', {
    filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor2, '../' );

var editor3 = CKEDITOR.replace( 'details', {
    filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor3, '../' );

var editor4 = CKEDITOR.replace( 'vtour', {
    filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor4, '../' );

var editor5 = CKEDITOR.replace( 'facility', {
    filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor5, '../' );

var editor6 = CKEDITOR.replace( 'map', {
    filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor6, '../' );

var editor7 = CKEDITOR.replace( 'overview', {
    filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor7, '../' );
</script>
<br/><br/><br/><br/>