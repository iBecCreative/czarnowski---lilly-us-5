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

// ** MySQL settings - You can get this info from your web host ** //


switch (strtolower($_SERVER['SERVER_NAME'])) {


	// LOCAL SERVER SETTINGS
	// case 'eccolocal.com':
	// 	define('DB_NAME', 'db_ecco');
	// 	define('DB_USER', 'user_ecco');
	// 	define('DB_PASSWORD', 'q2#byPA7*)91B');
	// 	define('DB_HOST', 'localhost');
	// 	define('WP_DEBUG', false);
	// 	define('WP_DEBUG_LOG', true );
	// break;

	// LOCAL (MAMP) SERVER SETTINGS
	case 'com.us5':
		define( 'DB_NAME', 'us5_db' );
		define( 'DB_USER', 'us5_user' );
		define( 'DB_PASSWORD', 'us5_pass' );
		define('DB_HOST', 'localhost');
		define('WP_DEBUG', false);
		define('WP_DEBUG_LOG', true );
		define( 'WP_HOME', 'https://com.us5/' );
		define( 'WP_SITEURL', 'https://com.us5/' );
	break;

	case 'lilly-virtual.com':
		define( 'DB_NAME', 'czarlill_immun_us5_db' );
		define( 'DB_USER', 'czarlill_immun_us5_user' );
		define( 'DB_PASSWORD', 'iNl0SAG6C0QF' );
		define( 'DB_HOST', 'localhost' );
		define( 'WP_DEBUG', false );
		define( 'WP_DEBUG_LOG', true );
		define( 'WP_HOME', 'https://lilly-virtual.com/immunology/us-5' );
		define( 'WP_SITEURL', 'https://lilly-virtual.com/immunology/us-5' );
	break;


	// // LIVE SERVER SETTINGS
	default:
		define( 'DB_NAME', '' );
		define( 'DB_USER', '' );
		define( 'DB_PASSWORD', '' );
		define( 'DB_HOST', '' );
		define('WP_DEBUG', false);
		define( 'WP_DEBUG_LOG', true );
		define( 'WPMS_ON', true );
        define( 'WPMS_SMTP_PASS', '!E9,)ooBEE^.' );
	break;

}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x3B|nbl4.r292wB`g?Z@N1#d$0=>o9j.`sH}CO;577oysyT9gS}+|PGnEIF*=P.%' );
define( 'SECURE_AUTH_KEY',  'z#Cz$}_>DJper6c`nO/G=mjBYoc/4_,rvT((dDaYm=tgh|l?K/+AFY+qGx@]aCOn' );
define( 'LOGGED_IN_KEY',    '2L;^!5.Rs!Z`pA?{2QGtR{]*lPq1BsW-d[[?S0^W&^?W8+f!6}+Cryo;)^zV812!' );
define( 'NONCE_KEY',        't-_XhiIRQVFZy[6qE5hIa#UxV(.;Y!Itf)zNU[FH$3NH7_1My;WpUS!z6EM.(mIi' );
define( 'AUTH_SALT',        ':}Fiag(sv0ynA#x2QkK`-0CvMb6+ztiuv*{NE?19qL(C3jEV>=.#pI^ht j>of5@' );
define( 'SECURE_AUTH_SALT', 'NHtGkua#lDnT6a8Ma=;/0j]mvxpD#a>5Pr7SjMIK|pOHgQWN-S]%i@n#0b;^6O;-' );
define( 'LOGGED_IN_SALT',   'Lmkj[&UJiM[#mPS4tj|V(V04&A3CFm=XE&ll)X[w_z#+E<@d|(wVK!+A&tIyA/~9' );
define( 'NONCE_SALT',       '[:/V#AAIF:,|~}SB@<$$CF}|Q^:i)*VY$=g^+t3z(I4K8QAKQU%<b=zb`_Tt}E,M' );

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
define('FORCE_SSL_ADMIN', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
