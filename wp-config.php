<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jobtreecoza');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't2# kf8NBAEQ*aVoJGOC CCg}`>.Q-u;>^<&*6kEIuiUDWzkEaUzZ;>E%aCLLdR[');
define('SECURE_AUTH_KEY',  ']%(0XG_^;yj6X1ch=6Pz;P`raN^BBs68`xjP5&ZM9^1rhBq&b,?i4t:Z0`2@PvIW');
define('LOGGED_IN_KEY',    'v+#+L+%][cGUStiw85;6hJn<Qh+QDitA*CX]4J9vOe.(*M}TRA)gs>hSLlD.p*P<');
define('NONCE_KEY',        'o8Vyr2|?J.9Z=E@MF~y (I(:mta9&1rYL6;em,1]H7ZWC%=;~6b8o9mxqKh<&lYW');
define('AUTH_SALT',        '&xi3Z)):F q=?LLO>/EZ,Hu72+f&s7MDC_k<fvG)M0vkQ4]9VmU(i?nRQq2<cg=U');
define('SECURE_AUTH_SALT', 'GBqF2O8mV$O#D4m]&5}:3_?#ctbz~3MT7t^Tten&tDC5k*M[[-9Mcnru uI%PY:t');
define('LOGGED_IN_SALT',   '?iyIFM^RZ60)={-lDa0wZ{b)5~+)af;j[j(E`4?3)bDZV!#m7^enARVs*k[gf@L9');
define('NONCE_SALT',       'GHP~a%K!>5=,O|#|OK#[$cN$E]FU<,{FLYLwZH(91HKRn%5fTdz-LjvHNS_n/Q=X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
