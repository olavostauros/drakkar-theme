<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<div class="header-container">
				<!-- Logo Section -->
				<div class="site-logo">
					<?php
					$logo = drakkar_get_logo();
					if ($logo) {
						echo $logo;
					} else {
						// Fallback to text logo
						echo '<a href="' . esc_url(home_url('/')) . '" rel="home">';
						echo '<h1>' . esc_html(get_bloginfo('name')) . '</h1>';
						echo '</a>';
					}
					?>
				</div>

				<!-- Mobile Menu Toggle -->
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" onclick="toggleMobileMenu()">
					<span class="hamburger">☰</span>
				</button>

				<!-- Navigation Menu -->
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'container'      => false,
						'walker'         => new Drakkar_Walker_Nav_Menu(),
						'fallback_cb'    => 'drakkar_fallback_menu',
					));
					?>
					<!-- CTA Button -->
					<a href="#" class="cta-button">Acesse seu projeto</a>
				</nav>
			</div>
		</header><!-- #masthead -->