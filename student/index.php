
<?php
	require_once('connect.php');
	$sql="SELECT * FROM table_blogs";
	$sql1="SELECT * FROM table_book";
	$sql2="SELECT * FROM images";
	$result=mysqli_query($con,$sql);
	$res=mysqli_query($con,$sql1);
	$rest=mysqli_query($con,$sql2);

###### Fetch Results From Table ########

	?>
<!doctype html>
<html class="no-js" lang="en">


<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content=""/>
<!-- Document Title -->
<title>Succcess Talks</title>

<!-- StyleSheets -->
<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/color-1.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/transition.css">

<!-- Online Lib -->
<link rel="stylesheet" href="../../../../www.atlasestateagents.co.uk/css/tether.min.css">
<script src="../../../../www.atlasestateagents.co.uk/javascript/tether.min.js"></script>

<!-- Switcher CSS -->
<link href="switcher/switcher.css" rel="stylesheet" type="text/css"/> 
<link rel="stylesheet" id="skins" href="css/default.css" type="text/css" media="all">

<!-- FontsOnline -->
<link href='https://fonts.googleapis.com/css?family=Merriweather:300,300italic,400italic,400,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900italic,900,100italic,100' rel='stylesheet' type='text/css'>

<!-- JavaScripts -->
<script src="js/vendor/modernizr.js"></script>
</head>
<body>

<!-- Wrapper -->
<div class="wrapper push-wrapper">

	<!-- Header -->
	

		<!-- Nav -->
		<nav class="nav-holder style-1">
			<div class="container">
				<img  src="images/banner/successtalks.jpg" style="width: 20%;height: 20%;">
				<!--div class="mega-dropdown-wrapper">

				<h1 style="font-style: italic;">SUCCESS TALKS</h1>
					</div-->
				</div>
			</nav>

		<!--BANNER-->
		<div id="main-slider" class="main-slider">

			<!-- Item -->
			<div class="item">
				<img src="images/banner/bg-1.jpg" alt="">
				<div class="banner-overlay">
					<div class="container p-relative">
						
						<!-- Layer Img -->
						<div class="layer-img">
							<img src="images/banner/layer-1.png" alt="">
						</div>
						<!-- Layer Img -->

						<!-- caption -->
						<div class="caption style-1 position-center-x">
							<h1>Donot Wait for your ship to come in<br>SWIM OUT TO IT...</h1>
							
							<a href="#" class="btn-1">Learn more<i class="fa fa-arrow-circle-right"></i></a> 
						</div>
						<!-- caption -->

					</div>
				</div>
			</div>
			<!-- Item -->

			<!-- Item -->
			<div class="item">
				<img src="images/banner/bg-2.jpg" alt="">
				<div class="banner-overlay">
					<div class="container position-center-center">

						<!-- caption -->
						<div class="caption style-2">
							<h1>Reading a book is like <span>Re Writing it for yourself</span></h1>
							<p>A Cambridge academic claims to have found the first use of a ‘brilliant innovation’ that has endured as a mark of incomplete speech</p>
						</div>
						<!-- caption -->

					</div>
				</div>
			</div>
			<!-- Item -->

		</div>
		<!--BANNER-->

	</header>
	<!-- Header -->

	<!-- Main Content -->
	<main class="main-content">
	<!-- Upcoming Release -->
	<section class="upcoming-release">
	<!-- Book Collections -->
	<section class="book-collection">
			<div class="container">
				<div class="row">
				<!-- Book Collections Tabs -->
					<div id="book-collections-tabs">
					<!-- collection Name -->
						<div class="col-lg-3 col-sm-12">
							<div class="sidebar">
								<h4>Top Books Catagories</h4>
								<ul>
								<li>
									<a href="#">Science</a></li>
									<li><a href="#">Self help</a></li>
									<li><a href="#">Fictional</a></li>
									<li><a href="#">Motivational</a></li>
									<li><a href="#">Inspirational</a></li>
									
								</ul>
							</div>
						</div>
			<!-- collection Name -->
			<div class="col-lg-9 col-sm-12">
				<div class="collection">
							<!-- Secondary heading -->
							<div class="sec-heading">
								<h3><span class="theme-color">Books</span> Collection</h3>
								<a class="view-all" href="#">View All<i class="fa fa-angle-double-right"></i></a>
							</div>
							<!-- Secondary heading -->

						
			<!-- Collection Content -->
			<div class="collection-content">
				 	<?php
						while ($row = mysqli_fetch_assoc($res)) 
									{
									$title=$row['bk_title'];
									$bid=$row['bk_id'];
									$bk_author=$row['bk_img'];
									$website=$row['bk_link'];
									$preview=$row['bk_preview'];
									?>	
			   <ul>
			  

			   	<li>
				<div class="s-product">
					<div class="s-product-img">
						<div class="blog-style-1" style="margin: auto 0">
			            	<?php echo '<div class="gallery"><img height="200px;" width="180px;" src="images/products-collection/img-'.$bid.'.jpg" alt="">
								    <div class="s-product-hover">
									    <div class="position-center-x"><p><a class="btn-1 sm shadow-0" data-toggle="modal" target="_blank" href="'.$preview.'">Quick view</a></p>
									    </div>
						            </div><a href="'.$website.'" target="_black" ><b>'.$title .'</b></a>'.$bk_author.'
						            
						        </div>';
                                     ?>
					        </div>
					    </div>
					</div>

					</li>
					
					</ul>

					<?php 
		        	} 
		        	?>

					</div>
					

				
				
								<!-- Collection Content -->

							</div>
						</div>
						<!-- Collection Content -->

					</div>
					<!-- Book Collections Tabs -->

				</div>
			</div>
		</section>
		<!-- Book Collections --> 

		

		
		<!-- Blog Nd Gallery-->
