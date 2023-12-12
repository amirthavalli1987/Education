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
define( 'DB_NAME', 'education_db' );

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
define( 'AUTH_KEY',         'F(wX}>IJ:EYy?~}0wF4QwCh9Jd03L>w58X{|p(e10<u-NsyJa50!c]&Ide0;94~W' );
define( 'SECURE_AUTH_KEY',  'fU7xz ;%8NImew|]3a4nEwWs/Ve G,[&~q=u+S[ryH1qEWfw)K@zE w27+MAx43Q' );
define( 'LOGGED_IN_KEY',    'M.kxclK{`VqQ~PqJ1i`-|y{{1N:LF^7eb0]4PML&C,ac54Gl2!U|2*H-[92P= &U' );
define( 'NONCE_KEY',        'T>i$ZCN^$fXzEX73N{>kUcJk?<u2g|8,>#?yTXt?Hepd;D`hx*(.^vrG0,4|p,S<' );
define( 'AUTH_SALT',        '?wli/mROt3ksHVy!DeVSk#=.qZ_=JL84P8595#&D`$Xb=<-U`;BT5;{2S=pTUtxB' );
define( 'SECURE_AUTH_SALT', 'y3W:ay`x.d1XKb)x61ONsT(-igW^bij+<%Y/[UJe(y>J,aF8zkw<x[+nz, LRq_/' );
define( 'LOGGED_IN_SALT',   '`Ru_Iw`9}Qb#[q*9af#V/>+}B1mo0^89eN)5pKX:,N~NdhlL gciQ1T8xGYDAWH&' );
define( 'NONCE_SALT',       'X`GRng94mj|[A;S.++%[n[|Uz!6<wv6s88`)_#F,5*;}5,YpH4#A714P<_sC*G<4' );

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
