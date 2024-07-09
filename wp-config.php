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
define( 'DB_NAME', 'firstwebsite' );

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
define( 'AUTH_KEY',         'eLbi-gB[Rkhe0@]C&oa4OG@;jSUL}(7W?!6&j.aenb4jzI;bP/c`%f3]q;(hWN,j' );
define( 'SECURE_AUTH_KEY',  'sbW-Hk:J[M;VbBv0:%X8/wY1bKPLPWW>Lj(,.S3;ig`mz}hrQ_0BJ~v-%f*eF!Lc' );
define( 'LOGGED_IN_KEY',    '<Be!MPZY;JTz^NUZ+z7SNTfVD_s4;y7uMlkLich., -Fl^f63$$sq3]@{[irhM58' );
define( 'NONCE_KEY',        'bK$:0wS7oEjQ*)]mU7N#c2K(S{u>ORU~TL N OiXo!d BoAPU]Ogoy?X=J<Y8a~G' );
define( 'AUTH_SALT',        'Al;o$R<TKpCh0dYRvYlj&Uj0&#4Nbjz@|XkJUHq,gj^g>:h@Sr6.;>VnGndzvk1G' );
define( 'SECURE_AUTH_SALT', 'HGwXLbisdWWes]GQ=p+_ud)WdiqO9J#T&gcJ)*Ouv c 1xA{wO_+P10JU6e?awjD' );
define( 'LOGGED_IN_SALT',   '8Y<9bUJr8UHm_u5_$T@~pVNzJ!P5.z%hb+Az*jq9!r$@{i|ast.Dka9 9=-3dW~!' );
define( 'NONCE_SALT',       '9u{WVoe<gU(|59oMFA!Dh1p:|s#5^atljw8fHTJjMO$DkVmg`~_/=N)cfZO~G^^e' );

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
