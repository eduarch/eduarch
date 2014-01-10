<br>

<?php 
	$this->layout->view('modal_view');
	$this->layout->view('modal_remove');
	$this->layout->view('modal_edit');
	$this->layout->view('modal_add');
?>

<div style="overflow-x: scroll">
	<div class="row">
		<div class="small-3 columns">
			<span class="label">Entities</span>
		</div>
		<div class="small-9 columns text-right">
			<a data-reveal-id="add-modal" class="label success">
				<i class="glyphicon glyphicon-plus"></i> Add New Entity
			</a>
		</div>
	</div>
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

<div class="text-center">
<?php $this->layout->pagination() ?>
</div>

