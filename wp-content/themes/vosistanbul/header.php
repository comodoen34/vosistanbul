<!DOCTYPE html>
<html lang="en">

<head>


  <?php /*
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title><?php wp_title(''); ?></title>
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/content/images/favicon.ico" />
    <link rel="canonical" href="index.html" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/fancy-slider.css" />
    <!-- <link rel="stylesheet" href="../use.typekit.net/qxn1hce.css" /> -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style316d.css?v=1617272987" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>

    */ ?>

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
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>?v=1.0" />
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
                  <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" class="logo" rel="home">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo/vos_logo_gri.png" width="177px" alt="" />
                  </a>
                </div>
                <div class="logo-area-sticky">
                  <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" class="logo" rel="home">
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
                      <?php

                      if (is_user_logged_in()) {
                      ?>
                        <li>
                          <a href="<?php echo wc_logout_url(); ?>">ÇIKIŞ YAP</a>
                        </li>

                      <?php } else {
                      ?>
                        <li>
                          <a href="<?php the_permalink(48); ?>">GİRİŞ YAP</a>
                        </li>
                      <?php } ?>
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
                          <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 32 32">
                            <path d="M 16 3 C 13.253906 3 11 5.253906 11 8 L 11 9 L 6.0625 9 L 6 9.9375 L 5 27.9375 L 4.9375 29 L 27.0625 29 L 27 27.9375 L 26 9.9375 L 25.9375 9 L 21 9 L 21 8 C 21 5.253906 18.746094 3 16 3 Z M 16 5 C 17.65625 5 19 6.34375 19 8 L 19 9 L 13 9 L 13 8 C 13 6.34375 14.34375 5 16 5 Z M 7.9375 11 L 11 11 L 11 14 L 13 14 L 13 11 L 19 11 L 19 14 L 21 14 L 21 11 L 24.0625 11 L 24.9375 27 L 7.0625 27 Z" />
                          </svg>
                          <span class="cart-quantity"><?php echo count($mini_cart_items); ?></span>
                        </span>
                        <span class="cart-title ms-1">Sepetiniz <br /><strong><?php echo $mini_cart_total; ?></strong></span>
                      </a>
                      <!--Cart Dropdown Start-->
                      <div class="cart-dropdown">
                        <?php if (!WC()->cart->is_empty()) : ?>
                          <ul class="<?php echo esc_attr($args['list_class']); ?>">
                            <?php
                            do_action('woocommerce_before_mini_cart_contents');

                            foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                              $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                              $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                              if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                $product_name      = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);
                                $thumbnail         = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);
                                $product_price     = apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
                                $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                            ?>
                                <li class="single-cart-item <?php echo esc_attr(apply_filters('woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key)); ?>">
                                  <div class="cart-img">
                                    <?php if (empty($product_permalink)) : ?>
                                      <?php echo $thumbnail; ?>
                                    <?php else : ?>
                                      <a href="<?php echo esc_url($product_permalink); ?>">
                                        <?php echo $thumbnail; ?>
                                      </a>
                                    <?php endif; ?>
                                  </div>
                                  <div class="cart-content">
                                    <h5 class="product-name">
                                      <a href="<?php echo esc_url($product_permalink); ?>">
                                        <?php echo wp_kses_post($product_name); ?>
                                      </a>
                                    </h5>
                                    <span class="cart-price"><?php echo apply_filters('woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf('%s &times; %s', $cart_item['quantity'], $product_price) . '</span>', $cart_item, $cart_item_key); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                              ?></span>
                                  </div>
                                  <div class="cart-remove">
                                    <?php
                                    echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                      'woocommerce_cart_item_remove_link',
                                      sprintf(
                                        '<a href="%s" class="remove remove_from_cart_button" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s"><i class="fa fa-times"></i></a>',
                                        esc_url(wc_get_cart_remove_url($cart_item_key)),
                                        esc_attr__('Remove this item', 'woocommerce'),
                                        esc_attr($product_id),
                                        esc_attr($cart_item_key),
                                        esc_attr($_product->get_sku())
                                      ),
                                      $cart_item_key
                                    );
                                    ?>
                                  </div>
                                </li>
                            <?php
                              }
                            }

                            do_action('woocommerce_mini_cart_contents');
                            ?>
                          </ul>
                          <p class="cart-subtotal">
                            <strong>Toplam:</strong>
                            <span class="float-right"><?php wc_cart_totals_order_total_html(); ?></span>
                          </p>
                          <p class="cart-btn">
                            <a href="<?php echo esc_url(wc_get_cart_url()); ?>">SEPETE GİT</a>
                            <a href="<?php echo esc_url(wc_get_checkout_url()); ?>">Ödeme Yap</a>
                          </p>
                        <?php else : ?>
                          <p class="woocommerce-mini-cart__empty-message"><?php esc_html_e('No products in the cart.', 'woocommerce'); ?></p>
                        <?php endif; ?>
                      </div>
                      <!--Cart Dropdown End-->
                    </div>
                    <div class="currency">
                      <?php global $current_user;
                      wp_get_current_user(); ?>
                      <?php

                      if (is_user_logged_in()) {
                      ?>
                        <a href="<?php echo wc_logout_url(); ?>" class="d-none generalButton girisyapButton">ÇIKIŞ YAP</a>
                      <?php } else {
                      ?>
                        <a href="<?php the_permalink(48); ?>" class="d-none generalButton girisyapButton">GİRİŞ YAP</a>
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