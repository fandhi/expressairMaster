<div id="desktop">
    <div id="container_one">
            <div id="container_two">
                <div class="shadow_white">
                    <div class="wrapper_header">			
                        <div id="header">
                            <div class="shadow_logo"></div>
                            <div class="bg_header_bottom"></div>
                            <div class="wrapper2">						
                                <div class="head_left">							
                                    <div class="logo">
                                        <a href="index.php"><img src="images/logo.png" alt=""/></a>
                                    </div>

                                </div><!-- end head left -->						
                                <div class="head_right">
                                    <div id="top_hr">
                                        <div class="left_hrt">
                                            <ul class="menu_top1">
                                                <li>
                                                    <a class="mlogin" href="#">Member Login</a>
                                                    <a class="mbooking" href="#">Manage Booking</a>
                                                    <a class="fStatus" href="#">Flight Status</a>
                                                </li>								
                                                <div class="clear"></div>	
                                            </ul>
                                            <div class="language">
                                                <select name="country_id" id="country_id" tabindex="1">
                                                    <option value="1">English</option>
                                                    <option value="2">Indonesia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="right_hrt">
                                            <div class="search">
                                                <input type="text" class="input_search" value="Search" onfocus="if(value=='Search')value='';" onblur="if(value=='')value='Search'"; />
                                                       <input type="submit" class="go" value=""  />
                                            </div>
                                        </div>
                                    </div><!-- end top hr -->
                                    <div id="bottom_hr">
                                        <ul class="main_menu">
                                            <li><a <?php if ($page == "page1") echo ' class="active"' ?> href="index.php">Home</a></li>
                                            <li class="dropdown">
                                                <a <?php if ($page == "page2") echo ' class="active"' ?> href="booking_1.php">Bookings</a>
                                                <ul class="sub_one">
                                                    <li><a href="booking_1.php">New Booking</a></li>
                                                    <li><a href="#">Manage Booking</a></li>
                                                    <li class="last"><a href="#">Flight Status</a></li>
                                                </ul>	
                                            </li>
                                            <li class="dropdown">
                                                <a <?php if ($page == "page3") echo ' class="active"' ?> href="#">Flight Information</a>										
                                                <ul class="sub_one">
                                                    <li><a href="flight_schedule.php">Flight Schedule</a></li>
                                                    <li><a href="flight_route.php">Route Info</a></li>
                                                    <li class="last"><a href="flight_fee.php">Fee Schedule</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a <?php if ($page == "page4") echo ' class="active"' ?> href="#">Travel Information</a>
                                                <ul class="sub_one" style="width:210px;">
                                                    <li><a href="travel_tourist.php">Tourist Guide</a></li>
                                                    <li><a href="travel_place.php">Places of interest</a></li>
                                                    <li><a href="travel_fare.php">Fare Deals</a></li>
                                                    <li class="last"><a href="travel_reservation.php">Travel & Reservation Tips</a></li>
                                                </ul>
                                            </li>
                                            <li class=""><a <?php if ($page == "page5") echo ' class="active"' ?> href="air_chartered.php">Air Chartered</a></li>
                                            <li class="dropdown">
                                                <a <?php if ($page == "page6") echo ' class="active"' ?> href="#">Corporate Info</a>
                                                <ul class="sub_one right1">
                                                    <li><a href="corporate_profile.php">Corporate Profile</a></li>
                                                    <li><a href="corporate_fleet.php">Fleet Revitalization</a></li>
                                                    <li><a href="corporate_safety.php">Corporate Safety</a></li>
                                                    <li><a href="corporate_news.php">News</a></li>
                                                    <li class="last"><a href="corporate_contact.php">Contact</a></li>
                                                </ul>
                                            </li>
                                            <div class="clear"></div>
                                        </ul><!-- end main_menu -->

                                    </div>
                                </div><!-- end headr right -->
                                <div class="clear"></div>
                            </div>


                            <div class="clear"></div>	
                        </div><!-- end header -->
                    </div>
                </div>




                <div id="bg_wrapper">
                    <div class="wrapper">