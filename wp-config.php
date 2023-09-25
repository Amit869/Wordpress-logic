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
define( 'DB_NAME', 'wordpresslogic' );

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
define( 'AUTH_KEY',         '~C}%l`zPD%Ip4?lKTLjfSD>*]8_C5DbC.f:b,5gH*D!1`>D,~/p,#op&J-ksOoT?' );
define( 'SECURE_AUTH_KEY',  '6=-qulN`HXK`x%I O0IEtbz1<-a7,7lx@dO4(UQ|j6D{vTjA?-x4ZpvN#kvy1)rj' );
define( 'LOGGED_IN_KEY',    'wgVY8,jRz|7m*j]3P64 3TmS-4?{arWURqa`PA_T*!~5L;jW|jFM&TCcH4CRVzEC' );
define( 'NONCE_KEY',        'bDkPV%kh2X Aj}(oAsI@q4:YaSVIn*n@2s~wNLy@UTSMQs?J64Qq^8vbPe*T9bf`' );
define( 'AUTH_SALT',        'L]D[&U=gF;T;1LxrVb1/w*IM90.MT4vK6L0LF(UD~uB)[)lvRt+9cK%P!`!ea0P8' );
define( 'SECURE_AUTH_SALT', '{R*<W<A+KYJfTXzc9MF$y8*g-gfeWZa+*Mu}E1S$gyQHSye|tvb#h:K)tSz2a`8$' );
define( 'LOGGED_IN_SALT',   '7]:?h+ikw^!4FO_symW,/$!z9`bo<AG6|^q?]+Fd,djm$afza069gUn4.Coh>aCA' );
define( 'NONCE_SALT',       '44f9$(`=/?uIJh2>yUZ/bIKJK.Oi#C^$ZXM*JfP!5rS&(oOjnrfL)r/t(vNQbh9W' );

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
