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
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html style="margin-top: 0 !important" class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html style="margin-top: 0 !important" class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html style="margin-top: 0 !important" class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <!--<![endif]-->
<html style="margin-top: 0 !important" <?php language_attributes(); ?> xmlns:fb="https://www.facebook.com/2008/fbml"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php /*?><link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,300italic' rel='stylesheet' type='text/css'><?php */?>
    <!-- wordpress -->
	<?php wp_head(); ?>
	<?php /*?><!-- foundation -->
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css" /><?php */?>
    <!-- libraries -->
    <link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/rickshaw.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/morris.css">
    <!-- global -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/page-templates/assets/css/style.css" type="text/css" media="all" >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/page-templates/assets/css/responsive.css" type="text/css" media="all" >
    <!-- this page specific styles -->
    <style type="text/css">
    
    </style>
    <!-- google -->
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});
    </script>
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/html5shiv.js"></script>
       <link href="<?php echo get_template_directory_uri(); ?>/page-templates/assets/css/ie.css" rel='stylesheet' type='text/css'>
    <![endif]-->
    
    <!--[if IE 7]>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/page-templates/assets/css/font-awesome-ie7.min.css">
	<![endif]-->
</head>
<body <?php body_class(); ?>>