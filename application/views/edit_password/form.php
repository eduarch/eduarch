<form action="edit_password" method="post" accept-charset="utf-8" >
	<input type="password" name="user[user_pass_current]" placeholder="Current Password" maxlength="50" required autofocus>
	<input type="password" name="user[user_pass_new]" placeholder="New Password" maxlength="50" required>
	<input type="password" name="user[user_pass_retype]" placeholder="Retype New Password" maxlength="50" required>
	<button class="success radius tiny" type="submit">Edit Password</button>
	<a href="profile" class="button radius tiny" style="background: orange; opacity: 0.95">Cancel</A>
</form>