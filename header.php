<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if(is_search()):?>
			<meta name="robots" content="noindex, nofollow" />
		<?php endif;?>
		
		<?php wp_head() ?>
		<title><?php echo bloginfo('name'); echo ' - '; bloginfo('description');?></title> 

		<meta charset="<?php bloginfo('charset')?>" />

		<!-- Stylesheets-->
		<link rel="stylesheet" href="<?php echo THEME_URL ?>public/main.css">
	</head>
	

	<body <?php body_class()?>>
		<header class="header">
			<div class="headerInner">
				<a href="<?php echo esc_url(home_url('/')) ?>" class="headerLogo">
					<img src="<?php echo THEME_URL; ?>_dev/img/logo_retina.png" alt="">
				</a>
				<nav class="headerLinks">
					<?php wp_nav_menu(array(
							'theme_location' => 'main_nav'
						));
					?>
					<ul class="headerLang">
						<li><a href="/mikron/" hreflang="pl-PL" lang="pl-PL" class="langPL">PL</a></li>
						<li><a href="/mikron/en" hreflang="en-GB" lang="en-GB" class="langEN">EN</a></li>
						<li><a href="/mikron/de" hreflang="de-DE" lang="de-De" class="langDE">DE</a></li>
					</ul>
				</nav>
				<button class="hamburger">
					<span class="hamburger__box">
						<span class="hamburger__inner"></span>
					</span>
				</button>
			</div>
		</header>
		<div id="back_top"></div>