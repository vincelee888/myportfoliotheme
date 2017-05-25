<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bmportfolio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'bmportfolio' ); ?></a>

	<header id="masthead" class="site-header">


		<!--  Moved site info from header to here -->
					<div class="site-info">
						<ul class="site-info-components">
							 <li class="email">
		hello@benmarley.co.uk
		</li>
			<li class="home-link-site-title"><a href="http://www.benmarley.co.uk/">Ben Marley</a>
			</li>
						<li class="github">
							<a href="https://github.com/bnmrly">
	<img src="http://www.benmarley.co.uk/wp-content/uploads/2016/09/inverted_github_transparent.png"  alt ="gitgub logo" width="31"> </a>
						</li>

						<li class="linkedin">
							<a href="https://uk.linkedin.com/in/benmarley"><img src="http://www.benmarley.co.uk/wp-content/uploads/2016/09/inverted_Logo_Linkedin.png" alt ="linkedin logo" width="31"> </a>
						</li>
					</ul><!--site-info-components -->
			</div><!-- .site-info -->

<!-- Remove .site-branding -->

		<!--<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		 <!- </div> --><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">

			<!-- Remove Primary Menu button

					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bmportfolio' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
