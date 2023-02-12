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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'synergy1' );

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
define( 'AUTH_KEY',         '1hZ&|[A-hK9iA>?<IcK}_mu0[~18(o;d_;Iod?]nJ;QqRD[>2],Zf9qVNjD J0 =' );
define( 'SECURE_AUTH_KEY',  'X4Yo<~{I@np.Y`2viUGn (Am=a+_{cDN^rwD],_0kR_wedG)UKl<9YesO1tU:T4_' );
define( 'LOGGED_IN_KEY',    'jN;p+O$?reULv}$#7={%i5+[Bp]t[gXy#1#;p5T*Y4|fo(Z#j&h#Vy|D@c1puXei' );
define( 'NONCE_KEY',        'l7o{wt&dXp3$k]g]D&5A4]Gu[{u}/R5P,qLG<;!i8F,3|DlZzL-v,i6Y#k^i/2(u' );
define( 'AUTH_SALT',        'tt$,U?x27.k2@VTk$Nd6uRSG;+UXi;?!{2qm:X4B:5!wQ: dw%*TF6N:cVZYHi{J' );
define( 'SECURE_AUTH_SALT', ' L%B_z@/pf`p81VP:pZFynUA0?xynx>S&DFoe`VX I{7iX(:3S{lq%G|Oo~<;S_ ' );
define( 'LOGGED_IN_SALT',   'mW&,~g+Gu*7<(7}S 8(2Isr>*Q`_E.gJ>lE@^la=pM}.H&c%s{eq!FTj46U*xo/8' );
define( 'NONCE_SALT',       'W&*B< j<r;2KH6h0-jCiBZ[M.`e?W],xledrO(d4U:Aw0cH_ekwXO9e?c9~@so(e' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
