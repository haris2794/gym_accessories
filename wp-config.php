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
define( 'DB_NAME', 'test_ab' );

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
define( 'AUTH_KEY',         'Hm4!h(F$j{Nw}^)Pw^@1muldW4}ML0LO8c>A|b9]>HjAs$E5.ZF 2]~?egU><CFh' );
define( 'SECURE_AUTH_KEY',  'Xt$P>l9WV$!C`YB.)^DC9_,ctMnbF%$6t&3#<:jGe|h9=VH8WUkEtK6fFwd}nd>m' );
define( 'LOGGED_IN_KEY',    '<3W.QVJpv>{!%kpA*J>T<fS$so^7-B8/)%csFwZ LxY[*$GDPcw?tM>~vRGQe]&`' );
define( 'NONCE_KEY',        'lKmTnI$l4~hgL&ujCC(lDIBQQ{7KlQ7X@5[W2.2HC&9&Ba_lc@Ep9j+l~d)x=UM!' );
define( 'AUTH_SALT',        'XCuZ(zE[w3%iVk7OHaW@(.d`wQb ,QH1E{7bVD3dFi$%)}gZ`O%AuF+_Rrf6h/Ep' );
define( 'SECURE_AUTH_SALT', '?;X@jZQ7!V;`|F^gs[4-;S16I[JtLcWPHw+%Wh$N3T4;%P}WkT6hD9H EfiFfS{k' );
define( 'LOGGED_IN_SALT',   'xxf Q;f0J?YNf+iMoE)7M&?G-@H;#~_LC%fq|GF4[A/lFG[[l/yu5Zv(cM9UmAz~' );
define( 'NONCE_SALT',       'NC/lK~3h4Y@Jv[IwxyYp{N(eT9*B[8D$~6{4_I*AMtp`b^{>s_Q;H4tnL]Xw4{=N' );

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
