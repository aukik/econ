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
define( 'DB_NAME', 'econ' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'sCsQLV^=v}(9G?)Lpk^Bw|ZU/3P^M%bQ=`>&65Tt]I>q$ku:!Bo/_p*$g9t{%%A9' );
define( 'SECURE_AUTH_KEY',  'oMR^~^qe&x8wo8lrLZq!GN{0<mN]c`I^;VH:2~C.(l%}NgK>r|}?8xk>O=N9WQRz' );
define( 'LOGGED_IN_KEY',    'mgel@]ctRP*En~W[T+I`#CEA.H.hDn^#S_O,CG1C093>;/&eqpwfLJ,^B?l>&:(>' );
define( 'NONCE_KEY',        'G]#}kU*_t8_J|Wgvw/;ljg/VvF[Mmwr%_q%gb?$nfABN9-QO0k<G(g{Fq<sTTuUq' );
define( 'AUTH_SALT',        '^U(RD#TqBNFgJ6rI2b^^d5SHx^I98J76u&$OLS_HOVe:R6Mfq8> $0u@yZXSl})X' );
define( 'SECURE_AUTH_SALT', 'YMa<6q^@(O[*@IwYd?kW*TFqcn3I}VP#|e->3JC8Nc0Mdv4cGw{dTrWTt%vXTq7n' );
define( 'LOGGED_IN_SALT',   'l#5#}2h0|Tn}.uy<dab*slD+=h 4G3$&?k4io/>R{UlYnH0nfe8;c12A#rL4Ifs|' );
define( 'NONCE_SALT',       '&2bPVnrAg;rDhx+{w7g I^MsD,eic]rs|,R4u>BeFjvF8O!T-0Fa@}==nsFfJNKe' );

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
