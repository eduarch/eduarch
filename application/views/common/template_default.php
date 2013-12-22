<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
<head>
	<base href="<?php echo base_url(); ?>"></base>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $this->layout->view_title() ?> - EduArch</title>
	<link rel="stylesheet" href="css/bootstrap-glyphicons.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/foundation.min.css">
	<link rel="stylesheet" href="css/app.css">
	<script src="js/modernizr.js"></script>
<?php $this->layout->view_top() ?>
</head>
<body>
<?php $this->layout->view_header() ?>
<?php $this->layout->view_message() ?>
	<section style="margin-top: 20px;">
<?php $this->layout->view_contents() ?>
	</section>
<?php $this->layout->view_footer() ?>
	<script src="js/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script type="text/javascript">
	$(document).foundation();
	</script>
	<script src="js/holder.js"></script>
	<script src="js/socket.io.min.js"></script>

	<!-- must be the last script to run -->
	<script src="js/app.js"></script>
<?php $this->layout->view_bottom()?>
</body>
</html>