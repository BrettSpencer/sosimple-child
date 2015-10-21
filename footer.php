<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SoSimple
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://darkmassdesign.com/', 'sosimple' ) ); ?>"><?php printf( esc_html__( 'Darkmassdesign.com %s', 'sosimple' ), ' | ' ); ?></a>
			<?=date('Y');?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
