<?php 
$page = "page6";
include"inc_header.php";
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
				
					<div class="sideleft_top"><h2>Corporate Info</h2></div>
					<div class="sideleft_mid">
						
						<div class="sideleftmenu">
							<ul class="">
								<li><a href="corporate_profile.php"><span>Corporate Profile</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="corporate_fleet.php"><span>Fleet Revitalization</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a class="active" href="corporate_safety.php"><span>Corporate Safety </span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="corporate_news.php"><span>News</span></a></li>
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
							<li>Corporate Safety</li>
						</ul>
					<div class="clear"></div>		
					</div><!-- end breadcrumb -->
					
					<div id="artikel">
					
						<h1>Corporate Safety</h1>						
						<p>
							Safety objectives have been established in conjunction with the Garuda Indonesia Safety Policy.
						</p>
						<ul>
							<li>To identify and eliminate hazardous conditions</li>
							<li>To perform hazard and risk analysis for all proposed new equipment acquisitions, facilities, operations and procedures and mitigate the risk to an acceptable level</li>
							<li>To provide relevant Safety Management System (SMS) education and training to all personnel</li>
							<li>To provide a safe, healthy work environment for all personnel</li>
							<li>To minimize accidents/incidents attributable to organizational factors</li>
							<li>To prevent damage and injury to property and people resulting from company operations</li>
							<li>To improve the effectiveness of the safety management system through regular safety audits that review all aspects of the SMS to make continuous improvements to the overall level of safety</li>
							<li>To provide continuous monitoring and regular assessment of safety levels</li>
							<li>To ensure compliance with Indonesia DGCA (CASR 121), International Regulation (ICAO) and international best practices industry (IATA) standards</li>
						</ul>
						<br />
						<br />
						<div class="imgShadow">
							<img src="images/content/img_safety.jpg" alt="images"/>							
						<div class="clear"></div>	
						</div><!-- end imgShadow-->
						
						
					<div class="clear"></div>	
					</div><!-- end artikel ------------------------------------------------->
					
					
				<div class="clear"></div>	
				</div><!-- end right_wrap -->
				
			<div class="clear"></div>	
			</div>
			<!-- end content_page -->
			
			
		
	
<?php include("inc_footer.php");?>

<?php include("mobile/inc_menu.php");
include("mobile/corporate_safety.php"); 
include("mobile/inc_footer.php");
?>