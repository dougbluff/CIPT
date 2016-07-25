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
define('DB_NAME', 'cpiTexas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Jo5N<M?HF l.R:QiN8%s;%UMPd@b%Ijfw$3DS,AMdaZ>U3Qk)An+_+aGLX[tFiOW');
define('SECURE_AUTH_KEY',  '+a>JXY:rUb(+sVzf~8_<yu8&`oMss.`MGmSlBwLAb|>[W.QdT4Z(g#  y%#u)Z6;');
define('LOGGED_IN_KEY',    '3gHl08m]z.b3B6[|sLTP`n6=iL137Taoa#,DJOrLk&D[GW8~ew^h0r%[>[Y8eS)P');
define('NONCE_KEY',        'jepxBU6w8-wT:WvO*j9`|b;Cs1q1j2#1AI!%#xS3zKbD&9T1<=p<Y+:82!k^i>Eo');
define('AUTH_SALT',        '40E?LRcUlO,h8L?a~l_CUwmWT~1b~cQcZ&`k!M~6h]1G]ynBeXo-;{!NKrzkTS!?');
define('SECURE_AUTH_SALT', 'Y#Lk*Z+9MXZc;Z?2,+3|)4zh3WWO]1+O>ks.isXT[zjM`4VM:8[}8y}xG79y&eA+');
define('LOGGED_IN_SALT',   'D<D7O;2X)0B}q/ai8A~F<lq.IYtkYl4hR))`TL+^>3O_3r:2z{Y?=+P3~bdx`T8I');
define('NONCE_SALT',       'qT3?j*a/lp`#]789_P~C:n]ij6*}Vn|fl1AqBaz):Yx>(W[T^@)`a|k/r_a@>!ik');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'db_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
