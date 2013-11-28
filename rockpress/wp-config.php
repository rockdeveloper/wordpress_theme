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
define('DB_NAME', 'rockdeveloper');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '^~.6{iiPM3`]}O;V# bLBh=h-.eu>Qb`|5:iv^6Q0X<A@/!TZ|O1qK ?U#<#7Df)');
define('SECURE_AUTH_KEY',  '_n`;{t6L}%I9Vz(w*[|k$T-J)4s&aX6*r_Y6*%l0,>CHOkGYJ-iOl-YP-ge_-Q+N');
define('LOGGED_IN_KEY',    '}aRV;!,.-yV/p6m+&du-;jU[_(~c)h%3XX}D5gp5s:Fz&ZB|Bmm1MBj2+)LFF2te');
define('NONCE_KEY',        'Pv_+5Pg/I95J2{%b}-jU73OdeW~)sUnN59Vb`C0#kY^|-ls]-}6xikcQ5iC)%+Nk');
define('AUTH_SALT',        '0KQ9xRt0z8><|Bn[7hvn1!H_z[nsRWk[^7`NuW}|i6vra-#RuN|En na0d9HJeqJ');
define('SECURE_AUTH_SALT', 'td:~_zwWY(T[{u&OOCQM2:dN{+T~As2_IyJ(e*Jo&@7gwW;F^q=1f9GOS&3~48iI');
define('LOGGED_IN_SALT',   'X5J`;GS9%cW0Zv_z}Km|NtRaQk5zx_9G{`fW0f;ffeb!hL%,1bh&C{7yev-a9R@?');
define('NONCE_SALT',       'IXL0HHIm46efsJbRDbAt2bDY<9W*GbWp{9~^B[06qFa/Pp>p!yKf#+P=.uPf%^*_');

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


/***** Iconica Marketing's wordpress customization ******/
define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/publico' );
define( 'WP_CONTENT_URL', 'http://'.$_SERVER['HTTP_HOST'].'/publico');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
