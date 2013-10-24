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
								<li><a class="active" href="moreInfo_termUse.php"><span>Terms of use</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="moreInfo_sitemap.php"><span>Site Map</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="moreInfo_faq1.php"><span>FAQ</span></a></li>	
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
							<li>Terms of Use</li>
						</ul>
					<div class="clear"></div>		
					</div><!-- end breadcrumb -->
					
					<div id="artikel">
					
						<h1>Terms of Use</h1>
						<br />
						<?php include('inc_termUse.php');?>
						
						
						
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
include("mobile/moreInfo_termUse.php");
include("mobile/inc_footer.php");
?>