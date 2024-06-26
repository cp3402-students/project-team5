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
define( 'DB_NAME', 'u3a' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'Z.2@rJPt;_M0k>uq`b:LL0:)|yk4 6`Cw$fn%9}|74RYH(9_KkyI3?|gT e4lHIz' );
define( 'SECURE_AUTH_KEY',   '+d7<L*fRrE,B!lL meaQD1%bIsz!T.W ~xL71u*y756^?)h<T99CVnJx,H^w9uTK' );
define( 'LOGGED_IN_KEY',     'zePS4t!u+jD__ip1;u9<E5={o9:UDMH<Er/w1GsJ^0]0fU:#p}a@M?IX*f|R$[1B' );
define( 'NONCE_KEY',         '94m`jp(fr(JFte^].Qz~r1MNa!:hKbEFrhA5tXQ_w/^C6|Dw6<E-dHfShKqnh;9.' );
define( 'AUTH_SALT',         '&u}M5` 7Nbs%/Jh,1JhP@Vh,_u{wk3_86u@]$Q7?__6qJ4$2hKT5ef5D`BusT6-V' );
define( 'SECURE_AUTH_SALT',  'lx-=s|IpOr}LzsZ]2G,[95:znEdKvBSsA[=uQ:W77S6^4<>s3nIU!X(0n~,K2g>g' );
define( 'LOGGED_IN_SALT',    't0^I&*Ki8oF11:[8#ts->rv C6.CGr^8w_^*e4-fs9u.htWyRxZjmxr]p#>d:j;#' );
define( 'NONCE_SALT',        'myVTB7$h]VGNeF=(yWWs<b8s xWY2O#R` L29%e>?xsyr^W3bbe0[?WSHR|P]=n^' );
define( 'WP_CACHE_KEY_SALT', '%Qnfd2#nw2EQKPPwsbZdJ4&eG8&9p+e>=EkqKzO1,k|9U8^W_,8[vC>&tv]yO@Mo' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'SCRIPT_DEBUG', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
