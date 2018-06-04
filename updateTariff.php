<?php
if( isset($_POST['title']) && isset($_POST['details']) && ($_POST['vtour']) && isset($_POST['fac']) && !empty($_POST['vtour']) && !empty($_POST['fac']) && !empty($_POST['title']) && !empty($_POST['details']) )
{   $data = $_POST;
    include_once 'mysql.php';
    $strSQL = "UPDATE tariff set title='".$data['title']."',details='".$data['details']."',virtualTour='".$data['vtour']."',facilities='".$data['fac']."',status=".$data['status'].",updatedOn='".time()."' where id=".$data['id'];
//    echo $strSQL;
//    exit();
    if(mysql_query($strSQL) or die())
     {
         mysql_close();
         header("Location: adminTariff.php");
        exit();
     }
    
}
mysql_close();
header("Location: adminTariff.php");
exit();
?>
