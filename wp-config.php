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
define( 'DB_NAME', 'cristoreyhuetortajar' );

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
define( 'AUTH_KEY',         'cRpfCL)431e#>czqv~lIeYYdZ PAfcU3%Oya{P$i+{=|<Zk2f(4~|KgpBC,VUaku' );
define( 'SECURE_AUTH_KEY',  'EPxMH)`Ro[p_+TPS8421z>h<OO@>cS)!>@Xk.MZQR+VbN*L?jJ+7o?;Nl+PTTG)I' );
define( 'LOGGED_IN_KEY',    'm2}RSy@BAjb^C<^&(s*V?Qx%Bp:8tb)^yoCBwl7(@Y<<ZpRf|MiDz/ K n@:?[8!' );
define( 'NONCE_KEY',        'LbIom#}w6O;)tGaz7m1r5Z$A^5e(p.9?4$?sXc&q(RTa&VLkjL2X=b,b505[&+tH' );
define( 'AUTH_SALT',        'Z-0DG6|/HInQ?h^xM_>9Nw% _9x5 t682iyBJA74SP-rr4fYe14xA#cma3e]p0bn' );
define( 'SECURE_AUTH_SALT', 'nJAW+ahU]@F%z|+T<KK8} a8Tet_VsDNPa/&hOfJB xC@}g }X~.{el`T(mz4@Gc' );
define( 'LOGGED_IN_SALT',   '&n#v>?Ni1Y_I&aTyyK){viPI~)(b2i52$f`*7IR+-bCH(q@u 6V TW8jbe>IEPP[' );
define( 'NONCE_SALT',       '/[9B._TB`xaY-[TO1h{5%i_M=Yb0x`YCBbaw&3@))Z@ew=$s%+!PIM9qI?/F~Kso' );

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
