<script type="text/javascript" src="gallery/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="gallery/js/jssor.core.js"></script>
<script type="text/javascript" src="gallery/js/jssor.utils.js"></script>
<script type="text/javascript" src="gallery/js/jssor.slider.js"></script>
<div class="container">
    <div class="row-fluid">
        <div class="col-sm-8">
            <center><h3 class="branch_title_color">Kavuri Hills - Hyderabad</h3></center>
        </div>
        <div class="col-sm-4">
            
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-sm-8">
            <div class="thumbnail">
                <div>
                    <?php include_once 'gal/loc_Kavuri.php'; ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4 thumbnail">
            <?php include_once 'checkAvail1.php'; ?>
            <div class="tabPad">
                    <p>
                        <span class="branch_title_color">Description: </span>
                        This brand new stunning one bedroom elegant and well furnished Studio flats is located 
                        in a newly built apartment block in HITECH city Madhapur .Near to all the prime locations 
                        but far from pollution and noise. The flat comes fully furnished and has a very contemporary design. 
                        There is a spacious living room area with sofa and study table. <br><br><br>
                    </p>
                    <p> 
                    </p>
                    <address>
                        <span class="branch_title_color">Address: </span>
                        Plot no 79, Phase 1, Kavuri hills, Madhapur, Hyderabad-500081, Ph no : 04042024074
                    </address>
                    <p></p>
                    <p>
                    </p><h5>Rating</h5>
                    <!--http://rating-widget.com-->
                    <div class="rw-ui-container" data-urid="rate2"></div>
                    <p></p>
            </div>
        </div>
    </div>
</div>

<br/><br/>
<div class="container">
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a data-toggle="tab" href="#detail2">Details</a></li>
        <li class=""><a data-toggle="tab" href="#tour2">Virtual Tour</a></li>
        <li class=""><a data-toggle="tab" href="#fac1">Facilities</a></li>
        <li class=""><a data-toggle="tab" href="#locMap1" onClick="loadLocMap('map/mapkavuri.php','#locMap1')">Maps</a></li>
    </ul>
    <div class="tab-content navTabBorder" id="myTabContent">
        <div id="detail2" class="tab-pane fade active in tabCont">
            <div class="container section">
                <div>
                    <table class="table table-bordered" width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                                <td width="33%" align="center"><strong>Type</strong></td>
                                <td width="17%" align="center"><strong>Tariff</strong></td>
                                <td width="17%" align="center"><strong>Best Available Rate</strong></td>
                            </tr>
                            <tr>
                                <td><span class="text7">Studio Apartment </span></td>
                                <td align="center" class="text7">Rs. 4,500/-</td>
                                <td align="center" class="text7">Rs. 4,000/-</td>
                            </tr>
                            <tr>
                                <td><span class="text7">Single Bedroom Apartment</span></td>
                                <td align="center" class="text7">Rs. 5,500/-</td>
                                <td align="center" class="text7">Rs. 4,800/-</td>
                            </tr>
                            <tr>
                                <td><span class="text7">Luxury Double Bedroom Apartment</span></td>
                                <td align="center" class="text7">Rs. 6,500/-</td>
                                <td align="center" class="text7">Rs. 5,900/-</td>
                            </tr>
                            <tr>
                                <td><span class="text7">Premium Double Bedroom Apartment</span></td>
                                <td align="center" class="text7">Rs. 7,500/-</td>
                                <td align="center" class="text7">Rs. 6,900/-</td>
                            </tr>
                        </tbody></table>
                    <p class="text7">* Tax is Additional <br> * Extra person / extra bed charges Rs. 1500</p>
                </div>
                    
            </div>
        </div>
        <div id="tour2" class="tab-pane fade tabCont">
            <div class="row" style="padding: 10px;">
                        <a href="http://melangebangalore.com/virtual_tour/101_Panorama_out.swf" target="_blank" class="">
                            <img src="gallery/img/alila/thumb-01.jpg" alt="125x125">
                        </a>
                        <a href="http://melangebangalore.com/virtual_tour/101_Panorama_out.swf" target="_blank" class="">
                            <img src="gallery/img/alila/thumb-02.jpg" alt="125x125">
                        </a>
                        <a href="http://melangebangalore.com/virtual_tour/101_Panorama_out.swf" target="_blank" class="">
                            <img src="gallery/img/alila/thumb-03.jpg" alt="125x125">
                        </a>
                        <a href="http://melangebangalore.com/virtual_tour/101_Panorama_out.swf" target="_blank" class="">
                            <img src="gallery/img/alila/thumb-04.jpg" alt="125x125">
                        </a>
                        
                        <a href="http://melangebangalore.com/virtual_tour/101_Panorama_out.swf" target="_blank" class="">
                            <img src="gallery/img/alila/thumb-01.jpg" alt="125x125">
                        </a>
            </div>
        </div>
        
        <div id="fac1" class="tab-pane fade tabCont">
            <div class="row" style="padding: 10px;">
                <?php include 'locfacilities.php'; ?>
            </div>
        </div>
        
        <div id="locMap1" class="tab-pane fade tabCont">
            <div class="row" style="padding: 10px;">
                <?php // include_once 'map/mapbanjara.php'; ?>
            </div>
        </div>
        
    </div>
</div>
<br/><br/>