<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-K5}E.i[L|&B8g3b)zA 43+ez&*%D@Mq!?`F[WkZIIcM%_wb%%)(pgU;lN4][<cq' );
define( 'SECURE_AUTH_KEY',  'fvWWLzD#(a8AAP06kR-~VL)?HfI9h?VR_:OZke3 U{Dzf0g/9yS$7IMNp1FYn4R|' );
define( 'LOGGED_IN_KEY',    'mD*u52U-)_YZ/7Q$^`n%c8t{cis+&bRG^2vJNHlJwtSK~!g*GEJ#3S<~rHHG ?W@' );
define( 'NONCE_KEY',        'y0??85C{:gK0-Ffi fXGZJ]^WIW0Mkgy2++$}8PB@9f3t</|8o|Cs:0C@6dz@*{o' );
define( 'AUTH_SALT',        ' Ma/-i!~/7nJ$o-0K~,IG(br^cD2z#lWpIJJp9+~XDVW]^POfO(|FSL:fTnoi zk' );
define( 'SECURE_AUTH_SALT', 'e3/Ucp}[=NQ0{!U~7OT/wkb3Kf5<T{urxb(L7F51wl:F3N*km}$:|l#N]bKJ:xNm' );
define( 'LOGGED_IN_SALT',   'H&].`mW; d5YZf;LL%If/Qv!5sL uN*4}xD+1F_(~(=zB+8vxg`vPs9_d$.~u%;^' );
define( 'NONCE_SALT',       'u4*j<=W](5tPS HlOdem<|c,q?W}_;~ 97ap xaZ.8 DjV3==B)[m}?nd1.M0k)v' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
