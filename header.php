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

		<div class="header-wrap">
			<header id="masthead" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
				<div class="header-inner">
					<div class="header-left">
						<a href="<?php echo pll_home_url() ?>" class="logo">
							<img src="<?php echo get_theme_options('header-logo') ?>" alt="logo">
						</a>

						<div class="menu-inner">
							<div href="#" class="eco-game-btn">
								<span class="eco-game-icon">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/icon-square.png'; ?>" alt="eco-game">
								</span>
								<ul class="eco-list-game">
									<?php if (pll_current_language() === 'vi') : ?>
										<?php
										$menus = get_theme_options('header-menu-eco-vi');
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
									<?php else : ?>
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
									<?php endif; ?>
								</ul>
							</div>

							<?php if (pll_current_language() === 'vi') : ?>
								<a href="<?php echo get_theme_options('link-app-vi') ?>" class="app-btn">
									<span>Ứng dụng</span>
									<div class="app-btn-icon">
										<img src="<?php echo get_template_directory_uri() . '/assets/img/arrow-up-right.png'; ?>" alt="arrow-up-right">
									</div>
								</a>
							<?php else : ?>
								<a href="<?php echo get_theme_options('link-app') ?>" class="app-btn">
									<span>App</span>
									<div class="app-btn-icon">
										<img src="<?php echo get_template_directory_uri() . '/assets/img/arrow-up-right.png'; ?>" alt="arrow-up-right">
									</div>
								</a>
							<?php endif; ?>
							<?php get_template_part('/template-parts/navigation/navigation', 'main') ?>
						</div>
					</div>

					<div class="header-right">
						<div class="search-box">
							<?php if (pll_current_language() === 'vi') : ?>
								<form method="get" action="<?php echo get_permalink(get_theme_options('page-filter-vi')) ?>">
									<input type="text" name="key" value="<?php echo isset($_GET['key']) ? $_GET['key'] : '' ?>" class="form-control" placeholder="<?php pll_e('Search...') ?>">
									<button type="submit" class="search-btn">
										<div class="search-img">
											<img src="<?php echo get_template_directory_uri() . '/assets/img/search-icon.png'; ?>" alt="search-icon">
										</div>
									</button>
								</form>
							<?php else : ?>
								<form method="get" action="<?php echo get_permalink(get_theme_options('page-filter')) ?>">
									<input type="text" name="key" value="<?php echo isset($_GET['key']) ? $_GET['key'] : '' ?>" class="form-control" placeholder="<?php pll_e('Search...') ?>">
									<button type="submit" class="search-btn">
										<div class="search-img">
											<img src="<?php echo get_template_directory_uri() . '/assets/img/search-icon.png'; ?>" alt="search-icon">
										</div>
									</button>
								</form>
							<?php endif; ?>
						</div>

						<div class="change-language">
							<div class="current-lang">
								<div class="current-lang-inner">
									<div class="language-icon">
										<img src="<?php echo get_template_directory_uri() . '/assets/img/language-icon.png'; ?>" alt="language-icon">
									</div>
									<span class="current-language-name">
										<?php echo pll_current_language() === 'vi' ? 'Viet' : 'Eng' ?>
									</span>
								</div>

								<ul class="list-language">
									<li class="language-item">
										<a href="<?php echo  pll_home_url('en') ?>" class="language-link">English</a>
									</li>
									<li class="language-item">
										<a href="<?php echo  pll_home_url('vi') ?>" class="language-link">Vietnamese</a>
									</li>
								</ul>
							</div>

						</div>

						<button class="btn-mobile">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
								<path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
							</svg>
						</button>
					</div>
				</div>

			</header><!-- #masthead -->
			<div class="progress-reading">
				<div class="progress"></div>
			</div>
		</div>

		<div id="content" class="site-content">