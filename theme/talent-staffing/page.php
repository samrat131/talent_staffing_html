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
<div class="header-full">
<header>
	<div class="header-shade"></div>
	<?php 
	if (has_post_thumbnail()) { 
		the_post_thumbnail('full'); 
	} else { ?>
	<img src="<?php bloginfo('template_directory') ?>/images/ts-about.jpg" alt="Image" title="Image">
	<?php } ?>
</header>
</div>

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

<!-- <div class="job-seekers-body">
	<h2>SUBMIT YOUR RESUME</h2>
    <h3><strong>PERSONAL INFORMATION</strong></h3>
    <table cellpadding="0" cellspacing="0" border="0">
    	<tr>
        	<td width="50%">[text* fname class:inputbox placeholder "First Name *"]</td>
            <td width="50%">[text* lname class:inputbox placeholder "Last Name *"]</td>
        </tr>
        <tr>
        	<td>[text* st-addr1 class:inputbox placeholder "Street Address *"]</td>
            <td>[text* st-addr2 class:inputbox placeholder "Street Address 2 *"]</td>
        </tr>
        <tr>
        	<td>[text* city class:inputbox placeholder "City *"]</td>
            <td>
            	<div class="job-sekker-inputbox">[text* state class:inputbox placeholder "State *"]</div>
                <div class="job-sekker-inputbox2">[text* zip-code class:inputbox placeholder "Zip Code *"]</div>                    	
            </td>
        </tr>
        <tr>
        	<td>[tel* r-phone class:inputbox placeholder "Phone Number *"]</td>
            <td>[email* r-email class:inputbox placeholder "Email *"]</td>
        </tr>
        <tr>
        	<td>[text* salary class:inputbox placeholder "Salary Requirements *"]</td>
            <td>[select* designation class:selectbox "Manager" "Engineer" "Executive"]</td>
        </tr>               
    </table>
    <h3><strong>UPLOAD RESUME*</h3>
    <table cellpadding="0" cellspacing="0" border="0">
    	<tr>
        	<td width="50%">[file* file-resume filetypes:doc.docx.pdf class:submit]</td>
            <td width="50%"> </td>
        </tr>
    </table>
    <div class="prepand2">[submit class:button "SEND MY APPLICATION"]</div>
</div> 

"Alabama" "Alaska" "Arizona" "Arkansas" "California" "Colorado" "Connecticut" "Delaware" "Florida" "Georgia" "Hawaii" "Idaho" "Illinois Indiana" "Iowa" "Kansas" "Kentucky" "Louisiana" "Maine" "Maryland" "Massachusetts" "Michigan" "Minnesota" "Mississippi" "Missouri" "Montana Nebraska" "Nevada" "New Hampshire" "New Jersey" "New Mexico" "New York" "North Carolina" "North Dakota" "Ohio" "Oklahoma" "Oregon" "Pennsylvania Rhode Island" "South Carolina" "South Dakota" "Tennessee" "Texas" "Utah" "Vermont" "Virginia" "Washington" "West Virginia" "Wisconsin" "Wyomin" 
-->

<?php
//get_sidebar();
get_footer();
