<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define( 'AUTH_KEY',          'h_`P)tQ_vycN4*`1A|1Ph59BwU%(Zi&2OD3d;2b}Xl)~(.tpOV&D6 =u|L=~2.q2' );
define( 'SECURE_AUTH_KEY',   '6JprPu*k#h3`b^/d&/12@!PbE3qEHjwL~kn6fX/oFmeP*WS`/[Gmf,U,OKMb901W' );
define( 'LOGGED_IN_KEY',     '$!|[_)e#.;2z.LoB|C$7>xaL7ynWU6C(c$0r C)}C~ pr-@}YD.GEyAo3()]<zNJ' );
define( 'NONCE_KEY',         'ngY0XP|>jc4!nn*EbhM;:NJD&s|=&/ZYfm8q7k:|<)2v<3BX$e#ZaKq8j`!<DT9R' );
define( 'AUTH_SALT',         '*>@v{h>sv){#,YT`*j7-ie?`b0d&-]LzK{}Fwl-%,5;I/:P}IdfpMJ{!30p1OD}W' );
define( 'SECURE_AUTH_SALT',  '`/~I`_evh%|`s{W(8On$Vbp WG3t~=~0$;+*,Z3,sZ}gh;DhP~q46&&7akfm7$sk' );
define( 'LOGGED_IN_SALT',    'tf~Q5!83GP&bv$.1rNcQD|4]R|d[l?w@=zIr6;rwH0,(#)YU|TT5[KzIkXFw-HiA' );
define( 'NONCE_SALT',        'h(d<|T]^bKg^Gj(OD@{ou955|p(fl5^sO|Z5S3m!wyBD%a`%(2`aj[$1qF|-S;QP' );
define( 'WP_CACHE_KEY_SALT', 'B&Qp{*1~PW`P>6TK+n_v]UA9EUWO+qeHAPQuO<2x}eCKMWWQRh!6;OoVT2!3qgo-' );


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
