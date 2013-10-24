 <div id="tabs_new">
	<div id="booking_engine_new" >
		<h2>Book Flight</h2>
		<form action="" method="post" class="form_booking_new">
		<fieldset>
			<div class="wrap_radio1">
				<div class="radio1"><input id="rblDirection0" name="rblDirection" value="0" onclick="UpdateDirection(false)" type="radio"/><span>Return</span></div>
				<div class="radio1"><input id="rblDirection1" name="rblDirection" value="1" onclick="UpdateDirection(false)" checked="checked" type="radio"/><span>One way</span></div>
			</div>			
		</fieldset>
		<fieldset>
			<div class="currency">
				<label>Currency</label>
				<select name="ctl00$ContentPlaceHolder1$Curr" id="ctl00_ContentPlaceHolder1_Curr">
					<option value="DKK">DKK</option>
					<option value="EUR">EUR</option>
					<option value="GBP">GBP</option>
					<option selected="selected" value="IDR">IDR</option>
					<option value="ISK">ISK</option>
				</select>
			</div>		
		</fieldset>		
		<fieldset>
			<div class="wrap_selectL">
				<label>From</label>											
				<select name="ctl00$ContentPlaceHolder1$Origin" id="ctl00_ContentPlaceHolder1_Origin" class="selectL">
					<option value="">Select airport</option>
					<option value="Adisutjipto JOG">Adisutjipto JOG</option>
					<option value="Babullah TTE">Babullah TTE</option>
					<option value="Bubung / Aminuddin Amir LUW">Bubung / Aminuddin Amir LUW</option>
					<option value="Fak Fak FKQ">Fak Fak FKQ</option>
					<option value="Galela GLX">Galela GLX</option>
					<option selected="selected" value="Jakarta CGK">Jakarta CGK</option>
					<option value="Jayapura DJJ">Jayapura DJJ</option>
					<option value="Juanda SUB">Juanda SUB</option>
					<option value="Kaimana KNG">Kaimana KNG</option>
					<option value="Labuha LAH">Labuha LAH</option>
					<option value="Makassar UPG">Makassar UPG</option>
					<option value="Manado MDC">Manado MDC</option>
					<option value="Manokwari MKW">Manokwari MKW</option>
					<option value="Melangguane MNA">Melangguane MNA</option>
					<option value="Mutiara PLW">Mutiara PLW</option>
					<option value="Nabire NBX">Nabire NBX</option>
					<option value="Pattimura AMQ">Pattimura AMQ</option>
					<option value="Saumlaki SXK">Saumlaki SXK</option>
					<option value="Selayar SLY">Selayar SLY</option>
					<option value="Sorong SOQ">Sorong SOQ</option>
				</select>
			</div>
			<div class="wrap_selectR">
				<label>Depart</label>											
				<input type="text" id="OutboundDate" value="11/14/2012" class="selectR" name="OutboundDate" />
			</div>
		</fieldset>
		
		<fieldset>
			<div class="wrap_selectL">
				<label>To</label>											
				<select name="ctl00$ContentPlaceHolder1$Destination" id="ctl00_ContentPlaceHolder1_Destination" class="selectL">
					<option selected="selected" value="">Select airport</option>
					<option value="Adisutjipto JOG">Adisutjipto JOG</option>
					<option value="Babullah TTE">Babullah TTE</option>
					<option value="Bubung / Aminuddin Amir LUW">Bubung / Aminuddin Amir LUW</option>
					<option value="Fak Fak FKQ">Fak Fak FKQ</option>
					<option value="Galela GLX">Galela GLX</option>
					<option value="Jakarta CGK">Jakarta CGK</option>
					<option value="Jayapura DJJ">Jayapura DJJ</option>
					<option value="Juanda SUB">Juanda SUB</option>
					<option value="Kaimana KNG">Kaimana KNG</option>
					<option value="Labuha LAH">Labuha LAH</option>
					<option value="Makassar UPG">Makassar UPG</option>
					<option value="Manado MDC">Manado MDC</option>
					<option value="Manokwari MKW">Manokwari MKW</option>
					<option value="Melangguane MNA">Melangguane MNA</option>
					<option value="Mutiara PLW">Mutiara PLW</option>
					<option value="Nabire NBX">Nabire NBX</option>
					<option value="Pattimura AMQ">Pattimura AMQ</option>
					<option value="Saumlaki SXK">Saumlaki SXK</option>
					<option value="Selayar SLY">Selayar SLY</option>
					<option value="Sorong SOQ">Sorong SOQ</option>
					<option value="">Select airport</option>
					<option value="Adisutjipto JOG">Adisutjipto JOG</option>
					<option value="Babullah TTE">Babullah TTE</option>
					<option value="Bubung / Aminuddin Amir LUW">Bubung / Aminuddin Amir LUW</option>
					<option value="Fak Fak FKQ">Fak Fak FKQ</option>
					<option value="Galela GLX">Galela GLX</option>
					<option value="Jakarta CGK">Jakarta CGK</option>
					<option value="Jayapura DJJ">Jayapura DJJ</option>
					<option value="Juanda SUB">Juanda SUB</option>
					<option value="Kaimana KNG">Kaimana KNG</option>
					<option value="Labuha LAH">Labuha LAH</option>
					<option value="Makassar UPG">Makassar UPG</option>
					<option value="Manado MDC">Manado MDC</option>
					<option value="Manokwari MKW">Manokwari MKW</option>
					<option value="Melangguane MNA">Melangguane MNA</option>
					<option value="Mutiara PLW">Mutiara PLW</option>
					<option value="Nabire NBX">Nabire NBX</option>
					<option value="Pattimura AMQ">Pattimura AMQ</option>
					<option value="Saumlaki SXK">Saumlaki SXK</option>
					<option value="Selayar SLY">Selayar SLY</option>
					<option value="Sorong SOQ">Sorong SOQ</option>
				</select>
			</div>
			<div class="wrap_selectR" id="cHomeboundDate">
				<label>Return</label>											
				<input type="text" id="HomeboundDate" value="11/23/2012" name="HomeboundDate" class="selectR" />
			</div>
		</fieldset>
		
		<fieldset>
			<div class="wrap_age1">
				<label>Adults</label>											
				<select name="ctl00$ContentPlaceHolder1$Adults" id="ctl00_ContentPlaceHolder1_Adults" class="select_age">
					<option selected="selected" value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
				</select>
			</div>	
			<div class="wrap_age2">
				<label>Children</label>											
				<select name="ctl00$ContentPlaceHolder1$Children" id="ctl00_ContentPlaceHolder1_Children" class="select_age">
					<option selected="selected" value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div>	
			<div class="wrap_age3">
				<label>Infants</label>											
				<select name="ctl00$ContentPlaceHolder1$Infants" id="ctl00_ContentPlaceHolder1_Infants" class="select_age" onchange="InfWarning()">
					<option selected="selected" value="0">0</option> 	
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div>	
			<a class="i_what" href="#"><img src="images/material/icon_what.png" alt=""/></a>
		</fieldset>
		
		<p class="terms span-4 end" style="text-align:right; margin:6px 0;"><a class="term_condition_new" target="_blank" href="http://expressair.co.id/">Our terms &amp; conditions</a></p>

		<fieldset>
			<div class="wrap_button1">
				<input type="submit" name="ctl00$ContentPlaceHolder1$search" value="Find flights" id="ctl00_ContentPlaceHolder1_search" class="button1" />
			</div>
		</fieldset>
		
		
	</form>
	</div>
</div>







