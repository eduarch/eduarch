<form action="sign_up" method="post" accept-charset="utf-8" class="boxed sticky-label">
	<h4><strong>Setup Free Account</strong></h4>
	Already signed up? <a href="login">Login here</a>
	<hr>
	<div class="row">
		<div class="large-6 columns">
			<label class="label" for="first_name">First Name</label>
			<input type="text" name="user[first_name]" id="first_name" placeholder="50 Characters Maximum" 
				title="50 Characters Maximum" maxlength="50" autocomplete="off" required autofocus
				value="<?php echo set_value('user[first_name]', '') ?>">
		</div>
		<div class="large-6 columns">
			<label class="label" for="last_name">Last Name</label>
			<input type="text" name="user[last_name]" id="last_name" placeholder="50 Characters Maximum" 
				title="50 Characters Maximum" maxlength="50" autocomplete="off" required
				value="<?php echo set_value('user[last_name]', '') ?>">
		</div>
	</div>
	<div class="row">
		<div class="medium-4 large-4 columns">
			<label class="label">Gender</label><br>
			<input type="radio" name="user[gender]" value="Male" required
				<?php whence(set_value('user[gender]', '') == 'Male', 'checked') ?>
				style="margin-left: 5px; width: 10px; height: 10px;"><span style="font-size: 13px;"> Male</span>
			<input type="radio" name="user[gender]" value="Female" 
				<?php whence(set_value('user[gender]', '') == 'Female', 'checked') ?>
				style="margin-left: 10px; width: 10px; height: 10px;"><span style="font-size: 13px;"> Female</span>
		</div>
		<div class="medium-7 large-8 columns">
			<label class="label" for="country_id">Country</label>
			<select name="user[country_id]" id="country_id" required>
				<option value=""> -- Select</option>
				<?php foreach($countries as $country): ?>
				<option value="<?php echo $country['id'] ?>"
					<?php whence($country['id'] == set_value('user[country_id]'), 'selected') ?>>
					<?php echo $country['name'] ?>
				</option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="row"><div class="medium-8 columns left">
		<label class="label" for="email">Email Address</label>
		<input type="email" name="user[email]" id="email" placeholder="40 Characters Maximum"
			title="40 Characters Maximum" maxlength="40" autocomplete="off" required
			value="<?php echo set_value('user[email]', '') ?>">
	</div></div>

	<div class="row"><div class="medium-8 columns left">
		<label class="label" for="password">Password</label>
		<input type="password" name="user[password]" id="password" placeholder="5 - 32 Characters"
			title="5 - 32 Characters" maxlength="32" pattern=".{5,32}" required>
	</div></div>

	<div class="row"><div class="medium-8 columns left">
		<label class="label" for="confirm_password">Confirm Password</label>
		<input type="password" name="confirm_password" id="confirm_password"
			title="confirm_password" placeholder="5 - 32 Characters" maxlength="32" pattern=".{5,32}" required>
	</div></div>
	<button type="submit" class="success"><i class="glyphicon glyphicon-pencil"></i> Sign Up</button>
	<?php $this->layout->form_errors() ?>
</form>
