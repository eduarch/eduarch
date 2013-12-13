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
			<?php $this->load->view('common/template_admin_side_bar'); ?>
		</div>
		<div class="medium-9 columns" id="page_content">
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
	<script src="js/admin.js"></script>
<?php $this->layout->optional_view('assets_bottom'); ?>
</body>
</html>