<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'theenglishbug');

/** MySQL database username */
define('DB_USER', 'theenglishbug');

/** MySQL database password */
define('DB_PASSWORD', '6XwjRbVBjDyQ36b4');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'fGaXiI9pQCRD|V^.u0utQ[C||]=+d:`2d._DzL{.y/nDC-(FMxg*l0ra88<&U0Rk');
define('SECURE_AUTH_KEY',  'U9.glnum=,3oxXzemN.~u$|9@A?g|&}Ql%^n-(XIj}NdqO8C^wQEh !gG!U>;l c');
define('LOGGED_IN_KEY',    'qN177M@&5U#%CCaAm#|h*t.`z@iAC2tAhWC0xq|RDJp1a%|+)Uv5-+93n!To{fH<');
define('NONCE_KEY',        '|,4D-R-eAH/wpJ;=Gv>PiHMH+c|L6pG9b_i$d`zmSiH$}V]4J^JF*mLL~v_@Uct$');
define('AUTH_SALT',        '7I9ibQJsNIfQm6}PmcP)E|+5-%PsC:5p%*}uq1pS1-Tm@|g~v!2WxlFm g15_3>1');
define('SECURE_AUTH_SALT', 'MhE[8fo|&74i1%5Prt)PvBm,+wyRKWUNU99ZM*DkSiTD*_^Zn]MOE6srtv9>,% 0');
define('LOGGED_IN_SALT',   '>(w.,S&!S9%~Pe=@@g/l9z+&T]9G!<O/p>x-}D]EFvTObKvwT7#`;+JW0.Oe3+#6');
define('NONCE_SALT',       '3@0X^uKv#JOaGG7e/.nfEqAd)40,.O?~y`NX+j(?Ng>g/wZ]uPh,c:Y493.bYt;Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
