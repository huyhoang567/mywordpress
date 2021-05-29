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
define( 'DB_NAME', 'wordpress_demo' );

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
define( 'AUTH_KEY',         '0t8f>/qIj&K-?4R.ng^S:<3CdfKBENhm|PSWx&=Gj2&@d,`CC(a-72Kk/wng~7k{' );
define( 'SECURE_AUTH_KEY',  '8fPgmstPCX>%}W!md:oy)uT6 SatcWL0p-Um)h_hRcvgS<@/oq4~^~Y)LZCd8)A@' );
define( 'LOGGED_IN_KEY',    '(?zgp@(5nSItE41k)#|xFmHKJUeq&?me$2m@gj2,<0v:/u>WkG 2fqUTKTam*}=6' );
define( 'NONCE_KEY',        '~k54FoJ+llG$=1~J~<?BELpG}A*~`~M1xb.ZEjZO}tXQ4:HA$X%kFq~2(#%%_`!&' );
define( 'AUTH_SALT',        '^4IdAa[U.U%A%42nFhA[L,E>Jt8dxBtx(o^N)`2xc#n04jk| ILopxy;n XEv{Sc' );
define( 'SECURE_AUTH_SALT', 'iJOtvhA1Z rpiUScF6/cFxLymHnOCQ^yrfe..y^G^E&CHOEj-*+*a{?6|Bx9)Vl]' );
define( 'LOGGED_IN_SALT',   'T|2vS;{KJt+citTRi[,na)z#u8oIGr%M,B i166Ny|OmpA]1q13*YQ;{{vO0w50?' );
define( 'NONCE_SALT',       'ZpmUD8pYT!%W|Ij4}jK.d,QibS=9Dzw7vh$c ZhPY$m2ZIp$U#tw1>86Qa4ojyJn' );

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
