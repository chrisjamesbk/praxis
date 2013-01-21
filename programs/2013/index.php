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
		
				<h1>2013 spring institute</h1>
		
				<p>Praxis Youth Leadership Orchestra proudly presents the <strong>2013 Spring Institute</strong> concerts.</p>
				
				<ul class="dates clearfix">
					
					<li>
						
						<p>Friday 2/19, 7:30pm<br/><span>Stephen Wise Free Synagogue</span><br/>30 W 68th St<br/>(between Columbus and Central Park West)</p>
						
						<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr"
                        method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="E7JD4CTBYPCS8">
                        <table>
                        <tr><td><input type="hidden" name="on0" value="Ticket Options">Ticket
                        Options</td></tr><tr><td><select name="os0">
                                <option value="Adult 2/19">Adult 2/19 $20.00 USD</option>
                                <option value="Student 2/19">Student 2/19 $5.00 USD</option>
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
						
					</li>
					
					<li>
						
						<p>Sunday 2/22, 7:30pm<br/><span>The Italian Academy</span><br/>at Columbia University<br/>1161 Amsterdam Avenue<br/>(between W116 and 118)</p>
						
						<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr"
                        method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="L3YJMZYZ7KYRY">
                        <table>
                        <tr><td><input type="hidden" name="on0" value="Ticket Options">Ticket
                        Options</td></tr><tr><td><select name="os0">
                                <option value="Adult 2/22">Adult 2/22 $20.00 USD</option>
                                <option value="Student 2/22">Student 2/22 $5.00 USD</option>
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
						
					</li>
					
				</ul>
				
				<p class="concerts">Concert Program:<br/>Beethoven, Symphony No. 3 ('Eroica')</p>
				
				<p>Tickets may be purchased in advance via paypal, or at the door, pending availability.  To guarantee entry, please RSVP to <span style="text-decoration:underline;">anna@praxisorchestra.org</span>.</p>
				
				<p>Please do not hesitate to contact us if you have any questions regarding the concerts or the program in general.</p>
				
				<!--<p>* Please note that seating is very limited for this concert, you will only be guaranteed admission if you buy tickets ahead of time.</p>-->
		
			</section>
			
			<section class="right">
		
				<h1>venue information</h1>
				
				<p>Stephen Wise Free Synagogue</p>
				
				<a href="https://maps.google.com/maps?q=Stephen+Wise+Free+Synagogue&hl=en&sll=40.697488,-73.979681&sspn=0.748602,1.474915&hq=Stephen+Wise+Free+Synagogue&t=m&z=15"><img src="../../_includes/img/stephenwise.jpg"></a>
				
				<p class="venue">30 W 68th St (between Columbus and Central Park West)</p>
				
				<p>The Italian Academy at Columbia University</p>
				
				<a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=1161+amsterdam+ave&aq=&sll=40.784961,-73.972492&sspn=0.121788,0.297146&ie=UTF8&hq=&hnear=1161+Amsterdam+Ave,+New+York,+10027&ll=40.807589,-73.960186&spn=0.007609,0.018572&z=17&iwloc=r0"><img src="../../_includes/img/italianacademy.jpg"></a>
				
				<p class="venue">1161 Amsterdam Avenue (between W116 and 118)</p>
				
			</section>
		
		</section>
		
<?php
	// insert footer
	include($path."/_includes/php/footer.php");
?>