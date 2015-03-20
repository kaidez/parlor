<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
	<div class="contact-information">
    <div class="contact-information-inner" itemscope itemtype="http://schema.org/LocalBusiness">
      <span class="contact-information-element phone-number" itemprop="telephone">t:</span> <span class="contact-information-element phone-number" itemprop="telephone">973.746.1182</span>
			<span class="contact-information-element address">223 glenridge ave, montclair, nj 07042</span>
			<a href="https://www.facebook.com/pages/Parlor-Hair-Studio/153741038024144" class="facebook-link"><span class="facebook-link-text">Visit Parlor On Facebook</span></a>
			 <span class="contact-information-element hours">hours: tues 10-7 / wed. 10-8 / thurs &amp; fri 11-8 / sat 10-5</span>
		</div>
	</div> <!-- contact-information -->

	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/Organization">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
					<h3 class="main-navigation-header">Main Menu</h3>
					<div class="menu-toggle">
						<?php _e( '', 'twentythirteen' ); ?>
						<span class="hamburger-menu"></span>
						<span class="hamburger-menu"></span>
						<span class="hamburger-menu"></span>
					</div>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main container" itemprop="mainContentOfPage" itemscope="itemscope">
