<?php

/*
Home Template
Neue Raidho Website
*/

include "templates/header.php";

?>
	<section class="home_cover phone_hide">
		<div class="wrap">
			<div class="home_cover_info">
				<h1 class="white">Raidho is a Mexican Design Firm focused in creating compelling narratives, readable through brands and interactive media.</h1>
			</div>
		</div>
		<div class="transp_back_image" style="background-image: url(img/home_cover_back.jpg)"></div>
	</section>

	<section class="feat_project phone_hide">
		<div class="wrap">
			<div class="feat_project_info">
				<h2><span class="white phone_hide">Featured Project:</span> Brand Redesign for Major Hospital ABC.</h2>
				<p class="Decima">After more than 25 years without a major brand redesign, we had the opportunity to completely revamp the brand and visual identity for this 120 years old hospital.</p>
				<p class="Decima white"><a href="#">Read the full story →</a></p>
			</div>
		</div>
		<div class="transp_back_image" style="background-image: url(img/featured_single.jpg)"></div>
	</section>

	<section class="gray_light_bg phone_hide">
		<div class="wrap">
			<?php include 'templates/slider_bullets.php'; ?>
		</div>
	</section>

	<section id="loader" class="wrap">
		<h2 class="Decima">Recent Activity</h2>
		<ul class="log masonry">
			<!-- Masonry gutter sizer -->
			<li class="masonry_gutter"></li>
			<!-- Masonry columnWidth sizer -->
			<li class="masonry_column"></li>
			<!-- Masonry items -->
			<li class="dribble masonry_item">
				<a href="#"><img src="http://lorempixel.com/400/300/technics"></a>
				<p>Logo Nocturno</p>
			</li>
			<li class="instagram masonry_item">
				<a href="#"><img src="http://lorempixel.com/400/400/technics"></a>
				<p>Good Times; almost 2 years [Nov 2012] photo by @ Rotten</p>
			</li>
			<li class="share masonry_item">
				<a href="#"><img src="http://lorempixel.com/400/200/technics"></a>
				<p>Dâ Wearhouse’s new collection: Partners in Crime is now online</p>
			</li>
			<li class="twitter masonry_item">
				<div class="red_bg white">
					<blockquote class="small_title">Charles Eames said: “Eventually everything connects – People, Ideas, Objects. The quality of the connections is the key to quality per se.”</blockquote>
				<p><a href="#">Twitted by Quiroga</a></p>
				</div>
			</li>
			<li class="work masonry_item">
				<a href="#"><img src="http://lorempixel.com/400/400/technics"></a>
				<p><a href="#"><span class="red">New Project:</span> Explainer video for Colombian Tech Bootcamp Make it Real.</a></p>
			</li>
			<li class="blog masonry_item">
				<a href="#"><img src="http://lorempixel.com/400/400/technics"></a>
				<p>Residente: El Potencial de Fundidora</p>
			</li>
			<li class="instagram masonry_item">
				<a href="#"><img src="http://lorempixel.com/400/400/technics"></a>
				<p>#Linda #Dinosaurios #coder</p>
			</li>
			<li class="dribble masonry_item">
				<a href="#"><img src="http://lorempixel.com/400/300/technics"></a>
				<p>New Homepage Quick Test</p>
			</li>
			<li class="share masonry_item">
				<a href="#"><img src="http://lorempixel.com/400/300/technics"></a>
				<p>Rides for cash: ¿When will my bike pay for itself?</p>
			</li>
		</ul>
	</section>

<?php

/*
Extended Nav + Footer
*/

include "templates/extended_nav.php";
include "templates/footer.php";

?>
