<?php 
get_header(); the_post(); ?>
                <div id="sj-content" class="sj-content" style="min-height: 400px">
                	<div class="sj-newsdetail">
						<div class="sj-head">
							<h3><?php the_field('haber_baslik'); ?></h3>
						</div>
						<figure class="sj-newsdetailimg" style='margin-bottom:15px;'>
							<?php $image = get_field("haber_resim"); ?>
							<img src="<?php echo $image["sizes"]["haber-details-pics"]; ?>" alt="<?php the_field('haber_baslik'); ?>">
						</figure>
						<div class="sj-description">
							<?php the_field('haber_aciklama'); ?>
						</div>
					</div>
                </div>
<?php get_footer(); ?>
