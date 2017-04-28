<?php
// ** MySQL settings ** //
/** The name of the database for WordPress **/
define( 'WPCACHEHOME', '/var/www/hungryforever.com/htdocs/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'hungryforever_com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'VIdFfezO');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         ' dC !Z}>J2drZbDr[xCM:UN6e]<AO2WpD)Bzf}L-MahWHp2uZdi9<a7Rj:9~S-+Z');
define('SECURE_AUTH_KEY',  '[t$n#:gvloW%WxaD[o2gAsgMrTk(u$FH7nrF0GxuaKL$E(Hs8z#m%U9rw^qCHU6h');
define('LOGGED_IN_KEY',    'xJ-FT5:<jeh!bfBYD|6D9j8hGg~%&A|]zv*Y|^q+LJI4[j*ww8_BG!>]+65-=wB~');
define('NONCE_KEY',        '4s<-|O<>:h|z)52F,IDoTM9QA`qyuS&fnwUkSPQ[-U8{qf4,VaaqnBD&w[;9X$W*');
define('AUTH_SALT',        'KhDBF|NZ*z1|LryLkBxm%jz:Rq><cU^u%x2oVi*Zba8z76}(}xs +~p6icfcvYhi');
define('SECURE_AUTH_SALT', 'iC+ZnY:ftwz;`[vSrbV*7KI-*`*-e;+&9Xh-`,[GHJ9+od_lo1$r3)$cgv:B[Ly@');
define('LOGGED_IN_SALT',   '>+Gcd0f>:wI)^]OtOC%HV&[1u|j|S]_n0e$>aYL.ryYr?}+sN-E#HQtu+cI/](3q');
define('NONCE_SALT',       'dI%`d@8~}[C+E~##}f#K[ls#d%5{%NIC;VaT-VXsg,GCz$/|6jBjCeQRKN?8brqk');

// AWS Creds

define( 'AWS_ACCESS_KEY_ID', 'AKIAI2QUFRVRNHN2INOA' );
define( 'AWS_SECRET_ACCESS_KEY', '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' );

$table_prefix = 'wp_';
/*
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
*/
define('WP_DEBUG', false);
define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');