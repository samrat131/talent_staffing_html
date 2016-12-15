<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TALENT_STAFFING
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="contact-fixed">
	<h2><a onclick="jQuery('.contact-popup').slideToggle()"><img src="<?php bloginfo('template_directory') ?>/images/ts-text.png" alt="CONTACT" title="CONTACT"></a></h2>
    <div class="contact-popup">
    	<div class="align-right"><a onclick="jQuery('.contact-popup').slideToggle()"><img src="<?php bloginfo('template_directory') ?>/images/ts-cross.png" alt="Cross" title="Cross"></a></div>
        <h3>CONTACT US</h3>
        <p>Fill out your information in the from <br>below to contact us today!</p>
        <div><input name="" type="text" class="popup-inputbox" value="Name*" onblur="this.value=(this.value=='') ? 'Name *' : this.value;" onfocus="this.value=(this.value=='Name *') ? '' : this.value;"></div>
        <div><input name="" type="text" class="popup-inputbox" value="Email*" onblur="this.value=(this.value=='') ? 'Email*' : this.value;" onfocus="this.value=(this.value=='Email*') ? '' : this.value;"></div>
        <div><input name="" type="text" class="popup-inputbox" value="Phone*" onblur="this.value=(this.value=='') ? 'Phone*' : this.value;" onfocus="this.value=(this.value=='Phone*') ? '' : this.value;"></div>
        <div><input name="" type="text" class="popup-inputbox" value="State/Province**" onblur="this.value=(this.value=='') ? 'State/Province**' : this.value;" onfocus="this.value=(this.value=='State/Province**') ? '' : this.value;"></div>
        <div class="prepand3"><input name="" type="button" class="submit" value="SUBMIT"></div>
    </div>
</div>

<?php if ( is_front_page() && is_home() ) : ?>
<div class="nav-full">
    <div>
        <div class="btn" onClick="display(1);"><img src="<?php bloginfo('template_directory') ?>/images/ts-menu-icon.png" alt="Menu" title="Menu"></div>
    </div>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'myslidemenu1', 'menu_class' => 'index-nav' ) ); ?>
</div>
<?php else : ?>
<div class="top-full">
<div class="wrapper-1180">

	<section class="top">    	 
        <div>
            <div class="btn" onClick="display(1);"><img src="<?php bloginfo('template_directory') ?>/images/ts-menu-icon.png" alt="Menu" title="Menu"></div>
        </div>
        <nav id="myslidemenu1">
        	<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory') ?>/images/ts-logo2.png" alt="Talent Staffing" title="Talent Staffing"></a></div>  
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => '', 'menu_class' => '' ) ); ?>
        </nav>
    </section>
	
</div>
</div>
<?php endif; ?>    

<div class="header-full">
	<?php
	if ( is_front_page() && is_home() ) : ?>
	<div class="index-logo">
    	<h1><img src="<?php bloginfo('template_directory') ?>/images/ts-logo.png" alt="Talent Staffing" title="Talent Staffing"></h1>
        <h2>PASSIONATE, PROVEN, PROFESSIONAL</h2>
    </div>
    <section class="index-slide">
    	<div class="slide-shade"></div>
        <ul class="bxslider">
            <li><img src="<?php bloginfo('template_directory') ?>/images/ts-slide-image.png" alt="Image" title="Image"></li>
            <li><img src="<?php bloginfo('template_directory') ?>/images/ts-slide-image.png" alt="Image" title="Image"></li>
            <li><img src="<?php bloginfo('template_directory') ?>/images/ts-slide-image.png" alt="Image" title="Image"></li>
        </ul>
    </section>
	<?php else : ?>


	<?php
	endif;
	?>
</div>
<?php /* ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'talent-staffing' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description;  ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'talent-staffing' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
<?php */ ?>	
