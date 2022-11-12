<?php get_header(); ?>
      <!--Slider Area Start-->
      <div class="slider-area">
        <div class="hero-slider owl-carousel">
          <!--Single Slider Start-->
          <?php wp_reset_query(); query_posts('page_id=14');  the_post(); ?>
          <?php $value = get_field( "banner" );
           foreach($value as $key => $val){
          ?>
          <div
            class="single-slider"
            
            <?php  /* style="background-image: url(<?php echo $val['resim']['url']; ?>)"  */?>
            style="background-image: url('<?php bloginfo('template_url'); ?>/images/bg/bg3.jpg')"
          >
            <div class="slider-progress"></div>
            <div class="container">
              <div class="hero-slider-content d-flex flex-column align-items-center">
                <h1 class="fw-normal text-light" style="font-family: Cormorant SC;">
                  <?php echo $val['baslik']; ?>
                </h1>
                <div class="slider-border bg-light"></div>
                <p class="text-light text-uppercase fs-5">
                  <?php echo $val['icerik']; ?>
                </p>
                <div class="slider-btn mt-5">
                  <a class="border border-2 bg-transparent text-uppercase hero-btn" style="letter-spacing: 9px; font-family: Cormorant SC;" href="<?php echo $val['buton_url']; ?>"><?php echo $val['buton_adi']; ?></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <!--Single Slider End-->
        </div>
      </div>
      <?php wp_reset_query(); query_posts('page_id=23');  the_post(); ?>
      <?php $hakkimizda = get_field( "hakkimizda" ); ?>
      <!--Our History Area Start-->
      <div class="our-history-area mt-85">
        <div class="container">
          <div class="row">
            <div class="ms-auto me-auto">
              <div class="history-area-content text-right d-flex flex-column flex-md-row">
                <div class="col-12 col-md-5">
                  <img class="w-100 mw-100" src="<?php bloginfo('template_url'); ?>/images/logo/VOS_cicek_logo.png" width="150px" alt="" style="margin-bottom:15px;" />
                </div>
                <div class="col-12 col-md-7">
                  <h2><?php echo $hakkimizda['alt_baslik_2']; ?></h2>
                  <?php echo $hakkimizda['icerik']; ?>
                  <a href="#" class="generalButton m-0 ms-auto">Keşfet</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Our History Area End-->
      <!--Categories Area Start-->
      <div class="categories-area mt-115">
        <div class="container">
          <div class="row">
            <!--Section Title Start-->
<!--             <div class="col-12">
              <div class="section-title text-center mb-35">
                <span>Vos İstanbul Koleksiyonu</span>                
              </div>
            </div> -->
            <!--Section Title End-->
          </div>
        </div>
        <?php $kategori_grids_layout = get_field( "kategori_grids_layout" ); ?>
        <div class="container-fluid pl-50 pr-50">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <div class="categories-img img-full mb-30">
                    <a href="<?php echo $kategori_grids_layout['kategori_url_01']; ?>">
                    <img src="<?php echo $kategori_grids_layout['kategori_resim_01']['url']; ?>" alt="<?php echo $kategori_grids_layout['kategori_adi_01']; ?>" />
                  </a>
                    <div class="categories-content">
                      <h3><?php echo $kategori_grids_layout['kategori_adi_01']; ?></h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="categories-img img-full mb-30">
                    <a href="<?php echo $kategori_grids_layout['kategori_url_02']; ?>">
                      <img src="<?php echo $kategori_grids_layout['kategori_resim_02']['url']; ?>" alt="<?php echo $kategori_grids_layout['kategori_adi_02']; ?>" />
                    </a>
                    <div class="categories-content">
                      <h3><?php echo $kategori_grids_layout['kategori_adi_02']; ?></h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="categories-img img-full mb-30">
                    <a href="<?php echo $kategori_grids_layout['kategori_url_03']; ?>">
                      <img src="<?php echo $kategori_grids_layout['kategori_resim_03']['url']; ?>" alt="<?php echo $kategori_grids_layout['kategori_adi_03']; ?>" />
                    </a>
                    <div class="categories-content">
                      <h3><?php echo $kategori_grids_layout['kategori_adi_03']; ?></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Categories Area End-->
      <!--Product Countdown Area Start-->
      <div class="product-countdown-area mt-105 ml-50 mr-50">
        <div class="container">
          <div class="row">
            <!--Section Title Start-->
            <div class="col-12">
              <div class="section-title text-center mb-30">
                <h3>Özel Günlerimiz</h3>
              </div>
            </div>
            <!--Section Title End-->
          </div>
          <?php /*
          <div class="row">
            <div class="col-lg-8 col-md-10 col-12 ms-auto me-auto mb-20">
              <!--Count Down Area Start-->
              <div class="count-down-area">
                <!--Count Down Start-->
                <div class="countdown-inner">
                  <div class="count-box">
                    <div
                      class="pro-countdown"
                      data-countdown="2022/04/30"
                    ></div>
                  </div>
                </div>
                <!--Count Down End-->
                <!--Count Down Start-->
                <div class="countdown-inner">
                  <div class="count-box">
                    <div
                      class="pro-countdown"
                      data-countdown="2022/04/30"
                    ></div>
                  </div>
                </div>
                <!--Count Down End-->
                <!--Count Down Start-->
                <div class="countdown-inner">
                  <div class="count-box">
                    <div
                      class="pro-countdown"
                      data-countdown="2022/04/30"
                    ></div>
                  </div>
                </div>
                <!--Count Down End-->
                <!--Count Down Start-->
                <div class="countdown-inner">
                  <div class="count-box">
                    <div
                      class="pro-countdown"
                      data-countdown="2022/04/30"
                    ></div>
                  </div>
                </div>
                <!--Count Down End-->
                <!--Count Down Start-->
                <div class="countdown-inner">
                  <div class="count-box">
                    <div
                      class="pro-countdown"
                      data-countdown="2022/04/30"
                    ></div>
                  </div>
                </div>
                <!--Count Down End-->
              </div>
              <!--Count Down Area End-->
            </div>
          </div>
          */ ?>
          <div class="row">
            <div class="offer-slider p-0">
              <?php 
                wp_reset_query();
                $the_query = new WP_Query( array(
                  'post_type' => 'product',
                  'tax_query' => array(
                      array (
                          'taxonomy' => 'product_cat',
                          'field' => 'slug',
                          'terms' => 'ozel-urunlerimiz',
                      )
                  ),
                ) );
              
                while ( $the_query->have_posts() ) :
                $the_query->the_post();
                global $product;
                
              ?> 
              <div class="col-md-4">
                <!--Single Product Start-->
                <div class="single-product mb-25">
                  <div class="product-img img-full">
                    <a href="<?php the_permalink(); ?>">
                      <?php echo woocommerce_get_product_thumbnail(); ?>
                    </a>
                  </div>
                  <div class="product-content">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="product-price">
                      <div class="price-box">
                        <span class="regular-price"><?php echo $product->get_sale_price().' TL'; ?></span>
                      </div>
                      <div class="add-to-cart">
                        <a href="<?php the_permalink(); ?>">Ürünü İncele</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Single Product End-->
              </div>
              <?php 
                  endwhile;
                  wp_reset_query();
              ?>
            </div>
          </div>
        </div>
      </div>
      <!--Product Countdown Area End-->
       <!--Slider Area End-->
       <?php wp_reset_query(); query_posts('page_id=23');  the_post(); ?>
      <?php $cta_butonlar = get_field( "cta_butonlar" ); ?>
      <!--Feature Area Start-->
      <div class="feature-area mt-120">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <!--Single Feature Start-->
              <div class="single-feature mb-35">
                <div class="feature-icon">
                  <span class="lnr lnr-rocket"></span>
                </div>
                <div class="feature-content">
                  <h3><?php echo $cta_butonlar['cta_01_baslik']; ?></h3>
                  <p><?php echo $cta_butonlar['cta_01_alt_baslik']; ?></p>
                </div>
              </div>
              <!--Single Feature End-->
            </div>
            <div class="col-lg-4 col-md-6">
              <!--Single Feature Start-->
              <div class="single-feature mb-35">
                <div class="feature-icon">
                  <span class="lnr lnr-phone"></span>
                </div>
                <div class="feature-content">
                  <h3><?php echo $cta_butonlar['cta_02_baslik']; ?></h3>
                  <p><?php echo $cta_butonlar['cta_02_alt_baslik']; ?></p>
                </div>
              </div>
              <!--Single Feature End-->
            </div>
            <div class="col-lg-4 col-md-6">
              <!--Single Feature Start-->
              <div class="single-feature mb-35">
                <div class="feature-icon">
                  <span class="lnr lnr-redo"></span>
                </div>
                <div class="feature-content">
                  <h3><?php echo $cta_butonlar['cta_03_baslik']; ?></h3>
                  <p><?php echo $cta_butonlar['cta_03_alt_baslik']; ?></p>
                </div>
              </div>
              <!--Single Feature End-->
            </div>
          </div>
        </div>
      </div>
      <!--Feature Area End-->
      <?php wp_reset_query(); ?>
      <!--Blog Area Start-->
      <div class="blog-area ml-50 mr-50 mt-105">
        <div class="container">
          <div class="row">
            <!--Section Title Start-->
            <div class="col-12">
              <div class="section-title text-center mb-35">
                <span>VOS'ta Neler Var?</span>
              </div>
            </div>
            <!--Section Title End-->
          </div>
          <div class="row">
            <div class="blog-slider-active p-0">
              <?php 
                    wp_reset_query(); 
                    query_posts( array( 'cat' => '23','posts_per_page'=> '-1', 'order'=>'DESC' ) ); 
                    if ( have_posts() ) : while ( have_posts() ) : the_post();  
              ?>
              <div class="col-md-4">
                <!--Single Blog Start-->
                <div class="single-blog">
                  <div class="blog-img img-full">
                    <a href="<?php the_permalink(); ?>">
                      <img src="<?php bloginfo('template_url'); ?>/images/blog/blog1.jpg" alt="" />
                    </a>
                  </div>
                  <div class="blog-content">
                    <div class="post-date"><?php echo get_the_date(); ?></div>
                    <h3 class="post-title">
                      <a href="<?php the_permalink(); ?>"><?php the_field('baslik'); ?></a>
                    </h3>
                    <p class="post-description"><?php the_field('kisa_aciklama'); ?></p>
                  </div>
                </div>
                <!--Single Blog End-->
              </div>
              <?php endwhile; endif; wp_reset_query(); ?>
            </div>
          </div>
        </div>
      </div>
      <!--Blog Area End-->

      <?php  
  //   $args = array(
  //     'post_type'      => 'product',
  //     'posts_per_page' => 10,
  //     'cat_id' => 25
  // );

  // $loop = new WP_Query( $args );

  // echo "xxxx";

  // while ( $loop->have_posts() ) : $loop->the_post();
  // echo '<br /><a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.get_the_title().'</a>';
  //     global $product;
  //     //echo $product;
  //     echo $product->get_id();
  //     echo $product->get_name();
  //     echo $product->get_sale_price();
  //     echo $product->get_regular_price();
  //     echo $product->get_sku();
  //     echo $product->get_low_stock_amount();
  //     echo $product->get_review_count();
  //     echo $product->get_short_description();
  //     $ratting = $product->get_rating_counts();
  //     for($i = 0 ; $i < count($ratting); $i++) {
  //         echo $ratting[i];
  //     }
  // endwhile;

  // wp_reset_query();

?>

<?php /*

<div class="fnc-slider example-slider">
        <div class="fnc-slider__slides">
          <!-- slide start -->
          <?php wp_reset_query(); query_posts('page_id=45');  the_post(); ?>
          <?php $value = get_field( "slider" );
           foreach($value as $key => $val){
          ?>
          <div class="fnc-slide <?php if($key === 0) echo 'm--active-slide' ?>">
            <div
              class="fnc-slide__inner"
              style="background-image: url(<?php echo $val['slider_resim']['url'] ?>)"
            >
              <div class="fnc-slide__mask">
                <div
                  class="fnc-slide__mask-inner"
                  style="
                    background-image: url(<?php echo $val['slider_resim']['url'] ?>);
                  "
                ></div>
              </div>
              <div class="fnc-slide__content">
                <div class="txt">
                  <h1><?php echo $val['slider_title']; ?></h1>
                  <div class="desc"><?php echo $val['slider_subtitle']; ?></div>
                  <a class="button" href="<?php echo $val['slider_button_url']; ?>"><?php echo $val['slider_button']; ?></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <nav class="fnc-nav">
          <div class="fnc-nav__bgs">
            <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
            <div class="fnc-nav__bg m--navbg-dark"></div>
            <div class="fnc-nav__bg m--navbg-red"></div>
            <div class="fnc-nav__bg m--navbg-blue"></div>
            <div class="fnc-nav__bg m--navbg-dark"></div>
            <div class="fnc-nav__bg m--navbg-red"></div>
          </div>
          <div class="fnc-nav__controls">
            <?php foreach($value as $key => $val){ ?>
            <button class="fnc-nav__control">
              <?php echo $key; ?>
              <span class="fnc-nav__control-progress"></span>
            </button>
            <?php } ?>
          </div>
        </nav>
      </div>
      <section class="contact-box anim anim-ready anim-del">
        <div class="container">
          <div class="bg">
            <div class="row">
              <div class="col-sm-8">
                <h2>Sorunuz mu var? Hemen mesaj gönderin.</h2>
                <div>
                  <p>
                    İletişim formumuzu doldurun. Sizi arayalım ve merak
                    ettikleriniz hakkında bilgi verelim.
                  </p>
                </div>
              </div>
              <div class="col-sm-4 m-t-20 text-right">
                <a class="button open-popup">Formu Doldur</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="welcome anim">
        <div class="container">
          <?php $cliniquePicture = get_field( "klinik_resim" ); ?>
          <div
            class="img"
            style="background-image: url(<?php echo $cliniquePicture['url']; ?>)"
          ></div>
          <div class="txt">
            <h2><?php the_field('klinik_baslik'); ?></h2>
            <div class="content" style="white-space: normal;">
              <?php the_field('klinik_aciklama'); ?>
            </div>
            <a href="<?php the_permalink(32); ?>" class="button">Daha fazlası</a>
          </div>
        </div>
      </section>
      <?php wp_reset_query(); ?>
      <section class="treatments anim">
        <div class="title">
          <div class="container">
            <h2 class="text-center"></h2>
          </div>
        </div>
        <div class="boxes">
          <div
            class="box"
            style="background-image: url(<?php bloginfo('template_url'); ?>/content/img/untitled-d-1846e062.jpg)"
          >
            <div class="txt">
              <h3>Ameliyatlı Top 5 İşlem</h3>
              <div class="desc">
                <a
                  href="ameliyatli-estetik/yuz-estetigi/ameliyatli-top-5-islem.html"
                  target="_blank"
                  class="button"
                  >Daha Fazlası</a
                >
              </div>
            </div>
          </div>
          <div
            class="box"
            style="background-image: url(<?php bloginfo('template_url'); ?>/content/img/untitled-d-1dc693ec.jpg)"
          >
            <div class="txt">
              <h3>Ameliyatsız Top 5 İşlem</h3>
              <div class="desc">
                <a
                  href="ameliyatsiz-estetik/yuz-islemleri/ameliyatsiz-top-5-islem.html"
                  target="_blank"
                  class="button"
                  >Daha Fazlası</a
                >
              </div>
            </div>
          </div>
          <div
            class="box"
            style="background-image: url(<?php bloginfo('template_url'); ?>/content/img/untitled-d-5b71b177.jpg)"
          >
            <div class="txt">
              <h3>Güzellik &amp; Bakım Top 5 İşlem</h3>
              <div class="desc">
                <a
                  href="guzellik-ve-bakim/cilt-bakimi/guzellik-bakim-top-5-islemler.html"
                  target="_blank"
                  class="button"
                  >Daha Fazlası</a
                >
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </section>
      <section class="faq anim">
        <div class="container">
          <h2 class="text-center">Sıkça Sorulan Sorular</h2>
          <a class="all" href="<?php the_permalink(375); ?>">Tümünü Göster</a>
          <div class="clearfix"></div>
          <div class="slider row">
          <?php
              query_posts( array( 'post_type' => 'sikca_sorulan_sorula','posts_per_page'=> '-1', 'order'=>'DESC' ) ); 
              if ( have_posts() ) : while ( have_posts() ) : the_post(); 
              $soru_anasayfa = get_field('soru_anasayfa');
              if($soru_anasayfa == 1) {
          ?>
            <a
              href="<?php the_permalink(); ?>"
              class="item col-sm-3"
            >
              <?php $soru_resim = get_field('soru_resim'); ?>
              <div
                class="img"
                style="
                  background-image: url(<?php echo $soru_resim['url']; ?>);
                "
              ></div>
              <div class="box">
                <div class="title"><?php the_field('soru_baslik'); ?></div>
                <div class="m-t-20">...</div>
              </div>
            </a>
            <?php } endwhile; endif; wp_reset_query(); ?> 	
          </div>
        </div>
      </section>

    */ ?>  
<?php get_footer(); ?>
