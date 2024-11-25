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
define( 'DB_NAME', 'bitnami_wordpress' );

/** Database username */
define( 'DB_USER', 'bn_wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'be1af3798f3f02ba76751472b08a0dfd82b8d3eca6a769548982aef4fc9cab63' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

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
define( 'AUTH_KEY',         '^mEUx}u$SOQB}K6/Q^D<*).7>PPD ><6$X0s*9-b,!kqfRm^`b2yhq-pi<sS,Y=f' );
define( 'SECURE_AUTH_KEY',  'Mb;OTYp#(e0R*gm&{!}FUmWpDB oQcYwOqgmz3sl3ypn5@vu|A]4(wpY./1M*o:T' );
define( 'LOGGED_IN_KEY',    'dTG-kBTbxx#PRVZR}8]9c=@_g=//RLPx>BmNLWc+Ca((]dDd[bFbC!{w2DxUEqa(' );
define( 'NONCE_KEY',        'qPSchg})v.<iw0DHep^30l{}b(DSwl3TL!1O)Ud}/0M`EwmvP)mT1Hp3Oa]8P7>*' );
define( 'AUTH_SALT',        '?Ib!JFmdih)Gt${]/wbUzWZ7>RTx,}Y$h=SYu.^L[5RzL>dl,43tXPHcuU+#ECfR' );
define( 'SECURE_AUTH_SALT', 'O:q)XwFPI5$/j&M4jYfcwJB_0J%@/}`h[qz+C:*tu.XPvXtk[PX.,a-cb6Bd?!oV' );
define( 'LOGGED_IN_SALT',   '_wx*>6%n8:M+Uo:~6=*j]B!NZT3E/O25eITfm;^lP{tR3Q-k>!azxwpE)v}^yh?C' );
define( 'NONCE_SALT',       'X59=Vj.:6w[Ej-D&+FV;}!WV5O=eM3WH{UYgwD.=%N`qZ<:au-L~N6_ib>m+nB3c' );

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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );


define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'sassylashez.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/**
 * Disable pingback.ping xmlrpc method to prevent WordPress from participating in DDoS attacks
 * More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/
 */
if ( !defined( 'WP_CLI' ) ) {
	// remove x-pingback HTTP header
	add_filter("wp_headers", function($headers) {
		unset($headers["X-Pingback"]);
		return $headers;
	});
	// disable pingbacks
	add_filter( "xmlrpc_methods", function( $methods ) {
		unset( $methods["pingback.ping"] );
		return $methods;
	});
}

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
define( 'DOMAIN_CURRENT_SITE', 'sassylashez.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define('FORCE_SSL_ADMIN', true);

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
	    $_SERVER['HTTPS'] = 'on';
}

define('WP_HOME', 'https://www.sassylashez.com');
define('WP_SITEURL', 'https://www.sassylashez.com');
