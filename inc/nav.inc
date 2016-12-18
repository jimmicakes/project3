<nav class="main-menu">
	<ul id="nav">
		<li class="logo"><a href="index.php"><img src="images/logo.png" alt="logo"></a></li>
		<li<?php if ($thisPage == "resume") echo " id=\"currentPage\""; ?>><a href="index.php">Resume</a></li>
		<li<?php if ($thisPage == "port") echo " id=\"currentPage\""; ?>><a href="port.php">Portfolio</a></li>
		<li<?php if ($thisPage == "contact") echo " id=\"currentPage\""; ?>><a href="contact.php">Contact</a></li>
	</ul>
</nav>
