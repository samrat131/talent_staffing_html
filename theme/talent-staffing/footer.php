<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TALENT_STAFFING
 */

?>

<div class="testimonials-full">
<div class="testimonials-full2">
<div class="wrapper-1115">

    <section class="testimonials">      
        <div class="main-body"><img src="<?php bloginfo('template_directory') ?>/images/ts-clone.png" alt="Clone" title="Clone"></div>
        <div class="left-arrow" id="left"><img src="<?php bloginfo('template_directory') ?>/images/ts-left-arrow.png" alt="Left Arrow" title="Left Arrow"></div>
        <ul class="bx">
        <?php
        // WP_Query arguments
        $args = array (
            'post_type'             => 'testimonial',
            'post_status'           => 'publish',
            'orderby'               => 'menu_order',
            'order'                 => 'ASC',
            //'meta_key'                => '_ss_testimonial_type',
            //'meta_value'              => 'featured',
            'posts_per_page'        => -1
        );

        // The Query
        $query = new WP_Query( $args );

        // The Loop
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
        ?>
        <li>
            <?php the_content(); ?>
            <p><span><?php the_title(); ?></span></p>
        </li>
        <?php       
            }
        } else {
            echo '<p>No post found.</p>';
        }

        // Restore original Post Data
        wp_reset_postdata();
        ?>
        </ul>
        <div class="right-arrow" id="right"><img src="<?php bloginfo('template_directory') ?>/images/ts-right-arrow.png" alt="Right Arrow" title="Right Arrow"></div>
    </section>

</div>
</div>
</div>

<div class="bottom-full">
<div class="wrapper-1115">

	<section class="bottom">
    	<div class="bottom-talent">
        	<h3>TALENT PLUS STAFFING</h3>
            <ul>
            	<li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">Best in Class</a></li>
            </ul>
        </div>
        <div class="bottom-services">
        	<h3>SERVICES</h3>
            <ul>
            	<li><a href="<?php echo esc_url( home_url( '/skilled-trade' ) ); ?>">Skilled Trade</a></li>
                <li><a href="<?php echo esc_url( home_url( '/administrative' ) ); ?>">Administrative</a></li>
            </ul>
        </div>
        <div class="bottom-candidates">
        	<h3>CANDIDATES</h3>
            <ul>
            	<li><a href="<?php echo esc_url( home_url( '/job-seekers' ) ); ?>">Job Seekers</a></li>
            </ul>
        </div>
        <div class="bottom-contact">
        	<h3>CONTACT</h3>
            <p>617 Union Ave, Brielle, NJ 08730</p>
            <p>P: (908) 433-3096</p>
            <p>E: <a href="mailto:team@talentplusstaffing.com">team@talentplusstaffing.com</a></p>
            <?php //if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
            <!-- <ul>
            	<li><a href="#"><img src="/images/ts-facebook.png" alt="Facebook" title="Facebook"></a></li>
                <li><a href="#"><img src="/images/ts-tweet.png" alt="Tweet" title="Tweet"></a></li>
                <li><a href="#"><img src="/images/ts-youtube.png" alt="Youtube" title="Youtube"></a></li>
                <li><a href="#"><img src="/images/ts-googleplus.png" alt="Google Plus" title="Google Plus"></a></li>
                <li><a href="#"><img src="/images/ts-linkedin.png" alt="Linkedin" title="Linkedin"></a></li>
                <li><a href="#"><img src="/images/ts-instrogram.png" alt="Instrogram" title="Instrogram"></a></li>
            </ul> -->
        </div>
    </section>

</div>
</div>

<div class="footer-full">
<div class="wrapper-1115">

	<footer>© Copyright <?php echo date('Y'); ?> Talent Plus Staffing. All Rights Reserved.</footer>

</div>
</div>

<?php /* ?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'talent-staffing' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'talent-staffing' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'talent-staffing' ), 'talent-staffing', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php */ ?>

<?php wp_footer(); ?>

<script type="text/javascript">
	jQuery('.bxslider').bxSlider({
	  //mode: 'fade',
     pagerCustom: '#bx-pager',
	 captions: true,
	 auto:true,
	 minSlides:1,
  	 maxSlides:1
	});
</script>
    
<script type="text/javascript">	
	var slider = jQuery('.bx').bxSlider({
    auto: true,  
    speed: 1000,
    mode: 'horizontal',
	pager:false,
    controls:false
	/*adaptiveHeight: true*/
	/*minSlides: 1,
  	maxSlides: 4,
  	slideWidth: 265,
  	slideMargin: 10*/
});
		
	jQuery('#right').click(function(){
     	slider.goToNextSlide();
     	return false;
    });
	jQuery('#left').click(function(){
    	slider.goToPrevSlide();
		return false;
	});
</script>

<script type="text/javascript">
/*jQuery(document).ready(function(){ 
    jQuery(window).scroll(function(){
        $topFull = jQuery('.top-full');
        if (jQuery(this).scrollTop() > $topFull.height()+550) {
            $topFull.css('position', 'fixed');
            //jQuery('header').css('margin-top', $topFull.height());
        } else {
            $topFull.css('position', 'relative');
            //jQuery('header').css('margin-top', -$topFull.height());
        }           
    }); 
});*/
</script>
<script type="text/javascript">
    function showContact(show) {
        if (show) {
            oparator = '+';
        } else {
            oparator = '-';
        }
        jQuery('.contact-popup').animate({'right':oparator+'=400'})
    }
</script>
<script type="text/javascript">
jQuery(document).ready(function($){
    $('button#file-open').click(function(e){
        e.preventDefault();
        if ($('#dammy-file-text').val()=='' || $('#dammy-file-text').val()=='Please, click here to select file') {
            $('#dammy-file-text').val('Please, click here to select file');
        } else if ($('#dammy-file-text').val()=='Attached') {
            //do nothing
        } else {
            $('#ajax-loader-resume').css('visibility', 'visible');
            setTimeout( function(){
                $('#ajax-loader-resume').delay( 2000 ).css('visibility', 'hidden');
                $('#dammy-file-text').val('Attached');
            } , 2000);
        }
    });

    /*$('#file1').bind('change', function() {
      //this.files[0].size gets the size of your file.
      console.log(this.files[0].size);
    });*/

    $('input#dammy-file-text').click(function(e){
        $('#file1').trigger('click');
    });
    $('#file1').change(function(){

        text = $(this).val();

        searchStr = "C:\\fakepath\\";
        if(text.indexOf(searchStr) != '-1'){
            text = text.replace(searchStr,'');
        }
        $('#dammy-file-text').val(text);
        //console.log(text);
    });

    $('span.state select').change(function(event) {
        /* Act on the event */
        $this = $(this);
        if ($this.val()=='') {
            $this.css('color', '#a9a9a9');
            console.log($(this).val());
        } else {
            $this.css('color', '#414042');
            console.log($(this).val());
        }
    });
})
</script>

</body>
</html>
