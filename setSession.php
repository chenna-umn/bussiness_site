<?php
function setUserSessions($userId)
{
include_once 'mysql.php';
// SQL query
$strSQL = "SELECT * FROM users where id=" . $userId ;

// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);

// Loop the recordset $rs
// Each row will be made into an array ($row) using mysql_fetch_array
while ($row = mysql_fetch_array($rs)) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['permissions'] = $row['permissions'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['profile_pic'] = $row['profile_pic'];
        $_SESSION['gender'] = $row['gender'];
}
mysql_close();
}
?>