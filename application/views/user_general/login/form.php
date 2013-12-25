<form action="login" method="post" accept-charset="utf-8" class="boxed sticky-label">
	<h4><strong>Login With Your Email</strong></h4>
	No account yet? <a href="sign_up">Sign up here</a>
	<hr>
	<label class="label">Email Address</label>
	<input type="email" name="user[email]" id="email" placeholder="40 Characters Maximum" 
		title="40 Characters Maximum" maxlength="40" tabindex="1" required autofocus
		value="<?php echo set_value('user[email]', '') ?>">
	<label class="label">Password</label>
	<a class="right" href="forgot_password" style="font-size: 12px;" tabindex="5">
		<i class="glyphicon glyphicon-question-sign"></i>
		Forgot Password
	</a>
	<input type="password" name="user[password]" id="password" placeholder="5 - 32 Characters"
		title="5 - 32 Characters" maxlength="32" pattern=".{5,32}"  tabindex="2" required>
	
	<div class="row">
		<div class="medium-6 columns">
			<label class="label"><input type="checkbox" name="remember_me"  tabindex="3"> Remember me?</label>
		</div>
		<div class="medium-2 columns"><br></div>
		<div class="medium-4 columns">
			<button type="submit" tabindex="4"><i class="glyphicon glyphicon-log-in"></i> Login</button>
		</div>
	</div>
	<?php $this->layout->form_errors() ?>
</form>