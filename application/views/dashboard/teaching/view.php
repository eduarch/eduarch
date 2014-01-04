<div class="row" style="max-width: 100%;">
	<div class="medium-2 columns">
		<?php $this->load->view('dashboard/sidebar') ?>
	</div>
	<div class="medium-10 columns">
		<br>
		<div id="main_content">
			<?php foreach($classes as $class): ?>
			Class ID: <?php echo $class['id'] ?><br>
			Class Name: <?php echo $class['name'] ?><br>
			Class Desc: <?php echo $class['desc'] ?><br>
			Class Image: <?php echo $class['image'] ?><br>
			Class Points: <?php echo $class['points'] ?><br>
			Mentor: <?php echo $class['first_name'], ' ', $class['last_name'] ?><br>
			Course: <?php echo $class['course'] ?><br>
			Related Courses: <?php echo implode(', ', $class['related_courses']) ?>
			<hr>
			<?php endforeach ?>
		</div>
	</div>
</div>