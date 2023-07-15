<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'buytech01' );

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
define( 'AUTH_KEY',         '-|*ZedvgtBNRMjn~YQL:MK&$!pMH}t=W@0,)#Lg|BszS8=7$Ao@}kJQh^q)]ZSOQ' );
define( 'SECURE_AUTH_KEY',  'aHF@}sCq0<_GRF2nhgX^Gu2pI(okH.j2kNTkr3/S_$Gxi/h-Ot 81K$@g#i6Qs3A' );
define( 'LOGGED_IN_KEY',    '#}_u7,+.1o2XPicEjBsqlU>fw@Q;;t%mlZMCv9PP.wE &bQ:3>#I 5{g1Om4RZQx' );
define( 'NONCE_KEY',        'eRr**U`{i[cqY{4_$_Mmeqj7N*>Kx>1C^&;%4!esnVt]u1(1>(m~r)ZG=|oo|]P4' );
define( 'AUTH_SALT',        '-Pc9HC5]W^n($Tp^l%X0*vGgMg5kh=mP-s>~4Jlq,bMr5qjR}{j&xIb%HPfVr`~B' );
define( 'SECURE_AUTH_SALT', 'k(]P(jaz+8sph#}pG|c&O@[[XUX)=DAy|jXx2oh`^3JG*[bjSt$lI+rF.*2`1`15' );
define( 'LOGGED_IN_SALT',   'Q n00:t5tKSogFk05Tl2`0I/7%IEmAXjH{M*[.~Q#wppn=DtTz`F9~a*?bL0R%Pq' );
define( 'NONCE_SALT',       'M!?YZ6wngzZ1v[=waAS~t];kLV!&[D#f3;<w3WqZ%(ZA?H_.F)sN.k<Pk?PN[PX]' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
