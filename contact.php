<?php

/*
Home Template
Neue Raidho Website
*/

include "templates/header.php";

?>

<section id="contact">

	<div class="wrap">
		<div>
			<h2 class="Decima">Contact</h2>
			<h1 class="Leitura full_width_message">We are always on the look for <em>meaningful</em>, <em>long-term partnerships</em> with the world’s emerging leaders & entrepreneurs.</h1>
		</div>
		<div class="basic_grid two_col_grid">
			<div>
				<p class="Decima small_title">Visit our office at:<br/><br/>
					Maurice Ravel 270<br/>
					Colinas de San Jerónimo<br/>
					Monterrey, Nuevo León, México<br/>
					64630 </p>
			</div>
			<div>
				<p class="Decima small_title">Drop us a line:<br/><br/>
					Write to <a mailto:'hola@raidho.mx' class="red">info@raidho.mx</a><br/>
					Raidho on
					<a mailto:'hola@raidho.mx' class="red">Behance</a>,
					<a mailto:'hola@raidho.mx' class="red">Facebook</a>,
					<a mailto:'hola@raidho.mx' class="red">Instagram</a>,
					<a mailto:'hola@raidho.mx' class="red">Dribble</a> &
					<a mailto:'hola@raidho.mx' class="red">Twitter</a>.</p>
			</div>
		</div>
	</div>

	<?php // Contact complex ?>
	<?php include "templates/contact_complex.php"; ?>

	<div class="section_bottom_margins">
		<img class="full_width_image" src="http://lorempixel.com/1280/740/technics">
	</div>

	<div class="wrap">
	    <div>
            <p class="blue Decima">Jobs and Opportinitues <span class="replica">→</span></p>
            <p class="Leitura medium_title full_width_message">Great companies are made of great people. Drop us a line if you think Raidho is the right place for you to build your career and meet like-minded creatives.</p>
        </div>
		<div class="basic_grid two_col_grid">
			<div>
				<p class="Decima small_title">Send us your most recent work, along with a nice description of the role you developed to <a mailto:'hola@raidho.mx' class="red">hola@raidho.mx</a></p>
			</div>
			<div>
				<h4 class="Decima small_title">Areas of expertise required:</h4>
				<ul class="small_title Decima bullet_list">
					<li>→ Front End Code & Design</li>
					<li>→ Web Developmnet</li>
					<li>→ Digital Marketing</li>
					<li>→ Interaction Design</li>
				</ul>
			</div>
		</div>
	</div> <!-- Wrap -->

</section>

	<?php include "templates/extended_nav_minus.php"; ?>

	<section class="feat_project">
		<div class="wrap">
			<div class="feat_project_info">
				<h2><span class="white">Featured Project:</span> Brand Redesign for Major Hospital ABC.</h2>
				<p class="Decima">After more than 25 years without a major brand redesign, we had the opportunity to completely revamp the brand and visual identity for this 120 years old hospital.</p>
				<p class="Decima white"><a href="#">Read the full story →</a></p>
			</div>
		</div>
		<div class="transp_back_image" style="background-image: url(img/featured_single.jpg)"></div>
	</section>

<?php include "templates/footer.php"; ?>
