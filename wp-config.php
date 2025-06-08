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
define( 'DB_NAME', 'keto budget' );

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
define( 'AUTH_KEY',         'r=uo3g+;N!0oUWE)=aoR[9h8UR,at:8HV$B7h:|XFB(^X(S7x>O~NaqPmFcnU.tk' );
define( 'SECURE_AUTH_KEY',  'v)3=l|)p)x78fZLR!(f&ggIz,N$QR.tPy?<;$~13M:<W$:/J8f~+x5goLZag@Gei' );
define( 'LOGGED_IN_KEY',    'bOzkJ3h7X3*wgd3/*RsFJl /K!vyAiC%t|Cehyg>>9SH`c+WkHD2{g`)-<Lv!-FN' );
define( 'NONCE_KEY',        'aP7=MKDE#b4lgHYi CXYvR`GP6H-.JA$kz.;(suz=YD?[lfcY$xhR/?-DVLtn0BC' );
define( 'AUTH_SALT',        'X! Eo5s?rrT0l]]x3-XffP_M8!tFbq.(Q!wei+C!a&7MufP(hnVPwO*>=-F5DGl&' );
define( 'SECURE_AUTH_SALT', '.ph{pQmNP~@k83)MHJ^odXSU7+~d+%,4ebeqdG9M8j=;V(k>p21SQU%K:1BW7^:d' );
define( 'LOGGED_IN_SALT',   '[8$juO={G/ 1*8%/wEwOIVoa]da>1Zca/:*Yd(;O,qwBTd.$L?a;-c-kWkgNbH(x' );
define( 'NONCE_SALT',       'noY@tmg=s7b.cWt,iCE}G?6Hvp)MH.w6t oA/CdbG?HoUVHig!{p~*@4(zudriTK' );

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
