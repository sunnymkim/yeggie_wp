<?php
/**
 * The Header for our theme.
 *
 * @package pastel
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=2.0, user-scalable=yes" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}
	?>
	<div id="container">
		<div id="searchpanel">
			<div class="panel-form">
				<?php get_search_form(); ?>
			</div>
		</div>

		<div id="header">
			<div class="innerwrapper">

				<div id="logo">
					<?php the_custom_logo(); ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<h1 class="site-title">
							<?php bloginfo( 'name' ); ?>
						</h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					</a>
				</div>

					<div id="woomenu">
						<a class="search-icon" href="#a" title="<?php esc_html_e( 'Search', 'pastel-lite' ); ?>">
							<svg class="svg-icon" viewBox="0 0 20 20">
								<path fill="none" d="M12.323,2.398c-0.741-0.312-1.523-0.472-2.319-0.472c-2.394,0-4.544,1.423-5.476,3.625C3.907,7.013,3.896,8.629,4.49,10.102c0.528,1.304,1.494,2.333,2.72,2.99L5.467,17.33c-0.113,0.273,0.018,0.59,0.292,0.703c0.068,0.027,0.137,0.041,0.206,0.041c0.211,0,0.412-0.127,0.498-0.334l1.74-4.23c0.583,0.186,1.18,0.309,1.795,0.309c2.394,0,4.544-1.424,5.478-3.629C16.755,7.173,15.342,3.68,12.323,2.398z M14.488,9.77c-0.769,1.807-2.529,2.975-4.49,2.975c-0.651,0-1.291-0.131-1.897-0.387c-0.002-0.004-0.002-0.004-0.002-0.004c-0.003,0-0.003,0-0.003,0s0,0,0,0c-1.195-0.508-2.121-1.452-2.607-2.656c-0.489-1.205-0.477-2.53,0.03-3.727c0.764-1.805,2.525-2.969,4.487-2.969c0.651,0,1.292,0.129,1.898,0.386C14.374,4.438,15.533,7.3,14.488,9.77z"></path>
							</svg>
						</a>
					</div>
				<?php
				if ( has_nav_menu( 'main-menu' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'container_id'   => 'mainmenu',
							'menu_class'     => 'superfish sf-menu',
							'fallback_cb'    => false,
						)
					);
				}
				?>
				<?php
				if ( has_nav_menu( 'main-menu' ) ) {
					wp_nav_menu(
						array(
							'theme_location'  => 'main-menu',
							'menu_id'         => 'mobilemenu',
							'container_class' => 'mmenu',
							'menu_class'      => 'navmenu',
							'fallback_cb'     => false,
						)
					);
				}
				?>
			</div>
		</div>

		<?php if ( is_front_page() ) : ?>
			<div id="topsection">
				<div class="innerwrapper">
					<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
						<div id="topwidget">
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
							<?php
							if ( has_nav_menu( 'front-menu' ) ) {
									wp_nav_menu(
										array(
											'theme_location' => 'front-menu',
											'container_id' => 'frontmenu',
											'menu_class'   => 'skewed',
											'fallback_cb'  => false,
										)
									);
							}
							?>
						</div>
					<?php endif ?>
					<?php if ( has_header_image() ) : ?>
						<img class="headerimg" src="<?php header_image(); ?>" />
					<?php endif ?>
				</div>
			</div>
		<?php endif; ?>
