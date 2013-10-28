<?php
/**
 * Template Name: Front Page Template
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

			<div class="knobChart"><input id="lightKnob" type="text" value="" class="knob second"></div>
                    
            <div style="clear: both;"></div>
            
			<?php /*?><div id="hero-area" style="height: 250px;"></div>
            
            <div style="clear: both;"></div>
            
            <div id="hero-graph" style="height: 230px;"></div>
			
			<div style="clear: both;"></div>
			
            <div id="statsChart"></div>
			
			<div style="clear: both;"></div>
			
            <div id="hero-bar" style="height: 250px;"></div>
			
			<div style="clear: both;"></div>
			
            <div id="hero-donut" style="height: 250px;"></div><?php */?>
            
            

<!-- Form -->
	<div id="form" style="background: #F0F0F0; border-bottom: 1px solid #CCC; padding: 25px; padding-bottom: 15px;">
		<div class="row">
			<div class="large-5 columns">
				<div class="row collapse">
					<div class="small-3 columns">
						<span class="prefix">API Key</span>
					</div>
					<div class="small-9 columns">
						<input type="text" placeholder="Valid Master API Key" id="apiKeyInput">
					</div>
				</div>
			</div>
			<div class="large-5 columns">
				<div class="row collapse">
					<div class="small-3 columns">
						<span class="prefix">Feed ID's</span>
					</div>
					<div class="small-9 columns">
						<input type="text" placeholder="Comma separated" id="feedsInput">
					</div>
				</div>
			</div>
			<div class="large-2 columns">
				<a id="setFeeds" href="#" data-reveal-id="secondModal" class="secondary button small expand">
					Visualize &raquo;
				</a>
			</div>
		</div>
	</div>            
