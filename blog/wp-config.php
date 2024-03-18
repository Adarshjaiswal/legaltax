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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u736935735_M3zvl' );

/** Database username */
define( 'DB_USER', 'u736935735_YyS2p' );

/** Database password */
define( 'DB_PASSWORD', 'XgUPgQHNwc' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'rO1V<lc7QbNjiK;0=*IzcX Cy@=7P8_hI7:NG<zjNEupzyf{~3XL8xKbUCheC:VM' );
define( 'SECURE_AUTH_KEY',   'A-[fq4F<A`Z>QPToKq h79^~j}23qXHDD^Y)q+2jN~3:{`Elf`yU!r1t/eeVyog2' );
define( 'LOGGED_IN_KEY',     ';#Z0o;Vv0y/{2Cg8p2[HIcBJ,L+$,1=;r+$G{[&`ljNBn8Qnt&sj$i>K_fyw]uhv' );
define( 'NONCE_KEY',         'I?=nJ_*Pt/bij3?XT_/D`]:Hmmz(Unk-GCx%E/:=v}_=Gq*dpU~hdv?xk:=bPYx&' );
define( 'AUTH_SALT',         '^pt*dXm^2@Ze@wezo)d KrF8j8*C;|}mV!3rN Y0}Pp5{w3;kO[B)RL^.MM_bUM|' );
define( 'SECURE_AUTH_SALT',  'NDCa?+3IN0qW5W&wfGaI0pb80%#`0^oGo2TK-%`1H3bVe[O.6,R]zJ]QF0iA4PhI' );
define( 'LOGGED_IN_SALT',    ')hu$Qp_7(?&3H!X|%E$K1bV(wuc&)lG9Uy]G9QCDw<eW$XcF3ZfbvMo?}QsoYE6z' );
define( 'NONCE_SALT',        'J.@T)dt6P5e~wuHul:_tVFlXo:@4,wBpX@>-1zIt>u*+m<*{AM6$>{VqDmC([h!w' );
define( 'WP_CACHE_KEY_SALT', 'Zz]>@QEr5__!Xao?#o`RX}jY]qoR=V!G7)P:giW9BtRLO|I3 p`</U|gNE}@ c,L' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
