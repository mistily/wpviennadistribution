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
define( 'DB_NAME', 'wpvd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ',j{/.7ET{AlZY%laJ?rnr80Hr15+s_WS4m9<lwmA^<?W:%$*`#s{@Y>3QN&-P`cX' );
define( 'SECURE_AUTH_KEY',  '{1AcXqCNDkAJi`Z&!NBn>U$@oJgrBWMxC$s0,8.O 4.4Q2@<)EKLf@TPnn2f-hRp' );
define( 'LOGGED_IN_KEY',    '#%CDquv9xQ6V6-`TXX1+y(~UDBy `x/U<$i!J^h4BwHvC;[A%D=^pDvnDS=NHa;W' );
define( 'NONCE_KEY',        'ZisiHul=-%E^C>_$1O&=]K0NK[%(E4)$Wn>pzPBh_2,kc93:PTZ?~R%[k?[(?$G ' );
define( 'AUTH_SALT',        'Iaa?-$#5kE[~&VjkFU^%_)QQ~gvD%eIP8TSRNG9&{h/eELErD*y7bV9nzs$x*9gQ' );
define( 'SECURE_AUTH_SALT', 'q$rSs*tm/h]tdV7f`^w+:zDQB`lITBs%h^sLwu:Q$V#TXrc34xYV}bHR]6,d?_gD' );
define( 'LOGGED_IN_SALT',   '9fSFb}D<9?3|MMo#/xE]i{+Pe.9_mfiP=p+?x<=0,LYXx`-y,.-~gq]HiRmVwv{c' );
define( 'NONCE_SALT',       'q[Q*+sZlcl~?ByXPIo|^&t~C7Pkbtbkfp[:S>$pO6TfWCX=OEl:pNda*K,NB2XLv' );

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
