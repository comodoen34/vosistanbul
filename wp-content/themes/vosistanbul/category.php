<?php 
get_header(); ?>	
            <?php /*
            <section class="breadcrumb_area_two">
            <ul class="list-unstyled bubble">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <img class="breadcrumb_shap" src="<?php bloginfo( 'template_url' ); ?>/img/new/blog/blog_banner.png" alt="">
            <div class="container">
                <div class="breadcrumb_content_two text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Maruf Iktisat Blog</h1>
                </div>
            </div>
        </section>
        <section class="blog_area sec_pad">
            <div class="container">
                <div class="row" id="blog_masonry">
                    <?php  $catID =  get_query_var( 'cat' );
                               wp_reset_query();  
                        ?>
                        <?php query_posts('cat='.$catID.'&posts_per_page=-1&order=DESC'); ?>
                        <?php 
                              $k=0; while ( have_posts() ) : the_post();  
                    ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="blog_grid_item mb-30">
                            <div class="blog_img">
                                <?php $image = get_field("blog_resim"); ?>
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $image["sizes"]["blog-pics"]; ?>" alt="<?php the_field('blog_baslik'); ?>"></a>
                            </div>
                            <div class="blog_content">
                                <div class="entry_post_info">
                                    <?php echo get_the_date(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>">
                                    <h5 class="f_p f_size_20 f_500 t_color mb_20"><?php the_field('blog_baslik'); ?></h5>
                                </a>
                                <p class="f_400 mb-0"><?php the_field('blog_kisa_aciklama'); ?></p>
                                <div class="post-info-bottom">
                                    <a href="<?php the_permalink(); ?>" class="learn_btn_two">Devamını Oku <i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                          $k++; 
                          endwhile;  ?> 
                </div>
            </div>
        </section> */ ?>
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
            style="background-image: url(<?php echo $val['resim']['url']; ?>)"
          >
            <div class="slider-progress"></div>
            <div class="container">
              <div class="hero-slider-content">
                <h1>
                  <?php echo $val['baslik']; ?>
                </h1>
                <div class="slider-border"></div>
                <p>
                  <?php echo $val['icerik']; ?>
                </p>
                <div class="slider-btn">
                  <a href="<?php echo $val['buton_url']; ?>"><?php echo $val['buton_adi']; ?> <i class="fa fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <!--Single Slider End-->
        </div>
      </div>
		<!--Single Product Area Start-->
		<div class="single-product-area mb-115">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12 col-lg-5">
		                <div class="product-details-img-tab">
		                    <!--Product Tab Content Start-->
		                    <div class="tab-content single-product-img">
                              <div class="tab-pane fade show active" id="product1">
                                  <div class="product-large-thumb img-full">
                                     <div class="easyzoom easyzoom--overlay">
                                        <a href="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product1.jpg">
                                            <img src="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product1.jpg" alt="">
                                        </a>
                                        <a href="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product1.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-search"></i></a>
                                     </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="product2">
                                  <div class="product-large-thumb img-full">
                                     <div class="easyzoom easyzoom--overlay">
                                        <a href="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product2.jpg">
                                          <img src="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product2.jpg" alt="">
                                        </a>
                                        <a href="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product2.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-search"></i></a>
                                     </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="product3">
                                  <div class="product-large-thumb img-full">
                                     <div class="easyzoom easyzoom--overlay">
                                        <a href="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product3.jpg">
                                          <img src="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product3.jpg" alt="">
                                        </a>
                                        <a href="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product3.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-search"></i></a>
                                     </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="product4">
                                  <div class="product-large-thumb img-full">
                                     <div class="easyzoom easyzoom--overlay">
                                        <a href="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product4.jpg">
                                          <img src="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product4.jpg" alt="">
                                        </a>
                                        <a href="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product4.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-search"></i></a>
                                     </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="product5">
                                  <div class="product-large-thumb img-full">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product5.jpg">
                                          <img src="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product5.jpg" alt="">
                                        </a>
                                        <a href="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product5.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-search"></i></a>
                                     </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="product6">
                                  <div class="product-large-thumb img-full">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product6.jpg">
                                          <img src="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product6.jpg" alt="">
                                        </a>
                                        <a href="<?php bloginfo('template_url'); ?>/images/single-product/large/single-product6.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-search"></i></a>
                                     </div>
                                  </div>
                              </div>
                            </div>
		                    <!--Product Tab Content End-->
		                    <!--Product Tab Menu Start-->
		                    <div class="product-menu">
		                        <div class="nav product-tab-menu">
                                  <div class="product-details-img">
                                    <a class="active" data-bs-toggle="tab" href="#product1"><img src="<?php bloginfo('template_url'); ?>/images/single-product/small/single-product1.jpg" alt=""></a>
                                  </div>
                                  <div class="product-details-img">
                                    <a data-bs-toggle="tab" href="#product2"><img src="<?php bloginfo('template_url'); ?>/images/single-product/small/single-product2.jpg" alt=""></a>
                                  </div>
                                  <div class="product-details-img">
                                    <a data-bs-toggle="tab" href="#product3"><img src="<?php bloginfo('template_url'); ?>/images/single-product/small/single-product3.jpg" alt=""></a>
                                  </div>
                                  <div class="product-details-img">
                                    <a data-bs-toggle="tab" href="#product4"><img src="<?php bloginfo('template_url'); ?>/images/single-product/small/single-product4.jpg" alt=""></a>
                                  </div>
                                  <div class="product-details-img">
                                    <a data-bs-toggle="tab" href="#product5"><img src="<?php bloginfo('template_url'); ?>/images/single-product/small/single-product5.jpg" alt=""></a>
                                  </div>
                                  <div class="product-details-img">
                                    <a data-bs-toggle="tab" href="#product6"><img src="<?php bloginfo('template_url'); ?>/images/single-product/small/single-product6.jpg" alt=""></a>
                                  </div>
                                </div>
		                    </div>
		                    <!--Product Tab Menu End-->
		                </div>
		            </div>
		            <div class="col-md-12 col-lg-7">
                        <!--Product Details Content Start-->
		                <div class="product-details-content">
                            <!--Product Nav Start-->
                            <div class="product-nav">
                                <a href="#"><i class="fa fa-angle-left"></i></a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                            <!--Product Nav End-->
		                    <h2>Sit voluptatem</h2>
		                    <div class="single-product-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <a class="review-link" href="#">(1 customer review)</a>
                            </div>
                            <div class="single-product-price">
                                <span class="price new-price">$66.00</span>
                                <span class="regular-price">$77.00</span>
                            </div>
                            <div class="product-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                            </div>
							<p class="stock in-stock">150 in stock</p>
							<div class="product-size mb-30">
								<p>Size : </p>
								<select class="nice-select" name="sortby">
									<option value="trending">Standard</option>
									<option value="sales">S</option>
									<option value="sales">M</option>
									<option value="rating">L</option>
									<option value="rating">XL</option>
								</select>
							</div>
							<div class="color-pick mb-30">
								<p>Color : </p>
								<select class="nice-select" name="sortby">
									<option value="trending">Red</option>
									<option value="sales">Green</option>
									<option value="sales">Blue</option>
									<option value="rating">Pink</option>
									<option value="rating">gray</option>
								</select>
							</div>
                            <div class="single-product-quantity">
                                <form class="add-quantity" action="#">
                                     <div class="product-quantity">
                                         <input value="1" type="number">
                                     </div>
                                    <div class="add-to-link">
                                        <button class="product-btn" data-text="add to cart">add to cart</button>
                                    </div>
                                </form>
                           </div>
                            <div class="wishlist-compare-btn">
                                <a href="#" class="wishlist-btn">Add to Wishlist</a>
                                <a href="#" class="add-compare">Compare</a>
                            </div>
                            <div class="product-meta">
                                <span class="posted-in">
                                        Categories: 
		                                <a href="#">Accessories</a>,
		                                <a href="#">Electronics</a>
		                            </span>
                            </div>
                            <div class="single-product-sharing">
                                <h3>Share this product</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
		                </div>
		                <!--Product Details Content End-->
		            </div>
		        </div>
		    </div>
		</div>
		<!--Single Product Area End-->
		<!--Product Description Review Area Start-->
		<div class="product-description-review-area mb-100">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <div class="product-review-tab">
		                    <!--Review And Description Tab Menu Start-->
		                    <ul class="nav dec-and-review-menu">
                              <li>
                                <a class="active" data-bs-toggle="tab" href="#description">Description</a>
                              </li>
                              <li>
                                <a data-bs-toggle="tab" href="#reviews">Reviews (1)</a>
                              </li>
                            </ul>
		                    <!--Review And Description Tab Menu End-->
		                    <!--Review And Description Tab Content Start-->
		                    <div class="tab-content product-review-content-tab" id="myTabContent-4">
                              <div class="tab-pane fade active show" id="description">
                                  <div class="single-product-description">
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                     <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="reviews">
                                  <div class="review-page-comment">
                                    <h2>1 review for Sit voluptatem</h2>
                                    <ul>
                                        <li>
                                            <div class="product-comment">
                                                <img src="<?php bloginfo('template_url'); ?>/images/icon/author.png" alt="">
                                                <div class="product-comment-content">
                                                    <div class="product-reviews">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <p class="meta">
                                                        <strong>admin</strong> - <span>November 22, 2016</span>
                                                    <div class="description">
                                                        <p>Good Product</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="review-form-wrapper">
                                        <div class="review-form">
                                            <span class="comment-reply-title">Add a review </span>
                                            <form action="#">
                                                <p class="comment-notes">
                                                    <span id="email-notes">Your email address will not be published.</span>
                                                     Required fields are marked
                                                     <span class="required">*</span>
                                                </p>
                                                <div class="comment-form-rating">
                                                    <label>Your rating</label>
                                                    <div class="rating">
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="input-element">
                                                    <div class="comment-form-comment">
                                                        <label>Comment</label>
                                                        <textarea name="message" cols="40" rows="8"></textarea>
                                                    </div>
                                                    <div class="review-comment-form-author">
                                                        <label>Name </label>
                                                        <input required="required" type="text">
                                                    </div>
                                                    <div class="review-comment-form-email">
                                                        <label>Email </label>
                                                        <input required="required" type="text">
                                                    </div>
                                                    <div class="comment-submit">
                                                        <button type="submit" class="form-button">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
		                    <!--Review And Description Tab Content End-->
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Product Description Review Area Start-->
		<!--Also Like Product Start-->
		<div class="also-like-product">
		    <div class="container">
		        <div class="row">
		            <!--Section Title Start-->
                    <div class="col-12">
                        <div class="section-title text-center mb-35">
                            <h3>Benzer ürünlerimiz</h3>
                        </div>
                    </div>
                    <!--Section Title End-->
		        </div>
		        <div class="row">
		            <div class="product-slider-active p-0">
		                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
		                    <!--Single Product Start-->
		                    <div class="single-product mb-25">
		                        <div class="product-img img-full">
		                            <a href="single-product.html">
		                                <img src="<?php bloginfo('template_url'); ?>/images/product/product1.jpg" alt="">
		                            </a>
		                            <div class="product-action">
		                                <ul>
		                                    <li><a href="#open-modal" data-bs-toggle="modal" title="Quick view"><i class="fa fa-search"></i></a></li>
		                                    <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
		                                    <li><a href="#" title="Compare"><i class="fa fa-refresh"></i></a></li>
		                                </ul>
		                            </div>
		                        </div>
		                        <div class="product-content">
		                            <h2><a href="single-product.html">Eleifend quam</a></h2>
		                            <div class="product-price">
		                                <div class="price-box">
		                                    <span class="regular-price">$115.00</span>
		                                </div>
		                                <div class="add-to-cart">
		                                    <a href="#">Add To Cart</a>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <!--Single Product End-->
		                </div>
		                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
		                    <!--Single Product Start-->
		                    <div class="single-product mb-25">
		                        <div class="product-img img-full">
		                            <a href="single-product.html">
		                                <img src="<?php bloginfo('template_url'); ?>/images/product/product3.jpg" alt="">
		                            </a>
		                            <div class="product-action">
		                                <ul>
		                                    <li><a href="#open-modal" data-bs-toggle="modal" title="Quick view"><i class="fa fa-search"></i></a></li>
		                                    <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
		                                    <li><a href="#" title="Compare"><i class="fa fa-refresh"></i></a></li>
		                                </ul>
		                            </div>
		                        </div>
		                        <div class="product-content">
		                            <h2><a href="single-product.html">Nulla sed stg</a></h2>
		                            <div class="product-price">
		                                <div class="price-box">
		                                    <span class="regular-price">$40.00</span>
		                                </div>
		                                <div class="add-to-cart">
		                                    <a href="#">Add To Cart</a>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <!--Single Product End-->
		                </div>
		                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
		                    <!--Single Product Start-->
		                    <div class="single-product mb-25">
		                        <div class="product-img img-full">
		                            <a href="single-product.html">
		                                <img src="<?php bloginfo('template_url'); ?>/images/product/product5.jpg" alt="">
		                            </a>
		                            <div class="product-action">
		                                <ul>
		                                    <li><a href="#open-modal" data-bs-toggle="modal" title="Quick view"><i class="fa fa-search"></i></a></li>
		                                    <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
		                                    <li><a href="#" title="Compare"><i class="fa fa-refresh"></i></a></li>
		                                </ul>
		                            </div>
		                        </div>
		                        <div class="product-content">
		                            <h2><a href="single-product.html">Odio tortor consequat</a></h2>
		                            <div class="product-price">
		                                <div class="price-box">
		                                    <span class="regular-price">$90.00</span>
		                                </div>
		                                <div class="add-to-cart">
		                                    <a href="#">Add To Cart</a>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <!--Single Product End-->
		                </div>
		                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
		                    <!--Single Product Start-->
		                    <div class="single-product mb-25">
		                        <div class="product-img img-full">
		                            <a href="single-product.html">
		                                <img src="<?php bloginfo('template_url'); ?>/images/product/product7.jpg" alt="">
		                            </a>
		                            <div class="product-action">
		                                <ul>
		                                    <li><a href="#open-modal" data-bs-toggle="modal" title="Quick view"><i class="fa fa-search"></i></a></li>
		                                    <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
		                                    <li><a href="#" title="Compare"><i class="fa fa-refresh"></i></a></li>
		                                </ul>
		                            </div>
		                        </div>
		                        <div class="product-content">
		                            <h2><a href="single-product.html">Vulputate justo</a></h2>
		                            <div class="product-price">
		                                <div class="price-box">
		                                    <span class="regular-price">$70.00</span>
		                                </div>
		                                <div class="add-to-cart">
		                                    <a href="#">Add To Cart</a>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <!--Single Product End-->
		                </div>
		                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
		                    <!--Single Product Start-->
		                    <div class="single-product mb-25">
		                        <div class="product-img img-full">
		                            <a href="single-product.html">
		                                <img src="<?php bloginfo('template_url'); ?>/images/product/product9.jpg" alt="">
		                            </a>
		                            <div class="product-action">
		                                <ul>
		                                    <li><a href="#open-modal" data-bs-toggle="modal" title="Quick view"><i class="fa fa-search"></i></a></li>
		                                    <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
		                                    <li><a href="#" title="Compare"><i class="fa fa-refresh"></i></a></li>
		                                </ul>
		                            </div>
		                        </div>
		                        <div class="product-content">
		                            <h2><a href="single-product.html">Ipsum imperdie</a></h2>
		                            <div class="product-price">
		                                <div class="price-box">
		                                    <span class="regular-price">$100.00</span>
		                                </div>
		                                <div class="add-to-cart">
		                                    <a href="#">Add To Cart</a>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <!--Single Product End-->
		                </div>
		                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
		                    <!--Single Product Start-->
		                    <div class="single-product mb-25">
		                        <div class="product-img img-full">
		                            <a href="single-product.html">
		                                <img src="<?php bloginfo('template_url'); ?>/images/product/product11.jpg" alt="">
		                            </a>
		                            <div class="product-action">
		                                <ul>
		                                    <li><a href="#open-modal" data-bs-toggle="modal" title="Quick view"><i class="fa fa-search"></i></a></li>
		                                    <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
		                                    <li><a href="#" title="Compare"><i class="fa fa-refresh"></i></a></li>
		                                </ul>
		                            </div>
		                        </div>
		                        <div class="product-content">
		                            <h2><a href="single-product.html">Pellentesque position</a></h2>
		                            <div class="product-price">
		                                <div class="price-box">
		                                    <span class="regular-price">$90.00</span>
		                                </div>
		                                <div class="add-to-cart">
		                                    <a href="#">Add To Cart</a>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <!--Single Product End-->
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Also Like Product End-->

<?php get_footer(); ?>
