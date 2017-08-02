<?php
/**
 * @package WordPress
 * @subpackage Pronto Theme
 */
$options = get_option( 'Pronto_theme_settings' );
?>
<!DOCTYPE html>

<!-- BEGIN html -->
<html <?php language_attributes(); ?>>
<!-- Design by AJ Clarke (http://www.wpexplorer.com) - Powered by WordPress (http://wordpress.org) -->

<!-- BEGIN head -->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> --> <!--320--> 
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
    
<!-- Stylesheet & Favicon -->
<?php if($options['favicon'] !='') { ?>
<link rel="icon" type="image/png" href="<?php echo $options['favicon']; ?>" />
<?php } ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

<!-- WP Head -->
<?php if ( is_single() || is_page() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>

<div id="redheader">
	<div id="redheader-logo" style="background-image: url('<?php bloginfo('template_directory'); echo "/images/eu-logo-about-02-150x54.png"; ?>'); background-repeat: no-repeat; background-position: top left;"><a href="http://ecosistemaurbano.com/portfolio"><h1></h1></a></div>
    <ul id="mainmenu" class="redh">
	    <li><a href="https://www.youtube.com/c/ecosistemaurbano">tv</a></li>
	    <li><a href="http://ecosistemaurbano.org">blog</a></li>
	    <li class="active"><a href="http://ecosistemaurbano.com/portfolio">portfolio</a></li>
	    <li><a href="http://ecosistemaurbano.com/portfolio/contact">contact</a></li>
	    <li><a href="http://ecosistemaurbano.com/portfolio/about">about us</a></li>
    </ul>
</div>

<body <?php body_class(); ?>>

<?php if(!empty($options['notification'])) { ?>
<div id="notifications">
    <div id="notifications-inner">
		<?php echo stripslashes($options['notification']); ?>
    </div>
    <!-- /notifications-exit -->  
</div>
<!-- /notifications -->
<?php } ?>

<div id="wrap" class="clearfix">

<?php get_sidebar(' '); ?>
