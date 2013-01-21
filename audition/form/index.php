<?php
	// set up page variables
	$path = "../..";
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
			
			<h1>Praxis Youth Leadership Orchestra Spring Institute Application Form</h1>
			
		</section>
		
		<section>	
			
			<?php
			
				// condition : show the form if it hasn't been submitted yet, or if there are errors
				if (!isset($formResult) || count($formResult['errors']) > 0) {
			
					// condition : if a form message is set (e.g. error) display it here
					if (isset($formResult) && isset($formResult['message'])) {
						echo $formResult['message'];
					}
					
			?>
			
			<form action="" method="post"> 
				
				<p><strong>Please fill in all fields</strong></p>
			
				<!--<fieldset class="checkbox">
					
					<legend>Spring Institute Date</legend>
					
					<ul>
						
						<li>
							<label for="SIdate">Spring Institute session you would like to attend</label>
							<input type="checkbox" name="SIdate" id="SIdate" value="February21-27" />Session One: February 21-27th, 2011<br />
							<input type="checkbox" name="SIdate" id="SIdate" value="March28-April2" />Session Two: March 28th- April 2, 2011<br />
							<input type="checkbox" name="SIdate" id="SIdate" value="noPreference" />No Preference<br />
							<input type="checkbox" name="SIdate" id="SIdate" value="Both" />Both<br />
							<?php if (isset($formResult) && isset($formResult['errors']['SIdate'])) { echo $formResult['errors']['SIdate']; } ?>
						</li>
						
					</ul>
					
					
					
				</fieldset>-->
				
				<fieldset>  
						
					<legend>Student Contact Information</legend>
						
					<ul>
					
						<li>
							<label for="name">Name</label>
							<input id="name" name="name" type="text" value="<?php if (isset($_POST['name'])) { echo $_POST['name']; } ?>" />
							<?php if (isset($formResult) && isset($formResult['errors']['name'])) { echo $formResult['errors']['name']; } ?>
						</li>
						
						<li>
							<label for="dateofBirth">Date of Birth</label>
							<input id="dateofBirth" name="dateofBirth" type="text" value="<?php if (isset($_POST['date'])) { echo $_POST['date']; } ?>">
							<?php if (isset($formResult) && isset($formResult['errors']['dateofBirth'])) { echo $formResult['errors']['dateofBirth']; } ?>
						</li>
							
						<li>
							<label for="email">Email</label>
							<input id="email" name="email" type="email" value="<?php if (isset($_POST['email'])) { echo $_POST['email']; } ?>" />
							<?php if (isset($formResult) && isset($formResult['errors']['email'])) { echo $formResult['errors']['email']; } ?>
						</li>
					
						<li>	
							<label for="address">Mailing Address</label>
							<textarea id="address" name="address"></textarea>
							<?php if (isset($formResult) && isset($formResult['errors']['address'])) { echo $formResult['errors']['address']; } ?>
						</li>
					
						<li>
							<label for="phone">Phone</label>
							<input id="phone" name="phone" type="text" value="<?php if (isset($_POST['phone'])) { echo $_POST['phone']; } ?>" />
							<?php if (isset($formResult) && isset($formResult['errors']['phone'])) { echo $formResult['errors']['phone']; } ?>
						</li>
						
						<li>
							<label for="school">School</label>
							<input id="school" name="school" type="text" value="<?php if (isset($_POST['school'])) { echo $_POST['school']; } ?>" />
							<?php if (isset($formResult) && isset($formResult['errors']['school'])) { echo $formResult['errors']['school']; } ?>
						</li>
					
					</ul>
						
				</fieldset>
					
				<fieldset>  
					
					<legend>Parent/Guardian Contact Information</legend>
					
					<ul>
					
						<li>
							<label for="guardianName">Parent/Guardian Name</label>
							<input id="guardianName" name="guardianName" type="text" value="<?php if (isset($_POST['guardianName'])) { echo $_POST['guardianName']; } ?>" />
							<?php if (isset($formResult) && isset($formResult['errors']['guardianName'])) { echo $formResult['errors']['guardianName']; } ?>
						</li>
						
						<li>
							<label for="guardianEmail">Parent/Guardian Email</label>
							<input id="guardianEmail" name="guardianEmail" type="email" value="<?php if (isset($_POST['guardianEmail'])) { echo $_POST['guardianEmail']; } ?>" />
							<?php if (isset($formResult) && isset($formResult['errors']['guardianEmail'])) { echo $formResult['errors']['guardianEmail']; } ?>
						</li>
						
						<li>	
							<label for="guardianAddress">Parent/Guardian Address</label>
							<textarea id="guardianAddress" name="guardianAddress"></textarea>
							<?php if (isset($formResult) && isset($formResult['errors']['guardianAddress'])) { echo $formResult['errors']['guardianAddress']; } ?>
						</li>
						
						<li>
							<label for="guardianPhone">Parent/Guardian Phone</label>
							<input id="guardianPhone" name="guardianPhone" type="tel" value="<?php if (isset($_POST['guardianPhone'])) { echo $_POST['guardianPhone']; } ?>" />
							<?php if (isset($formResult) && isset($formResult['errors']['guardianPhone'])) { echo $formResult['errors']['guardianPhone']; } ?>
						</li>
						
					</ul>
					
				</fieldset>
				
				<fieldset>  
					
					<legend>Additional Information</legend>
					
					<ul>
					
						<li>
							<label for="instrument">Instrument</label>
							<input id="instrument" name="instrument" type="text" value="<?php if (isset($_POST['instrument'])) { echo $_POST['instrument']; } ?>" />
							<?php if (isset($formResult) && isset($formResult['errors']['instrument'])) { echo $formResult['errors']['instrument']; } ?>
						</li>
					
						<li>
							<label for="yearsStudied">Years Studied</label>
							<input id="yearsStudied" name="yearsStudied" type="text" value="<?php if (isset($_POST['yearsStudied'])) { echo $_POST['yearsStudied']; } ?>" />
							<?php if (isset($formResult) && isset($formResult['errors']['yearsStudied'])) { echo $formResult['errors']['yearsStudied']; } ?>
						</li>
				
						<li>	
							<label for="privateTeacher">Name of Private Teacher</label>
							<input id="privateTeacher" name="privateTeacher" type="text" value="<?php if (isset($_POST['privateTeacher'])) { echo $_POST['privateTeacher']; } ?>" />
							<?php if (isset($formResult) && isset($formResult['errors']['privateTeacher'])) { echo $formResult['errors']['privateTeacher']; } ?>
						</li>
				
						<li>	
							<label for="secondaryInstruments">Secondary/Doubling Instruments</label>
							<input id="secondaryInstruments" name="secondaryInstruments" type="text" value="<?php if (isset($_POST['secondaryInstruments'])) { echo $_POST['secondaryInstruments']; } ?>" />
							<?php if (isset($formResult) && isset($formResult['errors']['secondaryInstruments'])) { echo $formResult['errors']['secondaryInstruments']; } ?>
						</li>
				
						<li>	
							<label for="musicSchools">List any music schools that you are attending</label>
							<textarea id="musicSchools" name="musicSchools"></textarea>
							<?php if (isset($formResult) && isset($formResult['errors']['musicSchools'])) { echo $formResult['errors']['musicSchools']; } ?>
						</li>
				
						<li>	
							<label for="musicalEnsembles">List all musical ensembles in which you are participating this year <br />(include chamber and new music ensembles)</label>
							<textarea id="musicalEnsembles" name="musicalEnsembles"></textarea>	
							<?php if (isset($formResult) && isset($formResult['errors']['musicalEnsembles'])) { echo $formResult['errors']['musicalEnsembles']; } ?>				
						</li>
				
						<!-- <li>
							<label for="preferredDate">Preferred audition date</label>
							<select name="preferredDate">
								<option id="preferredDate" value="10-31-2010">Sunday, October 31 2010</option>
								<option id="preferredDate" value="11-07-2010">Sunday, November 7 2010</option>
								<option id="preferredDate" value="noPreference">No preference</option>
							</select>
							<?php 
							//	 if (isset($formResult) && isset($formResult['errors']['preferredDate'])) { echo $formResult['errors']['preferredDate']; } 
							?>
						</li> -->
				
						<li>	
							<label for="auditionTime">Preferred Audition Time <br />(between 11am and 4:30pm)</label>
							<input id="auditionTime" name="auditionTime" type="text" value="<?php if (isset($_POST['auditionTime'])) { echo $_POST['auditionTime']; } ?>" />
							<?php if (isset($formResult) && isset($formResult['errors']['auditionTime'])) { echo $formResult['errors']['auditionTime']; } ?>
						</li>
				
						<li>	
							<label for="references">How did you hear about Praxis&#63;</label>
							<textarea id="references" name="references"></textarea>
							<?php if (isset($formResult) && isset($formResult['errors']['references'])) { echo $formResult['errors']['references']; } ?>
						</li>
						
					</ul>	
				
				</fieldset>
				
				<fieldset class="submit"> <!-- submit button -->
					<input type="submit" name="submit" value="Submit Form" />
				</fieldset>
			
			</form>
			
			<?php
			
			// form has been submitted and validated successfully, show completion message
			} else {
				echo $formResult['message'];
			}
			
			?>
			
		</section>

		
<?php
	// insert footer
	include($path."/_includes/php/footer.php");
?>