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
define( 'DB_NAME', 'Synergy1' );

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
define( 'AUTH_KEY',         'vPN:C}8agJ4U:;+6`#ago[^A@b^dtNW&<$;pd%!Sa@#trx c9sk:eOO 0X$uPMWk' );
define( 'SECURE_AUTH_KEY',  'EMc^CCRc8yp@1>qh8i?/APQi_*BJLuvH?-A_/ wv.?(yB!?WX4=;0fKIJRoXN*S ' );
define( 'LOGGED_IN_KEY',    'k@Y0IgNRX[[Mn:s]Z5kg+79PcA71#cQvvlHruy<[Q4u4!L^c>@30p2rtpSo/HE#@' );
define( 'NONCE_KEY',        'T$Zl#|w%#7Z83^~NErNaKO3-<|!4=j+7V09Y]3]`HSovScdB0}jjQ5<@[%@yBy0.' );
define( 'AUTH_SALT',        'ltwpjZF].jy0Sn_}#-{nvh%>wooLM|a6j.%*dQQ_QpB{)CRg2{&|K1D1mT9D9}Q}' );
define( 'SECURE_AUTH_SALT', '6tGq|-+#X.kYZKtcz SpmE6^<Rt(m4<$62P[C}&dE>r`p,iJm0$f,Nj:]J-;EYa(' );
define( 'LOGGED_IN_SALT',   'LZB]S;?R1,3IXq,>>>B!Me+LW~;;nh)ktFy=(hVlAh^`%mr`81`q<Q:oIDPmXJhE' );
define( 'NONCE_SALT',       '8<%kQws([@$G0ydVRhHO5(jEX6Kh%hJj}Iwo_iW]A.nVGF*POsCvR>-~_$TRq!XF' );

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
