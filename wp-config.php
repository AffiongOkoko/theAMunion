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
define( 'DB_NAME', 'theamunion' );

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
define( 'AUTH_KEY',         'O4miR3}hmv22L[n0/U-xDlKT.*^$5e}fja ?Vr{4tP`_-Okhc.eT>Q9!6$@3c6i|' );
define( 'SECURE_AUTH_KEY',  ' MW7Tdcjc1I_e0E:%X66Y-lo!AN%+?Em[U9!I[BGMQ -x?JH/3!k-mvMn9*7 El ' );
define( 'LOGGED_IN_KEY',    'Mbr{5kI7!],2uRc4=^e0Za#e0<E>Bq+S.qv,1KPM?l,Db}biBI) ?JV4y3Wv9jc{' );
define( 'NONCE_KEY',        '[tYy(](F+=8~ov&7al(-0?M&.qOo-*V&`f2CPyeB}io#WB;-kFXjk.bVa)eT*X,6' );
define( 'AUTH_SALT',        'Ja}Rf,:n1~omBmv%]}>uoOw$$~&4vtoJ%-m<GX)P*{!G yYLYe5:[jL$PQ(EJ{~&' );
define( 'SECURE_AUTH_SALT', '$i={6bWTHG1?2E;Hz}s]^JaAC1Z_)#U^iE#B#cGyhR)4vY6Ew2}GT-}JO-79B}c|' );
define( 'LOGGED_IN_SALT',   'S9IffXWD7l@B5tR<sd6E]@RBA.gBKC<K7&6uT2q6}7GMsl4<*bNCRfq:V2OzhPcg' );
define( 'NONCE_SALT',       '&HV=,Vf0wI7]-8BR Xb;=Q/bDm{o<I?bQfB-JYM{i+|~ =W>1j~5XQUJE^QA0~6/' );

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
