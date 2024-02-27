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
define( 'DB_NAME', 'cristoreyhuetortajar' );

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
define( 'AUTH_KEY',         '(JFeLX],d?OYEI1r5h|=Kb$@leBMK[zckm$/^.7|;Vt%8cQ]z^khR6T?IH8b?A[Q' );
define( 'SECURE_AUTH_KEY',  'B7u8QyCgl#yny~ptwZ*R>wp:[sw}`;kjCC70kO&)Y*%O4o)f^(mH%w4Xn&m60J+d' );
define( 'LOGGED_IN_KEY',    '_R|Wqxy>/hGr*Z6f4xf$1= #h+2WE.u4re|mr7*:*k~/K?dhXV)jOx}Z%ic|Zi>j' );
define( 'NONCE_KEY',        'OFz|#x cd.Oa6xa7T3ese/Ij4wM4%PY/R>_b&7meFmH^%uI#85#X@d>=N}+@92;g' );
define( 'AUTH_SALT',        'u=:^*[]gkoG=tDz7<6/)vR.s6.D0]fsRS@E6A)ue+I8vVcIMO#Hf{it}1sja@JX,' );
define( 'SECURE_AUTH_SALT', ']0_XFwY2|$)G~2zz2||4|MM-[J{*Pffl+9Gt/*LN7-U`_:U9M#IkogK7iX#D}h_C' );
define( 'LOGGED_IN_SALT',   ';@|`ejmj3}N]eZbV!/F*>nIU!r9A2-mUsHc}&IS5]RVlI0bJ2L<*l$DX+ ,0FVxr' );
define( 'NONCE_SALT',       'e;{cXWjn.Sl_d5n=:|rJ#ln$T!Pub0lF[#5uUAEk:Rp5+adnTVdkUJPGw[1UmlwT' );

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