<section class="tc-padding">
	<div class="container">
        <div class="row">
		      			      	<!-- Blog -->
		        	<!-- Blog -->
		        	<div class="col-lg-4 col-xs-12">

		            <!-- Secondary heading -->
		      		<div class="sec-heading">
		      			<h3>Latest <span class="theme-color">Blog</span> Post</h3>
		      		</div>
		      		<!-- Secondary heading -->

		      		<!-- Blog list -->
		            <div class="blog-style-1">
		            		<?php

							while ($row = mysqli_fetch_assoc($result)) 
							{
							$b_title=$row['blog_title'];
							$b_id=$row['blog_id'];
							$b_author=$row['blog_author'];
							$b_link=$row['blog_img'];
							?>

			             <div class="post-box">
			                <?php echo '<div class="thumb"><img src="images/blog/'.$b_id.'.jpg" alt="" width=150px heigth=120px></div>';?>
			                <div class="text-column"> <strong><i class="fa fa-user" aria-hidden="true"></i><?php echo $b_author;?></strong>
			                <?php echo "<a href='$b_link'target='_blank' >$b_title</a>";?>

			                <span><i class="fa fa-clock-o" aria-hidden="true"></i>3 hour ago</span>
			                <em><i class="fa fa-hart" aria-hidden="true"></i>125</em> </div>
			             </div>
			             <?php 
		        	} 
		        	?>
			             
		            </div>
		            <!-- Blog list -->
		        	</div>

		        
		        	<!-- Blog -->

		        	  	<!-- Gallery -->
		        	<div class="col-lg-8 col-xs-12">
		            <div class="gallery">

		              	<!-- Secondary heading -->
		        		<div class="sec-heading">
		        			<h3>Gallery <span class="theme-color">Bookshop</span></h3>
		        			<a class="view-all" href="../SuccessTalk2/index.php">View All<i class="fa fa-angle-double-right"></i></a>
		        		</div>
		        		<!-- Secondary heading -->

		        		<!-- Gallery List -->
			            <ul>
			                <li >
			                  	<div class="gallery-figure"> 
			                  		<img src="images/gallery/1.jpg" alt="">
			                  		<div class="overlay">
			                  			<ul class="position-center-x">
			                  				<li><a href="#"><i class="fa fa-heart"></i>Likes</a></li>
			                  				<li><a href="images/gallery/1.jpg" data-rel="prettyPhoto[gallery]"></a></li>
			                  			</ul>
			                  		</div>
			                  	</div>
			                </li>
			                <li >
			                  	<div class="gallery-figure">
			                  		<img src="images/gallery/2.jpg" alt="">
			                  		<div class="overlay">
			                  			<ul class="position-center-x">
			                  				<li><a href="#"><i class="fa fa-heart"></i>Likes</a></li>
			                  				<li><a href="images/gallery/2.jpg" data-rel="prettyPhoto[gallery]"></a></li>
			                  			</ul>
			                  		</div>
			                  	</div>
			                </li>
			                <li>
			                  	<div class="gallery-figure">
			                  		<img src="images/gallery/3.jpg" alt="">
			                  		<div class="overlay">
			                  			<ul class="position-center-x">
			                  				<li><a href="#"><i class="fa fa-heart"></i>Likes</a></li>
			                  				<li><a href="images/gallery/3.jpg" data-rel="prettyPhoto[gallery]"></a></li>
			                  			</ul>
			                  		</div>
			                  	</div>
			                </li>
			                <li>
			                  	<div class="gallery-figure">
			                  		<img src="images/gallery/4.jpg" alt="">
			                  		<div class="overlay">
			                  			<ul class="position-center-x">
			                  				<li><a href="#"><i class="fa fa-heart"></i>Likes</a></li>
			                  				<li><a href="images/gallery/4.jpg" data-rel="prettyPhoto[gallery]"></a></li>
			                  			</ul>
			                  		</div>
			                  	</div>
			                </li>
			                <li>
			                  	<div class="gallery-figure">
			                  		<img src="images/gallery/5.jpg" alt="">
			                  		<div class="overlay">
			                  			<ul class="position-center-x">
			                  				<li><a href="#"><i class="fa fa-heart"></i>Likes</a></li>
			                  				<li><a href="images/gallery/5.jpg" data-rel="prettyPhoto[gallery]"></i></a></li>
			                  			</ul>
			                  		</div>
			                  	</div>
			                </li>
			                <li>
			                  	<div class="gallery-figure">
			                  		<img src="images/gallery/6.jpg" alt="">
			                  		<div class="overlay">
			                  			<ul class="position-center-x">
			                  				<li><a href="#"><i class="fa fa-heart"></i>Likes</a></li>
			                  				<li><a href="images/gallery/6.jpg" data-rel="prettyPhoto[gallery]"></a></li>
			                  			</ul>
			                  		</div>
			                  	</div>
			                </li>
			            </ul>
			            <!-- Gallery List -->

		            </div>
		        	</div>
		        	<!-- Gallery -->

		      </div>
		  	</div>
		</section>
		<!-- Blog Nd Gallery--> 

	
	</main>
	<!-- Main Content -->

