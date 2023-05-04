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
define( 'DB_NAME', 'db_wp_hosteller' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '>yWV@hGl#{D61Q-i6rmV$@ <b3_avvFtysHGchdP:nZ0!/Yc7eFZalH>c~P,>L%;' );
define( 'SECURE_AUTH_KEY',  '-#Hi5N^p(UypG])t~}0[czhB8#3)MZ>2z~tRJO-#hc@</b_xh^9+:CB?g`XYy9?:' );
define( 'LOGGED_IN_KEY',    '{ZIDRd}Vp>,+Y#gi(M?;t{(w]XS^ZEGP$.e(QVb[e&,drW6uKhRUa:isJK^cd{$6' );
define( 'NONCE_KEY',        'yMhLMGHfN!Pp&d`oU)r.<}p|/Oq=@1{{t+,Gvg[%~TA~GWcj`;_MpeFA`]fZ5G[d' );
define( 'AUTH_SALT',        'J|- _$Z9`tN_$I[d-%,p.WouY)%bzCiIvg47nS?*~K4t!`RdT0DLi@~g4MsL`M^o' );
define( 'SECURE_AUTH_SALT', 'DZ>(sYX|YqhK+^d2ZY$bXo/kg:{V2qz85=rgOB-1XE0kR!p&/5D9-f)w;Yki8LRj' );
define( 'LOGGED_IN_SALT',   '_nW!-:/Lq/r(L>=AZe0JYS@tF9N%axyVedR/)Rltaxo1F,u]{JUAYLNHksl_UqQF' );
define( 'NONCE_SALT',       'KBX`Ohws<XrdFj|,bgCXOK?Z&k#/-Cg@|^3S$)YVO+64 Qv-F @?],DO.93iY=qw' );

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
