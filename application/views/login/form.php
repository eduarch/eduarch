<form action="login" method="post" accept-charset="utf-8">
	<input type="email" name="user[user_email]" placeholder="Email Address" maxlength="50" required autofocus
		value="<?php echo set_value('user[user_email]', '') ?>">
	<input type="password" name="user[user_pass]" placeholder="Password" maxlength="32" required>
	<button type="submit">Login</button>
</form>