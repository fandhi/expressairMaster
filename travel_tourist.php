<?php
$page = "page4";
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
								<li><a class="active" href="travel_tourist.php"><span>Tourist Guide</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="travel_place.php"><span>Place of Interest</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="travel_fare.php"><span>Fare Deals</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="travel_reservation.php"><span>Travel & Reservation Tips</span></a></li>
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
							<li><a href="#">Travel Information</a>&nbsp;-&nbsp;</li>
							<li>Tourist Guide</li>
						</ul>
					<div class="clear"></div>		
					</div><!-- end breadcrumb -->
					
					<div id="artikel">
					
						<h1>Tourist Guide</h1>											
						<?php include('inc_list_tourist.php');?>
						
						
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
include("mobile/travel_tourist.php");
include("mobile/inc_footer.php");
?>