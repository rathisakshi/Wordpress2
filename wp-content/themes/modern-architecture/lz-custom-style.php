<?php 

	$modern_architecture_custom_style = '';

	// Logo Size
	$modern_architecture_logo_top_padding = get_theme_mod('modern_architecture_logo_top_padding');
	$modern_architecture_logo_bottom_padding = get_theme_mod('modern_architecture_logo_bottom_padding');
	$modern_architecture_logo_left_padding = get_theme_mod('modern_architecture_logo_left_padding');
	$modern_architecture_logo_right_padding = get_theme_mod('modern_architecture_logo_right_padding');

	if( $modern_architecture_logo_top_padding != '' || $modern_architecture_logo_bottom_padding != '' || $modern_architecture_logo_left_padding != '' || $modern_architecture_logo_right_padding != ''){
		$modern_architecture_custom_style .=' .logo {';
			$modern_architecture_custom_style .=' padding-top: '.esc_attr($modern_architecture_logo_top_padding).'px; padding-bottom: '.esc_attr($modern_architecture_logo_bottom_padding).'px; padding-left: '.esc_attr($modern_architecture_logo_left_padding).'px; padding-right: '.esc_attr($modern_architecture_logo_right_padding).'px;';
		$modern_architecture_custom_style .=' }';
	}

	// service section padding
	$modern_architecture_what_we_do_section_padding = get_theme_mod('modern_architecture_what_we_do_section_padding');

	if( $modern_architecture_what_we_do_section_padding != ''){
		$modern_architecture_custom_style .=' #our-services {';
			$modern_architecture_custom_style .=' padding-top: '.esc_attr($modern_architecture_what_we_do_section_padding).'px; padding-bottom: '.esc_attr($modern_architecture_what_we_do_section_padding).'px;';
		$modern_architecture_custom_style .=' }';
	}

	// Site Title Font Size
	$modern_architecture_site_title_font_size = get_theme_mod('modern_architecture_site_title_font_size');
	if( $modern_architecture_site_title_font_size != ''){
		$modern_architecture_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$modern_architecture_custom_style .=' font-size: '.esc_attr($modern_architecture_site_title_font_size).'px;';
		$modern_architecture_custom_style .=' }';
	}

	// Site Tagline Font Size
	$modern_architecture_site_tagline_font_size = get_theme_mod('modern_architecture_site_tagline_font_size');
	if( $modern_architecture_site_tagline_font_size != ''){
		$modern_architecture_custom_style .=' .logo p.site-description {';
			$modern_architecture_custom_style .=' font-size: '.esc_attr($modern_architecture_site_tagline_font_size).'px;';
		$modern_architecture_custom_style .=' }';
	}

	// Header Image
	$header_image_url = modern_architecture_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$modern_architecture_custom_style .=' #inner-pages-header {';
			$modern_architecture_custom_style .=' background-image: url('. esc_url( $header_image_url ).'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;';
		$modern_architecture_custom_style .=' }';
		$modern_architecture_custom_style .=' .header-overlay {';
			$modern_architecture_custom_style .=' position: absolute; 	width: 100%; height: 100%; 	top: 0; left: 0; background: #000; opacity: 0.3;';
		$modern_architecture_custom_style .=' }';
	} else {
		$modern_architecture_custom_style .=' #inner-pages-header {';
			$modern_architecture_custom_style .=' background: linear-gradient(0deg,#c1babe,#faf6f6 80%) no-repeat; ';
		$modern_architecture_custom_style .=' }';
		$modern_architecture_custom_style .=' #inner-pages-header h1 {';
			$modern_architecture_custom_style .=' color: #000; ';
		$modern_architecture_custom_style .=' }';
	}

	$modern_architecture_slider_hide_show = get_theme_mod('modern_architecture_slider_hide_show',false);
	if( $modern_architecture_slider_hide_show == true){
		$modern_architecture_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$modern_architecture_custom_style .=' display:none;';
		$modern_architecture_custom_style .=' }';
	}

	// Copyright padding
	$modern_architecture_copyright_padding = get_theme_mod('modern_architecture_copyright_padding');
	if( $modern_architecture_copyright_padding != ''){
		$modern_architecture_custom_style .=' .site-info {';
			$modern_architecture_custom_style .=' padding-top: '.esc_attr($modern_architecture_copyright_padding).'px; padding-bottom: '.esc_attr($modern_architecture_copyright_padding).'px;';
		$modern_architecture_custom_style .=' }';
	}