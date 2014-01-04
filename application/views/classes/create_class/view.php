<div class="row">
	<div class="medium-12 medium-centered boxed columns">
		<h4><strong>Create Class</strong></h4>
		<hr>
		
		<div class="row">
			<div class="medium-4 columns text-center">
				<div class="show-for-medium show-for-small" style="background: black; color: white; text-align: right; height: 40px; padding: 10px 20px 10px 10px">Class Image</div><br class="show-for-small-only">
				<a class="th" href="<?php whence($image == null, 'img/john_doe.jpg', $image) ?>">
					<img src="<?php whence($image == null, 'img/john_doe.jpg', $image) ?>" 
						style="width: 300px; height: 200px"><!-- data-src="holder.js/210x150/text:Profile Image" -->
				</a><br>
				<form action="upload_avatar" method="post" accept-charset="utf-8" enctype="multipart/form-data">
					<label class="label"
						style="height: 30px; background: #111; ; margin: 0; width: 300px;">
						<input type="file" name="userfile" id="image">
					</label><br><br>
					<button class="tiny radius">
						<i class="glyphicon glyphicon-upload"></i> Upload Class Image
					</button>
					<?php $this->layout->upload_errors() ?>
				</form>
			</div>

			<div class="medium-8 columns hr-flatten">
				<div style="background: black; color: white; text-align: right; height: 40px; padding: 10px 20px 10px 10px">Class Information</div><br>
			   <div class="large-12 columns">
					<label class="label" for="class_name">Class Name</label>
					<input type="text" name="class_name" id="class_name" placeholder="50 Characters Maximum" 
						title="50 Characters Maximum" maxlength="50" autocomplete="off" required autofocus
						value="">
				</div>
				 <div class="large-12 columns">
				 	  <label class="label" for="class_desc">Class Description</label>
				      <textarea id="class_desc" placeholder="Description here " style="height:150px;"></textarea>
				 </div>

					<button type="submit" class="tiny radius"><i class="glyphicon glyphicon-save"></i> Create Class</button>
					<a href="account_settings" class="button tiny radius" style="background: orange;"><i class="glyphicon glyphicon-remove"></i> Cancel</a>
			</div>
		</div>
	</div>
</div>