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
define('DB_NAME', 'eva_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k7>BB$MS*|Hb]vl>d~Yz(id)p+Cr;5tBXh%O>Wt2!3>RT<fh9F3..k]B,]K|HweQ');
define('SECURE_AUTH_KEY',  '3d>dn}?!_CA1chWLFulY6~ePJe%_j43h!~Ob9t$_d.59t!]l]drfaPScp&8!BR[@');
define('LOGGED_IN_KEY',    'HC=VeZP(sioCBZ&]X*j,Mqet<Pm!OH9j{,X9@K pAb;r;P}OQPW3wFkr=J4T!}a;');
define('NONCE_KEY',        '&d#N.W5uvRcl~C@c9W-|FBsRVO}ylF%v~Z-|(#u$0#Eo:D:BJlgj+-oU~hJ|iR4g');
define('AUTH_SALT',        'W/wlWY(0XoeR2@Y8wm5pfZTmDEP?l!oRo(*{A Gn)Np4Ygu}[xYh/*0G<>jDNV:[');
define('SECURE_AUTH_SALT', ',in+mZYp+#fs2Z3*mJvdJR<jiV_V7K<:T`0s[ul);&(.hvaS@dRGsXaZg:*^9v!`');
define('LOGGED_IN_SALT',   '::^sbUFw%2>f}Jzln-3xc;[g~7ZKu_3ag8avn2#C>I ALh)ME!>w,~f-<iv!Y0-.');
define('NONCE_SALT',       '=#[a/!(?=0dC(iup9)xpt ?V(_LjjZBzb84Gs[#w(O`>elnFoXRHO/^x3PiJ)&]n');

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
