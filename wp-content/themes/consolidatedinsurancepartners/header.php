<?php
/**
* The header for our theme.
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Consolidated_Insurance_Partners
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
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'consolidatedinsurancepartners' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
		<div class="row row-grid">
			<div class="col-md-5 logo">
				<img src="/CIPT/wp-content/themes/consolidatedinsurancepartners/Images/logo.png">
			</div>
			<div class="col-md-7 navSlider">
			<div class="col-md-12 menu">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'consolidatedinsurancepartners' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->

			</div>
			<div class="col-md-12 slider">
				<?php echo do_shortcode( '[metaslider id=25]' );?>
			</div>
		</div>
		</div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
