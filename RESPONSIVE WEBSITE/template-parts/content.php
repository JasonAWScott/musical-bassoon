<?php
/**
 * Template part for displaying posts
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

	<?php construction_kit_post_thumbnail(); ?>
	
	<div class="content-wrap">
		<div class="content-wrap-inner">
			<header class="entry-header">
				<?php
				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php construction_kit_posted_top(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif;

				if ( is_singular() ) :
					if( ( 'checked' !== $disable_title ) ):
						the_title( '<h1 class="entry-title">', '</h1>' );
					endif;
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php construction_kit_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
				if ( is_singular() ) :
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'construction-kit' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'construction-kit' ),
						'after'  => '</div>',
					) );
				else :
					the_excerpt();
				endif;
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php construction_kit_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
