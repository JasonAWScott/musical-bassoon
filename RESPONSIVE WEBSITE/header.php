<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Construction_Kit
 */

?>
<?php
/**
 * Hook - construction_kit_doctype.
 *
 * @hooked construction_kit_doctype_action - 10
 */
do_action( 'construction_kit_doctype' );
?>
    <head>
		<?php
		/**
		 * Hook - construction_kit_head.
		 *
		 * @hooked construction_kit_head_action - 10
		 */
		do_action( 'construction_kit_head' );

		wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

    <div id="page" class="site">
<?php
/**
 * Hook - construction_kit_before_header.
 *
 * @hooked construction_kit_before_header_action - 10
 */
do_action( 'construction_kit_before_header' );

/**
 * Hook - construction_kit_header.
 *
 * @hooked construction_kit_header_action - 10
 */
do_action( 'construction_kit_header' );

/**
 * Hook - construction_kit_after_header.
 *
 * @hooked construction_kit_after_header_action - 10
 */
do_action( 'construction_kit_after_header' );

/**
 * Hook - construction_kit_before_content.
 *
 * @hooked construction_kit_before_content_action - 10
 */
do_action( 'construction_kit_before_content' );
