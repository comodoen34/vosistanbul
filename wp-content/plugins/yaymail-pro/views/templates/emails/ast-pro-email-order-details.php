<?php
/**
 * Order details table shown in emails.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-details.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates/Emails
 * @version 3.3.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$text_align  = is_rtl() ? 'right' : 'left';
$margin_side = is_rtl() ? 'left' : 'right';

$table_font_size = '';
$kt_woomail      = get_option( 'kt_woomail' );
if ( ! empty( $kt_woomail ) && isset( $kt_woomail['font_size'] ) ) {
	$table_font_size = 'font-size:' . $kt_woomail['font_size'] . 'px';
}
$borderColor = isset( $atts['bordercolor'] ) && $atts['bordercolor'] ? 'border-color:' . html_entity_decode( $atts['bordercolor'], ENT_QUOTES, 'UTF-8' ) : 'border-color:inherit';
?>

<div style="border-color: inherit;">
		<table class="td order_details_table" cellspacing="0" cellpadding="6" style="background-color: transparent;width: 100%; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;border:0;<?php echo esc_html( $table_font_size ); ?>;border-color: inherit;" border="0">
			<tbody style="border-color: inherit;">
				<?php
				$numItems = count( $order->get_items() );
				$i        = 0;
				foreach ( $order->get_items() as $item_id => $item ) :
					$product       = $item->get_product();
					$sku           = '';
					$purchase_note = '';
					$image         = '';
					$image_size    = array( 64, 64 );

					if ( is_object( $product ) ) {
						$sku           = $product->get_sku();
						$purchase_note = $product->get_purchase_note();
						$image         = $product->get_image( $image_size );
					} else {
						$image = '<img src=' . esc_url( ast_pro()->plugin_dir_url() ) . 'assets/images/dummy-product-image.jpg>';
					}
					$last_child_class = '';
					if ( ++$i === $numItems ) {
						$last_child_class = 'last_td';
					}
					?>
					<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_order_item_class', 'order_item', $item, $order ) ); ?>" style="border-color: inherit;">
						<?php
						if ( $display_product_images && $image ) {
							?>
							<td class="td image_id <?php echo esc_attr( $last_child_class ); ?>" style="text-align:<?php echo esc_attr( $text_align ); ?>; vertical-align: middle; word-wrap:break-word;border-left:0;border:0;border-bottom:1px solid #e0e0e0;padding: 12px 5px;width: 70px;<?php echo esc_attr( $borderColor ); ?>;">
								<?php echo wp_kses_post( apply_filters( 'woocommerce_order_item_thumbnail', $image, $item ) ); ?>
							</td>
						<?php } ?>
						<td class="td <?php echo esc_attr( $last_child_class ); ?>" style="text-align:<?php echo esc_attr( $text_align ); ?>; vertical-align: middle; word-wrap:break-word;border-left:0;border:0;border-bottom:1px solid #e0e0e0;padding: 12px 5px;<?php echo esc_attr( $borderColor ); ?>;">
							<?php
							// Product name.
							echo wp_kses_post( apply_filters( 'woocommerce_order_item_name', $item->get_name(), $item, false ) );
							echo ' x ';
							echo esc_html( $item->get_quantity() );
							if ( $display_shippment_item_price ) {
								echo ' - ';
								echo wp_kses_post( $order->get_formatted_line_subtotal( $item ) );
							}
							// allow other plugins to add additional product information here.
							do_action( 'woocommerce_order_item_meta_start', $item_id, $item, $order, $plain_text );

							wc_display_item_meta(
								$item,
								array(
									'label_before' => '<strong class="wc-item-meta-label" style="float: ' . esc_attr( $text_align ) . '; margin-' . esc_attr( $margin_side ) . ': .25em; clear: both">',
								)
							);

							// allow other plugins to add additional product information here.
							do_action( 'woocommerce_order_item_meta_end', $item_id, $item, $order, $plain_text );
							?>
						</td>	
					</tr>
				<?php endforeach; ?>
			</tbody>			
		</table>
	</div>
<?php
