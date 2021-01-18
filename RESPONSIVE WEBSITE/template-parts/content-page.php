<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Construction_Kit
 */

$postid   = get_the_ID();

$disable_title 		= get_post_meta( absint($postid), 'disable_title', true );
$disable_feat_image = get_post_meta( absint($postid), 'disable_feat_image', true );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php 
	if( ( 'checked' !== $disable_feat_image ) ){
		construction_kit_post_thumbnail(); 	
	} ?>
	
	<div class="content-wrap">
		<div class="content-wrap-inner">

			<?php 
			if( ( 'checked' !== $disable_title ) ){ ?>
				<header class="entry-header">
					<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
				</header><!-- .entry-header -->
				<?php
			} ?>
			
			<div class="entry-content">
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( esc_html__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'construction-kit' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'construction-kit' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
						edit_post_link(
							sprintf(
								/* translators: %s: Name of current post */
								esc_html__( 'Edit %s', 'construction-kit' ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							),
							'<span class="edit-link">',
							'</span>'
						);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>

		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->