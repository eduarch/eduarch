<form action="change_password" method="post" accept-charset="utf-8" class="boxed sticky-label">
	<h4><strong>Change Your Credentials</strong></h4>
	<hr>
	<label class="label">Current Password</label>
	<input type="password" name="current_password" id="current_password" placeholder="5 - 32 Characters"
		title="5 - 32 Characters" maxlength="32" pattern=".{5,32}" required autofocus>
	<label class="label">New Password</label>
	<input type="password" name="user[password]" id="password" placeholder="5 - 32 Characters" 
		title="5 - 32 Characters" maxlength="32" pattern=".{5,32}" required>
	<label class="label">Retype Password</label>
	<input type="password" name="retyped_password" id="retype_password" placeholder="5 - 32 Characters" 
		title="5 - 32 Characters" maxlength="32" pattern=".{5,32}" required>
	<button type="submit">Change Password</button>
	<?php $this->layout->form_errors() ?>
</form>