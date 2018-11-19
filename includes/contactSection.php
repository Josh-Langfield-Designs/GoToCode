      <!-- begin contactSection -->

<section class="contactSection" itemscope itemtype="http://schema.org/LegalService">
	<div class="grid-container">

		<div data-sr="enter over 1s no reset" class="grid-x grid-margin-x grid-margin-y align-center">

			<div class="small-12 cell text-center">

				<a href="/"><img itemprop="image" src="images/pageLayout/Last-First-banner.png" width="700" height="172" alt="----FIRMNAME---- Logo" title="----FIRMNAME----"></a>

			</div>

		</div>

		<div data-sr="enter over 1s no reset" class="grid-x grid-margin-x grid-margin-y align-center">

			<div class="small-12 medium-6 cell text-center">

				<i class="alt fal fa-map-marker-alt"></i>

				<h2>Location</h2>
				
				<meta itemprop="name" content="----FIRMNAME----"/>
				<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<p><span itemprop="streetAddress">----Street Address----</span>
						<br>
						<span itemprop="addressLocality">----City----</span>, <span itemprop="addressRegion">----State----</span> <span itemprop="postalCode">----Zip----</span> </p>

				</div>
				
				<p class="show-for-large">
					<?php require('includes/e-mailAddress.php'); ?>
				</p>

				<p itemprop="email" class="hide-for-large">
					<?php echo ('<a href="mailto:'); require('includes/e-mailAddress.php'); echo ('">'); require('includes/e-mailAddress.php'); ?> </a>
				</p>
		
				<p class="show-for-large">
					<span itemprop="telephone">
                            <strong><?php require('includes/phoneNumber.php'); ?></strong> 
                            </span>
				</p>

				<p class="hide-for-large">
					<a href="tel:1-<?php require('includes/phoneNumber.php'); ?>"><strong><?php require('includes/phoneNumber.php'); ?></strong></a>
				</p>

				<!--<h3>Fax: <span itemprop="faxNumber"><a href="tel:1-###-###-####">###-###-####</a></span></h3>-->

				<!-- use this if adding map link but make sure to search google map for buisness, not address to get the map-->
				<!--<a itemprop="hasMap" href="https://goo.gl/maps/######" target="_blank" title="Opens New Window">View Map</a>-->
				<!-- Or if you want the view map link to be hidden-->
				<!--<meta itemprop="hasMap" content="https://goo.gl/maps/######" />-->

				<div class="grid-x grid-margin-x grid-margin-y align-center">

					<div class="small-12 large-7 cell text-center">

						<?php require ("includes/followUs2.php"); ?>

					</div>

				</div>

			</div>

			<div class="small-12 medium-6 cell">

				<div class="grid-x grid-margin-x grid-margin-y align-center">

					<div class="small-12 medium-9 cell">
						<h2>Contact Us</h2>
						<?php require ("includes/contactForm.php"); ?>
					</div>

				</div>

			</div>
		</div>
	</div>
</section>

      <!-- end contactSection -->