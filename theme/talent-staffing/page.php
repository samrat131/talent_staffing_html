<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TALENT_STAFFING
 */

get_header(); ?>

<?php
	$sub_title_1 = '';
	$sub_title_2 = '';
	if (function_exists('get_field')) {
		$sub_title_1 = get_field( "sub_title_1" );
		$sub_title_2 = get_field( "sub_title_2" );
	}
?>

<header>
	<div class="header-shade"></div>
	<?php 
	if (has_post_thumbnail()) { 
		the_post_thumbnail('full'); 
	} else { ?>
	<img src="<?php bloginfo('template_directory') ?>/images/ts-about.jpg" alt="Image" title="Image">
	<?php } ?>
</header>

<div class="title-block-full">

    <div class="title-full">
    	<div class="wrapper-1180">
            <div class="title-body"><?php echo $sub_title_1; ?></div>
        </div>
    </div>
    
    <div class="title-full2">
    	<div class="wrapper-1180">
        	<div class="title-body2"><?php echo $sub_title_2; ?></div>
        </div>
    </div>

</div> 

<div class="body-full">
<div class="wrapper-1180"> 

	<section class="about-content">
    	
        

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>

    </section>

</div>    
</div>

<?php
//get_sidebar();
get_footer();
