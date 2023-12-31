<footer>
	<div id="footer">

		<div class="row">
			<div class="right contact text-left">
				<div class="title">CONTACT US</div>
				<p>We will be glad to answer your questions, feel free to ask a piece of information or a
					quotation.
					We
					are
					looking forward to work with you.</p>
				<form action="sendContactForm" method="post" class="sends-email ctc-form">

					<label><span class="ctc-hide">Name</span>
						<input type="text" name="name" placeholder="Name:"></label>
					<label><span class="ctc-hide">Address</span>
						<input type="text" name="address" placeholder="Address:"></label>
					<label><span class="ctc-hide">Email</span>
						<input type="text" name="email" placeholder="Email:"></label>
					<label><span class="ctc-hide">Phone</span>
						<input type="text" name="phone" placeholder="Phone:"></label>

					<label><span class="ctc-hide">Message:</span>
						<textarea name="message" cols="30" rows="10" placeholder="Message:"></textarea>
					</label>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="consent" class="consentBox">I hereby consent to having this
							website store my submitted information so that they can respond to my inquiry.
						</label>

						<?php if ($this->siteInfo['policy_link']): ?>
							<label>
								<input type="checkbox" name="termsConditions" class="termsBox" /> I hereby confirm that
								I
								have read and understood this website's <a href="<?php $this->info("policy_link"); ?>"
									target="_blank">Privacy
									Policy.</a>
							</label>
						<?php endif ?>
					</div>
					<label for="g-recaptcha-response"><span class="ctc-hide">Recaptcha</span></label>
					<div class="flex">
						<div class="g-recaptcha"></div>
						<button type="submit" class="ctcBtn btn" disabled>SUBMIT FORM</button>
					</div>
				</form>
			</div>

			<div class="left text-left">
				<div class="logo-holder">
					<div class="logo"><img src="public/images/content/h-logo.png" alt=""></div> <span>lic#:
						1112995</span>
				</div>
				<div class="info">
					<div class="text-left phone content">
						<img src="public/images/content/foot-phone.png" alt="">
						<div class="text-left">
							<div class="label">PHONE</div>
							<a href="tel:<?php $this->info("phone"); ?>">
								<?php $this->info("phone"); ?>
							</a>
						</div>
					</div>

					<div class="text-left email content">
						<img src="public/images/content/foot-email.png" alt="">
						<div class="text-left">
							<div class="label">EMAIL</div>
							<a href="mailto:<?php $this->info("email"); ?>">
								<?php $this->info("email"); ?>
							</a>
						</div>
					</div>

					<div class="text-left location content">
						<img src="public/images/content/foot-add.png" alt="">
						<div class="text-left">
							<div class="label">LOCATION</div>
							<a> <?php $this->info("address"); ?></a>
						</div>
					</div>
				</div>


				<div class="socials">
						<a href="<?php $this->info('fb_link') ?>" target="_blank"><img
								src="public/images/content/ft-fb.png" alt="facebook"></a>
						<a href="<?php $this->info('ig_link') ?>" target="_blank"><img
								src="public/images/content/ft-ig.png" alt="instagram"></a>
						<a href="<?php $this->info('tt_link') ?>" target="_blank"><img
								src="public/images/content/ft-tw.png" alt="twitter"></a>
						<a href="<?php $this->info('gp_link') ?>" target="_blank"><img
								src="public/images/content/ft-gl.png" alt="google-plus"></a>
					
				</div>
			</div>
		</div>

		<nav>
			<ul>
				<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
				<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about#content">ABOUT
						US</a></li>

				<li class="dropup">
					<button class="dropupbtn" onclick="myFunction()" <?php $this->helpers->isActiveMenu("services"); ?>><a> SERVICES
						</a>
					</button>
					<div class="dropup-content">
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
				<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">CONTACT
						US</a></li>
				<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a
						href="<?php echo URL ?>gallery#content">GALLERY</a>
				</li>
			</ul>
		</nav>



		<div class="copyrights">
			<p class="copy">
				©
				<?php echo date("Y"); ?>.
				<?php $this->info("company_name"); ?> All Rights Reserved.
				<?php if ($this->siteInfo['policy_link']): ?>
					<a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>.
				<?php endif ?>
			</p>
			<p class="techno">Web Design Done by
				<img class="lazy loaded" src="public/images/hd-logo.png" alt="techno-logo">
			</p>
		</div>
	</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- slick slider -->
<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> -->
<!-- fancy-box -->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script> -->

<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>

<?php if ($this->siteInfo['cookie']): ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if (in_array($view, ["home", "contact"])): ?>
	<textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
	<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
	<script>
		$('.test-slider').slick();

		// $('.works-slider').slick({
		// 	arrows: true,
		// 	infinite: true,
		// 	slidesToShow: 3,
		// 	slidesToScroll: 1,
		// 	responsive: [
		// 		{
		// 			breakpoint: 959,
		// 			settings: {
		// 			slidesToShow: 2,
		// 			}
		// 		},
		// 		{
		// 			breakpoint: 580,
		// 			settings: {
		// 			slidesToShow: 1,
		// 			}
		// 		}
		// 	]
		// });

		var captchaCallBack = function () {
			$('.g-recaptcha').each(function (index, el) {
				var recaptcha = grecaptcha.render(el, { 'sitekey': '<?php $this->info("site_key"); ?>' });
				$('.destroy-on-load').remove();
			})
		};


		$('.consentBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.termsBox').length) {
					if ($('.termsBox').is(':checked')) {
						$('.ctcBtn').removeAttr('disabled');
					}
				} else {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

		$('.termsBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.consentBox').is(':checked')) {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

	</script>

<?php endif; ?>

<script>
	function myFunction() {
		var dropdownContent = document.getElementById("myDropdown");
		dropdownContent.classList.toggle("show");
	}

	window.onclick = function (e) {
		if (!e.target.matches('.dropbtn')) {
			var dropdowns = document.getElementsByClassName("dropdown-content");
			for (var i = 0; i < dropdowns.length; i++) {
				var openDropdown = dropdowns[i];
				if (openDropdown.classList.contains('show')) {
					openDropdown.classList.remove('show');
				}
			}
		}
	}
</script>

<?php if ($view == "gallery"): ?>
	<script type="text/javascript" src="public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="public/scripts/jquery.pajinate.js"></script>
	<script>
	$(document).ready(function(){
		$('#gall1').pajinate({
			num_page_links_to_display: 3,
			items_per_page: 9
		});
		$('.fancy').fancybox({
			helpers: {
				title: {
					type: 'over'
				}
			}
		});
	})
	</script>
<?php endif; ?>

<a class="cta" href="tel:<?php $this->info("phone"); ?>"><span
		style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<?php $this->checkSuspensionFooter(); ?>
</body>

</html>