<!DOCTYPE html>
<html>
<head>
	<title>ElementarY</title>
	<link rel="icon" href="https://lh3.googleusercontent.com/-UhiNRhND2Ac/UvtXfOIZTbI/AAAAAAAAAdo/1ZTaCtlTsOYck5ADKhFgolv2JLjridn-A/s640-no/H%2Bart%2Bchannel%2B640x640.jpg" type="image/jpg">
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<link href="dependencies/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="elementary/stylesheets/styles.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="dependencies/js/jquery-2.1.3.min.js"></script>
	<script src="dependencies/js/bootstrap.min.js"></script>
	<script src="dependencies/js/list.min.js"></script>
	<script src="dependencies/js/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" type="text/javascript"></script>
	<style></style>
</head>
<body id="bganim">

	<?php include('dbConnection.php') ?>
	<!--?php include('dependencies/phpfunctions.php') ?-->

	<?php 
		//echo $_SESSION["id_session"]; 
	?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="element">
																			<?php include('apps/clock.php'); ?>
					<div class="glass"></div>
				</div>
				<div class="element">
																			<?php include('apps/notes.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="element">
																			<?php include('apps/link-list.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="element">
																			<?php include('apps/files.php'); ?>
					<div class="glass"></div>
				</div>
				<div class="element">
																			<!--?php include('apps/socio.php'); ?-->
																			<?php include('apps/youtubeminiplayer.php'); ?>
					<div class="glass"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="element">
																			<?php include('apps/cookie-login.php'); ?>
					<div class="glass"></div>
				</div>	
			</div>		
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="element">
																			<?php include('apps/shooters.php'); ?>
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
						<li><a href="http://gmail.com/"><img class="dock-icon" src="https://pbs.twimg.com/profile_images/638751551457103872/KN-NzuRl.png" alt=""></a></li>
						<li><a href="http://facebook.com"><img class="dock-icon" src="http://www.gmafiaagency.com.br/wp-content/uploads/2013/07/iconefacebook-300x300.png" alt=""></a></li>
						<li><a href="http://youtube.com"><img class="dock-icon" src="http://static.wixstatic.com/media/324cb8_b2f30590c6634940b2521bdf25b4906f.png" alt=""></a></li>
						<li><a href="http://play.spotify.com"><img class="dock-icon" src="http://dn-musicianguide.qbox.me/wp-content/uploads/2014/01/spotify-icon-1.jpg" alt=""></a></li>
						<li><a href="http://twitter.com"><img class="dock-icon" src="http://www.bartoliniemauri.com/img/social/twitter.jpg" alt=""></a></li>
						<li class="dock-aspect"><div class="glass"></div></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<script>


	$(document).ready(function(){
		bgr();
		function bgr() {
			var color = '#'+(Math.random()*0xFFFFFF<<0).toString(16);
			$('html head style').html("body{background:"+color+"}.clock,.link-list{color:"+color+"}");
			//console.log(color);
		}
		setInterval(function(){
			bgr();
		},5000);
	});

	</script>


</body>
</html> 