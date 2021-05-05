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
define( 'DB_NAME', 'wp_restaurant' );

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
define( 'AUTH_KEY',         '?]*hqtkMw++v$&t~(9smw#f7fl]/^tw^IyByF+t@ ]p|sf=@_Ws3rkF#A%^~*7~U' );
define( 'SECURE_AUTH_KEY',  'pH,n,Ln;A9)}@{e$^?|Er85o4C*]vCo-]gt:M$+*bg9N66}Q*|MD4tE T75h>M%D' );
define( 'LOGGED_IN_KEY',    'XFo!pKt>t$$|<5R&xL2-f]+?Mu1Eg6-$TyyU0eHz]/8|ZW@3/k`ncFgxmS4jLb*Y' );
define( 'NONCE_KEY',        't#`. ~.8q(A!yZ:Z1W)(5,k0-j07(3d2w,9BvMXkBgXE;ARnI[}EWBR5jSA<%8c&' );
define( 'AUTH_SALT',        ')YUH&5y-H|d0-3Se!#%)*Ez&Sw`+cc+K$m_X`qJ|97EBh3L7vk3UENwq^{^}O~yk' );
define( 'SECURE_AUTH_SALT', 'DOvj7,`i[*!`(KXFq>nVO79nom?@!aA/|511rvafQ/sC28zlDT:<G&{Zp3|e0HMt' );
define( 'LOGGED_IN_SALT',   'kZ7WSD>]qPJL/q4szwwD+|nFudU+dv~AOh!yd@Cn@p#e!+,`;d|9g^YwR~oyX)J(' );
define( 'NONCE_SALT',       'vVHV~U;8<!FFtqp}oUkt})<,FA`8/jG1?+g@QhYDP}NxI;RTj]MSo>c> h@w{JY[' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
