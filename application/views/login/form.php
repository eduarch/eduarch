<form action="login" method="post" accept-charset="utf-8" class="entry-form sticky-label">
	<h4><strong>Login With Your Email</strong></h4>
	<hr>
	<label class="label">Email Address</label>
	<input type="email" name="user[email]" id="email" placeholder="40 Characters Maximum" maxlength="40" required autofocus
		value="<?php echo set_value('user[email]', '') ?>">
	<label class="label">Password</label>
	<input type="password" name="user[password]" id="password" placeholder="5 - 32 Characters" maxlength="32" pattern=".{5,32}" required>
	<button type="submit">Login</button>
	<?php $this->layout->form_errors() ?>
</form>
