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
define('DB_NAME', 'rockwest');

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
define('AUTH_KEY',         '.JGcK%/%_NBf=8ryU$pe/[PR&!m90)~&y*FKOmjFub}PQhvS&l%D/T<R_qz- L9b');
define('SECURE_AUTH_KEY',  '}o$t]6N_7P/tHz9mr3A] H5[k hS`|m/rp|~yQ5pSycx_D#C21&Np]ali8:$`MQb');
define('LOGGED_IN_KEY',    ',fba@YV%%<xeT,:I}v.hE%s_}qpb#>wY!Aa_6Youq;D)?8Pp^A,Ch+]n8@qX5]x#');
define('NONCE_KEY',        'OsmtYE:xI.S&<wGBv->MBr2rnoA%&k7;>]A;N]wE`v[Iin3<e%2[(?M;;*$R}*U/');
define('AUTH_SALT',        'hy8S@[{KGM=GRa1Udg+Nd1cq[Z!e{bZ9cIMA!QNn<P-|bpjUc7O+ef%&>f[:g<6G');
define('SECURE_AUTH_SALT', 'n3,$:&Lf{vSfbz}7/pU%ZSHqFkLpf|:a9O9KisYz|SG*He%^z%ud)dTLl~{cbm&}');
define('LOGGED_IN_SALT',   'UE260iyCp`U?Lc?Vl+9{y%}p4riNruogi@I8Y>X{.#6nqi5kU!6$N;5MH|7ahcB`');
define('NONCE_SALT',       'L_*MUO7nnB#rG]/`a]g_`Djm)6w]=!c]WBXK-#-1%e8{6cp*,ZdcZ2mMkwrYJTj9');

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
