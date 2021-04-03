<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oluvic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XN_KVz-|qL(.1OWHM0JRw1I+#,BZ_a`!E&#N!91JQVN6a-i%!<>:Owy63eE`Mo5(' );
define( 'SECURE_AUTH_KEY',  '/dN^uaL2=*,]NIwr#=<;X9t%xkJ-DQOM8kovhK}ORW(yEbHOl)!k,R&wi#)O.)EN' );
define( 'LOGGED_IN_KEY',    '|f!VnN>PhS4jXgU6t$[fl%> y;%>,MQF_n_#e>c=0O5gB)YB4D`s96s voI6yu9V' );
define( 'NONCE_KEY',        ' <6|9m=k:90l%F~:VvLx%*d5ZI[t#DAG5/;LvOOMu?EJuy~L=ZGs}{c(,a{|4drN' );
define( 'AUTH_SALT',        'K^hB-VdKfuV7^Qh+h`E$~GY1*DBAYG02~]x 2gtX$P&i8.,U)n7YuX$Ymd7Q7:gg' );
define( 'SECURE_AUTH_SALT', '[9,5+L(jJc#y&;bUwUVo~*P!FT=>D&!@7_E! .(T0I@v:3V&N1Yc71S#gNA-44nG' );
define( 'LOGGED_IN_SALT',   '=fl)*$G2&<36&2~]TP3g>^M0D(0#>W?KI$|b ]tOoM=HHox&MO &FRNulyWy)kF=' );
define( 'NONCE_SALT',       '2*o9LA{y@4_CLEz{yLna1jFxA&^RlCq<Qasg3fY.~$IlDO@zy/v$_(]hHv|k0TH(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
