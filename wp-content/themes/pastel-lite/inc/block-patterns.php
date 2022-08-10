<?php
/**
 * Block patterns for this theme.
 *
 * @package pastel
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'pastel-blocks',
		array( 'label' => esc_html__( 'Pastel Blocks', 'pastel-lite' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Team Members.
	register_block_pattern(
		'pastel-blocks/team-members',
		array(
			'title'         => esc_html__( 'Team Members', 'pastel-lite' ),
			'categories'    => array( 'pastel-blocks' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:columns {"className":"teammembers"} --><div class="wp-block-columns teammembers"><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"id":2438,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} --><figure class="wp-block-image size-large is-style-default"><img src="#" alt=""/></figure><!-- /wp:image --><!-- wp:heading {"level":3} --><h3>Nora Schaeffer</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Ceo - Founder</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} --><figure class="wp-block-image size-large is-style-default"><img src="#" alt=""/></figure><!-- /wp:image --><!-- wp:heading {"level":3} --><h3>Jonah Mueller</h3><!-- /wp:heading --><!-- wp:paragraph --><p>General Manager</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} --><figure class="wp-block-image size-large is-style-default"><img src="#" alt=""/></figure><!-- /wp:image --><!-- wp:heading {"level":3} --><h3>Rita Dobrowski</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Marketing Director</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns -->',
		)
	);

	// Cover Block.
	register_block_pattern(
		'pastel-blocks/pastel-cover',
		array(
			'title'         => esc_html__( 'Cover block with text and button', 'pastel-lite' ),
			'categories'    => array( 'pastel-blocks' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/images/city.jpg","id":2140,"hasParallax":true,"className":"alignfull pastelcover"} --><div class="wp-block-cover has-background-dim has-parallax alignfull pastelcover" style="background-image:url(' . esc_url( get_template_directory_uri() ) . '/images/city.jpg)"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} --><p class="has-text-align-center has-large-font-size">Block pattern that contains a cover image with text and button</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link">Get in Touch</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div></div><!-- /wp:cover -->',
		)
	);

	// Services Block.
	register_block_pattern(
		'pastel-blocks/pastel-services',
		array(
			'title'         => esc_html__( 'Services Block', 'pastel-lite' ),
			'categories'    => array( 'pastel-blocks' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:columns {"className":"serviceblock"} --><div class="wp-block-columns serviceblock"><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":54}}} --><p style="font-size:54px">1</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>Business consulting</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Phasellus fringilla vehicula egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam gravida porta tellus sit amet commodo. Vivamus eget ligula lacus.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link">Read More</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":54}}} --><p style="font-size:54px">2</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>Staff training</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Phasellus fringilla vehicula egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam gravida porta tellus sit amet commodo. Vivamus eget ligula lacus.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link">Read more</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":54}}} --><p style="font-size:54px">3</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>Finance Analysis</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Phasellus fringilla vehicula egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam gravida porta tellus sit amet commodo. Vivamus eget ligula lacus.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link">Read More</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:paragraph --><p></p><!-- /wp:paragraph -->',
		)
	);

	// Partners Block.
	register_block_pattern(
		'pastel-blocks/pastel-partners',
		array(
			'title'         => esc_html__( 'Partners Block', 'pastel-lite' ),
			'categories'    => array( 'pastel-blocks' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:columns {"className":"partners"} --><div class="wp-block-columns partners"><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"id":2224,"sizeSlug":"large","linkDestination":"custom","className":"is-style-default"} --><figure class="wp-block-image size-large is-style-default"><a href="#"><img src="#" alt="" class="wp-image-2224"/></a></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"id":2222,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} --><figure class="wp-block-image size-large is-style-default"><img src="#" alt="" class="wp-image-2222"/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"id":2218,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} --><figure class="wp-block-image size-large is-style-default"><img src="#" alt="" class="wp-image-2218"/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"id":2216,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} --><figure class="wp-block-image size-large is-style-default"><img src="#" alt="" class="wp-image-2216"/></figure><!-- /wp:image --></div><!-- /wp:column --></div><!-- /wp:columns -->',
		)
	);
}
