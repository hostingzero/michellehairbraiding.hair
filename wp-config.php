<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u756016664_michelle' );

/** Database username */
define( 'DB_USER', 'u756016664_braiding' );

/** Database password */
define( 'DB_PASSWORD', 'Talktome@123' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '^&%VJbgrfj3_<T%f{f*,f7;]Vo+)v2 M5(/<E#5~ETPjXqqNizLHE,lNyKY=;q&e' );
define( 'SECURE_AUTH_KEY',   'Z`F1EJ;*9_kuIhswL9s?V)&cz{(sxYYtkRv5etB7;0Pf~45juwYi[-3P/DNVvkTk' );
define( 'LOGGED_IN_KEY',     'kJX:b!4GSq1b9hN,v#N?k`as9BMb^.<osfp>[`p2~^4IEPFP1B7)G>v,j8}U8uBv' );
define( 'NONCE_KEY',         'hO9p8/j@[qR(rtVFYYP0c>Gt`>j)9z]p.k [{{Gam.VXW5vC9Qu!={e[)}ZzHA4B' );
define( 'AUTH_SALT',         'bXc;Lk,l{[(FV>W7<~ri:HsI5Gv06Y8$2I*t6B&F%UH}2KsJ=p9x6y Bd7)0^SQX' );
define( 'SECURE_AUTH_SALT',  'k%&Hfj1o2d|H&j1Jhs2!rcNKtIg6:%9hY1ZAJ}0!A%vnG6z dBkJziW7C.5A`Ib.' );
define( 'LOGGED_IN_SALT',    ':tB{@Dh~.p%usc7f5j7;H.9?nc:=A4:>~jr,mC9%Djp,ctP!`.Uieq6 iHbVF{*S' );
define( 'NONCE_SALT',        'g!6|&s~y:I.9B)D3eUEo`q_T~,C:4v]`Q4y*Hem3i.5JIKH[Z=@Q4qjo8`WK)Gv{' );
define( 'WP_CACHE_KEY_SALT', 'S#w-.B]88%JG8%E/XAZEe5*ksB{#eb?Y>c2ys>f;8zjQyk{7!Ovv,@-yB$/!K[)>' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
