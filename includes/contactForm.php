<!-- begin contactForm --> 

<!-- Begin CognitoForms-->

<!--<div class="contactForm">
	<div class="grid-x grid-margin-x grid-margin-y">
		<div class="small-12 cell text-center">-->
			<!-- www.cognitoforms.com script begins here -->

			<!-- www.cognitoforms.com script ends here -->
		<!--</div>
	</div>
</div>-->
<!--End CognitoForms--> 

<!--Begin E2ShortContact Form--> 
<!--Find and replace -ShortContactAction- with form action string after ? from URL--> 
<!--User4 around Questions field may need adjusted to whatever the online form says-->


<div class="contactForm Small">

	<form name="signupForm" id="signupForm" method="post" action="http://app.e2-dashboard.com/j.pl?-ShortContactAction-" onsubmit="return checkMandatory();">

		<div class="grid-x grid-margin-x">

			<ul id="teamSelection">
				<li class="formRow joinRow"><span id="confirmText"> </span> </li>
				<li>
					<input type="hidden" name="AutomaticTeamIDs" value="1"/>
				</li>
			</ul>

			<div id="reqInfo" class="formRow small-12 cell">* required information</div>

			<!--<div id="teamFields">-->

			<div class="formRow small-6 cell" id="field_Firstname">
				<label class="fieldName" id="labelFirstname" for="signup_Firstname">First Name<span class="reqMarker">*</span></label>
				<input type="text" name="Firstname" placeholder="First Name*" value="" maxlength="64" id="signup_Firstname" class="inputTextField"/>
			</div>
			<div class="formRow small-6 cell" id="field_Lastname">
				<label class="fieldName" id="labelLastname" for="signup_Lastname">Last Name<span class="reqMarker">*</span></label>
				<input type="text" name="Lastname" placeholder="Last Name*" value="" maxlength="64" id="signup_Lastname" class="inputTextField"/>
			</div>
			<div class="formRow small-6 cell" id="field_Phone">
				<label class="fieldName" id="labelPhone" for="signup_Phone">Phone<span class="reqMarker">*</span></label>
				<input type="tel" name="Phone" placeholder="Phone*" value="" maxlength="64" id="signup_Phone" class="inputTextField"/>
			</div>
			<div class="formRow small-6 cell emailRow" id="field_Email">
				<label class="fieldName" for="signup_Email">Email<span class="reqMarker">*</span></label>
				<input type="email" name="Email" placeholder="Email*" maxlength="64" value="" id="signup_Email" class="inputTextField"/>
				<div id="emailEntryAlert"> </div>
			</div>
			<div class="formRow userFieldName small-12 cell" id="field_User3">
				<label class="fieldName" id="labelUser3" for="signup_User3">Questions/Comments</label>
				<textarea placeholder="Message" rows="3" name="User3" id="signup_User3" class="inputTextField"></textarea>
			</div>
			<div class="small-12 cell text-right">
				<input id="formSubmit" type="submit" name="formSubmit" class="button" value="Submit"/>
			</div>
			<!--</div>-->

			<input type="hidden" name="errorAction" value="back"/>
			<input type="hidden" name="Referrer" value=""/>
			<input type="hidden" name="qstring" value="-ShortContactAction-"/>
			<input type="hidden" name="formSubmitCheck" value="1"/>

		</div>

	</form>

</div>

<!--End E2ShortContact Form--> 

<!-- end contactForm -->