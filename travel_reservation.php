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
								<li><a href="travel_tourist.php"><span>Tourist Guide</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="travel_place.php"><span>Place of Interest</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="travel_fare.php"><span>Fare Deals</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a class="active" href="travel_reservation.php"><span>Travel & Reservation Tips</span></a></li>
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
							<li>Travel & Reservation Tips</li>
						</ul>
					<div class="clear"></div>		
					</div><!-- end breadcrumb -->
					
					<div id="artikel">
					
						<h1>Travel & Reservation Tips</h1>											
						
						<div class="reservation_content">
							<h5>International Services</h5>
							<br />
							<ul style="color:#777;">
								<li>Plan and reserve your trip in advance to ensure you can travel when and how you want.</li>
								<li>Choose the most flexible ticket to enable you to change your reservation.</li>
								<li>Prepare valid passport and other required documents.</li>
								<li>Pack sufficient personal belongings.</li>
								<li>Be at the airport at least 2 (two) hours before your scheduled departure.</li>
							</ul>
							
							<br />							
							<h5>Domestic Services</h5>
							<br />
							<ul style="color:#777;">
								<li>Plan and reserve your trip in advance to ensure you can travel when and how you want.</li>
								<li>Choose the most flexible ticket to enable you to change your reservation.</li>
								<li>Pack sufficient personal belongings.</li>
								<li>Be at the airport at the latest 1 (one) hour before your scheduled departure.</li>
							</ul>
							
							<br/>
							<h5>How to Make a Reservation & Purchase a Ticket</h5>
							<br />
							<p>There are five convenient methods to purchase a Garuda Indonesia ticket through our on-line payment system: ATM, Phone Banking, Internet Banking, Mobile Banking, or Visa or MasterCard. You can also purchase a ticket from a travel agent or directly from a Garuda Indonesia branch office.</p>
							
							<div style="margin-left:35px;">
								<h6>Step 1.</h6>
								<br />
								<p>Call the Garuda Indonesia 24-hour Call Center and make a reservation. You will receive a Passenger Name 		Reference number (PNR) and a 13-digit payment code.</p>
								<h6>Step 2.</h6>
								<br />
								<p>Pay for the ticket using any of the following methods:</p>
								<ul style="color:#777;">
									<li>ATM machines of Bank Central Asia (BCA), Bank Negara Indonesia (BNI), Bank Mandiri, Bank Niaga, Lippo 	Bank, 	Permata Bank. Bank BRI.</li>
									<li>Phone Banking of Bank Mandiri, BNI, BCA</li>
									<li>Internet Banking of Bank Mandiri, BCA</li>
									<li>Mobile Banking of Bank Mandiri, BCA</li>
									<li>Visa or MasterCard credit card</li>
								</ul>
								<br />
								<p>If payment is made by ATM machine, you will receive a confirmation of payment slip. If payment is made by 		Phone Banking, Internet Banking, or Mobile Banking, no paper record will be provided.</p>
								<p>To pay by credit card, you may call the Garuda Indonesia 24-hour Call Center and key in your 16-digit credit card number to authorize payment.</p>
								<p>With the introduction of e-tickets (electronic tickets or paperless tickets) by Garuda Indonesia on all domestic flights and flights to Singapore originating in Jakarta, a traditional paper ticket is no longer required.</p>
								<h6>Step 3.</h6>
								<br />
								<p>
									Upon arrival at the airport, present your passport or identity card at the check-in counter and proceed to the boarding gate. <br />
									In any circumstances where a paper ticket is needed, a Garuda Indonesia branch office or Airport Ticketing Office may issue a ticket or itinerary receipt upon request.
								</p>
							</div>
							
							
						<div class="clear"></div>	
						</div><!-- end reservation_content -->	
						
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
include("mobile/travel_reservation.php");
include("mobile/inc_footer.php");
?>