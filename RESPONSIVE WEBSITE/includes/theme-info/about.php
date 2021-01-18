<?php
/**
 * About configuration
 *
 * @package Construction_Kit
 */

$config = array(
	'menu_name' => esc_html__( 'About Construction Kit', 'construction-kit' ),
	'page_name' => esc_html__( 'About Construction Kit', 'construction-kit' ),

	/* translators: theme version */
	'welcome_title' => sprintf( esc_html__( 'Welcome to %s - ', 'construction-kit' ), 'Construction Kit' ),

	/* translators: 1: theme name */
	'welcome_content' => esc_html__( 'Construction Kit is a simple, clean and lightweight multi-purpose WordPress theme compatible with Elementor and Gutenberg.', 'construction-kit' ),

	// Quick links.
	'quick_links' => array(
		'theme_url' => array(
			'text' => esc_html__( 'Theme Details','construction-kit' ),
			'url'  => 'https://wpcharms.com/item/construction-kit/',
			),
		'demo_url' => array(
			'text' => esc_html__( 'View Demo','construction-kit' ),
			'url'  => 'https://demo.wpcharms.com/construction-kit/',
			),
		'documentation_url' => array(
			'text'   => esc_html__( 'View Documentation','construction-kit' ),
			'url'    => 'https://wpcharms.com/documentation/construction-kit/',
			),
		'rate_url' => array(
			'text' => esc_html__( 'Rate This Theme','construction-kit' ),
			'url'  => 'https://wordpress.org/support/theme/construction-kit/reviews/',
			),
		),

	// Tabs.
	'tabs' => array(
		'getting_started'     => esc_html__( 'Getting Started', 'construction-kit' ),
		'recommended_actions' => esc_html__( 'Recommended Actions', 'construction-kit' ),
		'demo_content'        => esc_html__( 'Demo Content', 'construction-kit' ),
		'free_pro'            => esc_html__( 'FREE VS. PRO', 'construction-kit' ),
	),

	// Getting started.
	'getting_started' => array(
		array(
			'title'               => esc_html__( 'Theme Documentation', 'construction-kit' ),
			'text'                => esc_html__( 'Find step by step instructions with video documentation to setup theme easily.', 'construction-kit' ),
			'button_label'        => esc_html__( 'View documentation', 'construction-kit' ),
			'button_link'         => 'https://wpcharms.com/documentation/construction-kit/',
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		array(
			'title'               => esc_html__( 'Recommended Actions', 'construction-kit' ),
			'text'                => esc_html__( 'We recommend few steps to take so that you can get complete site like shown in demo.', 'construction-kit' ),
			'button_label'        => esc_html__( 'Check recommended actions', 'construction-kit' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=construction-kit-about&tab=recommended_actions' ) ),
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'               => esc_html__( 'Customize Everything', 'construction-kit' ),
			'text'                => esc_html__( 'Start customizing every aspect of the website with customizer.', 'construction-kit' ),
			'button_label'        => esc_html__( 'Go to Customizer', 'construction-kit' ),
			'button_link'         => esc_url( wp_customize_url() ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),

		array(
			'title'        			=> esc_html__( 'Pro Version', 'construction-kit' ),
			'text'         			=> esc_html__( 'Upgrade to pro version for additional features and options.', 'construction-kit' ),
			'button_label' 			=> esc_html__( 'View Pro Version', 'construction-kit' ),
			'button_link'  			=> 'https://wpcharms.com/item/construction-kit-pro/',
			'is_button'    			=> true,
			'recommended_actions' 	=> false,
			'is_new_tab'   			=> true,
		),

		array(
			'title'        			=> esc_html__( 'Contact Support', 'construction-kit' ),
			'text'         			=> esc_html__( 'If you have any problem, feel free to create ticket on our dedicated Support forum.', 'construction-kit' ),
			'button_label' 			=> esc_html__( 'Contact Support', 'construction-kit' ),
			'button_link'  			=> esc_url( 'https://wpcharms.com/support/item/construction-kit/' ),
			'is_button'    			=> false,
			'recommended_actions' 	=> false,
			'is_new_tab'   			=> true,
		),

		array(
			'title'        => esc_html__( 'Customization Request', 'construction-kit' ),
			'text'         => esc_html__( 'We have dedicated team members for theme customization. Feel free to contact us any time if you need any customization service.', 'construction-kit' ),
			'button_label' => esc_html__( 'Customization Request', 'construction-kit' ),
			'button_link'  => 'https://wpcharms.com/contact/',
			'is_button'    => false,
			'recommended_actions' 	=> false,
			'is_new_tab'   => true,
		),
	),

	// Recommended actions.
	'recommended_actions' => array(
		'content' => array(
			'one-click-demo-import' => array(
				'title'       => esc_html__( 'One Click Demo Import', 'construction-kit' ),
				'description' => esc_html__( 'Please install the One Click Demo Import plugin to import the demo content. After activation go to Appearance >> Import Demo Data and import it.', 'construction-kit' ),
				'check'       => class_exists( 'OCDI_Plugin' ),
				'plugin_slug' => 'one-click-demo-import',
				'id'          => 'one-click-demo-import',
			),
		),
	),

	// Demo content.
	'demo_content' => array(
		'description' => sprintf( esc_html__( 'Install %1$s plugin to import demo content. Demo data are bundled within the theme, Please make sure plugin is installed and activated. After plugin activation, go to Import Demo Data menu under Appearance and import it.', 'construction-kit' ), '<a href="https://wordpress.org/plugins/one-click-demo-import/" target="_blank">' . esc_html__( 'One Click Demo Import', 'construction-kit' ) . '</a>' ),
		),

    // Free vs pro array.
    'free_pro' => array(

	    array(
		    'title'     => esc_html__( 'Gutenberg & Elementor Compatible', 'construction-kit' ),
		    'desc'      => esc_html__( 'Theme supports/works perfectly with Gutenberg and Elementor', 'construction-kit' ),
		    'free'      => esc_html__('yes','construction-kit'),
		    'pro'       => esc_html__('yes','construction-kit'),
	    ),

	    array(
		    'title'     => esc_html__( 'Sticky Header', 'construction-kit' ),
		    'desc'      => esc_html__( 'Option to make header sticky at top', 'construction-kit' ),
		    'free'      => esc_html__('no','construction-kit'),
		    'pro'       => esc_html__('yes','construction-kit'),
	    ),

	    array(
		    'title'     => esc_html__( 'Font Options', 'construction-kit' ),
		    'desc' 		=> esc_html__( 'Google fonts options for changing the overall site fonts', 'construction-kit' ),
		    'free'  	=> 'no',
		    'pro'   	=> esc_html__('100+','construction-kit'),
	    ),

        array(
    	    'title'     => esc_html__( 'Color Options', 'construction-kit' ),
    	    'desc'      => esc_html__( 'Options to change the primary color of a site', 'construction-kit' ),
    	    'free'      => esc_html__('no','construction-kit'),
    	    'pro'       => esc_html__('yes','construction-kit'),
        ),

        array(
    	    'title'     => esc_html__( 'WooCommerce Options', 'construction-kit' ),
    	    'desc'      => esc_html__( 'Options to manage your store using WooCommerce plugin', 'construction-kit' ),
    	    'free'      => esc_html__('Basic','construction-kit'),
    	    'pro'       => esc_html__('Advanced','construction-kit'),
        ),

        array(
    	    'title'     => esc_html__( 'Sticky Footer', 'construction-kit' ),
    	    'desc'      => esc_html__( 'Option to make footer sticky at bottom with parallax effect', 'construction-kit' ),
    	    'free'      => esc_html__('no','construction-kit'),
    	    'pro'       => esc_html__('yes','construction-kit'),
        ),

        array(
    	    'title'     => esc_html__( 'Hide or Override Footer Credit', 'construction-kit' ),
    	    'desc'      => esc_html__( 'Option to enable/disable or override Powerby text in footer', 'construction-kit' ),
    	    'free'      => esc_html__('no','construction-kit'),
    	    'pro'       => esc_html__('yes','construction-kit'),
        ),

	    array(
		    'title'     => esc_html__( 'Support Forum', 'construction-kit' ),
		    'desc'      => esc_html__( 'Highly experienced and dedicated support team for your help plus online chat.', 'construction-kit' ),
		    'free'      => esc_html__('yes', 'construction-kit'),
		    'pro'       => esc_html__('High Priority', 'construction-kit'),
	    )

    ),

);
Construction_Kit_About::init( apply_filters( 'construction_kit_about_filter', $config ) );
