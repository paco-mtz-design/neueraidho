<?php

/*
Header Template
Neue Raidho Website
*/

global $bclass;

?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content=" ">
	<meta name="author" content=" ">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/leitura/MyFontsWebfontsKit.css">
	<link rel="stylesheet" type="text/css" href="fonts/decima/MyFontsWebfontsKit.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
	<script src="js/masonry.pkgd.js"></script>
	<script src="js/imagesloaded.pkgd.js"></script>
	<script src="js/scripts.js"></script>
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

		$(".fancybox").fancybox({
			prevEffect	: 'false',
			nextEffect	: 'false',
			maxHeight	: 700,
			fitToView	: true,
			width		: '100%',
			arrows		: false,
			autoSize	: false,
			closeBtn	: false,
			closeClick	: false,
			openEffect	: 'fade',
			closeEffect	: 'fade'
		});

	</script>

</head>

<body <?php echo 'class="'.$bclass.'"'; ?> >

	<header>

		<div class="wrap">
			<h3 id="nav_logo"><span><img src="img/simbolo_raidho.svg"></span><a href="index.html" title="Raidho"><img src="img/logo-raidho.svg"></a></h3>

			<a id="mobile_nav_toggl" class="Decima" href="#">&#9776;</a>
			<script>
				$(document).ready(function() {
					$('#mobile_nav_toggl').click(function(e) {
						$(this).toggleClass('active');
						$('#nav').toggleClass('active');
						e.preventDefault();
					});
				});
			</script>

			<ul id="nav" class="Decima">
				<li><a href="index.php">Home</a></li><li>
				<a href="about.php">About</a></li><li>
				<a href="work.php">Work</a></li><li>
				<a href="services.php">Services</a></li><li>
				<a href="recent.php">Recent</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			<ul id="dev_nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="work.php">Work</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="recent.php">Recent</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="work-single.php">S-Project</a></li>
				<li><a href="blog-single.php">S-Blog</a></li>
				<li><a href="log-single.php">S-Log</a></li>
			</ul>

		</div>

	</header>
