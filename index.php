<?php $page = "page1" ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Express Air</title>
        <link rel="shortcut icon" type="images/x-icon" href="favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="css/reset.css"/>	
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/styles_old.css"/>
        <link rel="stylesheet" type="text/css" href="css/dropdown_menu.css"/>		
        <link rel="stylesheet" type="text/css" href="css/style_booking_form.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery.selectbox.css"/><!-- style for select language -->
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>		
        <link rel="stylesheet" type="text/css" href="css/bjqs.css"/>		
        <link rel="stylesheet" type="text/css" href="css/accordian.css"/>	        	

        <link rel="stylesheet" type="text/css" href="mobile/css/style_mobile.css"/>
        <link rel="stylesheet" type="text/css" href="mobile/css/styles_old_mobile.css"/>
        <link rel="stylesheet" type="text/css" href="mobile/css/dropdown_menu_mobile.css"/>		
        <link rel="stylesheet" type="text/css" href="mobile/css/style_booking_form_mobile.css"/>
        <link rel="stylesheet" type="text/css" href="mobile/css/jquery.selectbox_mobile.css"/><!-- style for select language -->
        <link rel="stylesheet" type="text/css" href="mobile/css/jquery-ui_mobile.css"/>		
        <link rel="stylesheet" type="text/css" href="mobile/css/bjqs_mobile.css"/>		
        <link rel="stylesheet" type="text/css" href="mobile/css/accordian_mobile.css"/>	

		<link rel="stylesheet" type="text/css" href="css/mediaqueries.css"/>	

        <script type="text/javascript" src="js/jquery_1.8.2.js"></script>
        <script type="text/javascript" src="js/jquery_ui-1.9.0.js"></script>	
        <script type="text/javascript" src="js/jquery_selectbox-0.2.js"></script><!-- js for select language -->		
        <script type="text/javascript" src="js/jquery_bjqs-1.3.min.js"></script><!-- js for fade home -->	
        <script type="text/javascript" src="js/jquery_accordian.js"></script>
        <script type="text/javascript" src="js/jquery_scrolltopcontrol.js"></script><!-- js for scroll top -->	
        <script type="text/javascript" src="js/jquery_functions.js"></script>		

        <!--[if IE 7]>
                <link rel="stylesheet" type="text/css" href="css/style_ie7.css"/>
        <![endif]-->
        <!--[if IE 8]>
                <link rel="stylesheet" type="text/css" href="css/style_ie8.css"/>
        <![endif]-->
        <!--[if IE 9]>
                <link rel="stylesheet" type="text/css" href="css/style_ie9.css"/>
        <![endif]-->	

        <style type="text/css">
            #mobile, #desktop {
                adisplay:none;
            }
        </style>	


    </head>

    <body>

        <script type="text/javascript">      
         
            $(document).ready(function(){
			
                function detect_device() {  
                    // Get browser width
                    var w = $(window).width();
                          
                    if ( w <= 990 ) {                    
                        $('#mobile').show().siblings('#desktop').hide();
                    } else {                    
                        $('#desktop').show().siblings('#mobile').hide();
                    }    
                }            
                $(window).bind('resize',detect_device).trigger('resize');		
				
					
            });          
            
      
        </script>





        <div id="mobile">

            <div id="container_one">
                <div id="container_two">
                    <div class="shadow_white">
                        <div class="wrapper_header">			
                            <div id="header">							
                                <div class="wrapper2">						
                                    <div class="head_left">							
                                        <div class="logo">
                                            <a href="index.php"><img src="images/logo.png" alt=""/></a>
                                        </div>

                                    </div><!-- end head left -->						
                                    <div class="head_right">
                                        <div id="top_hr">
                                            <div class="left_hrt">
                                                <a href="#" class="show_menu_top1">show_menu_top1</a>
                                                <ul class="menu_top1_mobile">
                                                    <li>
                                                        <a class="mlogin" href="#">Member Login</a>
                                                        <a class="mbooking" href="#">Manage Booking</a>
                                                        <a class="fStatus" href="#">Flight Status</a>
                                                    </li>								
                                                    <div class="clear"></div>	
                                                </ul>
                                                <div class="language">
                                                    <select name="country_id_mobile" id="country_id_mobile" tabindex="1">
                                                        <option value="1">EN</option>
                                                        <option value="2">INA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="right_hrt">
                                                <a href="#" class="toggle_search">toggle_search</a>
                                                <div class="search_mobile">
                                                    <form method="post" action="">
                                                        <input type="text" class="input_search" value="Search" onfocus="if(value=='Search')value='';" onblur="if(value=='')value='Search'"; />
                                                               <input type="submit" class="go" value=""  />
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- end top hr -->
                                        <div id="bottom_hr">
                                            <a class="toggleMenu" href="#">Menu</a>									
                                            <ul class="main_menu_mobile">
                                                <li><a class="first" href="index.php">Home</a></li>
                                                <li>
                                                    <a href="#">Bookings</a>
                                                    <ul>
                                                        <li><a class="first" href="booking_1.php">New Booking</a></li>
                                                        <li><a href="#">Manage Booking</a></li>
                                                        <li class="last"><a href="#">Flight Status</a></li>
                                                    </ul>	
                                                </li>
                                                <li>
                                                    <a href="#">Flight Information</a>										
                                                    <ul>
                                                        <li><a class="first" href="flight_schedule.php">Flight Schedule</a></li>
                                                        <li><a href="flight_route.php">Route Info</a></li>
                                                        <li class="last"><a href="flight_fee.php">Fee Schedule</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Travel Information</a>
                                                    <ul>
                                                        <li><a class="first" href="travel_tourist.php">Tourist Guide</a></li>
                                                        <li><a href="travel_place.php">Places of interest</a></li>
                                                        <li><a href="travel_fare.php">Fare Deals</a></li>
                                                        <li class="last"><a href="travel_reservation.php">Travel & Reservation Tips</a></li>
                                                    </ul>
                                                </li>
                                                <li class=""><a href="air_chartered.php">Air Chartered</a></li>
                                                <li>
                                                    <a href="#">Corporate Info</a>
                                                    <ul>
                                                        <li><a class="first" href="corporate_profile.php">Corporate Profile</a></li>
                                                        <li><a href="corporate_fleet.php">Fleet Revitalization</a></li>
                                                        <li><a href="corporate_safety.php">Corporate Safety</a></li>
                                                        <li><a href="corporate_news.php">News</a></li>
                                                        <li class="last"><a href="corporate_contact.php">Contact</a></li>
                                                    </ul>
                                                </li>
                                                <div class="clear"></div>
                                            </ul><!-- end main_menu -->
                                            <script type="text/javascript" src="mobile/js/dropdown_menu_mobile.js"></script>



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

                            <div id="banner">	

                                <div id="banner-fade-mobile">
                                    <!-- start Basic Jquery Slider -->
                                    <ul class="bjqs">
                                        <li><img src="images/slider_home/banner_slide1.jpg" title="<b>SPECIAL FARE TO PAPUA</b> <i>Explore the exotic Raja Ampat with our special