<!-- Page Content -->
	<div id="xivelyContent" style="position: relative;">
		<div id="welcome">
			<div class="row">
				<div class="large-1 columns">&nbsp;</div>
				<div class="large-10 columns text-center">
					<br/><br/><br/><br/><br/><br/><br/>
					<h1 class="subheader" style="text-align: center;">Welcome to Xively!</h1>
					<p>This page is an example of just one of many ways you can visualise your data on Xively.<br/>It was created with open-source tools, and reads data from Xively with the Xively JavaScript library.</p>
					<p>Read the tutorial <i>(comming soon)</i> on how to make and customise your own.</p>
				</div>
				<div class="large-1 columns">&nbsp;</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<br/><br/><br/><br/><hr/><br/><br/><br/><br/>
					<div class="row">
						<div class="large-4 columns">
							<div class="hero panel">
								<p style="font-size: 14px;">To use this page, enter a Master API Key from your Xively account, and a list of the Feeds that you would like to display, into the forms above. You can view multiple Feeds by separating them with a comma, and select individual channels with an exclamation mark.</p>
							</div>
						</div>
						<div class="large-8 columns">
							<h4 class="subheader">Examples</h4>
							<hr/>
							<div class="row">
								<div class="large-4 columns">
									<strong style="text-transform: uppercase;">Multiple Feeds</strong>
								</div>
								<div class="large-8 columns">
									<pre><em>61916,61916</em></pre>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class="large-4 columns">
									<strong style="text-transform: uppercase;">Individual Channels</strong><br/>
									<small>separate with exclamation marks</small>
								</div>
								<div class="large-8 columns">
									<pre><em>61916!random5!random3600</em></pre><br/>
									<pre><em>61916!random5,61916!random3600</em></pre>
								</div>
							</div>
						</div>
					</div>
					<br/><br/><br/><br/><hr/><br/><br/><br/><br/>
				</div>
			</div>
			<div class="row">
				<div class="large-2 columns">&nbsp;</div>
				<div class="large-8 columns">
					<h5 class="subheader text-center">To begin visualizing data, enter your Xively Master API key above!</h5>
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
				<div class="large-2 columns">&nbsp;</div>
			</div>
		</div>
		<div id="invalidApiKey" class="hidden">
			<div class="row">
				<div class="large-2 columns">&nbsp;</div>
				<div class="large-8 columns">
					<br/><br/><br/>
					<h1 class="subheader" style="text-align: center;">Uh oh!</h1>
					<h2 class="subheader" style="text-align: center;">Your API key is invalid!</h2>
					<p>Please try again or generate a new key on Xively. It is important to keep in mind that this API key must be a global API key in order to work in this example. Using an application-specific API key will cause this example to malfunction.</p>

					<a href="#" data-reveal-id="exampleModal" class="openStart radius secondary button expand">Ready When You Are...</a>
					<br/><br/><br/>
				</div>
				<div class="large-2 columns">&nbsp;</div>
			</div>
		</div>
		<div id="validApiKey" class="hidden">
			<div class="row">
				<div class="large-2 columns">&nbsp;</div>
				<div class="large-8 columns">
					<br/><br/><br/>
					<br/><br/><br/>
					<h1 class="subheader" style="text-align: center;">Connected to Xively!</h1>
					<h5 class="subheader text-center">To begin visualizing data, enter your Xively feed information above...</h5>
				</div>
				<div class="large-2 columns">&nbsp;</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<br/><br/><br/><br/><hr/><br/><br/><br/><br/>
					<div class="row">
						<div class="large-4 columns">
							<div class="hero panel">
								<p style="font-size: 14px;">To use this page, enter a Master API Key from your Xively account, and a list of the Feeds that you would like to display, into the forms above. You can view multiple Feeds by separating them with a comma, and select individual channels with an exclamation mark.</p>
							</div>
						</div>
						<div class="large-8 columns">
							<h4 class="subheader">Examples</h4>
							<hr/>
							<div class="row">
								<div class="large-4 columns">
									<strong style="text-transform: uppercase;">Multiple Feeds</strong>
								</div>
								<div class="large-8 columns">
									<pre><em>61916,61916</em></pre>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class="large-4 columns">
									<strong style="text-transform: uppercase;">Individual Channels</strong><br/>
									<small>separate with exclamation marks</small>
								</div>
								<div class="large-8 columns">
									<pre><em>61916!random5!random3600</em></pre><br/>
									<pre><em>61916!random5,61916!random3600</em></pre>
								</div>
							</div>
						</div>
					</div>
					<br/><br/><br/><br/>
					<br/><br/><br/><br/>
					<br/><br/><br/><br/>
				</div>
			</div>
		</div>
		<div id="feeds">
			<div class="feed hidden" id="exampleFeedNotFound" style="line-height: 25px; padding-top: 25px;">
				<div class="row title">
					<div class="large-12 columns">
						<h2 class="subheader value">Loading Feed Data...</h2>

						<div class="alert alert-box no-info">
							Sorry, this feed could not be found.
						</div>
					</div>
				</div>
			</div>
			<div class="feed hidden" id="exampleFeed" style="line-height: 25px; padding-top: 25px;">
				<div class="row title" style="display:none;">
					<div class="large-12 columns">
						<h2 class="subheader value">Loading Feed Data...</h2>
					</div>
				</div>
				<div class="row" style="display:none;">
					<div class="large-7 columns">
						<h4 class="subheader">Meta</h4>
						<div class="row id">
							<div class="large-4 columns"><strong>ID</strong></div>
							<div class="large-8 columns value"></div>
						</div>
						<div class="row description">
							<div class="large-4 columns"><strong>Description</strong></div>
							<div class="large-8 columns value"></div>
						</div>
						<div class="row link">
							<div class="large-4 columns"><strong>Link</strong></div>
							<div class="large-8 columns value"><a href="#">View on Xively &raquo;</a></div>
						</div>
						<div class="row creator">
							<div class="large-4 columns"><strong>Creator</strong></div>
							<div class="large-8 columns value"></div>
						</div>
						<div class="row updated">
							<div class="large-4 columns"><strong>Updated</strong></div>
							<div class="large-8 columns value"></div>
						</div>
						<div class="row tags">
							<div class="large-4 columns"><strong>Tags</strong></div>
							<div class="large-8 columns value"></div>
						</div>
					</div>
					<div class="large-5 columns">
						<h4 class="subheader">Location</h4>
						<div class="alert alert-box hidden no-location">
							Sorry, no location information is available.
						</div>
						<div class="row location-name">
							<div class="large-4 columns"><strong>Name</strong></div>
							<div class="large-8 columns value"></div>
						</div>
						<div class="row latitude">
							<div class="large-4 columns"><strong>Latitude</strong></div>
							<div class="large-8 columns value"></div>
						</div>
						<div class="row longitude">
							<div class="large-4 columns"><strong>Longitude</strong></div>
							<div class="large-8 columns value"></div>
						</div>
						<div class="row elevation">
							<div class="large-4 columns"><strong>Elevation</strong></div>
							<div class="large-8 columns value"></div>
						</div>
						<div class="row disposition">
							<div class="large-4 columns"><strong>Disposition</strong></div>
							<div class="large-8 columns value"></div>
						</div>
						<div class="row map">
							<div class="large-4 columns"><strong>Map</strong></div>
							<div class="large-8 columns value"><a href="#">View on Google Maps &raquo;</a></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<div class="button-group" style="float: right;">
							<a href="#" class="small button secondary duration-hour">6 Hrs</a>
							<a href="#" class="small button secondary duration-day">Day</a>
							<a href="#" class="small button secondary duration-week">Week</a>
							<a href="#" class="small button secondary duration-month">Month</a>
							<a href="#" class="small button secondary duration-90">90 Days</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<div class="datastreams" style="padding-bottom: 15px;">
							<div class="datastream hidden">
								<hr/>
								<div class="row">
									<div class="large-9 columns datastream-name subheader" style="font-size: 24px;">
										Datastream Name
									</div>
									<div class="large-3 columns datastream-value subheader" style="font-size: 24px; text-align: right;">
										420
									</div>
								</div>
								<div class="row">
									<div class="large-12 columns">
										<div class="graphWrapper" style="margin-top: 15px; padding: 10px; text-align: center;">
											<div class="graph" style="width: 960px; margin: auto;"></div>
										</div>
										<div class="slider" style="width: 960px; height: 15px; margin: auto;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr/>
				</div>
			</div>
		</div>
	</div>
    
    <!-- Modals -->
	<div id="loadingData" class="reveal-modal small text-center">
		<br/><br/><h2 class="subheader">Loading...</h2><br/><br/>
	</div>            
            
            

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>

