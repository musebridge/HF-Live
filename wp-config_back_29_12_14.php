<?php

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
 //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/files/oven.hungryforever.com/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'hungryforever');

/** MySQL database username */
define('DB_USER', 'hungryforever');

/** MySQL database password */
define('DB_PASSWORD', 'hungryforever');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5haLyfYn5Q9fR<!N$QRA](6$[Bu%m}>3{YNrslQs@8v.V-Ym9|d5}+*+bo:8O.`q');
define('SECURE_AUTH_KEY',  'bzQ}rh[+b2~#|PohA37S)gaL%;Dl&ab,z+[0*.LLs+j]=-j;PC,QvH-c{*@Y}&mg');
define('LOGGED_IN_KEY',    'Dz}R;LMm}j7OgL:D0Hj@U5gGFW]M<9?lm~-|K0g7CJ4WfCI-a?-1vS[N+k|X)ks+');
define('NONCE_KEY',        'N^UyEm6Zd WQB Lc|4Wa^vNx:b:u]-=x?Rp^q7hU+Y&>Ux;[epfsc8U*}?#16 z3');
define('AUTH_SALT',        'g~d.S(%rz>m(<34;,3N^oNbCWWIB;oQuPE|QOKrT_b+wO!aoBk4cu4lXy0tHz:=!');
define('SECURE_AUTH_SALT', 'Vi}-2++36};rFj)SnX]4JQ;CeqSUlcfp?|sl5>A0Kvy;01Nx4L/5*9_ Mr-[CpNn');
define('LOGGED_IN_SALT',   'Q~y>-H~$DtKxsJOF|q,n mmJ]Yp9*]a`d](Z_W{RX$QITr%^Q#tMuEE6!be[9I,g');
define('NONCE_SALT',       'hwhM+1o-Qupoi]!B&-$([&/)^e+h<c`Xy%g05 k,7RTcK*_[;_E+3c5>s/+Zbjo ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


