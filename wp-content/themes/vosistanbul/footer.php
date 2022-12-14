 <!--Footer Area Start-->

 <footer>
   <div class="footer-container">
     <!--Footer Top Area Start-->
     <div class="footer-top-area">
       <div class="container">
         <div class="row">
           <div class="col-lg-6 col-md-6">
             <p class="fw-semibold text-dark fs-6" style="letter-spacing: normal; text-transform:none">Kampanyalar ve yenilikler için bizden haberdar olun!</p>
             <!--Single Footer Widget Start-->
             <div class="single-footer-widget mb-40">
               <?php wp_reset_query();
                query_posts('page_id=23');
                the_post();
                ?>
               <?php the_field('e-bulten'); ?>
               <?php wp_reset_query(); ?>
             </div>
             <!--Single Footer Widget End-->
           </div>
           <div class="col-lg-3 col-md-3">
             <!--Single Footer Widget Start-->
             <div class="single-footer-widget mb-40">
               <div class="footer-title">
                 <h3>ALIŞVERİŞ</h3>
               </div>
               <ul class="link-widget">
                 <li><a href="<?php echo get_category_link(17); ?>">ÇİÇEK</a></li>
                 <li><a href="<?php echo get_category_link(18); ?>">BUKET</a></li>
                 <li><a href="<?php echo get_category_link(19); ?>">KUTUDA</a></li>
                 <li><a href="<?php echo get_category_link(20); ?>">VAZODA</a></li>
               </ul>
             </div>
             <!--Single Footer Widget End-->
           </div>
           <div class="col-lg-3 col-md-3">
             <!--Single Footer Widget Start-->
             <div class="single-footer-widget mb-40">
               <div class="footer-title">
                 <h3>KURUMSAL</h3>
               </div>
               <ul class="link-widget">
                 <li><a href="<?php the_permalink(184); ?>">HİKAYEMİZ</a></li>
                 <li><a href="<?php the_permalink(205); ?>">İLETİŞİM</a></li>
                 <li><a href="<?php the_permalink(191); ?>">MESAFELİ SATIŞ SÖZLEŞMESİ</a></li>
                 <li><a href="<?php the_permalink(3); ?>">KİŞİSEL VERİLERİN KORUNMASI VE GİZLİLİK POLİTİKASI</a></li>
                 <li><a href="<?php the_permalink(187); ?>">GÖNDERİM BÖLGELERİ</a></li>
               </ul>
             </div>
             <!--Single Footer Widget End-->
           </div>
         </div>
       </div>
     </div>
     <!--Footer Top Area End-->
     <!--Footer Middle Area Start-->
     <div class="footer-middle-area">
       <div class="container">
         <div class="row">
           <div class="col-lg-3 col-md-6">
             <!--Single Footer Widget Start-->
             <div class="single-footer-widget mb-30">
               <div class="footer-logo">
                 <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/logo/vos_logo_gri.png" width="177px" alt="" /></a>
               </div>
             </div>
             <!--Single Footer Widget End-->
           </div>
           <div class="col-lg-3 col-md-6">
             <!--Single Footer Widget Start-->
             <div class="single-footer-widget mb-30">
               <div class="footer-info">
                 <div class="icon">
                   <i class="fa fa-home"></i>
                 </div>
                 <p>
                   19 Mayıs Mah. Rıfkı Bey Sok. No:8/A2
                   Kadıköy / İstanbul
                 </p>
               </div>
             </div>
             <!--Single Footer Widget End-->
           </div>
           <div class="col-lg-3 col-md-6">
             <!--Single Footer Widget Start-->
             <div class="single-footer-widget mb-30">
               <div class="footer-info">
                 <div class="icon">
                   <i class="fa fa-envelope-open-o"></i>
                 </div>
                 <p>Email: <br />hello@vosistanbul.com</p>
               </div>
             </div>
             <!--Single Footer Widget End-->
           </div>
           <div class="col-lg-3 col-md-6">
             <!--Single Footer Widget Start-->
             <div class="single-footer-widget mb-30">
               <div class="footer-info">
                 <div class="icon">
                   <i class="fa fa-mobile"></i>
                 </div>
                 <p>Tel: <br />0(216) 999 37 97</p>
               </div>
             </div>
             <!--Single Footer Widget End-->
           </div>
         </div>
       </div>
     </div>
     <!--Footer Middle Area End-->
     <!--Footer Bottom Area Start-->
     <div class="footer-bottom-area pt-50 pb-50">
       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <!--Footer Menu Start-->
             <!--Footer Menu End-->
             <!--Footer Copyright Start-->
             <div class="footer-copyright">
               <p class="copyright">
                 &copy; 2022 <strong>Vos İstanbul</strong> All Rights Reserved
               </p>
             </div>
             <!--Footer Copyright End-->
           </div>
         </div>
       </div>
     </div>
     <!--Footer Bottom Area End-->
   </div>
 </footer>
 <!--Footer Area End-->

 </div>

 <!--All Js Here-->
 <!--Jquery 3.6.0-->
 <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-3.6.0.min.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-3.6.0.min.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-migrate-3.3.2.min.js"></script>
 <!--Popper-->
 <script src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
 <!--Bootstrap-->
 <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
 <!--Imagesloaded-->
 <script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.pkgd.min.js"></script>
 <!--Isotope-->
 <script src="<?php bloginfo('template_url'); ?>/js/isotope.pkgd.min.js"></script>
 <!--Waypoints-->
 <script src="<?php bloginfo('template_url'); ?>/js/waypoints.min.js"></script>
 <!--Counterup-->
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.counterup.min.js"></script>
 <!--Carousel-->
 <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
 <!--Slick-->
 <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
 <!--Meanmenu-->
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.meanmenu.min.js"></script>
 <!--Easyzoom-->
 <script src="<?php bloginfo('template_url'); ?>/js/easyzoom.min.js"></script>
 <!--Nice Select-->
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.nice-select.min.js"></script>
 <!--ScrollUp-->
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.scrollUp.min.js"></script>
 <!--Wow-->
 <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
 <!--Venobox-->
 <script src="<?php bloginfo('template_url'); ?>/js/venobox.min.js"></script>
 <!--Jquery Ui-->
 <script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
 <!--Countdown-->
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.countdown.min.js"></script>
 <!--Plugins-->
 <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
 <!--Main Js-->
 <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
 <?php wp_footer(); ?>
 </body>

 </html>