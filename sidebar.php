<?php
/**
 * The sidebar containing the main widget area
 *
 * @package IdealabStarter
 * @since IdealabStarter 1.0.0
 */

?>
<aside class="sidebar">
	<?php do_action( 'idealabstarter_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'idealabstarter_after_sidebar' ); ?>
</aside>
