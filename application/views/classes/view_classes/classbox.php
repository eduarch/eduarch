<div class="large-3 medium-4 small-6 columns">
 <a href="classes/view_class_info/<?php echo $class['id'] ?>">
  <div class="thumbnail panel panel-default">
  	<!-- Image here-->
    <img src="//placehold.it/1000x600" class="img-responsive">
    <div class='box_fluid_inner'>
        <h5><strong><?php echo $class['name'] ?></strong></h5>
        <p><?php echo $class['desc'] ?></p>
    </div>
    <div class="box_comment"><strong><?php echo $class['course'] ?><strong></div>
         <div class="post_meta">
             <span class="glyphicon glyphicon-heart"><?php echo $class['points'] ?></span> 
             <span class="glyphicon glyphicon-user" style="margin-left:15px"><a href="#"><?php echo $class['users'] ?></a></span>
             <span class="glyphicon glyphicon-comment" style="margin-left:15px"><a href="#">5</a></span>
         </div> 
    </div><!--.comment-->
   </div><!--.thumbnail-->
 </a>
</div><!--columns-->