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
define( 'DB_NAME', 'DEERWALK' );

/** Database username */
define( 'DB_USER', 'devops' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'uB(Sl&~!]cy&$<]-(2R! BmgZa;~TCbe^^*LUV@1R5a0{_{.e%1f?ZebU<.!cEd(' );
define( 'SECURE_AUTH_KEY',  ',;!uCp)2/Yp7g<??M0aq,}W;cizW)Ew91$; Zjb?khOXX|.kFg>p&zIrG<=BwsH~' );
define( 'LOGGED_IN_KEY',    'U)8y|b@]x&/h}1>lEz&>p;Lq_Nyz8xRa>xE[F%){tNb)j;j$py3]-^:xdBuxM/3x' );
define( 'NONCE_KEY',        'Si)Z4~s+xehiJ98PSds(7twR$<?dnqlF;;yeXXJCQZjrU0fF~I)83 fu=rbi:4n4' );
define( 'AUTH_SALT',        'pe+nG4Dpm!(nkS7B/H((ad!%1=K(d*]%;dEIwjTfAvM?<<Bm#nPq3jrv9Aw;k?jp' );
define( 'SECURE_AUTH_SALT', 'F{`5EZcWVGK(KWaG`aMaZLP3ulblE`+L7mDC`~G3%V{(0ROu]%Gq:mgzR<FmBk.y' );
define( 'LOGGED_IN_SALT',   'O|G({v01IBx-f?GnrCeYLl[>Wmky?j:$%_6z kf5 _E<d+#]Pa=#-bpPSi;*/.45' );
define( 'NONCE_SALT',       '>a*vCHEWL9SKInQ7Yue_<s$hbHN^3lW+uS![O.+,F][~q5/WkSZbMRPoosuanq?/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

