<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TALENT_STAFFING
 */

?>
<?php

// WP_Query arguments
$args = array (
	'post_type'             => 'testimonial',
	'post_status'           => 'publish',
	'orderby'				=> 'menu_order',
	'order'					=> 'ASC',
	//'meta_key'     			=> '_ss_testimonial_type',
	//'meta_value'   			=> 'featured',
	'posts_per_page'		=> -1
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
?>
<div class="testimonials-full3">
    <div class="wrapper-1180">   
        <div id="post-<?php the_ID(); ?>" class="testimonials-content">
            <?php the_content(); ?>
            <div class="font"><?php the_title(); ?></div>
        </div>   
    </div>
</div>
<?php		
	}
} else {
	echo '<p>No post found.</p>';
}

// Restore original Post Data
wp_reset_postdata();

