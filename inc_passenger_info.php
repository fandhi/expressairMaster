<div class="passenger-info">
        <div class="" style="padding-bottom:10px">
            <h2>Contact information</h2>
            <h3>(fields marked with <span class="star">*</span> must be filled in)</h3>
        </div>
    
        <fieldset class="info info_left">
            <label for="first-name">First name: </label>
            <input type="hidden" name="ctl00$ContentPlaceHolder1$hfIsDirty" id="ctl00_ContentPlaceHolder1_hfIsDirty" />
            <input name="ctl00$ContentPlaceHolder1$FirstName" type="text" value="Tommy" maxlength="30" id="ctl00_ContentPlaceHolder1_FirstName" onchange="MarkBookingAsDirty();" />
            <br />

            <label for="last-name">Last name: </label>
            <input name="ctl00$ContentPlaceHolder1$LastName" type="text" value="Wiberg" maxlength="40" id="ctl00_ContentPlaceHolder1_LastName" onchange="MarkBookingAsDirty();" />
            <span id="ctl00_ContentPlaceHolder1_rfvLastName" style="display:none;"></span>
            <input type="hidden" name="ctl00$ContentPlaceHolder1$ValidatorCalloutExtender2_ClientState" id="ctl00_ContentPlaceHolder1_ValidatorCalloutExtender2_ClientState" />
            <br />

            <label for="email">E-mail: </label>
            <input name="ctl00$ContentPlaceHolder1$Email" type="text" value="tommyw@me.com" maxlength="80" id="ctl00_ContentPlaceHolder1_Email" onchange="MarkBookingAsDirty();" />
            <span id="ctl00_ContentPlaceHolder1_revEmail" style="display:none;"></span>
            <span id="ctl00_ContentPlaceHolder1_rfvEmail" style="display:none;"></span> 
            <input type="hidden" name="ctl00$ContentPlaceHolder1$vceEmail_ClientState" id="ctl00_ContentPlaceHolder1_vceEmail_ClientState" />
            <input type="hidden" name="ctl00$ContentPlaceHolder1$vceEmailv_ClientState" id="ctl00_ContentPlaceHolder1_vceEmailv_ClientState" />
            <br />
            
            <div id="ctl00_ContentPlaceHolder1_divCompany">
                <label for="CompanyList">Company: </label>
                
                <input name="ctl00$ContentPlaceHolder1$Company" type="text" value="ZoFlyNow Corp" maxlength="40" id="ctl00_ContentPlaceHolder1_Company" onchange="MarkBookingAsDirty();" />
                <br />
            </div>

            <label for="address">Address: </label>
            <input name="ctl00$ContentPlaceHolder1$Address1" type="text" value="1097 HERMITAGE WAY S" maxlength="80" id="ctl00_ContentPlaceHolder1_Address1" onchange="MarkBookingAsDirty();" />
            <br />

            <div class="checkboxes">
                <input id="ctl00_ContentPlaceHolder1_SMS" type="checkbox" name="ctl00$ContentPlaceHolder1$SMS" onclick="MarkBookingAsDirty();" /> <span style="cursor: pointer" onclick=" theForm.ctl00_ContentPlaceHolder1_SMS.checked = (!theForm.ctl00_ContentPlaceHolder1_SMS.checked); ">Confirm by SMS&nbsp;Rp. 1,000 </span><br />
                <input id="ctl00_ContentPlaceHolder1_Terms" type="checkbox" name="ctl00$ContentPlaceHolder1$Terms" /><span style="cursor: pointer" onclick=" theForm.ctl00_ContentPlaceHolder1_Terms.checked = (!theForm.ctl00_ContentPlaceHolder1_Terms.checked); "> I have read and understood the Conditions of Travel</span>&nbsp;&nbsp;<br />
                <input id="ctl00_ContentPlaceHolder1_AllowInfo" type="checkbox" name="ctl00$ContentPlaceHolder1$AllowInfo" onclick="MarkBookingAsDirty();" /><span style="cursor: pointer" onclick=" theForm.ctl00_ContentPlaceHolder1_AllowInfo.checked = (!theForm.ctl00_ContentPlaceHolder1_AllowInfo.checked); "> Yes please, keep me up to date with news and offers!</span><br />
                <input type="hidden" name="ctl00$ContentPlaceHolder1$hfProject" id="ctl00_ContentPlaceHolder1_hfProject" />
                <input type="hidden" name="ctl00$ContentPlaceHolder1$hfSMS" id="ctl00_ContentPlaceHolder1_hfSMS" />
                <input type="hidden" name="ctl00$ContentPlaceHolder1$hfConcealFares" id="ctl00_ContentPlaceHolder1_hfConcealFares" />
                <input type="hidden" name="ctl00$ContentPlaceHolder1$hfDisableEndUserChanges" id="ctl00_ContentPlaceHolder1_hfDisableEndUserChanges" />
                <input type="hidden" name="ctl00$ContentPlaceHolder1$hfAgentNumber" id="ctl00_ContentPlaceHolder1_hfAgentNumber" value="0" />
            </div>
        </fieldset>
		
		<fieldset class="info info_right">
			<label for="postcode">Zipcode, city: </label>
            <input name="ctl00$ContentPlaceHolder1$Address2" type="text" value="OREGON 97302" maxlength="80" id="ctl00_ContentPlaceHolder1_Address2" onchange="MarkBookingAsDirty();" />
            <br />
    
            <label for="country">Country: </label>
            <select name="ctl00$ContentPlaceHolder1$ddlCountry" id="ctl00_ContentPlaceHolder1_ddlCountry" class="country" onchange="MarkBookingAsDirty(); CountryChange();">
				<option value="Ísland">&#205;sland</option>
				<option value="Danmark">Danmark</option>
				<option value="Finland">Finland</option>
				<option value="Norge">Norge</option>
				<option value="Sverige">Sverige</option>
				<option value="Afghanistan">Afghanistan</option>
				<option value="Åland">&#197;land</option>
				<option value="Åland">&#197;land</option>
				<option value="Albania">Albania</option>
				<option value="Algeria">Algeria</option>
				<option value="American Samoa">American Samoa</option>
				<option value="Andorra">Andorra</option>
				<option value="Angola">Angola</option>
				<option value="Anguilla">Anguilla</option>
				<option value="Antarctica">Antarctica</option>
				<option value="Antigua and Barbuda">Antigua and Barbuda</option>
				<option value="Argentina">Argentina</option>
				<option value="Armenia">Armenia</option>
				<option value="Aruba">Aruba</option>
				<option value="Australia">Australia</option>
				<option value="Austria">Austria</option>
				<option value="Azerbaijan">Azerbaijan</option>
				<option value="Bahamas">Bahamas</option>
				<option value="Bahrain">Bahrain</option>
				<option value="Bangladesh">Bangladesh</option>
				<option value="Barbados">Barbados</option>
				<option value="Belarus">Belarus</option>
				<option value="Belgium">Belgium</option>
				<option value="Belize">Belize</option>
				<option value="Benin">Benin</option>
				<option value="Bermuda">Bermuda</option>
				<option value="Bhutan">Bhutan</option>
				<option value="Bolivia">Bolivia</option>
				<option value="Bonaire">Bonaire</option>
				<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
				<option value="Botswana">Botswana</option>
				<option value="Bouvet Island">Bouvet Island</option>
				<option value="Brazil">Brazil</option>
				<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
				<option value="British Virgin Islands">British Virgin Islands</option>
				<option value="Brunei Darussalam">Brunei Darussalam</option>
				<option value="Bulgaria">Bulgaria</option>
				<option value="Burkina Faso">Burkina Faso</option>
				<option value="Burundi">Burundi</option>
				<option value="Cambodia">Cambodia</option>
				<option value="Cameroon">Cameroon</option>
				<option value="Canada">Canada</option>
				<option value="Cape Verde">Cape Verde</option>
				<option value="Cayman Islands">Cayman Islands</option>
				<option value="Central African Republic">Central African Republic</option>
				<option value="Chad">Chad</option>
				<option value="Chile">Chile</option>
				<option value="China">China</option>
				<option value="Christmas Island">Christmas Island</option>
				<option value="Cocos">Cocos</option>
				<option value="Colombia">Colombia</option>
				<option value="Comoros">Comoros</option>
				<option value="Congo">Congo</option>
				<option value="Cook Islands">Cook Islands</option>
				<option value="Costa Rica">Costa Rica</option>
				<option value="Croatia">Croatia</option>
				<option value="Cuba">Cuba</option>
				<option value="Curaçao">Cura&#231;ao</option>
				<option value="Cyprus">Cyprus</option>
				<option value="Czech Republic">Czech Republic</option>
				<option value="Danmark">Danmark</option>
				<option value="Djibouti">Djibouti</option>
				<option value="Dominica">Dominica</option>
				<option value="Dominican Republic">Dominican Republic</option>
				<option value="East Timor">East Timor</option>
				<option value="Ecuador">Ecuador</option>
				<option value="Egypt">Egypt</option>
				<option value="El Salvador">El Salvador</option>
				<option value="Equatorial Guinea">Equatorial Guinea</option>
				<option value="Eritrea">Eritrea</option>
				<option value="Estonia">Estonia</option>
				<option value="Ethiopia">Ethiopia</option>
				<option value="Falkland Islands">Falkland Islands</option>
				<option value="Faroe Islands">Faroe Islands</option>
				<option value="Fiji">Fiji</option>
				<option value="Finland">Finland</option>
				<option value="France">France</option>
				<option value="French Guiana">French Guiana</option>
				<option value="French Polynesia">French Polynesia</option>
				<option value="French Southern Territories">French Southern Territories</option>
				<option value="Gabon">Gabon</option>
				<option value="Gambia">Gambia</option>
				<option value="Georgia">Georgia</option>
				<option value="Germany">Germany</option>
				<option value="Ghana">Ghana</option>
				<option value="Gibraltar">Gibraltar</option>
				<option value="Greece">Greece</option>
				<option value="Greenland">Greenland</option>
				<option value="Grenada">Grenada</option>
				<option value="Guadeloupe">Guadeloupe</option>
				<option value="Guam">Guam</option>
				<option value="Guatemala">Guatemala</option>
				<option value="Guinea">Guinea</option>
				<option value="Guinea-Bissau">Guinea-Bissau</option>
				<option value="Guyana">Guyana</option>
				<option value="Haiti">Haiti</option>
				<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
				<option value="Honduras">Honduras</option>
				<option value="Hong Kong">Hong Kong</option>
				<option value="Hungary">Hungary</option>
				<option value="Ibiza">Ibiza</option>
				<option value="Iceland">Iceland</option>
				<option value="India">India</option>
				<option value="Indonesia">Indonesia</option>
				<option value="Iran">Iran</option>
				<option value="Iraq">Iraq</option>
				<option value="Ireland">Ireland</option>
				<option value="Israel">Israel</option>
				<option value="Italy">Italy</option>
				<option value="Ivory Coast">Ivory Coast</option>
				<option value="Jamaica">Jamaica</option>
				<option value="Japan">Japan</option>
				<option value="Jordan">Jordan</option>
				<option value="Kazakhstan">Kazakhstan</option>
				<option value="Kenya">Kenya</option>
				<option value="Kiribati">Kiribati</option>
				<option value="Kuwait">Kuwait</option>
				<option value="Kyrgyzstan">Kyrgyzstan</option>
				<option value="Laos">Laos</option>
				<option value="Latvia">Latvia</option>
				<option value="Lebanon">Lebanon</option>
				<option value="Lesotho">Lesotho</option>
				<option value="Liberia">Liberia</option>
				<option value="Libya">Libya</option>
				<option value="Liechtenstein">Liechtenstein</option>
				<option value="Lithuania">Lithuania</option>
				<option value="Luxembourg">Luxembourg</option>
				<option value="Macau">Macau</option>
				<option value="Macedonia">Macedonia</option>
				<option value="Madagascar">Madagascar</option>
				<option value="Malawi">Malawi</option>
				<option value="Malaysia">Malaysia</option>
				<option value="Maldives">Maldives</option>
				<option value="Mali">Mali</option>
				<option value="Malta">Malta</option>
				<option value="Marshall Islands">Marshall Islands</option>
				<option value="Martinique">Martinique</option>
				<option value="Mauritania">Mauritania</option>
				<option value="Mauritius">Mauritius</option>
				<option value="Mayotte">Mayotte</option>
				<option value="Mexico">Mexico</option>
				<option value="Micronesia">Micronesia</option>
				<option value="Moldova">Moldova</option>
				<option value="Monaco">Monaco</option>
				<option value="Mongolia">Mongolia</option>
				<option value="Montserrat">Montserrat</option>
				<option value="Morocco">Morocco</option>
				<option value="Mozambique">Mozambique</option>
				<option value="Myanmar">Myanmar</option>
				<option value="Namibia">Namibia</option>
				<option value="Nauru">Nauru</option>
				<option value="Nepal">Nepal</option>
				<option value="Netherlands">Netherlands</option>
				<option value="Netherlands Antilles">Netherlands Antilles</option>
				<option value="New Caledonia">New Caledonia</option>
				<option value="New Zealand">New Zealand</option>
				<option value="Nicaragua">Nicaragua</option>
				<option value="Niger">Niger</option>
				<option value="Nigeria">Nigeria</option>
				<option value="Niue">Niue</option>
				<option value="Norfolk Island">Norfolk Island</option>
				<option value="Norge">Norge</option>
				<option value="North Korea">North Korea</option>
				<option value="Northern Mariana Islands">Northern Mariana Islands</option>
				<option value="Oman">Oman</option>
				<option value="Pakistan">Pakistan</option>
				<option value="Palau">Palau</option>
				<option value="Panama">Panama</option>
				<option value="Papua New Guinea">Papua New Guinea</option>
				<option value="Paraguay">Paraguay</option>
				<option value="Peru">Peru</option>
				<option value="Philippines">Philippines</option>
				<option value="Pitcairn">Pitcairn</option>
				<option value="Poland">Poland</option>
				<option value="Portugal">Portugal</option>
				<option value="Puerto Rico">Puerto Rico</option>
				<option value="Qatar">Qatar</option>
				<option value="Reunion">Reunion</option>
				<option value="Romania">Romania</option>
				<option value="Russian Federation">Russian Federation</option>
				<option value="Rwanda">Rwanda</option>
				<option value="S. Georgia and S. Sandwich Isl">S. Georgia and S. Sandwich Isl</option>
				<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
				<option value="Saint Lucia">Saint Lucia</option>
				<option value="Saint Vincent and The Grenadin">Saint Vincent and The Grenadin</option>
				<option value="Samoa">Samoa</option>
				<option value="San Marino">San Marino</option>
				<option value="Sao Tome and Principe">Sao Tome and Principe</option>
				<option value="Saudi Arabia">Saudi Arabia</option>
				<option value="Senegal">Senegal</option>
				<option value="Seychelles">Seychelles</option>
				<option value="Sierra Leone">Sierra Leone</option>
				<option value="Singapore">Singapore</option>
				<option value="Slovakia">Slovakia</option>
				<option value="Slovenia">Slovenia</option>
				<option value="Solomon Islands">Solomon Islands</option>
				<option value="Somalia">Somalia</option>
				<option value="South Africa">South Africa</option>
				<option value="South Korea">South Korea</option>
				<option value="Soviet Union">Soviet Union</option>
				<option value="Spain">Spain</option>
				<option value="Sri Lanka">Sri Lanka</option>
				<option value="St. Helena">St. Helena</option>
				<option value="St. Maarten">St. Maarten</option>
				<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
				<option value="Sudan">Sudan</option>
				<option value="Suriname">Suriname</option>
				<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
				<option value="Sverige">Sverige</option>
				<option value="Swaziland">Swaziland</option>
				<option value="Switzerland">Switzerland</option>
				<option value="Syria">Syria</option>
				<option value="Taiwan">Taiwan</option>
				<option value="Tajikistan">Tajikistan</option>
				<option value="Tanzania">Tanzania</option>
				<option value="Thailand">Thailand</option>
				<option value="Togo">Togo</option>
				<option value="Tokelau">Tokelau</option>
				<option value="Tonga">Tonga</option>
				<option value="Trinidad and Tobago">Trinidad and Tobago</option>
				<option value="Tunisia">Tunisia</option>
				<option value="Turkey">Turkey</option>
				<option value="Turkmenistan">Turkmenistan</option>
				<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
				<option value="Tuvalu">Tuvalu</option>
				<option value="Uganda">Uganda</option>
				<option value="Ukraine">Ukraine</option>
				<option value="United Arab Emirates">United Arab Emirates</option>
				<option value="United Kingdom">United Kingdom</option>
				<option selected="selected" value="United States">United States</option>
				<option value="Uruguay">Uruguay</option>
				<option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
				<option value="US Virgin Islands">US Virgin Islands</option>
				<option value="Uzbekistan">Uzbekistan</option>
				<option value="Vanuatu">Vanuatu</option>
				<option value="Venezuela">Venezuela</option>
				<option value="Viet Nam">Viet Nam</option>
				<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
				<option value="Western Sahara">Western Sahara</option>
				<option value="Yemen">Yemen</option>
				<option value="Yugoslavia">Yugoslavia</option>
				<option value="Zaire">Zaire</option>
				<option value="Zambia">Zambia</option>
				<option value="Zimbabwe">Zimbabwe</option>
				<option value="Other">Other</option>

			</select>
            <span id="ctl00_ContentPlaceHolder1_rfvCountry" style="display:none;"></span>
            <input type="hidden" name="ctl00$ContentPlaceHolder1$vceCountry_ClientState" id="ctl00_ContentPlaceHolder1_vceCountry_ClientState" />
            <br />
    
            <label for="Phone">Mobile phone: </label>
            <input name="ctl00$ContentPlaceHolder1$CountryCode" type="text" value="00146706160545" maxlength="6" id="ctl00_ContentPlaceHolder1_CountryCode" onchange="MarkBookingAsDirty();" style="width:346px;width: 50px" /> 
            
            <input name="ctl00$ContentPlaceHolder1$Phone" type="text" value="00146706160545" maxlength="30" id="ctl00_ContentPlaceHolder1_Phone" onchange="MarkBookingAsDirty();" /> 
            
            <span id="ctl00_ContentPlaceHolder1_rfvPhone" style="display:none;"></span>
            <input type="hidden" name="ctl00$ContentPlaceHolder1$vcePhone_ClientState" id="ctl00_ContentPlaceHolder1_vcePhone_ClientState" />
            <br />

            <label for="Phone2">Alternate phone: </label>
            <input name="ctl00$ContentPlaceHolder1$CountryCode2" type="text" value="0066" maxlength="6" id="ctl00_ContentPlaceHolder1_CountryCode2" onchange="MarkBookingAsDirty();" style="width: 50px" /> 
            
            <input name="ctl00$ContentPlaceHolder1$Phone2" type="text" value="0066" maxlength="30" id="ctl00_ContentPlaceHolder1_Phone2" onchange="MarkBookingAsDirty();" />
            
            <br />
			
		</fieldset>

         
		
        <div class="next-step">
            <div style="float:right">
                <a id="ctl00_ContentPlaceHolder1_btnBack" href="booking_1.php">
					BACK TO DEPARTURES
					<!--<input type="submit" name="ctl00$ContentPlaceHolder1$btnBack" value="BACK TO DEPARTURES" id="ctl00_ContentPlaceHolder1_btnBack" class="button" value="Tilbaka á brottför" />-->
				</a>
				<a id="ctl00_ContentPlaceHolder1_btnContinue" href="booking_1_payment.php">
					PAYMENT
					<!--<input type="submit" name="ctl00$ContentPlaceHolder1$btnContinue" value="PAYMENT" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnContinue&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_ContentPlaceHolder1_btnContinue" class="button" value="Halda áfram á greiðslu" />-->
				</a>
            </div>
        </div>
    
</div> 