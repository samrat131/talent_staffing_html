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
            <li>
                <p>“We have been using Talent Plus for a few years now. Their quick response and professionalism has helped us place many levels of positions:
management, sales and hands-on operations. We consider Talent Plus as an extension of our recruiting department. They have helped us grow.”</p>
                <p><span>Keith Haskell, COO - New Castle Building Products</span></p>
            </li>
            <li>
                <p>“We have been using Talent Plus for a few years now. Their quick response and professionalism has helped us place many levels of positions:
management, sales and hands-on operations. We consider Talent Plus as an extension of our recruiting department. They have helped us grow.”</p>
                <p><span>Keith Haskell, COO - New Castle Building Products</span></p>
            </li>
            <li>
                <p>“We have been using Talent Plus for a few years now. Their quick response and professionalism has helped us place many levels of positions:
management, sales and hands-on operations. We consider Talent Plus as an extension of our recruiting department. They have helped us grow.”</p>
                <p><span>Keith Haskell, COO - New Castle Building Products</span></p>
            </li>
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
            	<li><a href="#">Best in Class</a></li>
            </ul>
        </div>
        <div class="bottom-services">
        	<h3>SERVICES</h3>
            <ul>
            	<li><a href="#">Skilled Trade</a></li>
                <li><a href="#">Administrative</a></li>
            </ul>
        </div>
        <div class="bottom-candidates">
        	<h3>CANDIDATES</h3>
            <ul>
            	<li><a href="#">Job Seekers</a></li>
            </ul>
        </div>
        <div class="bottom-contact">
        	<h3>CONTACT</h3>
            <p>617 Union Ave, Brielle, NJ 08730</p>
            <p>P: (908) 433-3096</p>
            <p>E: <a href="mailto:team@talentplusstaffing.com">team@talentplusstaffing.com</a></p>
            <ul>
            	<li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/ts-facebook.png" alt="Facebook" title="Facebook"></a></li>
                <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/ts-tweet.png" alt="Tweet" title="Tweet"></a></li>
                <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/ts-youtube.png" alt="Youtube" title="Youtube"></a></li>
                <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/ts-googleplus.png" alt="Google Plus" title="Google Plus"></a></li>
                <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/ts-linkedin.png" alt="Linkedin" title="Linkedin"></a></li>
                <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/ts-instrogram.png" alt="Instrogram" title="Instrogram"></a></li>
            </ul>
        </div>
    </section>

</div>
</div>

<div class="footer-full">
<div class="wrapper-1115">

	<footer>© Copyright 2016 Talent Plus Staffing. All Rights Reserved.</footer>

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
	 captions: true,
	 auto:true,
	 minSlides:1,
  	 maxSlides:1
	});
</script>
    
    
<script type="text/javascript">	
	var slider = jQuery('.bx').bxSlider({
    auto: true,  
    speed: 500,
    mode: 'horizontal',
	pager:false,
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

</body>
</html>
