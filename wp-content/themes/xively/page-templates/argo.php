<?php
/**
 * Template Name: Dashboard Template
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

<header id="header">
	<div class="header-holder">
		<div class="container hidden-phone">
			<div class="brow">
				<div class="brick1 transparent"></div>
                <div class="slogan brick3 boffset1 transparent text-right">
					<div class="inner">
						<h1>Welcome to Ukuzala Live</h1>
						<p>This is a realtime view of your quantified self pulling from the multitude of data points you are connected to throughout your daily life.</p>	
					</div>
				</div>
                <div class="brick1 logo_container">
					<a href="#" class="nav-item clearfix">
						<div class="nav-hover"></div>
						<h1 class="logo">ukuzala</h1>
					</a>
				</div>
			</div>
			<div class="brow">
				<div class="brick1 odd">
					<a href="#services" class="nav-item">
						<div class="nav-hover"></div>
						<?php /*?><i class="li_bulb"></i><?php */?>
						<span id="momentBirthday"></span>
					</a>
				</div>
				<div class="brick1 thumb">
					<div class="nav-item flipX">
						<img class="img1" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/img/img-slide1.png" alt="">
						<img class="img2" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/img/pf4.png" alt="">
					</div>
				</div>
                <div class="brick1 odd">
					<a href="#services" class="nav-item">
						<div class="nav-hover"></div>
						<?php /*?><i class="li_bulb"></i><?php */?>
						<span class="knobChart"><input id="homeLuminosity" type="text" value="" class="knob second"></span>
					</a>
				</div>
                <?php /*?><div class="brick1">
					<a href="#services" class="nav-item">
						<div class="nav-hover"></div>
						<span class="knobChart"><input id="officeLuminosity" type="text" value="" class="knob second"></span>
					</a>
				</div><?php */?>
			</div>
			<div class="brow">
				<div class="brick1 thumb">
					<div class="nav-item flipX">
						<img class="img1" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/img/img-slide2.png" alt="">
						<img class="img2" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/img/pf10.png" alt="">
					</div>
				</div>
				<div class="brick1 odd">
					<a href="#portfolio" class="nav-item">
						<div class="nav-hover"></div>
						<?php /*?><i class="li_photo"></i><?php */?>
						<span id="momentAnniversary"></span>
					</a>
				</div>
				<div class="brick1">
					<a href="#about-us" class="nav-item">
						<div class="nav-hover"></div>
						<i class="li_paperplane"></i>
						<span id="emailCount"></span>
					</a>
				</div>
				<div class="brick1 thumb">
					<div class="nav-item flipY">
						<img class="img1" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/img/img-slide3.png" alt="">
						<img class="img2" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/img/pf11.png" alt="">
					</div>
				</div>
				<div class="brick1 thumb">
					<div class="nav-item flipX">
						<img class="img1" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/img/img-slide4.png" alt="">
						<img class="img2" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/img/pf8.png" alt="">
					</div>
				</div>
				<div class="brick1">
					<a href="#blog" class="nav-item">
						<div class="nav-hover"></div>
						<?php /*?><i class="li_note"></i><?php */?>
						<span id="momentTime"></span>
                        <span id="momentDay"></span>
                        <span id="momentDate"></span>
					</a>
				</div>
			</div>
			<div class="brow">
				<div class="brick1 boffset2 odd">
					<a href="#contact" class="nav-item">
						<div class="nav-hover"></div>
						<?php /*?><i class="li_bubble"></i><?php */?>
						<span id="blogCount"></span>
					</a>
				</div>
				<div class="brick1 thumb">
					<div class="nav-item flipY">
						<img class="img1" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/img/img-slide6.png" alt="">
						<img class="img2" src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/img/pf6.png" alt="">
					</div>
				</div>
				<div class="brick1 odd">
					<a href="#contact" class="nav-item">
						<div class="nav-hover"></div>
						<?php /*?><i class="li_bubble"></i><?php */?>
						<span id="outsideTemperature"></span>&deg;F
					</a>
				</div>
			</div>

		</div>

		<div class="container visible-phone">
				<div class="brick1 logo_container">
					<a href="#" class="nav-item clearfix">
						<div class="nav-hover"></div>
						<h1 class="logo">Argo</h1>
					</a>
				</div>
				<div class="brick1 odd">
					<a href="#services" class="nav-item">
						<div class="nav-hover"></div>
						<i class="li_bulb"></i>
						<span>Services</span>
					</a>
				</div>
				<div class="brick1 odd">
					<a href="#portfolio" class="nav-item">
						<div class="nav-hover"></div>
						<i class="li_photo"></i>
						<span>Portfolio</span>
					</a>
				</div>
				<div class="brick1">
					<a href="#about-us" class="nav-item">
						<div class="nav-hover"></div>
						<i class="li_bubble"></i>
						<span>About us</span>
					</a>
				</div>
				<div class="brick1">
					<a href="#blog" class="nav-item">
						<div class="nav-hover"></div>
						<i class="li_note"></i>
						<span>Blog</span>
					</a>
				</div>
				<div class="brick1 odd">
					<a href="#contact" class="nav-item">
						<div class="nav-hover"></div>
						<i class="li_paperplane"></i>
						<span>Contact us</span>
					</a>
				</div>
		</div>
	</div>
</header> <!-- End header -->

<!-- Bootstrap js -->
<script src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/bootstrap-transition.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/bootstrap-modal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/bootstrap-dropdown.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/bootstrap-carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/bootstrap-collapse.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/bootstrap-scrollspy.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/jquery.mousewheel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/jquery.hoverdir.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/jquery.isotope.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/page-templates/assets/js/main.js"></script>

