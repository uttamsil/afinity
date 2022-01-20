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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'afinity' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'VFsNn#61|z2@(3+L{(}6XH8dkmQ?.ilBD{5|H |q[M|DRQ9 ]sKl(szSDmX$0}aZ' );
define( 'SECURE_AUTH_KEY',  '56UmM=<KyaNB/iOg1GMz:Agrq,e/`.3tE0e3iL@Tfrs?q1l4JDcTscCD@x$z/rm(' );
define( 'LOGGED_IN_KEY',    'A7&v>ly1Yli=t%2.FdrKwq]Fs<. @2:y3JTL;2YiKHEyY@?:F%fKgAf|[c!uWtB+' );
define( 'NONCE_KEY',        'u! -?J0/;9gQ~mymRPj-s=A-Dn-C.fU{%MHj_|12f@w:~!q z9%5`hCbBA:>p#4&' );
define( 'AUTH_SALT',        'R;aoJhgD3<|fsar5nbj]3,#mn]Pqk>Vmq]nssXMpgAwESTZ2+2$)RjX Ira0mF#k' );
define( 'SECURE_AUTH_SALT', '2X9YQt;2/%>$xP-(mY)xJq~iz|D}&2QL Y-iyc:@T*HbBGSvsBP/{l(T04$;$j#>' );
define( 'LOGGED_IN_SALT',   'cwXP_5NShBlSzD`8+ zp@hvm*%r7O)[L~yv1Mz-_xN,DOfV*w2z]Ye*TeOKU[rnQ' );
define( 'NONCE_SALT',       '<boIo&,:1kI6*|W?t-|6v=P3@FNcI`l/]TvJf5XE#P$z,<0@`yc3GI$A+mtrN=bs' );

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
