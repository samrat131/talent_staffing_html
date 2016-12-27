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
<?php /* ?>
<!-- <div>[text* name class:inputbox placeholder "Name *"]</div>
<div>[email* email class:inputbox placeholder "Email *"]</div>
<div>[text* subject class:inputbox placeholder "Subject *"]</div>
<div>[textarea* message class:textarea placeholder "Message *"]</div>
<p><input type="checkbox"> Check here to reveive email updates from Talent Plus Staffng.</p>
<div>[submit "Submit" class:submit]</div> -->
<!-- [contact-form-7 id="42" title="Contact form 1"] -->

<!-- <div>[text* name class:popup-inputbox placeholder "Name *"]</div>
<div>[email* email class:popup-inputbox placeholder "Email *"]</div>
<div>[tel* phone class:popup-inputbox placeholder "Phone *"]</div>
<div>[text* state class:textarea placeholder "State/Province*"]</div>
<div class="prepand3">[submit class:submit "SUBMIT"]</div> -->

<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3628.6887553876904!2d-74.0606076664911!3d40.112172504009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c18641a04f2da5%3A0x756f9df766364622!2s617+Union+Ave%2C+Brielle%2C+NJ+08730%2C+USA!5e0!3m2!1sen!2sbd!4v1482226640642" width="1600" height="456" frameborder="0" style="border:0" allowfullscreen></iframe> -->
<?php */ ?>

<div class="body-full">
<div class="wrapper-1180"> 

	<section class="block-body">
    	
        

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

<div class="contact-map">
	
	<div class="overlay" onclick="style.pointerEvents='none'"></div>
	<?php 
	if (function_exists('get_field')) {
		echo get_field('google_map');
	}
	?>	
</div>

<div class="contact-bottom">
	<?php 
	if (function_exists('get_field')) {
		echo get_field('location');
	}
	?>
</div>

<?php
//get_sidebar();
get_footer();
