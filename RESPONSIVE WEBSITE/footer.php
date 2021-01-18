<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Construction_Kit
 */

/**
 * Hook - construction_kit_after_content.
 *
 * @hooked construction_kit_after_content_action - 10
 */
do_action( 'construction_kit_after_content' );

?>

<footer id="colophon" class="site-footer" role="contentinfo">

	<?php get_template_part( 'template-parts/footer-widgets' ); ?>

    <div class="site-footer-wrap">
        <div class="container">
			<?php

			$copyright_text = construction_kit_get_option( 'copyright_text' );

			if ( ! empty( $copyright_text ) ) : ?>

                <div class="copyright">

					<?php

					$copyright = construction_kit_apply_theme_shortcode( wp_kses_post( $copyright_text ) );

					echo do_shortcode( $copyright );

					?>

                </div><!-- .copyright -->

			<?php

			endif;

			do_action( 'construction_kit_credit' );
			?>
        </div><!-- .site-footer-wrap -->
    </div><!-- .container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
