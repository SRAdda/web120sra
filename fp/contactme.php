<?php include "includes/header.php"?>
<!-- START HTML FORM -->
<fieldset>
	<form action="contactme.php" method="post">
	<div>
		<label>Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<br>
	<div>	
		<label>Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<br>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			How Did You Find Us?:<br />
			<select name="How_Did_You_Find_Us?" required="required" title="How You Find Us is required" tabindex="30">
				<option value="">Choose How You Found Nello</option>
				<option value="Phone">Phone</option>
				<option value="Web">Web</option>
				<option value="Magazine">Magazine</option>
				<option value="A Friend">A Friend</option>
				<option value="Other">Other</option>
			</select>
		</label>
	</div>
	<br>
	<div>	
			<label>What Services Are You Interested In?</label><br>
			<input type="checkbox" name="Interested_In[]" value="Hair cut and Style" tabindex="40" /> Hair cut and Style <br />
			<input type="checkbox" name="Interested_In[]" value="Color or Highlights" /> Color or Highlights <br />
			<input type="checkbox" name="Interested_In[]" value="Special Event" /> Special Event <br />
			<input type="checkbox" name="Interested_In[]" value="Complimentary Consultation" /> Complimentary Consultation <br />
			<input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />

	</div>
	<br>
	
	<div>	

			<label>Would you like to join our mailing list?</label><br />
			<input type="radio" name="Join_Mailing_List?" value="Yes" 
			required="required" title="Mailing list is required" tabindex="50"  
			/> Yes <br />
			<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />

	</div>
	<br>	
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
		</label>
	</div>
	<br>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6Le4ZZ4UAAAAAO98JuLbr3Pnxl-TcZyM2mR3UQZI"></div>
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
	<br>
    <script src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>

	<p class="clear-recaptcha"></p>
</fieldset>
<!-- END LEFT COL -->
<?php include "includes/footer.php"?>