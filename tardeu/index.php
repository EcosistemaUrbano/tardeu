<?php
/**
 * @package WordPress
 * @subpackage Pronto Theme
 */
$options = get_option( 'Pronto_theme_settings' );
?>
<?php get_header(' '); ?>

<div id="masonry-wrap">
	<div class="cat_image_container"><img width="100%" src="http://ecosistemaurbano.com/portfolio/wp-content/uploads/2015/01/architecture-total1.gif"></img></div>
	
	<?php 
    if (have_posts()) :
        get_template_part( 'loop' , 'entry');
    endif;
    ?>

</div>  
<!-- /masonry-wrap -->

<?php if (function_exists("pagination")) { pagination(); } ?>
<?php get_footer(' '); ?>