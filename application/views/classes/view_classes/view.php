<!-- Designed and Coded by Jinji Gomez-->

    <div class="large-3 medium-4 small-6 columns">
      <div class="thumbnail panel panel-default">
      	<!-- Image here-->
        <img src="//placehold.it/1000x600" class="img-responsive">
        <div class="caption">
          <h3>Class name</h3>

          <!-- the level of feedbacks-->
          <div class = "row text-center">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star-empty"></span>
            <span class="glyphicon glyphicon-star-empty"></span>

            <!-- link to read the comments or reviews-->
           <span> Reviews</span>
          </div>
          <div class="row">
             <span class="small-6 columns">Rank:
            	<span class="[round radius] label">349</span> 
            </span>
            <span class = "small-6 columns "><span class="glyphicon glyphicon-user">
            	<span class="label">3</span> 
            </span>
           		
          	</span>
          </div>
        </div><!--.caption-->
      </div><!--.thumbnail-->
    </div><!--.responsiveness-->


<!--
<br>
<div class="maxed-width row">
	<div class="medium-4 columns">
		<br><br>
		Courses<hr>
		<ul class="side-nav">
			<li><a href="classes">All</a></li>
			<?php foreach($courses as $course): ?>
			<li><a href="classes/view_classes/<?php echo $course['id'] ?>"><?php echo $course['name'] ?></a></li>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="medium-8 columns">
		<br><br>
		<div class="row">
			<div class="medium-4 columns">Classes</div>
			<div class="medium-8 columns text-right">
				<a href="classes/create_class">New Class</a>
			</div>
		</div><hr>
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
-->
