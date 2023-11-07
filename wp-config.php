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
define( 'DB_NAME', 'velocitytech' );

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
define( 'AUTH_KEY',         '+PekTBuX_>(i>):u2h6f95yWk< jUdl/]GHhtYc!iF!t.|RzaB37dMc5McCN887L' );
define( 'SECURE_AUTH_KEY',  'T`<oWuaC%^{n>tOrWd:?6!*X`PT}aDpMf$6Fz(xtDV9H.tYi*_Ygm<%  -3s,=sq' );
define( 'LOGGED_IN_KEY',    '*S:G%},TbZ@]ce#2De7cr=x34>O:Gr=x*/<sVw15_Wp3v&{ash=PbRyygo@.o>)-' );
define( 'NONCE_KEY',        'gCad.Bhvxv!l+1dR`IV{{JR[MN`A)5?E`KHCWS+uy0hxdCPG3Z(%_;R;a.tP[_TC' );
define( 'AUTH_SALT',        'tVWVZ-HgB,oZNwCchwF`0vEdxtD|eJ!Og&[@70/BrpNB-8a})Mk%#bN*usSeAnC`' );
define( 'SECURE_AUTH_SALT', '7igr9|DNEl<|s*[`]^t2ua]l}#$gLhj@]W]-l7+|2=}G<P0;)?4SYsLL{xs8of]o' );
define( 'LOGGED_IN_SALT',   '<$k{v6KIlcqxksLp?,-sPMG4k(SA/QfO|RW.-_1&;M@Ja+sf)pM.sm`(`}[(e@h>' );
define( 'NONCE_SALT',       'v_XMaZ!ZC9w^v5`V[U i[%gKZwI)/&2Y.jn D~4q#d@+,)w3m$OAN+E.IhC*42za' );

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
