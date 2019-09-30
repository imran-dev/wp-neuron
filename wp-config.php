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
define( 'DB_NAME', 'wp-neuron' );

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
define( 'AUTH_KEY',         '3x>P[Nh/sW3aB1#b8`tG0jx9%>LRK@tpxa9/[L~]P4(Bvk&Wb24FrW_J$$UX]zo8' );
define( 'SECURE_AUTH_KEY',  'JnK9k-JK/7/0~5_[=Kbq|(~keb6s`KTL#n8~VbpD=K2W[34[_?jbv1u#=9>V{1q2' );
define( 'LOGGED_IN_KEY',    'e?85Z{x|LA?{-sLf618UR3d*3f9h:hEkF9)e#P#O!k/GwyHX/B-nMat{O1C`<[.S' );
define( 'NONCE_KEY',        'V)n6Z)9#PB->?irM*~,w8by6@=leyz/~Cl`u2-%=(d ^z-r*`QO-%iqttF$_t0O$' );
define( 'AUTH_SALT',        ':L<|G^/d`D7xC[@$cN?~`xQr08hM>0$dWcTB43:JA{O#V1(*TmXeuIvU~v YD2Nf' );
define( 'SECURE_AUTH_SALT', 'c)UC&5!H*)k&B# Fl$OB3?]o)S7:Q!:Ew^!`Df,Mo8I L~:&)6i%X?hUA@^3|b[L' );
define( 'LOGGED_IN_SALT',   'w~Fw(HV/${w?dT.k}3bNJ{-ajMQxWVB+K0gVg]<Yx[4Kwdlo}s!zBY^!6E%6bg4n' );
define( 'NONCE_SALT',       'baNm6AZ#>?G,iA4keujbU`=|g#gZW6}e! RCo9/gri9-InQeJ=Z3GdoaXW.tF>11' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ne_';

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
