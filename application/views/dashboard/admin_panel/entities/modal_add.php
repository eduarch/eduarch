<div id="add-modal" class="reveal-modal sticky-label" data-reveal>
	<h5><strong>Add New Entity</strong></h5>
	<hr>
	<form data-abide>
		<div class="name-field" id="entity[name]">
			<label class="label" for="add-name">Entity Name</label>
			<input type="text" id="add-name" name="entity[name]" placeholder="Enter Entity Name"
			          	maxlength="50" title="50 Characters maximum" required>
		</div>

         <button id="add-submit" data-href="admin/add_entity" class="success button small">Add Entity</button>
	</form>
	<a class="close-reveal-modal">&#215;</a>
</div>