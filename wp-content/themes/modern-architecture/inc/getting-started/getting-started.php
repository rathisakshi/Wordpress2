<?php
//about theme info
add_action( 'admin_menu', 'modern_architecture_gettingstarted' );
function modern_architecture_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'modern-architecture'), esc_html__('About Theme', 'modern-architecture'), 'edit_theme_options', 'modern_architecture_guide', 'modern_architecture_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function modern_architecture_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'modern_architecture_admin_theme_style');

//guidline for about theme
function modern_architecture_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'modern-architecture' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Modern Architecture WordPress Theme', 'modern-architecture' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'modern-architecture' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'modern-architecture' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'modern-architecture' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'modern-architecture' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'modern-architecture' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'modern-architecture' ); ?> <a href="<?php echo esc_url( MODERN_ARCHITECTURE_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'modern-architecture' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Modern Architecture is an elegant theme presenting an ideal design for architectural firms, professional architects, construction, engineer, furniture and interior designers. The clean and sophisticated layout of this theme is a perfect match for your interior designing and architecture website. Its professional design will not only get a fine website for architects but it can also be utilized for businesses dealing in real estate and infrastructure. Everything is made simple as it is user friendly and cleanly coded. Get your brand logo uploaded on your site, change the colours and typography as this theme has customization options. An interactive element is added to your site as it includes Call To Action (CTA) buttons. The HTML codes are optimized for delivering fast loading pages. This theme can be translated into multiple languages as it has WPML compatibility and has Social media options integrated. There are widgets, shortcodes, and plugin compatibility that proves effective in enhancing functionality.', 'modern-architecture')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Modern Architecture Theme', 'modern-architecture' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'modern-architecture'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( MODERN_ARCHITECTURE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'modern-architecture'); ?></a>
			<a href="<?php echo esc_url( MODERN_ARCHITECTURE_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'modern-architecture'); ?></a>
			<a href="<?php echo esc_url( MODERN_ARCHITECTURE_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'modern-architecture'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/modern-architecture.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'modern-architecture'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'modern-architecture'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'modern-architecture'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'modern-architecture'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'modern-architecture'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'modern-architecture'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'modern-architecture'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'modern-architecture'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'modern-architecture'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'modern-architecture'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'modern-architecture'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'modern-architecture'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'modern-architecture'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>