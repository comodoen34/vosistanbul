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

$wcast_customizer_settings = new ast_pro_customizer_settings();

$button_background_color = $ast->get_option_value_from_array( 'tracking_info_settings', 'fluid_button_background_color', $wcast_customizer_settings->defaults['fluid_button_background_color'] );
$button_font_color       = $ast->get_option_value_from_array( 'tracking_info_settings', 'fluid_button_font_color', $wcast_customizer_settings->defaults['fluid_button_font_color'] );
$button_radius           = $ast->get_option_value_from_array( 'tracking_info_settings', 'fluid_button_radius', $wcast_customizer_settings->defaults['fluid_button_radius'] );

$hide_trackig_header           = $ast->get_checkbox_option_value_from_array( 'tracking_info_settings', 'hide_trackig_header', '' );
$shipment_tracking_header      = $ast->get_option_value_from_array( 'tracking_info_settings', 'header_text_change', 'Tracking Information' );
$shipment_tracking_header_text = $ast->get_option_value_from_array( 'tracking_info_settings', 'additional_header_text', '' );
$fluid_table_layout            = $ast->get_option_value_from_array( 'tracking_info_settings', 'fluid_table_layout', $wcast_customizer_settings->defaults['fluid_table_layout'] );
$border_color                  = $ast->get_option_value_from_array( 'tracking_info_settings', 'fluid_table_border_color', $wcast_customizer_settings->defaults['fluid_table_border_color'] );
$border_radius                 = $ast->get_option_value_from_array( 'tracking_info_settings', 'fluid_table_border_radius', $wcast_customizer_settings->defaults['fluid_table_border_radius'] );
$background_color              = $ast->get_option_value_from_array( 'tracking_info_settings', 'fluid_table_background_color', $wcast_customizer_settings->defaults['fluid_table_background_color'] );
$table_padding                 = $ast->get_option_value_from_array( 'tracking_info_settings', 'fluid_table_padding', $wcast_customizer_settings->defaults['fluid_table_padding'] );
$fluid_hide_provider_image     = $ast->get_checkbox_option_value_from_array( 'tracking_info_settings', 'fluid_hide_provider_image', $wcast_customizer_settings->defaults['fluid_hide_provider_image'] );
$fluid_hide_shipping_date      = $ast->get_checkbox_option_value_from_array( 'tracking_info_settings', 'fluid_hide_shipping_date', $wcast_customizer_settings->defaults['fluid_hide_shipping_date'] );
$button_background_color       = $ast->get_option_value_from_array( 'tracking_info_settings', 'fluid_button_background_color', $wcast_customizer_settings->defaults['fluid_button_background_color'] );
$button_font_color             = $ast->get_option_value_from_array( 'tracking_info_settings', 'fluid_button_font_color', $wcast_customizer_settings->defaults['fluid_button_font_color'] );

$button_radius     = $ast->get_option_value_from_array( 'tracking_info_settings', 'fluid_button_radius', $wcast_customizer_settings->defaults['fluid_button_radius'] );
$button_expand     = $ast->get_checkbox_option_value_from_array( 'tracking_info_settings', 'fluid_button_expand', $wcast_customizer_settings->defaults['fluid_button_expand'] );
$fluid_button_text = $ast->get_option_value_from_array( 'tracking_info_settings', 'fluid_button_text', $wcast_customizer_settings->defaults['fluid_button_text'] );

$fluid_button_size = $ast->get_checkbox_option_value_from_array( 'tracking_info_settings', 'fluid_button_size', $wcast_customizer_settings->defaults['fluid_button_size'] );
$button_font_size  = ( 'large' == $fluid_button_size ) ? 16 : 14;
$button_padding    = ( 'large' == $fluid_button_size ) ? '12px 25px' : '10px 15px';


$order_details = wc_get_order( $order_id );

$ast_preview = ( isset( $_REQUEST['wcast-tracking-preview'] ) && '1' === $_REQUEST['wcast-tracking-preview'] ) ? true : false;
$text_align  = is_rtl() ? 'right' : 'left';

$shipment_status = get_post_meta( $order_id, 'shipment_status', true );

if ( ! empty( $order_details ) ) {
	$order_status = $order_details->get_status();
} else {
	$order_status = 'completed';
}



?>

<?php
$total_trackings = count( $tracking_items );
$layout          = 'tpi_layout_1';
foreach ( $tracking_items as $tracking_item ) {
	if ( isset( $tracking_item['products_list'] ) && ! empty( $tracking_item['products_list'] ) && count( $tracking_item['products_list'] ) > 1 ) {
		$layout = 'tpi_layout_2';
		continue;
	}
}

