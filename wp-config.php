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
define( 'WP_HOME', 'http://gcl.turninon.in' );
define( 'WP_SITEURL', 'http://gcl.turninon.in' );

define( 'DB_NAME', 'gcldb' );

/** Database username */
define( 'DB_USER', 'gcluser' );

/** Database password */
define( 'DB_PASSWORD', '6=LO#sMAbC=u' );

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
define( 'AUTH_KEY',         'LwzSxf|GF,n%hBG0Ih,t?u^xxjfwoq|V?#FLE:N!=9TAhigN/BFHqb$jD@13r=*o' );
define( 'SECURE_AUTH_KEY',  '!l}R>dzh`%Uj[ZaoOxU#=o&Cc&m]5%a~(8JQ%gT71Lf0F6B73%R~@P6HE{yVb {d' );
define( 'LOGGED_IN_KEY',    'znpnF&?@A/T5kf^!Fs}y~kM1keVq1N~SY`}>Gmrm@<vgaw@u1>{02GU&V8|?y`64' );
define( 'NONCE_KEY',        '|17@T9O5p^[yG6zEvk2?r0UL)W3V!T;(q*7,lKm0c?ri/l5k^Otci B3Mr#=R|EE' );
define( 'AUTH_SALT',        '|{Lx_=9{6:G/ o_xSW,`^wJeIenu?8f(M.hv`Nv&JMKk#[n;gL2x:]]$?ex!cUnY' );
define( 'SECURE_AUTH_SALT', '-iA6-IbFE@BU/=h_Wqt-,gQ:iP$Zu/Lle~;H.@aR3feoc7w;in6p8lF&`{p Ekxg' );
define( 'LOGGED_IN_SALT',   '&jPcz1XM])3la})Mqw4Eq[OmfgS7H|,:_D?mp#Hw1G516#4M[Z,0<KDUv.asJ^Lb' );
define( 'NONCE_SALT',       '%})IGdTrOzFlTrzLjlAZBBRWY/*J%GL4T}JC87E~6-?#v9=t!Ic+_g<f*(Tc+Jyr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gcl_';

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
