<?php
/**
 * The template for displaying Comments.
 *
 * @package pastel
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php // You can start editing here -- including this comment! ?>
	<?php if ( have_comments() ) : ?>
	<h2 class="comments-title">
		<?php
			$comments_number = get_comments_number();
		if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( esc_html( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'pastel-lite' ) ), wp_kses_post( get_the_title() ) );
		} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					esc_html( _nx( '%1$s Reply to &ldquo;%2$s&rdquo;', '%1$s Replies to &ldquo;%2$s&rdquo;', $comments_number, 'comments title', 'pastel-lite' ) ),
					esc_html( number_format_i18n( $comments_number ) ),
					wp_kses_post( get_the_title() )
				);
		}
		?>
	</h2>
	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>
	<!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation" role="navigation">
		<h1 class="assistive-text section-heading">
			<?php esc_html_e( 'Comment navigation', 'pastel-lite' ); ?>
		</h1>
		<div class="nav-previous">
			<?php previous_comments_link( esc_html__( '&larr; Older Comments', 'pastel-lite' ) ); ?>
		</div>
		<div class="nav-next">
			<?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'pastel-lite' ) ); ?>
		</div>
	</nav>
<?php endif; // check for comment navigation. ?>
		<?php
		/*
		If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) :
			?>
	<p class="nocomments">
			<?php esc_html_e( 'Comments are closed.', 'pastel-lite' ); ?>
	</p>
	<?php endif; ?>
<?php endif; ?>
	<?php comment_form(); ?>
</div>
