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
define( 'DB_NAME', 'stagingwp' );

/** MySQL database username */
define( 'DB_USER', 'haniswp' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '0=e:k<y%(KyP!uG!fK;4*$t.8#|p#|/`8xTGkd o}sd6A+rCl7:cb+2jT5ZE+^7V' );
define( 'SECURE_AUTH_KEY',  'a*lc_8;qjca3*o/Il |Z7SB/L-7%4PJ&z#4SL9o8Rm{A..=E(6b^a+m_;s{99uY}' );
define( 'LOGGED_IN_KEY',    'e1E1IL)T7;/LHu`SWDA.ry3/V<bj6sBh9YpO=1f*[{gkYfR;vuTkwCoCO(bSMlW>' );
define( 'NONCE_KEY',        ';4d4b43q20QyL :X]}nSjQt*^1%DbdmehYy.Fx?fv5X$!eQ(LRRo+AsN|P6$fSUp' );
define( 'AUTH_SALT',        'SEm>TaV[uLiLJ0WFRKuR!kiZ>^]=lag=Ll%v8m8uY6%rx._m/g6S]xuuEFnwSk0L' );
define( 'SECURE_AUTH_SALT', '?#}T3h8o0yU+rp~|`Hn{}W[o.,6m{50I=?<nq0ALK0^Q,Qg5Y`Ea1B#25EzHwa.R' );
define( 'LOGGED_IN_SALT',   ':DOUm)JH+=sWiJ~K8|QBJ=IZ]iTKXz#j#N)Q2mKG;%FFeZVwxCFUCLG_:}g)>$r,' );
define( 'NONCE_SALT',       's=spIV}8`PN~2aK5D|9V[7uUM/pl]x&EZyn&fy^_CR0U-F>pGf|9Heh@|;F8tZA1' );

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
