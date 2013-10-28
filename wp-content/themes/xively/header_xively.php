<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Ukuzala
 * @subpackage Xively_Theme
 * @since Xively Theme 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" />
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/rickshaw.min.css">
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" type="text/css" media="all" />
<style type="text/css">
.hidden {
	display: none;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.modernizr.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/xivelyjs-1.0.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/d3.v2.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/rickshaw.min.js"></script>
<script>  
if (typeof jQuery == "function") { jQuery.noConflict(); }

// Make sure the document is ready to be handled  
jQuery(document).ready(function(jQuery) {  
  
  // Set the Xively API key (https://xively.com/users/YOUR_USERNAME/keys)  
  xively.setKey( "iKhi87x4PTOegVFEyTUYOTKFhQe2JNNjgBz4MEaRo7pdmhOA" );  
  
  // Replace with your own values  
  var feedID        = 1029041212,          // Feed ID  
      datastreamID  = "light";       // Datastream ID  
      selector      = "#mydashboard";   // Your element on the page  
  
  // Get datastream data from Xively  
  xively.datastream.get (feedID, datastreamID, function ( datastream ) {  
    // WARNING: This code is only executed when we get a response back from Xively,   
    // it will likely execute after the rest your script  
    //  
    // NOTE: The variable "datastream" will contain all the Datastream information   
    // as an object. The structure of Datastream objects can be found at:   
    // https://xively.com/dev/docs/api/quick_reference/api_resource_attributes/#datastream  
  
    // Display the current value from the datastream  
    jQuery(selector).html( datastream["current_value"] );  
  
    // Getting realtime!   
    // The function associated with the subscribe method will be executed   
    // every time there is an update to the datastream  
    xively.datastream.subscribe( feedID, datastreamID, function ( event , datastream_updated ) {  
      // Display the current value from the updated datastream  
      jQuery(selector).html( datastream_updated["current_value"] );  
    });  
  
  });  
  
  // WARNING: Code here will continue executing while we get the datastream data from Xively,   
  // use the function associated with datastream.get to work with the data   
  // once the request is complete  
});  
</script>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<?php /*?><hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup><?php */?>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">