<div class="row">
	<div class="medium-5 medium-centered columns boxed sticky-label">
		<div class="row">
			<div class="small-6 columns"><h4>Entity View</h4></div>
			<div class="small-6 columns text-right"><a href="admin/entities"><i class="glyphicon glyphicon-arrow-left"></i> Back to Entities</a></div>
		</div>
		<hr>
		<span class="label">Entity ID</span>
		<div class="data"><?php echo $id ?></div><br>
		<span class="label">Entity Name</span>
		<div class="data"><?php echo $name ?></div><br>
		<a href="admin/edit_entity/<?php echo $id ?>"><i class="glyphicon glyphicon-pencil"></i> Edit</a> &nbsp; 
		<a class="remove" href="admin/remove_entity/<?php echo $id ?>"><i class="glyphicon glyphicon-remove danger-text"></i> Remove</a>
	</div>
</div>