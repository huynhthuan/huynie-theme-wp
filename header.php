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
						<img src="" alt="logo">
					</a>

					<div class="menu-inner">
						<a href="#" class="eco-game-btn">
							<span class="eco-game-icon">
								<img src="" alt="eco-game">
							</span>
							<ul class="eco-list-game">
								<li class="eco-game-item">
									<a href="#" class="eco-game-img">
										<img src="" alt="eco-game">
									</a>
									<p class="eco-game-name">
										Summoners Arena
									</p>
								</li>
								<li class="eco-game-item">
									<a href="#" class="eco-game-img">
										<img src="" alt="eco-game">
									</a>
									<p class="eco-game-name">
										Summoners Arena
									</p>
								</li>
							</ul>
						</a>

						<a href="#" class="app-btn">
							<span>App</span>
							<div class="app-btn-icon">
								<img src="" alt="arrow-up-right">
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
									<img src="" alt="search-icon">
								</div>
							</button>
						</form>
					</div>

					<div class="change-language">
						<div class="current-lang">
							<div class="current-lang-inner">
								<div class="language-icon">
									<img src="" alt="language-icon">
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