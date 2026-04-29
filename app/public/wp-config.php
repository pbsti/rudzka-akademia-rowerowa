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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          ']}ngV0^aMKdno@UT>$,;UqeI/OQ++Nqd)~z4`@m&KfLkZ-v=~gRfn5vI8mL8nA!4' );
define( 'SECURE_AUTH_KEY',   '#M]DQH>^;UWQSvCeN2K!.-R14 bM)[d-0l_5L2[o}AQa>d|nc(f&br|.(.F1rKX%' );
define( 'LOGGED_IN_KEY',     '#`}/NF,%;75T;q<<+3}<0TY5[ngaacP[:vxnT3yKbi?WzB`l|/&8A,Y!Vr?8/&/_' );
define( 'NONCE_KEY',         'J_X1HWBWj-O=!B{Ddo6KCuV$$fQ*8X/B9Uz5I#c$~w$DOrr2Um&r]MP!M_,ZHn`a' );
define( 'AUTH_SALT',         'T5F3VkvAGl)LgWxuGPjX9t3J&Rh||M=|@A.j5E%:`u TW(n5^E[e>gtpk(xJ-o_7' );
define( 'SECURE_AUTH_SALT',  '*t#m8VabYxzpBo6L2t^087vv8p^%-Kq2pVfCD!1(y%)N<]@Jon}9Rd#[FnN-j#jO' );
define( 'LOGGED_IN_SALT',    'Cv9[I.O*3@/YB>8E/TRAJtE<}D2P4H*[ 87Zup!Y@:R0<%`V:NL-}&&72)FU=%LV' );
define( 'NONCE_SALT',        'Qzj$UQ^]:QHf`gPBq=Vdox1I6m7_]}nnv?O_(3 f$JE+T$WW}cjlup+#^T`On&bY' );
define( 'WP_CACHE_KEY_SALT', '~p,m8y6;hHACewP#*?Y-BO!5Qm.?:f/prMfGeO3`}TCxd^d>J;0Khub-GHEHHzN1' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
