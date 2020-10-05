<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Inventory Manager</title>    
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/styles.css">
	<link rel="stylesheet" href="/assets/css/tipsy.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/jquery.tipsy.js"></script>
	<script src="/assets/js/scripts.js"></script>
</head>
<body>
	<div class="container">
		<div class="export_header">
			<img src="/assets/img/logo.jpg" class="export_logo">
		</div>
		<center><h1 class="export_title">inventory list <? echo date('M d Y'); ?> </h1></center>
    	<?php echo $this->template->yield(); ?>
	</div>
</body>
</html>
