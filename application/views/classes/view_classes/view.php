<div class="maxed-width row">
	<div class="medium-4 columns">
		<ul class="side-nav">
			<?php foreach($courses as $course): ?>
			<li><?php echo $course['name'] ?></li>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="medium-8 columns">
		<?php foreach($classes as $class): ?>
		Class Name: <?php echo $class['name'] ?><br>
		CLass Desc: <?php echo $class['desc'] ?><br>
		Number of Users: <?php echo $class['users'] ?><br>
		Related Courses: <?php echo implode(', ', $class['related_courses']); ?>
		<hr>
		<?php endforeach ?>
	</div>
</div>