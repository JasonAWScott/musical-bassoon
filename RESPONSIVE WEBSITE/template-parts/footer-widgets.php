<?php
/**
 * Footer widgets.
 *
 * @package Construction_Kit
 */

if ( is_active_sidebar( 'footer-1' ) ||
	 is_active_sidebar( 'footer-2' ) ||
	 is_active_sidebar( 'footer-3' ) ||
	 is_active_sidebar( 'footer-4' ) ) :
?>

	<div id="footer-widgets" class="widget-area" role="complementary">
		<div class="container">
			<?php
				$column_count = 0;
				for ( $i = 1; $i <= 4; $i++ ) {
					if ( is_active_sidebar( 'footer-' . $i ) ) {
						$column_count++;
					}
				}
			 ?>
			<div class="inner-wrapper footer-active-<?php echo $column_count; ?>">
				<?php
				for ( $i = 1; $i <= 4 ; $i++ ) {
					if ( is_active_sidebar( 'footer-' . $i ) ) {
						?>
						<aside class="footer-column footer-column-<?php echo $i; ?>">
							<?php dynamic_sidebar( 'footer-' . $i ); ?>
						</aside>
						<?php
					}
				}
				?>
			</div><!-- .inner-wrapper -->
		</div><!-- .container -->
	</div><!-- #footer-widgets -->

<?php endif;
