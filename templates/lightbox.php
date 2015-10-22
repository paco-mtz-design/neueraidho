<?php

/*
Home Template
Neue Raidho Website
*/

include "templates/header.php";

?>

<section class="lightbox" id="1">
	<div class="wrap">

		<button class="prev_btn" onclick="$.fancybox.prev(true)"/></button>

		<div class="feature-image"> <!-- Instagram Image -->
			<img src="http://lorempixel.com/430/430/business" alt="yesyes" with="660" height="660">
		</div>

		<div class="content">
			<div class="tags"></div>
			<div class="info"></div>
			<div class="social">
				<ul>
					<li><a href="#">Post to Facebook</a></li>
					<li><a href="#">Post to Facebook</a></li>
					<li><a href="#">Post to Facebook</a></li>
					<li><a href="#">Post to Facebook</a></li>
				</ul>
			</div>
		</div>

		<button class="close_btn" onclick="$.fancybox.close(true)" /></button>
		<button class="next_btn" onclick="$.fancybox.next(true)"/></button>
	</div>
</section>

<section class="lightbox" id="1">
	<div class="wrap">

		<button class="prev_btn" onclick="$.fancybox.prev(true)"/></button>

		<div class="feature-image"> <!-- Instagram Image -->
			<img src="http://lorempixel.com/430/430/business" alt="yesyes" with="660" height="660">
		</div>

		<div class="content">
			<div class="tags"></div>
			<div class="info"></div>
			<div class="social">
				<ul>
					<li><a href="#">Post to Facebook</a></li>
					<li><a href="#">Post to Facebook</a></li>
					<li><a href="#">Post to Facebook</a></li>
					<li><a href="#">Post to Facebook</a></li>
				</ul>
			</div>
		</div>

		<button class="close_btn" onclick="$.fancybox.close(true)" /></button>
		<button class="next_btn" onclick="$.fancybox.next(true)"/></button>
	</div>
</section>

<?php

/*
Extended Nav + Footer
*/

include "templates/footer.php";

?>