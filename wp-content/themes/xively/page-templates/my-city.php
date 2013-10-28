<?php
/**
 * Template Name: My City Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Xively Theme consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package Ukuzala
 * @subpackage Xively_Theme
 * @since Xively Theme 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<h2>Outside Temperature</h2>
            
            <div>The current temperature outside is <span id="outsideTemperature"></span>&deg;F</div>
                    
            <div style="clear: both;"></div>            

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>

<!-- scripts for this page -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript">  
if (typeof jQuery == "function") { jQuery.noConflict(); }

// Make sure the document is ready to be handled  
jQuery(document).ready(function(jQuery) {  
  
  	// Display the current outside temperature
	var apiKey = 'b04dbf475994a98f5849aa6856a4596d';
    var url = 'https://api.forecast.io/forecast/';
    var lati = 42.36;
    var longi = -71.06;
    var data;

    jQuery.getJSON(url + apiKey + "/" + lati + "," + longi + "?callback=?", function(data) {
       jQuery('#outsideTemperature').html(Math.round(data.currently.temperature));
     });
	
});
</script>