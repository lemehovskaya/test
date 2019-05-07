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

define('WP_HOME','http://test:8888/');
define('WP_SITEURL','http://test:8888/');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

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

define('AUTH_KEY',         '`VilLfMLwPaBu;U@k+R[_G$3-}h*R*3Q)#sKfK<^Dw_CC`d_||l4*%>]A|W%oxU6');
define('SECURE_AUTH_KEY',  'Z)v*~-g>3BiSs[*aJ^+Wgqp/`KC0^O(JCqYe4`HSsYa0!m)a/bA<,-B[WW^W09tH');
define('LOGGED_IN_KEY',    't^#jhHbKR!?2-smNb).dGIiL1-Cc.+$xX6izrS4sck1QN6!]+)-Ufz1Tjb *k2?L');
define('NONCE_KEY',        '0&zE%MX-#sy;zU@g+<1e-A*{8TOiL=]wCBb:Ub5Zkq93c:< b2njKLQI~j>-5)b%');
define('AUTH_SALT',        ';^u3!w_^r va %/^CF[y!K^bz^nX!}ro^Z]T#0~b&62.~O=u#5k@dM7%FYlK :K`');
define('SECURE_AUTH_SALT', '|:M:}fs*sY8u66ceZBu`4O5YDdkEb|;5$a{w+-=|[>W]})B7u[4u>]U-a|hE!LP$');
define('LOGGED_IN_SALT',   ']Li}+R}UeVR+> ?]Ag4;-x}Mad|K$sdL4kDy15t|50X/nyjH.+lTbF++~^+eY&Z^');
define('NONCE_SALT',       '_Ac$kgk7dm]_+k&t2f1{!Eo$UF.o]]lxw#F{J^^n!:|+(C5g4`_ oh(>sK#!Cazi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test_3ed6d_';

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

define('WPCF7_AUTOP', false );

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
