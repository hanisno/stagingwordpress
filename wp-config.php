<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
 
define('WP_HOME','http://stagingwp.hanisnoor.com');
define('WP_SITEURL','http://stagingwp.hanisnoor.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u167791951_stagingwp' );

/** MySQL database username */
define( 'DB_USER', 'u167791951_haniswp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'da039A023' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-b.-`T 19@KD$MPd[4_pC|3Gl[KK*S;awVg4)VZR=~MVp3)R,?u?J5d ,|EsNoVQ' );
define( 'SECURE_AUTH_KEY',  '&d&y}a9~n5t5qj1(NrZp%rnete(k]7$wY{aW4z;q:sH3+Z{0d0ne&aDXmdnXLwbt' );
define( 'LOGGED_IN_KEY',    '?-d#k^cR/z13k-M9ow/_bCQM3~PIlWWQj,h&=1%Yi-w.sH}!T;Wbz`:XB[-1`KL.' );
define( 'NONCE_KEY',        ',Gb#TtCiUtEEN@d+bvJ_K7@,/I6X(S(?NNs~o[DNmrT/OkeR359_!<Lg[P`71Se~' );
define( 'AUTH_SALT',        'z}~JJ/VIx;b)`Ydtq,U<yr 9/IH$(?%XWhe8z[XY|:o&5KMirPfm$z8G)w.Kp7&Z' );
define( 'SECURE_AUTH_SALT', 'C@`!lYN0w9Ml90Zb+}uoe:<xaz[]AFko3?6 6Ev+::xjZ#@.wpic;]^~`WM-Z_`~' );
define( 'LOGGED_IN_SALT',   '?$#zqhJKaHGV.~}xX@.VuUMr?vKq xWgcQpk,3uL4n_@LDW/q]?nn*/OG.`:7#xO' );
define( 'NONCE_SALT',       '7^?s=fy-<7l/O!g5:Bly><pAb.=A^hqG*uEi:!UIOZ.Ss{3}.F}r_dIZIq>-ZbUP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
