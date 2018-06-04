<?php
session_start();
if (!isset($_SESSION['username']) && empty($_SESSION['username'])) 
{
    header("Location: login.php");
    exit();
}
?>
<div class="container-fluid" style='background-color: #FFF;'>
    <div class="container">
        <div class="col-sm-2">
            <a href="admin.php">
                <img src="logo/logo.png" class="img-responsive" alt="Logo" id="logo" style="max-height: 100px;">
            </a>
        </div>
        <div class="col-sm-10">
            <div class="page_wrapper" id='menuAdmin'>
                <div class="megamenu_container megamenu_dark_bar megamenu_light"><!-- Begin Menu Container -->


                    <ul class="megamenu" id="mainmenu"><!-- Begin Mega Menu -->

                        <li style="display: none;" class="megamenu_button">
                            <a href="#">
                                <span class="glyphicon glyphicon-align-justify"></span>
                            </a>
                        </li>


                        <li class="noSubMenu" style="display: list-item;">
                            <a href="#_" class="megamenu_drop">Home Page</a><!-- Begin Item -->
                            <div style="display: none; left: auto; top: auto;" class="dropdown_2columns dropdown_container"><!-- Begin Item Container -->
                                <ul class="dropdown_flyout">
                                    <li><a href="adminSlider.php">Slider</a></li>
                                    <li><a href="appart.php">Apartments</a></li>
                                    <li><a href="room.php">Room Type</a></li>
                                    <li><a href="explore.php">Explore</a></li>
                                    <li><a href="testimon.php">Testimonials</a></li>
                                    <li><a href="client.php">Clients</a></li>
                                    <li><a href="adminFooterChange.php">Footer</a></li>
                                </ul>                       
                            </div><!-- End Item Container -->
                        </li><!-- End Item -->

                        <li class="noSubMenu" style="display: list-item;">
                            <a href="adminTariff.php" class="megamenu_drop">Tariff</a><!-- Begin Item -->
                        </li><!-- End Item -->

                        <li class="noSubMenu" style="display: list-item;">
                            <a href="adminApartment.php" class="megamenu_drop">Apartments</a><!-- Begin Item -->
                        </li><!-- End Item -->
                        
                        <li class="noSubMenu" style="display: list-item;">
                            <a href="adminFacility.php" class="megamenu_drop">Facilities</a><!-- Begin Item -->
                        </li><!-- End Item -->
                        
                        <li class="noSubMenu" style="display: list-item;">
                            <a href="gallery.php" class="megamenu_drop">Gallery</a><!-- Begin Item -->
                        </li><!-- End Item -->

                        <li class="noSubMenu" style="display: list-item;">
                            <a href="#_" class="megamenu_drop">
                                <span class="glyphicon glyphicon-user"></span>&nbsp;
                                <?php
                                if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                                    echo $_SESSION['username'];
                                }
                                ?>
                            </a>
                            <div style="display: none; left: auto; top: auto;" class="dropdown_container" style='width: 200px;'><!-- Begin Item Container -->
                                <center>
                                    <ul class="dropdown_flyout">
                                        <li>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <a href="#_">
                                                            <?php
                                                            if (isset($_SESSION['profile_pic']) && !empty($_SESSION['profile_pic'])) {
                                                                ?>
                                                                <img src="<?php echo $_SESSION['profile_pic']; ?>" alt="Profile Pic" class="img-responsive thumbnail" id='profPic'>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="img/avatar.png" alt="Profile Pic" class="img-responsive thumbnail" id='profPic'>
                                                            <?php } ?>
                                                        </a>
                                                        <br/>
                                                    </td>
                                                    <td>
                                                        <a href="password.php">Change Password</a>
                                                        
                                                        <a href="profile.php">Edit Profile</a>
                                                        
                                                        <a href="logout.php">Sign out</a>
                                                        <br/>
                                                    </td>
                                                </tr>
                                            </table>
                                            
                                        </li>
                                    </ul>  
                                </center>
                            </div><!-- End Item Container -->
                        </li>


                    </ul><!-- End Mega Menu -->


                </div><!-- End Menu Container -->
            </div>
        </div>
    </div>

</div>
<div class="clear-fix"></div>