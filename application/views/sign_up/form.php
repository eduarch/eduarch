<form action="sign_up" method="post" accept-charset="utf-8" >
	<input type="text" name="user[user_lname]" placeholder="Last Name" maxlength="50" required autofocus
		value="<?php echo set_value('user[user_lname]', '') ?>">
	<input type="text" name="user[user_fname]" placeholder="First Name" maxlength="50" required
		value="<?php echo set_value('user[user_fname]', '') ?>">
	<input type="email" name="user[user_email]" placeholder="Email Address" maxlength="50" required
		value="<?php echo set_value('user[user_email]', '') ?>">
	<input type="password" name="user[user_pass]" placeholder="Password" maxlength="32" required>
	<input type="password" name="user[user_pass_confirm]" placeholder="Confirm Password" maxlength="32" required>
	<button class="success" type="submit">Sign Up</button>
</form>