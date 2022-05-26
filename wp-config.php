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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-brief8' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'O+[6{6WOeEE6fGkV2M35TMokm;CQYrK*MM2npQUXV><3YTgDR)Gqa;m:lIZq.#x>' );
define( 'SECURE_AUTH_KEY',  'iD*|{xbcz4f:SXpnX.XQ#&F&`YsNn`BiUrqZKh7bhdj<O=avSJ@a%{`19irqNqEz' );
define( 'LOGGED_IN_KEY',    'D&`)@=G;u*1{ryb.?~]cT4}hfWt>C>}>tD@Elrt[atJ:&GF$7oP^nD*iO.e.VcB}' );
define( 'NONCE_KEY',        'x^me+yv< 4rd++XjFa D;LFsKL3N6NU$`;:dh5vpfor0jn_NQKaNz%BV9#&cE$[H' );
define( 'AUTH_SALT',        'm=da)[tHqinGyGwBIc)+wj$#}l?9{@K?Q[.gY_-4OUCtC=}SUn1rir%B0 5g!Ioi' );
define( 'SECURE_AUTH_SALT', 'Dtygc i@)<?(/P=KC-v5FXa),+q{KjB>;(J[,=WwG>4thaS5`yCgW$C[dwnBtgQx' );
define( 'LOGGED_IN_SALT',   '&jhcW.~SS2{_aC0KII%Gnhw4]=HvFRPO*P_c3wG;#kt@x+8ml9slFOrH0U;Bs~IQ' );
define( 'NONCE_SALT',       '=G1]ct$?V7O?Q~vY>?$r3s*VkzWoEhtIOA;3*KiX<YP-6(3{q9@0ez.>:/![+K,n' );

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
