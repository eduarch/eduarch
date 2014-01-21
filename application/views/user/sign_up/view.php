<div id="signup-modal" class="medium reveal-modal" data-reveal data-options="animation:none">
	<h4><strong>Setup Free Account</strong></h4><hr>
	<form data-action="user/sign_up" method="post" accept-charset="utf-8" data-form>
		<div class="row">
			<div class="medium-6 columns" data-field data-parse="complete-trim|title_case">
				<label class="label" for="signup-firstname">First Name</label>
				<input type="text" name="user[first_name]" placeholder="Enter First Name" id="signup-firstname" autocomplete="off"
					maxlength="50" required tabindex="1">
				<br>
			</div>

			<div class="medium-6 columns" data-field data-parse="complete-trim|title_case">
				<label class="label" for="signup-lastname">Last Name</label>
				<input type="text" name="user[last_name]" placeholder="Enter Last Name" id="signup-lastname" autocomplete="off"
					maxlength="50" required tabindex="2">
				<br>
			</div>
		</div>

		<div class="row">
			<div class="medium-6 columns" data-field>
				<label class="label">Gender</label>
				<div style="font-size: 12px;"><br>
					<input type="radio" name="user[gender]" value="Male" id="signup-male" required style="margin-left: 10px" tabindex="3">
					<label for="signup-male">Male</label>
					<input type="radio" name="user[gender]" value="Female" id="signup-female" style="margin-left: 10px" tabindex="4"> 
					<label for="signup-female">Female</label>
				</div>
				<br>
			</div>

			<div class="medium-6 columns" data-get="user/countries" data-target="#signup-country" data-field>
				<label class="label" for="signup-country">Country</label>
				<select name="user[country_id]" required id="signup-country" tabindex="5">
					<option value=""> -- Select</option>
				</select>
				<br>
			</div>
		</div><br>

		<div data-field>
			<label class="label" for="signup-email">Email Address</label>
			<input type="email" name="user[email]" placeholder="Email Address" maxlength="40" required id="signup-email" autocomplete="off" tabindex="6">
		</div><br>

		<div data-field>
			<label class="label" for="signup-password">Password</label>
			<input type="password" name="user[password]" placeholder="Password" maxlength="32" id="signup-password" tabindex="7">
		</div><br>

		<div data-field>
			<label class="label" for="signup-retype-password">Retype Password</label>
			<input type="password" name="retype_password" placeholder="Retype Password" maxlength="32" id="signup-retype-password" tabindex="8">
		</div><br>

		<button type="submit" class="small radius lbl bg-go-green hover"><i class="glyphicon glyphicon-pencil"></i> Sign Up</button>
	</form>
	<a class="close-reveal-modal">&#215;</a>
</div>