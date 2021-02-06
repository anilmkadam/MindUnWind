<!DOCTYPE HTML>

<html>
	<head>
		<title>Mind Unwind</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.php" class="active"><span class="icon fa-home"></span></a></li>
						<li><a href="gallery.php"><span class="icon fa-camera-retro"></span></a></li>
						
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">
						<section id="banner">
							<div class="inner">
								<h1>Feel Inspired !!!</h1>
								<ul class="actions">
									<li><a href="#galleries" class="button alt scrolly big">Continue</a></li>
								</ul>
							</div>
						</section>

					<!-- Gallery -->
					<?php 
					$i=1;
					?>
						<section id="galleries">

							
								<div class="gallery">
									<header class="special">
										<h2>What's New</h2>
									</header>
									<div class="content">
									<?php
										while($i<=10)
										{
									?>
									
										<div class="media">
											<?php echo "<a href='images/fulls/img".$i.".jpg'>
											<img src='images/thumbs/img".$i.".jpg' alt='' title='This right here is a caption.' /></a>"; ?>
										</div>
										<?php $i++; } ?>
									</div>

									<footer>
										<a href="gallery.php" class="button big">Full Gallery</a>
									</footer>
								</div>

						</section>

					
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>