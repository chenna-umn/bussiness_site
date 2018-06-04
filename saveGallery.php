<?php

if (isset($_POST['gal'])&& !empty($_POST['gal'])) {
    $data = $_POST;
    include_once 'mysql.php';
    $strSQL = "INSERT INTO gallery (locName,getId,galleryName,description,details,virtualTour,facility,maps,overview,address,status,createdOn,updatedOn) VALUES ('".$data['loc']."'," . $data['getId'] .",'" . $data['gal'] . "','" . $data['desc']. "','" . $data['details'] ."','" . $data['vtour'] ."','" . $data['facility'] ."','" . $data['map'] ."','" .$data['overview'] ."','" . $data['addr'] . "'," . $data['status'] . ",'" . time() . "','" . time() . "')";
//    echo $strSQL;
//    exit();
    if (mysql_query($strSQL) or die()) {
        mysql_close();
        header("Location: gallery.php");
        exit();
    }
}
mysql_close();
header("Location: gallery.php");
exit();
?>
