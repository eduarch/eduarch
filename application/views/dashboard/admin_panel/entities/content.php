<br>

<div id="remove-modal" class="reveal-modal" data-reveal>
	<h2 class="warning-text"><i class="glyphicon glyphicon-warning-sign"></i> Warning Message</h2>
	<p class="lead">Are you sure you want to remove this record?</p>
	<ul class="inline-list">
		<li><h4><a id="remove-link" href=""><i class="success-text glyphicon glyphicon-ok"></i> Ok</a></h4></li>
		<li><h4><a id="remove-close"><i class="danger-text glyphicon glyphicon-remove"></i> Cancel</a></h4></li>
	</ul>
	<a class="close-reveal-modal">&#215;</a>
</div>

<div id="view-modal" class="reveal-modal" data-reveal>
	<div class="small-6 columns"><h4>Entity View</h4></div>
	<hr>
	<span class="label">Entity ID</span>
	<div class="data" id="view-id"></div><br>
	<span class="label">Entity Name</span>
	<div class="data" id="view-name"></div><br>
	<a id="edit-link" data-href="admin/edit_entity/"><i class="glyphicon glyphicon-pencil"></i> Edit</a> &nbsp; 
	<a id="remove-link" class="other-close" data-href="admin/remove_entity/"><i class="glyphicon glyphicon-remove danger-text"></i> Remove</a>
	<a class="close-reveal-modal">&#215;</a>
</div>

<div id="edit-modal" class="reveal-modal" data-reveal>
	<h4><strong>Change Entity Name</strong></h4>
	<hr>
	<label class="label">Entity ID</label>
	<input type="text" id="edit-id" readonly>
	<label class="label">Entity Name</label>
	<input type="text" id="edit-name" placeholderkikiki
	<a class="close-reveal-modal">&#215;</a>
</div>

<div style="overflow-x: scroll">
	<span class="label">Entities</span>
	<table class="admin-table" style="width: 100%; padding: 0; margin: 0">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Action</th>
		</thead>

		<tbody>
			<?php foreach($entities as $entity): ?>
			<tr>
				<td><?php echo $entity['id'] ?></td>
				<td><?php echo $entity['name'] ?></td>
				<td>
					<a class="view" data-reveal-id="view-modal" href="admin/view_entity/<?php echo $entity['id'] ?>" title="View Entity"><i class="glyphicon glyphicon-search"></i></a>
					 &nbsp;
					<a class="edit" data-reveal-id="edit-modal" href="admin/edit_entity/<?php echo $entity['id'] ?>" title="Edit Entity"><i class="glyphicon glyphicon-pencil"></i></a>
					 &nbsp;
					<a class="remove danger-text" data-href="admin/remove_entity/<?php echo $entity['id'] ?>" title="Remove Entity" data-reveal-id="remove-modal"><i class="glyphicon glyphicon-remove"></i></a>
				</td>
			</tr>
			<?php endforeach ?>
			<?php if(empty($entities)): ?>
			<tr>
				<td colspan="3" class="text-center"><em>No Records Founds</em></td>
			</tr>
			<?php endif; ?>
		</tbody>
	</table>
</div>

<div class="row" style="font-size: 15px">
	<div class="small-6 small-centered columns">
		<a href="admin/entities/<?php echo $previous ?>"><i class="glyphicon glyphicon-arrow-left"></i> Previous</a>
		<a href="admin/entities/<?php echo $next ?>" class="right"><i class="glyphicon glyphicon-arrow-right"></i> Next</a>
	</div>
</div>

<br><br>
<h5><strong>Add Entity</strong></h5>
<div class="sticky-label">
<form action="admin/add_entity" method="post" accept-charset="utf-8" style="max-width: 350px">
	<label class="label">Entity Name</label>
	<div class="row collapse">
		<div class="row collapse">
	        <div class="small-9 columns">
	          <input type="text" name="entity[name]" placeholder="Enter Entity Name"
	          	maxlength="50" title="50 Characters maximum" required>
	        </div>
	        <div class="small-3 columns">
	          <button class="button postfix">Add Entity</button>
	        </div>
      </div>
	</div>
	<?php $this->layout->form_errors() ?>
</form>
</div>

