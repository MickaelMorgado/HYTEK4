<!DOCTYPE html>
<?php 
	$error_reporting = 0;
	include('dbConnection.php');
?>
<html>
<head>
	<title>ElementarY</title>
	<meta name="theme-color" content="#224455">
	<link rel="icon" href="hyteklogo.jpg" type="image/jpg">
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="width=device-width" />

	<?php include('dependencies/styles.php') ?>
	<?php include('dependencies/scripts.php') ?>

	<style></style>
</head>
<body>
	<!--?php include('dependencies/phpfunctions.php') ?-->
	<div class="container-fluid">
		<div class="row masonry-container">
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/clock.php'); ?>
					<div class="glass"></div>
				</div>
				<div class="element">
																			<?php include('apps/notes.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/link-list.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/files.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 item">
				<div class="element"  style="height:300px;">
																			<?php include('apps/youtubeminiplayer.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/cookie-login.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element" style="height:150px;">
																			<?php include('apps/meteo.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/shooters.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-2 item">
				<div class="element">
																			<?php include('apps/settings.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="dock text-center">
					<ul class="list-inline">
						<li><a href="http://gmail.com/"><img class="dock-icon" src="dependencies/img/1.png" alt=""></a></li>
						<li><a href="http://facebook.com"><img class="dock-icon" src="dependencies/img/2.png" alt=""></a></li>
						<li><a href="http://youtube.com"><img class="dock-icon" src="dependencies/img/3.png" alt=""></a></li>
						<li><a href="http://play.spotify.com/collection/songs"><img class="dock-icon" src="dependencies/img/4.png" alt=""></a></li>
						<li><a href="http://twitter.com"><img class="dock-icon" src="dependencies/img/5.png" alt=""></a></li>
						<li class="dock-aspect"><div class="glass"></div></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<!--script src="http://listjs.com/no-cdn/list.js"></script-->
	<script><?php include('dependencies/js/main.js'); ?></script>
	<script>

	
		<?php if (!isset($_SESSION['name'])) : ?>

			$loginInput = $('#user_email');
			$loginInput.focus();
		
		<?php endif ?>
	</script>
</body>
</html> 