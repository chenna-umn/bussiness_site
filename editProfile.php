<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

$newFileName = 'uploads/profile/';
if (isset($_FILES["profile_pic"])) {
    if ($_FILES["profile_pic"]["error"] > 0) 
    {
        storeData($_POST,'');
    } 
    elseif ($_FILES['profile_pic']['type']!='image/jpeg') {
        storeData($_POST,'');
    }
    else {
        $newFileName = $newFileName.time() . str_shuffle('abcdEfghIjkl012345') . $_FILES["profile_pic"]["name"];
        if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $newFileName)) 
        {   
            $_COOKIE['error'] = '';
            storeData($_POST,$newFileName);
        } else {
            $_COOKIE['error'] = 'Image Upload Failed';
        }
    }
}
else
{
    storeData($_POST,'');
}

function storeData($data,$newFile)
{   
    include_once 'mysql.php';
    // SQL query
    if(!empty($newFile))
    {
    $strSQL = "UPDATE users SET fullname='".$data['fullname']."', email='".$data['email']."', gender='".$data['gender']."', dob='".$data['dob']."',mobile='".$data['mobile']."', profile_pic='".$newFile."' WHERE id=".$_SESSION['id'];
    }
    else
    {
        $strSQL = "UPDATE users SET fullname='".$data['fullname']."', email='".$data['email']."', gender='".$data['gender']."', dob='".$data['dob']."',mobile='".$data['mobile']."' WHERE id=".$_SESSION['id'];
    }
    
    // Execute the query (the recordset $rs contains the result)
     if(mysql_query($strSQL) or die())
     {
         include_once 'setSession.php';
         setUserSessions($_SESSION['id']);
     }
    header("Location: profile.php");
    exit();
    mysql_close();
}
?>
