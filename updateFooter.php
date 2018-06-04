<?php
if( isset($_POST['title']) && isset($_POST['footer']) && !empty($_POST['title']) && !empty($_POST['footer']) )
{   $data = $_POST;
    include_once 'mysql.php';
    
    $strSQL = "UPDATE footer set footer='".$data['footer']."',title='".$data['title']."',status=".$data['status'].",updatedOn='".time()."' where id=".$data['id'];
//    echo $strSQL;
//    exit();
    if(mysql_query($strSQL) or die())
     {
         mysql_close();
         header("Location: adminFooterChange.php");
        exit();
     }
    
}
mysql_close();
header("Location: adminFooterChange.php");
exit();
?>
