<?php
/**
 * Extra functions for this theme.
 *
 * @package pastel
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @param array $args Configuration arguments.
 * @return array
 */
function pastel_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) ) {
		$args['show_home'] = true;
		return $args;
	}
}
add_filter( 'wp_page_menu_args', 'pastel_page_menu_args' );

if ( ! is_admin() ) {
	/**
	 * Defines new blog excerpt length and link text.
	 *
	 * @param array $length Configuration arguments.
	 */
	function pastel_new_excerpt_length( $length ) {
		return 70;
	}
	add_filter( 'excerpt_length', 'pastel_new_excerpt_length' );

	add_filter( 'the_excerpt', 'pastel_read_more_custom_excerpt' );
	/**
	 * Defines new blog excerpt length and link text.
	 *
	 * @param array $text Configuration arguments.
	 */
	function pastel_read_more_custom_excerpt( $text ) {
		if ( strpos( $text, '[&hellip;]' ) ) {
				$excerpt = str_replace( '[&hellip;]', '<a class="more-link" href="' . get_permalink() . '">' . __( 'Read More', 'pastel-lite' ) . '</a>', $text );
		} else {
			$excerpt = $text . '<a class="more-link" href="' . get_permalink() . '">' . __( 'Read More', 'pastel-lite' ) . '</a>';
		}
		return $excerpt;
	}
}

/**
 * Archives Titles
 *
 * @param array $title Configuration arguments.
 */
function pastel_get_the_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_year() ) {
		$title = get_the_date( _x( 'Y', 'yearly archives date format', 'pastel-lite' ) );
	} elseif ( is_month() ) {
		$title = get_the_date( _x( 'F Y', 'monthly archives date format', 'pastel-lite' ) );
	} elseif ( is_day() ) {
		$title = get_the_date( _x( 'F j, Y', 'daily archives date format', 'pastel-lite' ) );
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	} else {
		$title = esc_html__( 'Archives', 'pastel-lite' );
	}
	return $title;
};
add_filter( 'get_the_archive_title', 'pastel_get_the_archive_title', 10, 1 );

/**
 * Skip link function.
 */
function pastel_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#wrapper">' . esc_html__( 'Skip to the content', 'pastel-lite' ) . '</a>';
}
add_action( 'wp_body_open', 'pastel_skip_link', 5 );
