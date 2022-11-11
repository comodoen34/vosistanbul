<?php 
get_header(); the_post(); ?>
	<div style="height: 180px"></div>
	<div class="my-account white-bg mb-110">
            <div class="container">
				<?php echo do_shortcode("[woocommerce_my_account]"); ?>
				<?php echo do_shortcode("[woocommerce_checkout]"); ?>

			</div>
	</div>
<?php 
	/*
	$allowed_html = array(
		'a' => array(
			'href' => array(),
		),
	);
?>
		<!--My Account Area Strat-->
		<div class="my-account white-bg mb-110">
            <div class="container">
			<?php if ( is_user_logged_in() ) { ?>
                <div class="account-dashboard">
                   <div class="dashboard-upper-info">
                       <div class="row align-items-center g-0">
                           <div class="col-lg-3 col-md-12">
                               <div class="d-single-info">
                                   <p class="user-name">
									   <?php
											printf(
												wp_kses( __( 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ), $allowed_html ),
												'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
												esc_url( wc_logout_url() )
											);
										?>
									</p>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                               <div class="d-single-info">
                                   <p>Yardıma mı ihtiyacınız var!</p>
                                   <p>hello@vosistanbul.com</p>
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-12">
                               <div class="d-single-info">
                                   <p>E-mail </p>
                                   <p>hello@vosistanbul.com</p>
                               </div>
                           </div>
                           <div class="col-lg-2 col-md-12">
                               <div class="d-single-info text-lg-center">
                                   <a class="view-cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>"><i class="fa fa-cart-plus"></i>sepete git</a>
                               </div>
                           </div>
                       </div>
                   </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-2">
                            <!-- Nav tabs -->
                            <ul class="nav flex-column dashboard-list" role="tablist">
							<li>
									<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">Siparişler</a>
							</li>
							<?php $count = 0; foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
								<?php if(($count == 5)) { ?>
								<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
									<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
								</li>
							<?php } $count++; endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-md-12 col-lg-10">
                            <!-- Tab panes -->
                            <div class="tab-content dashboard-content">
							<?php
							$my_orders_columns = apply_filters(
								'woocommerce_my_account_my_orders_columns',
								array(
									'order-number'  => esc_html__( 'Order', 'woocommerce' ),
									'order-date'    => esc_html__( 'Date', 'woocommerce' ),
									'order-status'  => esc_html__( 'Status', 'woocommerce' ),
									'order-total'   => esc_html__( 'Total', 'woocommerce' ),
									'order-actions' => '&nbsp;',
								)
							);

							$customer_orders = get_posts(
								apply_filters(
									'woocommerce_my_account_my_orders_query',
									array(
										'numberposts' => $order_count,
										'meta_key'    => '_customer_user',
										'meta_value'  => get_current_user_id(),
										'post_type'   => wc_get_order_types( 'view-orders' ),
										'post_status' => array_keys( wc_get_order_statuses() ),
									)
								)
							);

							if ( $customer_orders ) : ?>
                                <div id="orders" class="tab-pane fade show active">
                                    <h3><?php echo apply_filters( 'woocommerce_my_account_my_orders_title', esc_html__( 'Recent orders', 'woocommerce' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
												<?php foreach ( $my_orders_columns as $column_id => $column_name ) : ?>
													<th class="<?php echo esc_attr( $column_id ); ?>"><span class="nobr"><?php echo esc_html( $column_name ); ?></span></th>
												<?php endforeach; ?>	 	 	 	
                                                </tr>
                                            </thead>
                                            <tbody>
			<?php
			foreach ( $customer_orders as $customer_order ) :
				$order      = wc_get_order( $customer_order ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
				$item_count = $order->get_item_count();
				?>
				<tr class="order">
					<?php foreach ( $my_orders_columns as $column_id => $column_name ) : ?>
						<td class="<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>">
							<?php if ( has_action( 'woocommerce_my_account_my_orders_column_' . $column_id ) ) : ?>
								<?php do_action( 'woocommerce_my_account_my_orders_column_' . $column_id, $order ); ?>

							<?php elseif ( 'order-number' === $column_id ) : ?>
								<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>">
									<?php echo _x( '#', 'hash before order number', 'woocommerce' ) . $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								</a>

							<?php elseif ( 'order-date' === $column_id ) : ?>
								<time datetime="<?php echo esc_attr( $order->get_date_created()->date( 'c' ) ); ?>"><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></time>

							<?php elseif ( 'order-status' === $column_id ) : ?>
								<?php echo esc_html( wc_get_order_status_name( $order->get_status() ) ); ?>

							<?php elseif ( 'order-total' === $column_id ) : ?>
								<?php
								printf( _n( '%1$s for %2$s item', '%1$s for %2$s items', $item_count, 'woocommerce' ), $order->get_formatted_order_total(), $item_count ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
								?>

							<?php elseif ( 'order-actions' === $column_id ) : ?>
								<?php
								$actions = wc_get_account_orders_actions( $order );

								if ( ! empty( $actions ) ) {
									foreach ( $actions as $key => $action ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
										echo '<a href="' . esc_url( $action['url'] ) . '" class="button ' . sanitize_html_class( $key ) . '">' . esc_html( $action['name'] ) . '</a>';
									}
								}
								?>
							<?php endif; ?>
						</td>
					<?php endforeach; ?>
				</tr>
			<?php endforeach; ?>
		</tbody>
                                        </table>
                                    </div>
                                </div>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
			<?php } else { ?>	
				<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

		<h2><?php esc_html_e( 'Login', 'woocommerce' ); ?></h2>

		<form class="woocommerce-form woocommerce-form-login login" method="post">

			<?php do_action( 'woocommerce_login_form_start' ); ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username"><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
			</p>

			<?php do_action( 'woocommerce_login_form' ); ?>

			<p class="form-row">
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
			</p>

			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
			<?php } ?>
            </div>
        </div>
        <!--My Account Area End-->

<?php */ get_footer(); ?>
