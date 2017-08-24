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
define('DB_NAME', 'desafiolatam');

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
define('AUTH_KEY',         'U6[Q2|i-9b4c9_S@LhY*c|JX|N* e8zNN=I?]/_w2 X=_)9ilZCaMYL[]p=mH`Uw');
define('SECURE_AUTH_KEY',  '}6}0v90%oP0+{bcMz1I8kaKdtT|CG4::rl5hLBOxg,S]Ao[ij$|T-<pB,iUgN_v;');
define('LOGGED_IN_KEY',    'ENE]83D}4w<X6#E$Y<EKn>Q~[,HTU$jrDsjrrtO+4~^vX6Ap_j!1#[}(8n?5VaLL');
define('NONCE_KEY',        '{Q`PkG&Ml f=J%IM2{Q=8B?|1w4A3;;<>YA(`LsTLx_Mx/gPK]?n+m|B^/6f-;N[');
define('AUTH_SALT',        '~]0bQ^[20<TWEB]]eE+{K9z/?8M=|_0)F_Zsm]z*ddFi M8.69L?+=5u;i7%e++a');
define('SECURE_AUTH_SALT', 'Tk3z;a5Jh)2g/G Y;!WNrl/B7ld^_z/TG>N665W|XQK^@8CG5,Igu1>Y#24bh7]j');
define('LOGGED_IN_SALT',   '<a<d8b@r?&!#dRGyk#l T7q2/gAe~HO1]&$5f&V$xQDFHpF&I{-n3FWY[JJ:oplA');
define('NONCE_SALT',       '%j[4FpP>44~1Z}R[kMAtv,1CBN&c^1IOXxj1.,K`I>%nz:o4:%W3Cz!Lvzh&<mX#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
