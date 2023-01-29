<?php get_header();
the_post(); ?>
<div style="height: 180px"></div>
<!--Blog Area Start-->
<div class="blog-area white-bg pt-0 pb-0 mb-50">
    <div class="container">
        <div class="row">
            <!--Blog Post Start-->
            <div class="col-lg-12">
                <div class="blog_area">
                    <article class="blog_single blog-details">
                        <header class="entry-header">
                            <h2 class="entry-title" style="text-transform: capitalize;"><?php the_field('baslik'); ?></h2>
                            <span class="blog-post-date"><i class="fas fa-calendar-alt"></i><?php echo get_the_date(); ?></span>
                        </header>
                        <div class="post-thumbnail img-full">
                            <?php $get_pic = get_field('resim'); ?>
                            <img src="<?php echo $get_pic['sizes']['blog-pic']; ?>" width="<?php echo $get_pic['sizes']['blog-pic-width']; ?>" height="<?php echo $get_pic['sizes']['blog-pic-height']; ?>" alt="">
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