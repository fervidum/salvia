<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package salvia
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'salvia_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to salvia_footer action
			 *
			 * @hooked salvia_footer_widgets - 10
			 * @hooked salvia_credit         - 20
			 */
			do_action( 'salvia_footer' ); ?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'salvia_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
