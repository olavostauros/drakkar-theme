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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'XhFdO|;8fC>H%6,}#:}Jwy-$J-I&u5Vl|rIx)1<O,/:=H}wEiRi6fyYYkY8|w 54' );
define( 'SECURE_AUTH_KEY',   '(`xW4ZDkB.W7i_2y%7h1m l=GSJ8U,S=]FDj/rk850aS^eIgzspk{Br#RN=NOF8Q' );
define( 'LOGGED_IN_KEY',     'SI#Jg~xzQhqdQ]n W|AVk~[x(~B^q#nyAbONwD:1V+61pN:9@UD7`q-9TtyVtQt#' );
define( 'NONCE_KEY',         'j{_6[7!ZHOcA2/Ht:n[mwae#XpeOd7vkS?vv]z5x&Ym=TMXtAu8x}Vtci(;}qpI}' );
define( 'AUTH_SALT',         'dQ}35+DOw87aa8v:~W~hi,_Kg]J}v~=g@M!_{7%K>D&b g+Z2~eKdd>9#rXl).h7' );
define( 'SECURE_AUTH_SALT',  '<4NMfmmH,I&S6F`0aULZ:v[&=3Can8gEa!Zuv:(x?MW)h8~)?R:6~,[Z29- Y[0M' );
define( 'LOGGED_IN_SALT',    'S3-FD :WXE9aZY9uj%F`-9. RcNA$}u(Xy67-ke_UMX^?d[Qf=J|)FqowZP].a.f' );
define( 'NONCE_SALT',        '&[Zp`oOnbT}z*ol:>[S[O|lit^rp}cUzh^v#!(H7JJz!8Y@(d92({5x=kXGm{w4A' );
define( 'WP_CACHE_KEY_SALT', 'DQekwOV>@wW$cc/I8_p+T wD<}3N)YGcW&W@aBD#r??tFYp{GbRe4sOaW&}fNXa@' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
