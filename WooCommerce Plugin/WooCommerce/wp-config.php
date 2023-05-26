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
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         'JDSw~T!wUeGL@{h7zw]r)83SExr|WRg-(,^RTPwo+/uW@XS`h ?P1OWY:{%.bMbz' );
define( 'SECURE_AUTH_KEY',  '!c%382Y}&YipG|GA~25-k]357t<b%[-v}L/pQ1PXL)Q;:#1f aR=,r)f=FG`m{}O' );
define( 'LOGGED_IN_KEY',    'p4Hqy?<Up/PQJMOZ&>hQ^Gv1&s=$6/RqEH|;ZxccsNF6F*z!$]=xMx31sd^n28[>' );
define( 'NONCE_KEY',        'k S$Z<qh[J(>`Y-Zga&zWsxl>_TW)x2Pq(=NRL+Cv:-)}tP/B/O)7ldjwZ/.~t09' );
define( 'AUTH_SALT',        ':i?VF%Hn(KX.U-qY:6z>Qv`@JmjcO/]zuIU.jf{5 T]?-;t;M~PXdJf^Uq4fy/W0' );
define( 'SECURE_AUTH_SALT', '_UTo5F<n/)n,`D*#c{DF_5|Y(0!N}q!<[l81]-#[gM_obRA4BXyBBM K+zJR=P,6' );
define( 'LOGGED_IN_SALT',   'pEbOjUMxFSb`sM~L-&cw-GWPu=Po+)2iXx!@VbWi,9c}3aZrkAyAzA%@G_$ANau1' );
define( 'NONCE_SALT',       '<1(VMv*aBFuhlTdAJ_c9`arOYspU3R#&79Ty<]3[fT0YYJ`vkKx@+1aK_@^ODT~!' );

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