fare Summer Package</i>" alt="banner_slide"/></li>
                                        <li><img src="images/slider_home/banner_slide2.jpg" title="<b>TERBANGLAH INDONESIA</b><i>For further information about ticket &amp; flight, call
                                                 our customer service</i>" alt="banner_slide"/></li>	
                                    </ul>
                                    <!-- end Basic jQuery Slider -->
                                </div>

                            </div><!-- end banner -->


                            <div id="wrap_boxAbs">
                                <div id="tabs_mobile">
                                    <ul>
                                        <li><a href="#tabs-1">Search Flight</a></li>
                                        <li style="margin: 0 2px;"><a href="#tabs-2">Manage Booking</a></li>
                                        <li><a href="#tabs-3">Flight Status</a></li>
                                    </ul>
                                    <div id="tabs-1">
                                            <!--<p><img src="images/content/img_flight.jpg" alt=""/></p>-->
                                        <div id="booking_engine">
                                            <h2>Book Your Flight</h2>
                                            <form action="" method="post" class="form_booking">
                                                <fieldset>
                                                    <div class="wrap_radio1">
                                                        <div class="radio1"><input type="radio"><span>One way</span></div>
                                                        <div class="radio1"><input type="radio"><span>Return</span></div>
                                                    </div>										
                                                </fieldset>
                                                <fieldset>
                                                    <div class="currency">
                                                        <label>Currency</label>
                                                        <select>
                                                            <option>IDR</option>
                                                            <option>USD</option>
                                                        </select>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="wrap_selectL">
                                                        <label>From</label>											
                                                        <select class="selectL">
                                                            <option>Jakarta (CGK)</option>
                                                        </select>
                                                    </div>
                                                    <div class="wrap_selectR">
                                                        <label>Depart</label>											
                                                        <select class="selectR">
                                                            <option>13 Oktober 2012</option>
                                                        </select>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="wrap_selectL">
                                                        <label>To</label>											
                                                        <select class="selectL">
                                                            <option>Denpasar (DPS)</option>
                                                        </select>
                                                    </div>
                                                    <div class="wrap_selectR">
                                                        <label>Return</label>											
                                                        <select class="selectR">
                                                            <option>14 Oktober 2012</option>
                                                        </select>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="wrap_age1">
                                                        <label>Adults</label>											
                                                        <select class="select_age">
                                                            <option>1</option>
                                                        </select>
                                                    </div>	
                                                    <div class="wrap_age2">
                                                        <label>Children</label>											
                                                        <select class="select_age">
                                                            <option>1</option>
                                                        </select>
                                                    </div>	
                                                    <div class="wrap_age3">
                                                        <label>Infants</label>											
                                                        <select class="select_age">
                                                            <option>1</option>
                                                        </select>
                                                    </div>	
                                                    <a class="i_what" href="#"><img src="images/material/icon_what.png" alt=""/></a>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="warning">
                                                        <span>Error, to many infant, please re-select infant</span>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="wrap_button1">
                                                        <input type="submit" value="Search Flights" class="button1"/>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div><!-- end booking engine -->
                                    </div>
                                    <div id="tabs-2">
                                        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
                                    </div>
                                    <div id="tabs-3">
                                        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                                        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                                    </div>
                                </div>
                                <!-- end tabs -->

                                <div id="add_info">
                                    <div class="boxAdd1">
                                        <a class="abox" href="#"><img src="images/material/addInfo1.png" alt="addInfo"/></a>
                                    </div>
                                    <div class="boxAdd2">
                                        <a class="abox" href="#"><img src="images/material/addInfo2.png" alt="addInfo"/></a>
                                    </div>
                                    <div class="clear"></div>	
                                </div><!-- add info -->

                                <div class="clear"></div>	
                            </div><!-- end wrap_boxAbs -->


                            <!-- star content -->
                            <div id="content">

                                <div id="home_widget">

                                    <div class="widget_fare">
                                        <div class="fare_content">
                                            <div class="fareTop">
                                                <h3>Fare Deals</h3>
                                                <a class="allDeal" href="#">All Deals</a>
                                                <div class="clear"></div>	
                                            </div>	

                                            <a class="fare_link" href="#">
                                                <span class="flink1">Jakarta - Denpasar</span>	
                                                <span class="flink2">from : IDR 500,000</span>	
                                            </a>
                                            <a class="fare_link" href="#">
                                                <span class="flink1">Jakarta - Lombok</span>	
                                                <span class="flink2">from : IDR 500,000</span>	
                                            </a>
                                            <a class="fare_link" href="#">
                                                <span class="flink1">Jakarta - Surabaya</span>	
                                                <span class="flink2">from : IDR 500,000</span>	
                                            </a>
                                            <a class="fare_link" href="#">
                                                <span class="flink1">Jakarta - Irian Jaya</span>	
                                                <span class="flink2">from : IDR 500,000</span>	
                                            </a>
                                            <a class="fare_link" href="#">
                                                <span class="flink1">Jakarta - Singapura</span>	
                                                <span class="flink2">from : IDR 500,000</span>	
                                            </a>	
                                        </div>
                                    </div><!-- end widget_fare -->

                                    <div class="widget_promo">
                                        <div class="promoImg">
                                            <div class="bgabsolute"></div>	
                                            <img src="images/content/widget_promo1.jpg" alt="promo"/>						
                                        </div>
                                        <div class="promo_descrip">
                                            <div class="promo_content">
                                                <div class="short_desc">
                                                    <h3>Exotic Raja Ampat Promo Fare</h3>
                                                    <p><span style="color:#777777;">Explore the exotic Raja Ampat with our special fare Summer Package</span></p>
                                                    <p><i>*save up <span style="color:#ff0000;">50 %</span> for regullar class</i></p>
                                                </div>
                                                <div class="BookFlight"><a href="#">Book Flight</a></div>
                                            </div>
                                        </div>
                                    </div><!-- end widget_promo -->

                                    <div class="widget_promo">
                                        <div class="promoImg">
                                            <div class="bgabsolute"></div>	
                                            <img src="images/content/widget_promo2.jpg" alt="promo"/>						
                                        </div>
                                        <div class="promo_descrip">
                                            <div class="promo_content">
                                                <div class="short_desc">
                                                    <h3>Special Fare to Bali, Daily Flight</h3>
                                                    <p><span style="color:#777777;">Flight Daily to Bali, and get special fare every monday. *term & condition apply</span></p>
                                                    <p><i>*save up <span style="color:#ff0000;">30 %</span> on moday</i></p>									
                                                </div>
                                                <div class="BookFlight"><a href="#">Book Flight</a></div>
                                            </div>
                                        </div>
                                    </div><!-- end widget_promo -->

                                    <div class="widget_promo">
                                        <div class="promoImg">
                                            <div class="bgabsolute"></div>	
                                            <img src="images/content/widget_promo3.jpg" alt="promo"/>						
                                        </div>
                                        <div class="promo_descrip">
                                            <div class="promo_content">
                                                <div class="short_desc">
                                                    <h3>Fly to Sulawesi from 700,000 IDR</h3>
                                                    <p><span style="color:#777777;">Explore the beautiful Bunaken Island, starting from 700,000 IDR</span></p>
                                                    <p><i>*save up <span style="color:#ff0000;">50 %</span> for regullar class</i>								
                                                </div>
                                                <div class="BookFlight"><a href="#">Book Flight</a></div>
                                            </div>
                                        </div>
                                    </div><!-- end widget_promo -->	


                                    <div class="clear"></div>	
                                </div><!-- end home_widget -->				

                                <div id="home_widget_bottom" class="widget_news_link">

                                    <div id="widget_latesNews">
                                        <h3>Latest News</h3>
                                        <div class="short_news">
                                            <span class="date">22 Jun 2011</span>
                                            <div class="descShort">
                                                <p>Express Air Indonesia withdraws Jayapura - Penang route </p>								
                                            </div>
                                            <a class="readmore" href="#">Read More</a>
                                        </div><!-- end short news -->
                                        <div class="short_news">
                                            <span class="date">22 Jun 2011</span>
                                            <div class="descShort">
                                                <p>Express Air Indonesia withdraws Jayapura - Penang route </p>								
                                            </div>
                                            <a class="readmore" href="#">Read More</a>
                                        </div><!-- end short news -->						
                                        <a class="readmore" href="#">More News</a>
                                    </div><!-- end widget_latesNews -->

                                    <div id="widget_touristGuide">
                                        <h3>Tourist Guide</h3>
                                        <div class="picture">
                                            <img src="images/content/widget_tourist.jpg" alt="widget picture"/>
                                        </div>
                                        <h4>Diving in Bunaken</h4>
                                        <div class="descrip">
                                            <p>Feel more experience when you dive in Bunaken Island</p>							
                                        </div>												
                                        <a class="readmore" href="#">More Info</a>
                                    </div><!-- end widget_touristGuide -->

                                    <div id="widget_place">
                                        <h3>Place of Interest</h3>
                                        <div class="picture">
                                            <img src="images/content/widget_place.jpg" alt="widget picture"/>
                                        </div>
                                        <h4>Beautiful Komodo Island</h4>
                                        <div class="descrip">
                                            <p>Explore the Komodo Island, with beautiful view..</p>							
                                        </div>												
                                        <a class="readmore" href="#">More Info</a>
                                    </div><!-- end widget_place -->

                                    <div id="widget_quickLink">
                                        <h3>Share & Quick Links</h3>
                                        <ul class="">
                                            <li><a class="link_fb" href="#">Join us on Facebook</a></li>
                                            <li><a class="link_twitter" href="#">Follow us on Twitter</a></li>
                                            <li><a class="link_ym" href="#">Join us on Yahoo Messenger</a></li>
                                            <li><a class="link_booking" href="#">Online Booking</a></li>
                                            <li><a class="link_insurance" href="#">Insurance</a></li>
                                            <li class="last"><a class="link_term" href="#">Terms & Conditions for Carriage</a></li>
                                        </ul>
                                    </div><!-- end widget_quickLink -->

                                    <div class="clear"></div>
                                </div><!-- end home_widget -->

                            </div>
                            <!-- end content -->


                            <div id="footer">

                                <div class="block">
                                    <div class="right_foot">
                                        <ul class="link_footer">
                                            <li><a href="moreInfo_faq1.php">FAQ</a></li>	
                                            <li><a href="corporate_contact.php">Contact us</a></li>	
                                            <li><a href="#">Careers</a></li>	
                                            <li><a href="#">Ad space</a></li>	
                                            <li><a href="moreInfo_termCondition.php">Terms & conditions</a></li>	
                                            <li class="last"><a href="moreInfo_sitemap.php">Sitemap</a></li>	
                                            <div class="clear"></div>
                                        </ul>
                                    </div>

                                    <div class="left_foot">
                                        <p>
                                            Usage of the ExpressAir Indonesia website states your compliance of our <a class="redc" href="#">Term of Use and Privacy Policy</a>
                                        </p>
                                        <p>
                                            &copy; 2012 ExpressAir Indonesia. For best view use 1366 x 780 resolution; MSIE v.7 or Firefox 3.5+
                                        </p>
                                    </div>			


                                    <div class="clear"></div>	
                                </div>
                                <div class="clear"></div>		
                            </div><!-- end footer -->

                            <div class="clear"></div>
                        </div><!-- end wrapper -->
                        <div class="clear"></div>
                    </div><!-- end bg_wrapper -->

                </div><!-- end container one -->
            </div><!-- end container two -->


        </div><!-- end mobile --> 









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
                                                <li><a <?php if ($page == "page1")
    echo ' class="active"' ?> href="index.php">Home</a></li>
                                                <li class="dropdown">
                                                    <a <?php if ($page == "page2")
    echo ' class="active"' ?> href="booking_1.php">Bookings</a>
                                                    <ul class="sub_one">
                                                        <li><a href="booking_1.php">New Booking</a></li>
                                                        <li><a href="#">Manage Booking</a></li>
                                                        <li class="last"><a href="#">Flight Status</a></li>
                                                    </ul>	
                                                </li>
                                                <li class="dropdown">
                                                    <a <?php if ($page == "page3")
    echo ' class="active"' ?> href="#">Flight Information</a>										
                                                    <ul class="sub_one">
                                                        <li><a href="flight_schedule.php">Flight Schedule</a></li>
                                                        <li><a href="flight_route.php">Route Info</a></li>
                                                        <li class="last"><a href="flight_fee.php">Fee Schedule</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a <?php if ($page == "page4")
    echo ' class="active"' ?> href="#">Travel Information</a>
                                                    <ul class="sub_one" style="width:210px;">
                                                        <li><a href="travel_tourist.php">Tourist Guide</a></li>
                                                        <li><a href="travel_place.php">Places of interest</a></li>
                                                        <li><a href="travel_fare.php">Fare Deals</a></li>
                                                        <li class="last"><a href="travel_reservation.php">Travel & Reservation Tips</a></li>
                                                    </ul>
                                                </li>
                                                <li class=""><a <?php if ($page == "page5")
    echo ' class="active"' ?> href="air_chartered.php">Air Chartered</a></li>
                                                <li class="dropdown">
                                                    <a <?php if ($page == "page6")
    echo ' class="active"' ?> href="#">Corporate Info</a>
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

                            <div id="banner">
                                <div id="wrap_boxAbs">
                                    <div id="tabs">
                                        <ul>
                                            <li><a href="#tabs-1">Search Flight</a></li>
                                            <li><a href="#tabs-2">Manage Booking</a></li>
                                            <li><a href="#tabs-3">Flight Status</a></li>
                                        </ul>
                                        <div id="tabs-1">
                                                <!--<p><img src="images/content/img_flight.jpg" alt=""/></p>-->
                                            <div id="booking_engine">
                                                <h2>Book Your Flight</h2>
                                                <form action="" method="post" class="form_booking">
                                                    <fieldset>
                                                        <div class="wrap_radio1">
                                                            <div class="radio1"><input type="radio"><span>One way</span></div>
                                                            <div class="radio1"><input type="radio"><span>Return</span></div>
                                                        </div>
                                                        <div class="currency">
                                                            <label>Currency</label>
                                                            <select>
                                                                <option>IDR</option>
                                                                <option>USD</option>
                                                            </select>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="wrap_selectL">
                                                            <label>From</label>											
                                                            <select class="selectL">
                                                                <option>Jakarta (CGK)</option>
                                                            </select>
                                                        </div>
                                                        <div class="wrap_selectR">
                                                            <label>Depart</label>											
                                                            <select class="selectR">
                                                                <option>13 Oktober 2012</option>
                                                            </select>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="wrap_selectL">
                                                            <label>To</label>											
                                                            <select class="selectL">
                                                                <option>Denpasar (DPS)</option>
                                                            </select>
                                                        </div>
                                                        <div class="wrap_selectR">
                                                            <label>Return</label>											
                                                            <select class="selectR">
                                                                <option>14 Oktober 2012</option>
                                                            </select>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="wrap_age1">
                                                            <label>Adults</label>											
                                                            <select class="select_age">
                                                                <option>1</option>
                                                            </select>
                                                        </div>	
                                                        <div class="wrap_age2">
                                                            <label>Children</label>											
                                                            <select class="select_age">
                                                                <option>1</option>
                                                            </select>
                                                        </div>	
                                                        <div class="wrap_age3">
                                                            <label>Infants</label>											
                                                            <select class="select_age">
                                                                <option>1</option>
                                                            </select>
                                                        </div>	
                                                        <a class="i_what" href="#"><img src="images/material/icon_what.png" alt=""/></a>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="warning">
                                                            <span>Error, to many infant, please re-select infant</span>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="wrap_button1">
                                                            <input type="submit" value="Search Flights" class="button1"/>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div><!-- end booking engine -->
                                        </div>
                                        <div id="tabs-2">
                                            <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
                                        </div>
                                        <div id="tabs-3">
                                            <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                                            <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                                        </div>
                                    </div>
                                    <!-- end tabs -->

                                    <div id="add_info">
                                        <div class="boxAdd1">
                                            <a class="abox" href="#"><img src="images/material/addInfo1.png" alt="addInfo"/></a>
                                        </div>
                                        <div class="boxAdd2">
                                            <a class="abox" href="#"><img src="images/material/addInfo2.png" alt="addInfo"/></a>
                                        </div>
                                        <div class="clear"></div>	
                                    </div><!-- add info -->

                                </div><!-- end wrap_boxAbs -->


                                <div id="banner-fade">
                                    <!-- start Basic Jquery Slider -->
                                    <ul class="bjqs">
                                        <li><img src="images/slider_home/banner_slide1.jpg" title="banner_slide" alt="banner_slide"></li>
                                        <li><img src="images/slider_home/banner_slide2.jpg" title="banner_slide" alt="banner_slide"></li>	
                                    </ul>
                                    <!-- end Basic jQuery Slider -->
                                </div>

                            </div><!-- end banner -->

                            <!-- star content -->
                            <div id="content">

                                <div id="home_widget">

                                    <div class="widget_promo">
                                        <div class="promoImg">
                                            <div class="bgabsolute"></div>	
                                            <img src="images/content/widget_promo1.jpg" alt="promo"/>						
                                        </div>
                                        <div class="promo_descrip">
                                            <div class="promo_content">
                                                <div class="short_desc">
                                                    <h3>Exotic Raja Ampat <br /> Promo Fare</h3>
                                                    <p><span style="color:#777777;">Explore the exotic Raja Ampat with our special fare Summer Package</span></p>
                                                    <p><i>*save up <span style="color:#ff0000;">50 %</span> for regullar class</i></p>
                                                </div>
                                                <div class="BookFlight"><a href="#">Book Flight</a></div>
                                            </div>
                                        </div>
                                    </div><!-- end widget_promo -->

                                    <div class="widget_promo">
                                        <div class="promoImg">
                                            <div class="bgabsolute"></div>	
                                            <img src="images/content/widget_promo2.jpg" alt="promo"/>						
                                        </div>
                                        <div class="promo_descrip">
                                            <div class="promo_content">
                                                <div class="short_desc">
                                                    <h3>Special Fare to Bali, <br /> Daily Flight</h3>
                                                    <p><span style="color:#777777;">Flight Daily to Bali, and get special fare every monday. *term & condition apply</span></p>
                                                    <p><i>*save up <span style="color:#ff0000;">30 %</span> on moday</i></p>									
                                                </div>
                                                <div class="BookFlight"><a href="#">Book Flight</a></div>
                                            </div>
                                        </div>
                                    </div><!-- end widget_promo -->

                                    <div class="widget_promo">
                                        <div class="promoImg">
                                            <div class="bgabsolute"></div>	
                                            <img src="images/content/widget_promo3.jpg" alt="promo"/>						
                                        </div>
                                        <div class="promo_descrip">
                                            <div class="promo_content">
                                                <div class="short_desc">
                                                    <h3>Fly to Sulawesi from <br /> 700,000 IDR</h3>
                                                    <p><span style="color:#777777;">Explore the beautiful Bunaken Island, starting from 700,000 IDR</span></p>
                                                    <p><i>*save up <span style="color:#ff0000;">50 %</span> for regullar class</i>								
                                                </div>
                                                <div class="BookFlight"><a href="#">Book Flight</a></div>
                                            </div>
                                        </div>
                                    </div><!-- end widget_promo -->

                                    <div class="widget_fare">
                                        <div class="fare_content">
                                            <div class="fareTop">
                                                <h3>Fare Deals</h3>
                                                <a class="allDeal" href="#">All Deals</a>
                                                <div class="clear"></div>	
                                            </div>	

                                            <a class="fare_link" href="#">
                                                <span class="flink1">Jakarta - Denpasar</span>	
                                                <span class="flink2">from : IDR 500,000</span>	
                                            </a>
                                            <a class="fare_link" href="#">
                                                <span class="flink1">Jakarta - Lombok</span>	
                                                <span class="flink2">from : IDR 500,000</span>	
                                            </a>
                                            <a class="fare_link" href="#">
                                                <span class="flink1">Jakarta - Surabaya</span>	
                                                <span class="flink2">from : IDR 500,000</span>	
                                            </a>
                                            <a class="fare_link" href="#">
                                                <span class="flink1">Jakarta - Irian Jaya</span>	
                                                <span class="flink2">from : IDR 500,000</span>	
                                            </a>
                                            <a class="fare_link" href="#">
                                                <span class="flink1">Jakarta - Singapura</span>	
                                                <span class="flink2">from : IDR 500,000</span>	
                                            </a>	
                                        </div>
                                    </div><!-- end widget_fare -->

                                    <div class="clear"></div>	
                                </div><!-- end home_widget -->				

                                <div id="home_widget_bottom" class="widget_news_link">

                                    <div id="widget_latesNews">
                                        <h3>Latest News</h3>
                                        <div class="short_news">
                                            <span class="date">22 Jun 2011</span>
                                            <div class="descShort">
                                                <p>Express Air Indonesia withdraws Jayapura  � Penang route </p>								
                                            </div>
                                            <a class="readmore" href="#">Read More</a>
                                        </div><!-- end short news -->
                                        <div class="short_news">
                                            <span class="date">22 Jun 2011</span>
                                            <div class="descShort">
                                                <p>Express Air Indonesia withdraws Jayapura  � Penang route </p>								
                                            </div>
                                            <a class="readmore" href="#">Read More</a>
                                        </div><!-- end short news -->						
                                        <a class="readmore" href="#">More News</a>
                                    </div><!-- end widget_latesNews -->

                                    <div id="widget_touristGuide">
                                        <h3>Tourist Guide</h3>
                                        <div class="picture">
                                            <img src="images/content/widget_tourist.jpg" alt="widget picture"/>
                                        </div>
                                        <h4>Diving in Bunaken</h4>
                                        <div class="descrip">
                                            <p>Feel more experience when you dive in Bunaken Island</p>							
                                        </div>												
                                        <a class="readmore" href="#">More Info</a>
                                    </div><!-- end widget_touristGuide -->

                                    <div id="widget_place">
                                        <h3>Place of Interest</h3>
                                        <div class="picture">
                                            <img src="images/content/widget_place.jpg" alt="widget picture"/>
                                        </div>
                                        <h4>Beautiful Komodo Island</h4>
                                        <div class="descrip">
                                            <p>Explore the Komodo Island, with beautiful view..</p>							
                                        </div>												
                                        <a class="readmore" href="#">More Info</a>
                                    </div><!-- end widget_place -->

                                    <div id="widget_quickLink">
                                        <h3>Share & Quick Links</h3>
                                        <ul class="">
                                            <li><a class="link_fb" href="#">Join us on Facebook</a></li>
                                            <li><a class="link_twitter" href="#">Follow us on Twitter</a></li>
                                            <li><a class="link_ym" href="#">Join us on Yahoo Messenger</a></li>
                                            <li><a class="link_booking" href="#">Online Booking</a></li>
                                            <li><a class="link_insurance" href="#">Insurance</a></li>
                                            <li class="last"><a class="link_term" href="#">Terms & Conditions for Carriage</a></li>
                                        </ul>
                                    </div><!-- end widget_quickLink -->

                                    <div class="clear"></div>
                                </div><!-- end home_widget -->

                            </div>
                            <!-- end content -->


<?php include 'inc_footer.php';?>