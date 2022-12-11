<?php 
get_header(); the_post(); ?>
	<div style="height: 130px"></div>
    <!--Shopping Cart Area Strat-->
		<div class="Shopping-cart-area mb-110">
		    <div class="container">
			<?php
			/**
			 * Cart Page
			 *
			 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
			 *
			 * HOWEVER, on occasion WooCommerce will need to update template files and you
			 * (the theme developer) will need to copy the new files to your theme to
			 * maintain compatibility. We try to do this as little as possible, but it does
			 * happen. When this occurs the version of the template file will be bumped and
			 * the readme will list any important changes.
			 *
			 * @see     https://docs.woocommerce.com/document/template-structure/
			 * @package WooCommerce\Templates
			 * @version 3.8.0
			 */

			defined( 'ABSPATH' ) || exit;

			do_action( 'woocommerce_before_cart' ); ?>
		        <div class="row">
					<?php 
						global $woocommerce, $product;
						$main_cart_total = $woocommerce->cart->get_cart_total();
						$main_cart_items = $woocommerce->cart->get_cart();
					?>
		            <div class="col-12">
					<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
						<?php do_action( 'woocommerce_before_cart_table' ); ?>
		                    <div class="table-content table-responsive">
		                        <table class="table">
		                            <thead>
		                                <tr>
		                                    <th class="plantmore-product-remove"></th>
		                                    <th class="plantmore-product-thumbnail">Ürün</th>
		                                    <th class="cart-product-name"></th>
											<th class="plantmore-product-price"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
		                                    <th class="plantmore-product-quantity">Adet</th>
											<th class="plantmore-product-date">Teslimat Tarihi</th>
											<!-- <th class="plantmore-product-time">Teslimat Ücreti</th> -->
		                                    <th class="plantmore-product-subtotal">Fiyat</th>
		                                </tr>
		                            </thead>
		                            <tbody>
									<?php do_action( 'woocommerce_before_cart_contents' ); ?>
									<?php
										foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
											$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
											$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

											if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
												$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
												?>
		                                <tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
		                                    <td class="plantmore-product-remove">
											<?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fa fa-times"></i></a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										esc_html__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							?>
											</td>
		                                    <td class="plantmore-product-thumbnail">
											<?php
												$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

												if ( ! $product_permalink ) {
													echo $thumbnail; // PHPCS: XSS ok.
												} else {
													printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
												}
												?>
											</td>
		                                    <td class="plantmore-product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
											<?php
												if ( ! $product_permalink ) {
													echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
												} else {
													echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
												}

												do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

												// Meta data.
												echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

												// Backorder notification.
												if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
													echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
												}
												?>
											</td>
											<td class="plantmore-product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
												<?php
													echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
												?>
											</td>
											<td class="plantmore-product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
											<?php
											if ( $_product->is_sold_individually() ) {
												$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
											} else {
												$product_quantity = woocommerce_quantity_input(
													array(
														'input_name'   => "cart[{$cart_item_key}][qty]",
														'input_value'  => $cart_item['quantity'],
														'max_value'    => $_product->get_max_purchase_quantity(),
														'min_value'    => '0',
														'product_name' => $_product->get_name(),
													),
													$_product,
													false
												);
											}

											echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
											?>
											</td>
											<td class="plantmore-product-date" id="plantmore-product-date_<?php echo $cart_item['key']; ?>">
												<script type="text/javascript">
													function calculate_date_name(date) {
														const currentDate = '<?php echo $cart_item['teslimat_tarihi_secim'] ?>';
														const resultTemp = new Date(currentDate);
														const dateNames = ["Pazar", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi" ];
														const dateMonths = ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"];

														return resultTemp.getDate() + ' ' + dateMonths[resultTemp.getMonth()] + ' ' + dateNames[resultTemp.getDay()];
													}

													document.getElementById("plantmore-product-date_<?php echo $cart_item['key']; ?>").innerHTML = calculate_date_name();
												</script>
											</td>
											<?php /*
											<td class="plantmore-product-time">
												<?php echo $cart_item['teslimat_saati']; ?>
											</td>
											*/ ?>
											<?php /*
											<td class="plantmore-product-time">
												<?php echo $cart_item['teslimat_adres_secimi']; ?>
											</td>
											*/ ?>
											<td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
												<?php
													echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
												?>
											</td>
		                                </tr>
										<?php
											}
										}
										?>

										<?php do_action( 'woocommerce_cart_contents' ); ?>
		                            </tbody>
		                        </table>
		                    </div>
		                    <div class="row">
		                        <div class="col-12">
		                            <div class="coupon-all">
									<?php if ( wc_coupons_enabled() ) { ?>
										<div class="coupon">
											<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> 
											<input class="button" name="apply_coupon" value="İNDİRİMİ Uygula" type="submit">
											<?php do_action( 'woocommerce_cart_coupon' ); ?>
										</div>
										<div class="coupon2">
		                                    <input class="button" name="update_cart" value="SEPETİ Güncelle" type="submit">
		                                </div>
									<?php } ?>

									<?php do_action( 'woocommerce_cart_actions' ); ?>

									<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
		                            </div>
		                        </div>
		                    </div>
							<?php do_action( 'woocommerce_after_cart_contents' ); ?>
							<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>
		                    <div class="row justify-content-end">
		                        <div class="col-md-5 ml-auto">
		                            <div class="cart-page-total">
		                                <h2>Sipariş Özeti</h2>
		                                <ul>
		                                    <li>Ara Toplam <span><?php wc_cart_totals_subtotal_html(); ?></span></li>
		                                    <li>Toplam <span><?php wc_cart_totals_order_total_html(); ?></span></li>
		                                </ul>
		                                <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
		                            </div>
		                        </div>
		                    </div>

							<?php do_action( 'woocommerce_after_cart_table' ); ?>
		                </form>

						<?php do_action( 'woocommerce_after_cart' ); ?>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Shopping Cart Area End-->

<?php get_footer(); ?>
