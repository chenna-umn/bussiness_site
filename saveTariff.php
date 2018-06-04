<?php
if( isset($_POST['title']) && isset($_POST['details']) && ($_POST['vtour']) && isset($_POST['fac']) && !empty($_POST['vtour']) && !empty($_POST['fac']) && !empty($_POST['title']) && !empty($_POST['details']) )
{   $data = $_POST;
    include_once 'mysql.php';
    $strSQL = "INSERT INTO tariff (title,details,virtualTour,facilities,status,createdOn,updatedOn) VALUES ('".$data['title']."','".$data['details']."','".$data['vtour']."','".$data['fac']."',".$data['status'].",'".time()."','".time()."')";
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
