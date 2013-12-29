<!--><form action="change_info" method="post" accept-charset="utf-8" class="boxed sticky-label"></!-->
	<div class="large-12 columns">
		<label class="label" for="class_name">First Name</label>
		<input type="text" name="class_name" id="class_name" placeholder="50 Characters Maximum" 
			title="50 Characters Maximum" maxlength="50" autocomplete="off" required autofocus
			value="">
	</div>
	 <div class="large-12 columns">
	      <textarea placeholder="small-12.columns"></textarea>
	 </div>

<button type="submit" class="tiny radius"><i class="glyphicon glyphicon-save"></i> Save New Information</button>
	<a href="account_settings" class="button tiny radius" style="background: orange;"><i class="glyphicon glyphicon-remove"></i> Cancel</a>
<?php // $this->layout->form_errors() ?>
<!--></form></!-->