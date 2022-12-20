<?php
get_header();
 the_post();  ?>
 <div style="height: 130px"></div>
    <!--Shop Area Start-->
		<div class="shop-area mb-70">
		    <div class="container">
		        <div class="row justify-content-center">
				<?php /* 					<div class="col-lg-3 order-2 order-lg-1">
						<?php 
							$term = get_queried_object(); 
						?>
		                <!--Color Category Widget Start-->
		                <div class="shop-sidebar">
		                    <div class="categori-checkbox">
		                            <ul>
		                                <li><a href="<?php the_permalink(45); ?>">TÜMÜasdasd</a></li>
										<li><a href="<?php echo get_category_link(18); ?>">BUKETLER</a></li>
		                                <li><a href="<?php echo get_category_link(19); ?>">KUTUDA ÇİÇEKLER</a></li>
										<li><a href="<?php echo get_category_link(20); ?>">VAZODA ÇİÇEKLER</a></li>
										<li><a href="<?php echo get_category_link(21); ?>">BİTKİLER</a></li>
										<li><a href="<?php echo get_category_link(22); ?>">HEDİYE KUTULARI</a></li>
		                            </ul>
		                    </div>
		                </div>
		                <!--Color Category Widget End-->
		                <!--Banner Widget Start-->
		                <div class="shop-sidebar">
                            <div class="sidebar-banner single-banner">
		                        <div class="banner-img">
		                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ayni-gun-teslim.jpg" alt=""></a>
		                        </div>
		                    </div>
		                </div>
		                <!--Banner Widget End-->
		            </div> */ ?>

		            <div class="col-12 order-1 order-lg-2">
		                <div class="shop-layout">
		                    <!--Grid & List View Start-->
		                    <div class="shop-topbar-wrapper d-md-flex justify-content-md-between align-items-center">
		                        <div class="grid-list-option">
		                             <ul class="nav">
                                      <li>
                                        <a class="active" data-bs-toggle="tab" href="#grid"><i class="fa fa-th-large"></i></a>
                                      </li>
                                      <li>
                                        <a data-bs-toggle="tab" href="#list"><i class="fa fa-th-list"></i></a>
                                      </li>
                                    </ul>
		                         </div>
                             <?php 
                                    wp_reset_query();
                                    // $args = array( 'post_type' => 'product', 'post_status' => 'publish', 'posts_per_page' => -1 );
                                    // $products = new WP_Query( $args );
									$term = get_queried_object();
									$the_query = new WP_Query( array(
										'post_type' => 'product',
										'order'   => 'ASC',
										'tax_query' => array(
										  array (
											  'taxonomy' => 'product_cat',
											  'field' => 'slug',
											  'terms' => $term->slug,
										  )
										  ),
									  ) );
                             ?>
		                         <!--Toolbar Short Area Start-->
		                         <div class="toolbar-short-area d-md-flex align-items-center">
                                    <?php /* 
                                    <div class="toolbar-shorter ">
                                        <label>Sırala:</label>
                                         <select class="wide">
                                             <option data-display="Select">Nothing</option>
                                             <option value="Relevance">Relevance</option>
                                             <option value="Name, A to Z">Name, A to Z</option>
                                             <option value="Name, Z to A">Name, Z to A</option>
                                             <option value="Price, low to high">Price, low to high</option>
                                             <option value="Price, high to low">Price, high to low</option>
                                         </select>
                                     </div>
                                     */ ?>
                                     <p class="show-product">Toplam <?php echo $the_query->found_posts; ?> Ürün</p>
                                 </div>
                                 
		                         <!--Toolbar Short Area End-->
		                    </div>
		                    <!--Grid & List View End-->
		                    <!--Shop Product Start-->
		                    <div class="shop-product">
		                        <div id="myTabContent-2" class="tab-content">
		                            <div id="grid" class="tab-pane fade show active">
		                                <div class="product-grid-view">
		                                    <div class="row">
                                            <?php 
                                                wp_reset_query();
												$term = get_queried_object();
                                                $the_query = new WP_Query( array(
                                                  'post_type' => 'product',
                                                  'order'   => 'ASC',
												  'tax_query' => array(
													array (
														'taxonomy' => 'product_cat',
														'field' => 'slug',
														'terms' => $term->slug,
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
																<?php if(!empty($product->get_sale_price())) { ?>
                                                                <div class="price-box">
                                                                    <span class="price"><?php echo $product->get_regular_price().' TL'; ?></span>
                                                                    <span class="regular-price"><?php echo $product->get_sale_price().' TL'; ?></span>
                                                                </div>
																<?php } else { ?>
																<div class="price-box">
                                                                    <span class="regular-price"><?php echo $product->get_regular_price().' TL'; ?></span>
                                                                </div>	
																<?php } ?>
        <!--                                                         <div class="add-to-cart">
                                                                    <a href="<?php the_permalink(); ?>">Ürünü İncele</a>
                                                                </div> -->
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
		                            <div id="list" class="tab-pane fade">
		                                <div class="product-list-view">
                                        <?php 
                                            wp_reset_query();
                                            $the_query = new WP_Query( array(
                                              'post_type' => 'product',
                                              'order'   => 'ASC',
                                            ) );
                                          
                                            while ( $the_query->have_posts() ) :
                                            $the_query->the_post();
                                            global $product;
                                        ?>
		                                    <div class="product-list-item mb-40">
		                                        <div class="row">
		                                            <!--Single List Product Start-->
		                                            <div class="col-md-4">
		                                                <div class="single-product">
		                                                    <div class="product-img img-full">
                                                            <a href="<?php the_permalink(); ?>">
                                                              <?php echo woocommerce_get_product_thumbnail(); ?>
                                                            </a>
		                                                    </div>
		                                                </div>
		                                            </div>
		                                            <div class="col-md-8">
		                                                <div class="product-content shop-list">
		                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                            <div class="product-description">
                                                                <p><?php echo $product->short_description; ?></p>
                                                            </div>
                                                            <div class="product-price">
																<?php if(!empty($product->get_sale_price())) { ?>
																	<div class="price-box">
																		<span class="price"><?php echo $product->get_regular_price().' TL'; ?></span>
																		<span class="regular-price"><?php echo $product->get_sale_price().' TL'; ?></span>
																	</div>
																<?php } else { ?>
																	<div class="price-box">
																		<span class="regular-price"><?php echo $product->get_regular_price().' TL'; ?></span>
                                                                	</div>
																<?php } ?>
                                                            </div>
                                                            <div class="product-list-action">
                                                               <div class="add-btn">
                                                                  <a href="<?php the_permalink(); ?>">Ürünü İncele</a>
                                                                </div>
                                                            </div>
		                                                </div>
		                                            </div>
		                                            <!--Single List Product End-->
		                                        </div>
		                                    </div>
                                        <?php 
                                          endwhile;
                                          wp_reset_query();
                                        ?>
		                                </div>
		                            </div>
                                <?php /* 
		                            <!--Pagination Start-->
		                            <div class="product-pagination">
		                                <ul>
		                                    <li class="active"><a href="#">1</a></li>
		                                    <li><a href="#">2</a></li>
		                                    <li><a href="#">3</a></li>
		                                    <li><a href="#">4</a></li>
		                                    <li><a href="#">5</a></li>
		                                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
		                                </ul>
		                            </div>
		                            <!--Pagination End-->
                                */ ?>
		                        </div>
		                    </div>
		                    <!--Shop Product End-->
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Shop Area End-->
<?php get_footer(); ?>