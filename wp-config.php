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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'djstepanovic_roman' );

/** Database username */
define( 'DB_USER', 'djstepanovic_romanuser' );

/** Database password */
define( 'DB_PASSWORD', 'o?,2GvqwFft9' );

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
define( 'AUTH_KEY',         '|%i7@mTYc<_7qKLGqWWlQLpB$p|bl7MHW$|][m[F89$o>gG}<:A][1SP<B8VO/uC' );
define( 'SECURE_AUTH_KEY',  '3G0d$2bmjf-XWDDNlrQxG7qmw9A?R,;Fl>SVO/xd3((![S>qKem6@5MM<m7QbHVb' );
define( 'LOGGED_IN_KEY',    '(y*<JRpm^,@4s%/x,766Nq;TxC!KXZx|X>,>.o{bb;T!QyG#!+#>9Ezt14$2-Kk2' );
define( 'NONCE_KEY',        'ufC|U~Xu}vE7N6C=2EsIqeUE>{..?Zm}+Fs,<w9Ur+V~?0V=u+kt;O:9G7$n/SX2' );
define( 'AUTH_SALT',        ':5qeNnu1I=X%FpSFcg_p)mWBQ%~WN6v1lz%&Na@iq?,|w}OG2{zfe_X5F6~bRFu6' );
define( 'SECURE_AUTH_SALT', 'lG k2qJEpx@}#<3EM$Xe{s Oj)up|4{Uy+S@P):52#nX{u-nf&G-zM}mt$H)ZOBT' );
define( 'LOGGED_IN_SALT',   'A#f8L<*tB,jJ1a8=ol,/M_9}azwK)/0_15s15?Y3..`f|}:(e<ka!~=IJDtQ;TRZ' );
define( 'NONCE_SALT',       'gOfQMOM^XUoA<;:jd97BZZK.7T,*WJ^q&qR@e.jwxq3O{og;`bkTgxazEk^)_H/B' );

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
