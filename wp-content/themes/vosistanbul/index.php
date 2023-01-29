<?php get_header(); ?>
<!--Slider Area Start-->
<div class="slider-area">
  <?php wp_reset_query();
  query_posts('page_id=23');
  the_post(); ?>
  <?php the_field('anasayfa_banner'); ?>
  <?php wp_reset_query(); ?>
  <?php /*
  <div class="hero-slider owl-carousel">
    <!--Single Slider Start-->
    <?php wp_reset_query();
    query_posts('page_id=14');
    the_post(); ?>
    <?php $value = get_field("banner");
    foreach ($value as $key => $val) {
    ?>
      <div class="single-slider" style="background-image: url('<?php echo $val['resim']['url']; ?>')">
        <div class="slider-progress"></div>
        <div class="container">
          <div class="hero-slider-content d-flex flex-column align-items-center">
            <h1 class="fw-normal text-light text-center text-uppercase" style="font-family: Cormorant SC;">
              <?php echo $val['baslik']; ?>
            </h1>
            <div class="slider-border bg-light"></div>
            <p class="text-light text-center text-uppercase fs-5">
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
  */ ?>
</div>
<?php wp_reset_query();
query_posts('page_id=23');
the_post(); ?>
<?php $hakkimizda = get_field("hakkimizda"); ?>
<!--Our History Area Start-->
<div class="our-history-area mt-85">
  <div class="container">
    <div class="row">
      <div class="ms-auto me-auto">
        <div class="history-area-content text-right d-flex flex-column flex-md-row gap-3 gap-md-0">
          <div class="col-12 col-md-4 d-flex justify-content-center">
            <img src="<?php bloginfo('template_url'); ?>/images/logo/cicek_logo_gri.png" width="150px" alt="" style="margin-bottom:15px;" />
          </div>
          <div class="col-12 col-md-8">
            <h4 class="text-end mb-5" style="color:#988a8a;"><?php echo $hakkimizda['alt_baslik_2']; ?></h4>
            <?php echo $hakkimizda['icerik']; ?>
            <a href="<?php the_permalink(184); ?>" class="discoverButton text-center m-0 ms-auto mt-5">Keşfet</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php wp_reset_query(); ?>
<!--Our History Area End-->

<!--Categories Area Start-->
<div class="categories-area mt-85">
  <!--Section Title Start-->
  <div class="col-12">
    <div class="section-title text-center mb-30">
      <span>SİZİN İÇİN SEÇTİKLERİMİZ</span>
    </div>
  </div>
  <!--Section Title End-->
  <div class="container-fluid pl-50 pr-50">
    <div class="container-xxl row mx-auto">
      <div class="col-md-12">
        <div class="row">
          <?php
          wp_reset_query();
          $the_query = new WP_Query(array(
            'post_type' => 'product',
            'tax_query' => array(
              array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'ozel-urunlerimiz',
              )
            ),
          ));

          while ($the_query->have_posts()) :
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

                    <?php if (!empty($product->get_sale_price())) { ?>
                      <div class="price-box">
                        <span class="price"><?php echo $product->get_regular_price() * 1.18 . ' TL'; ?></span>
                        <span class="regular-price"><?php echo $product->get_sale_price() * 1.18 . ' TL'; ?><span style="font-size:12px;"> (KDV Dahil)</span></span>
                      </div>
                    <?php } else { ?>
                      <div class="price-box">
                        <span class="regular-price"><?php echo $product->get_regular_price() * 1.18 . ' TL'; ?><span style="font-size:12px;"> (KDV Dahil)</span></span>
                      </div>
                    <?php } ?>
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
</div>
<!--Categories Area End-->


