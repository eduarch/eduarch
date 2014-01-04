<br>
<a href="classes">&lt;&lt;Back to Classes</a>
<div class="row">
	<div class="small-4 small-centered boxed columns">
		Class ID: <?php echo $id ?><br>
		Class Name: <?php echo $name ?><br>
		Class Desc: <?php echo $desc ?><br>
		Class Image: <?php echo $image ?>
		Class Points: <?php echo $points ?><br>
		Mentor: <?php echo $user_fname, ' ', $user_lname ?><br>
		Course: <?php echo $course ?><br>
		Number of Users: <?php echo $users ?><br>
		Related Courses:
		<?php foreach($related_courses as $course): ?>
		<a href="classes/view_classes/<?php echo $course['id'] ?>" style="margin-right: 5px" class="label radius">
			<?php echo $course['name'] ?>
		</a>
		<?php endforeach ?>
	</div>
</div>