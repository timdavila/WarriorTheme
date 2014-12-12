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
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Signika:300,400" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet" type="text/css">

<title><?php wp_title( '-', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
<!--[if IE 9]>
    <style type="text/css">.secondary {height:auto!important;} #top,.secondary > ul {z-index:auto!important;}</style>
<![endif]-->
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/html5.js"></script>
	<link rel="stylesheet" type="text/css" href=" <?php echo get_template_directory_uri(); ?>/inc/ie.css" />
<![endif]-->
</head>

<body <?php body_class(); ?>>
	<header id="top">
		<div class="hero">
			<div class="titlebar mobile">
				<a href="#" onclick="ToggleMenu('1');"><i class="rf fa fa-reorder"></i></a>
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div class="logo tablet demo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?> logo">
				</a>
			</div>
			<div class="hero-banner tablet">
				<script>
					if( window.GuiltMode === undefined ){
			  			document.write("<div style='max-width:728px; max-height:90px; padding: 5px 20px; color: #fff; text-align:center; font-family:century gothic, arial, helvetica, sans serif;'>Advertising seems to be blocked by your browser.<br /><br /><span style='font-size:12px'>Advertising keeps this site running. Please consider whitelisting this site in your ad block settings.</div>");

					}
				</script>
				<img src="http://placehold.it/728x90/ffffff/" />
			</div>
			<div class="hero-meta">
				<div class="search">
					<?php get_search_form(); ?>
				</div>
				<div class="social tablet cf">
					<div class="btn-social fb"><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></div>
					<div class="btn-social tw"><a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></div>
					<div class="btn-social gp"><a target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></div>
					<div class="btn-social yt"><a target="_blank" href="http://www.youtube.com/"><i class="fa fa-youtube"></i></a></div>
					<div class="btn-social rss"><a target="_blank" href="/feed/"><i class="fa fa-rss"></i></a></div>
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
			<div class="cf"></div>
		</div>

		<!-- Dynamic PRIMARY NAV - Accomodates 4-10 links -->
		<div class="primary-mast">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav' , 'container_id' => 'nav-primary', 'container_class' => 'site-nav cf'  ) ); ?>
		</div>

		<div class="mobile search">
			<?php get_search_form(); ?>
		</div>

		<div class="hero-banner mobile">
			<img src="http://placehold.it/300x90/ffffff/" />
		</div>

		<?php get_template_part( 'gamenav' ); // Load gamenav.php which contains the game menu to be displayed on desktop ?>

		<div class="btn-menu mobile m1">
			<a href="#" onclick="ToggleMenu('2');"><?php echo wp_nav_menu_title( 'games' ); ?><i id="icn-2" class="rf fa fa-chevron-right"></i></a>
		</div>

		<!-- Dynamic GAME NAV - Accomodates 2+ links -->
		<?php wp_nav_menu( array( 'theme_location' => 'games', 'container' => 'nav' , 'container_id' => 'nav-2', 'container_class' => 'site-nav cf'  ) ); ?>

		<div class="btn-menu mobile">
			<a href="#" onclick="ToggleMenu('3');"><?php echo wp_nav_menu_title( 'walkthroughs' ); ?><i id="icn-3" class="rf fa fa-chevron-right"></i></a>
		</div>

		<!-- Dynamic WALKTHROUGH NAV - Accomodates 2+ links -->
		<?php wp_nav_menu( array( 'theme_location' => 'walkthroughs', 'container' => 'nav' , 'container_id' => 'nav-3', 'container_class' => 'site-nav cf'  ) ); ?>

	</header>