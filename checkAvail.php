<div class="container" id="contTop">
    <div class="col-sm-3"></div>
    <div class="panel-group col-sm-6" id="accordion">
            <div class="panel panel-default" id="checkBtn">
                <div class="panel-heading book">
                    <a class="col-sm-12 checkButton" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" onClick="loadBook();">
                        <div class="col-sm-12">
                            <center>
                                <h4 class="panel-title">
                                    Check Availability
                                </h4>
                            </center>
                        </div>
                    </a>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" style="background: #ddd url(images/bg.jpg) repeat top left;">
                    <div class="panel-body" id="availBookForm">
                        <?php include_once 'booking.php'; ?>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-sm-3"></div>
</div>