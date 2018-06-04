<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$newFileName = 'uploads/gallery/';
if (isset($_FILES["files"])) {
    if ($_FILES["files"]["error"] > 0) {
        storeData($_POST, '');
    } else {
        $newFileName = $newFileName . time() . str_shuffle('abcdEfghIjkl012345') . $_FILES["files"]["name"];
        if (move_uploaded_file($_FILES["files"]["tmp_name"], $newFileName)) {
            include_once 'resize.php';
            $storeLocation = 'uploads/gallery/thumb/';
            $image = new SimpleImage();
            $image->load($newFileName);
            $image->resize(72, 72);
            $thumbName = $storeLocation . time() . str_shuffle('abcdEfghIjkl012345') . $_FILES["files"]["name"];
            $image->save($thumbName);
            $_COOKIE['error'] = '';
            storeData($_POST, $newFileName,$thumbName);
        } else {
            $_COOKIE['error'][] = 'Image Upload Failed';
        }
    }
} else {
    storeData($_POST, '');
}

function storeData($data, $newFile, $thumbFile) {
    include_once 'mysql.php';
    // SQL query
    if (!empty($newFile)) {
        $strSQL = "INSERT INTO galleryimages (gal_id,title,image,thumb,status,createdOn,updatedOn) VALUES (" . $data['gallery'] . ",'" . $data['title'] . "','" . $newFile . "','" . $thumbFile . "',". $data['status'] . ",'" . time() . "','" . time() . "')";
    }
//    echo $strSQL;
//    exit();
    // Execute the query (the recordset $rs contains the result)
    if (mysql_query($strSQL) or die()) {
        mysql_close();
        header("Location: gallery.php");
        exit();
    } else {
        $_COOKIE['error'][] = 'Data Storage Failed';
    }
    mysql_close();
    header("Location: gallery.php");
    exit();
}

mysql_close();
header("Location: gallery.php");
exit();
?>
