<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TALENT_STAFFING
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'talent-staffing' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php /* if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						
						esc_html__( 'Edit %s', 'talent-staffing' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; */ ?>
</article><!-- #post-## -->
