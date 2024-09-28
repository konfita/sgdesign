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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\konfi\OneDrive\Bureau\sgdesignercom\app\public\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',          'Sc^d~zBLA!=Z#aXS%:#]OY.G]hieji/{ci 2UE} d2|aT/VvUX0vrX*XQ:?vVT1|' );
define( 'SECURE_AUTH_KEY',   'K{0Y[fgCkl[Rh3MVU74ssu1H$H0p*g~)wV2f7#YQ:K[]?kOx^>-F1]H]5T8pQi1t' );
define( 'LOGGED_IN_KEY',     'KvPRG~K:,%AVPw.0P_gv;|nA4e}z8iuS6bKG48H?xKUns$<C2e;&Rr?$T=w?(oVQ' );
define( 'NONCE_KEY',         'i`42.fY5e+bx416[le]I%C8^HPc}IZ<Q[^CX0K:.K0mR(,TPIaS=}7JQ^gNfp?$8' );
define( 'AUTH_SALT',         'v6oNh$wEbSGPsn_idsZ(? (evdx|@)m`1Q/SDG]nYfIC$e].!Dg<%)&Jt1gV=t#F' );
define( 'SECURE_AUTH_SALT',  '^(g.E;K>`KF>tZ4~UWEfI`(H_Uf=$]m-|fa<RCS}&h^zo<S;!fL(RJ,]ZM5>;=ju' );
define( 'LOGGED_IN_SALT',    'a!]ZuvDJB!eCrr/sTr=)R~[`Sy%]b5 p2RBN5v4)Mu@>c&=&!XfXT?(4>B5N%+$<' );
define( 'NONCE_SALT',        'w~ik9&Bqoy=*FsE;4S:~ZR_pr[Oliq`hCBI?3h;/{~>%|UUdaBFk bibMckhEg 8' );
define( 'WP_CACHE_KEY_SALT', 't[|/Lc/jArB},?V0]M0i+<#ZI*z@1jaAu|2=;+N#V*M8Yc]}a*AW^1[*b[ck.9 {' );


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
