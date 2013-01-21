<?php
	/*
	 * This function will take the form post and error check it
	 * 
	 * Returns an array with a message and possibly any form error messages
	 */
	function checkFormForErrors($post) {
	
		// start a return array to return from this function
		$return = array(
			'message' => null,
			'errors' => array()
		);


		// Validate chosen spring institute date
		//if (empty($post['SIdate'])) {
		//	$return['errors']['SIdate'] = '<p class="error"><span>You didn\'t specify your preferred week</span></p>';
		//}	
	
		// Validate the name
		if (empty($post['name'])) {
			$return['errors']['name'] = '<p class="error"><span>You didn\'t enter a name</span></p>';
		}
	
		// Validate date of birth
		if (empty($post['dateofBirth'])) {
			$return['errors']['dateofBirth'] = '<p class="error"><span>You didn\'t enter a date of birth</span></p>';
		}
	
		// Validate the email
		if (empty($post['email'])) {
			$return['errors']['email'] = '<p class="error"><span>You didn\'t enter an email address</span></p>';
		}
	
		// Validate the address
		// stripslashes() removes \ from apostrophied strings. Eg posts dave's rather than dave\'s
		if (empty($post['address'])) {
			$return['errors']['address'] = '<p class="error"><span>You didn\'t enter a postal address</span></p>';
		}
	
		// Validate the phone number
		if (empty($post['phone'])) {
			$return['errors']['phone'] = '<p class="error"><span>You didn\'t enter a phone number</span></p>';
		}
	
		// Validate the address
		if (empty($post['school'])) {
			$return['errors']['school'] = '<p class="error"><span>You didn\'t enter your school\'s name</span></p>';
		}
	
		// Validate the parent/guardian name
		if (empty($post['guardianName'])) {
			$return['errors']['guardianName'] = '<p class="error"><span>You didn\'t enter your parent/guardian\'s name</span></p>';
		}
	
		// Validate the parent/guardian email
		if (empty($post['guardianEmail'])) {
			$return['errors']['guardianEmail'] = '<p class="error"><span>You didn\'t enter your parent/guardian\'s email</span></p>';
		}
	
		// Validate the parent/guardian address
		if (empty($post['guardianAddress'])) {
			$return['errors']['guardianAddress'] = '<p class="error"><span>You didn\'t enter your parent/guardian\'s name</span></p>';
		}
	
		// Validate the parent/guardian phone
		if (empty($post['guardianPhone'])) {
			$return['errors']['guardianPhone'] = '<p class="error"><span>You didn\'t enter your parent/guardian\'s phone</span></p>';
		}
		
		// Validate the instrument
		if (empty($post['instrument'])) {
			$return['errors']['instrument'] = '<p class="error"><span>You didn\'t enter your instrument</span></p>';
		}
	
		// Validate year's studied
		if (empty($post['yearsStudied'])) {
			$return['errors']['yearsStudied'] = '<p class="error"><span>You didn\'t enter the number of year\'s studied</span></p>';
		}
	
		// Validate private teacher
		if (empty($post['privateTeacher'])) {
			$return['errors']['privateTeacher'] = '<p class="error"><span>You didn\'t enter the name of your teacher</span></p>';
		}
	
		// Validate secondary instruments
		if (empty($post['secondaryInstruments'])) {
			$return['errors']['secondaryInstruments'] = '<p class="error"><span>You didn\'t enter any secondary instruments</span></p>';
		}
	
		// Validate music schools
		if (empty($post['musicSchools'])) {
			$return['errors']['musicSchools'] = '<p class="error"><span>You didn\'t tell us what schools you are attending</span></p>';
		}
	
		// Validate musical ensembles
		if (empty($post['musicalEnsembles'])) {
			$return['errors']['musicalEnsembles'] = '<p class="error"><span>You didn\'t tell us what ensembles you play with</span></p>';
		}
	
		// Validate preferred audition date - DELETED
		// if (empty($post['preferredDate'])) {
		// 	$return['errors']['preferredDate'] = '<p class="error"><span>You didn\'t specify your preferred audition date</span></p>';
		// }
	
		// Validate audition time
		if (empty($post['auditionTime'])) {
			$return['errors']['auditionTime'] = '<p class="error"><span>You didn\'t specify your preferred audition time</span></p>';
		}
	
		// Validate Praxis reference
		if (empty($post['references'])) {
			$return['errors']['references'] = '<p class="error"><span>You didn\'t tell us how you found out about us</span></p>';
		}
	
	
		// Print message if all tests passed
		if (count($return['errors']) < 1) {
			$return['message'] = '
				<section class="main">
					<p>Thank you for submitting your details to us.</p>
					<p>In order for us to process your application, please pay the audition fee of $40.</p>
					<p>Please click on the Paypal link below to submit your payment online, or mail a check to:</p>
					<ul>
						<li>Praxis Youth Leadership Orchestra</li>
						<li>3440 Kingsbridge Ave.</li>
						<li>Bronx, NY 10463</li>
						<li>Please include student name on the front of your check</li>
					</ul>
		
					<p>Application fee is non-refundable. Applications are processed on a first come, first served basis. You will be notified as soon as possible of your audition time slot.</p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="MKH5WB2JG4MCC">
						<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					</form>
					<p>Please note. You do not have to register with Paypal to complete your credit card transaction.</p>
				</section>
			';
			
			
			// this is where you would send an email
			sendConfirmationEmail($post);
			
			// and this is where you would add the contents to the database
			addToDatabase($post);
			

		// Missing form values
		} else { 
			$return['message'] = '
				<p class="error"><span>Please go back and complete all sections of the form.</span></p>
			';
		}
		
		// return the results!
		return $return;
	}



	/*
	 * function to send a confirmation email
	 */
	function sendConfirmationEmail($post) {
		
		// who to send it to?
		$to      = "praxisorchestra@gmail.com";
		
		// email subject?
		$subject = "New registration message added";
		
		// email message...
		$message = "Date received: ". date('l jS \of F Y h:i:s A') ."\r\n
		Name: " .$post["name"]. "\r\n" .
		"DOB: " .$post["dateofBirth"]. "\r\n" .
		"Email: " .$post["email"]. "\r\n" .
		"Address: " .$post["address"]. "\r\n" .
		"Phone: " .$post["phone"]. "\r\n" .
		"School: " .$post["school"]. "\r\n" . "\r\n" .
		"Parent/guardian name: " .$post["guardianName"]. "\r\n" .
		"Parent/guardian email: " .$post["guardianEmail"]. "\r\n" .
		"Parent/guardian address: " .$post["guardianAddress"]. "\r\n" .
		"Parent/guardian phone: " .$post["guardianPhone"]. "\r\n" . "\r\n" .
		"Instrument: " .$post["instrument"]. "\r\n" .
		"Years Studied: " .$post["yearsStudied"]. "\r\n" .
		"Private Teacher: " .$post["privateTeacher"]. "\r\n" .
		"Secondary Instruments: " .$post["secondaryInstruments"]. "\r\n" .
		"Music Schools: " .$post["musicSchools"]. "\r\n" .
		"Musical Ensembles: " .$post["musicalEnsembles"]. "\r\n" . "\r\n" .		
		"Preferred Audition Time: " .$post["auditionTime"]. "\r\n" .
		"Heard about Praxis from: " .$post["references"]. "\r\n" 
		;
		// 10-25 Removed Preferred Date from string: 
		// "Preferred Date: " .$post["preferredDate"]. "\r\n" .
		// 02-01 Removed SIDate from string:
		// SIdate: " .$post["SIdate"]. "\r\n" . "\r\n" .
		
		// set some message headers - necessary...
		$headers = "From: Praxis <noreply@praxis.com>\r\n" .
		    "Reply-To: Praxis <noreply@praxis.com>\r\n" .
		    "X-Mailer: PHP/" . phpversion();

		
		// UNCOMMENT THE NEXT LINE TO SEND THE EMAIL
		return mail($to, $subject, $message, $headers);
		
	}
	
	
	
	
	/*
	 * add details to database
	 */
	function addToDatabase($post) {
		
		// function is called, but doesn't currently do anything...
		
	}