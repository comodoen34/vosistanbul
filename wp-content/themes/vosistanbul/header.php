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
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
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
                      <img src="<?php bloginfo('template_url'); ?>/images/logo/VOS_Logo.png" width="175px" alt="" />
                    </a>
                  </div>
                  <div class="logo-area-sticky">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="logo" rel="home">
                      <img src="<?php bloginfo('template_url'); ?>/images/logo/VOS_Logo.png" width="175px" alt="" />
                    </a>
                  </div>
                </div>
                <!--Header Logo End-->
                <?php /*
                <!--Header Menu And Mini Cart Start-->
                <div class="col-lg-9 col-md-9 text-lg-right">
                  <!--Main Menu Area Start-->
                  <div class="header-menu">
                    <nav>
                      <ul class="main-menu">
                        <li>
                          <a href="index.html">home</a>
                          <!--Dropdown Menu Start-->
                          <ul class="dropdown">
                            <li><a href="index.html">Home Page One</a></li>
                            <li><a href="index-2.html">Home Page Two</a></li>
                            <li><a href="index-3.html">Home Page Three</a></li>
                            <li><a href="index-4.html">Home Page Four</a></li>
                            <li><a href="index-5.html">Home Page Five</a></li>
                            <li><a href="index-6.html">Home Page Six</a></li>
                            <li><a href="index-7.html">Home Page Seven</a></li>
                          </ul>
                          <!--Dropdown Menu End-->
                        </li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li>
                          <a href="blog.html">Pages</a>
                          <!--Dropdown Menu Start-->
                          <ul class="dropdown">
                            <li>
                              <a href="single-product.html">Single Product</a>
                            </li>
                            <li>
                              <a href="single-product-variable.html"
                                >Single Product Variable</a
                              >
                            </li>
                            <li>
                              <a href="single-product-affiliate.html"
                                >Single Product Affiliate</a
                              >
                            </li>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop-list.html">Shop List View</a></li>
                            <li>
                              <a href="shop-right-sidebar.html"
                                >Shop Right Sidebar</a
                              >
                            </li>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="compare.html">Compare</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="login-register.html">Log In</a></li>
                          </ul>
                          <!--Dropdown Menu End-->
                        </li>
                        <li>
                          <a href="#">Features</a>
                          <!--Mega Menu Start-->
                          <ul class="mega-menu">
                            <li>
                              <a href="#" class="item-link">Pages</a>
                              <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about-2.html">About Us 02</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li>
                                  <a href="contact-2.html">Contact Us 02</a>
                                </li>
                                <li><a href="service.html">Services</a></li>
                                <li>
                                  <a href="service-2.html">Services 02</a>
                                </li>
                                <li>
                                  <a href="faq.html">Frequently Questions</a>
                                </li>
                                <li><a href="404.html">Error 404</a></li>
                              </ul>
                            </li>
                            <li>
                              <a href="#" class="item-link">Blog</a>
                              <ul>
                                <li>
                                  <a href="blog-nosidebar.html">None Sidebar</a>
                                </li>
                                <li>
                                  <a href="blog-left-sidebar.html"
                                    >Sidebar Left</a
                                  >
                                </li>
                                <li>
                                  <a href="single-blog.html">Gallery Format</a>
                                </li>
                                <li>
                                  <a href="single-blog.html">Audio Format</a>
                                </li>
                                <li>
                                  <a href="single-blog.html">Video Format</a>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a href="#" class="item-link">Shop</a>
                              <ul>
                                <li>
                                  <a href="shop-full-width.html">Full Width</a>
                                </li>
                                <li>
                                  <a href="shop-right-sidebar.html"
                                    >Sidebar Right</a
                                  >
                                </li>
                                <li><a href="shop-list.html">List View</a></li>
                                <li>
                                  <a href="single-product.html"
                                    >Single Product</a
                                  >
                                </li>
                                <li>
                                  <a href="single-product.html"
                                    >Variable Product</a
                                  >
                                </li>
                                <li>
                                  <a href="single-product.html"
                                    >Grouped Product</a
                                  >
                                </li>
                              </ul>
                            </li>
                          </ul>
                          <!--Mega Menu End-->
                        </li>
                      </ul>
                    </nav>
                  </div>
                  <!--Main Menu Area End-->
                  <!--Header Option Start-->
                  <div class="header-option">
                    <div class="mini-cart-search">
                      <div class="mini-cart">
                        <a href="#">
                          <span class="cart-icon">
                            <span class="cart-quantity">2</span>
                          </span>
                          <span class="cart-title"
                            >Your cart <br /><strong>$190.00</strong></span
                          >
                        </a>
                        <!--Cart Dropdown Start-->
                        <div class="cart-dropdown">
                          <ul>
                            <li class="single-cart-item">
                              <div class="cart-img">
                                <a href="single-product.html"
                                  ><img src="<?php bloginfo('template_url'); ?>/images/cart/cart1.jpg" alt=""
                                /></a>
                              </div>
                              <div class="cart-content">
                                <h5 class="product-name">
                                  <a href="single-product.html"
                                    >Odio tortor consequat</a
                                  >
                                </h5>
                                <span class="cart-price">1 × $90.00</span>
                              </div>
                              <div class="cart-remove">
                                <a title="Remove" href="#"
                                  ><i class="fa fa-times"></i
                                ></a>
                              </div>
                            </li>
                            <li class="single-cart-item">
                              <div class="cart-img">
                                <a href="single-product.html"
                                  ><img src="<?php bloginfo('template_url'); ?>/images/cart/cart2.jpg" alt=""
                                /></a>
                              </div>
                              <div class="cart-content">
                                <h5 class="product-name">
                                  <a href="single-product.html">Auctor sem</a>
                                </h5>
                                <span class="cart-price">1 × $100.00</span>
                              </div>
                              <div class="cart-remove">
                                <a title="Remove" href="#"
                                  ><i class="fa fa-times"></i
                                ></a>
                              </div>
                            </li>
                          </ul>
                          <p class="cart-subtotal">
                            <strong>Subtotal:</strong>
                            <span class="float-right">$190.00</span>
                          </p>
                          <p class="cart-btn">
                            <a href="cart.html">View cart</a>
                            <a href="checkout.html">Checkout</a>
                          </p>
                        </div>
                        <!--Cart Dropdown End-->
                      </div>
                      <div class="header-search">
                        <div class="search-box">
                          <a href="#"><i class="fa fa-search"></i></a>
                          <div class="search-dropdown">
                            <form action="#">
                              <input
                                name="search"
                                id="search"
                                placeholder=""
                                value="Search product..."
                                onblur="if(this.value==''){this.value='Search product...'}"
                                onfocus="if(this.value=='Search product...'){this.value=''}"
                                type="text"
                              />
                              <button type="submit">
                                <i class="fa fa-search"></i>
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="currency">
                        <div class="currency-box">
                          <a href="#"><i class="fa fa-th"></i></a>
                          <div class="currency-dropdown">
                            <ul class="menu-top-menu">
                              <li><a href="my-account.html">My Account</a></li>
                              <li><a href="wishlist.html">Wishlist</a></li>
                              <li><a href="cart.html">Shopping cart</a></li>
                              <li><a href="checkout.html">Checkout</a></li>
                              <li><a href="login-register.html">Log In</a></li>
                            </ul>
                            <div class="switcher">
                              <div class="language">
                                <span class="switcher-title">Language: </span>
                                <div class="switcher-menu">
                                  <ul>
                                    <li>
                                      <a href="#">English</a>
                                      <ul class="switcher-dropdown">
                                        <li><a href="#">German</a></li>
                                        <li><a href="#">French</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="currency">
                                <span class="switcher-title">Currency: </span>
                                <div class="switcher-menu">
                                  <ul>
                                    <li>
                                      <a href="#">$ USD</a>
                                      <ul class="switcher-dropdown">
                                        <li><a href="#">€ EUR</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Header Option End-->
                </div>
                <!--Header Menu And Mini Cart End-->
                */ ?>
                 <!--Header Menu And Mini Cart Start-->
                 <div class="col-lg-9 col-md-9 text-lg-right">
                  <!--Main Menu Area Start-->
                  <div class="header-menu">
                    <nav>
                      <ul class="main-menu">
                        <li>
                          <a href="#">ALIŞVERİŞ</a>
                          <!--Mega Menu Start-->
                          <ul class="mega-menu">
                            <li>
                              <a href="<?php echo get_category_link(17); ?>" class="item-link">ÇİÇEKLER</a>
                              <ul>
                                <li><a href="<?php echo get_category_link(18); ?>">BUKET</a></li>
                                <li><a href="<?php echo get_category_link(19); ?>">KUTUDA ÇİÇEK</a></li>
                                <li><a href="<?php echo get_category_link(20); ?>">VAZODA ÇİÇEK</a></li>
                              </ul>
                            </li>
                            <li>
                              <a href="<?php echo get_category_link(21); ?>" class="item-link">BİTKİLER</a>
                            </li>
                            <li>
                              <a href="<?php echo get_category_link(22); ?>" class="item-link">HEDİYE KUTULARI</a>
                            </li>
                            <li>
                              <a href="#" class="item-link">ÇİÇEK ÜYELİĞİ</a>
                            </li>
                          </ul>
                          <!--Mega Menu End-->
                        </li>
                        <li><a href="<?php the_permalink(180); ?>">ETKİNLİKLER</a></li>
                        <li><a href="<?php the_permalink(182); ?>">ATÖLYELER</a></li>
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
                    <div class="mini-cart-search">
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
   