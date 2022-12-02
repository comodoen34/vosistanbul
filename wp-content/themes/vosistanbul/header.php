<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php wp_title(''); ?></title>
    <meta name="description" content="" />
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, follow" />
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
    <!--All Css Here-->

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" />
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!-- Linearicon CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/linearicons.min.css" />
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Animate CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css" />
    <!-- Owl Carousel CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css" />
    <!-- Slick CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css" />
    <!-- Meanmenu CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/meanmenu.min.css" />
    <!-- Easyzoom CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/easyzoom.css" />
    <!-- Venobox CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/venobox.css" />
    <!-- Jquery Ui CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery-ui.css" />
    <!-- Nice Select CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/nice-select.css" />
    <!-- Style CSS -->
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" /> -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=1.0" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" />

</head>
<?php wp_head(); ?>

<body>
      <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->

    <div class="wrapper">
      <!--Header Area Start-->
      <header>
        <div class="header-container">
          <div class="header-area header-absolute header-sticky pt-30 pb-30">
            <div class="container-fluid pl-50 pr-50">
              <div class="row">
                <!--Header Logo Start-->
                <div class="col-lg-3 col-md-3">
                  <div class="logo-area">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="logo" rel="home">
                      <img src="<?php bloginfo('template_url'); ?>/images/logo/vos_logo_gri.png" width="177px" alt="" />
                    </a>
                  </div>
                  <div class="logo-area-sticky">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="logo" rel="home">
                      <img src="<?php bloginfo('template_url'); ?>/images/logo/vos_logo_gri.png" width="177px" alt="" />
                    </a>
                  </div>
                </div>
                <!--Header Logo End-->
                 <!--Header Menu And Mini Cart Start-->
                 <div class="col-lg-9 col-md-9 text-lg-right">
                  <!--Main Menu Area Start-->
                  <div class="header-menu">
                    <nav>
                      <ul class="main-menu">
                        <li>
                          <a href="<?php echo get_category_link(17); ?>">ÇİÇEK</a>
                          <!--Mega Menu Start-->
                          <ul class="mega-menu">
                          <li><a href="<?php echo get_category_link(18); ?>">BUKET</a></li>
                          <li><a href="<?php echo get_category_link(19); ?>">KUTUDA</a></li>
                          <li><a href="<?php echo get_category_link(20); ?>">VAZODA</a></li>
                          </ul>
                          <!--Mega Menu End-->
                        </li>
                        <li><a href="<?php the_permalink(180); ?>">CAFE'MİZ</a></li>
                        <li><a href="<?php the_permalink(184); ?>">HİKAYEMİZ</a></li>
                      </ul>
                    </nav>
                  </div>
                  <!--Main Menu Area End-->
                  <!--Header Option Start-->
                  <?php 
                    global $woocommerce;
                    $mini_cart_total = $woocommerce->cart->get_cart_total();
                    $mini_cart_items = $woocommerce->cart->get_cart();
                  ?>
                  <div class="header-option">
                    <div class="mini-cart-search flex-shrink-0 flex-nowrap">
                      <div class="mini-cart">
                        <a href="#">
                          <span class="cart-icon">
                            <span class="cart-quantity"><?php echo count($mini_cart_items); ?></span>
                          </span>
                          <span class="cart-title"
                            >Sepetiniz <br /><strong><?php echo $mini_cart_total; ?></strong></span
                          >
                        </a>
                        <!--Cart Dropdown Start-->
                        <div class="cart-dropdown">
                          <?php if ( ! WC()->cart->is_empty() ) : ?>
                          <ul class="<?php echo esc_attr( $args['list_class'] ); ?>">
                          <?php
                          do_action( 'woocommerce_before_mini_cart_contents' );

                          foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                              $product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
                              $thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
                              $product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                              $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                              ?>
                            <li class="single-cart-item <?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">
                              <div class="cart-img">
                              <?php if ( empty( $product_permalink ) ) : ?>
                                <?php echo $thumbnail; ?>
                              <?php else : ?>
                                <a href="<?php echo esc_url( $product_permalink ); ?>">
                                  <?php echo $thumbnail; ?>
                                </a>
                              <?php endif; ?>
                              </div>
                              <div class="cart-content">
                                <h5 class="product-name">
                                  <a href="<?php echo esc_url( $product_permalink ); ?>">
                                    <?php echo wp_kses_post( $product_name ); ?>
                                  </a>
                                </h5>
                                <span class="cart-price"><?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
                              </div>
                              <div class="cart-remove">
                              <?php
                              echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                'woocommerce_cart_item_remove_link',
                                sprintf(
                                  '<a href="%s" class="remove remove_from_cart_button" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s"><i class="fa fa-times"></i></a>',
                                  esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                  esc_attr__( 'Remove this item', 'woocommerce' ),
                                  esc_attr( $product_id ),
                                  esc_attr( $cart_item_key ),
                                  esc_attr( $_product->get_sku() )
                                ),
                                $cart_item_key
                              );
                              ?>
                              </div>
                            </li>
                            <?php
                              }
                            }

                            do_action( 'woocommerce_mini_cart_contents' );
                            ?>
                          </ul>
                          <p class="cart-subtotal">
                            <strong>Toplam:</strong>
                            <span class="float-right"><?php wc_cart_totals_order_total_html(); ?></span>
                          </p>
                          <p class="cart-btn">
                            <a href="<?php echo esc_url( wc_get_cart_url() ); ?>">Sepete Git</a>
                            <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>">Ödeme Yap</a>
                          </p>
                          <?php else : ?>
                          <p class="woocommerce-mini-cart__empty-message"><?php esc_html_e( 'No products in the cart.', 'woocommerce' ); ?></p>
                          <?php endif; ?>
                        </div>
                        <!--Cart Dropdown End-->
                      </div>
                      <div class="currency">
                      <?php global $current_user; wp_get_current_user(); ?>
                          <?php
                                            
                          if ( is_user_logged_in() ) { 
                            ?>
                                <a href="<?php echo wc_logout_url(); ?>" class="generalButton girisyapButton">ÇIKIŞ YAP</a>
                          <?php } else {
                        ?>
                        <a href="<?php the_permalink( 48 ); ?>" class="generalButton girisyapButton">GİRİŞ YAP</a>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                  <!--Header Option End-->
                </div>
                <!--Header Menu And Mini Cart End-->
              </div>
              <div class="row">
                <div class="col-12">
                  <!--Mobile Menu Area Start-->
                  <div class="mobile-menu d-lg-none"></div>
                  <!--Mobile Menu Area End-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
   