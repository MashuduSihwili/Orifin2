<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'orifin2_db' );

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
define( 'AUTH_KEY',         '=dmi3k3P97/=a@>P7bS&gNW%-KVty~dUjp$ <b``h0?>I77Tq#qezaj8-N+7/.&I' );
define( 'SECURE_AUTH_KEY',  '(ow;~Dq8AP462!`FV~+r.OO 3OS@.K)pLV1XCL4riz1v;{B`LB#J-cf8~pb`bH}`' );
define( 'LOGGED_IN_KEY',    'zn4wH4]~r hA@xqEsOfF_vVvzoE6$*U((u_,=^s2a>|&NTIE$AB18#/{Hl3FwqZz' );
define( 'NONCE_KEY',        '=Sr$giSbrvb(aVP{r^57nZ)v!XC2Z jJ:vp*5F:TMtT:8@s8WB5r~W4t~@@dW[U*' );
define( 'AUTH_SALT',        'EbcG*.8*-M<,tlnOGKuD*)G4? 4M1V9D#&Wg]abOz24-4S(4C09+#%)S`w~WYxj1' );
define( 'SECURE_AUTH_SALT', 'rW.SpE|:Q>P}Nk4`_BSh[&}Bp;fLeXHy6+w-@dDQ!c+MZ^%E,{bQtPqRVRs;^FNQ' );
define( 'LOGGED_IN_SALT',   '[MEN-V`rulmr4cR2~]?rZ0)7*. flsYIzwstB,u>69}/%0ndw{8jy?Q1(h%K87Kq' );
define( 'NONCE_SALT',       ' DOv2`Nz.G!uZW6N Z;mOs$Jy`3{+;?}#wnX402*s3;S0hy=c:}jXI@8%tA<n);x' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
