<?php
/**
 * Pastel: Customizer
 *
 * @package pastel
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pastel_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section(
		'pastel_theme_options',
		array(
			'title'    => esc_html__( 'Theme Options', 'pastel-lite' ),
			'priority' => 125,
		)
	);

	$wp_customize->add_setting(
		'copyright_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'copyright_text',
		array(
			'label'   => esc_html__( 'Add copyright text in the footer.', 'pastel-lite' ),
			'section' => 'pastel_theme_options',
			'type'    => 'textarea',
		)
	);

	$wp_customize->add_setting(
		'text-color',
		array(
			'default'           => '#000000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'text-color',
			array(
				'label'    => esc_html__( 'General text color', 'pastel-lite' ),
				'section'  => 'colors',
				'settings' => 'text-color',
				'priority' => 8,
			)
		)
	);

	$wp_customize->add_setting(
		'header-bg',
		array(
			'default'           => '#f7f7f7',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header-bg',
			array(
				'label'    => esc_html__( 'Header background', 'pastel-lite' ),
				'section'  => 'colors',
				'settings' => 'header-bg',
				'priority' => 9,
			)
		)
	);

	$wp_customize->add_setting(
		'menu-links',
		array(
			'default'           => '#000000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'menu-links',
			array(
				'label'    => esc_html__( 'Menu links', 'pastel-lite' ),
				'section'  => 'colors',
				'settings' => 'menu-links',
				'priority' => 10,
			)
		)
	);

	$wp_customize->add_setting(
		'secondary-color',
		array(
			'default'           => '#544a7d',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'secondary-color',
			array(
				'label'    => esc_html__( 'Change the theme purple color throughout', 'pastel-lite' ),
				'section'  => 'colors',
				'settings' => 'secondary-color',
				'priority' => 12,
			)
		)
	);

	$wp_customize->add_setting(
		'third-color',
		array(
			'default'           => '#ffd452',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'third-color',
			array(
				'label'    => esc_html__( 'Change the theme yellow color throughout', 'pastel-lite' ),
				'section'  => 'colors',
				'settings' => 'third-color',
				'priority' => 11,
			)
		)
	);

	$wp_customize->add_setting(
		'footer-bg',
		array(
			'default'           => '#272339',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer-bg',
			array(
				'label'    => esc_html__( 'Footer background', 'pastel-lite' ),
				'section'  => 'colors',
				'settings' => 'footer-bg',
				'priority' => 13,
			)
		)
	);

	$wp_customize->add_setting(
		'title-color',
		array(
			'default'           => '#000000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'title-color',
			array(
				'label'    => esc_html__( 'Titles color', 'pastel-lite' ),
				'section'  => 'colors',
				'settings' => 'title-color',
				'priority' => 14,
			)
		)
	);
}
add_action( 'customize_register', 'pastel_customize_register' );

/**
 * Change colors.
 */
function pastel_customizer_css() {
	?>
	<style type="text/css">
		body {
			color: <?php echo esc_html( get_theme_mod( 'text-color', '#000000' ) ); ?>;
		}
		.sf-menu a {
			color: <?php echo esc_html( get_theme_mod( 'menu-links', '#000000' ) ); ?>;
		}
		#frontmenu ul li:nth-child(2n+2) a, #frontmenu ul li:nth-child(2n+2) a:before, .error404 #searchform input#searchsubmit, .pagination a:hover, .pagination span.current, .wpcf7 input.wpcf7-submit, .wp-block-search .wp-block-search__button, .serviceblock .wp-block-button__link, a.more-link, #submit {
			background: <?php echo esc_html( get_theme_mod( 'secondary-color', '#544a7d' ) ); ?>;
		}
		p.singletags a {
			color: <?php echo esc_html( get_theme_mod( 'secondary-color', '#544a7d' ) ); ?>;
		}
		.error404 .text:nth-child(3) {
			stroke: <?php echo esc_html( get_theme_mod( 'secondary-color', '#544a7d' ) ); ?>;
		}
		.error404 #searchform input#searchsubmit {
			border: solid 2px <?php echo esc_html( get_theme_mod( 'secondary-color', '#544a7d' ) ); ?>;
		}
		.sf-menu a:after, #frontmenu ul li:nth-child(2n+1) a, #frontmenu ul li:nth-child(2n+1) a:before, #infinite-handle span, .pastelcover .wp-block-button__link {
			background: <?php echo esc_html( get_theme_mod( 'third-color', '#ffd452' ) ); ?>;
		}
		.sf-menu ul li.current-menu-item a, .sf-menu ul li a:hover, .sf-menu ul ul li a:hover {
			color: <?php echo esc_html( get_theme_mod( 'third-color', '#ffd452' ) ); ?>;
		}
		.error404 .text:nth-child(1), .error404 .text:nth-child(5) {
			stroke: <?php echo esc_html( get_theme_mod( 'third-color', '#ffd452' ) ); ?>;
		}
		.nav-bars {
			border: solid 3px <?php echo esc_html( get_theme_mod( 'third-color', '#ffd452' ) ); ?>;
		}
		#header {
			background: <?php echo esc_html( get_theme_mod( 'header-bg', '#f7f7f7' ) ); ?>;
		}
		#footer {
			background: <?php echo esc_html( get_theme_mod( 'footer-bg', '#272339' ) ); ?>;
		}
		h1, h2, h3, h4, h5, h6, #topwidget h2.widget-title, #topwidget h2, .owl-carousel h2.woocommerce-loop-product__title, h1.page-title, h1.entry-title, h2.entry-title, h2.entry-title a, .serviceblock h3, .teammembers h3, #respond h3, #comments h2 {
			color: <?php echo esc_html( get_theme_mod( 'title-color', '#000000' ) ); ?>;
		}
	</style>
	<?php
}
add_action( 'wp_head', 'pastel_customizer_css' );

/**
 * Load dynamic logic for the customizer controls area.
 */
function pastel_customize_preview_js() {
	wp_enqueue_script( 'pastel_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'pastel_customize_preview_js' );
