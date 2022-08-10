<?php
/**
 * The template for displaying Archive pages.
 *
 * @package pastel
 */

get_header(); ?>

<div id="wrapper">
	<div class="innerwrapper">
		<div id="content">
			<?php the_archive_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php the_archive_description( '<span class="taxonomy-description">', '</span>' ); ?>
			<?php if ( have_posts() ) : ?>
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
				?>
				<?php the_posts_pagination(); ?>
			<?php else : ?>
				<h2 class="center">
					<?php esc_html_e( 'Not Found', 'pastel-lite' ); ?>
				</h2>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
