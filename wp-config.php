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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'k#jgyE6OG68Ar-p-e)[qDY`KJ&n[ChEW((i!.&>UQq!WyrCJUWMTG6jU3z--r1kk' );
define( 'SECURE_AUTH_KEY',  'vBYh E>>UAC2cUd10fg& _paN$gLXo]^5h} AbgS`|B~[$ yZ*kxH/TeuS&TD>K^' );
define( 'LOGGED_IN_KEY',    'sd|.etGqL23]6y8FYh9=xy[^UVJ7Z*KJ(C*%@|V<ZI+1B,<v];|vxk:.4_bVUsLW' );
define( 'NONCE_KEY',        '7C^U3;5<!],]`f72g7]fR#*&4wZv lb.d39eqt%/JW!O2iCE]4q`P:lwN38yXr1M' );
define( 'AUTH_SALT',        'FJt+i4b_Gj<P(H:x32ee)@=lFEt1zje$tE>|*rO&6?o0YV#x=-g!63qNNf)Z}Cvp' );
define( 'SECURE_AUTH_SALT', '<DRM<$?C{h6H1vi$[h{%,(7p!$ l5Xjf(7V`Sb}iQyUsF,NAcR62$4NE.G<4Y(8V' );
define( 'LOGGED_IN_SALT',   '5Hp$u`GW+|7F*OX8U`hH)IZ,y0Lo[u<(/BRj.eu2q@_}M-Q%>_>g)ZKk&lZv@.j]' );
define( 'NONCE_SALT',       '+mSNxA,ZrJ]d=yDd!n@7[)Br43qqfq3[TQ,>ILz<A8W}AKcgvw}GOW&yShN;baXr' );

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
