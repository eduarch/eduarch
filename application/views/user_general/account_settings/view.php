<div class="row">
	<div class="medium-10 medium-centered boxed columns">
		<h4><strong>Account Details</strong></h4>
		<hr>
		
		<div class="row">
			<div class="large-4 columns text-center">
				<div class="show-for-medium show-for-small" style="background: black; color: white; text-align: right; height: 40px; padding: 10px 20px 10px 10px">Profile Image</div><br class="show-for-small-only">
				<a class="th">
					<img src="<?php whence($image == null, 'img/john_doe.jpg', $image) ?>" 
						style="width: 210px; height: 150px"><!-- data-src="holder.js/210x150/text:Profile Image" -->
				</a><br>
				<form action="upload_avatar" method="post" accept-charset="utf-8" enctype="multipart/form-data">
					<label class="label"
						style="height: 30px; background: #111; ; margin: 0;">
						<input type="file" name="userfile" id="image">
					</label><br><br>
					<button class="tiny radius">
						<i class="glyphicon glyphicon-upload"></i> Upload Avatar
					</button>
					<?php $this->layout->upload_errors() ?>
				</form>
			</div>

			<div class="large-8 columns hr-flatten">
				<div style="background: black; color: white; text-align: right; height: 40px; padding: 10px 20px 10px 10px">User Information</div><br>
				<div class="row">
					<div class="small-4 columns">First Name</div>
					<div class="small-6 columns"><?php echo $first_name ?></div>
				</div><hr>
				<div class="row">
					<div class="small-4 columns">Last Name</div>
					<div class="small-6 columns"><?php echo $last_name ?></div>
				</div><hr>
				<div class="row">
					<div class="small-4 columns">Gender</div>
					<div class="small-6 columns"><?php echo $gender ?></div>
				</div><hr>
				<div class="row">
					<div class="small-4 columns">Country</div>
					<div class="small-6 columns"><?php echo $country['name'] ?></div>
				</div><br><br>
				<a class="button tiny radius" href="change_info"><i class="glyphicon glyphicon-edit"></i> Edit Information</a>
				<div style="background: black; color: white; text-align: right; height: 40px; padding: 10px 20px 10px 10px">Credentials</div><br>
				<div class="row">
					<div class="small-4 columns">Email</div>
					<div class="small-6 columns"><?php echo $email ?></div>
				</div><hr>
				<div class="row">
					<div class="small-4 columns">Password</div>
					<div class="small-6 columns">*****</div>
				</div><br><br>
				<a class="button tiny radius" href="change_password"><i class="glyphicon glyphicon-edit"></i> Change Password</a>

			</div>
		</div>
	</div>
</div>