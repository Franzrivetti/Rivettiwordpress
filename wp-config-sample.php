<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'sitopersonale' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ',tby%g)E(xzPp p>$ft:c`SmW$Z*zC,,WHh>B9,L[8`37&{n@^mP^3nyCV@K5>jW' );
define( 'SECURE_AUTH_KEY',  '$p]}RDprml66L?x$L~peJO5j4=w-n0?gv[VM73LS^mYq#-zkB1u0;?~Eqh]wR^r^' );
define( 'LOGGED_IN_KEY',    ')sJF#GCog0d5gI:rS>qx9jL/ITu{S`htxkC|ZRjLa-D4=hjc4UIiXe1pS$Qf7qB6' );
define( 'NONCE_KEY',        '7ekL7p47hykL%JSbi$6p<w>[`&xa#r|UIP9bupbM,J?x#LHQDW7;-QL)CZCU/m#q' );
define( 'AUTH_SALT',        '):lh?b`ykM7~D>]r)B/onuCa+KNara7QGR|z*jyw8#$mD1ahC&Q[?Qb<XG|aA&7;' );
define( 'SECURE_AUTH_SALT', '# ?$(IaM( G>Gn22F)]S`[q3v|h?N_goEpV{^%5`1k1BzlAAc)a=>CzE:@2H8tu>' );
define( 'LOGGED_IN_SALT',   'HV6zpA!QoqZl$&bJ `~0(ghGUOY3-Ch%j_)4(UI>U*XPgoW@_K/]Ca/ig]lx`qLt' );
define( 'NONCE_SALT',       'RV&zL%beP_PA)i?O-r Qlc2qeP#8{l6LR6A_hbs?&A+Njt0<Su.M@HbrS94zeMn7' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
