    
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&libraries=places"></script>

<div style="height: 440px;" id="googleMapLocationfal">
    <div id="mapCanvas">&#160;</div>
    <div id="directionsPanel">
        <div class="directionInputs">
            <br/>
            <form>
                <p>
                    <label class="btn btn-danger">A</label>
                    <input type="text" value="" id="dirSource" class="inputClass"/>
                </p>
                <p>
                    <label class="btn btn-danger">B</label>
                    <select id="dirDestination" name="dirDestination" style="width: 180px;" class="inputClass">
                        <option value="Erravalli Cross Road Bus Stop, Mahabubnagar, Telangana, India" selected="selected">
                            Erravalli Cross Road Bus Stop, Mahabubnagar, Telangana, India
                        </option>
                        
                        <option value="Falcons Nest, MLA Colony Road Number 12, MLA Colony, Hyderabad, Andhra Pradesh">
                            Falcons Nest, MLA Colony Road Number 12, MLA Colony, Hyderabad, Andhra Pradesh
                        </option>
                        
                        <option value="Falcons Nest Studio Service Apartments-Hitech City, Kavuri Hills Phase 1, Kavuri Hills, Jubilee Hills, Hyderabad, Telangana">
                            Falcons Nest Studio Service Apartments-Hitech City, Kavuri Hills Phase 1, Kavuri Hills, Jubilee Hills, Hyderabad, Telangana
                        </option>
                        
                        <option value="Falcons Nest -Gachibowli Telecom Nagar, Gachibowli Hyderabad, Telangana">
                            Falcons Nest -Gachibowli Telecom Nagar, Gachibowli Hyderabad, Telangana
                        </option>
                        
                        <option value="Falcons Nest Service Apartments-Banjara Hills Plot No 17,Road Number 2,Banjara Hills,Lane Beside TDP Office Hyderabad, Andhra Pradesh 500034">
                            Falcons Nest Service Apartments-Banjara Hills Plot No 17,Road Number 2,Banjara Hills,Lane Beside TDP Office Hyderabad, Andhra Pradesh 500034
                        </option>
                    </select>
                    <!--<input type="text" value="Falcons Nest Imperia Suites, Road Number 68, Jubilee Hills, Hyderabad, Andhra Pradesh" id="dirDestination" />-->
                </p>
                <a href="#getDirections" id="getDirections" class="btn btn-danger">Get Directions</a>
                <a href="#reset" id="paneReset" class="btn btn-danger">Reset</a>
            </form>	
        </div>
        <div id="directionSteps">
            <p class="msg">Direction Steps Will Render Here</p>
        </div>
        <a href="#toggleBtn" id="paneToggle" class="out btn btn-danger">&lt;</a>
    </div>
</div>
<script type="text/javascript" src="map/sample.js"></script> 
