<br/>
<div class="container">
    <div class="col-sm-12">
        <div class="col-sm-8">


            <?php
            $strSQL = "SELECT * FROM tariff where status=1 order by updatedOn DESC";
// Execute the query (the recordset $rs contains the result)
            $rs = mysql_query($strSQL);
            if (!empty($rs)) {
                $i = 0;
                while ($row = mysql_fetch_array($rs)) {
                    $i++;
                    ?>
                    <div class="container">
                        <center><h3 class="branch_title_color"><?php echo $row['title']; ?></h3></center>
                    </div>
                    <div class="container">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a data-toggle="tab" href="#detail<?php echo $i; ?>">Details</a></li>
                            <li class=""><a data-toggle="tab" href="#tour<?php echo $i; ?>">Virtual Tour</a></li>
                            <li class=""><a data-toggle="tab" href="#fac<?php echo $i; ?>">Facilities</a></li>
                        </ul>
                        <div class="tab-content navTabBorder" id="myTabContent">
                            <div id="detail<?php echo $i; ?>" class="tab-pane fade active in tabCont">
                                <div class="container section">
                                    <?php echo $row['details']; ?>
                                </div>
                            </div>
                            <div id="tour<?php echo $i; ?>" class="tab-pane fade tabCont">
                                <div class="row" style="padding: 10px;">
                                    <?php echo $row['virtualTour']; ?>
                                </div>
                            </div>

                            <div id="fac<?php echo $i; ?>" class="tab-pane fade tabCont">
                                <div class="row" style="padding: 10px;">
                                    <?php echo $row['facilities']; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br/>
                <?php }
            } ?>
        </div>
    </div>
</div>
<br/>