<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TALENT_STAFFING
 */

get_header(); ?>

<div class="index-full">

    <div class="index-body-full">
    	<div class="wrapper-1115">
            <div class="index-body">
                <h3>WHAT SETS TALENT PLUS APART?</h3>
                <p>It’s our commitment to provide remarkable <br>service and superior results. We strive to build <br>trusting relationship and partnership.</p> 
            </div>
        </div>
    </div>
    
    <div class="index-body-full2">
    	<div class="wrapper-1115">
            <div class="index-body2">
            	<div class="experienced">
                	<div><img src="<?php bloginfo('template_directory') ?>/images/ts-icon.png" alt="EXPERIENCED TEAM" title="EXPERIENCED TEAM"></div>
                	<h3>EXPERIENCED TEAM</h3>
                	<p>We have built an elite and diverse team that brings a unique blend of talent, expertise, andexperience to ensure our service is customized to every client’s speciﬁc needs.</p>
                </div>
                <div class="quality">
                	<div><img src="<?php bloginfo('template_directory') ?>/images/ts-icon2.png" alt="QUALITY PLACEMENT" title="QUALITY PLACEMENT"></div>
                	<h3>QUALITY PLACEMENT</h3>
                	<p>We take pride on our 85% fill ratio, as compared to the industry standard of 46%. We also possess a 95% retenion rate.</p>
                </div>
                <div class="lower-fess">
                	<div><img src="<?php bloginfo('template_directory') ?>/images/ts-icon3.png" alt="LOWER FEES" title="LOWER FEES"></div>
                	<h3>LOWER FEES</h3>
                	<p>We are owner-operated which allows us to provide lower placement fees than our competitors and give employers the best staﬃng value in the marketplace.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="index-body-full3">
    	<div class="wrapper-1115">
            <div class="index-body3">
                <h3>WE PLACE  QUALIFIED CANDIDATES <br>IN CAREERS ACROSS THE COUNTRY. </h3>
            </div>
        </div>
    </div>

</div>

<div class="index-full2">
<div class="wrapper-1115">

	<div class="index-full3"><img src="<?php bloginfo('template_directory') ?>/images/ts-index-bg2.png" alt="Image" title="Image"></div>
    
	<div class="index-body4">
    	<div class="index-map"><img src="<?php bloginfo('template_directory') ?>/images/ts-map.png" alt="Map" title="Map"></div>
        <div><img src="<?php bloginfo('template_directory') ?>/images/ts-tick.png" alt="Tick" title="Tick"></div>
        <h3>DELIVERING TALENT &amp; <br>IMPACTING RESULTS</h3>
    </div>

</div>
</div>

<?php /* ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			
			while ( have_posts() ) : the_post();

				
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php */ ?>
<?php
//get_sidebar();
get_footer();
