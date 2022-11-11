<?php
/**
 * Template Name: Statik Sayfa
 */ 
get_header();
 the_post();  ?>
 <div style="height: 130px"></div>
    <!--Shop Area Start-->
	<div class="breadcrumb-tow mb-110">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-title">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--Breadcrumb Tow End-->
		<!--About Us Area 2 Start-->
		<div class="about-us-area-2">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <div class="about-us-content-2">
		                    <?php the_content(); ?>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Shop Area End-->
<?php get_footer(); ?>