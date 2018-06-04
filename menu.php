<?php include_once 'mysql.php'; ?>
<div class="container-fluid" id="menu">
    <div class="container">
        <div class="row">
        </div>
        <div class="row" style="opacity: 1;margin-left: 0px;">
            <div class="col-lg-3">
                <a href="index.php">
                    <img src="logo/logo.png" class="img-responsive" alt="Logo" id="logo">
                </a>
            </div>
            <div class="col-lg-8" style="margin-top: 6%;">
                <div class="page_wrapper pull-right">


                    <div class="megamenu_container megamenu_dark_bar megamenu_light"><!-- Begin Menu Container -->


                        <ul class="megamenu" id="mainmenu"><!-- Begin Mega Menu -->


                            <li style="display: none;" class="megamenu_button">
                                <a href="#">
                                    <span class="glyphicon glyphicon-align-justify pull-right"></span>
                                </a>
                            </li>

                            <li class="noSubMenu" style="display: list-item;">
                                <a href="index.php" id="home" class="btn btn-success btn-sm">
                                    <span class="glyphicon glyphicon-home"></span>
                                </a>
                            </li>

                            <li class="noSubMenu" style="display: list-item;">
                                <a href="#_" class="megamenu_drop" onmouseover="loadData1('d1')">
                                    Locations
                                </a><!-- Begin Item -->


                                <div style="display: none; left: -1px; top: auto;" class="dropdown_fullwidth" id="dropdown_fullwidth1"><!-- Begin Item Container -->

                                    <div class="col_3">
                                        <ul class="list_unstyled">
                                            <li><a href="hyderabad.php" onmouseover="loadData1('1')">Hyderabad</a></li>
                                            <li><a href="vizag.php" onmouseover="loadData1('2')">Vizag</a></li>
                                            <li><a href="bhimavaram.php" onmouseover="loadData1('3')">Bhimavaram</a></li>
                                        </ul> 
                                    </div>

                                    <div class="col_4" id="lbranch"></div>

                                    <div class="col_5" id="lbranchimg"></div>

                                </div><!-- End Item Container -->


                            </li><!-- End Item -->
                            
                            
                            <li class="noSubMenu" style="display: list-item;">
                                <a href="tariff.php" class="megamenu_drop" onmouseover="loadData3('d2')">
                                    Tariff
                                </a><!-- Begin Item -->


                                <div style="display: none; left: -1px; top: auto;" class="dropdown_fullwidth" id="dropdown_fullwidth1"><!-- Begin Item Container -->

                                    <div class="col_3">
                                        <ul class="list_unstyled">
                                            <li><a href="hyderabad.php" onmouseover="loadData3('1')">Hyderabad</a></li>
                                            <li><a href="vizag.php" onmouseover="loadData3('2')">Vizag</a></li>
                                            <li><a href="bhimavaram.php" onmouseover="loadData3('3')">Bhimavaram</a></li>
                                        </ul> 
                                    </div>

                                    <div class="col_4" id="lbranch1">

                                    </div>

                                    <div class="col_5" id="lbranchimg1">

                                    </div>

                                </div><!-- End Item Container -->


                            </li><!-- End Item -->
                            

                            <li class="noSubMenu" style="display: list-item;">
                                <a href="facility.php">
                                    Facilities
                                </a>
                            </li>

                            
                            <li class="noSubMenu" style="display: list-item;">
                                <a href="hyderabad.php" class="megamenu_drop" onmouseover="loadData5('d3')">
                                    Gallery
                                </a><!-- Begin Item -->


                                <div style="display: none; left: -1px; top: auto;" class="dropdown_fullwidth" id="dropdown_fullwidth1"><!-- Begin Item Container -->

                                    <div class="col_3">
                                        <ul class="list_unstyled">
                                            <li><a href="hyderabad.php" onmouseover="loadData5('1')">Hyderabad</a></li>
                                            <li><a href="vizag.php" onmouseover="loadData5('2')">Vizag</a></li>
                                            <li><a href="bhimavaram.php" onmouseover="loadData5('3')">Bhimavaram</a></li>
                                        </ul> 
                                    </div>

                                    <div class="col_4" id="lbranch2">

                                    </div>

                                    <div class="col_5" id="lbranchimg2">

                                    </div>

                                </div><!-- End Item Container -->


                            </li><!-- End Item -->
                            
                            <li class="noSubMenu" style="display: list-item;">
                                <a href="apartment.php">
                                    Apartments
                                </a>
                            </li>
                            
                            <li class="noSubMenu" style="display: list-item;">
                                <a href="contact.php">
                                    Contact Us
                                </a>
                            </li>

                            <li class="noSubMenu" style="display: list-item;">
                                <a href="login.php" target="_blank">
                                    <span class="glyphicon glyphicon-user"></span>&nbsp;Login
                                </a>
                            </li>


                        </ul><!-- End Mega Menu -->


                    </div><!-- End Menu Container -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    
    function loadData1(x)
    {
        
        if(x==1)
        {
            
            $('#lbranch').html('<ul class="list_unstyled"><li><a href="branch.php?id=1" onmouseover="loadData2(\'Banjara Hills\')">Banjara Hills<a></li><li><a href="branch.php?id=2" onmouseover="loadData2(\'Sri Krishna\')">Sri Krishna<a></li><li><a href="branch.php?id=3" onmouseover="loadData2(\'Madhu Kunj\')">Madhu Kunj<a></li><li><a href="branch.php?id=4" onmouseover="loadData2(\'Jubilee Hills\')">Jubilee Hills<a></li><li><a href="branch.php?id=5" onmouseover="loadData2(\'Kavuri Hills\')">Kavuri Hills<a></li><li><a href="branch.php?id=6" onmouseover="loadData2(\'Gachibowli\')">Gachibowli<a></li></ul>');
            $('#lbranchimg').html('');
        }
        else if(x==2)
        {
            
            document.getElementById('lbranch').innerHTML='<ul class="list_unstyled"><li><a href="branch.php?id=7" onmouseover="loadData2(\'Lawsons Bay Colony\')">Lawsons Bay Colony<a></li><li><a href="branch.php?id=8" onmouseover="loadData2(\'MVP Colony\')">MVP Colony<a></li></ul>';
            $('#lbranchimg').html('');
        }
        else if(x==3)
        {
            
            document.getElementById('lbranch').innerHTML='<ul class="list_unstyled"><li><a href="branch.php?id=9" onmouseover="loadData2(\'Bhimavaram\')">Bhimavaram<a></li></ul>';
            $('#lbranchimg').html('');
        }
        else if(x=='d1')
        {
            $('#lbranch').html('');
            $('#lbranchimg').html('');    
        }
    }
    
    function loadData2(x)
    {
//        alert(x);
        if(x=='Banjara Hills')
        {
            document.getElementById('lbranchimg').innerHTML='<img src="branch/1.jpg" alt="Banjara Hills" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Sri Krishna')
        {
            document.getElementById('lbranchimg').innerHTML='<img src="branch/2.jpg" alt="Sri Krishna"  class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Madhu Kunj')
        {
            document.getElementById('lbranchimg').innerHTML='<img src="branch/3.jpg" alt="Madhu Kunj" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Jubilee Hills')
        {
            document.getElementById('lbranchimg').innerHTML='<img src="branch/4.jpg" alt="Jubilee Hills" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Kavuri Hills')
        {
            document.getElementById('lbranchimg').innerHTML='<img src="branch/5.jpg" alt="Kavuri Hills" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Gachibowli')
        {
            document.getElementById('lbranchimg').innerHTML='<img src="branch/6.jpg" alt="Gachibowli" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Lawsons Bay Colony')
        {
            document.getElementById('lbranchimg').innerHTML='<img src="branch/7.jpg" alt="Lawsons Bay Colony" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='MVP Colony')
        {
            document.getElementById('lbranchimg').innerHTML='<img src="branch/8.jpg" alt="MVP Colony" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Bhimavaram')
        {
            document.getElementById('lbranchimg').innerHTML='<img src="branch/9.jpg" alt="Bhimavaram" class="img-responsive img_height_drop thumbnail">';
        }
    }
    
    function loadData3(x)
    {
        if(x==1)
        {
            
            $('#lbranch1').html('<ul class="list_unstyled"><li><a href="branch.php?id=1" onmouseover="loadData4(\'Banjara Hills\')">Banjara Hills<a></li><li><a href="branch.php?id=2" onmouseover="loadData4(\'Sri Krishna\')">Sri Krishna<a></li><li><a href="branch.php?id=3" onmouseover="loadData4(\'Madhu Kunj\')">Madhu Kunj<a></li><li><a href="branch.php?id=4" onmouseover="loadData4(\'Jubilee Hills\')">Jubilee Hills<a></li><li><a href="branch.php?id=5" onmouseover="loadData4(\'Kavuri Hills\')">Kavuri Hills<a></li><li><a href="branch.php?id=6" onmouseover="loadData4(\'Gachibowli\')">Gachibowli<a></li></ul>');
            $('#lbranchimg1').html('');
        }
        else if(x==2)
        {
            
            document.getElementById('lbranch1').innerHTML='<ul class="list_unstyled"><li><a href="branch.php?id=7" onmouseover="loadData4(\'Lawsons Bay Colony\')">Lawsons Bay Colony<a></li><li><a href="branch.php?id=8" onmouseover="loadData4(\'MVP Colony\')">MVP Colony<a></li></ul>';
            $('#lbranchimg1').html('');
        }
        else if(x==3)
        {
            
            document.getElementById('lbranch1').innerHTML='<ul class="list_unstyled"><li><a href="branch.php?id=9" onmouseover="loadData4(\'Bhimavaram\')">Bhimavaram<a></li></ul>';
            $('#lbranchimg1').html('');
        }
        else if(x=='d2')
        {
            $('#lbranch1').html('');
            $('#lbranchimg1').html('');    
        }
    }
    function loadData4(x)
    {
//        alert(x);
        if(x=='Banjara Hills')
        {
            document.getElementById('lbranchimg1').innerHTML='<img src="branch/1.jpg" alt="Banjara Hills" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Sri Krishna')
        {
            document.getElementById('lbranchimg1').innerHTML='<img src="branch/2.jpg" alt="Sri Krishna"  class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Madhu Kunj')
        {
            document.getElementById('lbranchimg1').innerHTML='<img src="branch/3.jpg" alt="Madhu Kunj" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Jubilee Hills')
        {
            document.getElementById('lbranchimg1').innerHTML='<img src="branch/4.jpg" alt="Jubilee Hills" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Kavuri Hills')
        {
            document.getElementById('lbranchimg1').innerHTML='<img src="branch/5.jpg" alt="Kavuri Hills" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Gachibowli')
        {
            document.getElementById('lbranchimg1').innerHTML='<img src="branch/6.jpg" alt="Gachibowli" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Lawsons Bay Colony')
        {
            document.getElementById('lbranchimg1').innerHTML='<img src="branch/7.jpg" alt="Lawsons Bay Colony" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='MVP Colony')
        {
            document.getElementById('lbranchimg1').innerHTML='<img src="branch/8.jpg" alt="MVP Colony" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Bhimavaram')
        {
            document.getElementById('lbranchimg1').innerHTML='<img src="branch/9.jpg" alt="Bhimavaram" class="img-responsive img_height_drop thumbnail">';
        }
    }
    
    function loadData5(x)
    {
        
        if(x==1)
        {
            
            $('#lbranch2').html('<ul class="list_unstyled"><li><a href="branch.php?id=1" onmouseover="loadData6(\'Banjara Hills\')">Banjara Hills<a></li><li><a href="branch.php?id=2" onmouseover="loadData6(\'Sri Krishna\')">Sri Krishna<a></li><li><a href="branch.php?id=3" onmouseover="loadData6(\'Madhu Kunj\')">Madhu Kunj<a></li><li><a href="branch.php?id=4" onmouseover="loadData6(\'Jubilee Hills\')">Jubilee Hills<a></li><li><a href="branch.php?id=5" onmouseover="loadData6(\'Kavuri Hills\')">Kavuri Hills<a></li><li><a href="branch.php?id=6" onmouseover="loadData6(\'Gachibowli\')">Gachibowli<a></li></ul>');
            $('#lbranchimg2').html('');
        }
        else if(x==2)
        {
            
            document.getElementById('lbranch2').innerHTML='<ul class="list_unstyled"><li><a href="branch.php?id=7" onmouseover="loadData6(\'Lawsons Bay Colony\')">Lawsons Bay Colony<a></li><li><a href="branch.php?id=8" onmouseover="loadData6(\'MVP Colony\')">MVP Colony<a></li></ul>';
            $('#lbranchimg2').html('');
        }
        else if(x==3)
        {
            
            document.getElementById('lbranch2').innerHTML='<ul class="list_unstyled"><li><a href="branch.php?id=9" onmouseover="loadData6(\'Bhimavaram\')">Bhimavaram<a></li></ul>';
            $('#lbranchimg2').html('');
        }
        else if(x=='d3')
        {
            $('#lbranch2').html('');
            $('#lbranchimg2').html('');    
        }
    }
    function loadData6(x)
    {
//        alert(x);
        if(x=='Banjara Hills')
        {
            document.getElementById('lbranchimg2').innerHTML='<img src="branch/1.jpg" alt="Banjara Hills" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Sri Krishna')
        {
            document.getElementById('lbranchimg2').innerHTML='<img src="branch/2.jpg" alt="Sri Krishna"  class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Madhu Kunj')
        {
            document.getElementById('lbranchimg2').innerHTML='<img src="branch/3.jpg" alt="Madhu Kunj" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Jubilee Hills')
        {
            document.getElementById('lbranchimg2').innerHTML='<img src="branch/4.jpg" alt="Jubilee Hills" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Kavuri Hills')
        {
            document.getElementById('lbranchimg2').innerHTML='<img src="branch/5.jpg" alt="Kavuri Hills" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Gachibowli')
        {
            document.getElementById('lbranchimg2').innerHTML='<img src="branch/6.jpg" alt="Gachibowli" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Lawsons Bay Colony')
        {
            document.getElementById('lbranchimg2').innerHTML='<img src="branch/7.jpg" alt="Lawsons Bay Colony" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='MVP Colony')
        {
            document.getElementById('lbranchimg2').innerHTML='<img src="branch/8.jpg" alt="MVP Colony" class="img-responsive img_height_drop thumbnail">';
        }
        else if(x=='Bhimavaram')
        {
            document.getElementById('lbranchimg2').innerHTML='<img src="branch/9.jpg" alt="Bhimavaram" class="img-responsive img_height_drop thumbnail">';
        }
    }
</script>
    