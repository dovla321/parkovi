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
define( 'DB_NAME', 'parkovi' );

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
define('AUTH_KEY',         'WORw, WUS@&;a>14H;0`=Nj7TUIM{/>AAa:gQ+eixDv,j6,A2b+L=Ezf}qroZX;Y');
define('SECURE_AUTH_KEY',  'pSkm:%fOxpL)a MnKLcDH..+!.a@[.5-)C!S|VsSw1>n&XM{Zw dvnUa-j;VD=Ax');
define('LOGGED_IN_KEY',    '2PT<)f+lj:P[))0#ZcC/AAW.SSHz{g#D;O8[1<]WgoBp@ic-|XYf.m0u0!k9WT^!');
define('NONCE_KEY',        ';b}zs[Fc#2>p>xQ6GGam;@eSd[j@DvqNf?+;r1YqCwaN!Gz2#2D-uA<l_#NZkU4F');
define('AUTH_SALT',        'DG&u QyE!wD(:+buee=]kE)}sC;yp G?WPp0;kFYzc[QsOh*tOMDG_H+D,9>gsj~');
define('SECURE_AUTH_SALT', '-sLMB?K4#-|nUE+1*`|IwA5<6g~3G#(BQYBJf|Q55XkB@O_4;;NS[SXkZc=R.03^');
define('LOGGED_IN_SALT',   '4}$&^E?5O3z6|4Ijz^r&>h;Z~*>uJ;4N/yUN40gnAmDe-^g*auY 5cv,i!<DIr,5');
define('NONCE_SALT',       '~PyZ+t7Kau47g;[xY ZVEX|ztb|QoxP4x;M)RWXi>P9(Nn#wxC*xuge-,Ul3i~,`');

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
