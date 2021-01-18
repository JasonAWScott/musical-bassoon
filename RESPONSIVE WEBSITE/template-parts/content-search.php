<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Construction_Kit
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php construction_kit_post_thumbnail(); ?>

	<div class="content-wrap">

		<div class="content-wrap-inner">
			
			<header class="entry-header">
				<?php

				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

				if ( ( 'post' === get_post_type() ) ){ ?>
					<div class="entry-meta">
						<?php construction_kit_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php 
				} ?>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->

		</div>

	</div>

</article><!-- #post-## -->
