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
define( 'DB_NAME', 'assessment7' );

/** Database username */
define( 'DB_USER', 'assessment7' );

/** Database password */
define( 'DB_PASSWORD', 'assessment7' );

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
define( 'AUTH_KEY',         '5)CQizi<YX;Uc5u;1yR>vshoGL)3nb]>R+zwqq|R#IZC@fpb[VwBj#^s71If+IJr' );
define( 'SECURE_AUTH_KEY',  'So#ro;rX?EXiQyT+~l3?98iOdYWO=A^ZmSXf`A!! =ndzY=( E%^U :c^XFkG2CZ' );
define( 'LOGGED_IN_KEY',    'hqBe}9actAijbH@_V!{{t2?k+Iz/K>a|H?g+S?FQ>?3gb5Ywb_`G-sk4}8!PL>:x' );
define( 'NONCE_KEY',        '![?Va>4;L?^<3F|y=jcT nw_GVpKF${Y9L]Z{yg8WpScIz6K[Fn1$lIW+TbDSGBX' );
define( 'AUTH_SALT',        'cA)g;pn.3|a!AjKkCgdo#vaqm[5+K$EiSKe&Y|z=+g{m:X2+!KG#sO[gr;+Qnm(I' );
define( 'SECURE_AUTH_SALT', '{FR=*~k;=`ahV>cWfho}O^8?$E]).1l#EPz2lvuqu@DGY+QU:UJY&5p[ty^)BAOR' );
define( 'LOGGED_IN_SALT',   'KJBdf)ypyKt/X]):%g+GY5vz?ej%Anh.>e)kM4*jAME7$0M3w3]S3*CKb9)>X6N8' );
define( 'NONCE_SALT',       '@n)KpY*vZ[Yj#Ap1}O]Ih.9Lkt-19/3JP,=|2o&szB =$C! Otg3bgkQl=u%kRUu' );

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
