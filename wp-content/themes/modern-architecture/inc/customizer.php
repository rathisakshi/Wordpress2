<?php
/**
 * Modern Architecture: Customizer
 *
 * @subpackage Modern Architecture
 * @since 1.0
 */

use WPTRT\Customize\Section\Modern_Architecture_Button;

add_action( 'customize_register', function( $manager ) {

	$manager->register_section_type( Modern_Architecture_Button::class );

	$manager->add_section(
		new Modern_Architecture_Button( $manager, 'modern_architecture_pro', [
			'title'       => __( 'Modern Architecture Pro', 'modern-architecture' ),
			'priority'    => 0,
			'button_text' => __( 'Go Pro', 'modern-architecture' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/themes/architecture-wordpress-theme/', 'modern-architecture')
		] )
	);

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'modern-architecture-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'modern-architecture-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function modern_architecture_customize_register( $wp_customize ) {

	$wp_customize->add_setting('modern_architecture_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('modern_architecture_logo_padding',array(
		'label' => __('Logo Padding','modern-architecture'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('modern_architecture_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'modern_architecture_sanitize_float'
	));
	$wp_customize->add_control('modern_architecture_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','modern-architecture'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('modern_architecture_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'modern_architecture_sanitize_float'
	));
	$wp_customize->add_control('modern_architecture_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','modern-architecture'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('modern_architecture_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'modern_architecture_sanitize_float'
	));
	$wp_customize->add_control('modern_architecture_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','modern-architecture'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('modern_architecture_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'modern_architecture_sanitize_float'
	));
	$wp_customize->add_control('modern_architecture_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','modern-architecture'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('modern_architecture_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'modern_architecture_sanitize_checkbox'
	));
	$wp_customize->add_control('modern_architecture_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','modern-architecture'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('modern_architecture_site_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'modern_architecture_sanitize_float'
	));
	$wp_customize->add_control('modern_architecture_site_title_font_size',array(
		'type' => 'number',
		'label' => __('Site Title Font Size','modern-architecture'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('modern_architecture_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'modern_architecture_sanitize_checkbox'
	));
	$wp_customize->add_control('modern_architecture_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','modern-architecture'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('modern_architecture_site_tagline_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'modern_architecture_sanitize_float'
	));
	$wp_customize->add_control('modern_architecture_site_tagline_font_size',array(
		'type' => 'number',
		'label' => __('Site Tagline Font Size','modern-architecture'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_panel( 'modern_architecture_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'modern-architecture' ),
		'description' => __( 'Description of what this panel does.', 'modern-architecture' ),
	) );

	$wp_customize->add_section( 'modern_architecture_theme_options_section', array(
    	'title'      => __( 'General Settings', 'modern-architecture' ),
		'priority'   => 30,
		'panel' => 'modern_architecture_panel_id'
	) );

	
	$wp_customize->add_setting('modern_architecture_blog_theme_options',array(
		'default' => 'One Column',
		'sanitize_callback' => 'modern_architecture_sanitize_choices'
	));
	$wp_customize->add_control('modern_architecture_blog_theme_options',array(
		'type' => 'select',
		'label' => __('Blog Page Sidebar Layout','modern-architecture'),
		'section' => 'modern_architecture_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','modern-architecture'),
		   'Right Sidebar' => __('Right Sidebar','modern-architecture'),
		   'One Column' => __('One Column','modern-architecture'),
		   'Grid Layout' => __('Grid Layout','modern-architecture')
		),
	));

	$wp_customize->add_setting('modern_architecture_single_post_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'modern_architecture_sanitize_choices'
	));
	$wp_customize->add_control('modern_architecture_single_post_sidebar',array(
        'type' => 'select',
        'label' => __('Single Post Sidebar Layout','modern-architecture'),
        'section' => 'modern_architecture_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','modern-architecture'),
            'Right Sidebar' => __('Right Sidebar','modern-architecture'),
            'One Column' => __('One Column','modern-architecture')
        ),
	));

	$wp_customize->add_setting('modern_architecture_archive_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'modern_architecture_sanitize_choices'
	));
	$wp_customize->add_control('modern_architecture_archive_page_sidebar',array(
        'type' => 'select',
        'label' => __('Archive & Search Page Sidebar Layout','modern-architecture'),
        'section' => 'modern_architecture_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','modern-architecture'),
            'Right Sidebar' => __('Right Sidebar','modern-architecture'),
            'One Column' => __('One Column','modern-architecture'),
            'Grid Layout' => __('Grid Layout','modern-architecture')
        ),
	));





	//Header section
	$wp_customize->add_section( 'modern_architecture_topbar_section' , array(
    	'title' => __( 'Topbar Section', 'modern-architecture' ),
		'priority' => null,
		'panel' => 'modern_architecture_panel_id'
	) );

	$wp_customize->add_setting('modern_architecture_hide_show_topbar',array(
    	'default' => false,
    	'sanitize_callback'	=> 'modern_architecture_sanitize_checkbox'
	));
	$wp_customize->add_control('modern_architecture_hide_show_topbar',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Topbar','modern-architecture'),
   	'section' => 'modern_architecture_topbar_section',
	));

	$wp_customize->add_setting('modern_architecture_topbar_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('modern_architecture_topbar_text',array(
   	'type' => 'text',
   	'label' => __('Add Text','modern-architecture'),
   	'section' => 'modern_architecture_topbar_section',
	));

	$wp_customize->add_setting('modern_architecture_facebook_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('modern_architecture_facebook_url',array(
   	'type' => 'url',
   	'label' => __('Add Facebook URL','modern-architecture'),
   	'section' => 'modern_architecture_topbar_section',
	));

	$wp_customize->add_setting('modern_architecture_twitter_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('modern_architecture_twitter_url',array(
   	'type' => 'url',
   	'label' => __('Add Twitter URL','modern-architecture'),
   	'section' => 'modern_architecture_topbar_section',
	));

	$wp_customize->add_setting('modern_architecture_instagram_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('modern_architecture_instagram_url',array(
   	'type' => 'url',
   	'label' => __('Add Instagram URL','modern-architecture'),
   	'section' => 'modern_architecture_topbar_section',
	));

	$wp_customize->add_setting('modern_architecture_linkedin_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('modern_architecture_linkedin_url',array(
   	'type' => 'url',
   	'label' => __('Add Linkedin URL','modern-architecture'),
   	'section' => 'modern_architecture_topbar_section',
	));

	$wp_customize->add_setting('modern_architecture_pinterest_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('modern_architecture_pinterest_url',array(
   	'type' => 'url',
   	'label' => __('Add Pinterest URL','modern-architecture'),
   	'section' => 'modern_architecture_topbar_section',
	));

	//home page slider
	$wp_customize->add_section( 'modern_architecture_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'modern-architecture' ),
		'priority'   => null,
		'panel' => 'modern_architecture_panel_id'
	) );

	$wp_customize->add_setting('modern_architecture_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'modern_architecture_sanitize_checkbox'
	));
	$wp_customize->add_control('modern_architecture_slider_hide_show',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide slider','modern-architecture'),
   	'section' => 'modern_architecture_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'modern_architecture_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'modern_architecture_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'modern_architecture_slider' . $count, array(
			'label' => __( 'Select Slide Image Page', 'modern-architecture' ),
			'section' => 'modern_architecture_slider_section',
			'type' => 'dropdown-pages'
		) );
	}

	//What We Do Section
	$wp_customize->add_section('modern_architecture_what_we_do',array(
		'title'	=> __('What We Do Section','modern-architecture'),
		'description'=> __('<b>Note : </b> This section will appear below the slider.','modern-architecture'),
		'panel' => 'modern_architecture_panel_id',
	));

	$wp_customize->add_setting('modern_architecture_subheading_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('modern_architecture_subheading_text',array(
   	'type' => 'text',
   	'label' => __('Add Section Sub-heading','modern-architecture'),
   	'section' => 'modern_architecture_what_we_do',
	));

	$wp_customize->add_setting('modern_architecture_heading_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('modern_architecture_heading_text',array(
   	'type' => 'text',
   	'label' => __('Add Section Heading','modern-architecture'),
   	'section' => 'modern_architecture_what_we_do',
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('modern_architecture_category_setting',array(
		'default'	=> 'select',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('modern_architecture_category_setting',array(
		'type'    => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category to display Post','modern-architecture'),
		'description' => __('Image Size (58px x 58px)','modern-architecture'),
		'section' => 'modern_architecture_what_we_do',
	));

	$wp_customize->add_setting('modern_architecture_what_we_do_section_padding',array(
      'default' => '',
      'sanitize_callback'	=> 'modern_architecture_sanitize_float'
   ));
   $wp_customize->add_control('modern_architecture_what_we_do_section_padding',array(
      'type' => 'number',
      'label' => __('Section Top Bottom Padding','modern-architecture'),
      'section' => 'modern_architecture_what_we_do',
   ));

	//Footer
 	$wp_customize->add_section( 'modern_architecture_footer', array(
    	'title'      => __( 'Footer Settings', 'modern-architecture' ),
		'priority'   => null,
		'panel' => 'modern_architecture_panel_id'
	) );

	$wp_customize->add_setting('modern_architecture_show_back_totop',array(
 		'default' => true,
   	'sanitize_callback'	=> 'modern_architecture_sanitize_checkbox'
	));
	$wp_customize->add_control('modern_architecture_show_back_totop',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Back to Top','modern-architecture'),
   	'section' => 'modern_architecture_footer'
	));

 	$wp_customize->add_setting('modern_architecture_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('modern_architecture_footer_copy',array(
		'label'	=> __('Footer Text','modern-architecture'),
		'section'	=> 'modern_architecture_footer',
		'setting'	=> 'modern_architecture_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('modern_architecture_copyright_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'modern_architecture_sanitize_float'
 	));
 	$wp_customize->add_control('modern_architecture_copyright_padding',array(
		'type' => 'number',
		'label' => __('Copyright Top Bottom Padding','modern-architecture'),
		'section' => 'modern_architecture_footer',
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'modern_architecture_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'modern_architecture_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'modern_architecture_customize_register' );

function modern_architecture_customize_partial_blogname() {
	bloginfo( 'name' );
}

function modern_architecture_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function modern_architecture_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function modern_architecture_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}