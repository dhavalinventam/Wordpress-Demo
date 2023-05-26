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
define( 'DB_NAME', 'wordpress_elementor' );

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
define( 'AUTH_KEY',         '%O,inITtC99LS:WHzi+qs:i?k7r1`p p0DUVRDLo}BFh>&W8/WTLcn8{zhRpaA^1' );
define( 'SECURE_AUTH_KEY',  '*Xet5PgTru~qm)M `F3N~++7xox<q/(es;54FJfkTn7;za||R(C6Jy+D+y$NWlJN' );
define( 'LOGGED_IN_KEY',    '_CLT2;>}xiqI8ucxGQzfv+>a#wwv9Y-n*oNsbqEw;7TxX{CqKYV>H!VYr]TT)ogb' );
define( 'NONCE_KEY',        'L]=}!fgw7Px_J|KsfN43B_LszQG#eGt$@OpVXPHRD8w*trQTRDs#>/w}>tN5Ev(%' );
define( 'AUTH_SALT',        'Pb,[@(q*PE0}4t}B%B%G5]:-B7r3d%b7@-%z?nEuF7i|EsA6lM;De5)Q12T(g@ui' );
define( 'SECURE_AUTH_SALT', 'k@`e_-OvqgBc::>V-TBXW1I&>!^,jl&>O?]1&/:Q{CBCEEFWp,1T[$^T@~NWpgOS' );
define( 'LOGGED_IN_SALT',   'famIM}p/|(x?={;3,Opup`(=<ZC*38WT=>S7%c<vSd<U^?R0oQEfy4qBoC{]?B=e' );
define( 'NONCE_SALT',       'Cof]F=kHVZh5eH%$&8_=bCN63H}<@V>azcK5@lK>2c T?odC%73TDvuUPi7_?m5>' );

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