<?php wp_reset_query();
query_posts('page_id=23');
the_post(); ?>
<!--Categories Area Start-->
<div class="categories-area mt-85">
  <?php $kategori_grids_layout = get_field("kategori_grids_layout"); ?>
  <div class="container-fluid pl-50 pr-50">
    <div class="container-xxl row mx-auto">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-4">
            <div class="categories-img img-full mb-30">
              <a href="<?php the_permalink(349); ?>">
                <img src="<?php echo $kategori_grids_layout['kategori_resim_01']['url']; ?>" alt="<?php echo $kategori_grids_layout['kategori_adi_01']; ?>" />
              </a>
              <div class="categories-content">
                <p class="categories-content-title fs-2 text-white"><?php echo $kategori_grids_layout['kategori_adi_01']; ?></p>
                <button type="button" class="btn btn-light border-0 px-4 py-2 categories-content-button">Daha Fazlası</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="categories-img img-full mb-30">
              <a href="<?php the_permalink(352); ?>">
                <img src="<?php echo $kategori_grids_layout['kategori_resim_02']['url']; ?>" alt="<?php echo $kategori_grids_layout['kategori_adi_02']; ?>" />
              </a>
              <div class="categories-content">
                <p class="categories-content-title fs-2 text-white "><?php echo $kategori_grids_layout['kategori_adi_02']; ?></p>
                <button type="button" class="btn btn-light border-0 px-4 py-2 categories-content-button">Daha Fazlası</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="categories-img img-full mb-30">
              <a href="<?php the_permalink(182); ?>">
                <img src="<?php echo $kategori_grids_layout['kategori_resim_03']['url']; ?>" alt="<?php echo $kategori_grids_layout['kategori_adi_03']; ?>" />
              </a>
              <div class="categories-content">
                <p class="categories-content-title fs-2 text-white "><?php echo $kategori_grids_layout['kategori_adi_03']; ?></p>
                <button type="button" class="btn btn-light border-0 px-4 py-2 categories-content-button">Daha Fazlası</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Categories Area End-->

<!--Slider Area End-->
<?php wp_reset_query();
query_posts('page_id=23');
the_post(); ?>
<?php $cta_butonlar = get_field("cta_butonlar"); ?>
<!--Feature Area Start-->
<div class="feature-area mt-50">
  <div class="container">
    <div>
      <div class="section-title text-center mb-20">
        <span>ÇİÇEKLERİNİZ AYNI GÜN İÇİNDE SİZLERLE</span>
      </div>
    </div>
    <div class="text-center mb-70">
      <button class="btn btn-secondary rounded-0 py-2 px-3" type="button" href="#" id="delivery-zone-btn" text-center m-0 ms-auto mt-5" style="margin-right: auto !important; max-width: 300px;" data-toggle="modal" data-target="#myModal">Teslimat Bölgelerimiz</button>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <!--Single Feature Start-->
        <div class="single-feature mb-35 flex-column gap-2">
          <div class="feature-icon mb-2" style="text-align:center">
            <img src="<?php bloginfo('template_url'); ?>/images/slider/ozgun.png" width="37%" alt="" />
          </div>
          <div class="feature-content">
            <h3 class="text-center"><?php echo $cta_butonlar['cta_01_baslik']; ?></h3>
          </div>
        </div>
        <!--Single Feature End-->
      </div>
      <div class="col-lg-4 col-md-6">
        <!--Single Feature Start-->
        <div class="single-feature mb-35 flex-column gap-2">
          <div class="feature-icon mb-2" style="text-align:center">
            <img src="<?php bloginfo('template_url'); ?>/images/slider/taze-ciceklerr.png" width="60%" alt="" />
          </div>
          <div class="feature-content">
            <h3><?php echo $cta_butonlar['cta_02_baslik']; ?></h3>
          </div>
        </div>
        <!--Single Feature End-->
      </div>
      <div class="col-lg-4 col-md-6">
        <!--Single Feature Start-->
        <div class="single-feature mb-35 flex-column gap-2">
          <div class="feature-icon mb-2" style="text-align:center">
            <img src="<?php bloginfo('template_url'); ?>/images/slider/teslimatt.png" width="47%" alt="" />
          </div>
          <div class="feature-content">
            <h3><?php echo $cta_butonlar['cta_03_baslik']; ?></h3>
          </div>
        </div>
        <!--Single Feature End-->
      </div>
    </div>
  </div>
</div>
<!--Feature Area End-->
<?php wp_reset_query(); ?>

