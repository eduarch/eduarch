<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
<head>
	<base href="<?php echo base_url(); ?>"></base>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php $this->layout->optional_view('meta'); ?>
	<title><?php echo $this->layout->title; ?> - EduArch</title>
	<link rel="stylesheet" href="css/bootstrap-glyphicons.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/foundation.min.css">
	<link rel="stylesheet" href="css/app.css">
	<script src="js/modernizr.js"></script>
<?php $this->layout->optional_view('assets_top'); ?>
</head>
<body>
<?php $this->layout->view_header(); ?>
<?php $this->layout->message(); ?>

	<div class="row">
		<div class="medium-3 columns">
			<ul class="side-nav">
				<li><h5><strong>Management</strong></h5></li>
				<li>
					<div class="accordion" data-accordion><dd>
					    <a href="#user_account" 
					    	style="background: white; padding: 0;">
					    	<label style="color: #00aaff">
					    		<strong>
					    			<i class="glyphicon glyphicon-chevron-down"></i>
					    			User Account
					    		</strong>
					    	</label>
					    </a>
					    <div id="user_account" class="content" 
					    	style="padding: 0; margin-left: 10px;">
					    	<!-- menu here -->
					    	<ul class="side-nav" style="padding: 0px;">
					    		<li><a href="admin_user/create">Create User Account</a></li>
					    		<li><a href="admin_user/search_update">Search / Update Users</a></li>
					    		<li><a href="admin_user/logs">User Logs</a></li>
					    	</ul>
					    </div>
					</dd></div>
				</li>

				<li>
					<div class="accordion" data-accordion><dd>
					    <a href="#courses" 
					    	style="background: white; padding: 0;">
					    	<label style="color: #00aaff">
					    		<strong>
					    			<i class="glyphicon glyphicon-chevron-down"></i>
					    			Courses
					    		</strong>
					    	</label>
					    </a>
					    <div id="courses" class="content" 
					    	style="padding: 0; margin-left: 10px;">
					    	<!-- menu here -->
					    	<ul class="side-nav" style="padding: 0px;">
					    		<li><a>Create Courses</a></li>
					    		<li><a>Search / Update Courses</a></li>
					    		<li><a>Course Logs</a></li>
					    	</ul>
					    </div>
					</dd></div>
				</li>
				
				<li>
					<div class="accordion" data-accordion><dd>
					    <a href="#classes" 
					    	style="background: white; padding: 0;">
					    	<label style="color: #00aaff">
					    		<strong>
					    			<i class="glyphicon glyphicon-chevron-down"></i>
					    			Classes
					    		</strong>
					    	</label>
					    </a>
					    <div id="classes" class="content" 
					    	style="padding: 0; margin-left: 10px;">
					    	<!-- menu here -->
					    	<ul class="side-nav" style="padding: 0px;">
					    		<li><a>Create Classes</a></li>
					    		<li><a>Search / Update Classes</a></li>
					    		<li><a>Course Logs</a></li>
					    	</ul>
					    </div>
					</dd></div>
				</li>

				<li>
					<div class="accordion" data-accordion><dd>
					    <a href="#rates" 
					    	style="background: white; padding: 0;">
					    	<label style="color: #00aaff">
					    		<strong>
					    			<i class="glyphicon glyphicon-chevron-down"></i>
					    			Rates</strong>
					    	</label>
					    </a>
					    <div id="rates" class="content" 
					    	style="padding: 0; margin-left: 10px;">
					    	<!-- menu here -->
					    	<ul class="side-nav" style="padding: 0px;">
					    		<li><a>Set Rate Standards</a></li>
					    		<li><a>View Rate Equivalents</a></li>
					    	</ul>
					    </div>
					</dd></div>
				</li>

				<li>
					<div class="accordion" data-accordion><dd>
					    <a href="#sessions" 
					    	style="background: white; padding: 0;">
					    	<label style="color: #00aaff">
					    		<strong>
					    			<i class="glyphicon glyphicon-chevron-down"></i>
					    			Sessions
					    		</strong>
					    	</label>
					    </a>
					    <div id="sessions" class="content" 
					    	style="padding: 0; margin-left: 10px;">
					    	<!-- menu here -->
					    	<ul class="side-nav" style="padding: 0px;">
					    		<li><a>Schedule Sessions</a></li>
					    		<li><a>Search / Update Sessions</a></li>
					    		<li><a>Filter Sessions</a></li>
					    		<li><a>Session Logs</a></li>
					    	</ul>
					    </div>
					</dd></div>
				</li>

				<li>
					<div class="accordion" data-accordion><dd>
					    <a href="#contents" 
					    	style="background: white; padding: 0;">
					    	<label style="color: #00aaff">
					    		<strong>
					    			<i class="glyphicon glyphicon-chevron-down"></i>
					    			Contents
					    		</strong>
					    	</label>
					    </a>
					    <div id="contents" class="content" 
					    	style="padding: 0; margin-left: 10px;">
					    	<!-- menu here -->
					    	<ul class="side-nav" style="padding: 0px;">
					    		<li><a>Search Update Contents</a></li>
					    		<li><a>Filter Contents</a></li>
					    		<li><a>Session Logs</a></li>
					    	</ul>
					    </div>
					</dd></div>
				</li>
			</ul>
		</div>
		<div class="medium-9 columns">
			<?php $this->layout->view_content(); ?>
		</div>
	</div>

<?php $this->layout->view_footer(); ?>
	<script src="js/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script type="text/javascript">
	$(document).foundation();
	</script>
	<script src="js/holder.js"></script>
<?php $this->layout->optional_view('assets_bottom'); ?>
</body>
</html>