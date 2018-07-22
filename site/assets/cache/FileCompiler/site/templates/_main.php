<?php

/**
 * _main.php
 * Main markup file (multi-language)

 * MULTI-LANGUAGE NOTE: Please see the README.txt file
 *
 * This file contains all the main markup for the site and outputs the regions
 * defined in the initialization (_init.php) file. These regions include:
 *
 *   $title: The page title/headline
 *   $content: The markup that appears in the main content/body copy column
 *   $sidebar: The markup that appears in the sidebar column
 *
 * Of course, you can add as many regions as you like, or choose not to use
 * them at all! This _init.php > [template].php > _main.php scheme is just
 * the methodology we chose to use in this particular site profile, and as you
 * dig deeper, you'll find many others ways to do the same thing.
 *
 * This file is automatically appended to all template files as a result of
 * $config->appendTemplateFile = '_main.php'; in /site/config.php.
 *
 * In any given template file, if you do not want this main markup file
 * included, go in your admin to Setup > Templates > [some-template] > and
 * click on the "Files" tab. Check the box to "Disable automatic append of
 * file _main.php". You would do this if you wanted to echo markup directly
 * from your template file or if you were using a template file for some other
 * kind of output like an RSS feed or sitemap.xml, for example.
 *
 *
 */

	$settings = $pages->get("id=1047");
	$product = $pages->get("id=1053");
	$company = $pages->get("id=1055");

?><!DOCTYPE html>
<html lang="<?php echo \ProcessWire\_x('en', 'HTML language code'); ?>">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- <title><?php //echo $page->$title; ?></title> -->
	<title>Okomo</title>
	<meta name="description" content="<?php echo $page->summary; ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>assets/styles/main.css" />
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<script type="text/javascript" src="/okomo/node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="/okomo/node_modules/greensock/dist/TweenMax.js"></script>
	<script type="text/javascript" src="/okomo/node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
	<script type="text/javascript" src="/okomo/node_modules/scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
	<link rel="shortcut icon" href="https://okomo.com/favicon.ico" type="image/x-icon">
	<link rel="icon" href="https://okomo.com/favicon.ico" type="image/x-icon">
	<?php

	// handle output of 'hreflang' link tags for multi-language
	// this is good to do for SEO in helping search engines understand
	// what languages your site is presented in
	foreach($languages as $language) {
		// if this page is not viewable in the language, skip it
		if(!$page->viewable($language)) continue;
		// get the http URL for this page in the given language
		$url = $page->localHttpUrl($language);
		// hreflang code for language uses language name from homepage
		$hreflang = $homepage->getLanguageValue($language, 'name');
		// output the <link> tag: note that this assumes your language names are the same as required by hreflang.
		echo "\n\t<link rel='alternate' hreflang='$hreflang' href='$url' />";
	}

	?>

