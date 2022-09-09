<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'djstepanovic_mysite' );
/** Database username */
define( 'DB_USER', 'djstepanovic_mysiteuser' );
/** Database password */
define( 'DB_PASSWORD', 'sUmw93+&P(g,' );
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
define( 'AUTH_KEY',         '_cal}/U*<9M)&ylLfA7dp4jN3FP_#n)1/$NwYXy~/7cGTo&(4J|3*i/boj$JPATw' );
define( 'SECURE_AUTH_KEY',  'NzMLsUH{OD>H_#oXrpscYQ=7n0G<Mu.eSFBz{q42JkC8IRh?n~)P^3=ki{UP-+;C' );
define( 'LOGGED_IN_KEY',    'aU9>WKT9Tio)yUpc/$?=1I^Op*g!Q=/$?6J0s{8,HuSZ%]=%vk8>e&h?#v*iq(hf' );
define( 'NONCE_KEY',        '7m>|aGK3WQ^#~e<}=&B3.[jrOZ9MLIP(B@w^#FnFv9^<z)o:a^.Q%>uwnVP TJbX' );
define( 'AUTH_SALT',        'P><@wbfwKc vHP<mH?3e$r.j%])[b~Eo)oTX!vSF/$xB+)#rkz+$`E6Gq9Mp(z&=' );
define( 'SECURE_AUTH_SALT', 'I(E29)7dsR<>V=ViYD5/?M}S^(5n9-aD*AS#O.HQW#f+U0N<=T^,$W B#:QJ-FMM' );
define( 'LOGGED_IN_SALT',   'S)W<~7f_T+G-nnp;KW(Zvzz{nN%Utb+*+gaXcZY|2gC{moa]v6]HJ>~VQO(VN$$;' );
define( 'NONCE_SALT',       '< /Z[C+k/Aq1;)1I/&7#IYXt{0n+frin /1gZT=0:r@?rK R ?<.(_!]oO|#I R@' );
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