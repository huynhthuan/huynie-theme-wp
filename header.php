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
			<div class="header-inner">
				<div class="header-left">
					<a href="<?php echo home_url() ?>" class="logo">
						<img src="<?php echo get_theme_options('header-logo') ?>" alt="logo">
					</a>

					<div class="menu-inner">
						<div href="#" class="eco-game-btn">
							<span class="eco-game-icon">
								<img src="<?php echo get_template_directory_uri() . '/assets/img/icon-square.png'; ?>" alt="eco-game">
							</span>
							<ul class="eco-list-game">
								<?php
								$menus = get_theme_options('header-menu-eco');
								foreach ($menus as $item) : ?>
									<li class="eco-game-item">
										<a href="<?php echo $item['menu-link'] ?>" class="eco-game-img">
											<img src="<?php echo $item['menu-image'] ?>" alt="eco-game">
										</a>
										<p class="eco-game-name">
											<?php echo $item['menu-title'] ?>
										</p>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>

						<a href="#" class="app-btn">
							<span>App</span>
							<div class="app-btn-icon">
								<img src="<?php echo get_template_directory_uri() . '/assets/img/arrow-up-right.png'; ?>" alt="arrow-up-right">
							</div>
						</a>

						<?php get_template_part('/template-parts/navigation/navigation', 'main') ?>
					</div>
				</div>

				<div class="header-right">
					<div class="search-box">
						<form action="">
							<input type="text" name="s" class="form-control" placeholder="Search...">
							<button type="submit" class="search-btn">
								<div class="search-img">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/search-icon.png'; ?>" alt="search-icon">
								</div>
							</button>
						</form>
					</div>

					<div class="change-language">
						<div class="current-lang">
							<div class="current-lang-inner">
								<div class="language-icon">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/language-icon.png'; ?>" alt="language-icon">
								</div>
								<span class="current-language-name">Eng</span>
							</div>

							<ul class="list-language">
								<li class="language-item">
									<a href="#" class="language-link">English</a>
								</li>
								<li class="language-item">
									<a href="#" class="language-link">Vietnamese</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">