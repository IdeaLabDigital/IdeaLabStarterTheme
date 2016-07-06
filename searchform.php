<?php
/**
 * The template for displaying search form
 *
 * @package IdealabStarter
 * @since IdealabStarter 1.0.0
 */

do_action( 'idealabstarter_before_searchform' ); ?>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<?php do_action( 'idealabstarter_searchform_top' ); ?>
	<div class="input-group">
		<input type="text" class="input-group-field" value="" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'idealabstarter' ); ?>">
		<?php do_action( 'idealabstarter_searchform_before_search_button' ); ?>
		<div class="input-group-button">
			<input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'idealabstarter' ); ?>" class="button">
		</div>
	</div>
	<?php do_action( 'idealabstarter_searchform_after_search_button' ); ?>
</form>
<?php do_action( 'idealabstarter_after_searchform' );
