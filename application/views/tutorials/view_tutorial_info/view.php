<div class="maxed-width row">

	<div class="small-3 columns">
		Class ID: <?php echo $class['id'] ?><br>
		Class Name: <?php echo $class['name'] ?><br>
		Class Image: <?php echo $class['image'] ?><br>
		<hr>
		Tutorial ID: <?php echo $tutorial['id'] ?><br>
		Tutorial Name: <?php echo $tutorial['title'] ?><br>
		Tutorial Desc: <?php echo $tutorial['desc'] ?><br>
	</div>

	<div class="small-9 columns">
		<?php echo $tutorial_page['id'] ?><br>
		<?php echo $tutorial_page['title'] ?><br>
		<?php echo $tutorial_page['content'] ?><br>
	</div>
	<?php $this->layout->pagination() ?>

</div>