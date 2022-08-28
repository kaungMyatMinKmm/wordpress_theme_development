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
define( 'DB_NAME', 'fictional_uni' );

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
define( 'AUTH_KEY',         'a;PQ$Lcx/4YYF[k4AKwac)|^.(%iY?F8,Zqaj^H3^nK?/}JtrRh`h$K $jM_4N.{' );
define( 'SECURE_AUTH_KEY',  '?RV]3g<oiWxN^e,%/a+tk.x({7e=]x4B1:5=C50Uq|~;</k`{xD/*gAk1(>lLf42' );
define( 'LOGGED_IN_KEY',    'Vjkx*Db$U};QchL7p}f2U+/<k~7K9RUvwf42rfxkSsoa%J$WO:U/S`~qwRc}Be7x' );
define( 'NONCE_KEY',        'OIs;^{c/&hAK8rUBv|a`7F*S9y!5w4C<B0;GQU~^8Vio>?`k{nKP>T?uL~!{lPV[' );
define( 'AUTH_SALT',        'O`ECg!S9_?eV(9s;b}VEF~YDyF#K8g?jV};QPXtx$` #%?g%?%[7Kv0ag3kbcXfu' );
define( 'SECURE_AUTH_SALT', 'V+QsV6%tyYBL,@<mE0MmQb1@5}7b+8O6)hh[DJ:NXJqx.)/|x)${I&?`gN:H%`BT' );
define( 'LOGGED_IN_SALT',   '4uhI.w[e<t;$BXkK1tdFe@~=9h[t,(X5~M(x9Tx.WdHq X?j` ;Z&,2SqzkS7Q_k' );
define( 'NONCE_SALT',       'Yu}vV/V+v^r&u $E_2#8BuU*j;=EYOsd77-KazWKM$fbbfH8]cqp}sLDEKa`.Kf`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fictional_uni';

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
