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
define( 'DB_NAME', 'technxtdoor' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Z2j46W$ns[]#86Nf=il7f4{>^H1BOeD3{?a1bq~Z@whe`wrXW3l-=YGz!7*p`mN1' );
define( 'SECURE_AUTH_KEY',  'vpER(&V,4DeaZC$|59L$ Y0K+60mY9Hr]`4UrGunRU-X4+Z.dQqc!8ivx6G(Y=IN' );
define( 'LOGGED_IN_KEY',    '(H_3<7E;MMOcpJl+Jl($iTD=5a.j$;OK:A?}E,G8@v1C53NQC1m5HFj)3*zLtA5l' );
define( 'NONCE_KEY',        '1wj=*:8*Fb!ZsMcnc#G6ts>mmqU?V^Z/f+LXyihd@!5Q-~FDq/0R^)*-t_V/-e6U' );
define( 'AUTH_SALT',        '_94NX15`zLazTb_Xtp.Z?kS7v!DBrEu{]6Dpbl)Eu`A}uHXQavm5. 4L,UI^h#SG' );
define( 'SECURE_AUTH_SALT', ' 9QYk1[7dZ)x C,DvPF<agZtZGYYG${tRL&[?Ufk%s[/:B%m^2Bn<pUtK|E8C*Jm' );
define( 'LOGGED_IN_SALT',   's}sv#_Iz=:Ur>E Wm;-_3|yjI.r{O8`O??i0%/9c]|wGDp}%daS}JPEl{K,FS(L|' );
define( 'NONCE_SALT',       '+E}LGl,7/v`Pb^kzRN4Nn1gxdZ~gb/}BE)|6xnwbO;!5[1oMSXL|H#fM{M?x~i48' );

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
