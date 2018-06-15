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
define('DB_NAME', 'demariawoods');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '!@#B0nky23');

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
define('AUTH_KEY',         'G#@5vubaHU{%}Zvl%^# :Q_5)rUNz|u>,rm!{Rxr+-/B,keYu@x+%hX*mm`1WG_3');
define('SECURE_AUTH_KEY',  'V8DMP|`t:+P!]F*Q&$l7qoXtVh%e5d:f}G4-tF}hfjISf40/xVipgfkjdN&0qz{[');
define('LOGGED_IN_KEY',    '];[xf Lu;&t+_n^z7us$~kO,u^4 H3zFB%=A@9*7&`atVNqEcPL/ENQG@j?>UGgx');
define('NONCE_KEY',        '}B 7|(P-aI{o+h.V#6=I|U4[o[])F4 6eJcRn<CT%|]!y)?}oPTZ ?J9JTbdzRe^');
define('AUTH_SALT',        'Myj}c,w<F8q5GXsIe:1A*fxJxJQ++SYsrcX1P[|S>(!:SjAT[!QBgs|xGKr,%qw5');
define('SECURE_AUTH_SALT', '7?&rc-:oBV^&ruB[C2mR6t7<H+xZw 5M+?Bj`,{*f|X:US%L9mp6xMkW*yoOFr<l');
define('LOGGED_IN_SALT',   'Z_a-X`]{^8lK.?V:hgAFm&ZsG9K>O2jos~u$sv_$wlD2rAlXgsn3EvCG6s;3c4xD');
define('NONCE_SALT',       'cuTFdLc<#M6t~N-ZLau%c|[||gw;CNsqmC)}wi=PRu;kr@h`t458a#T`HyKc6lt{');

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
