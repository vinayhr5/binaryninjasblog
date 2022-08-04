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
define( 'DB_NAME', 'binaryninjas_db' );

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
define( 'AUTH_KEY',         'zPCwN<WAp|9yq.5t,zy}SA<!geoPj5S,a-1G9F:08>5,6xu<N(#AwK+tD0 ifWn.' );
define( 'SECURE_AUTH_KEY',  ';h?(gwsQ`gs^,+p| -!-Zo 2Cog$g!A^!iTX6MOcX%/M?3HF^/gf~36uemW.A1#O' );
define( 'LOGGED_IN_KEY',    'FYmQMQq>.9/vV&>K5ehe-?HcOGz:f8{bj|zO{?1nj3pe9N:]<u4lWyH([>l?~;K7' );
define( 'NONCE_KEY',        '-=9v53h(8LWO;pkF2%?Ix?tPH.g_3(O^HbCid([B%52qH@-qoTe G~v9lg>D~6Mv' );
define( 'AUTH_SALT',        '*{=FkuKN!ZpD7Pi),YA?CBL;}jjz_0the3hzD~c9{ciS$6%]IG<eb*1Ofj1:4yI[' );
define( 'SECURE_AUTH_SALT', 'a7H]kCwpuwY_od03h2>ba!l& vT<+JE_v1$j|Ea,`sV3=bMwWoa}lr1:{[QK)/P+' );
define( 'LOGGED_IN_SALT',   '?e,[FjwbxoMG2At+gdleV*KpZBT,DueHUMP`J#-_q*a7UvNCZuieE%[r|w!p4hG]' );
define( 'NONCE_SALT',       'Z@HC((YZ3A:9S@:=AO^}bc.seD[27?~9`vol ah=nGaT`r*..:8O!CCXU5z)bI]S' );

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
