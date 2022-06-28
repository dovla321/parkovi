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
define( 'DB_NAME', 'woocomerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define('AUTH_KEY',         'A:j|CDMWG^R3Ze!?:NozV8Vx0#Bov9>mMFr0+<o+pOs[?$Vy7PZo3K>e QRr([zG');
define('SECURE_AUTH_KEY',  'd<$NpjZ?1nJ4~f3:<RAU=JsbUVn6`ef%8FIek66w|p+}#4JSNw6n9-%,]]iwcG|=');
define('LOGGED_IN_KEY',    '@O0EZl-mnMKgeEbwzD=X`e}Z6_W<D,H+W/EyL8z86i,OSB`st_{ yxT- #Kw3n31');
define('NONCE_KEY',        '3Nj4M/6j}z05UPg3gPgGlf[hNNuvXrD|hUh#{R$+-Juu:f|Z`w&&*1o;yr-N}&!|');
define('AUTH_SALT',        'c|:6AJv{P.+,h+OlbYl?Do[`<e?{,dRyC.31dYK*l|D`=7|N@9>|zfnJ9i$RM%O<');
define('SECURE_AUTH_SALT', '8%;[w4acAj&_#-MZ{FGXg-Ry-(nj&W_O$-@R(2PCQ?&cvZ/ b9[&y10=^Zc%i3+u');
define('LOGGED_IN_SALT',   'bdAl|7.W3tm#XiRrclRq2/k2>O40UIB8x#07CK[0jJ`H,C0V$9+[-Q,~+$ @~v+W');
define('NONCE_SALT',       'F$pr6SQQlB.[Pk,sa3ycQ69vQj6}9W+l@RGol4dT}n(& OU](AWyeley G]~J|VZ');

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
