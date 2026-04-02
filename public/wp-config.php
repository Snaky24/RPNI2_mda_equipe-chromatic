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
define( 'DB_NAME', 'rpni2_mda' );

/** Database username */
define( 'DB_USER', 'rpni2_mda_user' );

/** Database password */
define( 'DB_PASSWORD', 'rpni2_mda_mdp' );

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
define( 'AUTH_KEY',         'u#w2&#s`7]}jpA5>DslP)KjJ!,E``T;o@#!__@{hwSjgW`Dj+!5Yu~cvuZ~RfKpB' );
define( 'SECURE_AUTH_KEY',  'OvFH?7n,4EJ1>[6fKiE},&k_r: &L[*|5c<OFL_BRad&S`$TZ9,]jnR[Ne8H$JTL' );
define( 'LOGGED_IN_KEY',    'GtJlK#[.H[{x%lYiGNK+(H<sg8qg/GmiPV>jL-N`#-Z 2oq&_]NVe;{||3FqgS*I' );
define( 'NONCE_KEY',        '95V;z]e>P&wg~5Ud:tV~6S.SIEWUmckV5B:=qIB_3Gub!qlW`pzV7)xsqCD1AFS[' );
define( 'AUTH_SALT',        'n6=|fVo.?gc?lEWBKe%9#%_yodGN=?3Ktq>eDiKY))R*zUHlq|C {^,u ?r~XNyq' );
define( 'SECURE_AUTH_SALT', 'ew&5O<N#oof[QIP{&/C5 QBf!#trfjr,3+eul~M/v:{bE;xkr +J9By<8 SROC{n' );
define( 'LOGGED_IN_SALT',   ',ac.mUu=fqHuz+Z`LRN=][|FVr?!9!kiw0P=iaj)wxQQ~i~nIX78e-w+&nDgh{}g' );
define( 'NONCE_SALT',       'zfN]C?ny jK2rE*Hd074`{)wIX!sy8 *[r2svMU9i%,[Q #M&]$Vi8.|3U4<;p4_' );

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
$table_prefix = 'mda_';

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