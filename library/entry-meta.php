<?php
/**
 * Entry meta information for posts
 *
 * @package IdealabStarter
 * @since IdealabStarter 1.0.0
 */

if ( ! function_exists( 'idealabstarter_entry_meta' ) ) :
	function idealabstarter_entry_meta() {
		echo '<time class="updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( 'Posted on %s at %s.', 'idealabstarter' ), get_the_date(), get_the_time() ) . '</time>';
		echo '<p class="byline author">' . __( 'Written by', 'idealabstarter' ) . ' <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a></p>';
	}
endif;
