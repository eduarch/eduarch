<br>
<a href="classes">&lt;&lt;Back to Classes</a>
<div class="row">
	<div class="small-4 small-centered boxed columns">
		Class ID: <?php echo $class['id'] ?><br>
		Class Name: <?php echo $class['name'] ?><br>
		Class Desc: <?php echo $class['desc'] ?><br>
		Class Image: <?php echo $class['image'] ?><br>
		Class Points: <?php echo $class['points'] ?><br>
		Mentor: <?php echo $class['user_fname'], ' ', $class['user_lname'] ?><br>
		Course: <?php echo $class['course'] ?><br>
		Related Courses: <?php echo implode(', ', $class['related_courses']) ?>
	</div>
</div>