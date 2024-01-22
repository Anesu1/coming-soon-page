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
define( 'DB_NAME', 'uncommon' );

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
define('FS_METHOD', 'direct');
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
define( 'AUTH_KEY',         'i.)$NLGWlTBB`Q@jolaRNu^>n:d+ezqS>ALw_?6-:]Kq+R,py17XnzVFj7_ws b&' );
define( 'SECURE_AUTH_KEY',  'lVQ_Uq.gCwrQCB}$R/?+ZqVf5&(2@CG&8;ky$Xm{8Sbz0j(4C:TNj{34Yp(@MGZT' );
define( 'LOGGED_IN_KEY',    '?NR2+a$P[:gibGG0C5LJK(c}=6Us]=ImR,^2m;4sL.r|MqLX71-+#.U5$;Z<zc;M' );
define( 'NONCE_KEY',        'V{<&80-ZK?4*lnI/$YNuq{)$V)Xk2sxnV0W#QsXEmb 4Y]gxh]37nBS;O]w,`8#D' );
define( 'AUTH_SALT',        'wy>wn3arK|bH&_4>q%}Lp^FXg&<(x1K>vN0zcMGZh5}y;}XG6i:mY$}]WJD:$d&:' );
define( 'SECURE_AUTH_SALT', ':}<J!)60K,NzqIBEbsdW2RCQdk:[l&RN$Koa$Wnd,4zfSR`-cJ+6EzW79R40.)l%' );
define( 'LOGGED_IN_SALT',   'Pb>K{QN67d!f+|e%0()(0`bzA$F XLS{f}OXN@G.M^[p]WlT@4+0B<Iju;HA10:5' );
define( 'NONCE_SALT',       '|wry2K,fQkMJO &[%JXD%2MSE[P44%A7v-7>2-><h175$`&d%9_t*y%T0s@M7cT(' );

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
