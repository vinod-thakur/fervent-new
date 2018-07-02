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
define('DB_NAME', 'dhoop-batti');

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
define('AUTH_KEY',         'd4UAM[pzR@t)a&X$xZ8xVhSU8`>GsR$9>FH,=EW1BQ4/jB#vZK^f* Mai<5Zaw7q');
define('SECURE_AUTH_KEY',  '?3K@?{<,jmAb}m<=#O82|O2.[I[W6^V|nFw;=M.To|2)G;~}~sav3BIp%6jDY/c.');
define('LOGGED_IN_KEY',    'FGmaf:!u%5sj5 ium/?&N:C`_1X)&)}_P=;GE]8Qy!/tr^Ljst}Do)Uukx;Vfn$i');
define('NONCE_KEY',        'rW1JkoH3K}pjA=7/NFU9sKta)Za~bo7@XPP8S}jQf%P^&b#hjlFk]2#ICm2PTS@]');
define('AUTH_SALT',        '.;Rg+H{f!a3OO%5[vZ@SUFgj%x50`,/%%S@W2-V]$4!e^wz /s(LGQqWORCH`LHj');
define('SECURE_AUTH_SALT', '*lcW:Aq=`H</$E~nf1WKuhe{,8hdB$ff}C(p~`C=[1AE)+Xcq9L,sCdyXhN`VD_6');
define('LOGGED_IN_SALT',   '^&oNv??bf34wQZ@7eU5u7yx Qj$U=qfk5Dg+ukc$x{q1730aEoB]unt$D;a~f;N]');
define('NONCE_SALT',       'v}L]ZL:a1rY#v2/Kf5x[X_KYh}kTSi]Hx4#}m$0cFdRhsW2M3y~s*nAvx+@r~sQJ');

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
