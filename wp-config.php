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
define( 'DB_NAME', 'bricotips' );

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
define( 'AUTH_KEY',         'ki6NA(jV~<fx[eMbiE}4JX0^oZV-feF#T+UyEojLc{1S2@Gg14fKVTEj5_Tl[WSk' );
define( 'SECURE_AUTH_KEY',  '2I;hR}[lst<ds8*k.R#`/P5W`,F7}y04?Fkz{E#D!kmkqH90]ZCEI8ehXmx>,E?%' );
define( 'LOGGED_IN_KEY',    'Q{c7}Ng@eJFP~vBRy4*>3W[c|OTidcW%Bw]9LU<pJv3Kfy0~WIv6pUt&s(bq86Sb' );
define( 'NONCE_KEY',        'A/s&Sr{~HAK.rXE_Tpeseq+x~ipH#|{B;}p@NkZrHznIJ<D_]Q<V;j-YAHI75~5j' );
define( 'AUTH_SALT',        'k Zn_w{xB@.oPz{?N-fBo%3qNf%f{7jiI+,A[k:Vo`G0>(Lm0RGqcr ?$;$u?p9&' );
define( 'SECURE_AUTH_SALT', '~(-<!:i);!cr51ZpA]twOs! cefKx~tihIo=DEE/|LpOOLZYLp/URQ{BEL]h0[Q7' );
define( 'LOGGED_IN_SALT',   '$g}naj#Wleu!:P<roRu%[)oc fSA<%f6dMoxfphI%@yxc/S&XoNlH+M& nc#)dgF' );
define( 'NONCE_SALT',       '~@:OK.GL$H3]/B0B)?wHeI/$[K1]~K(Jkd6ao~B8rb.KLbBk3y+?0Ndfqg}L`b6-' );

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
