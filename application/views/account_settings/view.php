<div class="row">
	<div class="medium-10 medium-centered boxed columns">
		<h4><strong>Account Details</strong></h4>
		<hr>
		
		<div class="row">
			
			<div class="medium-4 columns text-center">
				<a class="th">
					<img data-src="holder.js/210x150/text:Profile Image">
				</a><br>
				<form action="upload_avatar" method="post" accept-charset="utf-8" enctype="multipart/form-data">
					<label class="label"
						style="height: 30px; background: #111; ; margin: 0;">
						<input type="file" name="user[image]" id="image">
					</label>
					<button class="tiny" style="width: 220px; border-radius: 0 0 10px 10px">
						<i class="glyphicon glyphicon-upload"></i> Upload Avatar
					</button>
				</form>
			</div>

			<div class="medium-8 columns">
				<div class="row">
					<div class="small-4 columns">First Name</div>
					<div class="small-6 columns"><?php echo $first_name ?></div><hr>
				</div>
				<div class="row">
					<div class="small-4 columns">Last Name</div>
					<div class="small-6 columns"><?php echo $last_name ?></div><hr>
				</div>
				<div class="row">
					<div class="small-4 columns">Gender</div>
					<div class="small-6 columns"><?php echo $gender ?></div><hr>
				</div>
				<div class="row">
					<div class="small-4 columns">Country</div>
					<div class="small-6 columns"><?php echo $country['name'] ?></div><hr>
				</div>
				<div class="row">
					<div class="small-4 columns">Email</div>
					<div class="small-6 columns"><?php echo $email ?></div><hr>
				</div>
				<div class="row">
					<div class="small-4 columns">Password</div>
					<div class="small-6 columns">********************************</div><hr>
				</div>
				<a class="button tiny radius" href="edit_account_details"><i class="glyphicon glyphicon-edit"></i> Edit</a>

			</div>
		</div>
	</div>
</div>