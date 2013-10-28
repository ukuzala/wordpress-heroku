<?php
/**
 * Template Name: My Office Template
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

			<h2>Office Luminosity</h2>
            
            <div class="knobChart"><input id="officeLuminosity" type="text" value="" class="knob second"></div>
                    
            <div style="clear: both;"></div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>

<!-- scripts for this page -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
<!-- knob -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.knob.js"></script>
<!-- xively -->
<script src="<?php echo get_template_directory_uri(); ?>/js/xivelyjs-1.0.0.min.js"></script>
<script type="text/javascript">  
if (typeof jQuery == "function") { jQuery.noConflict(); }

// Make sure the document is ready to be handled  
jQuery(document).ready(function(jQuery) {  
  
  // Set the Xively API key (https://xively.com/users/YOUR_USERNAME/keys)  
  xively.setKey( "iKhi87x4PTOegVFEyTUYOTKFhQe2JNNjgBz4MEaRo7pdmhOA" );  
  
  // Replace with your own values  
  var feedID        = 1029041212,          // Feed ID  
      datastreamID  = "light";       // Datastream ID   
  
  // Get datastream data from Xively  
  xively.datastream.get (feedID, datastreamID, function ( datastream ) {  
    // WARNING: This code is only executed when we get a response back from Xively,   
    // it will likely execute after the rest your script  
    //  
    // NOTE: The variable "datastream" will contain all the Datastream information   
    // as an object. The structure of Datastream objects can be found at:   
    // https://xively.com/dev/docs/api/quick_reference/api_resource_attributes/#datastream  
  
    // Display the current value from the datastream  
    var dataVal = datastream["current_value"]; 
	
	jQuery("#officeLuminosity").val(Math.round(dataVal));
	
	// Build jQuery Knobs
    jQuery(".knob").knob({
             'min':0,
             'max':255,
			 'readOnly':true,
			 'thickness':.3,
			 'lineCap':'round',
			 'inputColor':'#333',
			 'fgColor':'#30a1ec',
			 'bgColor':'#d4ecfd',
			 'width':140,
			 'angleOffset':-125,
			 'angleArc':250,
			 'displayPrevious':true
   	});						
  
    // Getting realtime!   
    // The function associated with the subscribe method will be executed   
    // every time there is an update to the datastream  
    xively.datastream.subscribe( feedID, datastreamID, function ( event , datastream_updated ) {  
      // Display the current value from the updated datastream  
      var dataVal = datastream_updated["current_value"];
	  jQuery("#officeLuminosity").val(Math.round(dataVal)).trigger("change");
    });  
  
  });  
  
  // WARNING: Code here will continue executing while we get the datastream data from Xively,   
  // use the function associated with datastream.get to work with the data   
  // once the request is complete  
});  
</script>