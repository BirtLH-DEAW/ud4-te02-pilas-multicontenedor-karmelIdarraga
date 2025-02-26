<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_karmel' );

/** Database username */
define( 'DB_USER', 'wp_karmel' );

/** Database password */
define( 'DB_PASSWORD', 'wp_karmel' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'CktjV/&VEFeg0m<!?_<5oD7[xV^~TNwz`F?Kp{`vE}mwOV#qXqU:2tU]B%hv%@o4' );
define( 'SECURE_AUTH_KEY',  '-;kBgxrtT $#|(|8{d}V9&cPy&D6}-]%GKKt-AoBBCWLd26*c{2*I[E!Yz#Sl f*' );
define( 'LOGGED_IN_KEY',    'gO44@Ue:V4XuJUz`~D=V)P8Wo56B:&^;%kGH0Mb^KzL]-Sr#cas#vZX,]R8b(W)H' );
define( 'NONCE_KEY',        '4T.dV;jk8Xf}uz]ud[my,2gytnMgh+~{,VMH>Zcw*GA 5nGu{R4QBkrDt[:g1.jJ' );
define( 'AUTH_SALT',        '`6Z1i9($5A]:}g].g%ucSh4p,-5 ;0S~,i1n^ Ej3)k~q b<X_*H1w@pgiTeU0{U' );
define( 'SECURE_AUTH_SALT', 'WBV2P6G4FW~jpiA:4|Oqi#k]uq|Zb%y+<-$t,rS6bi_P)XElC(8AC|f{6r[$[?$o' );
define( 'LOGGED_IN_SALT',   '%WjM^p*S4D10)@tiw<Ul]?9Q6hmle~Y;@,SC-61,)9v/aBAqDF3 gQ~o?>klI||&' );
define( 'NONCE_SALT',       '8.DIsw8}O:&cfB+lLcBU[u0t_T:oa}zQ7 US 3m$]8OE($s?{w?Ju+Zwp=jzF[.7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
