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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-home-https' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sEIzx/34Ey2D/uoyM)<%yJ7Z) $*0a[7`N)$OijPw}bc.k.*rC;]^Nk:TTc$-)v}' );
define( 'SECURE_AUTH_KEY',  'k+82,;Mt4<8ZoxYg56@XkUt#4_gikH@iIS%bdZ8FLfvA9h0Ib{^jhru{(bKg<eIi' );
define( 'LOGGED_IN_KEY',    'Q]]5xg*P8k0*%qY_[||)GwG0r3ERN]V%{+EG#7[VB*DwGRNrob[!$tt*rS$*Wcht' );
define( 'NONCE_KEY',        '{X?uEd%GQl}l~vu^Azy[_DK5UJ )#$iD(mZ@t;$_bP(`L|TbBqE!>Fv0p66IB8L&' );
define( 'AUTH_SALT',        '!Sn7P5-{#4+g mw]>r]DEjUw3%Em+p{wwFxWBZiqaYJNXX|PLh>xISlI|(ZL!5/>' );
define( 'SECURE_AUTH_SALT', 'Z6cy~AE[N-o7kr{TO{.-)#UN AO+gMp16fMTi:dnC+U7KkyY_xylRbT|/TGf8~D2' );
define( 'LOGGED_IN_SALT',   'Ne82us6GTd`?${%}(??iB?&K)d?]o}en3{c^^bS]~IA_O!j]ONV._|D++MSwc5o-' );
define( 'NONCE_SALT',       ')=t|,O01(miHa6mY9U:@lnV{Wx5N Mpv2T_V{v;!cn%TG$zyjcV6R#3!~bsp.K2(' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
//define( ‘WP_DEBUG’, true );
//define( ‘SCRIPT_DEBUG’, true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
