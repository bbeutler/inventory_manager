<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Inventory Manager</title>    
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/styles.css">
	<link rel="stylesheet" href="/assets/css/tipsy.css">
	<link rel="stylesheet" href="/assets/css/jquery.dataTables.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/jquery.tipsy.js"></script>
	<script src="/assets/js/scripts.js"></script>
	<script src="/assets/js/jquery.dataTables.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="/assets/img/logo.jpg" class="logo">

<!-- 			<div class="menu">
				<ul>
					<li><a href="#">Inventory</a></li>
					<li><a href="#">Log Out</a></li>
				</ul>
			</div> -->
		</div>


    	<?php echo $this->template->yield(); ?>

    	<div class="footer">
    		<p>Designed and Developed by <b>Brandon Diaz</b></p>
    	</div>

    	<?php // Load Modal Windows ?>
    	<? include 'application/views/modals/add_inventory.php'; ?>
    	<? include 'application/views/modals/edit_inventory.php'; ?>
	</div>
</body>
</html>