<!-- scripts for this page -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
<!-- knob -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.knob.js"></script>
<!-- flot charts -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flot.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flot.stack.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flot.resize.js"></script>
<!-- morrisjs -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/morris.min.js"></script>
<!-- xively -->
<script src="<?php echo get_template_directory_uri(); ?>/js/xivelyjs-1.0.0.min.js"></script>
<script type="text/javascript">  
if (typeof jQuery == "function") { jQuery.noConflict(); }

// Make sure the document is ready to be handled  
jQuery(document).ready(function(jQuery) {  
  
  // Set the Xively API key (https://xively.com/users/YOUR_USERNAME/keys)  
  xively.setKey( "qJmdX7oHEdGv7sqIz6XvpulgKT6A601PifyWh7ZtJNWOX1sb" );  
  
  // Replace with your own values  
  var feedID        = 1346240819,          // Feed ID  
      datastreamID  = "photocell";       // Datastream ID   
  
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
	
	jQuery("#lightKnob").val(Math.round(dataVal));
	
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
	  jQuery("#lightKnob").val(Math.round(dataVal)).trigger("change");
    });  
  
  });  
  
  // WARNING: Code here will continue executing while we get the datastream data from Xively,   
  // use the function associated with datastream.get to work with the data   
  // once the request is complete  
});  
</script>
<!-- rickshaw -->
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.modernizr.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/d3.v2.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/rickshaw.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/follows.js"></script>
<?php /*?><!-- build the charts -->
<script type="text/javascript">

        // Morris Bar Chart
        Morris.Bar({
            element: 'hero-bar',
            data: [
                {device: '1', sells: 136},
                {device: '3G', sells: 1037},
                {device: '3GS', sells: 275},
                {device: '4', sells: 380},
                {device: '4S', sells: 655},
                {device: '5', sells: 1571}
            ],
            xkey: 'device',
            ykeys: ['sells'],
            labels: ['Sells'],
            barRatio: 0.4,
            xLabelMargin: 10,
            hideHover: 'auto',
            barColors: ["#3d88ba"]
        });


        // Morris Donut Chart
        Morris.Donut({
            element: 'hero-donut',
            data: [
                {label: 'Direct', value: 25 },
                {label: 'Referrals', value: 40 },
                {label: 'Search engines', value: 25 },
                {label: 'Unique visitors', value: 10 }
            ],
            colors: ["#30a1ec", "#76bdee", "#c4dafe"],
            formatter: function (y) { return y + "%" }
        });


        // Morris Line Chart
        var tax_data = [
            {"period": "2013-04", "visits": 2407, "signups": 660},
            {"period": "2013-03", "visits": 3351, "signups": 729},
            {"period": "2013-02", "visits": 2469, "signups": 1318},
            {"period": "2013-01", "visits": 2246, "signups": 461},
            {"period": "2012-12", "visits": 3171, "signups": 1676},
            {"period": "2012-11", "visits": 2155, "signups": 681},
            {"period": "2012-10", "visits": 1226, "signups": 620},
            {"period": "2012-09", "visits": 2245, "signups": 500}
        ];
        Morris.Line({
            element: 'hero-graph',
            data: tax_data,
            xkey: 'period',
            xLabels: "month",
            ykeys: ['visits', 'signups'],
            labels: ['Visits', 'User signups']
        });



        // Morris Area Chart
        Morris.Area({
            element: 'hero-area',
            data: [
                {period: '2010 Q1', iphone: 2666, ipad: null, itouch: 2647},
                {period: '2010 Q2', iphone: 2778, ipad: 2294, itouch: 2441},
                {period: '2010 Q3', iphone: 4912, ipad: 1969, itouch: 2501},
                {period: '2010 Q4', iphone: 3767, ipad: 3597, itouch: 5689},
                {period: '2011 Q1', iphone: 6810, ipad: 1914, itouch: 2293},
                {period: '2011 Q2', iphone: 5670, ipad: 4293, itouch: 1881},
                {period: '2011 Q3', iphone: 4820, ipad: 3795, itouch: 1588},
                {period: '2011 Q4', iphone: 15073, ipad: 5967, itouch: 5175},
                {period: '2012 Q1', iphone: 10687, ipad: 4460, itouch: 2028},
                {period: '2012 Q2', iphone: 8432, ipad: 5713, itouch: 1791}
            ],
            xkey: 'period',
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['iPhone', 'iPad', 'iPod Touch'],
            lineWidth: 2,
            hideHover: 'auto',
            lineColors: ["#81d5d9", "#a6e182", "#67bdf8"]
          });



        // Build jQuery Knobs
        jQuery(".knob").knob({
                'min':0
                ,'max':255
    	});



        //  jQuery Flot Chart
        var visits = [[1, 50], [2, 40], [3, 45], [4, 23],[5, 55],[6, 65],[7, 61],[8, 70],[9, 65],[10, 75],[11, 57],[12, 59]];
        var visitors = [[1, 25], [2, 50], [3, 23], [4, 48],[5, 38],[6, 40],[7, 47],[8, 55],[9, 43],[10,50],[11,47],[12, 39]];

        var plot = jQuery.plot(jQuery("#statsChart"),
            [ { data: visits, label: "Signups"},
             { data: visitors, label: "Visits" }], {
                series: {
                    lines: { show: true,
                            lineWidth: 1,
                            fill: true, 
                            fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.09 } ] }
                         },
                    points: { show: true, 
                             lineWidth: 2,
                             radius: 3
                         },
                    shadowSize: 0,
                    stack: true
                },
                grid: { hoverable: true, 
                       clickable: true, 
                       tickColor: "#f9f9f9",
                       borderWidth: 0
                    },
                legend: {
                        // show: false
                        labelBoxBorderColor: "#fff"
                    },  
                colors: ["#a7b5c5", "#30a0eb"],
                xaxis: {
                    ticks: [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4,"APR"], [5,"MAY"], [6,"JUN"], 
                           [7,"JUL"], [8,"AUG"], [9,"SEP"], [10,"OCT"], [11,"NOV"], [12,"DEC"]],
                    font: {
                        size: 12,
                        family: "Open Sans, Arial",
                        variant: "small-caps",
                        color: "#9da3a9"
                    }
                },
                yaxis: {
                    ticks:3, 
                    tickDecimals: 0,
                    font: {size:12, color: "#9da3a9"}
                }
             });

        function showTooltip(x, y, contents) {
            jQuery('<div id="tooltip">' + contents + '</div>').css( {
                position: 'absolute',
                display: 'none',
                top: y - 30,
                left: x - 50,
                color: "#fff",
                padding: '2px 5px',
                'border-radius': '6px',
                'background-color': '#000',
                opacity: 0.80
            }).appendTo("body").fadeIn(200);
        }

        var previousPoint = null;
        jQuery("#statsChart").bind("plothover", function (event, pos, item) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    jQuery("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(0),
                        y = item.datapoint[1].toFixed(0);

                    var month = item.series.xaxis.ticks[item.dataIndex].label;

                    showTooltip(item.pageX, item.pageY,
                                item.series.label + " of " + month + ": " + y);
                }
            }
            else {
                jQuery("#tooltip").remove();
                previousPoint = null;
            }
        });
</script><?php */?>