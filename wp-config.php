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
define('DB_NAME', 'cursowordpress');

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
define('AUTH_KEY',         '&NB.IQx;&h+_.eZ^24^==A.L6Ct&r^G0]R?~RW4x;[aBCC871f%U{C|Z?!A>3//*');
define('SECURE_AUTH_KEY',  'C-K]1*loN]b+^q0DBKX.hV^!}Z*BN025 b7My~NysH]wPU$;AroV>eZutmZ+X3Rb');
define('LOGGED_IN_KEY',    'p]V}b[ntl-^#RzdZ,={B@a4c6N{b&0m)EC8,xE9=TXTRl+aOFmm@qRpUa3TjxNyd');
define('NONCE_KEY',        'yFwU_ |N[K79p#K%7t=jqe!eO Dig&s>u0Nx#{7D)&U__L/J-rH7p&,JGiCZ}W1,');
define('AUTH_SALT',        'd]]FW{^N_ |qJ>d:Al+21Bp[c0D`[kqv^alsLihmIi H?urw`2nmkq+^td+TT_;~');
define('SECURE_AUTH_SALT', 'E>UhH`;uqFMKoq-=DNgroEdU:lAYM~QHu**RL4T;l|,$_vc_r;F47](<iLv.3_~F');
define('LOGGED_IN_SALT',   '<]EMc;h:}baryMC))HSq89S{r[:N_eizqFKYZY-6iqJpz0.lnEYkb;Y!<4Ay3^ed');
define('NONCE_SALT',       'HCG&Aecv04e2feTPl>$TBXizmW;1qg:)/`Ny^wvFbw$/w]:b;w_g;<vy})&~9Nqt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp777_';

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
