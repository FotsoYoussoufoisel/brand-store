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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Wordpress' );

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
define( 'AUTH_KEY',         'di(T*u`rijfW2eHQ]*]ZKdf2)VWS?_oqOZpbbE}beW?.JPgh8l)izIo}Ou+}2~4F' );
define( 'SECURE_AUTH_KEY',  '%jbkUopl Vd.nEzA#DEFbZ1];2BI^oeV--S>>^kELMZTx^LCR h,KI?wK#xKsa|R' );
define( 'LOGGED_IN_KEY',    'Z<R(Smf}6eMu%v`u<T;#^+qxjS]EavD~cJ6jtgTU5XFghyt0epFh^&;;Km5z)*2)' );
define( 'NONCE_KEY',        'm^,tk=FB<^o=>6m_Q `0|C{&J+R~<|?^[*wek)KP-K[apzwBL.gZ>WMo M*TO9*c' );
define( 'AUTH_SALT',        '`=A!i>}@6CAGU-#[H5=vI`&KNi/6@zU]VF+. ]Gf!0MC!*;9LP~yu,tD!(Z`WK4M' );
define( 'SECURE_AUTH_SALT', 'OYDa+OZTlj0|To/]EU*g}{k0zk<TOWC&fB=XKQs,Fh|y!D+/c%N@JE>1Z4<6%?RS' );
define( 'LOGGED_IN_SALT',   'v&J4hrPh4YXS|_iUx2a68qVVX[RiTkIaOf3d$`x<V~,3[gf%|Iu73w)[Ad|A#lHx' );
define( 'NONCE_SALT',       ')8U/eeCISyo~27F1&LKdsjJMl&]mgk~^U 2no-GSf)+x-qQJ,V A|/&f1j> bTCS' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