if ( 'tpi_layout_2' == $layout ) {

	$num = 1;
	foreach ( $tracking_items as $tracking_item ) {
		$heading_class = ( isset( $tracking_item['products_list'] ) && ! empty( $tracking_item['products_list'] ) && count( $tracking_item['products_list'] ) == 1 ) ? 'heading_border' : '';

		if ( $total_trackings > 1 ) {
			/* translators: %1$s: search number, %2$s: search total trackings */
			echo '<p style="margin: 0" class="shipment_heading"><strong><i>' . sprintf( esc_html_e( 'Shipment %1$s (out of %2$s):', 'ast-pro' ), esc_html( $num ), esc_html( $total_trackings ) ) . '</i></strong></p>';
		}

		$tpi_item   = array();
		$tpi_item[] = $tracking_item;
		?>
		<div style="margin:0;">
			<table class="fluid_table fluid_table_2cl" style="border-collapse: separate;width: 100%;margin: 10px 0; border: 1px solid <?php echo esc_html( $border_color ); ?>;border-radius: <?php echo esc_html( $border_radius ); ?>px;">
				<?php
				foreach ( $tracking_items as $key => $tracking_item ) {
					if ( '' != $tracking_item['formatted_tracking_provider'] ) {
						$ast_provider_title = apply_filters( 'ast_provider_title', esc_html( $tracking_item['formatted_tracking_provider'] ) );
					} else {
						$ast_provider_title = apply_filters( 'ast_provider_title', esc_html( $tracking_item['tracking_provider'] ) );
					}
					?>
					<tr class="fluid_2cl_tr" style="background: <?php echo esc_html( $background_color ); ?>">
						<td style="padding: <?php echo esc_html( $table_padding ); ?>px;">
							<div class="fluid_provider">
								<?php if ( ! $fluid_hide_provider_image ) { ?>
									<div class="fluid_provider_img" style="vertical-align: top;display: inline-block;margin-right: 5px;width: 14%;">
										<img style="width:100%;max-width: 40px;border-radius: 5px;" src="<?php echo esc_url( $tracking_item['tracking_provider_image'] ); ?>"></img>
									</div>
								<?php } ?>
								<div class="provider_name" style="display: inline-block; vertical-align: top;">
									<div>
										<span class="tracking_provider" style="word-break: break-word;margin-right: 5px;font-size: 14px;display: block;"><?php echo esc_html( $ast_provider_title ); ?></span>
										<a style="text-decoration: none; font-size: 14px;line-height: 19px;display: block;margin-top: 4px;" class="tracking_number" href="<?php echo esc_url( $tracking_item['ast_tracking_link'] ); ?>"><?php echo esc_html( $tracking_item['tracking_number'] ); ?></a>
									</div>
								</div>
								<?php if ( ! $fluid_hide_shipping_date ) { ?>
									<div class="order_status <?php echo esc_html( $order_status ); ?>" style="font-size: 12px; margin: 8px 0 0;font-style: italic;">
										<?php
										esc_html_e( 'Shipped on:', 'ast-pro' );
										echo '<span> ' . esc_html( date_i18n( get_option( 'date_format' ), $tracking_item['date_shipped'] ) ) . '</span>';
										?>
									</div>
								<?php } ?>
							</div>
						</td>
						<td class="fluid_2cl_td_action" style="text-align: right;padding: <?php echo esc_html( $table_padding ); ?>px">
							<a href="<?php echo esc_url( $tracking_item['ast_tracking_link'] ); ?>" class="button track-button" style="background: <?php echo esc_html( $button_background_color ); ?>;	color: <?php echo esc_html( $button_font_color ); ?>;padding: <?php echo esc_html( $button_padding ); ?>;text-decoration: none;display: inline-block;border-radius: <?php echo esc_html( $button_radius ); ?>px;margin-top: 0;font-size: <?php echo esc_html( $button_font_size ); ?>px;text-align: center;min-height: 10px;white-space: nowrap;"><span style="color: <?php echo esc_attr( $button_font_color ); ?>"><?php echo esc_html( $fluid_button_text ); ?></span></a>
						</td>
					</tr>
					<?php
				}
				?>
			</table>
		</div>
		<div style="margin:0;">
			<p class="shipping_items_heading" style="margin: 10px 0 0;border-bottom: 1px solid #e0e0e0;padding-bottom: 3px;"><?php echo esc_html( $shipping_items_heading ); ?></p>
			<table class="td tpi_order_details_table" cellspacing="0" cellpadding="6" style="background-color: transparent;width: 100%; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;border:0;<?php echo esc_html( $table_font_size ); ?>" border="0">
				<tbody>
					<?php
					$numItems = count( $tracking_item['products_list'] );
					$i        = 0;
					foreach ( $tracking_item['products_list'] as $products_list ) {
						$product       = wc_get_product( $products_list->product );
						$product_id    = $product->get_id();
						$sku           = '';
						$purchase_note = '';
						$image         = '';
						$image_size    = array( 64, 64 );

						if ( is_object( $product ) ) {
							$sku           = $product->get_sku();
							$purchase_note = $product->get_purchase_note();
							$image         = $product->get_image( $image_size );
						}

						foreach ( $order->get_items() as $item_id => $item ) {
							$item_product    = $item->get_product();
							$item_product_id = $item_product->get_id();
							if ( $item_product_id == $product_id ) {
								$order_item = $item;
							}
						}
						$last_child_class = '';
						if ( ++$i === $numItems ) {
							$last_child_class = 'last_td';
						}
						?>
						<tr>
							<?php if ( $display_product_images ) { ?>
								<td class="td image_id <?php echo esc_attr( $last_child_class ); ?>" style="padding-left: 0;text-align:<?php echo esc_attr( $text_align ); ?>;width: 70px;vertical-align: middle; word-wrap:break-word;border-left:0;border:0;border-bottom:1px solid #e0e0e0;padding: 12px 6px 12px 6px;position: relative;">
									<?php echo wp_kses_post( $image ); ?>
								</td>
							<?php } ?>
							<td class="td <?php echo esc_attr( $last_child_class ); ?>" style="text-align:<?php echo esc_attr( $text_align ); ?>;vertical-align: middle; word-wrap:break-word;border-left:0;border:0;border-bottom:1px solid #e0e0e0;padding: 12px 6px 12px 6px;position: relative;">
								<?php
								// Product name.
								echo '<div>';
								echo wp_kses_post( $product->get_name() );
								echo ' x ';
								echo esc_html( $products_list->qty );
								if ( $display_shippment_item_price ) {
									echo ' - ';
									echo wp_kses_post( $order->get_formatted_line_subtotal( $order_item ) );
								}
								echo '</div>';
								?>
							</td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
		<?php
		$num++;
	}
} else {
	?>
	<p class="shipping_items_heading"><strong><?php echo esc_html( $shipping_items_heading ); ?></strong></p>
	<?php
	$numItems = count( $tracking_items );
	$i        = 0;
	foreach ( $tracking_items as $tracking_item ) {
		$last_child_class = '';
		if ( ++$i === $numItems ) {
			$last_child_class = 'last_td';
		}
		?>
		<div style="margin:0;">
			<table class="td tpi_order_details_table" cellspacing="0" cellpadding="6" style="background-color: transparent;width: 100%; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;border:0;<?php echo esc_html( $table_font_size ); ?>" border="0">
				<tbody>
					<?php

					foreach ( $tracking_item['products_list'] as $products_list ) {
						$product       = wc_get_product( $products_list->product );
						$product_id    = $product->get_id();
						$sku           = '';
						$purchase_note = '';
						$image         = '';
						$image_size    = array( 64, 64 );

						if ( is_object( $product ) ) {
							$sku           = $product->get_sku();
							$purchase_note = $product->get_purchase_note();
							$image         = $product->get_image( $image_size );
						}

						foreach ( $order->get_items() as $item_id => $item ) {
							$item_product    = $item->get_product();
							$item_product_id = $item_product->get_id();
							if ( $item_product_id == $product_id ) {
								$order_item = $item;
							}
						}

						?>
						<tr>
							<?php if ( $display_product_images ) { ?>
								<td class="td image_id <?php echo esc_attr( $last_child_class ); ?>" style="padding-left: 0;text-align:<?php echo esc_attr( $text_align ); ?>;width: 70px;vertical-align: middle; word-wrap:break-word;border-left:0;border:0;border-bottom:1px solid #e0e0e0;padding: 12px 6px 12px 6px;position: relative;">
									<?php echo wp_kses_post( $image ); ?>
								</td>
							<?php } ?>
							<td class="td <?php echo esc_attr( $last_child_class ); ?>" style="text-align:<?php echo esc_attr( $text_align ); ?>;vertical-align: middle; word-wrap:break-word;border-left:0;border:0;border-bottom:1px solid #e0e0e0;padding: 12px 6px 12px 6px;position: relative;">
								<?php
								// Product name.
								echo wp_kses_post( $product->get_name() );
								echo ' x ';
								echo esc_html( $products_list->qty );
								if ( $display_shippment_item_price ) {
									echo ' - ';
									echo wp_kses_post( $order->get_formatted_line_subtotal( $order_item ) );
								}
								echo '<div style="margin-top:10px;"><span style="font-size: 90%;">' . esc_html( $tracking_item['formatted_tracking_provider'] ) . '<a style="font-size: 90%;margin: 0 10px 0 5px;text-decoration: none;" href=' . esc_url( $tracking_item['ast_tracking_link'] ) . '><span>' . esc_html( $tracking_item['tracking_number'] ) . '</span></a></span> </div>';
								?>
							</td>
							<td class="td <?php echo esc_attr( $last_child_class ); ?>" style="text-align:right;vertical-align: middle; word-wrap:break-word;border-left:0;border:0;border-bottom:1px solid #e0e0e0;padding: 12px 6px 12px 6px;position: relative;">
								<?php
								echo '<a style=" background:' . esc_html( $button_background_color ) . ';	color:' . esc_html( $button_font_color ) . 'px;	padding: 8px 15px;text-decoration: none;border-radius:' . esc_html( $button_radius ) . ';	margin-top: 0;font-size: 90%;position: absolute;top: 6px;right: 0;" class="button track-button" href=' . esc_url( $tracking_item['ast_tracking_link'] ) . '><span style="color: ' . esc_attr( $button_font_color ) . '">' . esc_html__( 'Track', 'ast-pro' ) . '</span></a>';
								?>
							</td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
		<?php
	}
}
?>

</div>
<?php
