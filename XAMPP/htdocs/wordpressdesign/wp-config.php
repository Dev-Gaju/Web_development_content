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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdesign' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '9Uk/q5[)?|nITCNW3e.2G$tvA/`-3Vvfg0&]K#><c1037was{~#K|pxE&Ac=rNUx' );
define( 'SECURE_AUTH_KEY',  '<FvQMFo)YuT(8.X8f,QU)&}+doU|_jvJy$=) oT3[K6PAwGda[6nq3PXgt&j1Jfp' );
define( 'LOGGED_IN_KEY',    'eiKvj&f*VxMm]YP4^)D5]ubo`pmh%k<i[@H*d >e^hc|I|rNT=edX^L>&B1:6bd<' );
define( 'NONCE_KEY',        'sj%v29uG@OX1+eHW#rkl[iMXl/%Dj(F><Or,6Bo!@J1t(.6y:FU=+WEu1xr,o8YG' );
define( 'AUTH_SALT',        'A/GzvcT%Hu*yYleO*<y%_|ISg,r#f,SaAj{U2o>ER YI.]PFHv$3Yl.YLq=Q8_l0' );
define( 'SECURE_AUTH_SALT', 'N%vi%i4XqQH(v~?QDEQ5JL Clxk3YnNMY]l5YSgH&DmNI>V^o[Xvn3xTtI-I32G+' );
define( 'LOGGED_IN_SALT',   't! Wj>xQ/{m5epYHNGVe[nP~gh9:Lt4(8TQsKn_G9$i9_[hSB:jx2J[IKM0e@3.q' );
define( 'NONCE_SALT',       'IEz{U!k@PaniwshRAk*7TwiJPJd2r=Q+Ylu%k~;j5[_6];A4oU<E$87]l7BzJiIZ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
