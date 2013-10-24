<?php $page = "page3";
include("inc_header.php");
$url = $_SERVER['SERVER_NAME'] . "/slicing/expressair/";
$url_root = $_SERVER['DOCUMENT_ROOT'] . "/slicing//expressair/";
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
								<li><a href="flight_schedule.php"><span>Flight Schedule</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a class="active" href="flight_route.php"><span>Route Info</span></a></li>
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
							<li>Route Info</li>
						</ul>
					<div class="clear"></div>		
					</div><!-- end breadcrumb -->
					
					<div id="artikel">
					
						<h1>Route Info</h1>						
						
						<div class="head_route">
							<div class="block">
								<form method="post" action="flight_route2.php" class="form_headRoute">
									<fieldset>
										<label>Departing</label>
										<select class="select_dep">											
											<option>Select</option>
											<option>Jakarta (CKG)</option>
										</select>
									</fieldset>	
									<fieldset>
										<label>Arriving</label>
										<select class="select_dep">											
											<option>Select</option>
											<option>Denpasar (DPS)</option>
										</select>
									</fieldset>
									<fieldset class="last">
										<div style="width:120px;">
											<input type="submit" class="clearMap" value="Clear Map"/>
										</div>
									</fieldset>	
								</form>
							<div class="clear"></div>	
							</div>
						</div><!-- end head_route -->
						
						<div class="content_route">							
							<img src="images/content/map1.jpg" alt="img"/>
						<div class="clear"></div>	
						</div><!-- end content_route -->
						
						
						
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
include("mobile/flight_route.php");
include("mobile/inc_footer.php");
?>