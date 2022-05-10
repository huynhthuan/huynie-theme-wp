<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">

	<div id="page" class="site">

		<header id="masthead" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
			<a href="#menu">Open the menu</a>
			<nav id="menu">
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/about/">About us</a>
						<ul>
							<li><a href="/about/history/">History</a></li>
							<li><a href="/about/team/">The team</a></li>
							<li><a href="/about/address/">Our address</a></li>
						</ul>
					</li>
					<li><a href="/contact/">Contact</a></li>
				</ul>
			</nav>
		</header><!-- #masthead -->

		<div id="content" class="site-content">