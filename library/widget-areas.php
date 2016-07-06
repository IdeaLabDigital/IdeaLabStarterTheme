<?php
/**
 * Register widget areas
 *
 * @package IdealabStarter
 * @since IdealabStarter 1.0.0
 */

if ( ! function_exists( 'idealabstarter_sidebar_widgets' ) ) :
function idealabstarter_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'idealabstarter' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'idealabstarter' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'idealabstarter' ),
	  'description' => __( 'Drag widgets to this footer container', 'idealabstarter' ),
	  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'idealabstarter_sidebar_widgets' );
endif;
