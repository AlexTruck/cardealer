<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package cardealer
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function cardealer_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'cardealer_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function cardealer_jetpack_setup
add_action( 'after_setup_theme', 'cardealer_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function cardealer_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function cardealer_infinite_scroll_render
