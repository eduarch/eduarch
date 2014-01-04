<div class="row">
	<div class="medium-12 medium-centered boxed columns">
		<h4><strong>Create Class</strong></h4>
		<hr>
		<form action="classes/create_class" method="post" accept-charset="utf-8" class="sticky-label">
			<div class="row">
				<div class="medium-10 medium-centered columns">
					<label class="label" for="class_name">Class Name</label>
					<input type="text" name="class[name]" id="class_name" placeholder="50 Characters Maximum" 
						title="50 Characters Maximum" maxlength="50" autocomplete="off" required autofocus
						value="<?php echo set_value('class[name]', '') ?>">

					<label class="label" for="class_desc">Class Description</label>
					<textarea name="class[desc]" id="class_desc" placeholder="Description here " style="height:150px;"><?php echo set_value('class[desc]', '') ?></textarea>

					<label class="label">Course</label>
					<select name="class[course_id]">
						<option value="">-- Select</option>
						<?php foreach($courses as $course): ?>
						<option value="<?php echo $course['id'] ?>">
							<?php echo $course['name'] ?>
						</option>
						<?php endforeach ?>
					</select>

					<button type="submit" class="tiny radius"><i class="glyphicon glyphicon-save"></i> Create Class</button>
					<a href="account_settings" class="button tiny radius" style="background: orange;"><i class="glyphicon glyphicon-remove"></i> Cancel</a>
				</div>
			</div>
		</form>
	</div>
</div>