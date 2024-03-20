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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hirewpcoder_db' );

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
define( 'AUTH_KEY',         '[&9K 8S9xE!PuZV[XuG#`1/],#kWS#6|7lN:H^l/CTe(Qj{j*!*W~SnKnU(MPNR+' );
define( 'SECURE_AUTH_KEY',  'n`HOl6Q@?<g-A^&K%p#$^`m<894y@7^(L0)`H*^z.Gc_C7lTA`[=ETD[A9sE_8rF' );
define( 'LOGGED_IN_KEY',    'N[iyj2F@r+lUnAA.YH:],0)eZp: (cp*f3ox@pXzHM*l:d$s?+D,P1{eSlgc&p3^' );
define( 'NONCE_KEY',        'X/+L4R*G22q8}sz1r@Y=.$XwaoZinrF_3Z+<u%U&I0!^ *T$HPNa{>^#{8sQ_JNd' );
define( 'AUTH_SALT',        'y+iaN*;,Y 2[xQ;MK.(ic1.%A:7%I5x4h>ekhTXeutO^+6;EHk1RkHkS6<6KA`1g' );
define( 'SECURE_AUTH_SALT', '6;kI[qxZ,AVEHd_-j=Ok<TMQasYz)(aVvXWj.Kl VP$tPU_%v>t__7hyF<|.?!vp' );
define( 'LOGGED_IN_SALT',   ' fH9!h~Y5T#-54BR,;>mg~&/S?>LTKiW[!LLglIqxmk23p~]$0x[?K|v6|3c1lVy' );
define( 'NONCE_SALT',       '9?0<^>zp>{C:9&9]E8+r<|P7z$ZH2|2JtUL?e1bi`5qg!(3DX,CA<~uVh>f.G/`q' );

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
