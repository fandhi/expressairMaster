<?php $page = "spage1" ?>
<?php include("inc_header.php"); ?>



<!-- star content_page -->
<div id="content_page">
    <div class="steps_new sub_menu">
        <div class="text-box sideleft_mid">
            <div class="sideleftmenu">
                <ul class="">
                    <li><a href="flight_schedule.php"><span>Flight Schedule</span></a></li>
                    <li><a class="active" href="flight_route.php"><span>Route Info</span></a></li>
                    <li><a href="flight_fee.php"><span>Fee Schedule</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div id="artikel">
        <div class="padd_1">
            <h1>Route Info</h1>
            <div class="head_route">
                <div class="block">
                    <form method="post" action="flight_route2.php" class="form_headRoute">
                        <fieldset>
                            <label>Departing</label>
                            <select class="select_dep">											
                                <option>Select</option>
                                <option selected="selected">Jakarta (CKG)</option>
                            </select>
                        </fieldset>	
                        <fieldset>
                            <label>Arriving</label>
                            <select class="select_dep">											
                                <option>Select</option>
                                <option selected="selected">Denpasar (DPS)</option>
                            </select>
                        </fieldset>
                        <fieldset class="last">
                            <div style="width:120px;">
                                <input type="submit" class="clearMap" value="Clear Map"/>
                            </div>
                        </fieldset>	
                    </form>	
                </div>
            </div><!-- end head_route -->
            <div class="clear">&nbsp;</div>
            <div class="content_route">							
                <img src="images/content/map1_detail.jpg" alt="img"/>
                <div class="clear"></div>	
            </div><!-- end content_route -->
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- end content_page -->




<?php include("inc_footer.php"); ?>