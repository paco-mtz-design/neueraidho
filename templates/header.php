<?php

/*
Header Template
Neue Raidho Website
*/

?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content=" ">
	<meta name="author" content=" ">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsivemenu.css">
	<link rel="stylesheet" type="text/css" href="fonts/leitura/MyFontsWebfontsKit.css">
	<link rel="stylesheet" type="text/css" href="fonts/decima/MyFontsWebfontsKit.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/masonry.pkgd.js"></script>
	<script src="js/imagesloaded.pkgd.js"></script>
	<script type="text/javascript">
		$(function () {
		    $("#slider1").responsiveSlides({
			    pager: false,
			    auto: false,
				prevText: "-",
				nextText: "-", 
			    nav: true,
				manualControls: '#slider1-pager'
			});

			$("#slider2").responsiveSlides({
			    pager: false,
			    auto: false,
				prevText: "-",
				nextText: "-", 
			    nav: true,
				manualControls: '#slider2-pager'
			});
			
			$("#slider3").responsiveSlides({
			    pager: false,
			    auto: false,
				prevText: "-",
				nextText: "-", 
			    nav: true,
				manualControls: '#slider3-pager'
			});
		});
	</script>
</head>

<body>

	<header>

		<div class="wrap">
			<h3 id="nav_logo">RAIDHO</h3>

			<ul id="nav" class="Decima">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="work.php">Work</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="recent.php">Recent</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>

		</div>

	</header>
