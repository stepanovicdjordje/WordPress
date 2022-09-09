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
define( 'DB_NAME', 'djstepanovic_trpkovic' );

/** Database username */
define( 'DB_USER', 'djstepanovic_trpkovicKorisnik' );

/** Database password */
define( 'DB_PASSWORD', ';1%UHkxK)Fy,' );

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
define( 'AUTH_KEY',         'fjGa$a!foF-R[@t7Mf!F9O*#*DTQ~_XK/q&wAzRl11c%~#$?d/mxibrlJr;>ra7-' );
define( 'SECURE_AUTH_KEY',  '?}gZla`&E1&qWFq&uF`AwWy3o9gp5B#Bg}[s[2+2-aKcrH[b)xVCa]J|!g?_l)L&' );
define( 'LOGGED_IN_KEY',    'GniXH[ByrT{!D_SHbi2WSBjKa-5?zr?B9~PyFF+@nM[^W,B&?CE98H2]|pn{L<G|' );
define( 'NONCE_KEY',        'x#ZAPpH?lIdJQ)/fC~6&EMJm,!AL)y28>!rYrEnOe7No|)%CEDVn3%n%*6ss<c9I' );
define( 'AUTH_SALT',        'R|cl,(2Zg{6X(5V>RW@I_A69Hw{fftb<6(^8TkPW^_vmE;V#vaw18gL%yuK?J0-7' );
define( 'SECURE_AUTH_SALT', '?&Bt;D+JKB?8n5{cZwXz=d3&Sfm|8Bi)ApquW;ps!otF_>fs{/c8^*(:Hv-MO&VQ' );
define( 'LOGGED_IN_SALT',   'OLRMn{?7a,f@MLx.jqRJUTZk4|&s<^hbZ4Lx{=Y3<5d#;]7@JD4O[W l(Sp}#>=:' );
define( 'NONCE_SALT',       '/^r  B!m ]LTk_dhc9XpRQ@/lmX+F*Rl{bd~iE-?y=2jgY|9y~7SNK*{.G}j n%^' );

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
