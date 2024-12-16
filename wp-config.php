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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'W5L66iUcGBCj%{m_1-Am@9$6VkVJC<zdnvGafy,&5#P(E,Cts#c=|kR!i))u~6zq' );
define( 'SECURE_AUTH_KEY',  '@A9G.VR^rk~_UX&aq/l2G<e$R%Q{VU^lutBDJ{^jr[3u`8RZ%0<NV~]>.p1;oJr+' );
define( 'LOGGED_IN_KEY',    'MD^!$jV5SC;dm9Sh&YAcL#RN^VwQU=HJ {-.04Nl1a#?3<V1}Ww!4qZ9F0z)DEOZ' );
define( 'NONCE_KEY',        'm^tp1irZEgvUd)+xb!W;S$r6Ao=UTDJKX/RP2k[+<OoPjZ<sMm9g~crgL9G+!#HG' );
define( 'AUTH_SALT',        'fiQi|H!sIW$>1m|0OmuBqF*XqECNxN.xgzdzb@B@0(GABh./4yh@fIX[|+knY,T4' );
define( 'SECURE_AUTH_SALT', '[hHsjI2%P:bV[YTkTA5:ggo;<0#?FLov2[/H<S[b$r!9ryedK5Hb!{Nr;y?Y#^`#' );
define( 'LOGGED_IN_SALT',   ')|8<2BI.|f4:=XbBRx{KcuUa=CU#xIa=[]M],Q5e:JfRcyH:e 4,Ov*!{2#u|HzU' );
define( 'NONCE_SALT',       'U|wU:g*:>lz2cHc-[Sw9}77s8=u[@&PL^~T9h`hii11J>[5e4I.kY.48]|SoPgj8' );

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
