<!DOCTYPE html>
<?php $thisPage="port"; ?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Portfolio</title>
		<link rel="stylesheet" href="css/long-scrolly.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Source+Sans+Pro">
	</head>
		<!-- Navigation -->
		<?php include "inc/nav.inc";?>
	<body>
		<section class="main-content">
			<div id="column1">
				<h1>WordPress</h1>
				<p id="p1"><a href="http://urcsc174.org/gchen/lab11/wordpress/"><img src="images/tn1.png" alt="logo" class=".img-responsive"></a></p>
				<p>This is a simple website I made for my lab, in which I played with MySQL and the WordPress.</p>
			</div>

			<div id="column2">
				<h1>Pokemon Wiki</h1>
				<p id="p2"><a href="http://urcsc170.org/mchen/project1/"><img src="images/tn2.png" alt="logo" class=".img-responsive"></a></p>
				<p>I wrote the codes for current page highlight and the slide show for this website.</p>
			</div>

			<div id="column3">
				<h1>Customer Website</h1>
				<p id="p3"><a href="http://urcsc170.org/mchen/project2/"><img src="images/tn3.png" alt="logo" class=".img-responsive"></a></p>
				<p>I improved the slide show in this website by adding swipe gestures support for the mobile devices.</p>
			</div>
		</section>
	</body>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="http://codegena.com/assets/js/image-preview-for-link.js"></script>
	<link href="http://codegena.com/assets/css/image-preview-for-link.css" rel="stylesheet">     
	<script type="text/javascript">
		$(function() {
			$('#p1 a').miniPreview({ prefetch: 'pageload' });
			$('#p2 a').miniPreview({ prefetch: 'parenthover' });
			$('#p3 a').miniPreview({ prefetch: 'none' });
		});
	</script> 
</html>