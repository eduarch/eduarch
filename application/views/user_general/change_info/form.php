<form action="change_info" method="post" accept-charset="utf-8" class="boxed sticky-label">
	<h4><strong>Change Information</strong></h4>
	<hr>
	<div class="row">
		<div class="large-6 columns">
			<label class="label" for="first_name">First Name</label>
			<input type="text" name="user[first_name]" id="first_name" placeholder="50 Characters Maximum" 
				title="50 Characters Maximum" maxlength="50" autocomplete="off" required autofocus
				value="<?php echo $first_name ?>">
		</div>
		<div class="large-6 columns">
			<label class="label" for="last_name">Last Name</label>
			<input type="text" name="user[last_name]" id="last_name" placeholder="50 Characters Maximum" 
				title="50 Characters Maximum" maxlength="50" autocomplete="off" required
				value="<?php echo $last_name ?>">
		</div>
	</div>
	<div class="row">
		<div class="medium-4 large-4 columns">
			<label class="label">Gender</label><br>
			<input type="radio" name="user[gender]" value="Male" required
				<?php whence($gender == 'Male', 'checked') ?>
				style="margin-left: 5px; width: 10px; height: 10px;"><span style="font-size: 13px;"> Male</span>
			<input type="radio" name="user[gender]" value="Female" 
				<?php whence($gender == 'Female', 'checked') ?>
				style="margin-left: 10px; width: 10px; height: 10px;"><span style="font-size: 13px;"> Female</span>
		</div>
		<div class="medium-7 large-8 columns">
			<label class="label" for="country_id">Country</label>
			<select name="user[country_id]" id="country_id" required>
				<option value=""> -- Select</option>
				<?php foreach($countries as $country): ?>
				<option value="<?php echo $country['id'] ?>"
					<?php whence($country['id'] == $country_id, 'selected') ?>>
					<?php echo $country['name'] ?>
				</option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
	<button type="submit" class="tiny radius"><i class="glyphicon glyphicon-save"></i> Save New Information</button>
	<a href="account_settings" class="button tiny radius" style="background: orange;"><i class="glyphicon glyphicon-remove"></i> Cancel</a>
	<?php $this->layout->form_errors() ?>
</form>