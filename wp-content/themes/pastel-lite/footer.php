<?php
/**
 * The template for displaying the footer.
 *
 * @package pastel
 */

?>

<div id="footer">
	<div class="innerwrapper">
		<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
			<div id="footerwidgets">
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
			</div>
		<?php endif ?>

			<div id="footerbottom">
				<?php
				if ( has_nav_menu( 'footer-menu' ) ) {
						wp_nav_menu(
							array(
								'theme_location' => 'footer-menu',
								'container_id'   => 'footermenu',
								'fallback_cb'    => false,
							)
						);
				}
				?>
				<div class="copyinfo">
					<?php if ( get_theme_mod( 'copyright_text' ) == '' ) : ?>
						&copy; <?php echo esc_html( date_i18n( __( 'Y', 'pastel-lite' ) ) ); ?> <?php bloginfo( 'name' ); ?>. <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'pastel-lite' ) ); ?>">
						<?php
						/* translators: %s: Powered by */
						printf( esc_html__( 'Powered by %s.', 'pastel-lite' ), 'WordPress' );
						?>
						</a>
						<?php
						/* translators: %1$s: Theme by */
						printf( esc_html__( 'Theme by %1$s.', 'pastel-lite' ), '<a href="https://vivathemes.com/" rel="designer">Viva Themes</a>' );
						?>
					<?php else : ?>
							<?php echo wp_kses_post( get_theme_mod( 'copyright_text', '' ) ); ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body></html>
