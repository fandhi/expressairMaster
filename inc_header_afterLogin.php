<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<meta name="" content="" />
		<title>Express Air</title>
		<link rel="shortcut icon" type="images/x-icon" href="favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="css/reset.css"/>	
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/styles_old.css"/>
		<link rel="stylesheet" type="text/css" href="css/dropdown_menu.css"/>		
		<link rel="stylesheet" type="text/css" href="css/style_booking_form.css"/>
		<link rel="stylesheet" type="text/css" href="css/jquery.selectbox.css"/><!-- style for select language -->
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>		
		
		<link rel="stylesheet" type="text/css" href="css/mediaqueries.css"/>
		
		<script type="text/javascript" src="js/jquery_1.8.2.js"></script>
		<script type="text/javascript" src="js/jquery_ui-1.9.0.js"></script>	
		<script type="text/javascript" src="js/jquery_selectbox-0.2.js"></script><!-- js for select language -->
		<script type="text/javascript" src="js/jquery_functions.js"></script>
		
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
									<div class="right_hrt">
										<div class="language">
											<select name="country_id" id="country_id" tabindex="1">
												<option value="1">English</option>
												<option value="2">Indonesia</option>
											</select>
										</div>
									</div>
									<div class="right_hrt">
										<ul class="account_afterLogin">
											<li><span class="span_one">User : </span> <span class="span_two">Tommy Wiberg</span></li>
											<li><a href="#">Logout</a></li>
										</ul>
									</div>
								</div><!-- end top hr -->
								<div id="bottom_hr">
									<ul class="main_menu">
										<li><a <?php if($page=="page1") echo ' class="active"'?> href="index.php">Home</a></li>
										<li><a <?php if($page=="spage1") echo ' class="active"'?> href="booking_1.php">Bookings</a></li>
										<li><a <?php if($page=="spage2") echo ' class="active"'?> href="manage_booking.php">Manage Booking</a></li>	
										<li><a <?php if($page=="spage3") echo ' class="active"'?> href="myProfile.php">My Profile</a></li>										
										<li class="last"><a <?php if($page=="spage4") echo ' class="active"'?> href="#">Route Info</a></li>
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
				
			
			