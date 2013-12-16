<form action="edit_name" method="post" accept-charset="utf-8" >
	<label for="user_lname">Last Name</label>
	<input type="text" name="user[user_lname]" id="user_lname" placeholder="Last Name" maxlength="50" required autofocus
		value="<?php echo set_value('user[user_lname]', '') ?>">
	<label for="user_lname">First Name</label>
	<input type="text" name="user[user_fname]" id="user_fname" placeholder="First Name" maxlength="50" required
		value="<?php echo set_value('user[user_fname]', '') ?>">
	<button class="success radius tiny" type="submit">Edit Name</button>
	<a href="profile" class="button radius tiny" style="background: orange; opacity: 0.95">Cancel</A>
</form>