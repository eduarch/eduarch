<form action="forgot_password" method="post" accept-charset="utf-8" class="sticky-label">
	<h4><strong>Forgot Your Password?</strong></h4>
	We will be sending a temporary password to your email.
	<hr>
	<label class="label">Email Address</label>
	<input type="email" name="user[email]" id="email" placeholder="40 Characters Maximum" 
		title="40 Characters Maximum" maxlength="40" required autofocus
		value="<?php echo set_value('user[email]', '') ?>">
	<button type="submit" class="small radius tiny">Send Temporary Password</button>
	<a href="login" class="button tiny radius" style="background: orange;"><i class="glyphicon glyphicon-remove"></i> Cancel</a>
	<?php $this->layout->form_errors() ?>
</form>