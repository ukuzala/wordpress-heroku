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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         's^RP.8z}1aMuer/1VHV>bV@+?$8G{i-RR@fVSQklZDB0E%+@riq1j9N4IHC3%i.i');
define('SECURE_AUTH_KEY',  'E:06x4ujqJuiyRz?>^|:w>VE[y|$ik+G:|osT6o8HkvqbF7/(>ei}bxu4_GH8cD&');
define('LOGGED_IN_KEY',    'b|mL#NNTQAU0 `9L]^{2D@|RgL`?FYls9E&xD53_Pc:!AD9Z?b<2dnT).c^Mgk4k');
define('NONCE_KEY',        '-3ea.Jrk3stgiYSf029m]`v1.$<i[&lPQ[}0.NvV|_AqCPZOUu|/Bu+ +*WQb^T:');
define('AUTH_SALT',        '.vpL@0 qx+|jFf+bn^)^p[j3$EvizzvMJ}k#<oO({v(x$[2Y(H(rTu$)>02$-llN');
define('SECURE_AUTH_SALT', 'VJY1$$|Vd(c@61;^L:e8u*I92A,LI]xO-yo:`V }]ZQs-2@|K:Xw*vzv*;I]L57-');
define('LOGGED_IN_SALT',   '[-`F4._r!||#p=|g7-pIiuYDO-O2?+2o>p2g|D9kC:CY=&aS[A9->#$h {J@zTL_');
define('NONCE_SALT',       '?)zV(gyU$le-5K;w:zI!|>d~1!;+c #ma-T4=CCk/)/=[gCXHBd`Sa+d3-M jb{e');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