<!-- scripts for this page -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
<!-- knob -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.knob.js"></script>
<!-- moment -->
<script src="<?php echo get_template_directory_uri(); ?>/js/moment.min.js"></script>
<!-- tabletop -->
<script src="<?php echo get_template_directory_uri(); ?>/js/tabletop.js"></script>
<!-- xively -->
<script src="<?php echo get_template_directory_uri(); ?>/js/xivelyjs-1.0.0.min.js"></script>
<script type="text/javascript">  
if (typeof jQuery == "function") { jQuery.noConflict(); }

// Make sure the document is ready to be handled  
jQuery(document).ready(function(jQuery) {  
  
  	  /*** Current Home Luminosity ***/
	  xively.setKey( "qJmdX7oHEdGv7sqIz6XvpulgKT6A601PifyWh7ZtJNWOX1sb" );
	  
	  var homeFeedID        = 1346240819,  
	  	  homeDatastreamID  = "photocell";
	  
	  xively.datastream.get (homeFeedID, homeDatastreamID, function ( datastream ) {  
		
		var homeDataVal = datastream["current_value"];
		
		jQuery("#homeLuminosity").val(Math.round(homeDataVal));
		
		jQuery(".knob").knob({
				 'min':0,
				 'max':700,
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
	  
		xively.datastream.subscribe( homeFeedID, homeDatastreamID, function ( event , datastream_updated ) {  
		  var homeDataVal = datastream_updated["current_value"];
		  jQuery("#homeLuminosity").val(Math.round(homeDataVal)).trigger("change");
		});  
	  
	  }); 
	  
	  
	  /*** Current Office Luminosity ***/
	  /*xively.setKey( "iKhi87x4PTOegVFEyTUYOTKFhQe2JNNjgBz4MEaRo7pdmhOA" );
	  
	  var officeFeedID        = 1029041212,  
          officeDatastreamID  = "light";
	  
	  xively.datastream.get (officeFeedID, officeDatastreamID, function ( datastream ) {  
		
		var officeDataVal = datastream["current_value"];
		
		jQuery("#officeLuminosity").val(Math.round(officeDataVal));
		
		jQuery(".knob").knob({
				 'min':0,
				 'max':700,
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
	  
		xively.datastream.subscribe( officeFeedID, officeDatastreamID, function ( event , datastream_updated ) {  
		  var officeDataVal = datastream_updated["current_value"];
		  jQuery("#officeLuminosity").val(Math.round(officeDataVal)).trigger("change");
		});  
	  
	  });*/
	
	
	/*** Current Date & Time ***/ 
    var dayVal = moment().format('dddd');
	var dateVal = moment().format('MMMM Do YYYY');
	var timeVal = moment().format('h:mm a');
	
	jQuery("#momentDay").html(dayVal);
	jQuery("#momentDate").html(dateVal);
	jQuery("#momentTime").html(timeVal);
	
	
	/*** Current Temperature ***/
	var apiKey = 'b04dbf475994a98f5849aa6856a4596d';
    var url = 'https://api.forecast.io/forecast/';
    var lati = 42.36;
    var longi = -71.06;
    var data;

    jQuery.getJSON(url + apiKey + "/" + lati + "," + longi + "?callback=?", function(data) {
       jQuery('#outsideTemperature').html(Math.round(data.currently.temperature));
     });
	 
	
	/*** Birthday Countdown ***/
	birthdayCountdown();
	setInterval(birthdayCountdown, 1000);
	function birthdayCountdown () {
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
		diff = months + ' months ' + days + ' days ' + hours + ' hours ' + minutes + ' minutes and ' + seconds + ' seconds until your Birthday';
		jQuery('#momentBirthday').html(diff);
  	}
	
	
	/*** Anniversary Countdown ***/
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
		diff = months + ' months ' + days + ' days ' + hours + ' hours ' + minutes + ' minutes and ' + seconds + ' seconds until your Anniversary';
		jQuery('#momentAnniversary').html(diff);
  	}
	
	
	// Load Google Spreadsheet data: Emails Received
	var email_spreadshseet_url = 'https://docs.google.com/spreadsheet/pub?hl=en_US&hl=en_US&key=0ApXdH3IoTHoMdHJIYm9XZkNPX255ZHFJNno2LUFUVGc&output=html';
		
	Tabletop.init( { key: email_spreadshseet_url,
					 callback: showEmailInfo,
					 simpleSheet: true } )
					 
	
	// Load Google Spreadsheet data: Family Blog
	var blog_spreadshseet_url = 'https://docs.google.com/spreadsheet/pub?hl=en_US&hl=en_US&key=0ApXdH3IoTHoMdDd3WURFRS1VNUhlX0ZUazJLRjVQR3c&output=html;'
	
	Tabletop.init( { key: blog_spreadshseet_url,
					 callback: showBlogInfo,
					 simpleSheet: true } )
	
}); 


/*** Emails Received ***/
function showEmailInfo(data) {
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
	
	emails = count + "</br>emails received</br>this month";
	jQuery('#emailCount').html(emails);
	console.log(data);
}


/*** Family Blog ***/
function showBlogInfo(data) {
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
	
	blogs = count + "</br>blog postings</br>this month";
	jQuery('#blogCount').html(blogs);
	console.log(data);
}
</script>

<?php get_footer(); ?>