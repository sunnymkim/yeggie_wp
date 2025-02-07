<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package pastel
 */

get_header(); ?>

<div id="wrapper">
	<div class="innerwrapper">
		<div id="content">
			<h1 class="entry-title">
				<?php
				/* translators: %s: Search Results for */
				printf( esc_html__( 'Search Results for: %s', 'pastel-lite' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
			<?php if ( have_posts() ) : ?>
				<?php
				while ( have_posts() ) :
					the_post();
								get_template_part( 'content', get_post_format() );
						endwhile;
				?>
				<?php the_posts_pagination(); ?>
			<?php else : ?>
				<p class="center">
					<?php esc_html_e( 'No results.', 'pastel-lite' ); ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
