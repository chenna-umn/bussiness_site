<?php

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    include_once 'mysql.php';

    $strSQL = "DELETE FROM gallery where id=".$id;

// Execute the query (the recordset $rs contains the result)
    $rs = mysql_query($strSQL);
}
header("Location: adminGalleryContent1.php");
exit();
?>