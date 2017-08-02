<?php
/**
 * @package WordPress
 * @subpackage Pronto Theme
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>

<div id="page-heading">
	<?php $post = $posts[0]; ?>
	<?php if (is_category()) { ?>
	<div class="cat_image_container"><img width="100%" src="<?php $category = get_category( get_query_var( 'cat' ) ); $cat_id = $category->cat_ID; the_field('category_image', 'category_'.$cat_id.''); ?>"></img></div>
	<div class="cat_info">
		<div class="cat_desc"><h1><?php single_cat_title(); ?></h1><?php echo category_description(); ?></div>
	</div>
	<div id="cat_projects"><h3>Previous projects in this field</h3></div>
	<?php } elseif( is_tag() ) { ?>
	<h1><?php single_tag_title(); ?></h1>
	<div class="cat_desc"><?php echo tag_description(); ?></div>
	<h1>Previous projects in this field</h1>
	<?php  } elseif (is_day()) { ?>
	<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
	<?php  } elseif (is_month()) { ?>
	<h1>Archive for <?php the_time('F, Y'); ?></h1>
	<?php  } elseif (is_year()) { ?>
	<h1>Archive for <?php the_time('Y'); ?></h1>
	<?php  } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<h1>Blog Archives</h1>
	<?php } ?>

</div>
<!-- END page-heading -->

<div id="masonry-wrap">   
	<?php get_template_part( 'loop' , 'entry') ?>                	     
</div>
<?php if (function_exists("pagination")) { pagination(); } ?>
<?php endif; ?>
	  
<?php get_footer(' '); ?>