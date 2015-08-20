<?php
$args = array(
	'option_none_value'  => '-1',
	'orderby'            => 'name', 
	'order'              => 'ASC',
	'hide_empty'         => 1, 
	'name'               => 'category',
	'id'                 => '',
	'class'              => 'product_cat_dropdown',
	'taxonomy'           => 'product_cat',
	'value_field'	     => 'slug',	
	'show_option_all'	 => 'All categories'
);
?>

<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'woocommerce' ); ?></label>
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />
	<div class="select-style"><?php wp_dropdown_categories($args); ?></div>
	<input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>"  class="search-field-btn" />
	<input type="hidden" name="post_type" value="product" />
</form>