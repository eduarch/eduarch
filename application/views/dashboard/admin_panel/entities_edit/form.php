<form action="admin/edit_entity/<?php echo $id ?>" method="post" accept-charset="utf-8" class="sticky-label">
	<h4><strong>Change Entity Name</strong></h4>
	<hr>
	<label class="label">Entity ID</label>
	<input type="text" name="entity[id]" id="entity_id" readonly value="<?php echo $id ?>">
	<label class="label">Entity Name</label>
	<input type="text" name="entity[name]" id="entity_name" placeholder="50 Characters Maximum" 
		title="50 Characters Maximum" maxlength="40" required autofocus
		value="<?php echo $name ?>">
	<button type="submit" class="small radius tiny"><i class="glyphicon glyphicon-pencil"></i> Change Entity Name</button>
	<a href="admin/entities" class="button tiny radius" style="background: orange;"><i class="glyphicon glyphicon-remove"></i> Cancel</a>
	<?php $this->layout->form_errors() ?>
</form>