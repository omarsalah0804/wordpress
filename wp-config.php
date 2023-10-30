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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shoes' );

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
define( 'AUTH_KEY',         '2gP+7WIc+;5h,V}c2uK.Vx7t.h;3J+hnd)W&bf+EbBgY<7Tk}|F}gaLem;]a~Ch[' );
define( 'SECURE_AUTH_KEY',  '(e[U;V>1u2D#5$lam`40blc4;M AytW;*>+n#$1V+x]{c?J6<<Lc<gAh`!u}^#x^' );
define( 'LOGGED_IN_KEY',    'drymPnVw.q@x;YqN>1v0VJ*/]+Mb;-5`^OgECno:sG]o<$%A>u_*@ih91YJGH#)F' );
define( 'NONCE_KEY',        'naJFBc%N}2hb|)gCz6z,Vt&0{J_1Ke<krGu!Ec6C8Ifl>p4L;zOmE#/|zIEgEZ/i' );
define( 'AUTH_SALT',        'FG9Rp;EB@I(Tl*W[ytfuBwE#/3[/w6575Z=(T,A:9p_{@UkW=p|&Xc:)W?=PnD`.' );
define( 'SECURE_AUTH_SALT', 'C HL*7[+(m@LGvDgvs#vmd-B^)g.ja:y2MLbY{u6Pubya$ticEW#>ID$bYX`J&62' );
define( 'LOGGED_IN_SALT',   'uNpsV;bQ;+LsbYJOY ]9H;@;[lA@{Zh;W0R!B8A547GA|7Sk49EgFYt&vo&956.6' );
define( 'NONCE_SALT',       'C?}K&DEb}YG$.DxdL{vq5^3O..V4OySwhT);V<sjEBG-mwE`ZG]-.3,9!y]h`b5.' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
