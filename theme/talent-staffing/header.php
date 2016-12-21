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


<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory') ?>/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ?>/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ?>/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php bloginfo('template_directory') ?>/favicons/manifest.json">
<link rel="mask-icon" href="<?php bloginfo('template_directory') ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="contact-fixed">
	<h2><a onclick="jQuery('.contact-popup').slideToggle()"><img src="<?php bloginfo('template_directory') ?>/images/ts-text.png" alt="CONTACT" title="CONTACT"></a></h2>
    <div class="contact-popup">
    	<div class="align-right"><a onclick="jQuery('.contact-popup').slideToggle()"><img src="<?php bloginfo('template_directory') ?>/images/ts-cross.png" alt="close" title="close"></a></div>
        <h3>CONTACT US</h3>
        <p>Fill out your information in the from <br>below to contact us today!</p>
        <?php echo do_shortcode( '[contact-form-7 id="46" title="Contact Popup"]'); ?>
    </div>
</div>

<?php if ( is_front_page() && is_home() ) : ?>
<div class="nav-full">
    <div>
        <div class="btn" onClick="display(1);"><img src="<?php bloginfo('template_directory') ?>/images/ts-menu-icon.png" alt="Menu" title="Menu"></div>
    </div>
    <div id="myslidemenu1" class="index-nav">
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => '', 'menu_class' => '' ) ); ?>
    </div>
</div>
<?php else : ?>
<div class="top-full">
<div class="wrapper-1180">

	<section class="top">    	 
        <div>
            <div class="btn" onClick="display(1);"><img src="<?php bloginfo('template_directory') ?>/images/ts-menu-icon.png" alt="Menu" title="Menu"></div>
        </div>
        <nav id="myslidemenu1">
        	<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php  
            if (function_exists('get_opt')) {
                echo get_opt('logo_header');
            } else {
                echo get_bloginfo('template_directory').'/images/ts-logo2.png';
            }
            ?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>"></a></div>
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
    	<h1><img src="<?php  
                    if (function_exists('get_opt')) {
                        echo get_opt('logo_img');
                    } else {
                        echo get_bloginfo('template_directory').'/images/ts-logo.png';
                    }
                    ?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>"></h1>
        <h2><?php bloginfo( 'description' ); ?></h2>
    </div>
    <section class="index-slide">
    	<div class="slide-shade"></div>
        <ul class="bxslider">
        <?php
        // WP_Query arguments
        $args = array (
            'post_type'             => 'slider',
            'post_status'           => 'publish',
            'orderby'               => 'menu_order',
            'order'                 => 'ASC',
            //'meta_key'              => '_ss_testimonial_type',
            //'meta_value'            => 'featured',
            'posts_per_page'        => 99
        );

        // The Query
        $query = new WP_Query( $args );

        // The Loop
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
                if(has_post_thumbnail()) {
                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                    //print_r($large_image_url);
                    //die();
                    if ( ! empty( $large_image_url[0] ) ) {
        ?>
        <li><img src="<?php echo $large_image_url[0] ?>" alt="<?php get_the_title(); ?>" title="<?php get_the_title(); ?>"></li>
        <?php        
                    }
                }
            }
        } else {
            // no posts found
        }

        // Restore original Post Data
        wp_reset_postdata();
        ?>        
            <!-- <li><img src="<?php bloginfo('template_directory') ?>/images/ts-slide-image.png" alt="Image" title="Image"></li>
            <li><img src="<?php bloginfo('template_directory') ?>/images/ts-slide-image.png" alt="Image" title="Image"></li>
            <li><img src="<?php bloginfo('template_directory') ?>/images/ts-slide-image.png" alt="Image" title="Image"></li>  -->
        </ul>
    </section>
	<?php else : ?>

	<?php endif; ?>
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
