<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fashion_designer_mart_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'fashion-designer-mart' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'fashion-designer-mart' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'fashion-designer-mart' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'fashion_designer_mart_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'fashion-designer-mart' ),
	) );

	Kirki::add_section( 'fashion_designer_mart_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'fashion-designer-mart' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_all_headings_typography',
		'section'     => 'fashion_designer_mart_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'fashion_designer_mart_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'fashion-designer-mart' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_body_content_typography',
		'section'     => 'fashion_designer_mart_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'fashion_designer_mart_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'fashion-designer-mart' ),
		'description' => esc_attr__( 'Select the typography options for your content.',  'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'fashion_designer_mart_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'fashion-designer-mart' ),
	) );

	// Additional Settings

	Kirki::add_section( 'fashion_designer_mart_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'fashion-designer-mart' ),
	    'description'    => esc_html__( 'Scroll To Top', 'fashion-designer-mart' ),
	    'panel'          => 'fashion_designer_mart_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_designer_mart_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'fashion_designer_mart_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'fashion-designer-mart' ),
			'Center' => esc_html__( 'Center', 'fashion-designer-mart' ),
			'Right'  => esc_html__( 'Right', 'fashion-designer-mart' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'fashion_designer_mart_scroll_top_icon',
		'label'    => esc_html__( 'Select Appropriate Scroll Top Icon', 'fashion-designer-mart' ),
		'section'  => 'fashion_designer_mart_additional_settings',
		'default'  => 'dashicons dashicons-arrow-up-alt',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_fashion_designer_mart',
		'label'       => esc_html__( 'Menus Text Transform', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'fashion-designer-mart' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'fashion-designer-mart' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'fashion-designer-mart' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'fashion-designer-mart' ),

		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'fashion_designer_mart_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_additional_settings',
		'default' => 'None',
		'placeholder' => esc_html__( 'Choose an option', 'fashion-designer-mart' ),
		'choices'     => [
			'None' => __('None','fashion-designer-mart'),
            'Zoominn' => __('Zoom Inn','fashion-designer-mart'),
            
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fashion_designer_mart_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_designer_mart_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_designer_mart_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'fashion_designer_mart_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'fashion-designer-mart' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','fashion-designer-mart'),
            'Right Sidebar' => __('Right Sidebar','fashion-designer-mart'),
            'One Column' => __('One Column','fashion-designer-mart')
		],
	] );

	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'fashion_designer_mart_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'fashion-designer-mart' ),
			'description'    => esc_html__( 'Shop Page', 'fashion-designer-mart' ),
			'panel'          => 'fashion_designer_mart_panel_id',
			'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_designer_mart_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_designer_mart_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_designer_mart_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
	[
		'settings' => 'fashion_designer_mart_per_columns',
		'label'    => esc_html__( 'Product Per Row', 'fashion-designer-mart' ),
		'section'  => 'fashion_designer_mart_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'fashion_designer_mart_product_per_page',
		'label'    => esc_html__( 'Product Per Page', 'fashion-designer-mart' ),
		'section'  => 'fashion_designer_mart_woocommerce_settings',
		'default'  => 9,
		'choices'  => [
			'min'  => 1,
			'max'  => 15,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number_per_row',
		'label'    => esc_html__( 'Related Product Per Column', 'fashion-designer-mart' ),
		'section'  => 'fashion_designer_mart_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number',
		'label'    => esc_html__( 'Related Product Per Page', 'fashion-designer-mart' ),
		'section'  => 'fashion_designer_mart_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'fashion_designer_mart_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'fashion-designer-mart' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','fashion-designer-mart'),
            'Right Sidebar' => __('Right Sidebar','fashion-designer-mart')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'fashion_designer_mart_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'fashion-designer-mart' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','fashion-designer-mart'),
            'Right Sidebar' => __('Right Sidebar','fashion-designer-mart')
		],
	] );

	
	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'fashion_designer_mart_woocommerce_pagination_position',
		'label'       => esc_html__( 'Woocommerce Pagination Alignment', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_woocommerce_settings',
		'default'     => 'Center',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'fashion-designer-mart' ),
			'Center' => esc_html__( 'Center', 'fashion-designer-mart' ),
			'Right'  => esc_html__( 'Right', 'fashion-designer-mart' ),
		],
	]
	);

}

	// POST SECTION

	Kirki::add_section( 'fashion_designer_mart_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'fashion-designer-mart' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'fashion-designer-mart' ),
	    'panel'          => 'fashion_designer_mart_panel_id',
	    'priority'       => 160,
	) );

		new \Kirki\Field\Sortable(
	[
		'settings' => 'fashion_designer_mart_archive_element_sortable',
		'label'    => __( 'Archive Post Page Element Reordering', 'fashion-designer-mart' ),
		'section'  => 'fashion_designer_mart_section_post',
		'default'  => [ 'option1', 'option2', 'option3' ],
		'choices'  => [
			'option1' => esc_html__( 'Post Meta', 'fashion-designer-mart' ),
			'option2' => esc_html__( 'Post Title', 'fashion-designer-mart' ),
			'option3' => esc_html__( 'Post Content', 'fashion-designer-mart' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fashion_designer_mart_post_excerpt_number_1',
		'label'       => esc_html__( 'Post Content Range', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 10,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_designer_mart_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

		new \Kirki\Field\Select(
	[
		'settings'    => 'fashion_designer_mart_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'fashion-designer-mart' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','fashion-designer-mart'),
            'Right Sidebar' => __('Right Sidebar','fashion-designer-mart')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'fashion_designer_mart_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'fashion-designer-mart' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','fashion-designer-mart'),
            'Right Sidebar' => __('Right Sidebar','fashion-designer-mart')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'fashion_designer_mart_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'fashion-designer-mart' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','fashion-designer-mart'),
            'Right Sidebar' => __('Right Sidebar','fashion-designer-mart')
		],
	] );

	Kirki::add_field( 'fashion_designer_mart_config', [
		'type'        => 'select',
		'settings'    => 'fashion_designer_mart_post_column_count',
		'label'       => esc_html__( 'Grid Column for Archive Page', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_section_post',
		'default'    => '2',
		'choices' => [
				'1' => __( '1 Column', 'fashion-designer-mart' ),
				'2' => __( '2 Column', 'fashion-designer-mart' ),
				'3' => __( '3 Column', 'fashion-designer-mart' ),
				'4' => __( '4 Column', 'fashion-designer-mart' ),
			],
	] );

		// Breadcrumb
	Kirki::add_section( 'fashion_designer_mart_bradcrumb', array(
	    'title'          => esc_html__( 'Breadcrumb Settings', 'fashion-designer-mart' ),
	    'description'    => esc_html__( 'Here you can get Breadcrumb settings', 'fashion-designer-mart' ),
	    'panel'          => 'fashion_designer_mart_panel_id',
	    'priority'       => 160,
	) );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_enable_breadcrumb_heading',
		'section'     => 'fashion_designer_mart_bradcrumb',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Single Page Breadcrumb', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_breadcrumb_enable',
		'label'       => esc_html__( 'Breadcrumb Enable / Disable', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_bradcrumb',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'default'     => '/',
        'settings' => 'fashion_designer_mart_breadcrumb_separator' ,
        'label'    => esc_html__( 'Breadcrumb Separator',  'fashion-designer-mart' ),
        'section'  => 'fashion_designer_mart_bradcrumb',
    ] );

	// HEADER SECTION

	Kirki::add_section( 'fashion_designer_mart_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'fashion-designer-mart' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'fashion-designer-mart' ),
	    'panel'          => 'fashion_designer_mart_panel_id',
	    'priority'       => 160,
	) );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_enable_search',
		'section'     => 'fashion_designer_mart_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_search_box_enable',
		'section'     => 'fashion_designer_mart_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );	

	// SLIDER SECTION

	Kirki::add_section( 'fashion_designer_mart_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'fashion-designer-mart' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'fashion-designer-mart' ),
        'panel'          => 'fashion_designer_mart_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_enable_heading',
		'section'     => 'fashion_designer_mart_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_text_unable_disable',
		'label'       => esc_html__( 'Slide Text Enable / Disable', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_slider_heading',
		'section'     => 'fashion_designer_mart_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'fashion_designer_mart_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'fashion_designer_mart_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'fashion-designer-mart' ),
		'priority'    => 10,
		'choices'     => fashion_designer_mart_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_slider_short_heading_12',
		'section'     => 'fashion_designer_mart_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number of Text', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fashion_designer_mart_post_excerpt_number',
		'label'       => esc_html__( 'Number of Slide Text To Show ', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => 22,
		'choices'     => [
			'min'  => 10,
			'max'  => 50,
			'step' => 1,
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'fashion_designer_mart_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'fashion-designer-mart' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'fashion-designer-mart' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'fashion-designer-mart' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'fashion-designer-mart' ),

		],
	] );

		new \Kirki\Field\Select(
	[
		'settings'    => 'fashion_designer_mart_slider_opacity_color',
		'label'       => esc_html__( 'Slider Opacity Option', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => '0.6',
		'placeholder' => esc_html__( 'Choose an option', 'fashion-designer-mart' ),
		'choices'     => [
			'0' => esc_html__( '0', 'fashion-designer-mart' ),
			'0.1' => esc_html__( '0.1', 'fashion-designer-mart' ),
			'0.2' => esc_html__( '0.2', 'fashion-designer-mart' ),
			'0.3' => esc_html__( '0.3', 'fashion-designer-mart' ),
			'0.4' => esc_html__( '0.4', 'fashion-designer-mart' ),
			'0.5' => esc_html__( '0.5', 'fashion-designer-mart' ),
			'0.6' => esc_html__( '0.6', 'fashion-designer-mart' ),
			'0.7' => esc_html__( '0.7', 'fashion-designer-mart' ),
			'0.8' => esc_html__( '0.8', 'fashion-designer-mart' ),
			'0.9' => esc_html__( '0.9', 'fashion-designer-mart' ),
			'1.0' => esc_html__( '1.0', 'fashion-designer-mart' ),
		],
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_overlay_option',
		'label'       => esc_html__( 'Enable / Disable Slider Overlay', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'fashion_designer_mart_slider_image_overlay_color',
		'label'       => __( 'choose your Appropriate Overlay Color', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => '',
	] );

	// OUR PRODUCTS SECTION

	Kirki::add_section( 'fashion_designer_mart_products_section', array(
        'title'          => esc_html__( 'Our Products Settings', 'fashion-designer-mart' ),
        'description'    => esc_html__( 'You have to select product category to show cosmetic section.', 'fashion-designer-mart' ),
        'panel'          => 'fashion_designer_mart_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_products_section_enable_heading',
		'section'     => 'fashion_designer_mart_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Products Section', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_products_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_products_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_products_heading',
		'section'     => 'fashion_designer_mart_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Our Products Headings',  'fashion-designer-mart' ) . '</h3>',
		'priority'    => 3,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_designer_mart_products_main_heading',
		'label'    => esc_html__( 'Main Heading', 'fashion-designer-mart' ),
		'section'  => 'fashion_designer_mart_products_section',
		'priority' => 5,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_our_product_heading',
		'section'     => 'fashion_designer_mart_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Hot Products', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 7,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'fashion_designer_mart_products_per_page',
		'label'       => esc_html__( 'Number of products to show', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_products_section',
		'default'     => 8,
		'choices'     => [
			'min'  => 0,
			'max'  => 25,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'fashion_designer_mart_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'fashion-designer-mart' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'fashion-designer-mart' ),
        'panel'          => 'fashion_designer_mart_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_footer_text_heading',
		'section'     => 'fashion_designer_mart_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_designer_mart_footer_text',
		'section'  => 'fashion_designer_mart_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'fashion_designer_mart_footer_text_heading_2',
	'section'     => 'fashion_designer_mart_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'fashion-designer-mart' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'fashion_designer_mart_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'fashion-designer-mart' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'fashion-designer-mart' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'fashion-designer-mart' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'fashion-designer-mart' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'fashion_designer_mart_footer_text_heading_1',
	'section'     => 'fashion_designer_mart_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'fashion-designer-mart' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'fashion_designer_mart_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_footer_section',
		'default'     => '',
	] );

}

add_action( 'customize_register', 'fashion_designer_mart_customizer_settings' );
function fashion_designer_mart_customizer_settings( $wp_customize ) {
	$wp_customize->add_setting('fashion_designer_mart_products_tab_number',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('fashion_designer_mart_products_tab_number',array(
		'type' => 'number',
		'label' => __('Show number of product tab','fashion-designer-mart'),
		'section' => 'fashion_designer_mart_products_section',
	));

	$fashion_designer_mart_meal_post = get_theme_mod('fashion_designer_mart_products_tab_number','');
    for ( $fashion_designer_mart_j = 1; $fashion_designer_mart_j <= $fashion_designer_mart_meal_post; $fashion_designer_mart_j++ ) {

		$wp_customize->add_setting('fashion_designer_mart_products_tabs_text'.$fashion_designer_mart_j,array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('fashion_designer_mart_products_tabs_text'.$fashion_designer_mart_j,array(
			'type' => 'text',
			'label' => __('Tab Text ','fashion-designer-mart').$fashion_designer_mart_j,
			'section' => 'fashion_designer_mart_products_section',
		));

		$fashion_designer_mart_args = array(
	       'type'                     => 'product',
	        'child_of'                 => 0,
	        'parent'                   => '',
	        'orderby'                  => 'term_group',
	        'order'                    => 'ASC',
	        'hide_empty'               => false,
	        'hierarchical'             => 1,
	        'number'                   => '',
	        'taxonomy'                 => 'product_cat',
	        'pad_counts'               => false
	    );
		$categories = get_categories($fashion_designer_mart_args);
		$fashion_designer_mart_cat_posts = array();
		$fashion_designer_mart_m = 0;
		$fashion_designer_mart_cat_posts[]='Select';
		foreach($categories as $category){
			if($fashion_designer_mart_m==0){
				$default = $category->slug;
				$fashion_designer_mart_m++;
			}
			$fashion_designer_mart_cat_posts[$category->slug] = $category->name;
		}

		$wp_customize->add_setting('fashion_designer_mart_products_category'.$fashion_designer_mart_j,array(
			'default'	=> 'select',
			'sanitize_callback' => 'fashion_designer_mart_sanitize_select',
		));

		$wp_customize->add_control('fashion_designer_mart_products_category'.$fashion_designer_mart_j,array(
			'type'    => 'select',
			'choices' => $fashion_designer_mart_cat_posts,
			'label' => __('Select category to display products ','fashion-designer-mart').$fashion_designer_mart_j,
			'section' => 'fashion_designer_mart_products_section',
		));
	}
}