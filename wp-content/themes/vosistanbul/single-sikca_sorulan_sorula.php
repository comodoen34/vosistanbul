<?php get_header(); the_post(); ?>
    <main class="page">
        <div class="bcrumb">
            <div class="container">
                <a href="../../index.html">Ana Sayfa</a><img src="../../assets/img/arrow-right.svg" alt="">
                <a href="../../ameliyatli-estetik.html">Ameliyatlı Estetik</a><img src="../../assets/img/arrow-right.svg" alt="">
                <a href="../beden-estetigi.html">Beden Estetiği</a><img src="../../assets/img/arrow-right.svg" alt="">
                <a href="bacak-inceltme.html">Bacak İnceltme</a><img src="../../assets/img/arrow-right.svg" alt="">
            </div>
        </div>		
        <div class="container">
            <div class="row m-t-60">
                <div class="col-md-3 col-sm-4 hidden-xs left">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-md-9 col-sm-8 right">
                    <section class="content anim anim-ready">
                        <h1><?php the_field('soru_baslik'); ?></h1>
                        <?php the_field('soru_cevap'); ?>
                    </section>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
