<?php $page = "page7";
include("inc_header.php");
$url = $_SERVER['SERVER_NAME'] . "/expressair/";
$url_root = $_SERVER['DOCUMENT_ROOT'] . "/expressair/";
include("inc_menu.php");
?>
			
			<div id="banner_page">
				<img src="images/content/banner_page1.jpg" alt="banner page"/>
			<div class="clear"></div>	
			</div><!-- end banner_page -->
			
			
			<!-- star content_page -->
			<div id="content_page">	
				
				<div id="left_wrap">
				
					<div class="sideleft_top"><h2>More Info</h2></div>
					<div class="sideleft_mid">
						
						<div class="sideleftmenu">
							<ul class="">
								<li><a href="moreInfo_termCondition.php"><span>Terms and Conditions</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="moreInfo_termUse.php"><span>Terms of use</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="moreInfo_sitemap.php"><span>Site Map</span></a></li>
									<li><div class="side_line"></div></li>
								<li>
									<a class="active" href="moreInfo_faq1.php"><span>FAQ</span></a>
									<ul class="child">
										<li><a href="moreInfo_faq1.php"><span>Reservation</span></a></li>
										<li><a href="moreInfo_faq2.php"><span>Fare Ticketing</span></a></li>
										<li><a href="moreInfo_faq3.php"><span>Baggage</span></a></li>
										<li><a href="moreInfo_faq4.php"><span>Online Payment</span></a></li>
										<li><a class="active" href="moreInfo_faq5.php"><span>Surprise Fare</span></a></li>
									</ul><!-- end child-->
								</li>	
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
							<li><a href="#">More Info</a>&nbsp;-&nbsp;</li>							
							<li>FAQ</li>
						</ul>
					<div class="clear"></div>		
					</div><!-- end breadcrumb -->
					
					<div id="artikel" class="faq">
					
						<h1>FAQ - Surprise Fare</h1>						
						<p>
							<span style="color:#333">(?) What are the lowest fares for Garuda Indonesia flights? </span> <br />
							(+) Surprise Fares currently listed on this website are the least expensive regular fares offered for Garuda Indonesia flights. However, seats are limited, subject to availability, and prices may change without notice.
						</p>
						<p>
							<span style="color:#333">(?) How is the actual fare that is paid for a ticket calculated?</span> <br />
							(+) The airfares shown do not include 10% VAT on the applicable airfare, an insurance surcharge of IDR 10.000 (per sector) and fuel surcharge. Please click here.
						</p>
						<p>
							<span style="color:#333">(?) Are Surprise Fares available during Lebaran?</span> <br />
							(+) Surprise Fares may be available during Lebaran and the year-end holiday season for selected destinations.
						</p>
						<p>
							<span style="color:#333">(?) If more than one person is traveling at the same time, can they all get a lower fare?</span> <br />
							(+) A minimum of 2 adult passengers traveling together can obtain an even lower Surprise Fare on selected departures.
						</p>
						<p>
							<span style="color:#333">(?) Can a Surprise Fare be purchased as an open ticket?</span> <br />
							(+) A Surprise Fare must be a confirmed booking on a fixed departure time and date.
						</p>
						<p>
							<span style="color:#333">(?) Are stopovers permitted on a Surprise Fare?</span> <br />
							(+) Stopovers are not permitted.
						</p>
						<p>
							<span style="color:#333">(?) Can a booking be changed with a Surprise Fare ticket, for example, a change in departure date?</span> <br />
							(+) Surprise Fare tickets can only be re-issued with a surcharge of IDR 50.000 and only for a higher fare ticket.
						</p>
						<p>
							<span style="color:#333">(?) Are Surprise Fare tickets refundable?</span> <br />
							(+) Surprise Fares are not refundable.
						</p>
						<p>
							<span style="color:#333">(?) Can the routing be changed on a Surprise Fare ticket?</span> <br />
							(+) Re-routing on a Surprise Fare Ticket is not permitted.
						</p>
						<p>
							<span style="color:#333">(?) Can Garuda Frequent Flyer mileage be accrued on Surprise Fare tickets?</span> <br />
							(+) Yes, GFF mileage can be accrued on Surprise Fare tickets except on those flight numbers shown with *).
						</p>
						<p>
							<span style="color:#333">(?) Are child discounts available on Surprise Fares?</span> <br />
							(+) A 10% child discount is available on applicable adult Surprise Fare tickets for children aged 2 or above - and less than 12 years of age - occupying a seat. For an infant less than 2 years of age not occupying a seat, a discount of 90% is available on the applicable adult Surprise Fare.
						</p>
						<p>
							<span style="color:#333">(?) Are discounts available for unaccompanied children using Surprise Fare tickets?</span> <br />
							(+) A discount is not available for unaccompanied children traveling on a Surprise Fare ictket. An unaccompanied infant is not permitted.
						</p>
						<p>
							<span style="color:#333">(?) Can a Surprise Fare be purchased from outside of Indonesia?</span> <br />
							(+) Surprise Fares can only be purchased in Indonesia from a Travel Agent or Garuda Indonesia branch office.
						</p>
						<p>
							<span style="color:#333">(?) What is the best departure time to obtain a low fare on Garuda Indonesia?</span> <br />
							(+) Mid to late morning & mid afternoon, depending on your destination.
						</p>
						<p>
							<span style="color:#333">(?) What is the best day of the week to obtain a low fare on Garuda Indonesia?</span> <br />
							(+) Usually Tuesday.
						</p>
						
						
						
						
						
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
include("mobile/moreInfo_faq5.php");
include("mobile/inc_footer.php");
?>