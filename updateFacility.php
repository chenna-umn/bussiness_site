<?php
if (isset($_POST['title']) && isset($_POST['facilities']) && !empty($_POST['title']) && !empty($_POST['facilities'])) {
$data = $_POST;
    include_once 'mysql.php';
    
    $strSQL = "UPDATE facilities set title='".$data['title']."',facility='".$data['facilities']."' where id=".$data['id'];
//    echo $strSQL;
//    exit();
    if(mysql_query($strSQL) or die())
     {
         mysql_close();
         header("Location: adminFacility.php");
        exit();
     }
    
}
mysql_close();
header("Location: adminFacility.php");
exit();
?>
