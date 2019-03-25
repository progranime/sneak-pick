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
define( 'DB_NAME', 'sneakpick' );

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
define( 'AUTH_KEY',         '[QsN&vnbFOC sIEsZ]:S%QDaca@0N#72b[.H[o%JXHpg00Do~Xbc~ N, y`4,< a' );
define( 'SECURE_AUTH_KEY',  'Z[>7G6F0TYti$:^<TAaatGFOq8bwx_Q7Et>|&zY`75}&=nZ5t8TJ>~[B^!aaF,17' );
define( 'LOGGED_IN_KEY',    '=?+36y^~}-;hQz}W:i+)ir!n~dO4~}o^)C:w[O>D]AGtm?~-FPvhLG.!_4/CoVhB' );
define( 'NONCE_KEY',        'ImpH}.=Fvs,0[=LdVF~(46!`R_FCdTFKE@-en32@.KjYxz<S9l6l7MYq?6v1v~V[' );
define( 'AUTH_SALT',        'T6ptj!@wEA[W#@2J=Z5@}31j 9-P!*!j f%>VSHt8k_zglE>]?qm1]ZtRw;lKjP(' );
define( 'SECURE_AUTH_SALT', 'l,A+<!`K7?zYcYx2|7dfHIM||{3(Eg;Kb*z!XdZr&{nm2[)+TI=5>S2oJ3jQVK[E' );
define( 'LOGGED_IN_SALT',   'bY -T_v?Z@/G.rdW;&eg:i(6vbCy9mMlSF> H82CN@RLx8k$gb9@r>f y? 17>_]' );
define( 'NONCE_SALT',       '}o|I?I9o2izp$AqPx30:Et:i8ORrRcg?mN8o)E9>Myw4]e:AFC2;pZ6ck*S,h$Db' );

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