</nav>
<!-- Slide Menu -->





<!-- Java Script -->
<script src="js/vendor/jquery.js"></script>        
<script src="js/vendor/bootstrap.min.js"></script>
<!--<script src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
<script src="js/gmap3.min.js"></script>					
<script src="js/datepicker.js"></script>					
<script src="js/contact-form.js"></script>					
<script src="js/bigslide.js"></script>							
<script src="js/3d-book-showcase.js"></script>					
<script src="js/turn.js"></script>							
<script src="js/jquery-ui.js"></script>								
<script src="js/mcustom-scrollbar.js"></script>					
<script src="js/timeliner.js"></script>					
<script src="js/parallax.js"></script>			   	 
<script src="js/countdown.js"></script>	
<script src="js/countTo.js"></script>		
<script src="js/owl-carousel.js"></script>	
<script src="js/bxslider.js"></script>	
<script src="js/appear.js"></script>		 		
<script src="js/sticky.js"></script>			 		
<script src="js/prettyPhoto.js"></script>			
<script src="js/isotope.pkgd.js"></script>					 
<script src="js/wow-min.js"></script>			
<script src="js/classie.js"></script>					
<script src="js/main.js"></script>		

<!-- Switcher JS -->
<script type="text/javascript" src="switcher/cookie.js"></script>
<script type="text/javascript" src="switcher/colorswitcher.js"></script>
<!-- Switcher JS -->

</body>
</html>