<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/** Enable W3 Total Cache */
/** Enable W3 Total Cache */
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'djstepanovic_digitel' );
/** Database username */
define( 'DB_USER', 'djstepanovic_digitelKorisnik' );
/** Database password */
define( 'DB_PASSWORD', 'Z$(FUgZXFLVJ' );
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
define( 'AUTH_KEY',         'T[;y*dy.CjH0jwXyUvPb~`t][VL>3$(&]@6MOwl.]@i>~*6~kob;~L{o@UlYrnNC' );
define( 'SECURE_AUTH_KEY',  'FBm|lZ(Qv|U6Ei6AVhHauxr-1O*0if1q_inag(snk1J_j{|[{LvcY@`q]fqgEEBl' );
define( 'LOGGED_IN_KEY',    'afndo7gZy1wI:RS;k ^*fO=]8ITM23CY~MqLGtrc&Y]>+zVnQpElp#70jJal)%b6' );
define( 'NONCE_KEY',        'x0]A=n^+amTT{**>> TwJqXdd6,@qA*:K,Q2PH|8P@hzsaGu::$V )([5*{1]|RB' );
define( 'AUTH_SALT',        'i^2}]V,htG3WQO4j@c_4Y:;h}Go2 >OcS7N:rQ-de9/!<=if7jk[7T8CR+.&&nY ' );
define( 'SECURE_AUTH_SALT', 'Ue>`i8<`ddx<UN4}pc e&2MB?sLi22)ozMBjHq!d<EEkwNY -.C_&1|Vs<6,HarD' );
define( 'LOGGED_IN_SALT',   '8r)R;EAjN]6z(A017Ft[.k,`b[R%^QM>J)?SWl!Wy1a%XB]dv1ygP$I}X7$lUYRv' );
define( 'NONCE_SALT',       'r&SJwYrfV@F/:FCr$LptF}](#JVN1#&S|>)2Q34|1;ExK{$&&,PKg`-s+>D +f[I' );
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