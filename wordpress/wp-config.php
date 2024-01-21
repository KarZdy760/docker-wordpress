<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0rSZplt.DzfB!(Tb5t)aywgiySYW ]xv^[FbyV0bJSV.*t)w,QZU@wy7A/{(w0nu' );
define( 'SECURE_AUTH_KEY',  'a/OW> x~/53C]Wsgtfm?s-Zd`sp~]m=K8.?X$e<fI=V=9k|8$)s&>Ea}J|3AuRHQ' );
define( 'LOGGED_IN_KEY',    ')a6~?5!wWgF$?G<Vg+6] ~HAktsf;ju2_G{v/BI>G{^!<ftI`oZ}7MY6ZO7jn4vx' );
define( 'NONCE_KEY',        'QzOLpCPzf.0j5jk?0nCK-4VvmLq/c{-uDm+X^)C-zRkelaFtLrGq_(5D7`nh-<B{' );
define( 'AUTH_SALT',        '18(.CYO*ykS Y=s{2;g4_<]e(@d2>>4`r BMH0T:~@bKDNmnP;]B061zCU5*s#|s' );
define( 'SECURE_AUTH_SALT', '}zqkqu|ae@ eFR/$Etf=Q.sQ(C&-u98%_c=t#I7gRE [V?r4Oj9:<=W>VIG0:Kc}' );
define( 'LOGGED_IN_SALT',   '#f#!qEmzdb<a5w[L}/)T~3UQ#<2*! Ym @](SYq1s~K9RP%5YQ;vpL`S^[$|L</w' );
define( 'NONCE_SALT',       'Vk%w[h9K3,]59v<l-&OZUR>*6Fvavpq4T-2^T<U^U fEmSmc$Q2SCLR^5fQprrff' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
