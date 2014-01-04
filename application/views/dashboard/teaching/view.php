<div class="row" style="max-width: 100%;">
	<div class="medium-2 columns">
		<?php $this->load->view('dashboard/sidebar') ?>
	</div>
	<div class="medium-10 columns">
		<br>
		Teaching<hr>
		<div id="main_content">
			<?php foreach($classes as $class): ?>
			Class ID: <?php echo $class['id'] ?><br>
			Class Name: <?php echo $class['name'] ?><br>
			Class Desc: <?php echo $class['desc'] ?><br>
			Class Image: <?php echo $class['image'] ?><br>
			Class Points: <?php echo $class['points'] ?><br>
			Number of Users: <?php echo $class['users'] ?><br>
			Course: <?php echo $class['course'] ?><br>
			Related Courses:
				<?php foreach($class['related_courses'] as $course): ?>
					<a class="label" href="classes/view_classes/<?php echo $course['id'] ?>"><?php echo $course['name'] ?></a>
				<?php endforeach ?>
				<hr>
			<?php endforeach ?>
		</div>
	</div>
</div>