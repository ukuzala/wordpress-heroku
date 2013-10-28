<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package Ukuzala
 * @subpackage Xively_Theme
 * @since Xively Theme 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://www.ukuzala.com/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Site powered by ukuzala design', 'twentytwelve' ); ?>"><?php printf( __( 'Site powered by %s', 'twentytwelve' ), 'ukuzala' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
		document.write('<script src=' +
		('__proto__' in {} ? '<?php echo get_template_directory_uri(); ?>/js/zepto' : 'js/jquery') +
		'.js><\/script>')
</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/follows.js"></script>
</body>
</html>