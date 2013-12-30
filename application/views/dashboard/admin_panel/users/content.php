<br>

<div style="overflow-x: scroll">
	<span class="label">Users</span>
	<table class="admin-table" style="width: 100%; padding: 0; margin: 0">
		<thead>
			<th>ID</th>
			<th>Email</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Country</th>
			<th>User Type</th>
			<th>Status</th>
			<th>Action</th>
		</thead>

		<tbody>
			<?php foreach($users as $user): ?>
			<tr>
				<td><?php echo $user['id'] ?></td>
				<td><?php echo $user['email'] ?></td>
				<td><?php echo $user['last_name'], ', ', $user['first_name'] ?></td>
				<td><?php echo $user['gender'] ?></td>
				<td><?php echo $user['country'] ?></td>
				<td><?php echo $user['user_type'] ?></td>
				<td><?php echo $user['status'] ?></td>
				<td>
					<a title="View"<i class="glyphicon glyphicon-search"></i></a>&nbsp;&nbsp;
					<a title="Update"><i class="glyphicon glyphicon-pencil"></i></a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>

