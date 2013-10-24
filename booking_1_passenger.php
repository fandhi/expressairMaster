<?php $page = "spage1"?>
<?php include("inc_header_afterLogin.php");?>
			
			
			
			<!-- star content_page -->
			<div id="content_page">
				
				<div class="steps_new">
					<div class="text-box">
						<h2>Passengers</h2>
						<p>Please fill out names of each passenger and check that all information is correct.</p>
					</div>
					<ul class="step-selection">
						<li><div class="step-1"><h2>1</h2><p>Departures</p></div></li>
						<li class="active"><div class="step-2"><h2>2</h2><p>Passengers</p></div></li>
						<li><div class="step-3"><h2>3</h2><p>Payment</p></div></li>
						<li><div class="step-4"><h2>4</h2><p>Confirmation</p></div></li>
					<div class="clear"></div>	
					</ul>
				<div class="clear"></div>	
				</div>
				
				<div class="detail_content">
					<div class="flights">
						<?php include("inc_flights.php");?>
					</div>
					<?php include("inc_passenger.php");?>					
				<div class="clear"></div>	
				</div>
				<div id="passenger_info_new">
					<div class="block">
						<?php include("inc_passenger_info.php");?>
					<div class="clear"></div>
					</div>
				<div class="clear"></div>	
				</div>
				
				
			<div class="clear"></div>	
			</div>
			<!-- end content_page -->
			
			
		
	
<?php include("inc_footer.php");?>