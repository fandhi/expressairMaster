<div class="passengers-wrapper">
    <h2>Passengers</h2>
	<fieldset class="passenger-1">
		<div class="passenger-name">
			<label for="first-name">Adult</label><br />
			<input name="ctl00$ContentPlaceHolder1$rpPAX$ctl01$tbFirstName" type="text" value="Tommy" maxlength="30" id="ctl00_ContentPlaceHolder1_rpPAX_ctl01_tbFirstName" class="first-name" onchange="MarkAsDirty(this); firstnameblur(this);" />
			<span id="ctl00_ContentPlaceHolder1_rpPAX_ctl01_rfvFirstName" style="display:none;"></span>
			<input type="hidden" name="ctl00$ContentPlaceHolder1$rpPAX$ctl01$TBWE1_ClientState" id="ctl00_ContentPlaceHolder1_rpPAX_ctl01_TBWE1_ClientState" />
			<input type="hidden" name="ctl00$ContentPlaceHolder1$rpPAX$ctl01$vceFirstName_ClientState" id="ctl00_ContentPlaceHolder1_rpPAX_ctl01_vceFirstName_ClientState" />
			<input name="ctl00$ContentPlaceHolder1$rpPAX$ctl01$tbLastName" type="text" value="Wiberg" maxlength="40" id="ctl00_ContentPlaceHolder1_rpPAX_ctl01_tbLastName" class="last-name" onchange="MarkAsDirty(this); lastnameblur(this);" />
			<span id="ctl00_ContentPlaceHolder1_rpPAX_ctl01_rfvLastName" style="display:none;"></span>
			<input type="hidden" name="ctl00$ContentPlaceHolder1$rpPAX$ctl01$vceLastName_ClientState" id="ctl00_ContentPlaceHolder1_rpPAX_ctl01_vceLastName_ClientState" />
			<input type="hidden" name="ctl00$ContentPlaceHolder1$rpPAX$ctl01$TBWE2_ClientState" id="ctl00_ContentPlaceHolder1_rpPAX_ctl01_TBWE2_ClientState" />
			<input type="hidden" name="ctl00$ContentPlaceHolder1$rpPAX$ctl01$hfIsDirty" id="ctl00_ContentPlaceHolder1_rpPAX_ctl01_hfIsDirty" />
		</div> 

		<span class="gender">
			<table id="ctl00_ContentPlaceHolder1_rpPAX_ctl01_ddlGender" onclick="MarkAsDirty(this);">
				<tr>
					<td>
						<input id="ctl00_ContentPlaceHolder1_rpPAX_ctl01_ddlGender_0" type="radio" name="ctl00$ContentPlaceHolder1$rpPAX$ctl01$ddlGender" value="F" />
						<label for="ctl00_ContentPlaceHolder1_rpPAX_ctl01_ddlGender_0">Female</label>
					</td>
					<td>
						<input id="ctl00_ContentPlaceHolder1_rpPAX_ctl01_ddlGender_1" type="radio" name="ctl00$ContentPlaceHolder1$rpPAX$ctl01$ddlGender" value="M" checked="checked" />
						<label for="ctl00_ContentPlaceHolder1_rpPAX_ctl01_ddlGender_1">Male</label>
					</td>
				</tr>
			</table>
			<span id="ctl00_ContentPlaceHolder1_rpPAX_ctl01_rfvGender" style="display:none;"></span>
			<input type="hidden" name="ctl00$ContentPlaceHolder1$rpPAX$ctl01$vceGender_ClientState" id="ctl00_ContentPlaceHolder1_rpPAX_ctl01_vceGender_ClientState" />
		</span>
	</fieldset> 
</div> 