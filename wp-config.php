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
define( 'DB_NAME', 'WooCommerce' );

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
define( 'AUTH_KEY',         '- =VOtj<HvxI+EY/?TNy@f]lr<XI4=c+<S^~K]sxRgNb@YMklf@ielRD>|^gD>62' );
define( 'SECURE_AUTH_KEY',  ')r~K#P(8Mlp7`z+@H)[#rm{0H=gq*(pl@VEyim48p+Ecz]0GP^iqCT{5-)Y,Z&%w' );
define( 'LOGGED_IN_KEY',    '*LZ!>/yt7IYJ&&?/SGJoC4UiVIer|@+PBLW_2 y)XG)n>> y?7o(<vW6nAe*n*4f' );
define( 'NONCE_KEY',        'y>BnC^C@YT4}u=<W}tuT>L~,sF= #$kx|C|ac_7^7$B<yNv=I,!2k9%:F8Y:x^Rp' );
define( 'AUTH_SALT',        '&|]490/,<og7v;f<L8f=ap.;[CF30t9Q8BKznW4iSsW[ZKyh#R[{(0X|$dH^1}L;' );
define( 'SECURE_AUTH_SALT', 'p>qIj0;Ne%HV|9o%6|DK;Gow13lzN5#d*v*ldF[82nbC<X8T/8FsSe X~tn%V[~>' );
define( 'LOGGED_IN_SALT',   'kzK4.m JHZdgVZp{uJ@&OIf)0slY*_0WWxvhrgcW$^T Z2LmQ@zEf)3z<(R{EpY}' );
define( 'NONCE_SALT',       'k3?j&%jc.R?hjm6-tB)XZ<AM/d.j8(gYj/@$c1E&M[zZ.YQ%;<<#bXH,J?s5Z~E6' );

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
