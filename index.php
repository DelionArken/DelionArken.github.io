﻿<!doctype html>
<script src="js/functions.js"></script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
<script type='text/javascript' src='js/jquery.ba-hashchange.min.js'></script>
<script src="js/dynamicpage.js"></script>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Saerilian Landing</title>
</head>
<body>
	<?php include "header.php" ;?>
	<div id="page-wrap">
		<section id="main-content">
			<div id="content">
				<div class="buttons">
					<div id="ScrollBtn" class="top_button"><img src="arrow-right.png" alt="Up" width="32" style="transform: rotate(-90deg); margin: 14px; position: relative; filter: brightness(0%) invert(100%)" /></div>
				</div>
				<div id="sidepanel" class="side-panel">
					<div id="sidepanel-container">
						<div class="side-container" style="background-image: url(placeholder-image.png)">Project 1</div>
						<div class="side-container" style="background-image: url(placeholder-image.png)">Project 2</div>
					</div>
					<a class="menu-toggle" id="side-toggle" style="display:inline-block; position: absolute; top: 0; right: -5rem; cursor: pointer">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
				</div>
				<div id="cont0" class="container">
					<div style="width: 506px; height: 115px; margin-left: 10%; padding-top: 5%">
						<h1>Welcome to The Gallery</h1>
						<div class="title-text">Here you will find completed projects and ideas</div>
					</div>
					<div style="position: absolute; left: 50%; top: 80%">
						<input id="start" type="button" value="Scroll down or click here to explore" class="explore" />
						<div style="top: 92%">
							<img class="animated" src="arrow-right.png" alt="Down" width="64" style="transform: rotate(90deg); position: relative; left: -50%; display: block; margin: auto;" />
						</div>
					</div>
				</div>
				<div id="cont1" class="container">
					<div class="image-holder" style="background-image: url(placeholder-image.png)">
						<div class="triangle"></div>
					</div>
					<div style="display: table; left: 85%; position: relative; top: 49%;">
						<input id="cont1_see" type="button" value="See More" class="see-more" />
						<img class="animated" src="arrow-right.png" alt="Down" width="50" style="position: relative;display: table-cell; margin: auto; vertical-align: middle;" />
					</div>

					<div style="width: 506px; margin-left: 17%; padding-top: 5%; position: relative">
						<h1>Project 1</h1>
						<span class="horizontal-line"></span>
						<div id="cont1_tags" style="min-height: 3px; padding-left: .5rem;">
							<div style="background-image: url(https://www.w3.org/html/logo/badge/html5-badge-h-solo.png)" class="tag-image"></div>
							<div style="background-image: url(cpp_logo.svg)" class="tag-image"></div>
						</div>
						<span class="horizontal-line"></span>
						<div id="cont1_content" class="project-text">
							This is the project's short description.
						</div>
					</div>

					<!--<span class="horizontal-line"></span>-->
				</div>
			</div>
		</section>
		<div class="footer">
			<div style="text-align:right; margin-right: 5rem; margin-top: 1rem;">
				Dèlion Arken<br />
				delion@saeril.net<br />
				+358 40 xxx xxxx
			</div>
		</div>
	</div>
	<script>
		//Get the button:
		mybutton = document.getElementById("ScrollBtn");
		sidepanel = document.getElementById("sidepanel");

		var CurrentContainer = 0;
		document.getElementById("start").addEventListener("click", startFunction.bind(null));
		document.getElementById("ScrollBtn").addEventListener("click", doScrolling.bind(null, "#cont0", 600));
		document.getElementById("side-toggle").addEventListener("click", sidepanel_toggle.bind(null));
		document.getElementById("sidepanel-container").addEventListener("mouseleave", sidepanel_toggle.bind(null));
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function () { scrollFunction() };
	</script>
</body>
</html>