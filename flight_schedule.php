<?php $page = "page3";
include("inc_header.php");
$url = $_SERVER['SERVER_NAME'] . "/slicing/expressair/";
$url_root = $_SERVER['DOCUMENT_ROOT'] . "/slicing/expressair/";
include("inc_menu.php");
?>
			
			<div id="banner_page">
				<img src="images/content/banner_page1.jpg" alt="banner page"/>
			<div class="clear"></div>	
			</div><!-- end banner_page -->
			
			
			<!-- star content_page -->
			<div id="content_page">	
				
				<div id="left_wrap">
				
					<div class="sideleft_top"><h2>Flight Information</h2></div>
					<div class="sideleft_mid">
						
						<div class="sideleftmenu">
							<ul class="">
								<li><a class="active" href="flight_schedule.php"><span>Flight Schedule</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="flight_route.php"><span>Route Info</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="flight_fee.php"><span>Fee Schedule</span></a></li>								
							</ul>
						<div class="clear"></div>	
						</div><!--end sideleftmenu-->
						
					</div><!-- end sideleft_mid -->					
					<div class="sideleft_bot">left wrap</div><!-- end sideleft_bot -->
				
				<div class="clear"></div>	
				</div><!-- end left_wrap -->
				
				<div id="right_wrap">
				
					<div class="breadcrumb">
						<ul>
							<li><a href="#">Home</a>&nbsp;>&nbsp;</li>
							<li><a href="#">Flight Information</a>&nbsp;-&nbsp;</li>
							<li>Flight Schedule</li>
						</ul>
					<div class="clear"></div>		
					</div><!-- end breadcrumb -->
					
					<div id="artikel">
					
						<h1>Flight Schedule</h1>
						<p>
							Select your departing and arriving destinations to view current flight schedules. <br />
							<i>* Schedule shown is for reference only and is subject to change without prior notice. Actual schedule and flight times are indicated in the flight booking engine</i> 
						</p>
						
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
										<div style="margin-top:20px;">
											<input type="submit" value="Search Flights" class="btn_sflight1"/>
										</div>
									</fieldset>
								</form>
							<div class="clear"></div>	
							</div>
						</div><!-- end head_flight -->
						
						
						<div class="content_flight">
							<?php include('inc_table_flight.php');?>
						
						<div class="clear"></div>	
						</div><!-- end content_flight1 -->
						
						
						
						
						
					<div class="clear"></div>	
					</div><!-- end artikel ------------------------------------------------->
					
					
				<div class="clear"></div>	
				</div><!-- end right_wrap -->
				
			<div class="clear"></div>	
			</div>
			<!-- end content_page -->
			
			
		
	
<?php include("inc_footer.php");?>

<?php
include("mobile/inc_menu.php");
include("mobile/flight_schedule.php");
include("mobile/inc_footer.php");
?>