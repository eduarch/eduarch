<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
<head>
	<base href="<?php echo base_url(); ?>"></base>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php echo $meta ?>
	<title><?php echo $title ?> - EduArch</title>
	<link rel="stylesheet" href="css/bootstrap-glyphicons.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/foundation.min.css">
	<link rel="stylesheet" href="css/foundation-extension.css">
	<link rel="stylesheet" href="css/theseus.css">
	<link rel="stylesheet" href="css/app.css">
	<script src="js/modernizr.js"></script>
<?php echo $assets_top ?>
</head>
<body>
<?php echo $view ?>
	<script src="js/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script type="text/javascript">
	$(document).foundation({
		reveal: {
			animation: 'fade',
			animation_speed: 300,
		}
	});
	</script>
	<script src="js/holder.js"></script>
	<script src="js/socket.io.min.js"></script>

	<!-- must be the last script to run -->
	<script src="js/theseus.js"></script>
	<script src="js/app.js"></script>
	<script src="http://localhost:8080/reloader.js"></script>

	<script type="text/javascript">
		if(typeof(reloader) != 'undefined'){reloader.set({'application': 'eduarch'});}
		theseus.init();
	</script>
<?php echo $assets_bottom ?>
</body>
</html>