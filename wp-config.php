<?php

/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * MySQL ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'vosistanbul_vosdb');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'vosistanbul_vosdb');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', 'SzBgs#oI{MSP');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8mb4');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$!?y[,kbwUZ_5$&MRc=6)1)$(`_&x#z_~b<{S )sy=~b`@eF f}JCTLY/g,H,XJo');
define('SECURE_AUTH_KEY',  ' iwgIf7}oiMO?-rMBr.fW]m}V^*b5%5?a+P+Apma~xs($#a14`wejA+DPg}Cg|tT');
define('LOGGED_IN_KEY',    'C.*0xPTFC;&}BFV>wvP6H&d;`du$?Xq>J~U{PGrcfHwN/l-68GnoO9/;eJaQgK7l');
define('NONCE_KEY',        'dTEkXWd&}[FcG-{pZt)?:]}1e2C9ZCk*E^_^CT>  naH,?1~>]pVq@KT2Qu^k9|q');
define('AUTH_SALT',        '2[b)[[9lB-UBJFq1KInXBZQ!V(5tFog)w~PENf?xH4hRP2;l@*364x*5cdx4KLt;');
define('SECURE_AUTH_SALT', 'TdFl/{oj7/i_])`+pdUCby#vl<P(,k>-6Hu)3Q~jsm.; HUS7W0BpYTO!1gu)axt');
define('LOGGED_IN_SALT',   'aDe8*^QD^:{&&-b?v^e%wgQ$DoG{;6<1[ZV=i80QZZ;gNB eirKw##1@&=I?7dY}');
define('NONCE_SALT',       'a2pD34!jwpf%_pWM:FH  L>.*:]Q+}fA+EIsll{3vjt_iOB._5`o#QEn,`7i(duh');

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';
