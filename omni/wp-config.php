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
define('DB_NAME', 'adream_team');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Zq?yQ-XW4f~?dRbLg^L[c||Kv{KWU;m2g>.gZz+2/19GMuX^62.KB87-rCg`)y~;');
define('SECURE_AUTH_KEY',  'pq#7GW8cE9=.Hd?K/:,FfJ+A-#P5wQtfwfsSoxlpOrDWM`>Ts7O} -mWkK#3=|>+');
define('LOGGED_IN_KEY',    'GVDbK{ $FI@wF}$iGVvHi;WQ<e%HqiJ]bGn$^Yz*[9/Ao~=|l%^W?2hDB1y&L>Ia');
define('NONCE_KEY',        'iW`VlHS4S~DkC~t>Y)?DMUkSnj#K2(6?mY]v7Cz.M;{OwS7Ow,@ZY4rTL#g{}tI@');
define('AUTH_SALT',        '#8:MRYx$%bed#$#D0DZ%3*Tt47N$SwN629sV=jeQADQ)VH-uC^VN/MEAQI5~ T$t');
define('SECURE_AUTH_SALT', 'X4Ym-oc$K.c7a8@q<U)5;qunv+d_cp,&ggF4`Lm09DgbG7%S~Fy_^-vsLGss21`K');
define('LOGGED_IN_SALT',   'qV*?chS-@poWHV15MFAb_G3!n^3IpPH7,CSo>Drj^,ii1Iv=tA8n@`40Az&K>,eW');
define('NONCE_SALT',       '|}|P>9O!h7Xz+>G}]Dj8B:A#*4<55GY&MK%C%iZ1<b9cS/L;m5W]gi0.Q$<k=yXM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
