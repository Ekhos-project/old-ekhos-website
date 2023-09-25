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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'JXa9]MD0xk)AqpnP@Lnr}I6pzsn80s?!3^_qeEc@Y?qbdc,]~*cDM=r;MSqOx|0;' );
define( 'SECURE_AUTH_KEY',  'urgo2S^-SK,Gtxif_s91oZ_$9Q)C|&&![<Ww8J~= kVodr+t{$<n^(+(I;&hpPw.' );
define( 'LOGGED_IN_KEY',    'f8ksik_i&#M6!sN;Ay1n45l%]5@Yabn1.H}VxisAeM l=HntQe`JC]$j wIZiXO[' );
define( 'NONCE_KEY',        'A_(hOlWeA)1H$W3y-=*evQ@Q8,c!z}$Mh^~@8]0wsg!p@zP93+)4!{r<BW9SJiQ}' );
define( 'AUTH_SALT',        'DWE-It0NnMPoO1%a`Eyt/%4 XBb(#=l2s_k#dy1FhIN1#g^E{?>r?R=!XQ*JwK}T' );
define( 'SECURE_AUTH_SALT', '3~t/Fl~X/b02fI![4%i3Mg{n?|>obo_f`_D2PR0*IS/c? km=5|qe rY$,iCQO+g' );
define( 'LOGGED_IN_SALT',   'Hx{K-)z]W(6N&]>JZat@|;jl0m|Xui3d{g9gG$^Xc0U`|d=-W}H1nJ9_Hq V]qRg' );
define( 'NONCE_SALT',       'ov_XBhXtw#3jjt8/G[*6djpC*q>&r^5M>`fV]q5|V+0wJ?4](?KF6@bEd]OA2[VH' );

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
