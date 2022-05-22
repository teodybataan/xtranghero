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
define( 'DB_NAME', 'xtranghero' );

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
define( 'AUTH_KEY',         '|LWwuhAEyvm9jJ*K^3byE#nIX28vOf2N!@WV*37Z<K<Bd5/|L&z2v7l#Y_05ErBY' );
define( 'SECURE_AUTH_KEY',  '@|%@Hs+eK^sRIpUT_gCIg(#Qj<JfTHeIo+-Hvs5JA@4Qi;%Psa-%cRgb=ar:U!WY' );
define( 'LOGGED_IN_KEY',    'Wk?c;5^l0B-@ S=u<|9inb*+o8Yk{A@:Sz4fK_I_wDQn/3&VQ|L?sZ@md`zD9?na' );
define( 'NONCE_KEY',        '2nU1KzNHD=u>.(j<KmeS0VFB!9(cy=M2;ov04:Ax.miPO^JH>r6$OOrLw=GBVRMr' );
define( 'AUTH_SALT',        'b;Zro7iUvm6ik3sbYgOesDO[M=[)USfXv<,ye*gZh+nuS5]~H3(UfH:`HIEi_sO,' );
define( 'SECURE_AUTH_SALT', 'bi!gJBu&NGX[O9` j1v+<Av$M2A1,w=]mIc+x dd,>-+Z!as.O.n.i.DXSD}_E5w' );
define( 'LOGGED_IN_SALT',   'K$) ]QrsRd#mBW%(yyf[SIEI+1eo7xahT+qqaku30cT<s2X~pPWvXhmtp%vnCKzf' );
define( 'NONCE_SALT',       '8D4tLtC=my-#q2ph]0^#Y03X0j9/U7&ku9QV<L2kHosR_B<J%l{~<Lvzt#j2)c@S' );

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
