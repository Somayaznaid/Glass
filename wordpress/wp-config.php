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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '.Xlb1j]q`*4a3Lj~={H _Rkr:tV,#KN)]@R#:@w^rt+z4b]vfnjx,`~nbcuGT{}n' );
define( 'SECURE_AUTH_KEY',  '!R?^XYapu.Mlg|jr1?,MR5&!Rc?/xn|;8P~m7 {{$-{Aw<&o.X46f?)V1*IP~l |' );
define( 'LOGGED_IN_KEY',    'dKP~Sk z(#Cc5)+q4/k5qPrU6;5/G`gH(VONGT;WK%Af(po<]d2G8mySEtY_I>2R' );
define( 'NONCE_KEY',        ':|spTDd1u6ai~lgjY&V]2xJVc7w9Mz7Vso(w*59oi[XlQ[Bim[tOyZD#Q::Z#RK_' );
define( 'AUTH_SALT',        'f9vMmlNP S^s9D5hMZgT~kqNi)Ste8`^]>;qYu>L^/vhe;,KL^fx(^N=IkTU?JIh' );
define( 'SECURE_AUTH_SALT', ',QNkFmH3mSL =fmjv.w26({p@S8wxP6(h$zW&(S&F37IGh!~oL>!b*>m:[Q-G4S+' );
define( 'LOGGED_IN_SALT',   '3N3=E`MOhhA; WFvyJ0q~;<hOL#r+*RNs`kUNr`S8B.GJ~P}4CV}$BrP_<%Yt~(t' );
define( 'NONCE_SALT',       ' F+9^OZ2#7;Bsc[(W?4ExlP*ngv)*/,xp_9@%rMTk{l7j]aLZFF[h$PxBs]BR8AY' );

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
