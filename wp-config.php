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
define( 'DB_NAME', 'devops' );

/** Database username */
define( 'DB_USER', 'devops_admin' );

/** Database password */
define( 'DB_PASSWORD', 'devops12345' );

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
define( 'AUTH_KEY',         '8+n#8$3;c-jV,`CU&H/6$2:k6:1[tWLzSK8<EM$u}~?tRWze)kl^`ISax*h5b<=m' );
define( 'SECURE_AUTH_KEY',  'k*Sa%Sl-g}n@,)E*P}>&<vqcf2dAd,ct7n7k4G#ZE/E4agK-06[o%C5)]v|H*4Io' );
define( 'LOGGED_IN_KEY',    '1_ytPq,qcEAh^exK{}68$5ufJSi`.jshUWb&|GYT$74]mP;`%2M*V@+Bzro.I_%=' );
define( 'NONCE_KEY',        'H. $=[_#M8hJry=l| R7whYbSS:[HT;3dTb[[ VIZHJwaXJi<OXD<P=~j!zca{)t' );
define( 'AUTH_SALT',        'E1E73Z-vYI!&;&hTH;W$H^p7?S@`Gs_-+to/c8Wrj1*< |0{i8PSBZqmPwVUL@2]' );
define( 'SECURE_AUTH_SALT', ']BBjIJ/:hC^k.]xHcST1E SW@-{a;2T^Cyqy$d4@f3Nys,r!e_Ivh:jzL#~|&eM1' );
define( 'LOGGED_IN_SALT',   '7c5S8Ym=)lQ$_fCbg{}TUoB*8TOjV1fvojGagL7^gpM|&0%mNW2s;%lrW1Q5vp A' );
define( 'NONCE_SALT',       '!vAk*/R*%iH?==`tg]-$=>,H=}=@Ot=i^U@}jl2+X~]L]<Q%ln/ry8jrW6!!M-*S' );

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
