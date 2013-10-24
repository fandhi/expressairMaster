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
												<select name="country_id" id="country_id" tabindex="1">
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
										<script type="text/javascript" src="js/dropdown_menu_mobile.js"></script>
										
										
										
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
					
				
				