<?php

if (isset($_POST['testimonial']) && isset($_POST['author']) && !empty($_POST['testimonial']) && !empty($_POST['author'])) {
    $data = $_POST;
    include_once 'mysql.php';
    $strSQL = "INSERT INTO testimonials (testimonial,author,status,createdOn,updatedOn) VALUES ('" . $data['testimonial'] . "','" . $data['author'] . "'," . $data['status'] . ",'" . time() . "','" . time() . "')";
//    echo $strSQL;
//    exit();
    if (mysql_query($strSQL) or die()) {
        mysql_close();
        header("Location: testimon.php");
        exit();
    }
}
mysql_close();
header("Location: testimon.php");
exit();
?>
