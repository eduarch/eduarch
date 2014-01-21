<nav class="top-bar" data-topbar>
	<ul class="title-area">
		<li class="name">
			<h1><a href=""><i class="glyphicon glyphicon-home"></i> EduArch</a></h1>
			<li class="toggle-topbar menu-icon"><a>Menu</a></li>
		</li>
		<li></li>
	</ul>

	<section class="top-bar-section">
		<ul class="right">
			<li class="divider"></li>
			<li><a href="classes"><i class="glyphicon glyphicon-book"></i> &nbsp;Classes</a></li>
			<li class="divider"></li>
			<li><a href="works"><i class="glyphicon glyphicon-fire"></i> &nbsp;Works</a></li>
			<li class="divider"></li>
			<li><a href="suggestion_board"><i class="glyphicon glyphicon-pushpin"></i> &nbsp;Suggestion Board</a></li>
			<li class="divider"></li>
			<li><a data-reveal-id="signup-modal" class="lbl hover-icon-round"><span class="lbl icon-round bg-go-green"><i class="glyphicon glyphicon-pencil"></i></span> &nbsp;Sign up</a></li>
			<li class="divider"></li>
			<li><a data-reveal-id="login-modal" class="lbl hover-icon-round"><span class="lbl icon-round bg-toolbox"><i class="glyphicon glyphicon-log-in"></i></span> &nbsp;Login</a></li>
		</ul>
	</section>
</nav>

<?php 
fragment('user/login'); 
fragment('user/sign_up');
?>