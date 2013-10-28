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

			<!--<span id="mydashboard"></span>-->
        
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