<?php $page = "spage1" ?>


<!-- star content_page -->
<div id="content_page">
    <div class="steps_new sub_menu">
        <div class="text-box sideleft_mid">
            <div class="sideleftmenu">
                <ul class="">
                    <li><a class="active" href="flight_schedule.php"><span>Flight Schedule</span></a></li>
                    <li><a href="flight_route.php"><span>Route Info</span></a></li>
                    <li><a href="flight_fee.php"><span>Fee Schedule</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div id="artikel">
        <div class="padd_1">
            <h1>Flight Schedule</h1>
            <p>Select your departing and arriving destinations to view current flight schedules. <br />
                <i>* Schedule shown is for reference only and is subject to change without prior notice. Actual schedule and flight times are indicated in the flight booking engine</i></p>

            <div class="head_flight">
                <div class="block">
                    <form method="post" action="" class="form_headFlight">
                        <fieldset>
                            <label>Departing</label>
                            <select class="select_dep">
                                <option></option>
                                <option>Departing1</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <label>Arriving</label>
                            <select class="select_dep">
                                <option></option>
                                <option>Arriving1</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <label>Month of Travel</label>
                            <select class="select_month">
                                <option></option>
                                <option>Month of Travel1</option>
                            </select>
                        </fieldset>
                        <fieldset class="last">
                            <div style="margin-top:10px;">
                                <input type="submit" value="Search Flights" class="btn_sflight1"/>
                            </div>
                        </fieldset>
                    </form>
                    <div class="clear"></div>	
                </div>
            </div><!-- end head_flight -->
            <div class="content_flight">
                <div class="table-container-outer">
                    <div class="table-container-fade"></div>
                    <div class="block_table">

                        <p>Flight Schedule Information<br/>
                            From : Jakarta (JKT)<br/>
                            To : Bali/Denpasar (DPS)</p>		

                        <table cellpadding="0" cellspacing="0" class="table_flight">
                            <thead>
                                <tr>
                                    <th class="th1">Depart</th>
                                    <th class="th2">Arrive</th>
                                    <th class="th3">Flight No</th>
                                    <th class="th4">Aircraft Type</th>
                                    <th class="th5">Mon</th>
                                    <th class="th6">Tue</th>
                                    <th class="th7">Wed</th>
                                    <th class="th8">Thu</th>
                                    <th class="th9">Fri</th>
                                    <th class="th10">Sat</th>
                                    <th class="th11">Sun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="td1 first">05:50</td>
                                    <td class="td1 first">08:40</td>
                                    <td class="td1 first">GA400</td>
                                    <td class="td1 first">BOEING 737 800/NG</td>
                                    <td class="td1 first check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 first check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 first check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 first check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 first check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 first check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 first check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                </tr>
                                <tr>
                                    <td class="td2">06:05</td>
                                    <td class="td2">08:55</td>
                                    <td class="td2">GA724</td>
                                    <td class="td2">BOEING 737 800/NG</td>
                                    <td class="td2 check">-</td>
                                    <td class="td2 check">-</td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                </tr>
                                <tr>
                                    <td class="td1">07:35</td>
                                    <td class="td1">10:25</td>
                                    <td class="td1">GA438</td>
                                    <td class="td1">BOEING 737 800/NG</td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check">-</td>
                                    <td class="td1 check">-</td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                </tr>
                                <tr>
                                    <td class="td2">08:55</td>
                                    <td class="td2">11:45</td>
                                    <td class="td2">GA402</td>
                                    <td class="td2">BOEING 737 800/NG</td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                </tr>
                                <tr>
                                    <td class="td1">10:05</td>
                                    <td class="td1">12:55</td>
                                    <td class="td1">GA404</td>
                                    <td class="td1">BOEING 737 800/NG</td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                </tr>
                            </tbody>
                        </table><!-- end table_flight1 -->
                        <div class="clear"></div>
                    </div><!-- end block_table -->
                </div>
                <br />
                <div class="table-container-outer">
                    <div class="table-container-fade"></div>
                    <div class="block_table">

                        <p>Flight Schedule Information<br/>
                            From : Jakarta (JKT)<br/>
                            To : Bali/Denpasar (DPS)</p>		

                        <table cellpadding="0" cellspacing="0" class="table_flight">
                            <thead>
                                <tr>
                                    <th class="th1">Depart</th>
                                    <th class="th2">Arrive</th>
                                    <th class="th3">Flight No</th>
                                    <th class="th4">Aircraft Type</th>
                                    <th class="th5">Mon</th>
                                    <th class="th6">Tue</th>
                                    <th class="th7">Wed</th>
                                    <th class="th8">Thu</th>
                                    <th class="th9">Fri</th>
                                    <th class="th10">Sat</th>
                                    <th class="th11">Sun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="td1 first">05:50</td>
                                    <td class="td1 first">08:40</td>
                                    <td class="td1 first">GA400</td>
                                    <td class="td1 first">BOEING 737 800/NG</td>
                                    <td class="td1 first check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 first check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 first check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 first check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 first check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 first check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 first check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                </tr>
                                <tr>
                                    <td class="td2">06:05</td>
                                    <td class="td2">08:55</td>
                                    <td class="td2">GA724</td>
                                    <td class="td2">BOEING 737 800/NG</td>
                                    <td class="td2 check">-</td>
                                    <td class="td2 check">-</td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                </tr>
                                <tr>
                                    <td class="td1">07:35</td>
                                    <td class="td1">10:25</td>
                                    <td class="td1">GA438</td>
                                    <td class="td1">BOEING 737 800/NG</td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check">-</td>
                                    <td class="td1 check">-</td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                </tr>
                                <tr>
                                    <td class="td2">08:55</td>
                                    <td class="td2">11:45</td>
                                    <td class="td2">GA402</td>
                                    <td class="td2">BOEING 737 800/NG</td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td2 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                </tr>
                                <tr>
                                    <td class="td1">10:05</td>
                                    <td class="td1">12:55</td>
                                    <td class="td1">GA404</td>
                                    <td class="td1">BOEING 737 800/NG</td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                    <td class="td1 check"><img src="images/content/checklist.png" alt="chekslist"/></td>
                                </tr>
                            </tbody>
                        </table><!-- end table_flight1 -->
                        <div class="clear"></div>
                    </div><!-- end block_table -->
                </div>
                <div class="clear"></div>	
            </div><!-- end content_flight1 -->
        </div>

        <div class="clear"></div>
    </div>
</div>
<!-- end content_page -->

