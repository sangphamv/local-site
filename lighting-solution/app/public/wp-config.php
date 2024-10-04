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
define( 'WPCACHEHOME', 'C:\Users\SANG\Local Sites\lighting-solution\app\public\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',          '3c)~gF.,[tlpL0EoYq0w 27qLth_q8<@d>lQ+,PKOHkD911R_m!F2NU{3Z1tLkvL' );
define( 'SECURE_AUTH_KEY',   'dAV;}<vcC#}W8nF.65s&(0ZO%aRNp3}2XyTq32z~&{-i*trfd}A]^P*@;a.byN?K' );
define( 'LOGGED_IN_KEY',     '@%].>osaN@T[w[;mEVj#gv^Km}1#1=VM:?XN|brgxGP]YdIW?L|J#DtO:XWlsL5^' );
define( 'NONCE_KEY',         'e74^_*DK_a:kqz30RizJjoNQL_OE)l dZ$i,E]zy+M9>U@W#tG/y;Tm|Qs:m}=0j' );
define( 'AUTH_SALT',         ']w3]qbfqQJ*h9?3$,VV3^T% !sImgr,D.P*rXkSU_A3T^jpVqB7]Gt IrlJt+Ml7' );
define( 'SECURE_AUTH_SALT',  'o#M?v-ibPKUSr6OTtS,edbTnc];v 9%l;u?E6|xj4-F?l~Os%p$s19|{x,lINB}7' );
define( 'LOGGED_IN_SALT',    'p11GmP?Ynp]yhnACSx9iVJubSzio#1RG0Uj(;zP{3pRT!y3#?.}z,+F/+:P%CrXl' );
define( 'NONCE_SALT',        '2)XRh$*lpWFeu:`qp|OH{<:2Lbc{e=3iW,Ek0#J1]x#//EKDPy4{nmQ^|m:;=t8h' );
define( 'WP_CACHE_KEY_SALT', '(8vom4TB^moEbV6`05(<oveeKLwB&c%|)i|JU_np:Vb[8~`Wfk;iN3U/@Hbr<p.S' );


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
