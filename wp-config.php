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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', getenv('DB_CHARSET'));

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', getenv('DB_COLLATE'));

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '0s!L`FMs_MNqE-Q]$__D,5[|F[NHi_:It58>i}>HQtdQ/<H=NOe[Vs8$p4|&qzkr');
define('SECURE_AUTH_KEY', 'vfui<* ;3-8~OM4tRTx)POsZIiVIT5W<EkgM%q8|jF:t=}0sD!xX].z&OzyFa3SW');
define('LOGGED_IN_KEY', 'E~k^R!DyBxz$=GHoD_<(J?9rF~:&zLrE>Pj1HJI(~L](sE>Gdbp=.@=,-MoU5hfY');
define('NONCE_KEY', 'kw]/f[QjZDb7{VP+}?z=Y-G^`z.USQil%>:py[VOA&:PG,]z<&NN>O-TLm[]:5ZQ');
define('AUTH_SALT', 'W(|?quZfK>:o/Kopu<)8FC![KN#DGqe?^E-`g(Vw6i]<9tZ+:1n}Pk6rK)+f!=qC');
define('SECURE_AUTH_SALT', '9MuHikpbgZ}1Iu yAq1!t^ch-/R%zvNXGb3^pEY`5u,W6lmD{fdXA.OMKigYzDU;');
define('LOGGED_IN_SALT', ':JdOiNjPd& 5A[^4.1.=6 Z~]7C0!n,HZ:Bi,uVM4hFHj3#a>J!|I#(z|CbdGy!)');
define('NONCE_SALT', 'l;G-3I1yeNyJ8w@K&f!X`<%UxiF$p}3FTL9G,aWXmbB%XqxQq8X=V6BZBJ=?rzC6');
define('WP_CACHE_KEY_SALT', 'pCRS]IXaHpP!Al]OTY3rTA|3/7v/g4|!8D2r<L{<RYU<E!Y`fR$CuJ*Dv6KY`ctX');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_TABLE_PREFIX') ? : 'wp_';


/* That's all, stop editing! Happy blogging. */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

// For using multiple domain
if ( isset( $_SERVER['HTTP_HOST'] ) ) {
	$http_protocol = isset($_SERVER['HTTPS']) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
	define('WP_HOME', $http_protocol.'://'.$_SERVER['HTTP_HOST']);
	define( 'WP_SITEURL', WP_HOME );
}

/** Absolute path to the WordPress directory. */
if ( ! defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH.'wp-settings.php';
