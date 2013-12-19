<form action="sign_up" method="post" accept-charset="utf-8" class="entry-form sticky-label">
	<h4 class="text-right"><strong>Setup Free Account</strong></h4>
	<hr>
	<div class="row">
		<div class="large-6 columns">
			<label class="label">First Name</label>
			<input type="text" name="user[first_name]" id="first_name" placeholder="50 Characters Maximum" maxlength="50" required autofocus
				value="<?php echo set_value('user[first_name]', '') ?>">
		</div>
		<div class="large-6 columns">
			<label class="label">Last Name</label>
			<input type="text" name="user[last_name]" id="last_name" placeholder="50 Characters Maximum" maxlength="50" required
				value="<?php echo set_value('user[last_name]', '') ?>">
		</div>
	</div>
	<div class="row">
		<div class="medium-4 large-4 columns">
			<label class="label">Gender</label><br>
			<input type="radio" name="user[gender]" value="0"
				<?php whence(set_value('user[gender]', '') == 0, 'checked') ?>
				style="margin-left: 5px; width: 10px; height: 10px;"><span style="font-size: 13px;"> Male</span>
			<input type="radio" name="user[gender]" value="1" 
				<?php whence(set_value('user[gender]', '') == 1, 'checked') ?>
				style="margin-left: 10px; width: 10px; height: 10px;"><span style="font-size: 13px;"> Female</span>
		</div>
		<div class="medium-7 large-8 columns">
			<label class="label">Country</label>
			<select name="user[country_id]">
				<option value=""> -- Select</option>
				<?php foreach($countries as $country): ?>
				<option value="<?php echo $country['id'] ?>"><?php echo $country['name'] ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="row"><div class="medium-8 columns left">
		<label class="label">Email Address</label>
		<input type="email" name="user[email]" id="email" placeholder="40 Characters Maximum" maxlength="40" required
			value="<?php echo set_value('user[email]', '') ?>">
	</div></div>

	<div class="row"><div class="medium-8 columns left">
		<label class="label">Password</label>
		<input type="password" name="user[password]" id="password" placeholder="5 - 32 Characters" maxlength="32" pattern=".{5,32}" required>
	</div></div>

	<div class="row"><div class="medium-8 columns left">
		<label class="label">Confirm Password</label>
		<input type="password" name="user[confirm_password]" id="confirm_password" placeholder="5 - 32 Characters" maxlength="32" pattern=".{5,32}" required>
	</div></div>
	<button type="submit" class="success">Sign Up</button>
	<?php $this->layout->form_errors() ?>
</form>
