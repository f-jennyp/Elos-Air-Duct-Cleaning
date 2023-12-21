<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">

	<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> -->
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link href="https://fonts.cdnfonts.com/css/ethnocentric" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />

	<link rel="stylesheet" href="public/fancybox/source/jquery.fancybox.css" media="screen" />
	<link rel="stylesheet" href="public/fancybox/source/jquery.fancybox-1.3.4.css" media="screen" />
	<?php $this->helpers->analytics(); ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">




</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>
	<header>
		<div id="header">
			<div class="row flex header-con">
				<div class="nav-holder">
					<nav>
						<a href="#" id="pull"><strong>MENU</strong></a>
						<ul>
							<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
							<li <?php $this->helpers->isActiveMenu("about"); ?>><a
									href="<?php echo URL ?>about#content">ABOUT US</a></li>

							<li class="dropdown">
								<button class="dropbtn" onclick="myFunction()">SERVICES
									<i class="fa fa-caret-down"></i>
								</button>
								<div class="dropdown-content" id="myDropdown">
									<a href="<?php echo URL ?>airDuctCleaning#content">Duct Cleaning</a>
									<a href="<?php echo URL ?>breatheCleanAir#content">Clean Air</a>
									<a href="<?php echo URL ?>dryerVentCleaning#content">Dryer Vent Cleaning</a>
									<a href="<?php echo URL ?>ductRepairAndInspection#content">Duct Repair And
										Inspection</a>
									<a href="<?php echo URL ?>heatingAndAirConService#content">Heating & Air</a>
								</div>
							</li>



							<li <?php $this->helpers->isActiveMenu("testimonials"); ?>><a
									href="<?php echo URL ?>testimonials#content">TESTIMONIALS</a></li>
							<li <?php $this->helpers->isActiveMenu("contact"); ?>><a
									href="<?php echo URL ?>contact#content">CONTACT US</a></li>
							<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a
									href="<?php echo URL ?>gallery#content">GALLERY</a></li>
						</ul>
					</nav>
				</div>

				<div class="socials-con flex">
					<div class="btn"><a href="<?php echo URL ?>contact#content">GET A QUOTE</a></div>
					<div class="flex h-socials">
						<a href="<?php $this->info('fb_link') ?>" target="_blank"><img
								src="public/images/content/h-fb.png" alt="facebook"></a>
						<a href="<?php $this->info('ig_link') ?>" target="_blank"><img
								src="public/images/content/h-ig.png" alt="instagram"></a>
						<a href="<?php $this->info('tt_link') ?>" target="_blank"><img
								src="public/images/content/h-tw.png" alt="twitter"></a>
						<a href="<?php $this->info('yt_link') ?>" target="_blank"><img
								src="public/images/content/h-yt.png" alt="youtube"></a>
						<a href="<?php $this->info('li_link') ?>" target="_blank"><img
								src="public/images/content/h-in.png" alt="linkedin"></a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- <?php //if($view == "home"):?> -->
	<div id="banner">
		<div class="img-holder">
			<img src="<?php echo URL ?>public/images/content/banner.png" alt="banner">
		</div>
		<div class="banner-con">
			<div class="logo-holder">
				<div class="logo"><img src="public/images/content/h-logo.png" alt=""></div> <span>lic#: 1112995</span>
			</div>
			<div class="row content-holder">
				<div class="row">
					<h1>making a clean difference.</h1>
					<span class="to-sm">You want to be sure that your air ducts are sealed so that all the ENERGY your
						heating/cooling system is producing is getting into your home and not being wasted. <br>
						Call me so we can talk!</span>
					<div class="btn-holder">
						<div class="btn">
							<a href="<?php echo URL ?>about#content">LEARN MORE</a>
						</div>
						<div class="btn">
							<a href="<?php echo URL ?>contact#content">GET A QUOTE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <?php //endif; ?> -->