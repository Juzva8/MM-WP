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
define( 'DB_NAME', 'mm-wp_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'I7wK)b7kxmw;i;JGf`. kiE]Nb.GL|zES!b$&xYNW=bR.}[#{aBzW96R)#{~f60Z' );
define( 'SECURE_AUTH_KEY',  'd*L3]52WoiWc-I/AQA^({h+wkSX[;LL:?yRCfG2gN7w6Q=sOX{lBr-O{;p05VtG$' );
define( 'LOGGED_IN_KEY',    'f%xNA?FzBxOCc9w;P/D8z1CYc/ sXDODlt0+3>DkkFd~94q@d.{mP-o&5Jj+J]qF' );
define( 'NONCE_KEY',        '+) 5*62;G4_>bW*pyV=2}&S )|p<[BjL+y#7/*9)LMFn@4bUQ6Imyp&TXVdvih5;' );
define( 'AUTH_SALT',        'wfKWcIN!bYk M@,vy0PfU{n` %5(b/gI&#4E%K=L5M)}~e/<LYN+ps`>L+br1Q6F' );
define( 'SECURE_AUTH_SALT', 'ac#Hha{#Gan`NJPb~ATOD+vHhogC>x?2A9.)p-|D9`cI#+}kK.Tk:C `ndZRfTpH' );
define( 'LOGGED_IN_SALT',   'Q.t,aN }0[]P;e1P;[VXA<vI@l$&s-;?ySEQ2Z(eMrKKVQedo$i1}OM)Q!lF(-VD' );
define( 'NONCE_SALT',       'JDjH]Y&0smFKM=9i`o,]Y6wHX4sff]>`c=xxbJ]VS|%``f2qaqz}Oy*7k[5)3{m?' );

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
