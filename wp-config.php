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
define( 'DB_NAME', 'sbase' );

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
define( 'AUTH_KEY',         'o8$}?+hKxuvq,WV, #Lvr4il1L$z{Ao T&uKhpcDOFmAhu`kfEM&y]g/PaoS0Ig~' );
define( 'SECURE_AUTH_KEY',  '?M*tow }Tb+4HMs`_r-uVvPpoW)9n:l{`n.7.TU[ZAtdc:dYIr~!J<ppKT56afC2' );
define( 'LOGGED_IN_KEY',    ':ei2!O<*^++UzH/gMML0+#:v>kIw9scT0Tx6.S_:9$G}=S%9+4l[PR)]N^:t9(/1' );
define( 'NONCE_KEY',        '=e36Sbt))&NN&>Z|LfsZL8 N&<[wX|>tzhypbV@53_#:jfcu!85 wg}{[^qVXc#f' );
define( 'AUTH_SALT',        't:ytD6>+Od)Xq@zT`+B+/WToSft4{xA;,D$,Wo$.b#<rM^amH:yuV<xiWL=Uo*fm' );
define( 'SECURE_AUTH_SALT', '*dxx,}jO5)iE ` (h1oBO[6`4-^E0pMc6|!4y8&nOPHSqY5b1}|20M8<np5#wT9|' );
define( 'LOGGED_IN_SALT',   '+RFBGB%(r-edpDK05*mL0_T36)_V5?q_o/*2vOQ:s^x8V4 RF_ -,y~8HkK!bo,r' );
define( 'NONCE_SALT',       'A^w+w|X;ZOCEC_%`K/,Ye|]AL^9_#[GmQS!{910J@eOpBUC&r(eu%@oDuqc>)&`T' );

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
