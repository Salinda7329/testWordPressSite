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
define( 'DB_NAME', 'wp761' );

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
define( 'AUTH_KEY',         '$$8mrR@ _I%6s_uhiVI<w][PXm5Sa>X{7m]wI%d) Hz6dCoRT-8ReA%XmL`!;,vt' );
define( 'SECURE_AUTH_KEY',  'jhCbk037yWV=[FD{jm+O~Vb5WWwriY2M;G;}8FslkH#&g$oeTLRRO7GFq!y0ZNI8' );
define( 'LOGGED_IN_KEY',    'UAOUb|_z#av*Ywgf!J~<&o_gzI`IE7.aXYUBz16O.vNL)y&^J2bax;lLxj7|^^M<' );
define( 'NONCE_KEY',        'ZIjRqz3TOw:h(5,h#lqFDz*hCmUBt~=nRvQfl0UL`3/:D%MB(cX{E?6h~xCK~LvZ' );
define( 'AUTH_SALT',        '/tL#(3lX=|F.kMK4zN2te&Aky3UK8-q!nr78,;!hd,!jA&~RNCXp_0]^Y/Cf-BA6' );
define( 'SECURE_AUTH_SALT', 'Wbqdb|L_#ilLb<UV!F_%B~dw.gi*6~~`6uP/TDgZz%%zu? {EIjJMOtqx)8K1eQl' );
define( 'LOGGED_IN_SALT',   'LZA_a.N|42PpnX7mDPnA(1TnT4bs8]F=hW(ofR7,56]$0P-)Gsm*. +0K]Gd1&HX' );
define( 'NONCE_SALT',       '!vScn>ZXs/TO8)?!|aD 87N$8xlQ,Dy%pB1k+v?K,nU2vtbZ/(EmFA:Hv3$Tn$dd' );

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
