<?php include("inc_header.php");?>
			
			<div id="banner">	
						
			<div id="banner-fade">
				<!-- start Basic Jquery Slider -->
				<ul class="bjqs">
					  <li><img src="images/slider_home/banner_slide1.jpg" title="banner_slide" alt="banner_slide"></li>
					  <li><img src="images/slider_home/banner_slide2.jpg" title="banner_slide" alt="banner_slide"></li>	
				</ul>
				<!-- end Basic jQuery Slider -->
			  </div>
			
			</div><!-- end banner -->
			
			
			<div id="wrap_boxAbs">
					<div id="tabs">
						<ul>
							<li><a href="#tabs-1">Search Flight</a></li>
							<li><a href="#tabs-2">Manage Booking</a></li>
							<li><a href="#tabs-3">Flight Status</a></li>
						</ul>
						<div id="tabs-1">
							<!--<p><img src="images/content/img_flight.jpg" alt=""/></p>-->
							<div id="booking_engine">
								<h2>Book Your Flight</h2>
								<form action="" method="post" class="form_booking">
									<fieldset>
										<div class="wrap_radio1">
											<div class="radio1"><input type="radio"><span>One way</span></div>
											<div class="radio1"><input type="radio"><span>Return</span></div>
										</div>										
									</fieldset>
									<fieldset>
										<div class="currency">
											<label>Currency</label>
											<select>
												<option>IDR</option>
												<option>USD</option>
											</select>
										</div>
									</fieldset>
									<fieldset>
										<div class="wrap_selectL">
											<label>From</label>											
											<select class="selectL">
												<option>Jakarta (CGK)</option>
											</select>
										</div>
										<div class="wrap_selectR">
											<label>Depart</label>											
											<select class="selectR">
												<option>13 Oktober 2012</option>
											</select>
										</div>
									</fieldset>
									<fieldset>
										<div class="wrap_selectL">
											<label>To</label>											
											<select class="selectL">
												<option>Denpasar (DPS)</option>
											</select>
										</div>
										<div class="wrap_selectR">
											<label>Return</label>											
											<select class="selectR">
												<option>14 Oktober 2012</option>
											</select>
										</div>
									</fieldset>
									<fieldset>
										<div class="wrap_age1">
											<label>Adults</label>											
											<select class="select_age">
												<option>1</option>
											</select>
										</div>	
										<div class="wrap_age2">
											<label>Children</label>											
											<select class="select_age">
												<option>1</option>
											</select>
										</div>	
										<div class="wrap_age3">
											<label>Infants</label>											
											<select class="select_age">
												<option>1</option>
											</select>
										</div>	
										<a class="i_what" href="#"><img src="images/material/icon_what.png" alt=""/></a>
									</fieldset>
									<fieldset>
										<div class="warning">
											<span>Error, to many infant, please re-select infant</span>
										</div>
									</fieldset>
									<fieldset>
										<div class="wrap_button1">
											<input type="submit" value="Search Flights" class="button1"/>
										</div>
									</fieldset>
								</form>
							</div><!-- end booking engine -->
						</div>
						<div id="tabs-2">
							<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
						</div>
						<div id="tabs-3">
							<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
							<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
						</div>
					</div>
					<!-- end tabs -->
					
					<div id="add_info">
						<div class="boxAdd1">
							<a class="abox" href="#"><img src="images/material/addInfo1.png" alt="addInfo"/></a>
						</div>
						<div class="boxAdd2">
							<a class="abox" href="#"><img src="images/material/addInfo2.png" alt="addInfo"/></a>
						</div>
					<div class="clear"></div>	
					</div><!-- add info -->
					
				<div class="clear"></div>	
				</div><!-- end wrap_boxAbs -->
				
			
			<!-- star content -->
			<div id="content">
			
				<div id="home_widget">
					
					<div class="widget_fare">
						<div class="fare_content">
							<div class="fareTop">
								<h3>Fare Deals</h3>
								<a class="allDeal" href="#">All Deals</a>
							<div class="clear"></div>	
							</div>	
							
							<a class="fare_link" href="#">
								<span class="flink1">Jakarta - Denpasar</span>	
								<span class="flink2">from : IDR 500,000</span>	
							</a>
							<a class="fare_link" href="#">
								<span class="flink1">Jakarta - Lombok</span>	
								<span class="flink2">from : IDR 500,000</span>	
							</a>
							<a class="fare_link" href="#">
								<span class="flink1">Jakarta - Surabaya</span>	
								<span class="flink2">from : IDR 500,000</span>	
							</a>
							<a class="fare_link" href="#">
								<span class="flink1">Jakarta - Irian Jaya</span>	
								<span class="flink2">from : IDR 500,000</span>	
							</a>
							<a class="fare_link" href="#">
								<span class="flink1">Jakarta - Singapura</span>	
								<span class="flink2">from : IDR 500,000</span>	
							</a>	
						</div>
					</div><!-- end widget_fare -->
					
					<div class="widget_promo">
						<div class="promoImg">
						<div class="bgabsolute"></div>	
							<img src="images/content/widget_promo1.jpg" alt="promo"/>						
						</div>
						<div class="promo_descrip">
							<div class="promo_content">
								<div class="short_desc">
									<h3>Exotic Raja Ampat Promo Fare</h3>
									<p><span style="color:#777777;">Explore the exotic Raja Ampat with our special fare Summer Package</span></p>
									<p><i>*save up <span style="color:#ff0000;">50 %</span> for regullar class</i></p>
								</div>
								<div class="BookFlight"><a href="#">Book Flight</a></div>
							</div>
						</div>
					</div><!-- end widget_promo -->
					
					<div class="widget_promo">
						<div class="promoImg">
						<div class="bgabsolute"></div>	
							<img src="images/content/widget_promo2.jpg" alt="promo"/>						
						</div>
						<div class="promo_descrip">
							<div class="promo_content">
								<div class="short_desc">
									<h3>Special Fare to Bali, Daily Flight</h3>
									<p><span style="color:#777777;">Flight Daily to Bali, and get special fare every monday. *term & condition apply</span></p>
									<p><i>*save up <span style="color:#ff0000;">30 %</span> on moday</i></p>									
								</div>
								<div class="BookFlight"><a href="#">Book Flight</a></div>
							</div>
						</div>
					</div><!-- end widget_promo -->
					
					<div class="widget_promo">
						<div class="promoImg">
						<div class="bgabsolute"></div>	
							<img src="images/content/widget_promo3.jpg" alt="promo"/>						
						</div>
						<div class="promo_descrip">
							<div class="promo_content">
								<div class="short_desc">
									<h3>Fly to Sulawesi from 700,000 IDR</h3>
									<p><span style="color:#777777;">Explore the beautiful Bunaken Island, starting from 700,000 IDR</span></p>
									<p><i>*save up <span style="color:#ff0000;">50 %</span> for regullar class</i>								
								</div>
								<div class="BookFlight"><a href="#">Book Flight</a></div>
							</div>
						</div>
					</div><!-- end widget_promo -->	
					
				
				<div class="clear"></div>	
				</div><!-- end home_widget -->				
				
				<div id="home_widget_bottom" class="widget_news_link">
					
					<div id="widget_latesNews">
						<h3>Latest News</h3>
						<div class="short_news">
							<span class="date">22 Jun 2011</span>
							<div class="descShort">
								<p>Express Air Indonesia withdraws Jayapura - Penang route </p>								
							</div>
							<a class="readmore" href="#">Read More</a>
						</div><!-- end short news -->
						<div class="short_news">
							<span class="date">22 Jun 2011</span>
							<div class="descShort">
								<p>Express Air Indonesia withdraws Jayapura - Penang route </p>								
							</div>
							<a class="readmore" href="#">Read More</a>
						</div><!-- end short news -->						
						<a class="readmore" href="#">More News</a>
					</div><!-- end widget_latesNews -->
					
					<div id="widget_touristGuide">
						<h3>Tourist Guide</h3>
						<div class="picture">
							<img src="images/content/widget_tourist.jpg" alt="widget picture"/>
						</div>
						<h4>Diving in Bunaken</h4>
						<div class="descrip">
							<p>Feel more experience when you dive in Bunaken Island</p>							
						</div>												
						<a class="readmore" href="#">More Info</a>
					</div><!-- end widget_touristGuide -->
					
					<div id="widget_place">
						<h3>Place of Interest</h3>
						<div class="picture">
							<img src="images/content/widget_place.jpg" alt="widget picture"/>
						</div>
						<h4>Beautiful Komodo Island</h4>
						<div class="descrip">
							<p>Explore the Komodo Island, with beautiful view..</p>							
						</div>												
						<a class="readmore" href="#">More Info</a>
					</div><!-- end widget_place -->
					
					<div id="widget_quickLink">
						<h3>Share & Quick Links</h3>
						<ul class="">
							<li><a class="link_fb" href="#">Join us on Facebook</a></li>
							<li><a class="link_twitter" href="#">Follow us on Twitter</a></li>
							<li><a class="link_ym" href="#">Join us on Yahoo Messenger</a></li>
							<li><a class="link_booking" href="#">Online Booking</a></li>
							<li><a class="link_insurance" href="#">Insurance</a></li>
							<li class="last"><a class="link_term" href="#">Terms & Conditions for Carriage</a></li>
						</ul>
					</div><!-- end widget_quickLink -->
				
				<div class="clear"></div>
				</div><!-- end home_widget -->
				
			</div>
			<!-- end content -->
			
			
		
	
<?php include("inc_footer.php");?>