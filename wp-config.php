<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'writeupsbypeace' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '}H0GBFjtm.CXLnpX Ml;xoq8-ZWs(]G*kb}Zv=Y{)k].{MA=qg6zhITuvHkI*R-=' );
define( 'SECURE_AUTH_KEY',  'aJw}F&$3rU1:REC@Pe|9&wC+Q2uv  J YQO$l{e(Ad;?j?B0gor9qSct$b?=x$,H' );
define( 'LOGGED_IN_KEY',    'iAo[@rb`-zHwx)4ALpNym0-w@N5|oc%Kte5V d>UWP<O*DS@!~*(hAOY;V<ThC=f' );
define( 'NONCE_KEY',        '6|7Uo`uPT`i<nV{kCF^U7qg^^rW|rW;~fD%1^]o.LU2x[<j9Q~-Z.7aXqIvmc?mD' );
define( 'AUTH_SALT',        '#wWK*.?<b]OT[K8.p}xkv^cI!;b(ouP>tDP-0$D8r<-wm1><G!~Qbp=;}<g.Im7h' );
define( 'SECURE_AUTH_SALT', 'nX=F3*|6)==!q;F5[3_eGt07|0WNAq UKe3Qr&{=O:kHqh(^>mX<3%1l~f6EcE.$' );
define( 'LOGGED_IN_SALT',   'T?RL&3oW3IV#vXwPWSLQ1EWkvsy.abM4%c /if<D,ZxDPF}ly+MFLT{X*#hL?Ap*' );
define( 'NONCE_SALT',       't@:uk6_h]1,fh}NWesZSBLPv #bYsW@e%BUP-ZJ0jL<BCzuwB&c:hp{ELCvR^hEa' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
