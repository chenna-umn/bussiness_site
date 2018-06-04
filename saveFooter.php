<?php

if (isset($_POST['footer']) && isset($_POST['title']) && !empty($_POST['footer']) && !empty($_POST['title'])) {
    $data = $_POST;
    include_once 'mysql.php';
    $strSQL = "INSERT INTO footer (footer,title,status,createdOn,updatedOn) VALUES ('" . $data['footer'] . "','" . $data['title'] . "'," . $data['status'] . ",'" . time() . "','" . time() . "')";
//    echo $strSQL;
//    exit();
    if (mysql_query($strSQL) or die()) {
        mysql_close();
        header("Location: adminFooterChange.php");
        exit();
    }
}
mysql_close();
header("Location: adminFooterChange.php");
exit();
?>
