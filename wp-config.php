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
define( 'DB_NAME', 'hellospace_vosistanbul' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'hellospace_vosistanbul' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '%^DW3r$qzMVM' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PVFG*L?n0$|?d<(|%S,JQtR+V4%}?oLCwPh!DzEZO&}mQ]C$*RbbmLsrG(z#FO];' );
define( 'SECURE_AUTH_KEY',  '<DwUKx]~2XYWoe)68Hr{z~<P3NxtJfOcZNO32aRq^/WVFW(f2M[aouAv:m]J/l8 ' );
define( 'LOGGED_IN_KEY',    '^Ssp8-_B`|FcAmg0[s}alQqFi)cy5YzB*I*6|+Q#[u[!9H`U0Q?R@j( 70Y*PKPq' );
define( 'NONCE_KEY',        '}aPvs!JpNyXSrM3ti:3VZ4& %u-L#du`5:d;r:3Sl@qD5?Oo%IOJg5+ifsGYnE*6' );
define( 'AUTH_SALT',        ')kUT:o(2@^YX,G,nTBszz(.J9R%SyoMrFlrwV`?VJ$X41823x:a.+QRef:|@s(4r' );
define( 'SECURE_AUTH_SALT', 'T?CQSBY $SLTm:U^^!.UF_CuxN(~)`KGl1L[dEWEoQ^/>*sk%b0,P)7i%&i.Z(I&' );
define( 'LOGGED_IN_SALT',   ']@vbW/V<e7=9JFtp_. L8sUvr4SNpziHB?}S=-<94Y8j&P1U]rE_@pQ2iVic/N-E' );
define( 'NONCE_SALT',       'l-XPu N;+WZl=fhc 6h>26R{4+u)&xw`Nm}b1N4l]2c8?ry9M[Mu:X`J]))@JM+9' );

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
define( 'WP_DEBUG', true );

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';