</head>
<body id="<?= $page->title ?>">


		<!-- <style>
		 #showArrow {
		    display: none;
		 }
		 #showButton {
		    display: none;
		 }
		</style> -->

	<!-- top navigation -->
	<ul class='topnav'><?php
		// top navigation consists of homepage and its visible children
		foreach($homepage->and($homepage->children) as $item) {
			if($item->id == $page->rootParent->id) {
				echo "<li class='current'>";
			} else {
				echo "<li>";
			}
			echo "<a href='$item->url'>$item->title</a></li>";
		}

		// output an "Edit" link if this page happens to be editable by the current user
	?></ul>

	<menu class="menu">
		<div class="menu__bar">
			<div class="logo">
				<a href="<?= $pages->get("id=1")->url ?>"><img src="<?= $settings->image->url ?>" alt="Logo"></a>
			</div>
			<ul class="menu__bar__links">
				<?php if($page->editable()) echo "<li class='edit'><a href='$page->editUrl'>" . \ProcessWire\__('Edit') . "</a></li>"; ?>
				<li><a class="<?= strtolower($pages->get("id=1")->title) ?>" href="<?= $pages->get("id=1")->url ?>"><?= $pages->get("id=1")->title ?></a></li>
				<li><a class="<?= strtolower($pages->get("id=1060")->title) ?>" href="<?= $pages->get("id=1060")->url ?>"><?= $pages->get("id=1060")->title ?></a></li>
				<li><a class="<?= strtolower($pages->get("id=1067")->title) ?>" href="<?= $pages->get("id=1067")->url ?>"><?= $pages->get("id=1067")->title ?></a></li>
				<li><a class="about-us" href="<?= $pages->get("id=1056")->url ?>"><?= $pages->get("id=1056")->title ?></a></li>
				<li><a class="<?= strtolower($pages->get("id=1066")->title) ?>" href="<?= $pages->get("id=1066")->url ?>"><?= $pages->get("id=1066")->title ?></a></li>
				<li class="button button__trial"><a href="<?= $pages->get("id=1069")->url ?>">Demo</a></li>
			</ul>
		<!-- language switcher / navigation -->
			<ul class='languages'><?php
				foreach($languages as $language) {
					if(!$page->viewable($language)) continue; // is page viewable in this language?
					if($language->id == $user->language->id) {
						echo "<li class='current'>";
					} else {
						echo "<li>";
					}
					$url = $page->localUrl($language);
					$hreflang = $homepage->getLanguageValue($language, 'name');
					// echo "<a hreflang='$hreflang' href='$url'>$language->title</a></li>";
					echo "<a hreflang='$hreflang' href='$url'>$language->title</a></li>";
				}
			?></ul>
			<div class="icon--hamburger"></div>
		</div>
	</menu>

	<!-- breadcrumbs -->
	<div class='breadcrumbs'><?php
		// breadcrumbs are the current page's parents
		foreach($page->parents() as $item) {
			echo "<span><a href='$item->url'>$item->title</a></span> ";
		}
		// optionally output the current page as the last item
		echo "<span>$page->title</span> ";
	?></div>


	<div data-pw-id='main' class="main">

		<!-- main content -->
		<div data-pw-id='content' class='content'>
		</div>

		<!-- content -->


	</div>
	<div data-pw-id="okomo-button"  class="okomo-button" id="showButton" onclick="showIframe()"></div>

	<!-- footer -->
	<footer data-pw-id="footer" class='footer'>
		<div class="footer__statement">
			<p> <?= $settings->textarea ?></p>

		</div>
		<div class="footer__container">
			<div class="footer__flexbox">
				<ul class="footer__menu footer__menu--product">
					<li>PRODUCT</li>
					<?php foreach($pages->get("id=1053")->children as  $child) :?>
						<?php if ($child->title == 'Demo'): ?>
							<a href="<?= $child->url ?>"><li>Schedule a Demo</li></a>
						<?php else: ?>
							<a href="<?= $child->url ?>"><li><?= $child->title?></li></a>
						<?php endif; ?>
				  <?php endforeach; ?>
				</ul>
				<ul class="footer__menu footer__menu--company">
					<li>COMPANY</li>
					<?php foreach($pages->get("id=1055")->children as  $child) :?>
							<a href="<?= $child->url ?>"><li><?= $child->title?></li></a>
				  <?php endforeach; ?>
				</ul>
				<div class="newsletter-sign-up">
					<!-- <h6>STAY IN THE LOOP</h6>
					<div class="newsletter-sign-up__input">
						<form class="" action="index.html" method="post">
							<input type="email" name="" value="E-Mail">
							<input type="submit" name="" value="">
						</form>
					</div> -->

					<!-- Begin MailChimp Signup Form -->
					<style type="text/css">
						#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
						/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
							 We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
					</style>
					<h6>Stay in the Loop</h6>
					<div class="newsletter-sign-up__input">
						<form action="https://okomo.us16.list-manage.com/subscribe/post?u=61aaa27542becf881d9edbba5&amp;id=905aff5a44" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll">
								<div class="mc-field-group">
									<!-- <label for="mce-EMAIL">Email Address</label> -->
									<input type="email" value="email" name="EMAIL" class="required email" id="mce-EMAIL">
								</div>
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_61aaa27542becf881d9edbba5_905aff5a44" tabindex="-1" value=""></div>
								<div class="clear"><input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
							</div>
						</form>
					</div>
					<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
					<!--End mc_embed_signup-->
				</div>
			</div>

		</div>

		<p>
		<?php
		if($user->isLoggedin()) {
			// if user is logged in, show a logout link
			echo "<a href='{$config->urls->admin}login/logout/'><div class='log-out-button'>" . sprintf(\ProcessWire\__('Logout (%s)'), $user->name) . "</div></a>";
		} else {
			// if user not logged in, show a login link
			echo "<a href='{$config->urls->admin}'><div class='log-in-button'" . \ProcessWire\__('Admin Login') . "</div></a>";
		}
		?>

		</p>

		<hr>

		<ul class="social-media">
			<li><a href="#"><img src="/okomo/site/templates/assets/img/icon--facebook.svg" alt=""></a></li>
			<li><a href="#"><img src="/okomo/site/templates/assets/img/icon--twitter.svg" alt=""></a></li>
			<li><a href="#"><img src="/okomo/site/templates/assets/img/icon--linked-in.svg" alt=""></a></li>
			<li><a href="#"><img src="/okomo/site/templates/assets/img/icon--instagram.svg" alt=""></a></li>
		</ul>

		<p class="disclaimer--copyright">Copyright © 2018 Okomo AG. All rights reserved.</p>
	</footer>
	<script type="text/javascript" src="/okomo/site/templates/assets/scripts/script.js"></script>
	<script type="text/javascript" src="https://okomoservices.azurewebsites.net/okomo/3443d92f-984f-4512-aaea-abb43d120402"></script>
	<script type="text/javascript">
	 /*let eventMethod = window.addEventListener ? 'addEventListener' : 'attachEvent'
	 let eventer = window[eventMethod]
	 let messageEvent = eventMethod == 'attachEvent' ? 'onmessage' : 'message'
	 eventer(messageEvent, (event) => {
	 if (event.origin.indexOf('https://okomo-user.azurewebsites.net') > -1) {
	 let key = event.message ? 'message' : 'data'
	 let data = event[key]

	 if (data === 'close_okomo') {
	 let iframe = document.getElementById('container')
	 iframe.style.display = 'none'
	 } else if (data === 'maximize_okomo_window') {
	 let iframe = document.getElementById('container')
	 iframe.style.width = '1126px'
	 } else if (data === 'minimize_okomo_window') {
	 let iframe = document.getElementById('container')
	 iframe.style.width = '375px'
	 }
	 }
	 }, false)
	 function showIframe() {
	 let iframe = document.getElementById('container')
	 iframe.style.display = iframe.style.display == 'none' ? 'unset' : 'none'
	 }
	 function openIframe() {
	 let iframe = document.createElement('iframe')

	 iframe.style.position = 'fixed'
	 iframe.style.zIndex = '100'
		iframe.style.boxShadow = '-2px 4px 49px -1px rgba(0,0,0,0.2)'
		iframe.style.borderRadius = '5px'
	 iframe.style.left = '0'
	 iframe.style.right = '0'
	 iframe.style.marginLeft = 'auto'
	 iframe.style.marginRight = 'auto'
	 iframe.style.top = '80px'
	 iframe.style.width = '375px'
	 iframe.style.height = '667px'
	 iframe.style.backgroundColor = 'white'
	 iframe.style.display = 'none'
	 iframe.src = 'https://okomo-user.azurewebsites.net'
	 iframe.setAttribute('allow', 'microphone; camera;')
	 iframe.setAttribute('frameborder', '0')
	 iframe.setAttribute('id', 'container')
	 iframe.id = 'container'
	 iframe.onload = () => {
	 document.getElementById('showButton').style.display = 'unset'
	 }
	 document.body.appendChild(iframe)
	 }
	 window.onload = () => {
	 openIframe()
	 }
	 window.onresize = () => {
	 let iframe = document.getElementById('container')
	 if (iframe) {
	 let windowHeight = window.innerHeight
	 }
	 }*/
 </script>
</body>
</html>
