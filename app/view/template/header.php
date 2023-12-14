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
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<?php $this->helpers->analytics(); ?>

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CMontserrat:400,700,900%7CLato:700"
		rel="stylesheet">

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
							<li <?php $this->helpers->isActiveMenu("services"); ?>><a
									href="<?php echo URL ?>services#content">SERVICES</a></li>
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
					<div class="btn"><a href="<?php echo URL ?>quote#content">GET A QUOTE</a></div>
					<div class="flex h-socials">
						<a href="<?php $this->info('fb_link') ?>" target="_blank"><img
								src="public/images/content/h-fb.png" alt=""></a>
						<a href="<?php $this->info('ig_link') ?>" target="_blank"><img
								src="public/images/content/h-ig.png" alt=""></a>
						<a href="<?php $this->info('tt_link') ?>" target="_blank"><img
								src="public/images/content/h-tw.png" alt=""></a>
						<a href="<?php $this->info('yt_link') ?>" target="_blank"><img
								src="public/images/content/h-yt.png" alt=""></a>
						<a href="<?php $this->info('li_link') ?>" target="_blank"><img
								src="public/images/content/h-in.png" alt=""></a>
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
						heating/cooling system is producing is getting into your home and not being wasted. </br>
						Call me so we can talk!</span>
					<div class="btn-holder">
						<div class="btn">
							<a href="<?php echo URL ?>learn#content">LEARN MORE</a>
						</div>
						<div class="btn">
							<a href="<?php echo URL ?>quote#content">GET A QUOTE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- <?php //endif; ?> -->