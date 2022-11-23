<?php
	add_theme_support( 'post-thumbnails' );
	add_image_size('category-pic', 220, 318,true);
	
	register_nav_menus( array(
		'primary' => 'Ana Menü',
	) );
	
	register_nav_menus( array(
		'footer-menu-third' => 'Footer Sosyal Medya',
	) );




	
	function widgets_inite() {
		register_sidebar( array(
			'name' => 'Hizli Menü',
			'id' => 'sidebar-menu',
			'before_widget' => '<div class="quickmenu">',
			'after_widget' => "</div>",
			'before_title' => '<h2>',
			'after_title' => '</h2>',
        ) );
	}
	add_action( 'widgets_init', 'widgets_inite' );

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'index_rel_link' );
remove_action('wp_head', 'generator');

function ucwords_tr($gelen){

    $sonuc='';

    $kelimeler=explode(" ", $gelen);

    foreach ($kelimeler as $kelime_duz){

        $kelime_uzunluk=strlen($kelime_duz);
        $ilk_karakter=mb_substr($kelime_duz,0,1,'UTF-8');

        if($ilk_karakter=='Ç' or $ilk_karakter=='ç'){

            $ilk_karakter='Ç';

        }elseif ($ilk_karakter=='Ğ' or $ilk_karakter=='ğ') {

            $ilk_karakter='Ğ';

        }elseif($ilk_karakter=='I' or $ilk_karakter=='ı'){

            $ilk_karakter='I';

        }elseif ($ilk_karakter=='İ' or $ilk_karakter=='i'){

            $ilk_karakter='İ';

        }elseif ($ilk_karakter=='Ö' or $ilk_karakter=='ö'){

            $ilk_karakter='Ö';

        }elseif ($ilk_karakter=='Ş' or $ilk_karakter=='ş'){

            $ilk_karakter='Ş';

        }elseif ($ilk_karakter=='Ü' or $ilk_karakter=='ü'){

            $ilk_karakter='Ü';

        }else{

            $ilk_karakter=strtoupper($ilk_karakter);

        }

        $digerleri=mb_substr($kelime_duz,1,$kelime_uzunluk,'UTF-8');
        $sonuc.=$ilk_karakter.kucuk_yap($digerleri).' ';

    }

    $son=trim(str_replace('  ', ' ', $sonuc));
    return $son;

}

function kucuk_yap($gelen){

    $gelen=str_replace('Ç', 'ç', $gelen);
    $gelen=str_replace('Ğ', 'ğ', $gelen);
    $gelen=str_replace('I', 'ı', $gelen);
    $gelen=str_replace('İ', 'i', $gelen);
    $gelen=str_replace('Ö', 'ö', $gelen);
    $gelen=str_replace('Ş', 'ş', $gelen);
    $gelen=str_replace('Ü', 'ü', $gelen);
    $gelen=strtolower($gelen);

    return $gelen;
}



/////////////////////////////// KARAKTER KISALTMA 

function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_title();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '...';
	} else {
		echo $excerpt;
	}
}


function buyuk_harf($deger)
{
    $deger = str_replace("ç","Ç",$deger);
    $deger = str_replace("ğ","Ğ",$deger);
    $deger = str_replace("ı","I",$deger);
    $deger = str_replace("i","İ",$deger);
    $deger = str_replace("ö","Ö",$deger);
    $deger = str_replace("ü","Ü",$deger);
    $deger = str_replace("ş","Ş",$deger);

    $deger = strtoupper($deger);
    $deger = trim($deger);

    return $deger;
}


function get_breadcrumb() {
    if (is_category() || is_single()) {
        the_category(' &bull; ');
            if (is_single()) {
                echo '<li><a href="#" rel="nofollow">'.get_the_title().'</a></li>';
            }
    } elseif (is_page()) {
        echo '<li><a href="#" rel="nofollow">'.get_the_title().'</a></li>';
    } elseif (is_search()) {
        echo '<li><a href="#" rel="nofollow">'. the_search_query() .'</a></li>';
    }
}

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );


function teslimat_tarihi_add_cart_item_data( $cart_item, $product_id ){

    if( isset( $_POST['_teslimat_tarihi_secim'] ) ) {
        $cart_item['teslimat_tarihi_secim'] = sanitize_text_field( $_POST[ '_teslimat_tarihi_secim' ] );
    }

    return $cart_item;

}
add_filter( 'woocommerce_add_cart_item_data', 'teslimat_tarihi_add_cart_item_data', 10, 2 );


function teslimat_saati_add_cart_item_data( $cart_item, $product_id ){

    if( isset( $_POST['_teslimat_saati'] ) ) {
        $cart_item['teslimat_saati'] = sanitize_text_field( $_POST[ '_teslimat_saati' ] );
    }

    return $cart_item;

}
add_filter( 'woocommerce_add_cart_item_data', 'teslimat_saati_add_cart_item_data', 10, 2 );

function teslimat_adres_secimi_add_cart_item_data( $cart_item, $product_id ){

    if( isset( $_POST['_teslimat_adres_secimi'] ) ) {
        $cart_item['teslimat_adres_secimi'] = sanitize_text_field( $_POST[ '_teslimat_adres_secimi' ] );
    }

    return $cart_item;

}
add_filter( 'woocommerce_add_cart_item_data', 'teslimat_adres_secimi_add_cart_item_data', 10, 2 );


add_filter( 'woocommerce_add_to_cart_redirect', 'misha_skip_cart_redirect_checkout' );
 
function misha_skip_cart_redirect_checkout( $url ) {
	return wc_get_checkout_url();
}