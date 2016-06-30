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
define('DB_NAME', 'villagearts2016');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sh3rl0ck215');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '(m@g*Svm#&u8c;!+.{6ua-Z}f=,*RRiVmB9bcJCI5Ysf%jhZLGm|+-8U{74/C)Ik');
define('SECURE_AUTH_KEY',  '),1:!]ZF;W|4?; t7G?%Dd,HT5&82^&Y?c`qzKnR#!8!uLiB=n$)Ng%ou#g+{dq1');
define('LOGGED_IN_KEY',    'irW4!.k*4OStO}zjp-0>bb_|`BR-jVU%~M5hKgB|0S*h$!$kA-|oXellbNs:|:ob');
define('NONCE_KEY',        'S=r_t524Ews0AL8 ea#$xf[ns`ISzF5`!gG P2d7vWP3;7,_p1/c`@5i`dkXXrAZ');
define('AUTH_SALT',        'TA872rr:wVNm]XH3tKyIt$%RY`c$*knt(>jnN,gj8spU()ljjP!2!OR$Q>JYs^R{');
define('SECURE_AUTH_SALT', '[(]h:)A3_GAcn<)(hLw$)EyJfQX8,.LWp&1%blH7lB^DM>4tgrIt},X}1Obs(</?');
define('LOGGED_IN_SALT',   ' QYqRkmP/:gBz>jeNHl6M]vcx}<J<HZB@3J76~3T2OQ8hRjR:k.^6fd8Q9nCyKHz');
define('NONCE_SALT',       ')9PY?],{!d4L7Z09/.`mhj$=wf{j/pl n;Dz6W=nn5Kw^j.*k$#88hy.7R;6jGRK');

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
