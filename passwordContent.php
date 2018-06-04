<br/><br/>
<div class='container'>
    <div class='row'>
        <div class="col-sm-3">
            <div class="thumbnail" id='profPic1'>
                <?php
                    if (isset($_SESSION['profile_pic']) && !empty($_SESSION['profile_pic'])) {
                        ?>
                        <img class="img-responsive" alt="Profile Pic" src="<?php echo $_SESSION['profile_pic']; ?>">
                        <?php
                    } else {
                        ?>
                        <img src="img/avatar.png" alt="Profile Pic" class="img-responsive">
                    <?php } ?>
                        <div class="">
                            <center>
                                <h3>
                                    <?php echo isset($_SESSION['fullname']) ? $_SESSION['fullname'] : ''; ?>
                                </h3>
                            </center>
                        </div>
            </div>
            <br/><br/>
        </div>
        
        <div class='col-sm-9'>
            <form method="post" action=""  id="book_form">
                <table class='table table-bordered'>
                    <tr>
                        <td>
                            Previous Password
                        </td>
                        <td>
                            <input style="width:100%" id="oldpas" type="password" name="oldpas" class="define_size inputClass" required/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            New Password
                        </td>
                        <td>
                            <input style="width:100%" id="newpas" type="password" name="newpas" class="define_size inputClass" required/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan='2'>
                            <center>
                                <input type='submit' value='Change Password' class='btn btn-primary removeBorderRadius'/>
                                <input type='reset' value='Clear' class='btn btn-primary removeBorderRadius'/>
                            </center>
                        </td>
                    </tr>
                    
                </table>
            </form>
            <?php
            if( isset($_POST['oldpas']) && !empty($_POST['oldpas']) && isset($_POST['newpas']) && !empty($_POST['newpas']) )
            {
                $oldPas = md5($_POST['oldpas']);
                $newPas = md5($_POST['newpas']);
                $userId = isset($_SESSION['id'])?$_SESSION['id']:'';
                if(!empty($userId))
                {
                    include_once 'mysql.php';
                    // SQL query
                    $strSQL = "SELECT * FROM users where id='" . $userId . "'";

                    // Execute the query (the recordset $rs contains the result)
                    $rs = mysql_query($strSQL);
                    $row = mysql_fetch_array($rs);
                    if($row['password']==$oldPas)
                    {
                        $strSQL = "UPDATE users SET password='".$newPas."' WHERE id=".$userId;
                        if(mysql_query($strSQL) or die())
                        {
                            echo '<center><label for="fname" class="alert alert-success">Password Successfully Changed.</label></center>';
                        }
                        else 
                        {
                            echo '<center><label for="fname" class="alert alert-danger">Please enter Correct Old Password.</label></center>';
                        }
                    }
                    else 
                    {
                        echo '<center><label for="fname" class="alert alert-danger">Please enter Correct Old Password.</label></center>';
                    }
                }
            }
            ?>
        </div>
    </div>
</div>

<br/><br/><br/><br/>