<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
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
				<a href="#" onclick="ToggleMenu('primary');"><i class="rf fa fa-reorder"></i></a>
				<h1><?php bloginfo( 'name' ); ?></h1>
			</div>
			<div class="logo tablet demo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo( 'name' ); ?> logo">
					<!--<img src="http://placehold.it/260x90/000000/&text=Logo+-+260x90">-->
					<?php bloginfo( 'name' ); ?> Logo
				</a>
			</div>
			<div class="hero-banner tablet">
				<img src="http://placehold.it/728x90&text=Ad+Space+-+728+x+90">
			</div>
			<div class="hero-meta">
				<div class="search">
					<form ~>
						<input class="in-search" type="text" label="Search" placeholder="Search this site..." required />
						<button class="btn-search" type="Submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<div class="social tablet cf">
					<div class="btn-social"><a href="#"><i class="fa fa-facebook"></i></a></div>
					<div class="btn-social"><a href="#"><i class="fa fa-twitter"></i></a></div>
					<div class="btn-social"><a href="#"><i class="fa fa-google-plus"></i></a></div>
					<div class="btn-social"><a href="#"><i class="fa fa-youtube"></i></a></div>
					<div class="btn-social"><a href="#"><i class="fa fa-rss"></i></a></div>
				</div>
			</div>
			<div class="menubar tablet">
				<div class="btn-menu m1">
					<a id="btn-1" class="btn-reg" href="#" onclick="ToggleMenu('primary');ToggleHighlight('btn-1');">Menu 1</a>
				</div>
				<div class="btn-menu m2">
					<a id="btn-2" class="btn-reg" href="#" onclick="ToggleMenu('second');ToggleHighlight('btn-2');">Menu 2</a>
				</div>
				<div class="btn-menu m3">
					<a id="btn-3" class="btn-reg" href="#" onclick="ToggleMenu('third');ToggleHighlight('btn-3');">Menu 3</a>
				</div>
			</div>
		</div>

		<nav id="primary" class="primary cf"> <!-- PRIMARY NAV, accomodates 4-10 links -->
			<ul>
				<li class="c13"><a href="#">Item 1 Primary</a></li>
				<li class="c6"><a href="#">Item 2</a></li>
				<li class="c13"><a href="#">Item 3</a></li>
				<li class="c6"><a href="#">Item 4</a></li>
				<li class="c13"><a href="#">Item 5</a></li>
				<li class="c6"><a href="#">Item 6</a></li>
				<li class="c13"><a href="#">Item 7</a></li>
			</ul>
		</nav>

		<div class="mobile search">
			<form>
				<input class="in-search" type="text" label="Search" placeholder="Search this site..." required />
				<button class="btn-search" type="Submit"><i class="fa fa-search"></i></button>
			</form>
		</div>

		<div class="hero-banner mobile">
				<img src="http://placehold.it/300x90&text=Ad+Space+-+300x90">
		</div>

		<nav class="secondary desktop cf">
			<ul>
				<li><a href="#"></a> <!-- 1 -->
					<div class="flyout">
						<div class="fly-col">
							<h2>Flyout Title</h2>
							<img src="http://placehold.it/230x150">
							<p>Optional Subtitle</p>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column Header</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
								<li><a href="#">Item 4</a></li>
								<li><a href="#">Item 5</a></li>
								<li><a href="#">Item 6</a></li>
								<li><a href="#">Item 7</a></li>
								<li><a href="#">Item 8</a></li>
								<li><a href="#">Item 9</a></li>
								<li><a href="#">Item 10</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column Header</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
								<li><a href="#">Item 4</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column Header</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
								<li><a href="#">Item 4</a></li>
								<li><a href="#">Item 5</a></li>
								<li><a href="#">Item 6</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column Header</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
								<li><a href="#">Item 4</a></li>
								<li><a href="#">Item 5</a></li>
								<li><a href="#">Item 6</a></li>
								<li><a href="#">Item 7</a></li>
								<li><a href="#">Item 8</a></li>
							</ul>
						</div>
					</div>
					</li>
				<li><a href="#"></a> <!-- 2 -->
					<div class="flyout">
						<div class="fly-col">
							<h2>Flyout Title 2</h2>
							<img src="http://lorempixel.com/230/150">
						</div>
						<div class="fly-col">
							<ul>
								<li>Column Header</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
								<li><a href="#">Item 4</a></li>
								<li><a href="#">Item 5</a></li>
								<li><a href="#">Item 6</a></li>
								<li><a href="#">Item 7</a></li>
								<li><a href="#">Item 8</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column Header</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
								<li><a href="#">Item 4</a></li>
								<li><a href="#">Item 5</a></li>
								<li><a href="#">Item 6</a></li>
								<li><a href="#">Item 7</a></li>
								<li><a href="#">Item 8</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column Header</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
							</ul>
						</div>
					</div>
					</li>
				<li><a href="#"></a> <!-- 3 -->
					<div class="flyout">
						<div class="fly-col">
							<h2>Flyout Title 3</h2>
							<img src="http://lorempixel.com/230/150">
						</div>
						<div class="fly-col">
							<ul>
								<li>Column 1</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column 2</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column 3</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column 4</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column 5</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
							</ul>
						</div>
					</div>
					</li>
				<li><a href="#"></a> <!-- 4 -->
					<div class="flyout">
						<div class="fly-col">
							<h2>Flyout Title 4</h2>
							<img src="http://lorempixel.com/230/150">
						</div>
						<div class="fly-col">
							<ul>
								<li>Column 1</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column 2</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column 3</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column 4</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column 5</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column 6</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column 7</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
							</ul>
						</div>
						<div class="fly-col">
							<ul>
								<li>Column 8</li>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
							</ul>
						</div>
					</div>
					</li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li> <!-- 19 -->
			</ul>
		</nav>
		<div class="btn-menu mobile m1">
			<i id="icn-1" class="rf fa fa-chevron-right"></i><a href="#" onclick="ToggleMenu('second');SwapIcon('icn-1');">Menu 2</a>
		</div>
		<nav id="second" class="primary cf"> <!-- ANCILLARY NAV, accomodates 2+ links -->
			<ul>
				<li class="c3"><a href="#">Item 1 (Nav 2)</a></li>
				<li class="c11"><a href="#">Item 2</a></li>
				<li class="c3"><a href="#">Item 3</a></li>
				<li class="c11"><a href="#">Item 4</a></li>
				<li class="c3"><a href="#">Item 5</a></li>
				<li class="c11"><a href="#">Item 6</a></li>
				<li class="c3"><a href="#">Item 7</a></li>
				<li class="c11"><a href="#">Item 8</a></li>
				<li class="c3"><a href="#">Item 9</a></li>
				<li class="c11"><a href="#">Item 10</a></li>
				<li class="c3"><a href="#">Item 11</a></li>
				<li class="c11"><a href="#">Item 12</a></li>
				<li class="c3"><a href="#">Item 13</a></li>
				<li class="c11"><a href="#">Item 14</a></li>
				<li class="c3"><a href="#">Item 15</a></li>
				<li class="c11"><a href="#">Item 16</a></li>
				<li class="c3"><a href="#">Item 17</a></li>
				<li class="c11"><a href="#">Item 18</a></li>
				<li class="c3"><a href="#">Item 19</a></li>
			</ul>
		</nav>
		<div class="btn-menu mobile">
			<i id="icn-2" class="rf fa fa-chevron-right"></i><a href="#" onclick="ToggleMenu('third');SwapIcon('icn-2');">Menu 3</a>
		</div>
		<nav id="third" class="primary cf"> <!-- ANCILLARY NAV, accomodates 2+ links -->
			<ul>
				<li class="c2"><a href="#">Item 1 (Nav 3)</a></li>
				<li class="c7"><a href="#">Item 2</a></li>
				<li class="c2"><a href="#">Item 3</a></li>
				<li class="c7"><a href="#">Item 4</a></li>
				<li class="c2"><a href="#">Item 5</a></li>
				<li class="c7"><a href="#">Item 6</a></li>
				<li class="c2"><a href="#">Item 7</a></li>
				<li class="c7"><a href="#">Item 8</a></li>
				<li class="c2"><a href="#">Item 9</a></li>
				<li class="c7"><a href="#">Item 10</a></li>
				<li class="c2"><a href="#">Item 11</a></li>
				<li class="c7"><a href="#">Item 12</a></li>
				<li class="c2"><a href="#">Item 13</a></li>
				<li class="c7"><a href="#">Item 14</a></li>
				<li class="c2"><a href="#">Item 15</a></li>
				<li class="c7"><a href="#">Item 16</a></li>
				<li class="c2"><a href="#">Item 17</a></li>
				<li class="c7"><a href="#">Item 18</a></li>
				<li class="c2"><a href="#">Item 19</a></li>
			</ul>
		</nav>
	</header>
	<!--

				<?php _e( 'Search', 'warriortheme' ); ?>
				<?php _e( 'Primary Menu', 'warriortheme' ); ?>
				<?php _e( 'Skip to content', 'warriortheme' ); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				<?php get_search_form(); ?>
	-->


<!-- eof header.php -->