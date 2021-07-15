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
define( 'DB_NAME', 'bflex' );

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
define( 'AUTH_KEY',         '}=U|@U*C+mRazYdcI%c(Q<WS}^Ljs2RFhR+JANl~fz`C}=vLTKCE_YC!%>~#25Q}' );
define( 'SECURE_AUTH_KEY',  'QOw$$Loh^<(J6[d?8,WMyA6s R^a[ u8*G2w9L,bSkxi+vAw2&cnjb&-$by#zB:K' );
define( 'LOGGED_IN_KEY',    'A=P(rEwu@Q%]ieu:suh njtN=5NR:XQ/6,@0/dK.4AR4T,EB_|,]p1k1wy*j<6v#' );
define( 'NONCE_KEY',        '0YoH2gQyf`j^],}9|?3wsi.b!%_iw4Gx^Mi-c),+7lXtcL]SMrQ6[zWw7b:n5keo' );
define( 'AUTH_SALT',        'A~n|>8IGjGJ77@6&pTHXE]VDlgFix,Q19]NYQYKr?wEB<]%<zW.t;M[:6YN&#GL_' );
define( 'SECURE_AUTH_SALT', '-LrY4`U3I>AhA}]IKj,4oYZp{t#S6`(+cv v9d3-{_0-B!6#Q!0- E>nZzCR?Nh/' );
define( 'LOGGED_IN_SALT',   'c%yC9?f`.<IJI}xOUx`@mhN_ WXa<c?Iuc$h@z.u-+YpB4)!BMjDI-4!r94;|ft{' );
define( 'NONCE_SALT',       '=LaOf#DQ*D((H~uvd1tX^n58Q!t A%pEJwpkzzn37Z!F~^z%F;67bx:+4!;eX*_z' );

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
