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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'PIs_w&+T-Q]p<doEnTZ}=Xl!hnmxfw?%9*f#zO(S5b0[F?)&`w:uV-D833v,P98V' );
define( 'SECURE_AUTH_KEY',  '}.`9,FaX=#8*VVN+:CzD9=z9;/h_@l)RU+~rx^7DpO}/T <aBKdptc_$gvbT&wW_' );
define( 'LOGGED_IN_KEY',    '{lBC>H;l`+B+j.[7pQ9PjbDryBeeG-S1OSAE8zBQp+OHc%wN(v.@n%1r7A+|k|2w' );
define( 'NONCE_KEY',        '}1bfz4(_k/V%LIXsrsW:f5[J_Ss -Jwjc#8_h%@; qi/jE9]StNFt{fAU|W*J~[j' );
define( 'AUTH_SALT',        'IsF#Y<sv8u2[;OP&LHEzQ<3a`Yzn7k{:&nJAm#7P Fp^I:*XfchrVG>3{SC|oDan' );
define( 'SECURE_AUTH_SALT', '47.,-c/0.PP73.SiNAU LB9ei.IP$*=cZ<@mtb;nZK3ZzR}SZi~ZN?Q[+mSBHD!-' );
define( 'LOGGED_IN_SALT',   '6m=u^&xCYR<WauO~lIO P^Cvl*(GA~dO7VWAkJX8gbl.SqWTn0(;z~,l3s|^WDK8' );
define( 'NONCE_SALT',       '/p8rXr(+!y_RmfVv;OLqN(DI%!=#I/`R)]k/g&,${)-!JcC<gm06@M3XgB:Q10!a' );

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
