<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Smart Crop Monitoring System</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		// addEventListener("load", function () {
		// 	setTimeout(hideURLbar, 0);
		// }, false);

		// function hideURLbar() {
		// 	window.scrollTo(0, 1);
		// }
	</script>
	<!--// Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/nav.css" rel="stylesheet" type="text/css" media="all" />
	<!-- For-Navigation-CSS -->
	<link href="css/lsb.css" rel="stylesheet" type="text/css" media="all">
	<!-- For-Gallery -->
	<!-- //css files -->
	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
	<!-- //web fonts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script>
	<style>
	.pricing-plans {
		display: none !important;
	}
	</style>
</head>

<body>
	<!-- banner -->
	<div class="banner">
		<div class="banner-top-header">
			<div class="agile1">
				<!-- navigation section -->
				<div class="nav-w3lm">
					<p>
						<button id="trigger-overlay" type="button">
						<img src="images/menu.png" class="img-responsive" alt="menu">

					</button>
					</p>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-boxes">
					<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="101%" viewBox="0 0 1440 806" preserveAspectRatio="none">
						<path d="m0.005959,200.364029l207.551124,0l0,204.342453l-207.551124,0l0,-204.342453z" />
						<path d="m0.005959,400.45401l207.551124,0l0,204.342499l-207.551124,0l0,-204.342499z" />
						<path d="m0.005959,600.544067l207.551124,0l0,204.342468l-207.551124,0l0,-204.342468z" />
						<path d="m205.752151,-0.36l207.551163,0l0,204.342437l-207.551163,0l0,-204.342437z" />
						<path d="m204.744629,200.364029l207.551147,0l0,204.342453l-207.551147,0l0,-204.342453z" />
						<path d="m204.744629,400.45401l207.551147,0l0,204.342499l-207.551147,0l0,-204.342499z" />
						<path d="m204.744629,600.544067l207.551147,0l0,204.342468l-207.551147,0l0,-204.342468z" />
						<path d="m410.416046,-0.36l207.551117,0l0,204.342437l-207.551117,0l0,-204.342437z" />
						<path d="m410.416046,200.364029l207.551117,0l0,204.342453l-207.551117,0l0,-204.342453z" />
						<path d="m410.416046,400.45401l207.551117,0l0,204.342499l-207.551117,0l0,-204.342499z" />
						<path d="m410.416046,600.544067l207.551117,0l0,204.342468l-207.551117,0l0,-204.342468z" />
						<path d="m616.087402,-0.36l207.551086,0l0,204.342437l-207.551086,0l0,-204.342437z" />
						<path d="m616.087402,200.364029l207.551086,0l0,204.342453l-207.551086,0l0,-204.342453z" />
						<path d="m616.087402,400.45401l207.551086,0l0,204.342499l-207.551086,0l0,-204.342499z" />
						<path d="m616.087402,600.544067l207.551086,0l0,204.342468l-207.551086,0l0,-204.342468z" />
						<path d="m821.748718,-0.36l207.550964,0l0,204.342437l-207.550964,0l0,-204.342437z" />
						<path d="m821.748718,200.364029l207.550964,0l0,204.342453l-207.550964,0l0,-204.342453z" />
						<path d="m821.748718,400.45401l207.550964,0l0,204.342499l-207.550964,0l0,-204.342499z" />
						<path d="m821.748718,600.544067l207.550964,0l0,204.342468l-207.550964,0l0,-204.342468z" />
						<path d="m1027.203979,-0.36l207.550903,0l0,204.342437l-207.550903,0l0,-204.342437z" />
						<path d="m1027.203979,200.364029l207.550903,0l0,204.342453l-207.550903,0l0,-204.342453z" />
						<path d="m1027.203979,400.45401l207.550903,0l0,204.342499l-207.550903,0l0,-204.342499z" />
						<path d="m1027.203979,600.544067l207.550903,0l0,204.342468l-207.550903,0l0,-204.342468z" />
						<path d="m1232.659302,-0.36l207.551147,0l0,204.342437l-207.551147,0l0,-204.342437z" />
						<path d="m1232.659302,200.364029l207.551147,0l0,204.342453l-207.551147,0l0,-204.342453z" />
						<path d="m1232.659302,400.45401l207.551147,0l0,204.342499l-207.551147,0l0,-204.342499z" />
						<path d="m1232.659302,600.544067l207.551147,0l0,204.342468l-207.551147,0l0,-204.342468z" />
						<path d="m-0.791443,-0.360001l207.551163,0l0,204.342438l-207.551163,0l0,-204.342438z" />
					</svg>
					<button type="button" class="overlay-close">Close</button>
					<nav>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="#about" class="scroll">About US</a></li>
							<li><a href="#services" class="scroll">Services</a></li>
							<li><a href="#gallery" class="scroll">Gallery</a></li>
							<li><a href="#mail" class="scroll">Mail Us</a></li>
						</ul>
					</nav>
				</div>
				<!-- /open/close -->
				<!-- /navigation section -->
			</div>
			<div class="top-nav">
				<ul>
					<li>+044 6449786</li>
					<li><a href="mailto:info@example.com"> vatsal@gmail.com</a></li>
				</ul>
			</div>
			<div class="search-box">
				<div id="sb-search" class="sb-search">
					<form action="#" method="post">
						<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search" required="">
						<input class="sb-search-submit" type="submit" value="">
						<span class="sb-icon-search"> </span>
					</form>
				</div>
			</div>
		</div>
		<div class="w3layouts_banner_info">
			<section class="wrapper agileits-w3layouts_wrapper_home text-center">
				<h1 class="w3l-logo"><a href="index.php"><i class="fa fa-envira" aria-hidden="true"></i>Crop Monitor</a></h1>
				<p>Smart Crop Monitoring System </p>
				<div class="sentence">
					<div class="popEffect">
						<span>Designing your dream farm </span>
						<span>A smart farm </span>
					</div>
				</div>
			</section>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<div class="about-w3l" id="about">
		<div class="container">
			<h2 class="title-w3l">About <span>Us</span></h2>
			<div class="col-md-4 col-xs-4 col-news-top">
				<div class="date-in">
					<img class="img-responsive mix-in" src="images/c1.jpg" alt="">
				</div>
				<div class="text-about ab-agile1">
					<h4>Automated Watering</h4>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 col-news-top">
				<div class="date-in">
					<img class="img-responsive mix-in" src="images/c2.jpg" alt="">
				</div>
				<div class="text-about ab-agile2">
					<h4>Leaf disease detection</h4>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 col-news-top">
				<div class="date-in">
					<img class="img-responsive mix-in" src="images/c3.jpg" alt="">
				</div>
				<div class="text-about ab-agile3">
					<h4>Trend Analysis</h4>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //about -->
	<!-- middle -->
	<div class="projects">
		<div class="projects-grids">
			<div class="sreen-gallery-cursual">
				<ul id="flexiselDemo1">
					<li>
						<div class="item">
							<div class="projects-agile-grid-info">
								<img src="images/s1.jpg" alt="" />
								<div class="projects-grid-caption">

									<a href="chartJan.php"><h4>December Analysis</h4></a>
									<p>Crop Monitoring System</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="projects-agile-grid-info">
								<img src="images/s2.jpg" alt="" />
								<div class="projects-grid-caption">

									<a href="chartFeb.php"><h4>January Analysis</h4></a>
									<p>Crop Monitoring System</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="projects-agile-grid-info">
								<img src="images/s4.jpg" alt="" />
								<div class="projects-grid-caption">

									<a href="chartMar.php"><h4>February Analysis</h4></a>
									<p>Crop Monitoring System</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="projects-agile-grid-info">
								<img src="images/s3.jpg" alt="" />
								<div class="projects-grid-caption">

									<a href="chartFreq.php"><h4>Frequency Analysis</h4></a>
									<p>Crop Monitoring System</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="projects-agile-grid-info">
								<img src="images/s5.jpg" alt="" />
								<div class="projects-grid-caption">

									<a href="chartJan.php"><h4>Analysis</h4></a>
									<p>Crop Monitoring System</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="projects-agile-grid-info">
								<img src="images/s6.jpg" alt="" />
								<div class="projects-grid-caption">

									<a href="chartJan.php"><h4>Analysis</h4></a>
									<p>Crop Monitoring System</p>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //middle -->
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<h3 class="title-w3l">Our <span>Services</span></h3>
			<div class="col-md-4 w3ls_banner_bottom_grids">
				<div class="agile_offer_grid">
					<div class="agile_offer_grid_pos">
						<p>1</p>
					</div>
					<div class="wthree_offer_grid1">
						<h4>Automated watering</h4>
						<p class="w3_agileits_service_para">We are best at building smart crop monitoring systems.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="agile_offer_grid">
					<div class="agile_offer_grid_pos">
						<p>2</p>
					</div>
					<div class="wthree_offer_grid1">
						<h4>Leaf disease detection</h4>
						<p class="w3_agileits_service_para">We are best at building smart crop monitoring systems.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="agile_offer_grid">
					<div class="agile_offer_grid_pos">
						<p>3</p>
					</div>
					<div class="wthree_offer_grid1">
						<h4>Trend analysis</h4>
						<p class="w3_agileits_service_para">We are best at building smart crop monitoring systems.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 w3ls_banner_bottom_grids w3l-plant">
				<div class="agile_offer_grid w3l-grid-mk">
					<div class="agile_offer_grid_pos">
						<p>4</p>
					</div>
					<div class="wthree_offer_grid1">
						<h4>IOT embedded system</h4>
						<p class="w3_agileits_service_para">We are best at building smart crop monitoring systems.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="agile_offer_grid">
					<div class="agile_offer_grid_pos">
						<p>5</p>
					</div>
					<div class="wthree_offer_grid1">
						<h4>Genric system for any crop at any geographical location</h4>
						<p class="w3_agileits_service_para">We are best at building smart crop monitoring systems.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //services -->
	
	
	<!-- gallery -->
	<div class="gallery" id="gallery">
		<div class="container">
			<h3 class="title-w3l">Our <span>Gallery</span></h3>
			<div class="w3layouts_gallery_grids">
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="disImages/d5/2.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="disImages/d5/2.jpg" alt=" " class="" style="width: 100%; height: 233px;">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3>Healthy Leaf</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="disImages/d5/5.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="disImages/d5/5.jpg" alt=" " class="" style="width: 100%; height: 233px;">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3>Healthy Leaf</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="disImages/d5/9.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="disImages/d5/9.jpg" alt=" " class="" style="width: 100%; height: 233px;">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3>Healthy Leaf</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="disImages/d1/1.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="disImages/d1/1.jpg" alt=" " class="" style="width: 100%; height: 233px;">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3>Alternaria Alternata</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="disImages/d1/4.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="disImages/d1/4.jpg" alt=" " class="" style="width: 100%; height: 233px;">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3>Alternaria Alternata</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="disImages/d1/3.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="disImages/d1/3.jpg" alt=" " class="" style="width: 100%; height: 233px;">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3>Alternaria Alternata</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="disImages/d2/20.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="disImages/d2/20.jpg" alt=" " class="" style="width: 100%; height: 233px;">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3>Anthracnose</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="disImages/d2/13.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="disImages/d2/13.jpg" alt=" " class="" style="width: 100%; height: 233px;">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3>Anthracnose</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="disImages/d2/22.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="disImages/d2/22.jpg" alt=" " class="" style="width: 100%; height: 233px;">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3>Anthracnose</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="disImages/d3/1.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="disImages/d3/1.jpg" alt=" " class="" style="width: 100%; height: 233px;">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3>Bacterial Blight</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="disImages/d3/2.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="disImages/d3/2.jpg" alt=" " class="" style="width: 100%; height: 233px;">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3>Bacterial Blight</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="disImages/d3/4.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="disImages/d3/4.jpg" alt=" " class="" style="width: 100%; height: 233px;">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3>Bacterial Blight</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="disImages/d4/2.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="disImages/d4/2.jpg" alt=" " class="" style="width: 100%; height: 233px;">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3>Cercospora Spot</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="disImages/d4/6.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="disImages/d4/6.jpg" alt=" " class="" style="width: 100%; height: 233px;">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3>Cercospora Spot</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="disImages/d4/8.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="disImages/d4/8.jpg" alt=" " class="" style="width: 100%; height: 233px;">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3>Cercospora Spot</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //gallery -->

	<!-- contact -->
	<div class="contact" id="mail">
		<div class="container">
			<h3 class="title-w3l">Mail <span>Us</span></h3>
			<div class="map-pos">
				<div class="col-md-4 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Visit Us</h5>
						<p>VIT Chennai</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 address-row w3-agileits">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Mail Us</h5>
						<p><a href="mailto:info@example.com"> vatsal@gmail.com</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Call Us</h5>
						<p>+044 6000456</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<form action="#" method="post">
				<div class="col-sm-6 contact-left">
					<input type="text" name="Name" placeholder="Your Name" required="">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="text" name="Mobile Number" placeholder="Mobile Number" required="">
				</div>
				<div class="col-sm-6 contact-right">
					<textarea name="Message" placeholder="Message" required=""></textarea>
					<input type="submit" value="Submit">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
	<!-- //contact -->

	<!-- footer section -->
	<section class="footer-w3">
		<div class="container">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 footer-agile1" data-aos="zoom-in">
				<h3>About Us</h3>
				<p class="footer-p1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed ligula ac metus finibus hendrerit sed at libero. Praesent
					blandit dignissim elit, vel feugiat nulla porta a. Praesent tellus eros, consectetur quis tortor at, tempor varius quam.
					</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 footer-agile1" data-aos="zoom-in">
				<h3>Latest Tweets</h3>
				<ul class="tweet-agile">
					<li>
						<i class="fa fa-twitter-square" aria-hidden="true"></i>
						<p class="tweet-p1"><a href="mailto:support@company.com">@example</a> sit amet consectetur adipiscing. <a href="#">http://ax.by/zzzz</a></p>
						<p class="tweet-p2">Posted 3 days ago.</p>
					</li>
					<li>
						<i class="fa fa-twitter-square" aria-hidden="true"></i>
						<p class="tweet-p1"><a href="mailto:support@company.com">@example</a> sit amet consectetur adipiscing. <a href="#">http://cx.dy/zzzz</a></p>
						<p class="tweet-p2">Posted 3 days ago.</p>
					</li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-aos="zoom-in">
				<h3>Instagram Posts</h3>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/f1.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/f2.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/f3.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/f4.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/f5.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/f6.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	<!-- //footer section -->
	<!-- copyright -->
	<div class="w3layouts_copy_right">
		<div class="container">
			<p>© 2018 Capstone. All rights reserved | Design by <a href="#">Capstone</a></p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-scripts -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->
	<!-- js for navigation -->
	<script src="js/classie.js"></script>
	<script src="js/nav.js"></script>
	<script src="js/main.js"></script>
	<!-- //js for navigation -->
	<!-- js for gallery -->
	<script src="js/lsb.min.js"></script>
	<script>
		$(window).load(function () {
			$.fn.lightspeedBox();
		});
	</script>
	<!-- //js for gallery -->
	<!-- search-scripts -->
	<script src="js/uisearch.js"></script>
	<script>
		new UISearch(document.getElementById('sb-search'));
	</script>
	<!-- //search-scripts -->
	<!-- for-middle-section -->
	<script type="text/javascript">
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<!-- //for-middle-section -->
	<!-- clients-slider-script -->
	<script src="js/slideshow.min.js"></script>
	<script src="js/launcher.js"></script>
	<!-- //clients-slider-script -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		// jQuery(document).ready(function ($) {
		// 	$(".scroll").click(function (event) {
		// 		event.preventDefault();

		// 		$('html,body').animate({
		// 			scrollTop: $(this.hash).offset().top
		// 		}, 1000);
		// 	});
		// });
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- //js-scripts -->

</body>

</html>