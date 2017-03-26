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
define('AUTH_KEY',         'E(TwcR=czKlIB&=mV(Cd+a5aClG{oAnYV^%QR$6-iDzJqvizxX$fIdp|Tig0f{p|');
define('SECURE_AUTH_KEY',  ', &}bS)3l+:qpYrKuHy=u+rnLfVM6?<H=UduPDEp+VFxB{.)b]HzIYdVYG>r<zmm');
define('LOGGED_IN_KEY',    'VfudJ@^v1+?%7dr,<_cK99$c{LSliT?oz {.Znku&^?SliD9{flpFf{Xg)fK:&N4');
define('NONCE_KEY',        'Pr`i`y3%Q,qeM0V%bTyHB`Cv,&D,ee2^G{kOmiVt/<)6RbD5S@GT.6QF,IgcrC,Q');
define('AUTH_SALT',        '@INQ/md/VM&l=x<`;RE!)2a?S*d`Cr1(Ga3Jyyv<A*u9?Ixm:.CwX$3^>ihts4>b');
define('SECURE_AUTH_SALT', '9b!A*K6B40<_s-S=}f$ujiUU:??5I9xE2Lv{kx#b?q>I(?=flCCn@)Efqnd&JR}X');
define('LOGGED_IN_SALT',   'g|u@mOXsoj7DSG,wf,N )r_n<Et=l;99/*DE@/bp8!cX&/JC&MPv79v>@bZJ3vVR');
define('NONCE_SALT',       '6N/*XA5AQKnw5Sov?6=+dwBJo-Qu^(vDq`Cw~HQ.tGPGJ8^8epGoiKK{~nt9(b4y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sda_';

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
 
