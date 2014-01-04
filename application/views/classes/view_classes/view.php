<br>
<div class="maxed-width row">
	<div class="medium-4 columns">
		<ul class="side-nav">
			<li><a href="classes">All</a></li>
			<?php foreach($courses as $course): ?>
			<li><a href="classes/view_classes/<?php echo $course['id'] ?>"><?php echo $course['name'] ?></a></li>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="medium-8 columns">
		<?php foreach($classes as $class): ?>
		Class ID: <?php echo $class['id'] ?><br>
		Class Name: <a href="classes/view_class_info/<?php echo $class['id'] ?>"><?php echo $class['name'] ?></a><br>
		CLass Desc: <?php echo $class['desc'] ?><br>
		Class Image: <?php echo $class['image'] ?><br>
		Class Points: <?php echo $class['points'] ?><br>
		Mentor: <?php echo $class['user_fname'], ' ', $class['user_lname'] ?><br>
		Course: <?php echo $class['course'] ?><br>
		Number of Users: <?php echo $class['users'] ?><br>
		Related Courses: <?php echo implode(', ', $class['related_courses']); ?>
		<hr>
		<?php endforeach ?>

		<?php if(empty($classes)): ?>
		<div><em>No classes in this course yet</em></div>
		<?php endif ?>
	</div>
</div>
