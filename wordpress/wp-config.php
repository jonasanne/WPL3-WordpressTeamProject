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
define('DB_NAME', 'wp_rockwest');

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
define('AUTH_KEY',         'ToS?+G-c7WL0DF+$2~U/z?WD!e(=,m^tU:uow+q6 WDtD2*@3dW00|ECSN XR3C=');
define('SECURE_AUTH_KEY',  't%d<-Bk$C5:@zIR2U2@Vc!Gp,p9OTf]Zteu/p<He7-nu-m)|NFqDItz=M][LdIi/');
define('LOGGED_IN_KEY',    'dkuf~]&?]K]|rg mwDiVvUqPN?t U1.Lzvj}@g^;5FqbU]>F(0!_0#e98CHlxra>');
define('NONCE_KEY',        'NQ&R=X0|oME`g2Ed9>Ts{BD|>vZ0#x*Lo-`;v^R`~UW-]M~vBAI|!SY>*d-,dfdX');
define('AUTH_SALT',        'vH9cPr_jQ[esZf=-8#F =EFM!A_W,ds-~)8:$x]PFSCMbwf(TU%%9p.+xLP,d^At');
define('SECURE_AUTH_SALT', 'KWE+JZU|?K%~IKGMg|fuJK1+L[:f_f-k*}R=yZu}1l?8<RnzVo-DoZ0+3TC:IU+b');
define('LOGGED_IN_SALT',   'sC_.cUgjW+3J]J}/39+Mtglh{gX!wUtg3Z)$!MwwL?<Oe#pW9khhp|T!*jXC/U{y');
define('NONCE_SALT',       '8g-P8C|~[,NQ;<2qF3_#4WL^R^RHB`#ULHKJIIsDNiOt!gjnmD>sBg^g^}hj}DV0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpjjm_';

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
