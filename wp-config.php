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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         'exhD5V8ag)}.SyO[V/bS(GC:]9hh]h `NL!l6R-kRnybV8OH{{{g:Ru=r&=N5O@A' );
define( 'SECURE_AUTH_KEY',  '>Q$3<qmi@$0O&;,ejH5`>!v&dKV}q F0L^:uKI_JIZQ0dUQRo[$`seIRO:qj@{uo' );
define( 'LOGGED_IN_KEY',    'bW)^ELK(2&rGA@/bwakuen^Cn$jz4jIKBS5?Y:bJf+`>RsJrO$k VCGie5[T&,r9' );
define( 'NONCE_KEY',        'y#[R9}K;C=pN Z8/|leDKClnX:7z;}miVGe?0+!JDPB,FR7 P Jd5i4JbWN.p.iE' );
define( 'AUTH_SALT',        ';Ra3:Z-6%_+6`iq,{Fw4.E_A?D*!x~O&B_Hy|FQnL+)L(2wc&sK&fqYF)JDS}FR[' );
define( 'SECURE_AUTH_SALT', '!KxM{Uab /-{Kk)1<L[Qx89iqatPlY>wU<gHEWRwTn7v&xz>d+I*Q(^(|,5bcV g' );
define( 'LOGGED_IN_SALT',   '!&|wutinAIgEwGPoR5Z3[Es2YyAmKv7q *O5G!<r6RqLf#vEbD^e[s7~Mr#jG=Z!' );
define( 'NONCE_SALT',       'o41Hc>@ZEo #Gr3J,4*-EpQP_Ad,nWaw<;xsDkMJeTtR:w#jvi]Bw_TYzJA$,-=%' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
