<?php

/*
Footer Template
Neue Raidho Website
*/

?>
	<footer>
		<div class="wrap">
			<h2 class="Decima">Good Design is Good Business.</h2>
			<ul>
				<li>Maurice Ravel 270 <br>
					Colinas de San Jerónimo.<br>
					Monterrey N.L. México<br>
					64630
				</li>
				<li>
					<span class="phone_hide">Mail:</span> <a class="red" href="mailto:info@raidho.mx">info@raidho.mx</a><br>
					<span class="phone_hide">Phone:</span> <a class="red" href="">+52 81 8333 8920</a><br>
					<span class="phone_hide">Skype:</span> <span class="red">raidho.st</span><br>
				</li>
				<li>
					<div>
						<span><a href="#">Behance</a></span>
						<span><a href="#">Facebook</a></span>
						<span><a href="#">Instagram</a></span>
						<span><a href="#">Dribbble</a></span>
						<span><a href="#">Twitter</a></span>
					</div>
				</li>
			</ul>
			<p class="Leitura foot_notice">All rights reserved ©Raidho 2015<br>
			See our Privacy Statement (<i><a href="#">ver el Aviso de Privacidad</a></i>).
			</p>
	</div>
	</footer>

	<script type="text/javascript">

		// Masonry activation + imagesLoaded with jQuery
		var $container = $('.masonry');
		// initialize Masonry after all images have loaded
		$container.imagesLoaded( function() {
		  $container.masonry({
			columnWidth: '.masonry_column',
			gutter: '.masonry_gutter',
			itemSelector: '.masonry_item'
			});
		});

		// LAZY LOAD APPLIED
			// HOME
			$("ul.log > li").addClass("hidden_element");
			// ABOUT
			$("#about > div, #about .people_founders > div, #about .people_team > div ").addClass("hidden_element");
			$("#about > div:nth-child(1), #about .wrap .section_pad").removeClass("hidden_element");
			// WORK
			$("#recent_work > .project_wrapper .bl-party-three-w-captions ul > li").addClass("hidden_element");
			$("#recent_work > .project_wrapper .bl-party-four-w-captions ul > li").addClass("hidden_element");
			// RECENT
			$("#loader ul.log > li:nth-child(-n+5)").removeClass("hidden_element");
	</script>

</body>

</html>
