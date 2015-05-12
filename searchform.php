<?php
/**
 * The template for displaying search forms in fiveanddime
 *
 * @package fiveanddime
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
            <div class="inner-addon left-addon">
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search this website', 'placeholder', 'fiveanddime' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'fiveanddime' ); ?>">
                <i class="glyphicon glyphicon-search"></i>
            </div>
        </label>
	<input type="submit" class="search-submit " value=" <?php echo esc_attr_x( 'Search', 'submit button', 'fiveanddime' ); ?>">
</form>
