<?php
$page = "page6";
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
				
					<div class="sideleft_top"><h2>Corporate Info</h2></div>
					<div class="sideleft_mid">
						
						<div class="sideleftmenu">
							<ul class="">
								<li><a href="corporate_profile.php"><span>Corporate Profile</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="corporate_fleet.php"><span>Fleet Revitalization</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="corporate_safety.php"><span>Corporate Safety </span></a></li>
									<li><div class="side_line"></div></li>
								<li><a class="active" href="corporate_news.php"><span>News</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="corporate_contact.php"><span>Contact</span></a></li>
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
							<li><a href="#">Corporate Info</a>&nbsp;-&nbsp;</li>
							<li>News</li>
						</ul>
					<div class="clear"></div>		
					</div><!-- end breadcrumb -->
					
					<div id="artikel">
					
						<h1>News</h1>		
						<div class="news_detail">
							<span class="titleNews">Express Air posts earnings of USD 2.39 billion in third quarter of 2012</span>
							<div class="dateNews">26 Juni 2012  &nbsp;|&nbsp;  23:00</div>
							<br />
							<p>Indonesia�s national airline, Garuda Indonesia today announced its third quarter consolidated operating revenue of USD 2.39 billion,  an increase of 14.4 per cent, compared to the USD 2.08 billion earned in the same period last year. In addition, the airline booked an income from operations of USD 92.75 million, which is a significant 140.4 percent rise compared to USD 38.60 million last year. Comprehensive income also increased by 108.2 per cent, from USD 29.2 million in the same period in 2011 to USD 60.8 million in the third quarter of 2012.</p>	
							<p>Improved performance in various areas of operations, such as increased passenger and cargo volumes contributed positively to the increase in revenue and income. Up till the third quarter of 2012, Garuda Indonesia transported as many as 14.892.743 passengers, or an increase of 20.2 per cent compared to the 12.385.025 passengers carried in the same period last year. Meanwhile, throughout the third quarter of 2012, cargo volume also experienced an increase of 18.7 per cent, making the amount of cargo transported 201.070 tons, compared to the amount of 169.334 tons carried in the same period in the previous year.</p>	
							<p><img src="images/content/news_detail.jpg" alt="img"/></p>
							<p>Availability seat kilometre/ASK also rose in tandem with the increase in flight frequency as a result of the arrival of new aircraft in Garuda Indonesia�s fleet. ASK increased by 11.7 per cent, from the 24.05 billion to 26.87 billion. Flight frequency also increased by 17.2 per cent, from 94.899 flights in the same period in 2011, to 111.251 flights.</p>
							<p>Seat Load Factor/SLF rose 75.86 per cent compared to the 75.16 per cent in the same period last year, followed by improved passenger yield of USC 9,55 against last year�s USC 9,49. Aircraft utilisation increased to 10:47 hours from the 10:42 hours clocked in the same period last year. In the third quarter of this year, the airline reached an OTP of 84.46 per cent.</p>
							<hr class="dotted" />
						</div><!--end news list-->
						<br />
						<a class="readmore" href="corporate_news.php">Back to News List</a>	
						
						
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
include("mobile/corporate_news_detail.php");
include("mobile/inc_footer.php");
?>