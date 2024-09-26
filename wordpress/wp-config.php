<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wdpf60_wp1' );

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
define( 'AUTH_KEY',         'ZQpDsIyOV0t<{Lak[]}gl*oA2B]1vZ/p7eA7IOO<F{+)bl|WJn=W]r=p-d_!G1+$' );
define( 'SECURE_AUTH_KEY',  'wP6.P ?;Fshl*ZS`${*kK2_tM})@qbH.0({VetEK<6K$u{A-DLD10s|hmoTlepkm' );
define( 'LOGGED_IN_KEY',    ')Z0*k4lj7{b<CUSn_7#(W()KdzM~=TBv1R!3M}9HtEwSK:Wg-_0 XEh}R}nrrRR`' );
define( 'NONCE_KEY',        'NG4no*YTX[X,0G@S},TUyznxqMn7eDaF7{kNVTF$%9`eDUj8Lbd.czD9-((|J1z-' );
define( 'AUTH_SALT',        'se)_J3Lgl7>X<x5M|?B97u?ws?]?Ak=f$[X!ytg]fN]}CeSy442mv8vn]Ybi;1dk' );
define( 'SECURE_AUTH_SALT', 'la]zzlC;ymq1Y~F*1?9ZI8;amssN^@jLb2-mc&?LQ;VRsj)ZkFSJ/ZMEutdzUL_e' );
define( 'LOGGED_IN_SALT',   'e?(_6M{4Ujg-bMk}wi1FIj7)4%1B?qL0@UDXxsodXa:F^8Y0$H{,/s+g.Oa3>U]O' );
define( 'NONCE_SALT',       'dpQ.-:mfBI|g=x93G)81dnQ{ #4z j1eT|x,|$J$bneFl-1/%]/(tfOpD5R@}]>m' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
