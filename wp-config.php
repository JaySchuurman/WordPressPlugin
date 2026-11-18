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
define( 'AUTH_KEY',          '7{|aeRzLma^>-9{f|WmlqhCoJ5x2AKZ&93y8N0`vx|w^cmdzN%PGA{1_/JV(qFtK' );
define( 'SECURE_AUTH_KEY',   ']74dPe`FK$CVi+:>t6L&]cMp5,m&`K7~V>ED).NaKFQR3[B@|KmBgXa k,{u.OWU' );
define( 'LOGGED_IN_KEY',     'uUFBm2+)MU(-|QO?7/zCh1O{B,,*^o4QJpAFIvhUOJ5?&+Jzasm;dOU^DxrORFCM' );
define( 'NONCE_KEY',         '@VHr^ P-I4&p(Z)>+YLWJs~kvu*.-=opu4|?I>h;9M#i@B@^M2R_8XqL#:F@Lx~r' );
define( 'AUTH_SALT',         '&rBxpiZt9$1n2o|b3Bu{=z:7t3WiCpE 1XrE_oO|U% `{`DG) zQ4j[%Ka,O h7a' );
define( 'SECURE_AUTH_SALT',  '!$I{l$KDUdVoU`=15i7f,Q(SUOo =6.w:a(/%WSog,=3b;k9rTm[{fxL,2|Uen$K' );
define( 'LOGGED_IN_SALT',    'jqH{L^Jd(s^?<Wtc;0D7&yop;m:p?(lE=CtIH}-+|76QLhh.uB0qhTNe9F=pd#-l' );
define( 'NONCE_SALT',        'Uq_A(gRN-ct4hM^qsbO}xem2=C9>rgifp>-L}>9=U0+%8RZadm^Sukg_~Ntt=`,5' );
define( 'WP_CACHE_KEY_SALT', 'EYKnp& DS+^0`/%cluwTp>uHd,u^k8<>{qFeMa]m}o+(6[&p{hq TQ3OLFx=FnEP' );


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
