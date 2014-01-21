<div id="login-modal" class="small reveal-modal" data-reveal>
	<h3><strong>Login</strong></h3>
	<hr>
	<form data-action="user/login" method="post" accept-charset="utf-8" data-form>
		<div data-field>
			<label class="label">Email</label>
			<input type="email" name="user[email]" placeholder="Enter example@domain.com" required />
		</div><br>
		<div data-field>
			<label class="label">Password</label>
			<input type="password" name="user[password]" placeholder="Enter password" required />
		</div><br>

		<button type="submit" class="small lbl bg-toolbox hover"><i class="glyphicon glyphicon-log-in"></i> Login</button>
	</form>
	<a class="close-reveal-modal">&#215;</a>
</div>