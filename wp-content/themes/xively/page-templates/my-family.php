<?php
/**
 * Template Name: My Family Template
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

			<!--http://margi-newpastures.blogspot.com/feeds/posts/default-->
            
            <h2>Family</h2>
            
            <div id="myFamily">
			<?php
				require( get_template_directory() . '/php-sdk/facebook.php' );
				
				// Create our Application instance (replace this with your appId and secret).
				$facebook = new Facebook(array(
				  'appId'  => '198837703622628',
				  'secret' => '3c85e4dec6f648d858fd6ff2d5faf2f9',
				));
				
				$user = $facebook->getUser();
			
				if ($user) {
				  try {
					$user_profile = $facebook->api('/me');
					$user_family = $facebook->api('me/friendlists/family?fields=members');
					$access_token = $facebook->getAccessToken();
				  } catch (FacebookApiException $e) {
					d($e); 
					$user = null;
				  }
				  $total_family = count($user_family['data']);
				  echo 'I have ' . $total_family . ' family members on Facebook';
				} else {
				  echo 'You need to log in to Facebook to view this';	
				}
			?>
            </div>   
                    
            <div style="clear: both;"></div>
           
           	<br />
            
            <h2>Family Blog</h2>
            
            <div id="blogCount"></div>          

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>

<!-- scripts for this page -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
<!-- moment -->
<script src="<?php echo get_template_directory_uri(); ?>/js/moment.min.js"></script>
<!-- tabletop -->
<script src="<?php echo get_template_directory_uri(); ?>/js/tabletop.js"></script>
<script type="text/javascript">  
if (typeof jQuery == "function") { jQuery.noConflict(); }

// Make sure the document is ready to be handled  
jQuery(document).ready(function(jQuery) {  
   
   // Google Spreadsheet data
	var public_spreadshseet_url = 'https://docs.google.com/spreadsheet/pub?hl=en_US&hl=en_US&key=0ApXdH3IoTHoMdDd3WURFRS1VNUhlX0ZUazJLRjVQR3c&output=html;'
	
	Tabletop.init( { key: public_spreadshseet_url,
					 callback: showInfo,
					 simpleSheet: true } )
   
});  

function showInfo(data) {
	var count = 0;
	var obj = Object.keys(data);
	obj.forEach(function(key) {
	  var items = Object.keys(data[key]);
	  items.forEach(function(item) {
		var value = data[key][item].toString();
		var month = moment().format('MMMM');
		if (value.indexOf(month) != -1 ) { count++; };
	  });
	});
	
	blogs = "My parents have posted " + count + " entries to their blog this month";
	jQuery('#blogCount').html(blogs);
	console.log(data);
} 
</script>