<?php
/**
 * The template for displaying all pages.
 *
 * @package pastel
 */

get_header(); ?>

<div id="wrapper">
			<div class="innerwrapper">
				<div id="contentfull">
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							?>
							<div class="post" id="post-<?php the_ID(); ?>">
								<div class="entry">
									<h1 class="entry-title"><?php the_title(); ?></h1>
									<?php the_content(); ?>
									<?php edit_post_link(); ?>
									<?php
									wp_link_pages(
										array(
											'before' => '<p><strong>' . esc_html__( 'Pages:', 'pastel-lite' ) . '</strong> ',
											'after'  => '</p>',
											'next_or_number' => 'number',
										)
									);
									?>
									<?php comments_template(); ?>
								</div>
							</div>
							<?php
						endwhile;
						endif;
					?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
