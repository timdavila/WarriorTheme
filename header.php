<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <main>
 *
 * @package WordPress
 * @subpackage Warrior_Theme
 * @since Warrior Theme 0.1
 */
?><!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial scale=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="//fonts.googleapis.com/css?family=Signika" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="top">
		<div class="hero">
			<div class="titlebar mobile">
				<a href="#" onclick="ToggleMenu('1');"><i class="rf fa fa-reorder"></i></a>
				<h1><?php bloginfo( 'name' ); ?></h1>
			</div>
			<div class="logo tablet demo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?> logo">
				</a>
			</div>
			<div class="hero-banner tablet">
				<iframe>
				<img src="http://placehold.it/728x90&text=Ad+Space+-+728+x+90">
				</iframe>
			</div>
			<div class="hero-meta">
				<div class="search">
					<?php get_search_form(); ?>
				</div>
				<div class="social tablet cf">
					<div class="btn-social fb"><a href="#"><i class="fa fa-facebook"></i></a></div>
					<div class="btn-social tw"><a href="#"><i class="fa fa-twitter"></i></a></div>
					<div class="btn-social gp"><a href="#"><i class="fa fa-google-plus"></i></a></div>
					<div class="btn-social yt"><a href="#"><i class="fa fa-youtube"></i></a></div>
					<div class="btn-social rss"><a href="#"><i class="fa fa-rss"></i></a></div>
				</div>
			</div>
			<div class="menubar tablet">
				<div class="btn-menu m1">
					<a id="btn-1" class="btn-reg" href="#" onclick="ToggleMenu('1');"><?php echo wp_nav_menu_title( 'primary' ); ?></a>
				</div>
				<div class="btn-menu m2">
					<a id="btn-2" class="btn-reg" href="#" onclick="ToggleMenu('2');"><?php echo wp_nav_menu_title( 'games' ); ?></a>
				</div>
				<div class="btn-menu m3">
					<a id="btn-3" class="btn-reg" href="#" onclick="ToggleMenu('3');"><?php echo wp_nav_menu_title( 'walkthroughs' ); ?></a>
				</div>
			</div>
		</div>

		<!-- Dynamic PRIMARY NAV - Accomodates 4-10 links -->
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav' , 'container_id' => 'nav-primary', 'container_class' => 'site-nav cf'  ) ); ?>

		<div class="mobile search">
			<?php get_search_form(); ?>
		</div>

		<div class="hero-banner mobile">
			<iframe>
			<img src="http://placehold.it/300x90&text=Ad+Space+-+300x90">
			</iframe>
		</div>

		<?php get_template_part( 'gamenav' ); // Load gamenav.php which contains the game menu to be displayed on desktop ?>

		<div class="btn-menu mobile m1">
			<i id="icn-2" class="rf fa fa-chevron-right"></i><a href="#" onclick="ToggleMenu('2');"><?php echo wp_nav_menu_title( 'games' ); ?></a>
		</div>

		<!-- Dynamic GAME NAV - Accomodates 2+ links -->
		<?php wp_nav_menu( array( 'theme_location' => 'games', 'container' => 'nav' , 'container_id' => 'nav-2', 'container_class' => 'site-nav cf'  ) ); ?>

		<div class="btn-menu mobile">
			<i id="icn-3" class="rf fa fa-chevron-right"></i><a href="#" onclick="ToggleMenu('3');"><?php echo wp_nav_menu_title( 'walkthroughs' ); ?></a>
		</div>

		<!-- Dynamic WALKTHROUGH NAV - Accomodates 2+ links -->
		<?php wp_nav_menu( array( 'theme_location' => 'walkthroughs', 'container' => 'nav' , 'container_id' => 'nav-3', 'container_class' => 'site-nav cf'  ) ); ?>

	</header>