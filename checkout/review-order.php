<?php
/**
 * Review order table
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="shop_table woocommerce-checkout-review-order-table">
 
 <?php
			do_action( 'woocommerce_review_order_before_cart_contents' );

			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					?>
					<div class="review-row">
                    
                      <div class="review-image">
					     <?php $thumbnail = apply_filters( 'woocommerce_in_cart_product_thumbnail', $_product->get_image(), $values, $cart_item_key ); echo $thumbnail; ?>
                      </div>
                      
                      
                      <div class="review-row-border">
                      
                      <div class="review-name">
					    <?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
                      </div>
                      
                      <div class="review-quantity">
					    <?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
                      </div>
                      
                      <div class="review-sum">
					   <?php echo WC()->cart->get_item_data( $cart_item ); ?>
					   <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
                      </div>
                      
                      </div> <!-- border end -->
                      
					
						
					</div>
                    
                    
                        
                        
					<?php
				}
			}

			do_action( 'woocommerce_review_order_after_cart_contents' );
		?>
 
  




<div class="review-total-row">
	
	
	

		<?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

		<div class="review-total">
            <div class="gratis">Gratis verzending</div>
			<div class="col-1">Totaal</div>
			<div class="col-2"><?php wc_cart_totals_order_total_html(); ?></div>
		</div>

		<?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

</div>


</div>
