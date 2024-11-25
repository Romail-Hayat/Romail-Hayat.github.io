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
define( 'DB_NAME', 'romail-hayat.github.io_db' );

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
define( 'AUTH_KEY',         'E!IXO_dF,{:H;chRa4+Yafh>TVb>A-.BZ9a|gOEfV|q0EX_tst1o?zP[93A%T]w9' );
define( 'SECURE_AUTH_KEY',  '0Nvx,|-n3za}V{jBL 4H5.}Q/]C2g;e]ZdPZl?R}eC39G3[y/Ro_hJRCe0[H8oha' );
define( 'LOGGED_IN_KEY',    'qc5pkXYOh3L>WRxM9d^L&-6EiKgT-Cwq2m?`W0O4E2<lK6JxV.|loEPE}TA_1*!N' );
define( 'NONCE_KEY',        'T2UKs!{s3gTL?Sq[;?I_%Wawg1LtV)4|{Q}8vLt`T7pw#}u&T>U*eW.u.o~F>7H1' );
define( 'AUTH_SALT',        '2HL@|x)[U(p:=a@Rv_XloriosO6sd@]a:*a2vasmHA]A[TTlDFMJ/j@49$W-M4l4' );
define( 'SECURE_AUTH_SALT', '{~?EfT<2?*4a 5,KHIY1}qY8a-x2SBH3BFRB{nVW=^$f#R(?f^sJP81T<2Gan^?8' );
define( 'LOGGED_IN_SALT',   ')%Td#iWs[&bCIoK= D`a1~hB,@)s77MLW41}v0KTw<]4C.pKZ5|e Me;|e+:5,um' );
define( 'NONCE_SALT',       '=KRArxsV-a@SdvQ:1)Obye`1M>AUc?X&8!}o`5)ITF&Yd{z2$WV(X!+$ ;E%7`5v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
