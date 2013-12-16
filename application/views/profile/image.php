<img src="<?php echo $user_image ?>" style="width: 200px; height: 180px;" /><br><br>
<form action="upload_avatar" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<input type="file" name="userfile" style="font-size: 15px;"/>
	<button class="tiny radius" type="submit">Upload</button>
</form>
<?php $this->layout->upload_errors(); ?>