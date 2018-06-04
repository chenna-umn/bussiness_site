<?php
include_once 'mysql.php';

$strSQL = "SELECT * FROM gallery where locName='Hyderabad'";

// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);
?>
<br/><br/>
<div class='container'>
    <div class='row'>
        <div class="col-sm-4">
            <div class="col-sm-12">
                <center>
                    <a href="gallery.php" class="btn btn-primary removeBorderRadius">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;<b>Create Gallery</b>
                    </a>

                    <a href="#" class="btn btn-primary removeBorderRadius" onClick="performOperation('adminUploadGallery.php', 'uploadPhotos', '#addClient');">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;<b>Upload Photos</b>
                    </a>
                </center>
            </div>
            <br/>
            <div class="col-sm-12">
                <center>
                    <h5>Select Location</h5>
                    <select name="location" id="location" class="form-control" style="width:80%;">
                        <option value="Hyderabad" selected="selected">Hyderabad</option>
                        <option value="Vizag">Vizag</option>
                        <option value="Bhimavaram">Bhimavaram</option>
                    </select>
                </center>
            </div>
            <br/>

            <div class="clear-fix"></div>
            <div class="col-sm-12" id="clientLogoLoad">
                <?php
                if (!empty($rs)) {
                    while ($row = mysql_fetch_array($rs)) {
                        ?>
                        <div class="col-sm-12">
                            <div class="thumbnail imgBoxShadow">
                                <div class="">
                                    <center>
                                        <table class="col-sm-12 tooltip-examples">
                                            <tr>
                                                <td>
                                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="View Gallery" onClick="performOperation('adminUploadsView.php',<?php echo $row['getId']; ?>, '#addClient');">
                                                        <center>
                                                            <span class="glyphicon glyphicon-picture"></span>
                                                        </center>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                        <h5>
                                            <?php echo $row['galleryName']; ?>
                                        </h5>
                                        <table class="col-sm-12 tooltip-examples">
                                            <tr>
                                                <td>
                                                    <a href="#" class="pull-left" data-toggle="tooltip" data-placement="right" title="Delete" onClick="performOperation('adminGalleryDelete.php',<?php echo $row['id']; ?>, '#clientLogoLoad');">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </a>  
                                                </td>
                                                <td>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Edit" onClick="performOperation('adminGalleryEdit.php',<?php echo $row['id']; ?>, '#addClient');">
                                                        <center>
                                                            <span class="glyphicon glyphicon-edit"></span>
                                                        </center>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#" class="pull-right" data-toggle="tooltip" data-placement="left" title="Unblock" onClick="performOperation1('adminGalleryStatus.php',<?php echo $row['id']; ?>, '#clientLogoLoad',<?php echo $row['status']; ?>);">
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
            <form method="post" action="saveGallery.php"  id="book_form">
                <table class='table table-bordered'>

                    <tr>
                        <td>
                            Gallery Name
                        </td>
                        <td>
                            <input style="width:100%" id="gal" type="text" name="gal" class="define_size inputClass" required/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Get Id
                        </td>
                        <td>
                            <input style="width:100%" id="getId" type="text" name="getId" class="define_size inputClass" required/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Location
                        </td>
                        <td>
                            <select name="loc" id="loc" class="form-control" style="width:80%;">
                                <option value="Hyderabad" selected="selected">Hyderabad</option>
                                <option value="Vizag">Vizag</option>
                                <option value="Bhimavaram">Bhimavaram</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Description
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="desc" id="desc"></textarea>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            Address
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="addr" id="addr"></textarea>

                        </td>
                    </tr>


                    <tr>
                        <td>
                            Details
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="details" id="details"></textarea>

                        </td>
                    </tr>


                    <tr>
                        <td>
                            Virtual Tour
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="vtour" id="vtour"></textarea>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            Facilities
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="facility" id="facility"></textarea>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            Map
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="map" id="map"></textarea>

                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Overview
                        </td>
                        <td>
                            <textarea style="width:100%" class="inputClass" name="overview" id="overview"></textarea>

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
                        <input type='submit' value='Save Gallery' class='btn btn-primary removeBorderRadius'/>
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
                        var editor1 = CKEDITOR.replace('desc', {
                            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
                            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
                            filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash',
                            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                            filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                        });
                        CKFinder.setupCKEditor(editor1, '../');

                        var editor2 = CKEDITOR.replace('addr', {
                            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
                            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
                            filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash',
                            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                            filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                        });
                        CKFinder.setupCKEditor(editor2, '../');

                        var editor3 = CKEDITOR.replace('details', {
                            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
                            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
                            filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash',
                            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                            filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                        });
                        CKFinder.setupCKEditor(editor3, '../');

                        var editor4 = CKEDITOR.replace('vtour', {
                            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
                            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
                            filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash',
                            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                            filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                        });
                        CKFinder.setupCKEditor(editor4, '../');

                        var editor5 = CKEDITOR.replace('facility', {
                            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
                            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
                            filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash',
                            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                            filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                        });
                        CKFinder.setupCKEditor(editor5, '../');

                        var editor6 = CKEDITOR.replace('map', {
                            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
                            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
                            filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash',
                            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                            filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                        });
                        CKFinder.setupCKEditor(editor6, '../');
                        
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
