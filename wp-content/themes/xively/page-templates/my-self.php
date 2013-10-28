<?php
/**
 * Template Name: My Self Template
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

			<h2>My Birthday</h2>
            
            <div id="momentBirthday"></div>
                    
            <div style="clear: both;"></div>
           
           	<br />
            
            <h2>My Anniversary</h2>
            
            <div id="momentAnniversary"></div>
            
            <br />
            
            <div id="postsFacebook">
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
					$feed = $facebook->api('/me/feed?limit=4');
				  } catch (FacebookApiException $e) {
					d($e); 
					$user = null;
				  }
				  
				  
foreach($feed['data'] as $feed) {
     echo "<p> " . $feed['id'] . "</p>";
     echo "<p> " . $feed['message'] . "</p>";
}
				  
				} else {
				  echo 'You need to log in to Facebook to view this';	
				}
			?>
            </div> 
            
            <div style="clear: both;"></div>
           
           	<br />
            
            <h2>My Emails</h2>
            
            <div id="emailCount"></div>

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
  
  	countdown();
	setInterval(countdown, 1000);
	function countdown () {
	var now = moment(), // get the current moment
		// December 31, 2013 @ 12:00AM (Javascript months are 0-11)
		then = moment([2013, 11, 31]),
		// get the difference from now to then in ms
		ms = then.diff(now, 'milliseconds', true);
		// If you need years, uncomment this line and make sure you add it to the concatonated phrase
		/*
		years = Math.floor(moment.duration(ms).asYears());
		then = then.subtract('years', years);
		*/
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		// get the duration as months and round down
		months = Math.floor(moment.duration(ms).asMonths());
	 
		// subtract months from the original moment (not sure why I had to offset by 1 day)
		then = then.subtract('months', months).subtract('days', 1);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		days = Math.floor(moment.duration(ms).asDays());
	 
		then = then.subtract('days', days);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		hours = Math.floor(moment.duration(ms).asHours());
	 
		then = then.subtract('hours', hours);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		minutes = Math.floor(moment.duration(ms).asMinutes());
	 
		then = then.subtract('minutes', minutes);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		seconds = Math.floor(moment.duration(ms).asSeconds());
		
		// concatonate the variables
		diff = 'It\'s ' + months + ' months ' + days + ' days ' + hours + ' hours ' + minutes + ' minutes and ' + seconds + ' seconds until my birthday';
		jQuery('#momentBirthday').html(diff);
  	}
	
	anniversaryCountdown();
	setInterval(anniversaryCountdown, 1000);
	function anniversaryCountdown () {
	var now = moment(), // get the current moment
		// December 31, 2013 @ 12:00AM (Javascript months are 0-11)
		then = moment([2014, 5, 15]),
		// get the difference from now to then in ms
		ms = then.diff(now, 'milliseconds', true);
		// If you need years, uncomment this line and make sure you add it to the concatonated phrase
		/*
		years = Math.floor(moment.duration(ms).asYears());
		then = then.subtract('years', years);
		*/
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		// get the duration as months and round down
		months = Math.floor(moment.duration(ms).asMonths());
	 
		// subtract months from the original moment (not sure why I had to offset by 1 day)
		then = then.subtract('months', months).subtract('days', 1);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		days = Math.floor(moment.duration(ms).asDays());
	 
		then = then.subtract('days', days);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		hours = Math.floor(moment.duration(ms).asHours());
	 
		then = then.subtract('hours', hours);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		minutes = Math.floor(moment.duration(ms).asMinutes());
	 
		then = then.subtract('minutes', minutes);
		// update the duration in ms
		ms = then.diff(now, 'milliseconds', true);
		seconds = Math.floor(moment.duration(ms).asSeconds());
		
		// concatonate the variables
		diff = 'It\'s ' + months + ' months ' + days + ' days ' + hours + ' hours ' + minutes + ' minutes and ' + seconds + ' seconds until my anniversary';
		jQuery('#momentAnniversary').html(diff);
  	}
	
	// Google Spreadsheet data
	var public_spreadshseet_url = 'https://docs.google.com/spreadsheet/pub?hl=en_US&hl=en_US&key=0ApXdH3IoTHoMdHJIYm9XZkNPX255ZHFJNno2LUFUVGc&output=html';
		
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
	
	emails = "I have received " + count + " emails so far this month";
	jQuery('#emailCount').html(emails);
	console.log(data);
} 
</script>