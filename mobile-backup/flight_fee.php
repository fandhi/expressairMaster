<?php $page = "spage1" ?>
<?php include("inc_header.php"); ?>



<!-- star content_page -->
<div id="content_page">
    <div class="steps_new sub_menu">
        <div class="text-box sideleft_mid">
            <div class="sideleftmenu">
                <ul class="">
                    <li><a href="flight_schedule.php"><span>Flight Schedule</span></a></li>
                    <li><a href="flight_route.php"><span>Route Info</span></a></li>
                    <li><a class="active" href="flight_fee.php"><span>Fee Schedule</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div id="artikel">
        <div class="padd_1">
            <h1>Fee Schedule</h1>
            <div class="head_route">
                <div class="block">
                    <form method="post" action="flight_route2.php" class="form_headRoute">
                        <fieldset>
                            <label>Departing</label>
                            <select class="select_dep">											
                                <option>Bali (DPS)</option>											
                            </select>
                        </fieldset>	
                        <fieldset>
                            <label>Arriving</label>
                            <select class="select_dep">											
                                <option>Sydney (SDY)</option>											
                            </select>
                        </fieldset>
                        <fieldset class="last">
                            <div style="margin-top:0px;">
                                <input type="submit" value="Search Flights" class="btn_sflight1"/>
                            </div>
                        </fieldset>	
                    </form>	
                </div>
            </div><!-- end head_route -->
            <div class="clear">&nbsp;</div>
            <div class="content_fee">
                <table cellpadding="0" cellspacing="0" class="table_fee" style="display:block;">
                    <thead>
                        <tr>
                            <th class="th1">From Bali to Sydney via Kuala Lumpur</th>
                            <th class="th2">Fee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="categori">
                            <td class="td1" colspan="2">Airport Tax (To be paid at the airport)</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International</td>										
                            <td class="td3">Rp 150000</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">Domestic</td>										
                            <td class="td3">Rp 40000</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International</td>										
                            <td class="td3">Rp 150000</td>										
                        </tr>

                        <tr class="categori">
                            <td class="td1" colspan="2">Airport Fee</td>										
                        </tr>
                        <tr class="subcategori">
                            <td colspan="2" class="td2">Fee schedule is currently unavailable.</td>
                        </tr>

                        <tr class="categori">
                            <td class="td1" colspan="2">Handling Fee</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">Refund (per guest per sector)</td>										
                            <td class="td3">Rp 47000</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">Booking service fee</td>										
                            <td class="td3">Rp 94200</td>										
                        </tr>

                        <tr class="categori">
                            <td class="td1" colspan="2">Fuel Surcharge</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">Fuel Surcharge</td>										
                            <td class="td3">Rp 548000</td>										
                        </tr>
                        <tr class="categori">
                            <td class="td1" colspan="2">Flight Change / Cancellation (per sector)</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International</td>										
                            <td class="td3">Rp 746000</td>										
                        </tr>

                        <tr class="categori">
                            <td class="td1" colspan="2">Service Fee</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">Infant</td>										
                            <td class="td3">Rp 535000</td>										
                        </tr>

                        <tr class="categori">
                            <td class="td1" colspan="2">Pick A Seat</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">Standard Seat</td>										
                            <td class="td3">Rp 128000</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">Hot Seat</td>										
                            <td class="td3">Rp 440000</td>										
                        </tr>

                        <tr class="categori">
                            <td class="td1" colspan="2">Check-In Baggage (Pre-book)</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International (up to 15kg)</td>										
                            <td class="td3">Rp 270000</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International (up to 20kg)</td>										
                            <td class="td3">Rp 330000</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International (up to 25kg)</td>										
                            <td class="td3">Rp 410000</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International (up to 30kg)</td>										
                            <td class="td3">Rp 520000</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International (up to 35kg)</td>										
                            <td class="td3">Rp 700000</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International (up to 40kg)</td>										
                            <td class="td3">Rp 810000</td>										
                        </tr>

                        <tr class="categori">
                            <td colspan="2" class="td1">Check-In Baggage (Airport counter)</td>	
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International (up to 15kg)</td>										
                            <td class="td3">Rp 630000</td>										
                        </tr>

                        <tr class="categori">
                            <td colspan="2" class="td1">Sports Equipment (Pre-book)</td>	
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International (up to 15kg)</td>										
                            <td class="td3">Rp 400000</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International (up to 20kg)</td>										
                            <td class="td3">Rp 460000</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International (up to 25kg)</td>										
                            <td class="td3">Rp 535000</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International (up to 30kg)</td>										
                            <td class="td3">Rp 655000</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International (up to 35kg)</td>										
                            <td class="td3">Rp 840000</td>										
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International (up to 40kg)</td>										
                            <td class="td3">Rp 943000</td>										
                        </tr>

                        <tr class="categori">
                            <td colspan="2" class="td1">Sports Equipment (Check-in counter)</td>	
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International (up to 20kg)</td>										
                            <td class="td3">Rp 740000</td>										
                        </tr>

                        <tr class="categori">
                            <td colspan="2" class="td1">Excess Baggage</td>	
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">Excess Baggage Charges (also applies to Excess Sports Equipment) per kg</td>
                            <td class="td3">Rp 310000</td>										
                        </tr>

                        <tr class="categori">
                            <td colspan="2" class="td1">Lost Baggage Compensation (per kg)</td>	
                        </tr>
                        <tr class="subcategori">
                            <td class="td2">International</td>
                            <td class="td3">USD 20</td>										
                        </tr>

                    </tbody>
                </table><!-- end table_fee -->
                <div class="clear"></div>


                <div style="display:block; margin-top:20px;">
                    <p style="margin-bottom:2px;">Note :</p>
                    <ul class="note">
                        <li>Taxes, Fees and Charges are subject to 10% VAT and may change without prior notice.</li>
                        <li>Airport tax payment has to be made at the airport for flights departing from Indonesia and Philippines.</li>
                        <li>Airport tax payment has to be made at the airport for flights departing from Indonesia and Philippines.</li>
                        <li>Please note that airport tax refund can be subjected to a processing fee (where applicable).</li>
                        <li>Booking service fee applies to all bookings made via Call Centre, Sales Offices, Airport Sales Counters, Indonesia AirAsia Carrefour booth and ATSC's.</li>
                        <li>Excess baggage fee only applies for 15kg above.</li>
                        <li>Sports Equipment Fee is applicable to Surfboards, Snowboards, Bicycles, Scuba, Golf and Snow Skiing gears. Any other sporting equipments (that was not stated earlier) are accepted as part of the baggage allowance.</li>
                    </ul>
                </div>
                <div class="clear"></div>	
            </div><!-- end content_fee -->
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- end content_page -->




<?php include("inc_footer.php"); ?>