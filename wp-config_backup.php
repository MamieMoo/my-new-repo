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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'd_?=`$M2IB~J+h|nT5vk5Obt<q#Jgh }J_=E#k9/6ATt1[zl-^Yi_ho1z_c3kf:z');
define('SECURE_AUTH_KEY',  '@D}NPY^&-@76V+{q@=]]_uqZ->RNk4Q#@5lDm[TdFb0X!}8sDB>+Vj-G)o!Fi],E');
define('LOGGED_IN_KEY',    '*s[$Fl07;FWTN$`GHMg]51)0+4mvKokxBr=V;!X93=#RR`Zl@&TXW+;tp s9I+].');
define('NONCE_KEY',        'wHHkCQu~3 ,;1+F;$FWsp1uLbvpvNd6G|EioOess[MsR:a#b{JD)kFa0YrOfi}7B');
define('AUTH_SALT',        '<-!;?E$KL#)y^A/E4mqX]:P[%Dux<FMB4ez;md{Y$c-.7EZvNl9,BBl^?h/R.aM=');
define('SECURE_AUTH_SALT', '?Mu,IF]$5BgCHVG!!OXw<hppi1/SeFjh<k/KD4_sx+n_u!KZ>W.uA;<C3$U/K=VI');
define('LOGGED_IN_SALT',   'v8amS0nF%N(T7h!izIGV&!1Jkzhrab3Hd}p~bjJ[c2&eDt3PN!g>o.}A8KI4#_py');
define('NONCE_SALT',       'PTB3;-5?CC{C?,#Wy/qt^f<vEN1%lNd<pQd .lw;0n8:xsjp!Wm<{-aa+9$c*qg>');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
