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
define('DB_NAME', 'innovation');

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
define('AUTH_KEY',         '.x;Nd$U<S+o<6`O>l2~K&`H9qiQId^;VYV,!:idL@?+}+hcu(lik*.H&KKRbzCs}');
define('SECURE_AUTH_KEY',  '$*zQCQA9CIlMR?Cag%EF>`=<?#4rml+n8cJhXsvo4TIs0_<>U`M{B`ly9.iFyXhw');
define('LOGGED_IN_KEY',    'hpZaGqFkI IUeyr%Re-vfu!JB/DECcW4Xh =<xm8N1<DNZtdr;Kpo]H}fy/fHX_$');
define('NONCE_KEY',        '!W,,f%A[;:eWO+|9IKBW5./5RrF(jhyu5LpMV<<WrR?VRrv$W2?0/b?}PCoUybzp');
define('AUTH_SALT',        '!uV;`Nb]Rbu##ZyUMU=`VX1jEP4<)6pi9d^L`OE+CXw]hf-eQOy9goP>x{dcF3/)');
define('SECURE_AUTH_SALT', 'w[k ;cX=U6#TE@~#G_[KJETE@*pU?)5>wzi>GD&1uM~<7MKB} `xQ>geA 8H3 _E');
define('LOGGED_IN_SALT',   '8QJ1t|SAx9H)@T zPny}IH=8#!<+o L/glB`*dmYh5(s@P|? K22c.M~otn~kK(d');
define('NONCE_SALT',       'h(n5]Eq+YC~q{O(0-i%b7 KA-8&w#Xb#R <GZNoyG/tWxXj.d/+PG.[z7q1.0 )d');

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
