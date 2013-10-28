<?php
/**
 * Template Name: My Friends Template
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

			<h2>Friends</h2>
            
            <div id="myFriends">
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
					$user_friends = $facebook->api('/me/friends');
					$access_token = $facebook->getAccessToken();
				  } catch (FacebookApiException $e) {
					d($e); 
					$user = null;
				  }
				  $total_friends = count($user_friends['data']);
				  echo 'I have ' . $total_friends . ' friends on Facebook';
				} else {
				  echo 'You need to log in to Facebook to view this';	
				}
			?>
            </div>            
                    
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
   
});  
</script>