<div class="categories-area mt-85">
  <!-- BLOG -->
  <?php wp_reset_query();
  query_posts('page_id=23');
  the_post(); ?>
  <div class="container-fluid pl-50 pr-50 mt-105">
    <div class="container-xxl row mx-auto px-0 justify-content-center">
        <div>
          <div class="section-title text-center mb-3">
            <span>BLOG</span>
          </div>
          <div class="fs-6 text-center lh-base mt-1 mx-auto" style="width: min(992px, 100%);">
            <?php the_field('anasayfa_blog_aciklama'); ?>
          </div>
        </div>
        <div class="row mt-5 gy-3">
          <?php
          wp_reset_query();
          query_posts(array('cat' => '23', 'posts_per_page' => '2', 'order' => 'DESC'));
          if (have_posts()) : while (have_posts()) : the_post();
          ?>
              <div class="col-12 col-lg-6">
                <div class="row h-100 gy-3">
                  <?php $blog_pic = get_field('resim'); ?>
                  <img class="col-12 col-md-6 ps-0 pr-0 pe-md-3" style="aspect-ratio: 1;" src="<?php echo $blog_pic['url']; ?>" alt="<?php the_field('baslik'); ?>" />
                  <div class="col-12 col-md-6 d-flex flex-column px-0 ">
                    <div>
                      <span class="fw-bold fs-3 text-dark"><?php echo get_the_date('j'); ?></span>
                      <span class="text-secondary fs-5" style="font-weight: 500;"><?php echo get_the_date('M'); ?></span>
                    </div>

                    <p class="post-title mt-2" style="font-weight: 500;"><?php the_field('baslik'); ?></p>
                    <p class="mb-1" style="font-weight: 500;"><?php the_field('kisa_aciklama'); ?></p>
                    <a class="text-decoration-underline" href="<?php the_permalink(); ?>" style="font-weight: 500;">Devamını Oku</a>
                  </div>
                </div>
              </div>
          <?php endwhile;
          endif;
          wp_reset_query(); ?>
        </div>
    </div>
  </div>
</div>
<!--Blog Area Start-->
<div class="blog-area ml-50 mr-50 mt-105">
  <div class="container">
    <div class="row">
      <!--Section Title Start-->
      <div class="col-12">
        <div class="section-title text-center mb-35">
          <span>Vos Instagram Hesabında Neler Oluyor?</span>
        </div>
      </div>
      <!--Section Title End-->
    </div>
    <div class="row">
      <?php wp_reset_query();
      query_posts('page_id=247');
      the_post(); ?>
      <?php the_content(); ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</div>
<!--Blog Area End-->

<div class="modal px-2 discover-modal " tabindex="-1" id="#discover-modal">
  <div class="modal-dialog p-3 position-absolute top-50 start-50 translate-middle" style="width: min(700px, 100%);">
    <div class="modal-content p-3">
      <div class="modal-header">
        <h5 class="modal-title">Teslimat Bölgelerimiz</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="row">
        <div class="col d-flex flex-column align-items-center" style="margin: 15px 0;">
          <?php wp_reset_query();
          query_posts('page_id=23');
          the_post();
          ?>
          <?php the_field('teslimat_bolgelerimiz'); ?>
          <?php wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  @media (min-width: 576px) {
    .modal-dialog {
      max-width: 800px;
      margin: 1.75rem auto;
    }
  }
</style>


<?php /*
<!--Related Product Start-->
<div class="Related-product mt-105 mb-100">
		    <div class="container">
		        <div class="row">
		            <!--Section Title Start-->
                    <div class="col-12">
                        <div class="section-title text-center mb-35">
                            <h3>Benzer Ürünler</h3>
                        </div>
                    </div>
                    <!--Section Title End-->
		        </div>
		        <div class="row">
		            <div class="product-slider-active p-0">
                        <?php 
                                wp_reset_query();
                                $term = get_queried_object();
                                $the_query = new WP_Query( array(
                                    'post_type' => 'product',
                                    'orderby'        => 'rand',
                                    'posts_per_page' => 6
                                    ) );

                                while ( $the_query->have_posts() ) :
                                    $the_query->the_post();
                                    global $product;
                        ?>
		                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
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
                                            <span class="price"><?php echo $product->get_sale_price().' TL'; ?></span>
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
		<!--Related Product End-->
*/ ?>
<?php get_footer(); ?>