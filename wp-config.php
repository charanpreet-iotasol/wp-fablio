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
define( 'DB_NAME', 'fablio_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '-d-G@1F6]V8_tcOB_f@9j2Tz$@2D,}}clvX:p?`9a%L,o2 ]WI~WysD`j,/],k/L' );
define( 'SECURE_AUTH_KEY',  '+_:.n@v9YHf9B87I<nC^_I02WDmkRzijb~h}~+UW,z=8~1q(dE] x/&uBy8c{9R`' );
define( 'LOGGED_IN_KEY',    '/]HX[!dn(MrMNXmlrBvENysw;Qa.<B+O22Z,+;~+PrQ$4.{>-9}o19=h3<1lpkx/' );
define( 'NONCE_KEY',        'kPSJ!BPC)4y-,v58KmJI;K5cd^lGe6:f)VxQz~&JvOI6u<=|7trY1`8>~k4bpyf|' );
define( 'AUTH_SALT',        'lr]1/i/@^3e:}6/B646i7 rTJ_0Y#1b7Y){0>i/E`#PTCstRq+tH`S^M@+0{TQX=' );
define( 'SECURE_AUTH_SALT', 'j/R_Sy/l>prA%BRc=#Ezt/djamS57^aDSc^(dO}JrLt1K$*Jk6R-:9u?v~6CFZ0K' );
define( 'LOGGED_IN_SALT',   'XMTg;!K?6)?vjCM?csSrhm}nxOag44/<1^~=rkf[u< |XyF2=a#BUjtlAtFW -Uc' );
define( 'NONCE_SALT',       'NW7~j=%wFt}r/)O0-6/r+>M)dxqnum1*p;h~f#HJA<K<~d&~2L.)(C=oY|>[7aow' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
