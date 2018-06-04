<?php
if( isset($_POST['gal'])&& !empty($_POST['gal']) )
{   $data = $_POST;
    include_once 'mysql.php';
    $strSQL = "UPDATE gallery set locName='".$data['loc']."',getId=".$data['getId'].",galleryName='".$data['gal']."',description='".$data['desc']."',details='".$data['details']."',virtualTour='".$data['vtour']."',facility='".$data['facility']."',maps='".$data['map']."',overview='".$data['overview']."',address='".$data['addr']."',status=".$data['status'].",updatedOn='".time()."' where id=".$data['id'];
//    echo $strSQL;
//    exit();
    if(mysql_query($strSQL) or die())
     {
         mysql_close();
         header("Location: gallery.php");
        exit();
     }
    
}
mysql_close();
header("Location: gallery.php");
exit();
?>
