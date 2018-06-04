<?php
if( isset($_POST['testimonial']) && isset($_POST['author']) && !empty($_POST['testimonial']) && !empty($_POST['author']) )
{   $data = $_POST;
    include_once 'mysql.php';
    
    $strSQL = "UPDATE testimonials set testimonial='".$data['testimonial']."',author='".$data['author']."',status=".$data['status'].",updatedOn='".time()."' where id=".$data['id'];
//    echo $strSQL;
//    exit();
    if(mysql_query($strSQL) or die())
     {
         mysql_close();
         header("Location: testimon.php");
        exit();
     }
    
}
mysql_close();
header("Location: testimon.php");
exit();
?>
