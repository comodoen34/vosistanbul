<?php 
get_header(); the_post(); ?>
	<div style="height: 130px"></div>
	<div class="checkout-area white-bg mb-110">
            <div class="container">
	<?php echo do_shortcode("[woocommerce_checkout]"); ?>
	</div>
</div>

<?php get_footer(); ?>
