<?php
	// set up page variables
	$path = "..";
	$pageid = "audition";
	$pagetitle = "Audition";
	
	// condition : if the form has been posted
	if (count($_POST) > 0) {
		
		// include handle_form script
		include($path."/_includes/php/handle_form.php");
		$formResult = checkFormForErrors($_POST);
	}
	
    // insert header
	include($path."/_includes/php/header.php");
?>

			
		<section class="main">
			
			<h1>Praxis Spring Institute Auditions</h1>
			
			<p>Auditions for all Praxis programs are open to all qualified musicians aged 18 and younger. Due to the small size of the orchestra, spots are extremely limited.</p>
			
			<p><strong>For the 2013 Spring Institute, Praxis will be holding auditions for students playing oboe, horn, trumpet, timpani, and all strings.</strong></p>
			
			<p>Auditions for the 2013 Spring Institute will be held on:</p>
			
			<p><strong>Sunday January 13, 2013.</strong></p>
			
			<p>Please contact us if you are interested in auditioning for next year's program. but are unable to attend auditions on December 16.</p>
			
			<p>Audition Requirements:</p>
			<ul id="requirements">
				<li>1. <em>Solo Performance:</em> Each applicant should prepare two contrasting pieces from the solo repertoire that properly demonstrate his or her musicality and technical proficiency. Memorization is strongly encouraged.</li>
				<li>2. <em>Chamber Performance:</em> Upon receipt of a completed application form and fee, Praxis will send each applicant an excerpt of a duo, trio or other chamber piece to be performed at the audition with members of the Praxis faculty. Particular attention will be paid to the applicant's listening and reactions in a musical context.</li>
				<li>3. <em>Interview:</em> Each audition will include a short interview in which each applicant will be asked to talk briefly about his or her musical experiences.</li>
			</ul>
			
			<p>Application Fee: $40</p>

			<p>Payment may be made by credit card via PayPal or check via mail. Please include student name on the front of the check. Mail checks to:</p> 
			<ul>
				<li>Praxis Youth Leadership Orchestra</li>
				<li>135 W 225 St, Apt. 5D</li>
				<li>Bronx, NY 10463</li>
			</ul>

			<p>Applications will not be processed until payment and a completed application <a href="./form">form</a> are received. Application fee is non-refundable. Applications are processed on a first come, first served basis. You will be notified as soon as possible of your audition time slot.</p>
			
			<!--<p>Application Deadline: <strong>October 29, 2010</strong></p>-->

			<p>If you have any questions, please contact info [at] praxisorchestra.org</p>
			
			<p><strong>Click <a href="./form">here</a> to fill out the online application.</strong></p>
			
			<p>If you did not pay the application fee when submitting your application and would like to do so now via Paypal, you may click on the link below. Please DO NOT click on this link unless you have already submitted a completed application <a href="./form">form</a>. You do not have to register with Paypal to complete your credit card transaction.</p>
				
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="MKH5WB2JG4MCC">
				<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			</form>			

		</section>

		
<?php
	// insert footer
	include($path."/_includes/php/footer.php");
?>