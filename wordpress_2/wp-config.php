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
define( 'DB_NAME', 'wdpf60_wp2' );

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
define( 'AUTH_KEY',         'fq.u@Q(%K_0c<wk ;coawJ<QfYM_`h6dQ<h#s,Di+Q,X|[]#Ng>5Nkz~,t<ZaYyQ' );
define( 'SECURE_AUTH_KEY',  'o(ESuwdgL+L3w%cP=hLaw1k}l&q|,2ec>UML:`Z]?mv].T)=M<6t3s.,P{vTUN:S' );
define( 'LOGGED_IN_KEY',    'VEkI67!yo!VCbff!z?_[c-*+E),(tp{RqeoaVnqrEqR)2]3a@e|AA1pUOlD^%Z0A' );
define( 'NONCE_KEY',        'iQWym7KTa^)HIp;z.8kq3)kO[NJp}+7/u0v08 H-Tx,~yQT L0If^mlK9+^?*j0m' );
define( 'AUTH_SALT',        '*5 >8Q,7]`@=v7i,vouSTOuwmc3_u0xmU`j/NRyu4yY>swE%r`tc.$~DPo7Un9H}' );
define( 'SECURE_AUTH_SALT', 'h}Ni:3IK2II/C(PFcrXuB9chAdd Q5Ce#]q/Zec|W7:pIzGp:DUYv!+~l[|LD^3u' );
define( 'LOGGED_IN_SALT',   'y| I3|pch!cFeh6>R$w_%?n^yF9>ZcK4{ZM;uD4!wrWbcTVCJ+PFc18Th]-o&3p{' );
define( 'NONCE_SALT',       '}7-M,fCj3%ZBO1Y!R(Tbn@R^7N!u$Z#A)mlgmsTjn)TCBgISQusf`9.PP&FS=%f2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_hasan';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
