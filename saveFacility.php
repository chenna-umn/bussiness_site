<?php

if (isset($_POST['title']) && isset($_POST['facilities']) && !empty($_POST['title']) && !empty($_POST['facilities'])) {
    $data = $_POST;
    include_once 'mysql.php';
    $strSQL = "INSERT INTO facilities (title,facility) VALUES ('" . $data['title'] . "','" . $data['facilities'] ."')";
//    echo $strSQL;
//    exit();
    if (mysql_query($strSQL) or die()) {
        mysql_close();
        header("Location: adminFacility.php");
        exit();
    }
}
mysql_close();
header("Location: adminFacility.php");
exit();
?>
