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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wonder' );

/** MySQL database username */
define( 'DB_USER', 'james' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Password' );

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
define( 'AUTH_KEY',         ').)AAB#!Jo]-70AgkRT]S]DxRgo:;i_!PX9CN~zK#BItj1*sA<wMk@]AdYTJf4J6' );
define( 'SECURE_AUTH_KEY',  '[w23JAV;S~)8;N>Nj$wxjJn$jHg6PbWGZ@k|#,xN0iC@6]9h =#}{{uT9lJKZcrN' );
define( 'LOGGED_IN_KEY',    'M 2M80T/`$hx!}6&HY9xxP3?cnTpL<e-qP90,6DFoMiT{=-.*7$1Z1c].r4a`M/W' );
define( 'NONCE_KEY',        'gN)/OLTZ}=V7pLpOL1NBw!!GT1zq##Xn055IbBWqWs*;R?Q@s:X,+JnKijYZ|<`.' );
define( 'AUTH_SALT',        'vs[tHGEX5&`^DaYerGP[,dgW~o4#Dvla {?61wiSbSb>U8>7P)P/TUVCDbno%tZ3' );
define( 'SECURE_AUTH_SALT', 'f+ _hvOFzkn%ae;mMx9[%Hl6~HoDtHUyPs^=Wqk^&hoSvUV%kq|mv(NmT:. 5pYH' );
define( 'LOGGED_IN_SALT',   'iY -HhCkMo sYx1Ty4R9z`(c]}JgB#PVj-t:nH{MlgWmOrWI}VwG2i)]bVGD@_6<' );
define( 'NONCE_SALT',       ':G`~=k2nr>5>Bp-[lA@F9=`d6oA90(i;qQl1tzG|eh_{`%v+i0M]~Phj}d_r*CDE' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
