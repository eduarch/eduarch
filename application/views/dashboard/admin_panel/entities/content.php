<br>

<?php 
	$this->layout->view('modal_view');
	$this->layout->view('modal_remove');
	$this->layout->view('modal_edit');
?>

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

<div class="text-center">
<?php $this->layout->pagination() ?>
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

