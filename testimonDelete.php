<?php

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    include_once 'mysql.php';

    $strSQL = "DELETE FROM testimonials where id=".$id;

// Execute the query (the recordset $rs contains the result)
    $rs = mysql_query($strSQL);
}
header("Location: testimonalContent.php");
exit();
?>