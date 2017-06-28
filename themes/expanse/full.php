<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
<?php Loader::element('header_required') ?> 
<link href="<?= $view->getThemePath() ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $view->getThemePath() ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

<link href="<?= $view->getStylesheet('style.less') ?>" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href='//fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="<?php echo $c->getPageWrapperClass()?>">

	<!-- HEADER -->
	<header class="header">
		<div class="container">
			<div class="header-menu">
				<nav class="navbar navbar-default">
	  				<div class="container-fluid">
		
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
		  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
		  				</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  				<ul class="nav navbar-nav">
								<li class="active"><a href="">Home </a></li>
								<li><a href="">About</a></li>
								<li class="dropdown">
			  					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
			  					<ul class="dropdown-menu">
										<li><a href="/">Services1</a></li>
										<li><a href="/">Services2</a></li>
										<li><a href="/">Services3</a></li>
										<li><a href="/">Icons</a></li>
			  					</ul>
								</li>
			 					<li><a href="">Gallery</a></li>
			  				<li><a href="">Short Codes</a></li>
			 					<li><a href="">Contact</a></li>
		  				</ul>
						</div><!-- /.navbar-collapse -->
	  			</div><!-- /.container-fluid -->
				</nav>
	
				<!-- start search-->
				<div class="search-box">
				  <div id="sb-search" class="sb-search">
						<form action="#" method="post">
							<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search" />
						 	<input class="sb-search-submit" type="submit" value="" />
						 	<span class="sb-icon-search"> </span>
						</form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		  
			<div class="number"><p>+123456789</p></div>
			<div class="logo"><a href="/"><img src="<?= $view->getThemePath() ?>/images/logo.png" alt=""><span>E</span>NLIGHTEN</a></div>
			<div class="banner"><h1>Education is the movement  </h1><h2>From  darkness to light</h2></div>
		</div> 
	</header>
	<!-- // HEADER -->

	<div class="content w3layouts-agile">

		<!--SECTION 01 -->
		<div class="container">
			<div class="content-top wthee-agileinfo">
				<div class="col-md-6 content-top1">
					<img src="<?= $view->getThemePath() ?>/images/pl.jpg" class="img-responsive" alt="" />
					<div class="content-plan">
						<h6><a href="">Lorem ipsum dolor sit</a></h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
					</div>
					<span class="locations" >ENLIGHTEN</span>
				</div>
				<div class="col-md-6 content-top1">
					<img src="<?= $view->getThemePath() ?>/images/pl1.jpg" class="img-responsive" alt="" />
					<div class="content-plan">
						<h6><a href="">Lorem ipsum dolor sit</a></h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
					</div>
					<span class="locations" >ENLIGHTEN</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- // SECTION 01 -->

		<!-- SECTION 02 -->
		<div class="content-mid">

			<div class="col-md-3 content-mid1">
				<div class=" content-mid-img"> </div>
			</div>

			<div class="col-md-7 content-mid2">
				<div class=" grid-middle">
					<div class=" grid-mid">
						<label></label>
						<h3>Latest-News</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
						</p>
						<div class="news-top">
							
							<div class=" col-md-6 latest-grid">
								<div class="col-md-9 news-in">
									<h5><a href="single.html">Lorem ipsum dolor sit</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
								</div>
								<div class="col-md-3 news">
									<h4>20<span>June</span></h4>					
								</div>
								<div class="clearfix"> </div>
							</div>
						
							<div class=" col-md-6 latest-grid">
								<div class="col-md-3 news">
									<h4>16<span>June</span></h4>					
								</div>
								<div class="col-md-9 news-in in-news">
									<h5><a href="single.html">Lorem ipsum dolor sit</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
								</div>
								<div class="clearfix"> </div>
							</div>

							<div class="clearfix"> </div>

						</div>

						<div class="news-top">

							<div class=" col-md-6 latest-grid">
								<div class="col-md-9 news-in">
									<h5><a href="single.html">Lorem ipsum dolor sit</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
								</div>
								<div class="col-md-3 news">
									<h4>11<span>June</span></h4>					
								</div>
								<div class="clearfix"> </div>
							</div>

							<div class=" col-md-6 latest-grid">
								<div class="col-md-3 news">
									<h4>09<span>June</span></h4>					
								</div>
								<div class="col-md-9 news-in in-news">
									<h5><a href="single.html">Lorem ipsum dolor sit</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
								</div>		
								<div class="clearfix"> </div>
							</div>

							<div class="clearfix"> </div>

						</div>

					</div>

				</div>

			</div>

			<div class="col-md-2 content-mid1">
				<div class=" content-mid-img1"> </div>			
			</div>

			<div class="clearfix"></div>

		</div>
		<!-- // SECTION 02 -->

		<!-- SECTION 03 -->
		<div class="feature">

			<div class="container">
				<div class="feature-top">
					<label></label>
					<h3>Special Care On Students</h3>
				</div>
				<div class="feature-grid">

					<div class="col-md-4 feature-grid">
						<h5><a href="single.html">Consectetur adipisicing</a></h5>
						<div class=" fe-grid">
							<i class="glyphicon glyphicon-map-marker"></i>
							<div class="feature-text"><p>Tempor Street Lorem ipsum dolor, TL 19034-88974, Country</p></div>
							<div class="clearfix"> </div>
						</div>
						<a href="single.html"><img src="<?= $view->getThemePath() ?>/images/pc.jpg" class="img-responsive" alt=""></a>
						<a href="single.html" class="read"> Read More</a>
					</div>

					<div class="col-md-4 feature-grid">
						<h5><a href="single.html">Consectetur adipisicing</a></h5>
						<div class=" fe-grid">
							<i class="glyphicon glyphicon-map-marker"></i>
							<div class="feature-text"><p>Tempor Street Lorem ipsum dolor, TL 19034-88974, Country</p></div>
							<div class="clearfix"> </div>
						</div>
						<a href="single.html"><img src="<?= $view->getThemePath() ?>/images/pc1.jpg" class="img-responsive" alt=""></a>
						<a href="single.html" class="read"> Read More</a>
					</div>

					<div class="col-md-4 feature-grid">
						<h5><a href="single.html">Consectetur adipisicing</a></h5>
						<div class=" fe-grid">
							<i class="glyphicon glyphicon-map-marker"></i>
							<div class="feature-text"><p>Tempor Street Lorem ipsum dolor, TL 19034-88974, Country</p></div>
							<div class="clearfix"> </div>
						</div>
						<a href="single.html"><img src="<?= $view->getThemePath() ?>/images/pc2.jpg" class="img-responsive" alt=""></a>
						<a href="single.html" class="read"> Read More</a>
					</div>

					<div class="clearfix"> </div>	

				</div>
			</div>

		</div>
		<!-- // SECTION 03 -->

		<!-- MAP -->
		<div class="map-top w3layouts-agile">
			<div class="map wl-agileinfo">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12947831.742778081!2d-95.665!3d37.599999999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1422444552833" ></iframe>
				<span></span>
			</div>
			<div class="address">
				<label></label>
				<h4>Consectetur adipisicing</h4>
				<p>Sed do eiusmod tempor incididunt ut</p>
				<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
			</div>
		</div>
		<!-- // MAP -->

		<!-- // SECTION 04 -->
		<div class="container">
			<div class="content-bottom">
					
				<div class="col-md-4 address-grid">
					<h5>Address</h5>
					<p>Lorem ipsum dolor, TL 19034-88974</p>
				</div>

				<div class="col-md-4 address-grid ">
					<h5>Our Phone</h5>
					<p>+123456789</p>
				</div>

				<div class="col-md-4 address-grid ">
					<h5>Email</h5>
					<p><a href="mailto:info@example.com"> Lorem@example.com</a></p>
				</div>

				<div class="clearfix"> </div>	
					
			</div>
		</div>
		<!-- // SECTION 04 -->
		
	</div>
	<!--//content-->

	<!--footer-->
	<div class="footer w3layouts-agile">
		<div class="container">
			<p class="footer-class">&copy; <?= Date('Y') ?> <?= Config::get('concrete.site') ?>. All Rights Reserved | Theme Design by  <a href="" target="_blank">Lroxima Interactive</a></p>
			<section id="set-9">
				<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
					<a href="#set-9" class="hi-icon "><i></i></a>
					<a href="#set-9" class="hi-icon "><i class="ic"></i></a>
					<a href="#set-9" class="hi-icon "><i class="ic1"></i></a>
					<a href="#set-9" class="hi-icon "><i class="ic2"></i></a>
				</div>
			</section>
		</div>
	</div>
	<!--//footer-->

</div>


<script src="<?= $view->getThemePath() ?>/js/jquery.min.js"></script>
<script src="<?= $view->getThemePath() ?>/js/classie.js"></script>
<script src="<?= $view->getThemePath() ?>/js/uisearch.js"></script>
<script>
	new UISearch( document.getElementById( 'sb-search' ) );
</script>

<script src="<?= $view->getThemePath() ?>/js/bootstrap.min.js"></script>
<?php Loader::element('footer_required'); ?>

</body>
</html>