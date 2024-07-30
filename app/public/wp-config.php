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
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          'eT^Tg|XNm7rc!,K,_J:&i7,_!QoKG?*^OeoO c6g&#b#3(9M8=,8Q|%b0CYpGLc!' );
define( 'SECURE_AUTH_KEY',   'n|%D$l:7Bp@:nV{)~$h,mN,?T/2@] R>&7`$lt@Nn:7U_n721~Ag$WK@g?LQ1Y$k' );
define( 'LOGGED_IN_KEY',     'EjUR|XpHpqG5_$_u|hhuW8VWZGSPj?l& folTXa2+(Wl#[?0r{7G /!h-Y)MDZ_;' );
define( 'NONCE_KEY',         'c&DWz;,Sk]./F8E*)c09$y zE7DOd9[>XigF;:l@v|iZ-}D)<,x^sl-MUL)Lbb|9' );
define( 'AUTH_SALT',         '9R`1<{l2}gBVU%!r,pMS2O,kUx];U0i@P9H4m.eley6h&.NDPb c&`sc-sK8D4 Z' );
define( 'SECURE_AUTH_SALT',  'wa13*Hk]O`w3.,2%`Lf>^,4!EkQ>u1^<qH|sp</b=i Qr}~|;V;fLo|W/V+FqF-2' );
define( 'LOGGED_IN_SALT',    '~C?eB#]wOwH~=2RSVr(:;!Fs36S+/E?%DyK7Xk({<Ux]M VZi/X+!(hy|l3(E-FS' );
define( 'NONCE_SALT',        '6S>QNfYXj?KCSa/#>I|u #;X/%Kr/^e5|6WuWob]u[?T}BlfZpMAfkP*>Eg]~#6%' );
define( 'WP_CACHE_KEY_SALT', '<+BPTu=G KS-GpYev:*W cLd#X~3LV8>m%B%-8R,}5a?TMgUY@YV<)d}EaU~w<v3' );


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
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
