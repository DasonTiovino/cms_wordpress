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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'to_module_cms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#&~S7L[3]6QlPJ?Bp&>[;N)v+^_l&,6n$!Hm)/R!RmQ97NpSO44I0y%//MN:D3cv' );
define( 'SECURE_AUTH_KEY',  'X4d>3FYR&=$m9Stt]vyiL2nS<cvKy@LqtyccShiIFwjv5!axhn8shw{Z~u4Z8^.N' );
define( 'LOGGED_IN_KEY',    '=f:v)t8]9u6e MD8hA~%/JxB~=|67,jeIEpPYXT.r;qZQ71O7d?+Zx~WeE3w3`h ' );
define( 'NONCE_KEY',        '!INdW$s}Np;<(>y;7-N,(r^[k/EHW#U;W3N! 8ra7@cSp7:@oKcYaz$rZb;^4ODo' );
define( 'AUTH_SALT',        '}VjuWg~d9G,&k-YLJr&M 1w,HO>T4]2d+S6<yq92Mk(FS;d!|YeNLTaK?D!9d,e}' );
define( 'SECURE_AUTH_SALT', 'y1ZH3L`MA@$}Qf+P)L;.(mt?U/D:2*pEv-)O+LgYF9@ >TY|<5_+f3JnYGV+v]C5' );
define( 'LOGGED_IN_SALT',   'V|C!!NVPGx{OJ_/N_1DHf@H![qF*g./^slmu@&*!=h9ehLD9zV2>Xs7ubaK2c2MH' );
define( 'NONCE_SALT',       'Im9$QaCe#-pqZRTK_snfj!$_R$-jXc:v~zSj)KN&0Z}>iZn{b`A3fxUF[6-WH+4c' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
