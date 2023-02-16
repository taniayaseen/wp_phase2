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
adfdghgjhkjlk
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
define( 'AUTH_KEY',         'iyhOaZIZ3&Bkh[+2nMZk+H kVKtl}u|PTq2?$W Gvs~JcEq,xW?[+| a=J|ZzB(w' );
define( 'SECURE_AUTH_KEY',  'aEPMW^6 R(=ew9w$(a3lCf8l8< -UAcSOX{7I7`Z#S68vQjF~vRj?zx04d,Reluw' );
define( 'LOGGED_IN_KEY',    'c<sE-J#t}J)8#xVki4B^2D$OC{D]^BdYrz=CEp>EqE`B<Vp$3W5O^kPv:4m2X9#6' );
define( 'NONCE_KEY',        'u@dOzot&]S8EJKa:gtX{2l%v%Pj`-7z,e;e{2#oFQg.!L4xst;%c+O^j4JD=N9!=' );
define( 'AUTH_SALT',        's+~q:-c2i/KEhs>nOAoa[p>f10NK>-q-V2q(R77xVh[FHXu@1$3EQk]lG[`UKNqJ' );
define( 'SECURE_AUTH_SALT', '.U9=*zI|Q9.AW; )N7~?]~H`sc=3]n<c3U<`sPh~foH]=-!BGAryn/`$lfbNzM*7' );
define( 'LOGGED_IN_SALT',   'AqpLCC*3@8.{MyZAr/,ZUj$G9BU0P3@@gi#fc4P$ 3|WtT6x%-_CvQznsMck4-6d' );
define( 'NONCE_SALT',       'Q~E<)Y40Q9OH/gGf+Gr6vMF8UB6H1![[C.peT-JK}usveL#;KZ#$;p4!eBB*0cYJ' );

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
