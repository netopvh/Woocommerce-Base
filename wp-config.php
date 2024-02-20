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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'fn1d2f13r0' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'QFBWGcMf*8f#}cv [,K@heh|sUz#%Y4F.=<GiX)7@dVwuKP?adXL3o5]XH,Gteaw' );
define( 'SECURE_AUTH_KEY',  'TW+FS3qQ5Y*Ge{0oO0G[Y,n}.oz>2s.%zsBREBxQDp#E;>5$iOpl0kwUNPt/E7ZJ' );
define( 'LOGGED_IN_KEY',    'dGIf87Dz6382n{1KGw1`&F w@AgZqhs&Cl5Wt[SQX(+34vLQv{k~2p/&%a%%Je8G' );
define( 'NONCE_KEY',        'UD`[L4&Xpl--&84tEAvg6e425eXDKl^@}JM>hH{E}mxo>0[I_/9ii[+ZUw=4@I2]' );
define( 'AUTH_SALT',        'pWe5Kox_46>okGJ]9l@U}sAIIZCJwT,k1(whWmXe3D*EtYI*23qz/Stqa=@^YhXG' );
define( 'SECURE_AUTH_SALT', '[J1)[GI:M0v@wz|ZK6LK,o=yuf&tM1Or/.vt,@T5A{6UblfVt6t%/XMi+of/]?rZ' );
define( 'LOGGED_IN_SALT',   '~]J!9:Ll,7zU`G!d_40xPgW}c)b.Bc2Ro!qf&{V46R3$F:| UwY%-Fo:4Zh.GHEe' );
define( 'NONCE_SALT',       'L>?<fH-+4%[Z z`Nbx)rH5VICuw ;{%SEW<qjGMhvSip^6UKDXL]]h~Ed^W#fKkK' );

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
