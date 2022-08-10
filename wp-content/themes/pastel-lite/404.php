<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package pastel
 */

get_header(); ?>

<div id="wrapper">
	<div class="innerwrapper">
		<div id="contentfull">
			<h1 class="entry-title">
				<?php esc_html_e( 'Oops! That page can&rsquo;t be found', 'pastel-lite' ); ?>
			</h1>
			<svg viewBox="0 0 960 400">
				<symbol id="s-text">
					<text text-anchor="middle" x="35%" y="70%">404</text>
				</symbol>
				<g class = "g-ants">
					<use xlink:href="#s-text" class="text"></use>
					<use xlink:href="#s-text" class="text"></use>
					<use xlink:href="#s-text" class="text"></use>
					<use xlink:href="#s-text" class="text"></use>
					<use xlink:href="#s-text" class="text"></use>
				</g>
			</svg>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
