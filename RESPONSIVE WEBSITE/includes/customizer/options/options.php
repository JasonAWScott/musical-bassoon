<?php
/**
 * Options.
 *
 * @package Construction_Kit
 */

$default = construction_kit_get_default_theme_options();

// Add Theme Options Panel.
$wp_customize->add_panel( 'theme_option_panel',
	array(
		'title'      => esc_html__( 'Theme Options', 'construction-kit' ),
		'priority'   => 80,
	)
);

// Load main header options.
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/options/header.php';

// Load blog options.
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/options/blog.php';

// Load footer options.
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/options/footer.php';