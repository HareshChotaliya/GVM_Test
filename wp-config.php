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
define( 'DB_NAME', 'dv_medical_clinic' );

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
define( 'AUTH_KEY',         '!NSgRsw5%?ivn|l?&l<d--$;g`(Y8dSvDd9svZQAQqqY@CZLB}h~7%P|ObAfW 1#' );
define( 'SECURE_AUTH_KEY',  ' v;<^HF|M[>=5[:tdE|=0H@V&}|e g*OtKPa$*dWZK&oDqtON2BhLKkMw=vdrT6>' );
define( 'LOGGED_IN_KEY',    'T?N8qK1yii?z<X;@^}J`y/}y0I %O`9ukI=kw;[~k_)T*7nqJ-1jb!>+%{ZstAaJ' );
define( 'NONCE_KEY',        'y[~gGQP[<hlMKwr`ky4!X]&S#WhAneF(H0P.4+IZ>o<!K-$uD# +LF:G{Zimq6ZX' );
define( 'AUTH_SALT',        '|%#Q9&wNf{V*$*G@z97p]1}R@&-H|R|ujmhJP-c#4;.*Kz_Olp27=<R_sFV)_Gix' );
define( 'SECURE_AUTH_SALT', 'pKmwKv#1|}:`DmtMQL<~NmQGQGCyHZ?Gx9%J`g:Msy)@W>~8gCT5q7;nicj@B( i' );
define( 'LOGGED_IN_SALT',   'vSvqm7na[#F._m.fT7h4fvJ9#`5fnW18ea<?c:<>[e-5?c%k(,11nIS@43gn/Jyt' );
define( 'NONCE_SALT',       'N]=<mHoviq$k<#8_D&X+P%-u4WP%XKyJ*Zw*p)UF2S2QTztbPs?v;xQ.9mt&6EVE' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
