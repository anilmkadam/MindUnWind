<!DOCTYPE HTML>

<html>
	<head>
		<title>Mind Unwind Image Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.php"><span class="icon fa-home"></span></a></li>
						<li><a href="gallery.php" class="active"><span class="icon fa-camera-retro"></span></a></li>
						
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">

					<!-- Header -->
						<header id="header">
							<div>Mind <span>Unwind</span></div>
						</header>

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">

									<!-- Filters -->
										<header>
											<h1>Gallery</h1>
											<ul class="tabs">
												<li><a href="#" data-tag="all" class="button active">All</a></li>
												<li><a href="#" data-tag="people" class="button">Life</a></li>
												<li><a href="#" data-tag="place" class="button">Inspirational</a></li>
												<li><a href="#" data-tag="thing" class="button">Moral</a></li>
											</ul>
										</header>

										<div class="content">

											<?php
												$i=1;
												while($i<=4)
												{
											?>
												<div class="media all people">
													<?php echo "<a href='images/fulls/img".$i.".jpg'>
													<img src='images/thumbs/img".$i.".jpg' alt='' title='This right here is a caption.' /></a>"; ?>
												</div>
											<?php $i++; } ?>
												<?php
												$i=5;
												while($i<=8)
												{
											?>
												<div class="media all place">
													<?php echo "<a href='images/fulls/img".$i.".jpg'>
													<img src='images/thumbs/img".$i.".jpg' alt='' title='This right here is a caption.' /></a>"; ?>
												</div>
											<?php $i++; } ?>
											<?php
												$i=9;
												while($i<=12)
												{
											?>
												<div class="media all thing">
													<?php echo "<a href='images/fulls/img".$i.".jpg'>
													<img src='images/thumbs/img".$i.".jpg' alt='' title='This right here is a caption.' /></a>"; ?>
												</div>
											<?php $i++; } ?>
										</div>
										</div>
								</div>
						</section>

					
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>