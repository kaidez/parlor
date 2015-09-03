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
	<div class="contact-information-inner">
	  <span class="contact-information-element phone-number">t:</span>
	  <span class="contact-information-element phone-number" itemprop="telephone">973.746.1182</span>
    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="address-container">
			<span class="contact-information-element address" itemprop="streetAddress">223 glenridge ave</span>,
			<span class="contact-information-element address" itemprop="addressLocality">montclair</span>,
			<span class="contact-information-element address" itemprop="addressRegion">nj</span>
			<span class="contact-information-element address" itemprop="postalCode">07042</span>
			<span class="contact-information-element">
		    <a href="https://www.google.com/maps?ion=1&espv=2&bav=on.2,or.r_cp.&bvm=bv.88528373,d.eXY&biw=1439&bih=779&dpr=2&um=1&ie=UTF-8&q=parlor+hair+studio&fb=1&gl=us&hq=parlor+hair+studio&cid=10383156108213620647&sa=X&ei=bqcOVYbTHZOTNreGgoAC&ved=0CCgQrwswAA" class="map-link" itemprop="maps">map</a>
		  </span>

		
		  <span class="contact-information-element hours" itemprop="openingHours">hours: tues 10-7 / wed. 10-8 / thurs &amp; fri 	11-8 / sat 10-5</span>





		</div> <!-- .contact-information-inner -->
		</div>
	</div> <!-- contact-information -->

	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header" role="banner" itemscope itemtype="http://schema.org/BeautySalon">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" itemprop="url">
				<h1 class="site-title" itemprop="name"><?php bloginfo( 'name' ); ?></h1>
				<meta itemprop="logo" content="http://www.parlorhairstudio.com/wp-content/themes/parlor/images/logo@2x.png">
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

		<main id="main" class="site-main container" itemprop="mainContentOfPage" itemscope="itemscope">
