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
define('DB_USER', 'bitcoachuser');

/** MySQL database password */
define('DB_PASSWORD', 'databitcoach');

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
define('AUTH_KEY',         'UMN{kK1d^s#,X5W>Ch<:&;`LfWZs.f/]%H+wm?/GcGk[v71fqf?fpfH*AI5P>5|S');
define('SECURE_AUTH_KEY',  'X0+R|5vv1 1TU=aEu]kPus=jiGcG,toT@}W[)d7)b8Eu*K]_st2RQ31Bb|rsrBqM');
define('LOGGED_IN_KEY',    'cFKipfp0;HXzkv/]c0SR{^{(4O|8]oXPNs6# tn|!|Z<%,XZvK+2**l|j9p6oPFz');
define('NONCE_KEY',        'O[+!oh.516-0DK|hSqL.IIGR~Tj?&miekZaY+_H%@`KmyN_fMTkrsF[<f9zN$QD|');
define('AUTH_SALT',        '@*sg(_S$m*dx/rxtx-T?^DLR8C.>JnPFB~v$5JVFka6kNl)ty*e@M{T p-_A;i6K');
define('SECURE_AUTH_SALT', '1IkJi$Ge;1>_Ex_<3Bj}?)-vM[m2/aGMYuxv<NJBJX_LYKg<y]Af|6INJoL5Whv ');
define('LOGGED_IN_SALT',   '~ux+0DBu!jmhnt RMbd_<`05stt5Owp(HN@{Or}Xe@/z;Af)3e; ?*03_.KGRbze');
define('NONCE_SALT',       'ocR-(6ON<5h8:u{Y?[PMS2;m^?yv$ebxFtGM~{FB1Q]hbZNR-{&J@D0Dh*K6;64u');
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
