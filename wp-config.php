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
define( 'DB_NAME', 'plugin_woo' );

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
define( 'AUTH_KEY',         '-@=+N4B1T~7P3hy)_TfY-WY%;2tN6}D=17PX:yW,7.S^!h}X=6~:9:eRjt)(gzt ' );
define( 'SECURE_AUTH_KEY',  '}*|2w>^]uEJ&97z%68hN[tDl^Gpc^*ns<y,9h]9^zN%T#ZQDYB$L@]CP:Y.#N5C(' );
define( 'LOGGED_IN_KEY',    '>M+rIj-Nu|=BG_tSPtZ5*$DtIXlLOLg1zT<1E6tZTJ~SfG]YvqPN%j%` PliBCzK' );
define( 'NONCE_KEY',        '6rN{Hk6|K=u0.xHfGmFiMJx+6LpvfoCY[jfEE#Tb:gR}}JAb0eC[RE~0yf!jFr[P' );
define( 'AUTH_SALT',        '*2(1CG(p/:{W08-*L2 @8D=n1ic>6JARlJk33Gk2Tr]~nf7K-bnpI;fZ_Tj?CTn%' );
define( 'SECURE_AUTH_SALT', '`OmHmDV[?T(FET8L0kk-&u*#(OHy7O^BD-@J$#`_jM;zGqlcs]<ywkFe>~l?4|@A' );
define( 'LOGGED_IN_SALT',   'Ck;/]0MMHN=p.RR9tftHz9>,|4XOIa,a*IrgKS_Q(}2j0o)knDwe+v|Y{Sw&8z-J' );
define( 'NONCE_SALT',       'yKo!wbX`}YPHp)^2fJ8r%QZ5 f:]&A}vc#EDM;.MG1{wV=or6*Tv@3`ZL=BDZD|5' );

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
