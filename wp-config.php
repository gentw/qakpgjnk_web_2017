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
define('DB_NAME', 'qakpdb');

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
define('AUTH_KEY',         '8FbMGb v;Eq^@_Q+l+@d*|N)q%*q,Lq]9{K^do )Y>1ez<EAexa!^:YgghxwtXTd');
define('SECURE_AUTH_KEY',  'V^9D:m>R>fF:#a:^SWkC 8-GTQx*6dk,zO!oFdJ,/W@G-0Su$UuEPuHG8|8Ct^EU');
define('LOGGED_IN_KEY',    'I%ou@v97trJ1/;tBVkEPDjPD]Bcf@Bm(sW)5PI0Z&I`1k{/6_YrfTK .l,RxSl>E');
define('NONCE_KEY',        'Nb-<P7f,i)*kU87L^KY{c(MorSfDYB= X+#_lqiRA<tfIU,tRm>C1`2B8<_xTydu');
define('AUTH_SALT',        'IA#b+V`mA8fIC?JJ0X!@!T!)Q@cq700{YTNcfO9(rp~!*YSpF:A,UHpJ2RnenHPM');
define('SECURE_AUTH_SALT', 'fZOz #P7+JIbkjFn01kj$m=xfo^J[DdoQ<DzrWVUeEMl-tw3/BP|LzWUV,5M_c(n');
define('LOGGED_IN_SALT',   'skEtrM{V-Mh*7;KEHZFF&j<({ER~({~isTX8R4xb@s_VaM4dBu&-v}ZXD5?q9hy,');
define('NONCE_SALT',       'G)b!a]9A43xgh P7Y?,Io~kFY2#fEqTLDJ]Pj5WjQMI=}aC7u/g6`VjfuSCV`+3^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bmb_';

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
