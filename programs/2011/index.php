<?php
	// set up page variables
	$path = "../..";
	$pageid = "programs";
	$pagetitle = "2011 Spring Institute";
	
    // insert header
	include($path."/_includes/php/header.php");
?>

		<section id="spring" class="clearfix">
				
			<section class="box left">
		
				<h1>2011 spring institute</h1>
		
				<p>Praxis Youth Leadership Orchestra proudly presents the 2012 Spring Institute concerts.</p>
				
				<p>This year's Spring Institute will culminate in two concert performances:</p>
				
				<ul class="dates clearfix">
					
					<li>
						
						<p>Saturday 2/26/2011<br/>8:00pm<br/><span>The Italian Academy<br/>at Columbia University</span><br/>1161 Amsterdam Avenue<br/>(between W116 and 118)</p>
						
					</li>
					
					<li>
						
						<p>Sunday 2/27/2011<br/>7:30pm<br/><span>Stephen Wise Free Synagogue</span><br/>30 W 68th St<br/>(between Columbus and Central Park West)</p>
						
					</li>
					
				</ul>
				
				<p class="concerts">Concert Program:<br/>Vivaldi: Sinfonia from L'Olimpiade<br/>Delius: On Hearing the First Cuckoo in Spring<br/>Mozart: Symphony No. 40 in G minor, K. 550</p>
				
				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="E7JD4CTBYPCS8">
					<table>
					<tr><td><input type="hidden" name="on0" value="Ticket Options">Ticket Options</td></tr><tr><td><select name="os0">
						<option value="Adult 2/26">Adult 2/26 $20.00</option>
						<option value="Student 2/26">Student 2/26 $5.00</option>
						<option value="Adult 2/27">Adult 2/27 $20.00</option>
						<option value="Student 2/27">Student 2/27 $5.00</option>
						<option value="Donation">Donation $50.00</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				
				<p>Tickets may be purchased in advance via paypal, or at the door, pending availability.  To guarantee entry, please RSVP to <span style="text-decoration:underline">anna@praxisorchestra.org</span>.</p> 
				
				<p>Ticket amounts are suggested donations, please indicate in your RSVP email if you would like to contribute a different sum at the door.</p>
				
				<p>Please do not hesitate to contact us if you have any questions regarding the concerts or the program in general.</p>
		
			</section>
	
			<section class="right">
		
				<h1>venue information</h1>
				
				<p>The Italian Academy at Columbia University</p>
				
				<a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=1161+amsterdam+ave&aq=&sll=40.784961,-73.972492&sspn=0.121788,0.297146&ie=UTF8&hq=&hnear=1161+Amsterdam+Ave,+New+York,+10027&ll=40.807589,-73.960186&spn=0.007609,0.018572&z=17&iwloc=r0"><img src="../../_includes/img/italianacademy.jpg"></a>
				
				<p class="venue">1161 Amsterdam Avenue (between W116 and 118)</p>
				
				<p>Stephen Wise Free Synagogue</p>
				
				<a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=30+west+68th+st&aq=&sll=40.807865,-73.964467&sspn=0.030436,0.074286&ie=UTF8&hq=&hnear=30+W+68th+St,+New+York,+10023&ll=40.773871,-73.979166&spn=0.007816,0.018572&z=17&iwloc=lyrftr:m,6911465977218608179,40.773896,-73.978897"><img src="../../_includes/img/stephenwise.jpg"></a>
				
				<p class="venue">30 W 68th St (between Columbus and Central Park West)</p>
				
				<p class="venue">Click on the maps to view in google maps</p>
		
			</section>
		
		</section>
		
<?php
	// insert footer
	include($path."/_includes/php/footer.php");
?>