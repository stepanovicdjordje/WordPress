<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'djstepanovic_projekat' );

/** Database username */
define( 'DB_USER', 'djstepanovic_projekatuser' );

/** Database password */
define( 'DB_PASSWORD', 'DQwTyyJi$Q-n' );

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
define( 'AUTH_KEY',         ' TF|OHdvX>T5}3D9&S;nt7Rd3_J<6(&y]}A8^?reJlT3.tR663U?R|S~O%!%{{m(' );
define( 'SECURE_AUTH_KEY',  'K2 4o+ Y>v2p/]e*$K/1|m3Z8n|233XU-MX[#mx,I{z7I;0U{Hv<2lo~};!j=4o7' );
define( 'LOGGED_IN_KEY',    'SFsW;oU9d`l!z+]v#-Qg(ACOv~_J@kZK&N3F|]PCF5CyfZjXkQ.!)pq#Slc;/=cM' );
define( 'NONCE_KEY',        'j/c1`)l~(2aVL:+&(XU?L9bt3WM?~kce3fceP_#{]l]=/Gf>t/PPf%aCD=*1S[Ri' );
define( 'AUTH_SALT',        '{IxBTd~W{HbT%OaKe+*(lC);6C(jzAK0l<#?VJN@.a3GMl-ghqM?.lz_?GJN-7dY' );
define( 'SECURE_AUTH_SALT', '4CLVEr9dZkq/8Y$>Not+{^i]g/]c}g$JKTSEl()$bb?8?Vk3t<||QzKChWnJ`dQn' );
define( 'LOGGED_IN_SALT',   'm^lm)WKeJwFRqz2#HLHKv63e#Dj #Zfb]Oj&&Jw2GQTJF_ldNlPS<@KK@<?E9-S.' );
define( 'NONCE_SALT',       '0*=A=r8=K`T}om~04d`![&|HWx~tSPC0Hyq;$Q~t}Yw1LzL|`%Rc}zK<Mr3DLBo-' );

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
