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
define( 'DB_NAME', 'e_commerce' );

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
define( 'AUTH_KEY',         'Q?nak,[kPlY$-8]vN9#|Mk&C|s6y;K6(H.IXD%W6Smd{Ho1ZR<BClQX]z9r~ZtQp' );
define( 'SECURE_AUTH_KEY',  '[LD-Zm`844Z`5aTufxn~:<IUjsg[KNCYeK{D^wg6SL!Gw@3;X 5qrirb}F:-lkU7' );
define( 'LOGGED_IN_KEY',    '?:l6{FRP<nZ&H|SvV*3+=^JV:R}$ud,[.oEV~dqx1vTS+.gd}*ydk1<v=B5ltvV0' );
define( 'NONCE_KEY',        '({Ucel?C$j|,t+hC{N.<R9fMJwTJM9niPG-c l{]be-w~lqW7 J|iA6pNX9*qY=b' );
define( 'AUTH_SALT',        'SsMH92W0;9K-Zbbf6pvfk+J{b]~Z7G?N.~z-$!L+6,`Y{,IY^Z;fa@Lc@vK|UWmF' );
define( 'SECURE_AUTH_SALT', 'V_VoXZE(5Xy5^Ada<-9)rAkK]_JsYI[7-8/:AS_bDM  L/2>)~8k.>FV-?ov6&,[' );
define( 'LOGGED_IN_SALT',   '`e]l_AHZ(D$:Wj51SI6&GTddB3zA}*P^anW^#6Pf6}oT*j,!{ z9fbcq>eo5%m|K' );
define( 'NONCE_SALT',       'c`yW~l[d5P)?`w0:_M3;J:F!!E5f)ePi8*3Z:&49Bm-.Ao3f_DO3k6*j<q7m*#Uw' );

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
