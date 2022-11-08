<?php get_header(); the_post(); ?>
<div style="height: 180px"></div>
		<!--Blog Area Start-->
		<div class="blog-area white-bg pt-0 pb-0 mb-50">
		    <div class="container">
		        <div class="row">
                      <!--Blog Sidebar Start-->
		            <div class="col-lg-3">
		                <div class="blog_sidebar">
                            <div class="row_products_side">
                                <div class="product_left_sidbar">
                                    <div class="product-filter  mb-35">
                                        <h5>Son Yazılarımız</h5>
                                        <div class="blog_Archives__sidbar">
                                            <ul>
                                                <?php wp_reset_query(); 
                                                        query_posts( array( 'cat' => '23','posts_per_page'=> '7', 'order'=>'DESC' ) ); 
                                                        if ( have_posts() ) : while ( have_posts() ) : the_post();  
                                                ?>
                                                <li> <a href="<?php the_permalink(); ?>"><?php the_field('baslik'); ?></a></li>
                                                <?php endwhile; endif; wp_reset_query(); ?>
                                            </ul>
                                      </div>
                                    </div>
                                    <div class="product-filter  mb-35">
                                        <div class="sidebar-banner single-banner">
                                            <div class="banner-img">
                                                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ayni-gun-teslim.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
		            </div>
		            <!--Blog Sidebar End-->
                    <!--Blog Post Start-->
		            <div class="col-lg-9">
		                <div class="blog_area">
                            <article class="blog_single blog-details">
                                <header class="entry-header">
                                    <h2 class="entry-title"><?php the_field('baslik'); ?></h2>
                                    <span class="blog-post-date"><i class="fas fa-calendar-alt"></i><?php echo get_the_date(); ?></span>
                                </header>
                                <div class="post-thumbnail img-full">
                                        <img src="<?php bloginfo('template_url'); ?>/images/blog/blog1.jpg" alt="">
                                </div>
                                <div class="postinfo-wrapper">
                                    <div class="post-info">
                                        <div class="entry-summary blog-post-description">
                                            <?php the_field('aciklama'); ?>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
		            </div>
		            <!--Blog Post End-->
		        </div>
		    </div>
		</div>
		<!--Blog Area End-->
<?php get_footer(); ?>
