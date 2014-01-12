
                  
<br>

<div style="row">
	<div class="large-2 small-12 columns">
		<div class="panel">
			<ul class="side-nav nav-bar vertical">
				<a href="classes/create_class" class="button [radius round]">New Class</a>
				<li><strong>Courses</strong></li>
				<li><a href="classes">All</a></li>
				<?php foreach($courses as $course): ?>
				<li><a href="classes/view_classes/<?php echo $course['id'] ?>"><?php echo $course['name'] ?></a></li>
				<?php endforeach ?>
			</ul>
		</div>

	</div>



	<div class="large-10  columns">
		
		<div class="row">
			<h1 class="welcome_text">Classes</h1>
		</div>
		<hr>

		<div class="row">
			<ul class="large-block-grid-4 medium-block-grid-3 ">
				<?php foreach($classes as $class): ?>
				<li>
			  <!--  <div class="large-4 medium-6 small-12 columns "> -->
			     <a href="classes/view_class_info/<?php echo $class['id'] ?>">
				      <div class="thumbnail panel panel-default">
					      	<!-- Image here-->
					        <img src="//placehold.it/1000x600" class="img-responsive">
					        <div class='box_fluid_inner'>
			                    <h5><strong><?php echo $class['name'] ?></strong></h5>
			                    <p><?php echo $class['desc'] ?></p>
			                </div>
			                <div class="box_comment"><strong><?php echo $class['course'] ?></strong></div>
					         <div class="box_comment">
				                 <span class="glyphicon glyphicon-heart"><?php echo $class['points'] ?></span> 
				                 <span class="glyphicon glyphicon-user" style="margin-left:15px"><a href="#"><?php echo $class['users'] ?></a></span>
				                 <span class="glyphicon glyphicon-comment" style="margin-left:15px"><a href="#">5</a></span>
				             </div> 
				       </div><!--.thumbnail-->
			     </a>
			   </li>
			<!--	</div>columns-->
			 <?php endforeach ?>
			</ul>
		</div><!--row-->
	</div><!--columns-->
</div>
