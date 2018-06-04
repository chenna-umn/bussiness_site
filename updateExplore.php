<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$newFileName = 'uploads/explore/';
if (isset($_FILES["files"])) {
    if ($_FILES["files"]["error"] > 0) 
    {
        storeData($_POST,'');
    } else {
        $newFileName = $newFileName.time() . str_shuffle('abcdEfghIjkl012345') . $_FILES["files"]["name"];
        if (move_uploaded_file($_FILES["files"]["tmp_name"], $newFileName)) 
        {   
            $_COOKIE['error'] = '';
            storeData($_POST,$newFileName);
        } else {
            $_COOKIE['error'][] = 'Image Upload Failed';
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
        $strSQL = "UPDATE explore set title='".$data['title']."',image='".$newFile."',description='".$data['desc']."',status=".$data['status'].",updatedOn='".time()."' where id=".$data['id'];
    }
    else
    {
        $strSQL = "UPDATE explore set title='".$data['title']."',description='".$data['desc']."',status=".$data['status'].",updatedOn='".time()."' where id=".$data['id'];
    }
//    echo $strSQL;
//    exit();
    // Execute the query (the recordset $rs contains the result)
     if(mysql_query($strSQL) or die())
     {
         mysql_close();
        header("Location: explore.php");
        exit();
     }
     else 
     {
         $_COOKIE['error'][] = 'Data Storage Failed';
     }
     mysql_close();
    header("Location: explore.php");
    exit();
    
}
mysql_close();
header("Location: explore.php");
exit();
?>
