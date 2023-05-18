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
define( 'DB_NAME', 'Wordpress-Ecommerce' );

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
define( 'AUTH_KEY',         '/J:(.IqAs 0^5rghA)b#9=eX=4y6bi3O+B$:KeI?dB*I,.<gsO1-9T@?(v3@W/b#' );
define( 'SECURE_AUTH_KEY',  '=r;L)jsU#*-tB>/N!hO:MJfyQ$#k2S9PAFU Z<:5M?0DXW2)HP[S[2BC-K4`m9{H' );
define( 'LOGGED_IN_KEY',    '[]$=UG6c[ p![9sMwa(S}h!ITv@y,1ko:1ZVCzqS@CjJ1dux];~p5f}!p-R4%3;_' );
define( 'NONCE_KEY',        'go>?+3!fdq<|vJ0A%/oyk&]q-0ry5rG9x~kordk2Nn<YAVNS(h7cuT$U,MaL@ie%' );
define( 'AUTH_SALT',        '+}Dt*p1+i=V2&%2f7/bt#ok|$x(|24Rakukns|f7uI{,[:q3u)80H4&7ZIq<m7jz' );
define( 'SECURE_AUTH_SALT', '#@Q^%hqB2R38hG@_I^wme46JKEwfOMi%]K6}Jw{G^mmzXpR8*OX-^6HuRX Iqmbq' );
define( 'LOGGED_IN_SALT',   ' oq_,ypTHVotqDwx}Bk1ZfbvOcc1a&}NTWiYU~ZKP7N]XAYxhKni7/)O0,s*g<g^' );
define( 'NONCE_SALT',       '&<{OJ9Q-%npPZ22aeQS1 3Zs78#`;K7( e#;GJlUcI_x.#n51HpUv2p3!Y^=<Xil' );

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
