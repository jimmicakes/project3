<!DOCTYPE html>
<?php $thisPage="resume"; ?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Resume</title>
		<link rel="stylesheet" href="css/long-scrolly.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Source+Sans+Pro">
	</head>
		<!-- Navigation -->
		<?php include "inc/nav.inc";?>
	<body>
		<!-- Top Section -->
		<section id="first">
			<div class="container">
				<h1>Jimmi Chen</h1>
				<div class="content">
					<p>Orginally born in China, I came to the US at the age of 15. I'm currently studying financial economics and computer science in the University of Rochester. I am fluent in both English and Chinese.</p>
					<a href="#second"><em>More About Me</em></a>
				</div><!-- .content -->
			</div><!-- .container -->
		</section>

		<!-- Second Section -->
		<section id="second">
			<div class="container">
				<h1>Education</h1>
				<div class="content">
					<img src="images/ur.png" alt="U of R" class="img-shrink">
					<h3><a href="https://www.rochester.edu/">University of Rochester</a></h3>
					<h4>Bachelor of Arts in Financial Economics and Minor in Computer Science</h4>
					<p>The University of Rochester, founded in 1850, is one of the nation's leading private universities. With just over 4,500 undergraduates, Rochester is one of the smallest and most collegiate in character among the top research universities in the nation.</p>
					<img src="images/gca.jpg" alt="GCA" class="img-shrink">
					<h3><a href="http://www.gcali.com/">Grace Christian Academy</a></h3>
					<p>This is the high school I went to. I graduated as the top 10 percent of the class.</p>
				</div>
				<a href="port.php"><em>Portfolio</em></a>
				<a href="contact.php"><em>Contact Me</em></a>
			</div>
		</section>
		<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
		<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script>
		// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
		//          https://css-tricks.com/snippets/jquery/smooth-scrolling
		$(function() {
			$('a[href*="#"]:not([href="#"])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html, body').animate({
							scrollTop: target.offset().top
						}, 250);
					return false;
					}
				}
			});
		});
		</script>
	</body>
</html>