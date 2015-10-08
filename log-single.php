<?php

/*
Single Log Template
Neue Raidho Website					:	10%
*/

include "templates/header.php";
?>

<div class="wrap">

	<div class="log_single_wrap">
		<div>
			<img src="http://lorempixel.com/640/640/technics">
		</div>
		<div>
			<h4>#Linda #Dinosaurios #Coder</h4>
			<p>Posted on Instagram</br> 24/04/2014</p>
			<ul class="share_btns squared_btns">
				<li><a href="#">Post to Facebook</a></li>
				<li><a href="#">Post to Twitter</a></li>
				<li><a href="#">Pin this</a></li>
				<li><a href="#">Copy URL</a></li>
			</ul>
		</div>
	</div>

</div>

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
