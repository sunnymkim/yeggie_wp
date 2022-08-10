<?php
/**
 * Themes functions and definitions
 *
 * @package pastel
 */

// This theme requires WordPress 5.6 or later.

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function pastel_setup() {
	global $content_width;
	if ( ! isset( $content_width ) ) {
			$content_width = 1600;
	}

	load_theme_textdomain( 'pastel', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'responsive-embeds' );

	add_post_type_support( 'page', 'excerpt' );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'align-wide' );

	add_theme_support( 'html5', array( 'gallery', 'caption' ) );

	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name' => esc_html__( 'Small', 'pastel-lite' ),
				'size' => 13,
				'slug' => 'small',
			),
			array(
				'name' => esc_html__( 'Regular', 'pastel-lite' ),
				'size' => 17,
				'slug' => 'regular',
			),
			array(
				'name' => esc_html__( 'Medium', 'pastel-lite' ),
				'size' => 26,
				'slug' => 'medium',
			),
			array(
				'name' => esc_html__( 'Large', 'pastel-lite' ),
				'size' => 36,
				'slug' => 'large',
			),
			array(
				'name' => esc_html__( 'Huge', 'pastel-lite' ),
				'size' => 50,
				'slug' => 'huge',
			),
		)
	);

	add_theme_support( 'editor-styles' );

	add_editor_style( 'style-editor.css' );
	add_editor_style( pastel_nunito_font_url() );

	register_nav_menus(
		array(
			'main-menu'   => esc_html__( 'Primary Menu', 'pastel-lite' ),
			'front-menu'  => esc_html__( 'Front Menu', 'pastel-lite' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'pastel-lite' ),
		)
	);

	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'ffffff',
		)
	);

	add_theme_support( 'post-thumbnails' );
	add_image_size( 'pastel-blogthumb', 1300, 9999 );
}
add_action( 'after_setup_theme', 'pastel_setup' );

/**
 * Register widget areas.
 */
function pastel_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Top Widget', 'pastel-lite' ),
			'id'            => 'sidebar-2',
			'description'   => '',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets', 'pastel-lite' ),
			'id'            => 'sidebar-4',
			'description'   => '',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pastel_widgets_init' );

/**
 * Register Nunito Sans for Pastel.
 *
 * @return string
 */
function pastel_nunito_font_url() {
	$nunito_font_url = '';

	/*
	Translators: If there are characters in your language that are not supported
	by this font, translate this to 'off'. Do not translate into your own language.
	*/
	if ( 'off' !== _x( 'on', 'Nunito font: on or off', 'pastel-lite' ) ) {
		$nunito_font_url = add_query_arg( 'family', rawurlencode( 'Nunito Sans:300,400,600,700,900' ), 'https://fonts.googleapis.com/css' );
	}
	return $nunito_font_url;
}

/**
 * Including theme scripts and styles.
 */
function pastel_scripts_styles() {
	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( ! is_admin() ) {
		wp_enqueue_script( 'pastel-menu', get_template_directory_uri() . '/js/superfish.js', array( 'jquery' ), '1.7.4', true );
		wp_enqueue_script( 'pastel-mobile-menu', get_template_directory_uri() . '/js/reaktion.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'pastel-responsive-videos', get_template_directory_uri() . '/js/responsive-videos.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'pastel-custom', get_template_directory_uri() . '/js/customscripts.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'pastel-header', get_template_directory_uri() . '/js/headroom.js', array( 'jquery' ), '0.12.0', true );
		wp_enqueue_style( 'pastel-nunito', pastel_nunito_font_url(), array(), '1.0', null );
		wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.3' );
		wp_enqueue_style( 'pastel-style', get_stylesheet_uri(), array(), '1.0' );
		wp_style_add_data( 'pastel-style', 'rtl', 'replace' );
	}
}
add_action( 'wp_enqueue_scripts', 'pastel_scripts_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Block patterns integrated in theme.
 */
require get_template_directory() . '/inc/block-patterns.php';

function prefix_send_email_to_admin() {
	echo "Hello ", $_POST['fullname'], "<br>";
}

add_action( 'admin_post_nopriv_contact_form', 'prefix_send_email_to_admin' );
add_action( 'admin_post_contact_form', 'prefix_send_email_to_admin' );
