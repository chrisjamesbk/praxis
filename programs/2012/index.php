<?php
	// set up page variables
	$path = "../..";
	$pageid = "programs";
	$pagetitle = "2012 Spring Institute";
	
    // insert header
	include($path."/_includes/php/header.php");
?>

		<section id="spring" class="clearfix">
				
			<section class="box left">
		
				<h1>2012 spring institute</h1>
		
				<p>Praxis Youth Leadership Orchestra proudly presents the <strong>2012 Spring Institute</strong> concerts.</p>
				
				<ul class="dates clearfix">
					
					<li>
						
						<p>Friday 2/24, 7:30pm<br/><span>Salon 94 - <strong>SOLD OUT</strong></span><br/>12 East 94th St<br/>(between Madison and 5th)<br/>(seating limited)</p>
						
					</li>
					
					<li>
						
						<p>Sunday 2/26, 7:00pm<br/><span>The Italian Academy</span><br/>at Columbia University<br/>1161 Amsterdam Avenue<br/>(between W116 and 118)</p>
						
					</li>
					
				</ul>
				
				<p class="concerts">Concert Program:<br/>Ravel: Le Tombeau de Couperin<br/>F. J. Haydn: Symphony No. 103 in E-flat major (“Drumroll”)</p>
				
				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr"
				method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="E7JD4CTBYPCS8">
				<table>
				<tr><td><input type="hidden" name="on0" value="Ticket Options">Ticket
				Options</td></tr><tr><td><select name="os0">
				       <option value="Adult 2/26">Adult 2/26 $20.00 USD</option>
				       <option value="Student 2/26">Student 2/26 $5.00 USD</option>
				       <option value="Donation">Donation $25.00 USD</option>
				       <option value="Donation">Donation $50.00 USD</option>
				       <option value="Donation">Donation $100.00 USD</option>
				</select> </td></tr>
				</table>
				<input type="hidden" name="currency_code" value="USD">
				<input type="image"
				src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif"
				border="0" name="submit" alt="PayPal - The safer, easier way to pay
				online!">
				<img alt="" border="0"
				src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1"
				height="1">
				</form>
				
				<p>Tickets may be purchased in advance via paypal, or at the door, pending availability.  To guarantee entry, please RSVP to <span style="text-decoration:underline;">anna@praxisorchestra.org</span>.</p>
				
				<p>Please do not hesitate to contact us if you have any questions regarding the concerts or the program in general.</p>
				
				<!--<p>* Please note that seating is very limited for this concert, you will only be guaranteed admission if you buy tickets ahead of time.</p>-->
		
			</section>
			
			<section class="right">
		
				<h1>venue information</h1>
				
				<p>Salon 94</p>
				
				<a href="http://maps.google.com/maps?q=12+East+94th+St&hl=en&ll=40.786244,-73.955927&spn=0.011519,0.022509&sll=40.746497,-74.009447&sspn=0.046103,0.090036&hnear=12+E+94th+St,+Manhattan,+New+York+10128&t=m&z=16"><img src="../../_includes/img/salonmap.jpg"></a>
				
				<p class="venue">12 East 94th St (between Madison and 5th)</p>
				
				<p>The Italian Academy at Columbia University</p>
				
				<a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=1161+amsterdam+ave&aq=&sll=40.784961,-73.972492&sspn=0.121788,0.297146&ie=UTF8&hq=&hnear=1161+Amsterdam+Ave,+New+York,+10027&ll=40.807589,-73.960186&spn=0.007609,0.018572&z=17&iwloc=r0"><img src="../../_includes/img/italianacademy.jpg"></a>
				
				<p class="venue">1161 Amsterdam Avenue (between W116 and 118)</p>
				
			</section>
		
		</section>
		
<?php
	// insert footer
	include($path."/_includes/php/footer.php");
?>