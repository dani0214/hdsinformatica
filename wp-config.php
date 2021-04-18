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
define( 'AUTH_KEY',         '^Fx c^u<]m=Z4! 1&Vr`TC2w]w2D]%PcF{!JPV.}fmafGgFUaU7Z,Jw+Wf#iGA+^' );
define( 'SECURE_AUTH_KEY',  'g??IX0tOBWQ/#U?})5_I)[eFP(?|.^3MiGOxI{jG~2gX`@.#MRH:{={ud?~L`k*K' );
define( 'LOGGED_IN_KEY',    'hZ}Pk-)c10%rIwuyfEG<<3l|KM&}*;z6O#Z:]eA[B@L4;kTV,w:l -5_z9@b08{5' );
define( 'NONCE_KEY',        'J3BP=ny8z{T$we3}$O-`&V}7*Pi!Q=>&f  [>ct<ZYx#~95O]=$i$oT%ORJ}J4kt' );
define( 'AUTH_SALT',        '`BT*yDN.qHONpD#I|hB=?N;n|G30~j3Yobl}[fyT3l98<k=}v>.]?c}8^x~WGN;h' );
define( 'SECURE_AUTH_SALT', ')n!J[4K?)a.STugOvAO{$aD1?i[<g88Q<^b~eNIW>9/L w$9.Y+~>l2Hp94$Vzif' );
define( 'LOGGED_IN_SALT',   '$Eg-+lMte[4VIHGb$XUE>f*a=T`t2X4Hx6c`2#6C#4b:.#gtC?K:S>![)3slP2NL' );
define( 'NONCE_SALT',       'W)!TUCHkT.[!:@bBmUDc$A>8vpr}d7~!NhbcXIKM3L:+p0x9<pNIY(ILX(#AqQ2~' );

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
