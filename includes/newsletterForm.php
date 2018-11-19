<!-- Newsletter Form section -->

<div class="grid-container">
	<div class="grid-x text-center">
		<div class="small-12 medium-5 cell">

			<img src="images/pageLayout/newsletter-example.png" alt="E-Newsletter example"> <br>
			<h4>----FIRMNAME----</h4>
			<p>Your Monthly Estate Planning Resource</p>
		</div>
		<div class="small-12 medium-7 cell">
			<h3 style="margin: 0 0 2rem 0;">Sign Up For Our Free<br>
        Monthly E-Newsletter</h3>

			<!--Begin MailChimp Signup Form-->
			<!--Replace ###### with appropriate action-->
			<!--Replace -Group#- with appropriate code-->
			<!--Replace -nameID- with appropriate code-->
			<div class="contactForm">
				<div id="div#mc_embed_signup">
					<form action="######" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div class="mc-field-group">
							<label for="mce-EMAIL">Email Address <span class="asterisk">*</span> </label>
							<div id="reqInfo">* required information</div>
							<input type="text" value="" name="EMAIL" placeholder="Email*" class="required email" id="mce-EMAIL">
						</div>
						<div class="mc-field-group input-group" id="hiddenNews"> <strong>Subscribe me to the following: </strong>
							<ul>
								<!--<li><input type="checkbox" value="1" name="group[-Group#-][1]" id="mce-group[-Group#-]--Group#--0"><label for="mce-group[-Group#-]--Group#--0">Blog</label></li>-->
								<li>
									<input type="checkbox" value="2" name="group[-Group#-][2]" id="mce-group[-Group#-]--Group#--1" checked>
									<label for="mce-group[-Group#-]--Group#--1">eNews</label>
								</li>
							</ul>
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>

						<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

						<div style="position: absolute; left: -5000px;" aria-hidden="true">
							<input type="text" name="-nameID-" tabindex="-1" value="">
						</div>



						<div class="clear">
							<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="width: 125px; margin: 3rem auto 4rem auto;">
						</div>

					</form>
				</div>
			</div>

			<!--End mc_embed_signup-->

			<!--Begin E2 Signup Form-->
			<!--Find and replace -E2SignupForm- with form action string after ? from URL-->
			<!--AutomaticTeamIDs value near top and User4 around Questions field may need adjusted to whatever the online form says-->

			<div class="contactForm">
				<form name="signupForm" id="signupForm" method="post" action="https://app.e2-dashboard.com/j.pl?-E2SignupForm-" onsubmit="return checkMandatory();">
					<div id="reqInfo">* required information</div>
					<ul id="teamSelection">
						<li class="formRow joinRow"><span id="confirmText"> </span> </li>
						<li><input type="hidden" name="AutomaticTeamIDs" value="1"/>
						</li>
						<li><input type="hidden" name="AutomaticTeamIDs" value="2"/>
						</li>
						<li><input type="hidden" name="AutomaticTeamIDs" value="3"/>
						</li>
					</ul>
					<ul id="teamFields">
						<li class="formRow emailRow" id="field_Email">
							<label class="fieldName" for="signup_Email">Email<span class="reqMarker">*</span></label>
							<input type="email" name="Email" maxlength="64" value="" id="signup_Email" class="inputTextField" placeholder="Email*"/>
							<div id="emailEntryAlert"></div>
						</li>
						<li class="formRow userFieldName" id="field_User4">
							<label class="fieldName" id="labelUser4" for="signup_User4">Subscribe Me To<span class="reqMarker">*</span></label>
							<div class="userCheckboxes">
								<div class="userCheckbox">
									<input type="checkbox" name="User4" value="Monthly eNewsletter" class="checkboxUser4"/> Monthly eNewsletter </div>
								<div class="userCheckbox">
									<input type="checkbox" name="User4" value="Weekly Blog Digest" class="checkboxUser4"/> Weekly Blog Digest </div>
							</div>
						</li>
					</ul>
					<input id="formSubmit" type="submit" name="formSubmit" class="button" style="margin: 1rem auto 1.2rem auto;" value="Subscribe"/>
					<input type="hidden" name="errorAction" value="back"/>
					<input type="hidden" name="Referrer" value=""/>
					<input type="hidden" name="qstring" value="-E2SignupForm-"/>
					<input type="hidden" name="formSubmitCheck" value="1"/>
				</form>
			</div>

			<!--End E2 signup-->

			<p style="text-align:center;">We NEVER share your personal information with any third parties.</p>

		</div>

	</div>

</div>

<!-- End Newsletter Form section -->