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
define( 'DB_NAME', 'phase2-wp' );

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
define( 'AUTH_KEY',         '#LWQVbl($-.u935*B;K:Uv2O9b0k<n92;Lcs(EemNZc7p^?-mMYRT18o<wSD5<YC' );
define( 'SECURE_AUTH_KEY',  'XQCiacs)+g%.7wq0yw*)Qf^nfjXf[gX|u5)QvBuQTQ^TDFhPr1lzeGos#uX95C{&' );
define( 'LOGGED_IN_KEY',    'zW{8i&Kr?^w`f{vl^,QVZ8^kRWAJ45JVrpenD#xv&&e/Pg{f^reE|TR7=Hntj9e/' );
define( 'NONCE_KEY',        '{5jGN@__1gcH)Fm2uj*KuF*Gz_o~dAs]?[y_n@ClULpZhCh%C3*~M$QNf5BGzSlE' );
define( 'AUTH_SALT',        'pz2T}g:*.(M1Yv=9I36@q9Kx-4L~|A%q`P~F/nV;iaPjle-wk>X/b<-wud;&bBvJ' );
define( 'SECURE_AUTH_SALT', 'G=VA,z/P$%dpfQ~ZHn5aya5QhYp_#tg4T8!wW&oayTgCj:9DzJZOO`}J-j+8WYzR' );
define( 'LOGGED_IN_SALT',   '|5+I;[O/DX<BJ1CXF6gPy-4Np?|o_P@2l1nO_401p-K;Hc../R{L483D)Jl <%&K' );
define( 'NONCE_SALT',       'xHJc{9{uN2x&0P[!I6&eq}bZ6[n/#_iMYvt$(zkv|aQbvMMY;]Viv/|&gd(6pTLl' );

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
