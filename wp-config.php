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
define('DB_NAME', 'wp_test');

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
define('AUTH_KEY',         'oZ};*3y}R8D)CGd6Q?(+H$0,.vnN4_>br*.*k_RQR0,A_hci,vfx>bTok?p@M*B6');
define('SECURE_AUTH_KEY',  'xS<%2<1kXyFab?KHswC+8bgL1OpWpm?z9_*pxFqV{Fm<Ol:Qdt=/s#$f[X?;L;b9');
define('LOGGED_IN_KEY',    '!1K?,Y^dpsXmi%I9:p:oNwYXfEj_c6Ij?qJ*=8lMPrg$]u*ddtgkU$|/:3JDkd.:');
define('NONCE_KEY',        ';k+,chjghJ7M:.m3D^:Xq{?~PB-P.N~5sNpMth}H`5p3w]7wT/]kiRrO]}~<^j#b');
define('AUTH_SALT',        'm&_r5ZJ]|T*z6 p+>@PJ|5?:FhPsl{s=X2gO*Yz<a-:=;iRm={BEqJ50XwV*bz>b');
define('SECURE_AUTH_SALT', 'DKHAG[4=um37h)ngFLdJqFBE?QBfMJBqBo~`,6pK|_Kgw306SzLI}XD?qQq{?6mA');
define('LOGGED_IN_SALT',   '6y#0<&OruuP>osLDI$.ie%3ZS`l~p9/3yA><&5*nMwW{cP1eXICE~Tk7EadZ=D9p');
define('NONCE_SALT',       '(8rY@;+m?R#!(J{WvcfwdWSgu+>+_.6hF0VJOuVfxJ_I[{J<m1!4nl/sGs(NixMP');

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
