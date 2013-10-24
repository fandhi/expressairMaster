<?php $page = "page6";
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
								<li><a href="corporate_news.php"><span>News</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a class="active" href="corporate_contact.php"><span>Contact</span></a></li>
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
							<li>Contact</li>
						</ul>
					<div class="clear"></div>		
					</div><!-- end breadcrumb -->
					
					<div id="artikel">
					
						<h1>Contact</h1>
						<h5><span style="color:#006aac;">Express Air Office Representative</span></h5>
						
						<div class="lihead">
							<ul>
								<li class="city"><span>City</span></li>
								<li class="address"><span>Address</span></li>
								<li class="telp"><span>Telephone</span></li>
								<li class="fax"><span>Facsimile</span></li>                                                                                               
							</ul>
						<div class="clear"></div>	
						</div><!-- end lihead -->
						<?php include('inc_contactOffice.php');?>
						<?php include('inc_contactForm.php');?>
						
						
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
include("mobile/corporate_contact.php");
include("mobile/inc_footer.php");
?>