	<label>Sign up with</label>
	<a href="#"><img src="img/facebook.jpg" class="social-media-button"></img></a>
	<a href="#"><img src="img/twitter.jpg" class="social-media-button"></img></a>
	<a href="#"><img src="img/google.png" class="social-media-button"></img></a>
<hr>
<label>Or fill the details below:</label>
<form action="sign_up" method="post" accept-charset="utf-8">
	<div class="row">
		<div class="medium-6 columns">
			<input type="text" name="user[user_fname]" id="user_fname"
				placeholder="First Name" maxlength="50"
				title="Maximum length: 50"
				required
				value="<?php echo set_value('user[user_fname]', '') ?>">
		</div>
		<div class="medium-6 columns">
			<input type="text" name="user[user_lname]" id="user_lname"
				placeholder="Last Name" maxlength="50"
				title="Maximum length: 50"
				required
				value="<?php echo set_value('user[user_lname]', '') ?>">
		</div>
	</div>
	<input type="email" name="user[user_email]" id="user_email" 
		placeholder="Email Address" maxlength="50"
		title="Maximum length: 50"
		required
		value="<?php echo set_value('user[user_email]', '') ?>">
	<input type="password" name="user[user_pass]" id="user_pass"
		placeholder="Password" maxlength="32"
		title="Minimum Length: 5, Maximum length: 32"
		pattern=".{5,32}" required>
	<input type="password" name="user[user_pass_conf]" id="user_pass_conf"
		placeholder="Confirm Password" maxlength="32"
		title="Minimum Length: 5, Maximum length: 32"
		pattern=".{5,32}" required>
	<button type="submit" class="button success [large radius round]">Sign Up</button>
	<?php $this->layout->form_errors(); ?>
</form>