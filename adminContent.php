<div class="container">
    
    <center>
        <form class="form-inline formTop" role="form" method="post">
            <br/>
            <h3>Admin Login</h3>
            <div class="form-group">
                <div class="input-group marginBot">
                    <div class="input-group-addon inputBorderRadius">
                        <span class="glyphicon glyphicon-user"></span>
                    </div>
                    <input class="form-control inputBorderRadius" type="text" placeholder="User Name" name="username" id="username" required>
                </div>
            </div>
            <br/>
            <div class="form-group">
                <div class="input-group marginBot">
                    <div class="input-group-addon inputBorderRadius">
                        <span class="glyphicon glyphicon-barcode"></span>
                    </div>
                    <input class="form-control inputBorderRadius" type="password" placeholder="Password" name="password" id="password" required>
                </div>
            </div>
            <br/>
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control inputBorderRadius btn-success" type="submit" value="login" style="width: 100px;">
                    <input class="form-control inputBorderRadius btn-success" type="reset" value="Clear" style="width: 100px;margin-left: 10px;">
                </div>
            </div>
            <br/>
            <div class="form-group" style="margin-top:10px;">
                <div class="input-group">
                    <?php
                    if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
                        $username = $_POST['username'];
                        $password = md5($_POST['password']);
                        
                        include_once 'mysql.php';

                        // SQL query
                        $strSQL = "SELECT * FROM users where username='" . $username . "'";

                        // Execute the query (the recordset $rs contains the result)
                        $rs = mysql_query($strSQL);

                        // Loop the recordset $rs
                        // Each row will be made into an array ($row) using mysql_fetch_array
                        while ($row = mysql_fetch_array($rs)) {
                            if ($row['username'] == $username && $row['password'] == $password) {
                                include_once 'setSession.php';
                                setUserSessions($row['id']);
                            }
                        }
                        mysql_close();
                        if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                            header("Location: admin.php");
                            exit();
                        } else {
                            echo '<label for="fname" class="error">Invalid Username/Password.</label>';
                        }
                    }
                    ?>
                </div>
            </div>
        </form>
    </center>
    <br/><br/>
</div>
<style>
    #footBot
    {
        margin-top: 90px;
    }
    .marginBot
    {
        margin-bottom: 10px;
        padding-left: 5px;
        padding-right: 5px;
    }
    .formTop
    {
        /*margin-top: 42px;*/
        border: #BBB solid 1px;
        width: 300px;
        height: 300px;
        border-radius: 500px;
        box-shadow: 2px 2px 5px #888888, -2px -2px 5px #888888;
    }
    .inputBorderRadius
    {
        border-radius: 0px;
    }
    .form-group
    {
        width: 210px;
    }
</style>
<link rel="stylesheet" href="date/base/jquery.ui.all.css">
