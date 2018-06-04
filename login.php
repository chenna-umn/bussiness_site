<!DOCTYPE html>
<html>
    <head>
        <?php
        session_start();
        if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
            header("Location: admin.php");
            exit();
        }
        ?>
        <?php include_once 'adminHead.php'; ?>
    </head>
    <body>
        <?php include_once 'adminTop.php'; ?>
        <?php include_once 'adminContent.php'; ?>
        <?php include_once 'adminfooter.php'; ?>
    </body>
</html>