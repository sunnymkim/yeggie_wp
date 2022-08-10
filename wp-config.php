<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'RN8rYtW2' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ':OkOlYt,JIWclr}cKUVY:V42p4HjRWClMT/YH y#2?bq|OUQ^Sz,-VFCiuEvifh_' );
define( 'SECURE_AUTH_KEY',   '@$:bPf+jKEBy]JPRCJ%%P:Cs)74@oV&6kk0?K{eZC<zR^Xt8-*&HRDF@;YuFj%FZ' );
define( 'LOGGED_IN_KEY',     '.Yi$=d]_ey$}fL4 {%{9k/kD$D`sL(ZW+k8=f98/U-,kw4Bs |o_ZPG12=IFbvKi' );
define( 'NONCE_KEY',         'sp{-1s3?WUANTt C>xN(72/u6<G9Gz>jtyfZ]2wQE,062@pm{(MX}7,#EHH{hVuB' );
define( 'AUTH_SALT',         'FHnMIe%~6f#IR1nc`c]7dI45@b3ql=]&>:p#ET!Cr2.Tm9>auV-+mlM YQ,;FN`X' );
define( 'SECURE_AUTH_SALT',  'hY|Q`;#_1(1}TRW*G?Vj5I$4NGc_rn,iUr%$,aFwZ&jeb+*?BbMyKpjeYtf,X%Nr' );
define( 'LOGGED_IN_SALT',    '#vAKzfk_7%j+@:^x Xcz>DQLVhtbP!zx&QC)o=./qP#4qO{U?Z}a#baeWhcWjqL|' );
define( 'NONCE_SALT',        'nX=*ja)d@rg(fu+k==t$$ln1wk4TesloUnNV6YF9O6[(@EzQ>A;yTt?}TK/(Nk><' );
define( 'WP_CACHE_KEY_SALT', 'Y:=&-o6p;8Tcug( u0gv0VOuM1NISWmCp)dGq!Kozxcp,O[?y2$v1Q<XZF&F[+7>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
