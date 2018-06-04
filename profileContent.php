<?php
include_once 'mysql.php';
$userId = $_SESSION['id'];
// SQL query
$strSQL = "SELECT * FROM users where id='" . $userId . "'";

// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);
$row = mysql_fetch_array($rs);
//echo "<pre>";
//print_r($row);
//echo "</pre>";
?>
<br/><br/>
<div class='container'>
    <div class='row'>
        <div class="col-sm-3">
            <div class="thumbnail" id='profPic1'>
                <?php
                    if (isset($row['profile_pic']) && !empty($row['profile_pic'])) {
                        ?>
                        <img class="img-responsive" alt="Profile Pic" src="<?php echo $row['profile_pic']; ?>">
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
            <form enctype="multipart/form-data" method="post" action="editProfile.php"  id="book_form">
                <table class='table table-bordered'>
                    <tr>
                        <td>
                            User Name
                        </td>
                        <td>
                            <input style="width:100%" id="username" type="text" name="username" value="<?php echo $row['username']; ?>" class="define_size inputClass" disabled='true' required/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Full Name
                        </td>
                        <td>
                            <input style="width:100%" id="fullname" type="text" name="fullname" value="<?php echo $row['fullname']; ?>" class="define_size inputClass"  required />
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Email Id
                        </td>
                        <td>
                            <input style="width:100%" id="email" type="email" name="email" value="<?php echo $row['email']; ?>" class="define_size inputClass" email required />
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Gender
                        </td>
                        <td>
                            <select name="gender" id="gender" class="form-control inputClass" required>
                                <?php 
                                if($row['gender']=='M')
                                {
                                    echo '<option value="M" selected="selected">Male</option>';
                                }
                                else
                                {
                                    echo '<option value="M">Male</option>';
                                }
                                if($row['gender']=='F')
                                {
                                    echo '<option value="F" selected="selected">Female</option> ';
                                }
                                else
                                {
                                    echo '<option value="F">Female</option> ';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Date Of Birth
                        </td>
                        <td>
                            <input style="width:100%" id="dob" type="text" name="dob" value="<?php echo $row['dob']; ?>" class="define_size inputClass datepicker" required />
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Profile Pic
                        </td>
                        <td>
                            <input style="width:100%" id="profile_pic" type="file" name="profile_pic" class="define_size inputClass"/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Mobile No.
                        </td>
                        <td>
                            <input style="width:100%" id="mobile" type="number" name="mobile" value="<?php echo $row['mobile']; ?>" maxlength="20" class="inputClass" placeholder="Mobile Number" required />
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            <center>
                                <input type='submit' value='Edit Profile' class='btn btn-primary removeBorderRadius'/>
                            </center>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>



<!-- End Of Date Picker -->