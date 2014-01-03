<br>

<div style="overflow-x: scroll">
	<span class="label">Status</span>
	<table class="admin-table" style="width: 100%; padding: 0; margin: 0">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Entities</th>
			<th>Action</th>
		</thead>

		<tbody>
			<?php foreach($status as $stat): ?>
			<tr>
				<td><?php echo $stat['id'] ?></td>
				<td><?php echo $stat['name'] ?></td>
				<td><?php 
					if(!empty($status_entity) && isset($staus_entity[$stat['id']])) {
						echo $staus_entity[$stat['id']];
					} else {
						echo '<em>No Entities Assigned</em>';
					}
				?></td>
				<td>
					<a title="Add Entity" href="admin/add_status_entity/<?php echo $stat['id'] ?>">
						<i class="glyphicon glyphicon-plus-sign"></i>
					</a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>