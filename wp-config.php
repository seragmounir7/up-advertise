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
define( 'DB_NAME', 'up-advertise' );

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
define( 'AUTH_KEY',         'X[Jz^z@fBxob`8P#Iuek> `wI9:yC&MSGuX&K7*`nnFxo,>;v8b4sd~+]47p;KZ&' );
define( 'SECURE_AUTH_KEY',  '`?5T};RA0r_v]YYsPr`G9asq^mxsIv4LCowdV;(++vW+V^F%).;YR0:k<M}OB,(c' );
define( 'LOGGED_IN_KEY',    'rM^A|U$Z?#sWUv+!fXrc$h=BO7<%b[sCt)k&UUP4h8 /<EV Q?Za(@Ux[dmPc{j&' );
define( 'NONCE_KEY',        'c^$xwya-kD07MZoc:S.67#%ZF9#pdBp%wnoF <Ot:E@pi&(_JxpyMtk@.S)=!;Zt' );
define( 'AUTH_SALT',        'iW~-1|2N6Y1Ft!!E>Io5oX3,:Yvfj4,oOmi6S/0w)0Fu%CgrTUbes74yb{j|/D`9' );
define( 'SECURE_AUTH_SALT', '?AnUyIg8RQE:@t, _?E0)J%bXKL<P_`7s@S.:leG;UeVf=J}f?B2JAl`eDS9@U]u' );
define( 'LOGGED_IN_SALT',   '+(Gd`)P QVwRMw#NzPE~@EtA,]}[**0gI-UnXO*n2/~F2^ <c.Z;qjFpJE[F/:ei' );
define( 'NONCE_SALT',       '`j[n~Phm6+uNcg}!of`P;46H|f-B[q7Dzq?f.E[rPgQElRdSO{h`(8b~4!^V1P@`' );

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
