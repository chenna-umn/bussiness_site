<?php

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    include_once 'mysql.php';
    if($status==1)
    {
        $strSQL = "UPDATE testimonials set status=0 where id=".$id;
    }
    else if($status==0)
    {
        $strSQL = "UPDATE testimonials set status=1 where id=".$id;
    }
// Execute the query (the recordset $rs contains the result)
    $rs = mysql_query($strSQL);
}
header("Location: testimonalContent.php");
exit();
?>